@extends('layouts.app')
@section('title-block')Свяжись с Нами @endsection

@section('content')
@include('inc.nav2')



<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Напишы нам</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Напишы нам и свяжимя с вами как только будет возможность. Если вы спишите то можете не заполнять номер телефона.</p>
<div class="row">

        <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5" style="left: 155px;">

        <style>
            .form-control {
                border-color: #7a1818;
            }
        </style>

        <form action="contact" method="POST" class="form">
            {{ csrf_field() }}

            <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">

                        <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">

                        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-mail">
                        </div>
                    </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <input type="phone" id="phone" class="form-control mb-4" name="phone" placeholder="phone">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <input type="subject" id="subject" class="form-control mb-4" name="subject" placeholder="subject">
                    </div>
                </div>
            </div>
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea class="form-control rounded-0" id="message" rows="3" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
                <button class="btn btn-info btn-block" type="submit">Send</button>
        </form>


    <div class="status"></div>
</div>
<!--Grid column-->


</div>

</section>
<!--Section: Contact v.2-->

@endsection


