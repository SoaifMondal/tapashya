<section class="banner inner-banner">
    <div class="banner-wrapper position-relative">
        <div class="banner-img">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
        </div>
        <div class="container banner-content-container">
            <div class="banner-content text-center text-white">
                <h1><?php the_title();?></h1>
            </div>                    
        </div>
    </div>
</section>