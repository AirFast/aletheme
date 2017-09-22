<!doctype html>
<html class="no-js" <?php language_attributes(); ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php /*if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
}*/ ?>
<?php ale_option('sitelogo'); ?>

<section class="slider-example">
	<div class="newhomeslider wrapper">
		<ul class="slides">
			<?php $slider = ale_sliders_get_slider('test-slider');  ?>
			<?php if($slider):?>
				<?php foreach ($slider['slides'] as $slide) : ?>
					<li>
						<figure>
							<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
							<figcaption>
								<div class="sliderdata">
									<?php if($slide['title']){ ?>
										<div class="titleslide headerfont">
											<?php if($slide['url']){
												echo "<a href='".$slide['url']."'>";
											} ?>

											<?php echo $slide['title']; ?>

											<?php if($slide['url']){
												echo "</a>";
											} ?>
										</div>
									<?php } ?>
									<?php if($slide['description']){ ?>
										<div class="descriptionslide">
											<?php echo $slide['description']; ?>
										</div>
									<?php } ?>
									<?php if($slide['html']){ ?>
										<div class="descriptionslide">
											<?php echo $slide['html']; ?>
										</div>
									<?php } ?>
								</div>
							</figcaption>
						</figure>
					</li>
				<?php endforeach; ?>
			<?php endif;?>
		</ul>
	</div>
</section>