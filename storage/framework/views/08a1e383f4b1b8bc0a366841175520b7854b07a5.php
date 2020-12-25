    <footer class="page-footer font-small indigo">
        <div class="container">
            <div class="footerAbout">
                <img src="<?php echo e(asset('assets-frontend/images/footer-logo.png')); ?>">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitatioaborum.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 footersection HELPsection">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footersection Followsection">
                    <h4>Follow us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google Plus </a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footersection Recent-Post">
                    <h4>Recent Post</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footersection Contacts Followsection">
                    <h4>Contacts</h4>
                    <ul>
                        <li>
                            <address><b>address</b> 31 Divison New York United State Of Aeerica</address>
                        </li>
                        <li>
                            <address><b>Website</b> www.abc.com</address>
                        </li>
                        <li>
                            <address><b>Email</b> Example123@gmail.com</address>
                        </li>
                        <li>
                            <address><b>Phone</b> 830837390</address>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
        <!-- Footer Links -->

        <script>
        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 10,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
</body>

</html><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/footer.blade.php ENDPATH**/ ?>