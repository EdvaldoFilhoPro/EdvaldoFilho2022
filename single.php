<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
?>
     <!-- ======= About Section ======= -->
     <section id="about" class="about section-bg">
      <div class="container">

        <!-- <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div> -->

          <div class="col-xl-12 col-lg-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up"><?php the_category(',');?></h4>
            <h3 data-aos="fade-up"><?php the_title(); ?></h3>
            <p data-aos="fade-up"><?php the_content(); ?></p>

            <!-- <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div> -->

            <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div> -->

            <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> -->

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<?php
endwhile;

?>

<?php get_footer(); ?>

