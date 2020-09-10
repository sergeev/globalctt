  <!--==========================
    Intro Section
    ============================-->
    <section id="intro" class="clearfix">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!--   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    @foreach($events as $key => $event)
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
     
      <div class="container">
        
        <div class="intro-img">
          <img src="{{ $event->link_images_1 }}" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
          <h2>{{ $event->title }}</h2>
          <div>
            <h5 style="color:#FFFFFF"; >{!! $event->content_main_page !!}</h5>
            <!-- <a href="" class="btn-get-started scrollto">Записаться</a> -->
            <a href="{{ route('events.show',$event->id) }}" class="btn-services scrollto">Подробнее</a>
          </div>
        </div>
        
      </div>

    </div>
@endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Предыдущий</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Следующий</span>
  </a>
</div>  

</section><!-- #intro -->
<!-- <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Прокрутите вниз</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div> -->