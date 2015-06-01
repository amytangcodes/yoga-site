<!--how to make dynamic?-->
<?php get_header(); ?>
<section class="headerBackground"> <!--header of front page-->
 <h2>Just Be</h2> <!--make dynamic-->
 <button class="getStarted">Get Started</button>
</section><!--end of header front page-->

<div class="container"><!--overview section-->
   <section class="frontPageContent">
     <div class="quickOverview">
       <article class="overviewLeft">
         <a href="#" class="practice">
           <img class="overviewImage" src="<?php bloginfo('template_directory') ?>/img/studio5.jpg" alt="">
          <p class="overviewHeading">Practice</p>
         </a>
         <hr>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At expedita consequuntur facere! Ex, dicta, esse.</p>
       </article>
       <article class="overviewMiddle">
         <a href="#" class="lifestyle"> 
           <img class="overviewImage" src="<?php bloginfo('template_directory') ?>/img/studio6.jpg" alt="">
           <p class="overviewHeading">Lifestyle</p>
        </a>
        <hr>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur delectus perferendis recusandae adipisci veniam.</p>
       </article>
       <article class="overviewRight">
        <a href="#" class="promo">
          <img class="overviewImage" src="<?php bloginfo('template_directory') ?>/img/studio4.jpg" alt="">
          <p class="overviewHeading">Monthly Promo</p>
        </a>
         <hr>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus odit quidem odio modi voluptatem quisquam.</p>
       </article>
     </div>
   </section>
</div><!--end of overview section-->

<section class="studio"><!--studio section-->
  <div class="container">
    <h2 class="ourStudio">Our Studio</h2>
    <div class="studioImages">
      <img class="studioImage" src="<?php bloginfo('template_directory') ?>/img/studio.jpg" alt="">
      <img class="studioImageMiddle" src="<?php bloginfo('template_directory') ?>/img/studio6.jpg" alt="">
      <img class="studioImage" src="<?php bloginfo('template_directory') ?>/img/studio3.jpg" alt="">
    </div>
    <p class="studioDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus modi quas tempore, illo accusantium! Dolorem qui quasi alias cum rerum totam neque nisi, laborum, facilis minus, vero non facere animi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci itaque cum vitae voluptatibus laboriosam voluptate debitis quaerat alias beatae! Quasi cum rerum harum quo explicabo deleniti veritatis magnam saepe doloremque.</p>
  </div>
</section><!--end of studio section-->

<section class="juicebar"><!--juicebar section-->
  <h2 class="onSiteJuice">On Site Juice Bar</h2>
  <div class="container flexContainer">
     <div class="leftText">
       <p class="juicebarInfo top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam expedita numquam, placeat nesciunt tempora quaerat sed, non quis similique fugiat ad minus alias asperiores dolorem veniam adipisci culpa incidunt inventore.</p>
       <p class="juicebarInfo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam expedita numquam, placeat nesciunt tempora quaerat sed, non quis similique fugiat ad minus alias asperiores dolorem veniam adipisci culpa incidunt inventore.</p>
       <p class="juicebarInfo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam expedita numquam, placeat nesciunt tempora quaerat sed, non quis similique fugiat ad minus alias asperiores dolorem veniam adipisci culpa incidunt inventore.</p>
     </div>
     <img class="juicebar" src="<?php bloginfo('template_directory') ?>/img/juicebar.jpg" alt="">
  </div>
</section><!--end of juicebar section-->
<?php get_footer(); ?>