<?php get_header(); ?>
<?php if(has_post_thumbnail(get_the_ID())){ ?>
<div class="about-banner">  
  <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="First slide">
</div>
<?php } ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
			        <h2><?php the_title(); ?></h2>
			     </div>
			     <?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>