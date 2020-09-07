    <!--==========================
      Contact Section BankGothic RUSS, sans-serif
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Связаться с нами</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.6786908578224!2d87.19981431603335!3d53.77740715003604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42d0c3ecd92b49a1%3A0xf9f1818739c80f13!2z0YPQuy4g0J_QtdGC0YDQsNC60L7QstCwLCAzNtCQLCDQndC-0LLQvtC60YPQt9C90LXRhtC6LCDQmtC10LzQtdGA0L7QstGB0LrQsNGPINC-0LHQuy4sIDY1NDAzNA!5e0!3m2!1sru!2sru!4v1594305414808!5m2!1sru!2sru" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Петракова, 36а</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>kvantorium_42@mail.ru</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+7 (3843) 20‒01‒19</p>
              </div>
            </div>

            <div class="form">
              {!! csrf_field() !!}
              <div id="sendmessage">Ваше сообщение отправлено. Спасибо!</div>
              <div id="errormessage"></div>
              <form action="" method="" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ваше Имя" data-rule="minlen:4" data-msg="Пожалуйста, введите не менее 4 символов" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email" data-rule="email" data-msg="Пожалуйста, введите действительный адрес электронной почты" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Вопрос" data-rule="minlen:4" data-msg="Пожалуйста, введите не менее 8 символов" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Пожалуйста, напишите что-нибудь нам" placeholder="Сообщение"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Отправить</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
      <div class="container">
  <div class="row">
    <div class="col-sm">
      <a href="https://edu.gov.ru/"><img src="{{ asset('img/min/minObrRF.webp') }}" class="img-fluid" alt="alt text" height="100" width="300"></a>
    </div>
    <div class="col-sm">
      <a href="http://образование42.рф/"><img src="{{ asset('img/min/minObrKuz.webp') }}" class="img-fluid" alt="alt text" height="100" width="400"></a>
    </div>
  </div>
</div>
    </section><!-- #contact -->