<?php get_header()?>

<section class="single__banner">
        <div class="container">
            <div class="single__banner__wrapper">
                <div class="single__banner__title">
                    <div class="single__banner__content__title">
                        <h1><?php the_title();?></h1>
                    </div>
                    <div class="single__banner__content__pub">
                        <h5><span>Published:</span>3/23/22</h5>
                    </div>
                </div>
                <div class="single__banner__level">
                    <h3>Level:<span><?php echo get_field('level');?></span></h3>
                    <h3>Cooking time:<span><?php echo get_field('cooking-time');?></span></h3>
                    <h3>Servings:<span><?php echo get_field('servings');?></span></h3>
                </div>
                <div class="single__banner__item">
                    <div class="single__banner__img">
                        <?php echo get_the_post_thumbnail();?>
                    </div>
                    <div class="single__banner__ing">
                        <h4>Ingredients</h4>
                        <div class="ingred">
                            <p><?php echo get_field('ingredients');?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</section>

<section class="direction">
        <div class="container">
            <div class="direction__wrapper">
                <h1><span>Directions</span></h1>
                <div class="direction__items">
                <div class="steps">
                    <?php echo get_field('descrip');?>  
                </div>

                <div class="something">
                    <div class="category">
                       <h4>Category: <span>Health</span></h4>
                       <h4>Tags: <span>Poulty</span> <span>Chicken</span> <span>Healthy</span> <span>Fast</span> <span>Easy</span></h4>
                    </div>

                    <div class="else">
                        <div class="title__else">
                        <h2>Looking For Something else?</h2>
                        </div>
                        
                        <?php
                        $newQuery = new WP_Query(array(
                        'post_type' => 'foodPost',
                        'posts_per_page' => 5,
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
                        <div class="else__content__items">
                            <div class="else__content__img">
                                <img src="<?php echo get_field('image') ?>" alt="" />
                            </div>
                            <div class="else__content__text">
                                    <h5><?php the_field('category');?></h5>
                                    <h2><?php the_title();?></h2>
                                    <div class="else__ul">
                                    <ul>
                                        <?php $rating = get_field('rating') ?>
                                        <?php for($x = 1; $x <= $rating; $x++){?>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <?php }?>
                                    </ul>
                                    </div>
                                    <a href="<?php the_permalink(); ?>">Get Recipe Here</a>
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
        </div>
</section>

<?php get_footer()?>