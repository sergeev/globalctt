    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>Наша команда</h3>
                <!-- <p>Команда лучших педагогов готова всегда направлять и настравлять ваших детей в этих не легких науках.</p> -->
            </div>

            <div class="row">
                <!-- Team member -->
                @foreach ($teachers as $teacher)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid"
                                                src="{{ $teacher->link_images_1 }}"
                                                alt="card image"></p>
                                        <h4 class="card-title">{{ $teacher->teacher_full_name }}</h4>
                                        <p class="card-text">{{ $teacher->teacher_kvantum }}</p>
                                        <a href="{{ $teacher->link_web_main }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{ $teacher->teacher_full_name }}</h4>
                                        <p class="card-text">{{ $teacher->teacher_desc }}</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="{{ $teacher->link_web_facebook }}">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="{{ $teacher->link_web_twitter }}">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="{{ $teacher->link_web_skype }}">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="{{ $teacher->link_web_google }}">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
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
                @endforeach
                <!-- ./Team member -->

            </div>
        </div>
    </section><!-- #team -->