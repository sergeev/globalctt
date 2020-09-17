    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Немного цифр</h3>
          <p>Результат не может быть за кадром.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-graduation-cap"></i>
              <div class="card-body">
                <h5 class="card-title">Резиденты</h5>
                <p class="card-text"><span data-toggle="counter-up">1{{ $resident_evil->id }}</span></p>
                <!-- <a href="#" class="readmore">Узнать больше </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">MVP</h5>
                <p class="card-text"><span data-toggle="counter-up">1{{ $MVP->id }}</span></p>
                <!-- <a href="#" class="readmore">Узнать больше </a> -->
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">63{{ $totals->total }}</span>
            <p>Детей</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">22</span>
            <p>Проектов</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,188</span>
            <p>Учебных часов</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">16</span>
            <p>Профессионалов</p>
          </div>
  
        </div>

      </div>
    </section>