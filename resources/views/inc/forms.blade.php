<form action="contact" method="POST" class="form">
    <style>
        .form-control {
            border-color: #7a1818;
            color: black;
        }
        .modal-content {
            position: absolute;
            margin-top: 70px;
            margin-bottom: auto;
            margin-left: 90px;
            margin-right: auto;
        }
        </style>
     {{ csrf_field() }}
 <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Обработка Заказов</h4>

      </div>
      <div class="modal-body mx-3">

        <div class="md-form mb-2">
            <input type="subject" id="subject" class="form-control validate" name="subject" placeholder="Тема">
        </div>
        <div class="form-group row">
            <label for="subject2" type="subject2" name="subject2" id="subject2" class="col-4 col-form-label">Услуга</label>
            <div class="col-8">
              <select id="subject2" name="subject2" class="custom-select">
                <option value="20pg">до 20 стр.</option>
                <option value="20-50pg">20 - 50стр.</option>
                <option value="50-100pg">50 - 100стр.</option>
                <option value="100-200pg">100 - 200стр.</option>
                <option value="200-500pg">200 - 500стр.</option>
                <option value="500pg">от 500</option>
              </select>
            </div>
          </div>
        <div class="md-form mb-2">
          <input type="name" id="name" class="form-control validate"  name="name" placeholder="Имя">
        </div>

        <div class="md-form mb-2">
          <input type="email" id="email" class="form-control validate" name="email" placeholder="Почта">
        </div>

        {{-- <div class="md-form">
          <textarea type="message" id="message" class="md-textarea form-control"name="message" rows="4" placeholder="Ваше сообщение"></textarea>
        </div> --}}

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Отправить</button>
      </div>
    </div>
  </div>
</div>
</form>

<form action="contact" method="POST" class="form">
    <style>
        .form-control {
            border-color: #7a1818;
            color: black;
        }
        .modal-content {
            position: absolute;
            margin-top: 70px;
            margin-bottom: auto;
            margin-left: 90px;
            margin-right: auto;
        }
        </style>
     {{ csrf_field() }}
 <div class="modal fade" id="modalContactForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Обработка Заказов</h4>

      </div>
      <div class="modal-body mx-3">

        <div class="md-form mb-2">
            <input type="subject" id="subjects" class="form-control validate" name="subject" placeholder="Тема">
        </div>

        <div class="md-form mb-2">
          <input type="name" id="name" class="form-control validate"  name="name" placeholder="Имя">
        </div>

        <div class="md-form mb-2">
          <input type="email" id="email" class="form-control validate" name="email" placeholder="Почта">
        </div>

        {{-- <div class="md-form">
          <textarea type="message" id="message" class="md-textarea form-control"name="message" rows="4" placeholder="Ваше сообщение"></textarea>
        </div> --}}

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Отправить</button>
      </div>
    </div>
  </div>
</div>
</form>
{{-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">LaunchModal Contact Form</a>
</div> --}}
