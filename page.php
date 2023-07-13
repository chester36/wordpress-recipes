<?php get_header()?>

<section class="banner__about">
        <div class="container">
            <div class="banner__about__wrapper">
                <h1><?php the_title();?></h1>
                <?php the_content();?>
            </div>
        </div>
</section>

<section class="info">
        <div class="container">
            <div class="info__wrapper">
                <div class="info__grid">

                    <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'foodPost',
                    'posts_per_page' => 1,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'recipe'
                        ),
                    ),
                    ));
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                    <div class="info__content">
                    
                        <h1><?php the_title();?></h1>
                        <?php the_content();?>     
                    </div>
                    <?php
                    endwhile;
                    else : echo "no more post!!";
                    endif;
                    ?> 


                    <div class="info__content">
                        <div class="info__content__title">
                        <h2>Looking for Something else?</h2>
                        </div>

                        <?php
                        $newQuery = new WP_Query(array(
                        'post_type' => 'foodPost',
                        'posts_per_page' => 3,
                        'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'classic'
                        ),
                        ),
                        ));
                        ?>
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                        <div class="info__content__items">
                            <div class="info__content__img">
                                <img src="<?php echo get_field('image') ?>" alt="" />
                            </div>
                            <div class="info__content__text">
                                <h5><?php the_field('category');?></h5>
                                <h2><?php the_title();?></h2>
                                <div class="info__ul">
                                    <ul>
                                    <?php $rating = get_field('rating') ?>
                                    <?php for($x = 1; $x <= $rating; $x++){?>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <?php }?>
                                        
                                    </ul>
                                </div>
                                <a href="<?php the_permalink(); ?>x">Get Recipe Here</a>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        else : echo "no more post!!";
                        endif;
                        ?> 

                        
                    </div>
                </div>
            </div>
        </div>
</section>


<?php get_footer()?>