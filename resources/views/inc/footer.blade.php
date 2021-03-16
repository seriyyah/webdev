   <!-- Footer Section Start -->
      <footer>
        <div class="container">
          <div class="row">
            <!-- Footer Links -->
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul class="footer-links">
                <li>
                  <a href="{{ route('home') }}">Главная</a>
                </li>
                <li>
                  <a href="/#pricing">Услуги</a>
                </li>
                <li>
                    <a href="/#pricing">Блог</a>
                  </li>
                <li>
                  <a href="{{ route('contact') }}">Контакты</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="copyright">
                <p class="copyright text-muted">Copyright &copy; {{ Voyager::setting('site.title') }} {{ date('Y') }}</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="lnr lnr-arrow-up"></i>
      </a>

      <div id="loader">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>
