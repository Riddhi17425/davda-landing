<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('auth.login');
    }
    public function admin(){
        return view('admin.admin');
    }
    // public function index(Request $request)
    // {

    // $categories = Category::select('id', 'category_title', 'url')
    //         ->orderBy('id')
    //         ->get();
    
    //     $amenities = Property::select('title', 'image', 'category_id')
    //         ->with('category:id,url')
    //         ->get()
    //         ->map(function($prop) {
    //             return (object) [
    //                 'title'         => $prop->title,
    //                 'image'         => $prop->image,
    //                 'category_slug' => $prop->category ? $prop->category->url : 'all',
    //             ];
    //         });
       
    
    //     return view('front.dashboard', compact('categories', 'amenities'));
    // }

    public function index(Request $request)
    {
        $categories = Category::select('id', 'category_title', 'url')
            ->orderBy('id')
            ->get();
    
        $amenities = Property::select('title', 'image', 'category_id')
            ->with('category:id,url')
            ->get()
            ->map(function($prop) {
                return (object) [
                    'title'         => $prop->title,
                    'image'         => $prop->image,
                    'category_slug' => $prop->category ? $prop->category->url : 'all',
                ];
            });
    
        return view('front.dashboard', compact('categories', 'amenities'));
    }

    public function inquirystore(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'interest' => 'required|array',
            'interest.*' => 'string', 
            'message' => 'nullable|string|max:1000',
        ]);

        $validated['interest'] = implode(',', $validated['interest']);
        Contact::create($validated);
        $areaOfInterest = null;
        if(isset($request->interest) && is_countable($request->interest) && count($request->interest) > 0){
            $areaOfInterest = $validated['interest'];
        }
        
        // STORE IN GOOGLE SHEET
        $timestamp = Carbon::now()->format('Y-m-d H:i:s');
        $passedData = [
            'inquiry_from' => 'davda-landing',
            'fullname' => $request->full_name?? null,
            'email' => $request->email ?? null,
            'contact_no' => $request->phone ?? null,
            'note' => $request->message ?? null,
            'area_of_interest' => $areaOfInterest,
            'date'      => $timestamp,
        ];
       
        // Send to Google Sheets
        try {
            Http::withBody(json_encode($passedData), 'application/json')
                    ->post('https://script.google.com/macros/s/AKfycbwtUjIHLVpio6dcdIcOSaL46zRiBxNRoFhOy5Rnv9UbYto5Me5tB3erUOCJ_ZIQe-Lh1Q/exec');
           
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception (WhatsApp Inquiry):', [
                'message'   => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'data_sent' => $passedData
            ]);
        }

        return redirect()->route('thank-you')
                        ->with('success', 'Your inquiry has been submitted successfully!');
    }

    public function thankyou()
    {
        $metatitle = "";
        $metadescription = "";
        return view('front.thank-you',compact('metatitle','metadescription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard()
    {
        $title="";
        $description="";

        return view('front.dashboard',compcet('title','description'));
    }
 
}