@extends('layouts.app')
@section('title-block')Секция по информации о Контенте @endsection

@section('content')
@include('inc.nav2')

<div class="container mt-5 mb-5">
<section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="img/responsive.png" class="img-fluid" alt="">
          {{-- <div class="modal-footer d-flex justify-content-center">
            <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm">Свяжись с нами!</a>
            </div> --}}
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>Наполнение сайта контентом.</h3>
          <p class="font-italic">
            Эффективность сайта практически полностью зависит от его содержания.
          </p>

          <p>
            Стоимость размещение контента на сайт зависит от объема работ, сроков реализации и от вида контента.
            Стоимость размещение наиболее популярного текстового контента при условии стандартных сроков дедлайна и
            добавлении нескольких графических элементов на каждую страницу представлена ниже на веб сайте.
          </p>
        </div>
      </div>

    </div>
  </section>

  <section id="counts" class="counts mt-5">

    <style>
        .pricing-table .pricing-details span {
            font-size: 18px;
        }
    </style>
    <div class="row pricing-tables">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pricing-table">
            <div class="pricing-details">
              <h2>Создание новых страниц</h2>
              <ul>
                <li>до 20 стр. -<span>$ 55</span></li>
                <li>20 - 50 -<span>$ 1.80</span>/стр</li>
                <li>50 - 100 -<span>$ 1.60</span>/стр</li>
                <li>100 - 200 -<span>$ 1.40</span>/стр</li>
                <li>200 - 500 -<span>$ 1.20</span>/стр</li>
                <li>от 500 -<span>$ 1</span>/стр</li>
              </ul>
            </div>
            <div class="plan-button">
                <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm">Заказат услугу</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pricing-table">
            <div class="pricing-details">
              <h2>Замена, обновление контента</h2>
              <ul>
                <li>до 20 стр. -<span>$ 36</span></li>
                <li>20 - 50 -<span>$ 1.40</span>/стр</li>
                <li>50 - 100 -<span>$ 1.20</span>/стр</li>
                <li>100 - 200 -<span>$ 1</span>/стр</li>
                <li>200 - 500 -<span>$ 0.90</span>/стр</li>
                <li>от 500 -<span>$ 0.70</span>/стр</li>
              </ul>
            </div>
            <div class="plan-button">
                <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm">Заказат услугу</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pricing-table">
            <div class="pricing-details">
              <h2>Оптимизация контента</h2>
              <ul>
                <li>до 20 стр. -<span>$ 5.50</span>/стр</li>
                <li>20 - 50 -<span>$ 5.10</span>/стр</li>
                <li>50 - 100 -<span>$ 4.70</span>/стр</li>
                <li>100 - 200 -<span>$ 4.40</span>/стр</li>
                <li>200 - 500 -<span>$ 4</span>/стр</li>
                <li>от 500 -<span>$ 3.76</span>/стр</li>
              </ul>
            </div>
            <div class="plan-button">
                <a href="" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" data-toggle="modal" data-target="#modalContactForm">Заказат услугу</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


</div>
@endsection
