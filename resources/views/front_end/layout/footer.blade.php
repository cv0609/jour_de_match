    <!-- footer area start -->
    <footer class="footer py-5" style="background-image: url(assets/img/footer/footer-bg.jpg);">
        <div class="container">
            <div class="footer-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="footer-blocks footer-logo">
                            <div class="logo-bottom">
                                <a href="{{ route('home') }}" style="background-image: url('{{asset('assets/img/logo/logo.svg')}}' );"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="footer-blocks footer-menus">
                            <h3>
                                Liens rapides
                            </h3>
                            <ul>
                                <li><a href="{{ route('home') }}">Maison</a></li>
                                <li><a href="{{ route('privacy') }}">Politique de Confidentialité</a></li>
                                <li><a href="{{ route('terms') }}">Conditions Générales d'Utilisation</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="footer-blocks footer-socials">
                            <h3>
                                Connectons-nous
                            </h3>
                            <div class="social-tags-container">
                                <a href="https://www.facebook.com/" target="__blank" class="social-icons social-fb">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://x.com/" target="__blank" class="social-icons social-twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="__blank" class="social-icons social-insta">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-ssl-wrap">
                <div class="copyright-wrap">
                    <p>
                        Copyright &copy; {{ date('Y') }} Jourdematch.co All Rights Reserved.
                    </p>
                </div>
                <div class="ssl-container">
                    <div class="ssl-logo" style="background-image: url('{{asset('assets/img/logo/logo.svg')}}' );"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
