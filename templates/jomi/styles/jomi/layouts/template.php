<?php

/**

* @package   yoo_master

* @author    YOOtheme http://www.yootheme.com

* @copyright Copyright (C) YOOtheme GmbH

* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL

*/



// get template configuration

include($this['path']->path('layouts:template.config.php'));

	

?>

<!DOCTYPE HTML>

<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">



<head>

<?php echo $this['template']->render('head'); ?>

</head>



<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>



	<?php if ($this['modules']->count('absolute')) : ?>

	<div id="absolute">

		<?php echo $this['modules']->render('absolute'); ?>

	</div>

	<?php endif; ?>



		<div id="block-toolbar">

		

		<div class="wrapper">

		

			<div id="toolbar" class="clearfix">

	

				<?php if ($this['modules']->count('toolbar-l') || $this['config']->get('date')) : ?>

				<div class="float-left">

				

					<?php if ($this['config']->get('date')) : ?>

					<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>

					<?php endif; ?>

				

					<?php echo $this['modules']->render('toolbar-l'); ?>

					

				</div>

				<?php endif; ?>

					

				<?php if ($this['modules']->count('toolbar-r')) : ?>

				<div class="float-right"><?php echo $this['modules']->render('toolbar-r'); ?></div>

				<?php endif; ?>

				

		<?php /*?><ul class="social-icons float-right">
        
        <li class="facebook"><a href="<?php echo $this['config']->get('facebook_url'); ?>" target="_blank" title="Facebook">Facebook</a></li>
        
        <li class="twitter"><a href="<?php echo $this['config']->get('twitter_url'); ?>" target="_blank" title="Twitter">Twitter</a></li>
        
        <li class="gplus"><a href="<?php echo $this['config']->get('gplus_url'); ?>" target="_blank" title="Google plus">gplus</a></li>
        
        <li class="youtube"><a href="<?php echo $this['config']->get('youtube_url'); ?>" target="_blank" title="Youtube">Youtube</a></li>
        
        <li class="rss"><a href="<?php echo $this['config']->get('rss_url'); ?>" target="_blank" title="Rss Feed">rss</a></li>
        
        
        
        </ul>	
        <?php */?>
		


			</div>


        </div>	


	</div>



<div id="block-header">	

	<div class="wrapper grid-block">



		<header id="header" class="clearfix">



			<div id="headerbar" class="clearfix">

			

				<?php if ($this['modules']->count('logo')) : ?>	
			
            <div id="logo">
   <?php /*?>         
            <a href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?></a><?php */?>
            
                        <?php echo $this['modules']->render('logo'); ?>
            
			</div>
				<?php endif; ?>

				

				<?php if($this['modules']->count('headerbar')) : ?>

				<div class="left"><?php echo $this['modules']->render('headerbar'); ?></div>

				<?php endif; ?>

				

			</div>

	</div>

</div>


<div class="wrapper">


<div id="block-menu">

		


	<div id="menubar"><div><div class="clearfix">

					

					<?php  if ($this['modules']->count('menu')) : ?>

					<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>

					<?php endif; ?>

	

					<?php if ($this['modules']->count('search')) : ?>

					<div id="search"><?php echo $this['modules']->render('search'); ?></div>

					<?php endif; ?>

					

				</div></div></div>

			

				<?php if ($this['modules']->count('banner')) : ?>

				<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>

				<?php endif;  ?>

	

	</div>

		

	</div>	

	



	

<?php if ($this['modules']->count('slideshow')) : ?>

	<div id="block-slideshow">

		<div class="wrapper<?php if($this['config']->get('block-slideshow')) echo 'max-width'.$this['config']->get('block-slideshow'); ?>">



			<section id="slideshow" class="grid-block"><?php echo $this['modules']->render('slideshow', array('layout'=>$this['config']->get('slideshow'))); ?></section>

	

		</div>

	</div>

	<?php endif; ?>

	


	

	<?php if ($this['modules']->count('top-a')) : ?>

	<div id="block-top-a"><div><div>

		

		<section id="top-a" class="wrapper grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></section>

			

	</div></div></div>

	<?php endif; ?>

	

	<?php if ($this['modules']->count('top-b')) : ?>

	<div id="block-top-b"><div><div>

		

		<section id="top-b" class="wrapper grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?></section>

		

	</div></div></div>

	<?php endif; ?>

	

	<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>

	<div id="block-main">

		

		<div id="main" class="wrapper grid-block">

		

			<div id="maininner" class="grid-box">

			

				<?php if ($this['modules']->count('innertop')) : ?>

				<section id="innertop" class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></section>

				<?php endif; ?>

				

				<?php if ($this['config']->get('system_output')) : ?>

				

				<?php if ($this['modules']->count('breadcrumbs')) : ?>

				<section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>

				<?php endif; ?>

				

				<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>

				

				<?php endif; ?>



				<?php if ($this['modules']->count('innerbottom')) : ?>

				<section id="innerbottom" class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></section>

				<?php endif; ?>



			</div>

			

			<?php if ($this['modules']->count('sidebar-a')) : ?>

			<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>

			<?php endif; ?>

			

			<?php if ($this['modules']->count('sidebar-b')) : ?>

			<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>

			<?php endif; ?>



		</div>

		

	</div>

	<?php endif; ?>

	

	<?php if ($this['modules']->count('bottom-a + bottom-b')) : ?>

	<div id="block-bottom-a"><div>

			

		<?php if ($this['modules']->count('bottom-a')) : ?>

		<section id="bottom-a" class="wrapper grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?></section>

		<?php endif; ?>		</div>				<div id="block-bottom-a1">					<?php if ($this['modules']->count('bottom-a1')) : ?>		<section id="bottom-a1" class="wrapper grid-block"><?php echo $this['modules']->render('bottom-a1', array('layout'=>$this['config']->get('bottom-a1'))); ?></section>		<?php endif; ?>



	</div>

	<?php endif; ?>

	

	

	<div id="block-bottom-b">

	

	<?php if ($this['modules']->count('bottom-b')) : ?>

		<section id="bottom-b" class="wrapper grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></section>

	<?php endif; ?>

	</div>

	

	<div id="block-bottom-c">

	

	<?php if ($this['modules']->count('bottom-c')) : ?>

		<section id="bottom-c" class="wrapper grid-block"><?php echo $this['modules']->render('bottom-c', array('layout'=>$this['config']->get('bottom-c'))); ?></section>

	<?php endif; ?>

	</div>

	

	

	<?php if ($this['modules']->count('footer + debug') || $this['config']->get('warp_branding')) : ?>

	<div id="block-footer">

	

		<div class="wrapper">

			

			<footer id="footer" class="grid-block">

	

				<?php if ($this['config']->get('totop_scroller')) : ?>

				<a id="totop-scroller" href="#page"></a>

				<?php endif; ?>

				

				<?php

					echo $this['modules']->render('footer');

/*					$this->output('warp_branding');

					echo $this['modules']->render('debug');
*/
				?>

	

			</footer>



		<?php endif; ?>



	</div>



	<?php echo $this->render('footer'); ?>



<div class="licinfo">Diseño  Web: <a href="http://ingenioart.com" target="_blank">Ingenioart.com</a></div>





</body>



</html>



