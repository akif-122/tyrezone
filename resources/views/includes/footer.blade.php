</div>
<!-- FOOTER SECTION START -->
<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-4 text-center text-sm-start">
                <h5>Useful Links</h5>
                <ul>
                    <li><a href="{{ route('about') }}"><i class="fa-solid fa-angle-right"></i> About Us </a></li>
                    <li><a href="{{ route('contact') }}"><i class="fa-solid fa-angle-right"></i> Contact Us </a></li>
                    <li><a href="{{ route('gallery') }}"><i class="fa-solid fa-angle-right"></i> Gallery </a></li>
                    <li><a href="{{ route('blogs') }}"><i class="fa-solid fa-angle-right"></i> Blogs </a></li>

                    {{-- <li><a href="#"><i class="fa-solid fa-angle-right"></i> Sitemap </a></li>
                      <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies </a></li>
                      <li><a href="#"><i class="fa-solid fa-angle-right"></i> Privacy Policy </a></li>
                      <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies Policy </a></li> --}}
                </ul>
            </div>


            <div class="col-lg-3 col-sm-6 mb-4 text-center text-sm-start">
                <h5>Tyre Manufacturers</h5>
                <ul>
                    @foreach ($product as $product)
                        <li><a href="{{ route('manufacturer', ['manufacturer' => $product->name]) }}"><i
                                    class="fa-solid fa-angle-right"></i> {{ $product->name }}</a></li>
                    @endforeach

                </ul>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4 text-center text-sm-start">
                <h5>Contact Us</h5>
                <ul>
                    <li><a href="{{ route('contact') }}">Buckley Transport, The Old Gas Works, Higginshaw Lane, Oldham,
                            OL2
                            6HQ</a></li>
                    <li><a href="tel:07563896325">07563 896325</a></li>

                </ul>
            </div>



            <div class="col-lg-3 col-sm-6 mb-4 text-center text-sm-start">
                <h5>Social Media</h5>
                <ul class="social-icon list-unstyled d-flex justify-content-center justify-content-sm-start flex-wrap">
                    <li>
                        <a href="https://www.facebook.com/TyreZoneOldhamLTD"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>

            </div>


        </div>



        <div class="footer-bottom d-flex align-items-center justify-content-center flex-column">
            <p class="mb-0">©Copyright Tyre Zone 2024 - Made with <span>❤</span> in the UK by <strong><a href="https://webspires.co.uk/?utm_campaign=tyrezone" target="_blank">Webspires</a></strong> </p>
            <!-- <div class="d-flex align-items-center justify-content-center flex-wrap gap-1">
            <div class="">
                <img src="assets/imgs/payzone.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/Barclaycard_Logo.svg.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/mastercard.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/Visa-Logo-PNG-Image.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/ecard.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/maestro.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/apple-pay.png" alt="">
            </div>
            <div class="">
                <img src="assets/imgs/android-pay.png" alt="">
            </div>
        </div> -->
        </div>
    </div>

</footer>
<!-- FOOTER SECTION END -->


</div>


<!-- JQUERY  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- BOOTSTRAP 5 JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/app.js"></script>

<script></script>

</body>

</html>
