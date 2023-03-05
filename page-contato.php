<?php 
    //Template Name: Contato
?>
 
 <?php get_header(); ?>

</div>
</section>

        <section class="Contato">
            <div class="center">
                <div class="feni50">
                    <h2><?php the_field('contato-teste');?></h2>
                    <br>
                    <p><b>telefone</b>(12)12345-1234</p>
                    <p><b>Email</b>(12)12345-1234</p>
                    <p><b>2 email</b>(12)12345-1234</p>

                    <div class="mapa-container">
                        <div id="mapa"></div>
                    </div>
                </div>
                <div class="y50">
                    <form>
                        <input placeholder="Nome" type="text"/>
                        <input placeholder="Endereço" type="text"/>
                        <input placeholder="meio de contato" type="text"/>
                        <select>
                            <option>Geral</option>
                            <option>Suporte</option>
                            <option>Criação de sites</option>
                            <option>Estrategia</option>
                        </select>
                        
                        <textarea placeholder="mensagem"></textarea>
                        <input type="Submit" value="enviar">
                    </form>
                </div>
                <div class="clear"></div>
            </div>

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


</body>
