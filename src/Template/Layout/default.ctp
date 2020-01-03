<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>As Mina da Ada </title>

    <?= $this->Html->css('bootstrap.min.css'); ?>
    <?= $this->Html->css('animate.min.css'); ?>
    <?= $this->Html->css('font-awesome.min.css'); ?>
    <?= $this->Html->css('style.css'); ?>

    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">

</head>
<body>

<!-- End Hero Bg
	================================================== -->
<!-- Start Header
	================================================== -->
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Your Logo -->
            <?=$this->Html->image('logo.png')?>

        </div>
        <!-- Start Navigation -->
        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <?=$this->Html->link('Home',['controller'=>'index','action'=>'index'])?>
                </li>
                <li>
                    <?=$this->Html->link('Eventos',['controller'=>'events', 'action' =>'index'])?>
                </li>
                <li>
                    <?=$this->Html->link('Vagas de Emprego', ['controller' => 'works','action' => 'index'])  ?>
                </li>
                <li>
                    <?=$this->Html->link('Login', ['controller' => 'users','action' => 'login'])  ?>
                </li>
                <li>
                   <?=$this->Html->link('Cadastre-se', ['controller' => 'users','action' => 'add'])  ?>
                </li>

            </ul>
        </nav>

    </div>

</header>




<?= $this->fetch('content') ?>


<!-- Credits
=============================================== -->
<section id="credits" class="text-center rodape">
	<span class="social-icons wow zoomIn">
	<a href="#"><i class="fa fa-facebook"></i>
	</span><br/>
    Copyright &copy; <a href="#">As Mina da Ada</a>
    <br/>Template By <i class="fa fa-heart"></i> WowThemes.Net
</section>
<!-- Bootstrap core JavaScript
	================================================== -->
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<?= $this->Html->script('jquery.min.js'); ?>
<?= $this->Html->script('bootstrap.min.js'); ?>
<?= $this->Html->script('waypoints.min.js'); ?>
<?= $this->Html->script('jquery.scrollTo.min.js'); ?>
<?= $this->Html->script('jquery.localScroll.min.js'); ?>
<?= $this->Html->script('jquery.magnific-popup.min.js'); ?>
<?= $this->Html->script('validate.js'); ?>
<?= $this->Html->script('common.js'); ?>

<script>
    $(document).ready(function(){
        $('#events').DataTable();
    });

</script>

</body>
</html>
