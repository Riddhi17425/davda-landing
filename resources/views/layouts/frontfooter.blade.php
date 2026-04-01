<!-- Footer -->
<footer class="footer mt-100">
    <div class="ym-container">
        <div class="top_footer flex">
            <h4 class="about_title text-white">Our Projects</h4>
            <div class="ft_logos flex">
                <a href="{{ url('https://intelliworkz.co.in/bellevue-vieraa/')}}" target="_blank" class="footer-link">
                    <img src="{{ asset('public/front/images/ft-bvv.png') }}" alt="Bellevue Viera">
                </a>
                <a href="{{ url('https://intelliworkz.co.in/bellevue/') }}" target="_blank" class="footer-link">
                    <img src="{{ asset('public/front/images/ft-bvl.png') }}" alt="Bellevue Luxuria">
                </a>
                <a href="{{ url('https://intelliworkz.co.in/bellevue-club/')}}" target="_blank" class="footer-link">
                    <img src="{{ asset('public/front/images/ft-btc.png') }}" alt="Bellevue The Club">
                </a>
            </div>
        </div>
        <div class="center_ft">
            <img src="{{ asset('public/front/images/ft-davda.png') }}" alt="" class="img-fluid mb-4">
            <p>A trusted real estate developer
               creating thoughtful communities
              built on quality and integrity.</p>
            <!--<p>Building legacies since 1999. Premium residential developments crafted with excellence and-->
            <!--    delivered with trust.</p>-->
        </div>
        <div class="ft_bottom flex">
            <div>
                © <?php echo date('Y'); ?> ALL RIGHT RESERVED By Davda Infrastructure Pvt. Ltd.
            </div>
            <div class="flex gap-4 items-center">
                <a href="https://www.facebook.com/DIPL.ASIA" target="_blank">
                    <img src="{{ asset('public/front/images/ft_meta.png') }}" alt="facebook">
                </a>
                <a href="https://www.instagram.com/davdainfra/" target="_blank">
                    <img src="{{ asset('public/front/images/ft_insta.png') }}" alt="insta">
                </a>
                <a href="https://www.linkedin.com/company/davda-infrastructure-pvt.-ltd/" target="_blank">
                    <img src="{{ asset('public/front/images/ft_linkedin.png') }}" alt="linkedin">
                </a>
            </div>
            <div style="display:none;">
                <a href="">Privacy policy</a>
                <span>|</span>
                <a href="">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="{{ asset('public/front/js/script.js') }}"></script>
</body>

</html>