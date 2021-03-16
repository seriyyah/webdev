@extends('layouts.app')

@section('title-block')Настройка и отимизация сайтов на платворме PHP и CMS @endsection

@section('content')
    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Наши Услуги</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">В не зависимости. вам нужна оптимизация или создание нового контента, вы в правильном месте</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-pencil"></i>
              </div>
              <h4>Заполнение контента</h4>
              <p>Наполняем сайт контентов: текстовым, графическим, аудио- и видеоконтентом.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-code"></i>
              </div>
              <h4>Разработка сайтов</h4>
              <p>Разрабатываем сайты на базе PHP и Js. Высоко функциональные и отзывчивые веб приложения с 0</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-mustache"></i>
              </div>
              <h4>Оптимизация сайтов</h4>
              <p>Оптимизация и справлине не поладок на сайте. Работаем так же с CMS зазработаными сайтами. Оптимизируем под более автомизированую работу.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">некоторые особенности</h2>
          <hr class="lines">
          <p class="section-subtitle">Мы всегда выкладываемя на все 100% что бы вы получали только лутчший результат! <br> Это только малая часть наших особиностей</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Настройка Форм</h4>
                      <p>Чиним и настраиваем формы обратной связи.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>Полностью Функциональный</h4>
                      <p>Чиним не исправности вашего сайта.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Оптимизация под SEO</h4>
                      <p>Создание sitemap, прописание тегов тайтла и описание под поисковые системы</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Кастомизация</h4>
                      <p>Настраиваем любой сайт, чистим от вирусов, создаём бекапы, переносим сайты</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="show-box">
              <img class="img-fulid" src="img/laravelogo.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Не Большое Портфолио</h2>
          <hr class="lines">
          <p class="section-subtitle">Примеры наших работ. <br> Мы всегда рады обрадовать вас и выполнить высоко качественую роботу .</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                Все
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Дизайн
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Зазработка
              </a>
              {{--  <a class="filter btn btn-common" data-filter=".print">
                Print
              </a>  --}}
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/blog.png" alt="" />
                  <a class="overlay lightbox" href="img/portfolio/blog.png">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/print.png" alt="" />
                  <a class="overlay lightbox" href="img/portfolio/print.png">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/ecom.png" alt="" />
                  <a class="overlay lightbox" href="img/portfolio/ecom.png">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/contacts.png" alt="" />
                  <a class="overlay lightbox" href="img/portfolio/contacts.png">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/comments.png" alt="" />
                  <a class="overlay lightbox" href="img/portfolio/comments.png">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/movie.png" alt="" />
                  <a class="overlay lightbox" href="img/portfolio/movie.png">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Видео Рабочего процесса</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Не большое видое самого процеса создание и оптимизации сайта.</p>
                <a href="https://www.youtube.com" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Цены</h2>
          <hr class="lines">
          <p class="section-subtitle">Ценны зависят от услуги и её сложности! <br> Для более дитальной инфомации услуг напишите нам или проследуйте дальше на детальную страницу.</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Заполнение контента</h2>
                <span>от $36</span>
                <ul>
                  <li>Создание Новых Страниц</li>
                  <li>Замена или Обновление Контента</li>
                  <li>Оптимизация Контента</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="{{ route('content') }}" class="btn btn-common">Подробнее</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Разработка <br> сайтов</h2>
                <span>от $200</span>
                <ul>
                  <li>Сайт - Визитка</li>
                  <li>Корпоративный Сайт</li>
                  <li>Интернет-Магазин</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="{{ route('web_dev') }}" class="btn btn-common">Подробнее</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Оптимизация сайтов</h2>
                <span>от $20</span>
                <ul>
                  <li>Исправление на поладок</li>
                  <li>Чистка от вирусов</li>
                  <li>Оптимизация под SEO</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="{{ route('web_optima') }}" class="btn btn-common">Подробнее</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-clock"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1589</span></h3>
                <h4>Working Hours</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-briefcase"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">699</span></h3>
                <h4>Completed Projects</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">203</span></h3>
                <h4>No. of Clients</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-heart"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1689</span></h3>
                <h4>Peoples Love</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Наша Команда</h2>
          <hr class="lines">
          <p class="section-subtitle">В нашу команду в ходят только опытные и ответственые сотрудники! <br> Наши специалисты всегда рады вам помочь.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team1.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Sergiy</h4>
                  <p>Chief Technical</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team2.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Eldar</h4>
                  <p>Designer & Technican</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team3.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Igor</h4>
                  <p>Back-end Dev</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img class="img-fulid" src="img/team/team4.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Arseniy</h4>
                  <p>Back-end Dev</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="img/testimonial/customer1.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Jone Deam</h3>
                  <span>Andrey</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer2.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Alexander</h3>
                  <span>Graphic Designer</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer3.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Stes</h3>
                  <span>CEO</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer4.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Masha</h3>
                  <span>CEO</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial Section Start -->

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Не большой блог</h2>
          <hr class="lines">
          <p class="section-subtitle">В этом разделе мы будем публиковать новости и предстоящии обновления.<br> Любой желающий может принимать участие в даном разделе.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item" style="display: -webkit-inline-box;">
            <!-- Blog Item Starts -->
            @foreach ($posts as $post )
            @include('blog.blogfrommain', ['post' => $post])

             @endforeach
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
        <a href="{{ route('blog') }}" class="btn btn-common">Перейти к Блогу</a>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

@endsection

