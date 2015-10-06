<?php defined("_JEXEC") or die();?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;
$site_logo = $templateparams->get('site_logo');
$right_header_img = $templateparams->get('right_header_img');

$doc = JFactory::getDocument();
//print_r($doc->params->get('site_name'));
//stylesheets
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/bootstrap.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/custom.css');

//scripts
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/bootstrap.min.js');
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/respond.js');
?>


<!doctype html>
<html lang="ru">
<head>
	<jdoc:include type="head" />
</head>
<body>
<div class="container">
	<header id="header">
		<div class="row gradient">
				<!--Правый рисунок-->
			<div class="col-sm-1 col-xs-1 sol">
				<img src="<?php echo JUri::base();?>templates/<?php echo $doc->template;?>/images/sol.png" alt="sol" class="img-responsive sol">
			</div>
				<!--Логотип сайта-->
			<div class="col-sm-8 col-xs-5 logo">
				<?php if($site_logo) :?>
				<a href="<?php echo JUri::base();?>"><img src="<?php echo JUri::base().$site_logo;?>" class="img-responsive logoImg" alt="logo" /></a>
				<?php else :?>
				<a href="<?php echo JUri::base();?>"><img src="<?php echo JUri::base();?>templates/<?php echo $doc->template;?>/images/logo.png" class="img-responsive logo" alt="logo" /></a>
				<?php endif; ?>
			</div>
			<!--Правый рисунок в header для компьютеров и планшетов-->
			<div class="col-sm-3 hidden-xs">
				<?php if($right_header_img) :?>
				<a href="<?php echo JUri::base();?>"><img src="<?php echo JUri::base().$right_header_img;?>" class="img-responsive" alt="" /></a>
				<?php else :?>
				<img src="<?php echo JUri::base();?>templates/<?php echo $doc->template;?>/images/right_header_img.png" class="img-responsive" alt="" />
				<?php endif; ?>
			</div>
			 <!--Кнопка мобильного меню-->
			<div class="col-xs-6 visible-xs mobileMenu">
				<a class="pull-right mobilePadding" data-toggle="collapse" data-target=".nav-collapse"> 
					<button class="btn">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
				</a>
			</div>
		</div>
			<!--Меню для десктопов и планшетов-->
			<nav class="hidden-xs">
				<jdoc:include type="modules" name="TopMenu" />
			</nav>
			<!--Мобильное меню-->
			<div class="nav nav-collapse collapse mobileMenu hidden-lg hidden-md hidden-sm">
				<jdoc:include type="modules" name="TopMenu" />
			</div>
	</header>
	
		<!--Контент-->
		<div class="row">
				<div class="col-md-10"> 
					<jdoc:include type="component" />
				</div>
			<div class="col-md-2"></div>
		</div>
		
		<!--Футер-->
		<div class="row footer"> 
			<div class="col-xs-9">
				<i class="copy">&copy; 2015 | Андрей Докольский</i>
			</div>
			<div class="col-xs-3">
				<div class="table-cell"> 
					<div class="upward"> 
						<a href="#header"><span class="glyphicon glyphicon-arrow-up">Наверх</span></a>
					</div>
				</div>
				
			</div>
		</div>
	
</div>
<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
</body>
</html>



















