@include('layouts.frontheader')

<style>
    .thank_wrapper{
        margin:25vh 0;
        text-align:center;
    }
</style>
<div  class="thank_wrapper">
    <div class="ym-container">
            <h1>Thank You</h1>
        <p style="margin:20px 0;">Your enquiry has been submitted successfully.<br>
        We will get in touch with you shortly.</p>
            
           <a href="{{ url('/') }}" class="btn-enquire">
                    <span>Go to Homepage</span>
                </a>
        </div>
   </div>

@include('layouts.frontfooter')