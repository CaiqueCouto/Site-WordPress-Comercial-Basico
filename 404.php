<?php 
	get_header();
?>
</div>
</section>
<section class="erro">
	<div class="center"></div>
	<h2 style="text-align: center; padding:30px 0;">Pagina não encontrada,escreva novamente ou clique em uma das opções</h2>

</section>

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
