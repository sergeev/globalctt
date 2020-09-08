<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Кванториум 42 Новокузнецк - Расписание занятий</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Расписания занятий кванториума 42 Новокузнецк</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="./"> На главную</a>
                    </div>
                </div>
            </div>

            <div class="row">




                <div class="card-deck mb-3 text-center">
                  <div class="card mb-4 box-shadow">


                  <!-- JavaScript behavior -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#promrobo" role="tab" aria-controls="promrobo" aria-selected="true">Промробоквантум</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#it" role="tab" aria-controls="it" aria-selected="false">IT-квантум</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#hitech" role="tab" aria-controls="hitech" aria-selected="false">Хай-Тек</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#energy" role="tab" aria-controls="energy" aria-selected="false">Энерджиквантум</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#nano" role="tab" aria-controls="nano" aria-selected="false">Наноквантум</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#vr-ar" role="tab" aria-controls="vr-ar" aria-selected="false">VR/AR-квантум</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#chess" role="tab" aria-controls="chess" aria-selected="false">Шахматная гостиная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#maths" role="tab" aria-controls="maths" aria-selected="false">Математика</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                  <!-- Promrobo -->
                  <div class="tab-pane fade show active" id="promrobo" role="tabpanel" aria-labelledby="promrobo">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-light">
                        <thead>
                          <tr>
                            <th scope="col">Фамилия, Имя и Отчество педагога</th>
                            <th scope="col">№ группы</th>
                            <th scope="col">ПН</th>
                            <th scope="col">ВТ</th>
                            <th scope="col">СР</th>
                            <th scope="col">ЧТ</th>
                            <th scope="col">ПТ</th>
                            <th scope="col">СБ</th>
                            <th scope="col">ВС</th>

                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">+</th>
                        <td></td>
                        <td><p>1 гр. мл.</p>
                          <p>15.55-16.25</p>
                          <p>16.30-17.00</p>
                          <p>1 гр. ст.</p>
                          <p>17.15-17.55</p>
                          <p>18.00-18.40</p>
                          <p>18.45-19.25</p></td>
                          <td></td>
                          <td><p>2 гр. мл.</p>
                            <p>15.55-16.25</p>
                            <p>16.30-17.00</p>
                            <p>2 гр. ст.</p>
                            <p>17.15-17.55</p>
                            <p>18.00-18.40</p>
                            <p>18.45-19.25</p></td>
                            <td></td>
                            <td></td>
                            <td><p>3 гр. мл.</p>
                              <p>13.25-13.55</p>
                              <p>14.00-14.30</p>
                              <p>2 гр. ст.</p>
                              <p>14.45-15.25</p>
                              <p>15.30-16.10</p>
                              <p>16.15-16.55</p>
                              <p>1 гр. ст.</p>
                              <p>17.15-17.55</p>
                              <p>18.00-18.40</p>
                              <p>18.45-19.25</p></td>
                              <td></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div> 
          <!-- end Promrobo -->

          <!-- It -->
          <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-light">
                  <thead>
                    <tr>
                      <th scope="col">Фамилия, Имя и Отчество педагога</th>
                      <th scope="col">№ группы</th>
                      <th scope="col">ПН</th>
                      <th scope="col">ВТ</th>
                      <th scope="col">СР</th>
                      <th scope="col">ЧТ</th>
                      <th scope="col">ПТ</th>
                      <th scope="col">СБ</th>
                      <th scope="col">ВС</th>

                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">+</th>
                  <td></td>
                  <td></td>
                  <td><p>1 гр.
                    <p>09.00-09.40</p>
                    <p>09.45-10.25</p>
                    <p>10.30-11.10</p>
                    <p>2 гр.</p>
                    <p>14.30-15.10</p>
                    <p>15.15-15.55</p>
                    <p>16.00-16.40</p>
                    <p>3 гр.</p>
                    <p>17.00-17.40</p>
                    <p>17.45-18.25</p>
                    <p>18.30-19.10</p></td>
                    <td></td>
                    <td><p>1 гр.</p>
                      <p>09.00-09.40</p>
                      <p>09.45-10.25</p>
                      <p>10.30-11.10</p>
                      <p>2 гр.</p>
                      <p>14.30-15.10</p>
                      <p>15.15-15.55</p>
                      <p>16.00-16.40</p>
                      <p>3 гр.</p>
                      <p>17.00-17.40</p>
                      <p>17.45-18.25</p>
                      <p>18.30-19.10</p></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </tbody>

              <tbody>
                <tr>
                  <th scope="row">+</th>
                  <td></td>
                  <td><p>1 гр.</p>
                    <p>15.00-15.40</p>
                    <p>15.45-16.25</p>
                    <p>16.30-17.10</p>
                    <p>2 гр.</p>
                    <p>17.20-18.00</p>
                    <p>18.05-18.45</p>
                    <p>18.50-19.30</p></td>
                    <td></td>
                    <td><p>1 гр.</p>
                      <p>15.00-15.40</p>
                      <p>15.45-16.25</p>
                      <p>16.30-17.10</p>
                      <p>2 гр.</p>
                      <p>17.20-18.00</p>
                      <p>18.05-18.45</p>
                      <p>18.50-19.30</p></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div> 
  <!-- end it -->

  <!-- HiTech -->
  <div class="tab-pane fade" id="hitech" role="tabpanel" aria-labelledby="hitech">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-light">
          <thead>
            <tr>
              <th scope="col">Фамилия, Имя и Отчество педагога</th>
              <th scope="col">№ группы</th>
              <th scope="col">ПН</th>
              <th scope="col">ВТ</th>
              <th scope="col">СР</th>
              <th scope="col">ЧТ</th>
              <th scope="col">ПТ</th>
              <th scope="col">СБ</th>
              <th scope="col">ВС</th>

          </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">+</th>
          <td></td>
          <td><p>1 гр.</p>
            <p>17.00-17.40</p>
            <p>17.45-18.25</p>
            <p>18.30-19.10</p></td>
            <td><p>1 гр.</p>
              <p>17.00-17.40</p>
              <p>17.45-18.25</p>
              <p>18.30-19.10</p></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="row">+</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><p>1 гр.</p>
            <p>09.00-09.40</p>
            <p>09.45-10.25</p>
            <p>10.30-11.10</p>
            <p>2 гр.</p>
            <p>14.30-15.10</p>
            <p>15.15-15.55</p>
            <p>16.00-16.40</p>
            <p>3 гр.</p>
            <p>17.00-17.40</p>
            <p>17.45-18.25</p>
            <p>18.30-19.10</p></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
</div> <!-- end HiTech -->

<!-- Energy -->
<div class="tab-pane fade" id="energy" role="tabpanel" aria-labelledby="energy">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-light">
        <thead>
          <tr>
            <th scope="col">Фамилия, Имя и Отчество педагога</th>
            <th scope="col">№ группы</th>
            <th scope="col">ПН</th>
            <th scope="col">ВТ</th>
            <th scope="col">СР</th>
            <th scope="col">ЧТ</th>
            <th scope="col">ПТ</th>
            <th scope="col">СБ</th>
            <th scope="col">ВС</th>

        </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">+</th>
        <td></td>
        <td></td>
        <td><p>1 гр.</p>
          <p>15:55-16:35</p>
          <p>16:40-17:20</p>
          <p>17:25-18:05</p>
          <p>2 гр.</p>
          <p>18:15-18:55</p>
          <p>19:00-19:40</p>
      </td>
      <td><p>3 гр.</p>
          <p>15:55-16:35</p>
          <p>16:40-17:20</p>
          <p>17:25-18:05</p>
          <p>2 гр.</p>
          <p>18:15-18:55</p>
          <p>19:00-19:40</p>
      </td>
      <td></td>
      <td></td>
      <td><p>3 гр.</p>
          <p>09:00-09:40</p>
          <p>09:45-10:25</p>
          <p>10:30-11:10</p>
          <p>1 гр.</p>
          <p>11:20-12:00</p>
          <p>12:05-12:45</p>
          <p>12:50-13:30</p></td>
          <td></td>
      </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">+</th>
      <td></td>
      <td><p>2 гр.</p>
        <p>15:10-15:50</p>
        <p>15:55-16:35</p>
        <p>16:40-17:20</p>
        <p>1 гр.</p>
        <p>17:30-18:10</p>
        <p>18:15-18:55</p>
    </td>
    <td></td>
    <td></td>
    <td><p>3 гр.</p>
        <p>17:10-17:50</p>
        <p>17:55-18:35</p>
        <p>18:40-19:20</p>
    </td>
    <td></td>
    <td><p>2 гр.</p>
        <p>14:00-14:40</p>
        <p>14:45-15:25</p>
        <p>15:30-16:10</p>
        <p>1 гр.</p>
        <p>16:15-16:55</p>
        <p>17:00-17:40</p>
        <p>3 гр.</p>
        <p>17:45-18:25</p>
        <p>18:30-19:10</p>
        <p>19.15-19.55</td>
          <td></td>
      </tr>
  </tbody>
</table>
</div>
</div> 
<!-- end energy -->

<!-- Nano -->
<div class="tab-pane fade" id="nano" role="tabpanel" aria-labelledby="nano">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-light">
      <thead>
        <tr>
          <th scope="col">Фамилия, Имя и Отчество педагога</th>
          <th scope="col">№ группы</th>
          <th scope="col">ПН</th>
          <th scope="col">ВТ</th>
          <th scope="col">СР</th>
          <th scope="col">ЧТ</th>
          <th scope="col">ПТ</th>
          <th scope="col">СБ</th>
          <th scope="col">ВС</th>

      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td></td>
      <td></td>
      <td><p>3 гр.</p>
        <p>09.00-09.40</p>
        <p>09.45-10.25</p>
        <p>10.30-11.10</p>
        <p>4 гр.</p>
        <p>15.40-16.20</p>
        <p>16.25-17.05</p>
        <p>17.10-17.50</p>
        <p>5 гр.</p>
        <p>18.00-18.40</p>
        <p>18.45-19.25</p>
        <p>19.30-20.10</p></td>
        <td></td>
        <td></td>
        <td><p>3 гр.</p>
          <p>09.00-09.40</p>
          <p>09.45-10.25</p>
          <p>10.30-11.10</p>
          <p>4 гр.</p>
          <p>15.40-16.20</p>
          <p>16.25-17.05</p>
          <p>17.10-17.50</p>
          <p>5 гр.</p>
          <p>18.00-18.40</p>
          <p>18.45-19.25</p>
          <p>19.30-20.10</p></td>
          <td></td>
          <td></td>
      </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">+</th>
      <td></td>

      <td><p>1 гр.</p>
        <p>18:00-18:40</p>
        <p>18:45-19:25</p>
        <p>19:30-20:10</p></td>
        <td></td>
        <td><p>2 гр.</p>
          <p>18:00-18:40</p>
          <p>18:45-19:25</p>
          <p>19:30-20:10</p></td>
          <td><p>3 гр.</p>
            <p>18:00-18:40</p>
            <p>18:45-19:25</p>
            <p>19:30-20:10</p></td>
            <td></td>
            <td><p>1 гр.</p>
              <p>09:00-09:40</p>
              <p>09:45-10:25</p>
              <p>10:30-11:10</p>
              <p>2 гр.</p>
              <p>11:20-12:00</p>
              <p>12:05-12:45</p>
              <p>12:50-13:30</p>
              <p>3 гр.</p>
              <p>13:40-14:20</p>
              <p>14:25-15:05</p>
              <p>15:10-15:50</p></td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>
</div> 
<!-- end nano -->

<!-- vr-ar -->
<div class="tab-pane fade" id="vr-ar" role="tabpanel" aria-labelledby="vr-ar">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-light">
      <thead>
        <tr>
          <th scope="col">Фамилия, Имя и Отчество педагога</th>
          <th scope="col">№ группы</th>
          <th scope="col">ПН</th>
          <th scope="col">ВТ</th>
          <th scope="col">СР</th>
          <th scope="col">ЧТ</th>
          <th scope="col">ПТ</th>
          <th scope="col">СБ</th>
          <th scope="col">ВС</th>

      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td></td>
      <td><p>2 гр.</p>
        <p>15.00-15.40</p>
        <p>15.45-16.25</p>
        <p>16.30-17.10</p></td>
        <td></td>
        <td><p>2 гр.</p>
          <p>15.00-15.40</p>
          <p>15.45-16.25</p>
          <p>16.30-17.10</p></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">+</th>
      <td></td>
      <td><p>1 гр.</p>
        <p>17.20-18.00</p>
        <p>18.05-18.45</p>
        <p>18.50-19.30</p></td>
        <td><p>2 гр.</p>
          <p>17.00-17.40</p>
          <p>17.45-18.25</p>
          <p>18.30-19.10</p></td>
          <td><p>1 гр.</p>
            <p>17.20-18.00</p>
            <p>18.05-18.45</p>
            <p>18.50-19.30</p></td>
            <td><p>3 гр.</p>
              <p>17.00-17.40
                <p>17.45-18.25</td>
                  <td></td>
                  <td><p>2 гр.</p>
                    <p>12.00-12.40</p>
                    <p>12.45-13.25</p>
                    <p>13.30-14.10</p>
                    <p>3 гр.</p>
                    <p>14.20-15.00</p>
                    <p>15.05-15.45</p></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div> 
<!-- end vr-ar -->


<!-- chess -->
<div class="tab-pane fade" id="chess" role="tabpanel" aria-labelledby="chess">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-light">
        <thead>
          <tr>
            <th scope="col">Фамилия, Имя и Отчество педагога</th>
            <th scope="col">№ группы</th>
            <th scope="col">ПН</th>
            <th scope="col">ВТ</th>
            <th scope="col">СР</th>
            <th scope="col">ЧТ</th>
            <th scope="col">ПТ</th>
            <th scope="col">СБ</th>
            <th scope="col">ВС</th>

        </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">+</th>
        <td></td>
        <td><p>1 гр.</p>
          <p>17.00-17.40</p>
          <p>17.45-18.25</p>
          <p>18.30-19.10</p></td>
          <td><p>2 гр.</p>
            <p>17.00-17.40</p>
            <p>17.45-18.25</p>
            <p>18.30-19.10</p></td>
            <td><p>1 гр.</p>
              <p>17.00-17.40</p>
              <p>17.45-18.25</p>
              <p>18.30-19.10</p></td>
              <td><p>2 гр.</p>
                <p>17.00-17.40</p>
                <p>17.45-18.25</p>
                <p>18.30-19.10</p></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</div> 
<!-- end chass -->

<!-- maths -->
<div class="tab-pane fade" id="maths" role="tabpanel" aria-labelledby="maths">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-light">
        <thead>
          <tr>
            <th scope="col">Фамилия, Имя и Отчество педагога</th>
            <th scope="col">№ группы</th>
            <th scope="col">ПН</th>
            <th scope="col">ВТ</th>
            <th scope="col">СР</th>
            <th scope="col">ЧТ</th>
            <th scope="col">ПТ</th>
            <th scope="col">СБ</th>
            <th scope="col">ВС</th>

        </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">+</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p>1 гр.</p>
          <p>15.00-15.40</p>
          <p>15.45-16.25</p>
          <p>2 гр.</p>
          <p>16.35-17.15</p>
          <p>17.20-18.00</p>
          <p>3 гр.</p>
          <p>18.05-18.45</p>
          <p>18.50-19.30</p></td>
          <td></td>
          <td><p>1 гр.</p>
            <p>15.00-15.40</p>
            <p>15.45-16.25</p>
            <p>2 гр.</p>
            <p>16.35-17.15</p>
            <p>17.20-18.00</p>
            <p>3 гр.</p>
            <p>18.05-18.45</p>
            <p>8.50-19.30</p></td>
        </tr>
    </tbody>
</table>
</div>
</div> 
<!-- end maths -->

</div> <!-- end nav -->
</div>
</div>


</div>

<!-- </form> -->

<p class="text-center text-primary"><small>+</small></p>       
</div>
</main>
</div>
</body>
</html>