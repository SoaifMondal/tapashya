<?php 
//Template Name: History template
get_header(); 
echo get_template_part('template-parts/bannersection');

$pi = get_the_ID();
$title = get_field('title_scc', $pi);
$content = get_field('content_scc', $pi);
$image = get_field('image_scc', $pi);
?>
<section class="about-section common-padding">
    <div class="container">
        <div class="row about-info-row history-desc align-items-center">
            <div class="col-lg-6">
                <div class="about-desc">
                 
                    <?php if(!empty($title)){ ?> <h2><?=$title?></h2><?php } ?>
                    <?php if(!empty($content)){ ?> <?php echo  wpautop($content)?><?php } ?>
                </div>
            </div>
            <?php if(!empty($image)){ ?> 
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="<?=$image?>" alt="img">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>