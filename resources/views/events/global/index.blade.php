<section id="services" class="section-bg">
    <div class="container">
        <header class="section-header">
            <h3>Новости</h3>
        </header>
        <div class="row">
            <div class="container">
                <div class="card-deck">
                    @foreach ($events as $event)
                    <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <img class="card-img-top" src="{{ $event->link_images_1 }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{!! $event->title !!}</h5>
                                <p class="card-text">{{ Str::limit($event->content, 50) }} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>