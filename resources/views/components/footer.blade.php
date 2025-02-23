<footer class="footer-section">
    <div class="container-fluid">
        <div class="footer-content">
            <div class="footer-col brand-col">
                <div class="footer-brand">
                    <img src="/media/logoPresto.png" alt="Logo Presto" height="60">
                </div>
                <p class="copyright">© 2024 Presto.it - {{__('ui.copyright')}}</p>
            </div>

            <div class="footer-col social-col">
                <h6 class="footer-title">{{__('ui.socials')}}</h6>
                <div class="social-links">
                    <a href="https://www.facebook.com/" class="social-link" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="social-link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://it.pinterest.com/" class="social-link" target="_blank">
                        <i class="fab fa-pinterest"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="social-link" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.youtube.com/" class="social-link" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <div class="footer-col revisor-col">
                <div class="become-revisor">
                    <h6 class="footer-title">{{__('ui.team')}}</h6>
                    <p class="revisor-text">{{__('ui.revisor')}}</p>
                    <a href="{{route('revisor.form')}}" class="btn btn-revisor">
                        <span>{{__('ui.become')}}</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>