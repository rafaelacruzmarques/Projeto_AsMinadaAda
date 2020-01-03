
<div id="parallax">
</div>

<section id="hero" class="section">
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="herotext">
               <div class= "herotext2">
				<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s">APOIE AS MINA!</span></h1>
				<p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
					Ajudamos as mulheres a se inserirem na área de Tecnologia da Informação.
				</p>
				<p>
				          <?= $this->Form->button('Cadastre-se',['controller' => 'users','action' => 'login','class' => 'btn btn-default btn-lg wow fadeInLeft']); ?>
                            <a href="#slider" class="btn btn-default btn-lg wow fadeInRight" role="button">Sobre nós</a>
				</p>
               </div>
			</div>
		</div>


	</div>
</div>
</section>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    $(".cadastrar").click(function(){
        $(".form-cadastrar").show();
    });
    $(".btnClose").click(function(){
        $(".form-cadastrar").hide();
    });

</script>
</section>
<section id="gallery" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/2.jpg);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: rgba(204,38,73,1);opacity:0.91;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a >
				        <?php echo $this->html->image('evento.jpg',['class'=>"image-responsive"], array ('alt' => 'Eventos', 'url' => array('controller' => 'events', 'action' => 'index'))); ?>

    					<div class="description">
						<span class="caption"><b>Eventos</b></span>
						<span class="glyphicon glyphicon-glass"></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a >
				<?php echo $this->html->image('vagaemp.jpg',['class'=>"image-responsive"], array ('alt' => 'Eventos', 'url' => array('controller' => 'index', 'action' => 'index'))); ?>

					<div class="description">
						<span class="caption"><b>Vagas de Emprego</b></span>
						<span class="glyphicon glyphicon-lock"></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a >
				<?php echo $this->html->image('d.jpg',['class'=>"image-responsive"], array ('alt' => 'Eventos', 'url' => array('controller' => 'index', 'action' => 'index'))); ?>
					<div class="description">
						<span class="caption"><b>Discursos</b></span>
						<span class="glyphicon glyphicon-text-size"></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</section>
<section id="slider" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/4.jpg);">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="Carousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<blockquote>

                                    <?=$this->Html->image('Laura.jpg',['style'=>'width:200px; height:200px; border-radius:100px;'])?>
                                    <p class="lead">
                                        "Graduanda em Biologia pela Universidade Federal de Minas Gerais"
                                     </p>
                                     <small>Laura Layanne Fernandes Gonçalves</small>

							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<?=$this->Html->image('rafaela.jpg',['style'=>'width:200px; height:200px; border-radius:100px;'])?>
                                <p class="lead">
                                    "Graduanda em Sistemas de Informação pela Universidade Federal de Viçosa, Câmpus Rio Paranaíba"
                                 </p>
                                 <small>Rafaela Cruz Marques</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
                                <?=$this->Html->image('logoBranca.jpg',['style'=>'width:200px; height:200px; border-radius:100px;'])?>
                                <p class="lead">
                                    "“AS MINA DA ADA” é uma iniciativa que busca promover cada vez mais a inserção de mulheres nas áreas de Tecnologia da Informação (TI), uma vez que é oitenta por cento constituída por homens e considerada exclusivamente masculina. O nome surgiu como uma forma de demonstrar que todas as mulheres podem seguir os passos de Ada Lovelace, a primeira programadora da história."
                                 </p>
                                 <small>As Mina da Ada</small>
                            </blockquote>
						</div>
					</div>
					<a class="left carousel-control" href="#Carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#Carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>