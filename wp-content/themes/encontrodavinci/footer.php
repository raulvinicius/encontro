

        <footer class="container-fluid">

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 assinatura">
                    <span>
                        <p>Leonardo da Vinci. A escola da sua vida.</p>
                    </span>
                    <span>
                        <img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-logo-rodape.jpg">
                    </span>
                </div>
            </div>

        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src= "<?php bloginfo("template_url") ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src= "<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
        <script src= "<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.8.3.min.js"></script>

        <script src= "<?php bloginfo('template_url') ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.easing.1.3.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.mask.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.form.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.validate.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.parallax.js"></script>
        <!-- <script src="<?php bloginfo('template_url') ?>/js/jquery.cookie.js"></script> -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
         -->

        <?php if (is_user_logged_in() || new DateTime() > new DateTime("2017-08-01 14:00:00") ): ?>

        </div> <!-- END wrap-site -->

        <div class="msg-show">
            <div class="wrap">
                <i></i>
                <div class="tit"></div>
                <div class="msg"></div>
                <button>Fechar</button>
            </div>
        </div>


        <?php else : ?>

        <div class="tempo">
            
            <h2>5º Encontro da Vinci</h2>
            <div class="wrap-tempo col-md-3">
                <div>As inscrições começam <span id="nowrap">às <span id="azul">14<span id="sml">h</span></span></span>.</div>
            </div>

        </div>

        <?php endif; ?> <!-- END if user logged in -->

    </body>

</html>
