    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>Наша команда</h3>
                <!-- <p>Команда лучших педагогов готова всегда направлять и настравлять ваших детей в этих не легких науках.</p> -->
            </div>

            <div id="carouselTeamsShows" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Team member -->
                    @foreach ($teachers as $teacher)
                        @if ($teacher->organization_show == '1')
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="image-flip">
                                            <div class="mainflip flip-0">
                                                <div class="frontside">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <p><img class=" img-fluid"
                                                                    src="{{ $teacher->link_images_1 }}"
                                                                    alt="card image"></p>
                                                            <h4 class="card-title">{{ $teacher->teacher_full_name }}
                                                            </h4>
                                                            <p class="card-text">{{ $teacher->teacher_kvantum }}</p>
                                                            <a href="{{ $teacher->link_web_main }}"
                                                                class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="backside">
                                                    <div class="card">
                                                        <div class="card-body text-center mt-4">
                                                            <h4 class="card-title">{{ $teacher->teacher_full_name }}
                                                            </h4>
                                                            <p class="card-text">{{ $teacher->teacher_desc }}</p>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center"
                                                                        target="_blank"
                                                                        href="{{ $teacher->link_web_facebook }}">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center"
                                                                        target="_blank"
                                                                        href="{{ $teacher->link_web_twitter }}">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center"
                                                                        target="_blank"
                                                                        href="{{ $teacher->link_web_skype }}">
                                                                        <i class="fa fa-skype"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center"
                                                                        target="_blank"
                                                                        href="{{ $teacher->link_web_google }}">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center"
                                                                        target="_blank"
                                                                        href="{{ $teacher->link_web_vk }}">
                                                                        <i class="fa fa-vk"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- ./Team member -->

                </div>
                <a class="carousel-control-prev" href="#carouselTeamsShows" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Предыдущий</span>
                </a>
                <a class="carousel-control-next" href="#carouselTeamsShows" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Следующий</span>
                </a>
            </div>
        </div>
        {{-- <div class="container-fluid gtco-testimonials">
            <div class="container">
                <div class="section-header">
                    <h2><centr>Преподаватели</centr></h2>
                </div>
                <div class="owl-carousel owl-carousel1 owl-theme">
                    @foreach ($teachers as $teacher)
                        @if ($teacher->organization_show == '1')
                            <div>
                                <div class="card text-center"><img class="card-img-top"
                                        src="{{ $teacher->link_images_1 }}" alt="">
                                    <div class="card-body">
                                        <h5>{{ $teacher->teacher_full_name }}<br />
                                            <span>{{ $teacher->teacher_kvantum }}</span>
                                        </h5>
                                        <p class="card-text"> </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div> --}}
    </section><!-- #team -->
