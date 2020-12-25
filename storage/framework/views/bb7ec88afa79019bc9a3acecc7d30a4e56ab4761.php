   <div class="">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo e(asset('assets-frontend/image/banner-Img.png')); ?>" class="d-block w-100 img-fluid">
                <div class="carousel-caption d-none d-md-block bannerPart2">
                <h3>WE ARE PROFESSIONAL & EXPERT</h3>
                <h1>CONNECTING<span> FITNESS PROVIDORS </span>AND<strong> SEEKERS</strong> 24/7</h1>
                <h5>Best GYM & Fitness Center Build Your Health</h5><br>
                <a href="workout.html"> Get Strated</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('assets-frontend/image/banner-Img.png')); ?>" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('assets-frontend/image/banner-Img.png')); ?>" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <!-- Banner End -->


  <!----Cetegory start----->
  <section id="Cetegory">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 Cetegory" onclick="window.location.href='<?php echo env('APP_URL')?>Physical';">
          <div class="innersection Physical" style="background-image: url(<?php echo e(asset('assets-frontend/image/Physical-1.png')); ?>);">
            <div class="overlayer">
              <h3>Physical</h3>
              <a href="#">join us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 Cetegory" onclick="window.location.href='<?php echo env('APP_URL')?>Mental';">
          <div class="innersection" style="background-image: url(<?php echo e(asset('assets-frontend/image/m.jfif')); ?>);">
            <div class="overlayer Mental">
              <h3>Mental</h3>
              <a href="#">join us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 Cetegory" onclick="window.location.href='<?php echo env('APP_URL')?>Emotional';">
          <div class="innersection " style="background-image: url(<?php echo e(asset('assets-frontend/image/e.jfif')); ?>);">
            <div class="overlayer Emotional">
              <h3>Emotional</h3>
              <a href="#">join us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----Cetegory End----->
  

  <!----imageGellery start----->
  <br>
  <section id="imageGellery">
    <div class="images">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/1.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/2.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/3.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/4.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/5.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/6.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/7.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/8.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/9.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/10.png')); ?>">
      <img src="<?php echo e(asset('assets-frontend/image/profiles/11.png')); ?>">

    </div>
  </section>
  <!----imageGellery End----->

  



  <!----schedule header start----->
  <section id="schedule">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 scheduleHeding">
          <h2>schedule</h2>
          <br>
          <a href="#">TYPE</a>
          <a href="#">RATING</a>
          <a href="#">DATE</a>
          <a href="#">TIME</a>
          <a href="#">PRICE</a>
        </div>
        <div class="col-lg-6">
          <div class="schedule_btn">
            <a href="#" class="fa fa-list"></a>
            <a href="#" class="fa fa-th-large"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----schedule header end----->

  <!----scheduleImges header start----->
  <section id="scheduleImges" style="margin-top: -70px;">
    <div class="container">
      <div class="row rows" id="MeetingTableBody">
        <!-- Meetings Table Body -->
      </div>
      
    </div>
  </section><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/home/physical.blade.php ENDPATH**/ ?>