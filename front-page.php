<?php get_header()?>

<section class="banner">
        <div class="container">
        <div class="banner__wrapper">
        
            <div class="banner__content">
                    <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'foodPost',
                    'posts_per_page' => 1,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'main'
                        ),
                    ),
                    ));
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                <div class="banner__text">
                    <h5>MUST TRY</h5>
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>

                <div class="btn">
                        <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
                </div>
                <div class="banner__img">
                    <?php echo get_the_post_thumbnail();?>
                </div>
                <?php
                endwhile;
                else : echo "no more post!!";
                endif;
                ?> 
            </div>
              
        </div>
        </div>
</section>

<section class="recipes">
        <div class="container">
            <div class="recipes__wrapper">
                <h1> <span>Recipes of the Week </span></h1>

                <div class="recipes__grid">
                <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'foodPost',
                    'posts_per_page' => 4,
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
                    <div class="recipes__grid__content">
                        <img src="<?php echo get_field('image') ?>" alt="" />
                        <div class="recipes__grid__text">
                            <h5><?php the_field('category');?></h5>
                            <h2><?php the_title();?></h2>
                            <p><?php the_content();?></p>
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
</section>

<section class="collection">
    <div class="container">
        <div class="collection__wrapper">
                <h1><span>Recipe Collection</span></h1>
                
            <div class="collection__content">
                    <?php
                    $category = get_field('category');
                    $menu = new WP_Query(array(

                    'post_type' => 'foods',
                    'posts_per_page' => 3,
                    'meta_query' => array(
                    array(
                        'key'     => 'category',
                        'value'   => get_field('groupings'),
                        'compare' => 'LIKE',
                    )
                    )
                    ))?>
                    <?php if($menu->have_posts()) : while($menu->have_posts()) : $menu->the_post() ?>
                    <div class="collection__content__items">
                        <img src="<?php echo get_field('image') ?>" alt="" />
                        <div class="collection__content__items__text">
                            <h5><?php the_field('category');?></h5>
                            <h2><?php the_title();?></h2>
                            <p><?php the_field('description');?></p>
                            <div class="btn">
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </div>
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
</section>

<section class="newsletter">
        <div class="container">
            <div class="newsletter__wrapper"> 
                <div class="newsletter__content">
                    <div class="newsletter__text">
                    <h1>Get our weekly newsletter</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Autem pariatur nostrum beatae? Aut vero, dolore quas voluptates 
                        eum placeat, provident illo possimus minima consectetur neque?</p>
                    </div>    
                    <div class="subscribe">
                        <div class="submit">
                        <textarea name="" id="" cols="50" rows="1"></textarea>
                        <a href="">Subscribe</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</section>

<section class="classic">
        <div class="container">
            <div class="classic__wrapper">
                <h1><span>Classic Collection</span></h1>

                <div class="classic__grid">
                    <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'foodPost',
                    'posts_per_page' => 9,
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
                    <div class="classic__grid__content">
                        <img src="<?php echo get_field('image') ?>" alt="" />
                        <div class="classic__grid__text">
                            <h5><?php the_field('category');?></h5>
                            <h2><?php the_title();?></h2>
                            <div class="classic__ul">
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
</section>

<?php get_footer()?>


