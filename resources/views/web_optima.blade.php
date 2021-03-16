@extends('layouts.app')
@section('title-block')Секция по информации о Контенте @endsection

@section('content')
@include('inc.nav2')

<div class="container mt-5 mb-5">
<section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="img/sql.jpg" class="img-fluid" alt="">
          <div class="modal-footer d-flex justify-content-center">
            <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm">Свяжись с нами!</a>
            </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Оптимизация Сайтов.</h3>
            <p class="font-italic">

            </p>
            Мы специализируемся в Оптимизации сайтов на платформе как и PHP так и CMS. Наши сотрудники исправят все не поладки касательно
            вашего сайта от Вирусов до не работающих скриптов. Все цены зависят от того какая платформа у сайта и сложность не поладки.
            Создание sitemap, оптимизация под SEO, перенос сайта, бекап и все подобные углуги предоставляюстся нами
            <p>

        </div>
      </div>

    </div>
  </section>
  <section id="counts" class="counts mt-5 mb-5">
    <div class="row pricing-tables">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="pricing-table">
          <div class="pricing-details">
            <h2>САЙТ - ВИЗИТКА</h2>
            <span>От $ 200</span>
            <ul>
              <li><small>от одной недели запуск</small></li>
              <li>установка и запуск сайта</li>
              <li>SSL сертификат</li>
              <li>Адаптивный Дизайн</li>
              <li>Стартовые настройки по SEO</li>
              <li>Скрипты(карты, фомы, изображение)</li>
              <li>Создание раздела под новости</li>
              <li>Сылки на социальные сети</li>
              <li>-</li>
              <li>-</li>
              <li>-</li>
              <li>-</li>
            </ul>
          </div>
          <div class="plan-button">
              <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm1">Заказать</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="pricing-table">
          <div class="pricing-details">
            <h2>корпоративный сайт</h2>
            <span>от $290</span>
            <ul>
              <li><small>от двух недель запуск</small></li>
              <li>установка и запуск сайта</li>
              <li>SSL сертификат</li>
              <li>Адаптивный Дизайн</li>
              <li>Стартовые настройки по SEO</li>
              <li>Скрипты(карты, фомы, изображение)</li>
              <li>Создание раздела под новости</li>
              <li>Сылки на социальные сети</li>
              <li>Каталог</li>
              <li>-</li>
              <li>-</li>
              <li>-</li>
            </ul>
          </div>
          <div class="plan-button">
              <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm1">Заказать</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="pricing-table">
          <div class="pricing-details">
            <h2>ИНТЕРНЕТ-МАГАЗИН</h2>
            <span>от $420</span>
            <ul>
              <li><small>от месяца запуск, CMS 24 дня</small></li>
              <li>установка и запуск сайта</li>
              <li>SSL сертификат</li>
              <li>Адаптивный Дизайн</li>
              <li>Стартовые настройки по SEO</li>
              <li>Скрипты(карты, фомы, изображение)</li>
              <li>Создание раздела под новости</li>
              <li>Сылки на социальные сети</li>
              <li>Каталог, сортировка</li>
              <li>Подключение Почты</li>
              <li>Платёжные системы</li>
              <li>Удобное оформление Заказов</li>
            </ul>
          </div>
          <div class="plan-button">
              <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm1">Заказать</a>
          </div>
        </div>
      </div>

    </div>

  </div>
  </section>


</div>
@endsection
