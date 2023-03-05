<html>
<?php 
   $title = get_the_title();
   if($title != 'Contato'){
?>

 <section class="metodologia">
            <div class="center">
                 <h2>Conheça nossa metodologia</h2>
                 <p>justo eleifend, dictum sapien ut, ornare augue. Mauris non scelerisque tellus.<br> Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                 <a href="">Entre em contato</a>
            </div>
        </section>
        <?php
            }
        ?>
        <footer>
            <div class="center">
                <div class="col-footer">
                    <h2>Suporte</h2>
                    <a href="">contato</a>
                    <a href="">FAQ</a>
                </div>
                <div class="col-footer">
                    <h2>Suporte</h2>
                    <a href="">contato</a>
                    <a href="">FAQ</a>
                </div>
                <div class="col-footer">
                    <h2>Suporte</h2>
                    <a href="">contato</a>
                    <a href="">FAQ</a>
                </div>
                <div style="width: 40%; text-align: right;" class="col-footer">
                    <img width="100px" height="100px" src="<?php echo get_theme_root_uri(); ?>/siteitens/itens para o site/icone.png">
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>

        <script src="<?php echo get_theme_root_uri(); ?>/siteitens/js/jquery.js"></script>
        <script src="<?php echo get_theme_root_uri(); ?>/siteitens/js/slick.min.js"></script>
        <script type="text/javascript">
            $('section.clientes-slider .slider-container').slick({
                dots:true,
                arrown:false,
                infinite:true,
                centerMode:false,
                speed:1000,
                slidesToShow:3,
               

               
               
            });


            $('section.depoimento .depoimentos-box').slick({
                dots:true,
                arrown:false,
                infinite:false,
                centerMode:true,
                speed:1000,
                slidesToShow:1,
                autoplay:true,
                autoplayspeed:3000,
                pauseOnHover:false,

               
               
            });
            
        </script>

        

    </body>

<html>



