<?php
/**
 * Template Name: Home page
 *
 * @package PSP_Theme
 */

get_header();

global $post;

$latest_posts = get_posts(array(
    'numberposts' => 8,
    'orderby' => 'date',
    'order' => 'DESC'
));

$whoWeAreId = get_field('pagina_chi_siamo');

?>

<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<section id="aboveTheFold" class="pt-1">
    <div class="slick-slider js-slick" style="overflow: hidden">
        <div class="slider is-animating" style="background-image: url('<?php echo get_field('slider_home_1', $post->ID)?>');"></div>
        <div class="slider " style="background-image: url('<?php echo get_field('slider_home_2', $post->ID)?>');"></div>
        <div class="slider " style="background-image: url('<?php echo get_field('slider_home_3', $post->ID)?>');"></div>
    </div>
    <div id="whoWeAre" class="container pt-4 pb-3">
        <?php if(!wp_is_mobile()){
            $wording = substr(get_field('chi_siamo' , $whoWeAreId),0, 750) . ' [...] ';
        } else {
            $wording = substr(get_field('chi_siamo' , $whoWeAreId) , 0 , 300) . '[...]';
        } ?>
        <h3 class="title hr">Chi siamo</h3>
        <p class="pt-3"><?php echo $wording ?><a class="text-link" href="<?php echo get_permalink($whoWeAreId) ?>"> Scopri di più -></a></p>
    </div>
</section>
<section style="background: #fcfcfc">
    <div class="container pt-3 pb-5" id="latestposts">

        <h3 class="title hr pt-3 pb-4">Bacheca avvisi</h3>

        <div class="row post-carousel" data-flickity='{ "cellAlign" : "left" , "contain" : true , "prevNextButtons": <?php if(wp_is_mobile()) { echo 'true , "draggable" : false'; } else { echo 'false'; } ?>}'>
            <?php foreach($latest_posts as $avvisi) {?>
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center py-2 slider-item">
                <div class="card">
                    <?php
                    $title = $avvisi->post_title;
                    $content = strip_tags($avvisi->post_content);
                    $content = substr($content, 0, 50) . '[...]'; ?>
                   <div class="card-header d-flex justify-content-center align-items-center">
                   <h5 class="card-title"><?php echo $title ?></h5>
                   </div>
                   <div class="card-body"> 
                        <p class="card-text"><?php echo $content ?></p>
                        <a href="<?php echo $avvisi->guid; ?>" class="btn btn-card">Leggi il post</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container py-3">
	    <?php
	    if(wp_is_mobile()){
		    $descPriest1 = substr(get_field('biografia_parroco_1' , $whoWeAreId), 0 , 95) . '[...]';
		    $descPriest2 = substr(get_field('biografia_parroco_2' , $whoWeAreId), 0 , 95) . '[...]';
	    }else{
		    $descPriest1 = substr(get_field('biografia_parroco_1' , $whoWeAreId), 0 , 350) . '[...]';
		    $descPriest2 = substr(get_field('biografia_parroco_2' , $whoWeAreId), 0 , 350) . '[...]';
	    }
	    ?>

        <h3 class="title hr">I Parroci oggi</h3>

        <div class="row align-content-center py-5" <?php if (wp_is_mobile()) { echo "data-flickity='{ \"cellAlign\" : \"left\" , \"contain\" : true , \"prevNextButtons\": true , \"draggable\" : false }'"; } ?>>
            <div class="col-12 col-lg-6 px-3 text-center d-flex justify-content-center">
              <div class="card" style="width: 85% !important;">
                  <div class="card-body">
                      <img src="<?php the_field('foto_parroco_1', $whoWeAreId);?>" alt="" class="rounded-circle py-2 profilePic">
                      <h3 class=""><?php the_field('nome_parroco_1', $whoWeAreId); ?></h3>
                      <h5 class="subtitle">Parroco</h5>
                      <hr class="divider">
                      <p><?php echo $descPriest1; ?></p>
                      <a href="<?php echo get_permalink($whoWeAreId) ?>" class="btn btn-card">Leggi di più </a>
                  </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 px-3 text-center d-flex justify-content-center">
                <div class="card" style="width: 85% !important;">
                    <div class="card-body">
                        <img src="<?php the_field('foto_parroco_2', $whoWeAreId);?>" alt="" class="rounded-circle py-2 profilePic">
                        <h3 class=""><?php the_field('nome_parroco_2', $whoWeAreId); ?></h3>
                        <h5 class="subtitle"> Vice Parroco</h5>
                        <hr class="divider">
                        <p><?php echo $descPriest2; ?></p>
                        <a href="<?php echo get_permalink($whoWeAreId) ?>" class="btn btn-card" style="margin: 0 !important;">Leggi di più</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<?php get_footer(); ?>

<script>
        $(document).ready(function() {
            let slider = $('.js-slick');

            slider.slick({
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                draggable: true,
                fade: true,
                speed: 1000,
                arrows: false
            });

            slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                $(slick.$slides).removeClass('is-animating');
            });

            slider.on('afterChange', function(event, slick, currentSlide, nextSlide) {
                $(slick.$slides.get(currentSlide)).addClass('is-animating');
            });
        });
</script>