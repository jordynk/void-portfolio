<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<h1>Jordyn Kanaya</h1>

<div class = "hero-section">
  <div class = "hero-box">
    <img class = "hero-img" src = "https://lh3.googleusercontent.com/pw/AM-JKLUlLItT_eb2X_1rtWsElUBSUYfLiLoDX6YYX76_wL-3FVVasW0Q5pfnqJJu2Mr6S4e4exFPDFaBAOJ4_xOjKK-8FKVaGLqZ1-eqVasi_hX_s29A5tmUSKAj9_S_BY9jECpfPhJ1j8vTo7WRPyyLa3n-=s1537-no?authuser=0" 
    width = 300;
    height = 300;
    alt = "headshot">
  </div>
  <div class = "hero-box hero-t text">
    <h1 class= "title"> 👋Hi, I'm Jordyn </h1>
    <p> I am currently a sophomore at the University of Michigan studying Computer Science. </p>

  </div>
</div> 

<div class = "space about-me">
  <h1 class = " text title sections"> About Me. </h>
    <p> I'm from San Francisco, California. I am currently pursuing a Computer Science major
      and an International minor through the College of Engineering. I plan on graduating in 2024. 
      I am interested in the exploring all the possible positive impacts technology
      can have in the world, as well as spreading knowledge about computer science and techonologies' capabilities 
      to future generations. I love playing sports, hiking, baking, eating, and traveling. 
    </p>
</div> 

<div class = "projects text space">
  <h1 class = "title sections"> Projects. </h>
  <div class = "project-indiv">
    <div class = "proj-box text">
        <h2> Computer Vision </h2>
          <p> In this project I implementing a seam carving algorithm, this is used for resizing images and is sometimes
            known as "retargeting". This allows us to resize images by changing the ratio without actually distorting
          the image. This is not cropping as the code removes the "seams" within the image that go through the 
          least important pixels </p>
          <p class = "project-skill"> </p>
    </div> 
    <div class = "proj-box">
      <img src = "https://lh3.googleusercontent.com/RkRYi9VP-o_jGc0QcXm5HwGIssXh0zDx0GI5aPQVW-8y8-4Qqzz4DQ8htMewGZB1xFHEdmw9tcsc2aQ2QrbM0_F7chyK4v65tZa1vKEaU_gQluJkHphqPoHKru_z4ClWQ_UQL3cWmoEZ1OMiaBD1UWQnYlfSQ0ZoQ4GS6i0e6uvIEqcTsME7TaNutM-AEm-qFaeoNdLGvKknqhzOzA3Wf-loxD1NjG1B5QHPO4-oGi--Ps0AWWi2PLQsrZZMN-atq0y6cHT6cPKLZ67BmJKor9HLI_mwqI4GJ0p4q1zMm7dACp8hSiBE4_IYB-8da9QKIIHOiGpORP48fXiN5OToO6KKQTMsWmyVBU14pCYUXr_tymM25b6DPW0WkQi1J_Egnhy7HKd9UMWi6d2uRvPDW8NBPO05fMyQTGKabLjCTsmSiOAzKrQ5hQvOyaop9scabJP8dwZ87kG1Ujp65F-3lv6JJR0594kURzdsD28mWAm2vUEL7ixJQMULsT0KgDvhLb2GABmIKf6XFw_lLu4m62d819DfOdqj-XIAqsHTyTiWwFVyKyCtQ4WRWi_rMRZkitVuuqOk66poUrL9SDzfa4h94ghoH81-QyYXh4VNH7qlFLHl4xkQ1bngUbV1MNVQLn8s312h8Et2iqx-heVnclsYbELYLWwWJubRZ4o9P6IHkzziFQ9rnij6wUcpQcShvBwB3HxigMzX8u1jQd4XoGOU=w1724-h810-no?authuser=0" 
          width = 250;
          height = 200;
          alt = "cv-horses">
      </div> 
  </div>   
</div>



<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>

<!-- Example with default video if $home_top_vid isn't set 
<iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe> -->

<?php get_footer(); ?>
