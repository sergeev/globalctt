 <!--==========================
    Footer
    ============================-->
 <footer id="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-4 col-md-6 footer-info">
                     <a href="https://vk.com/rusedufund"><img src="{{ asset('img/min/fnfro_logo.png') }}"
                             class="img-fluid" alt="alt text" height="" width="200"></a>
                 </div>

                 <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Полезные ссылки</h4>
                     <ul>
                         <li><a href="#">Главная</a></li>
                         <li><a href="#about">О нас</a></li>
                         <li><a href="#services">Квантумы</a></li>
                         <li><a href="#">Политика конфиденциальности</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-contact">
                     <h4>Наши контакты</h4>
                     <p>
                         <strong>Адрес:</strong>Петракова, 36а<br>
                         <strong>Телефон:</strong> +7 (3843) 20‒01‒19<br>
                         <strong>Email:</strong> kvantorium_42@mail.ru<br>
                     </p>

                     <div class="social-links">
                         <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                         <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                         <a href="<?php echo $instagram_link ?? ''; ?>"
                             class="instagram"><i class="fa fa-instagram"></i></a>
                         <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                         <a href="<?php echo $vk_link ?? ''; ?>" class="vk"><i
                                 class="fa fa-vk"></i></a>
                     </div>

                 </div>

                 <div class="col-lg-3 col-md-6 footer-newsletter">
                     <h4>Будьте всегда на связи</h4>
                     <p>Следите за нашими новостями, подпишитесь на бесплатную рассылку актуальных новостей!</p>
                     <form action="" method="">
                         <input type="email" name=""><input type="submit" value="Подписаться">
                     </form>
                 </div>

             </div>
         </div>
     </div>
     <div class="container">
         <div class="copyright">
             &copy;<strong> Кванториум 42 Новокузнецк. </strong>
         </div>
         <div class="credits">
             Дизайн Кванториум команды <a href="http://ctt-meridian.ru/">Меридиан</a> Все права защищены. 2021
         </div>
         <div class="col text-center">
             <a href="https://play.google.com/store/apps/details?id=com.davidenko.kvantorium" target="_blank"><img
                     src="{{ asset('img/linkApps/google-play-badge.png') }}" class="img-fluid" alt="Android app"
                     width="150"></a>
         </div>
     </div>
 </footer><!-- #footer -->
