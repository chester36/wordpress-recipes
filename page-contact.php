<?php get_header()?>

<section class="banner__about">
        <div class="container">
            <div class="banner__about__wrapper">
                <h1><?php the_title();?></h1>
                <?php the_content();?>
            </div>
        </div>
</section>

<section class="contact__grid">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__grid__content">
                    <div class="contact__grid__content__items">
                        <h1>Let's talk about food</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quas facere ut aliquam ad recusandae qui temporibus hic atque magni nisi?Quas facere ut aliquam ad recusandae qui temporibus hic atque magni facere ut aliquam  facere ut aliquam  nisi</p>

                        <div class="contact__form">

                            <form action="#">
                                <h4>Name</h4>
                                <input type="text" id="name" name="name" placeholder=""> <br>
                                <h4>Email</h4>
                                <input type="text" id="email" name="email" placeholder=""> <br>
                                <h4>Phone</h4>
                                <input type="text" id="phone" name="phone" placeholder=""> <br>
                                <h4>Email</h4>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                

                                <div class="submit__btn">
                                    <a href="" class="btn yellow"> Send Message</a>
                                </div>
        
                            </form>
                        </div>
                    </div>
                     
                    <div class="contact__info__items">
                        <h2>Contact Info</h2>

                        <div class="info__text">
                            <h5>Email</h5>
                            <h3><i class="fa-solid fa-envelope"></i> <span>info@therecipe.com</span></h3>

                            <h5>Phone</h5>
                            <h3><i class="fa-solid fa-square-phone-flip"></i> <span>0902 123 1234</span></h3>
                            <h3><i class="fa-solid fa-square-phone-flip"></i> <span>0902 123 1234</span></h3>

                            <h5>Address</h5>
                             <h3><i class="fa-solid fa-location-dot"></i> <span>The Home of Food Network 75 Ninth Avenue New York, NY 10011</span></h3>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>


<?php get_footer()?>