<!-- alert message -->
<?php if(@session('status')){?>
    <div class="container">
        <?php if(session('status') == 'true'){ ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Success!</strong> <?php echo session('message'); ?>
        </div>
        <?php }elseif(session('status') == 'false'){ ?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Warning!</strong> <?php echo session('message'); ?>
        </div>
        <?php } ?>
    </div>
<?php }?>
<!-- end alert -->
 
    <!-- Banner Start -->
    <div class="Banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators d-none">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-none d-md-block d-lg-block d-sm-none d-md-none w-100" src="<?php echo e(asset('assets-frontend/images/banner-Img.png')); ?>" alt="First slide">
                    <img class="d-block d-md-none w-100" src="<?php echo e(asset('assets-frontend/images/banner-Img-mob.png')); ?>" alt="First slide">

                    <div class="carousel-caption bannerPart2">
                        <div class="container">
    
                            <div class="col-md-6 offset-md-6 col-sm-6 offset-sm-6 content">
                                <h3><span>WE</span> ARE PROFESSIONAL & EXPERT</h3>
                                <h1>CONNECTING<span> FITNESS</span> <br> <span>PROVIDORS</span>AND<strong> SEEKERS</strong>
                                    24/7
                                </h1>
                                <h5>Best GYM & Fitness Center Build Your Health</h5><br>
                                <a href="workout.html"> Get Strated</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-none d-md-block d-lg-block d-sm-none d-md-none w-100" src="<?php echo e(asset('assets-frontend/images/banner-Img.png')); ?>" alt="First slide">
                    <img class="d-block d-md-none w-100" src="<?php echo e(asset('assets-frontend/images/banner-Img-mob.png')); ?>" alt="First slide">

                    <div class="carousel-caption bannerPart2">
                        <div class="container">
    
                            <div class="col-md-6 offset-md-6 col-sm-6 offset-sm-6 content">
                                <h3><span>WE</span> ARE PROFESSIONAL & EXPERT</h3>
                                <h1>CONNECTING<span> FITNESS</span> <br> <span>PROVIDORS</span>AND<strong> SEEKERS</strong>
                                    24/7
                                </h1>
                                <h5>Best GYM & Fitness Center Build Your Health</h5><br>
                                <a href="workout.html"> Get Strated</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-none d-md-block d-lg-block d-sm-none d-md-none w-100" src="<?php echo e(asset('assets-frontend/images/banner-Img.png')); ?>" alt="First slide">
                    <img class="d-block d-md-none w-100" src="<?php echo e(asset('assets-frontend/images/banner-Img-mob.png')); ?>" alt="First slide">

                    <div class="carousel-caption bannerPart2">
                        <div class="container">
    
                            <div class="col-md-6 offset-md-6 col-sm-6 offset-sm-6 content">
                                <h3><span>WE</span> ARE PROFESSIONAL & EXPERT</h3>
                                <h1>CONNECTING<span> FITNESS</span> <br> <span>PROVIDORS</span>AND<strong> SEEKERS</strong>
                                    24/7
                                </h1>
                                <h5>Best GYM & Fitness Center Build Your Health</h5><br>
                                <a href="workout.html"> Get Strated</a>
                            </div>
                        </div>
                    </div>
                </div>
                
    
            </div>
        </div>
        <div class="navigation">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    <!-- Banner End -->

    <!--Three buttons Start -->
    <div class="mid_content">
    <section class="threecard">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card physical shadow">
                        <div class="card-img-overlay text-center">
                            <h2 class="card-title text-center">Physical</h2>
                            <button type="button" class="btn btn-secondary">Join
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card mental shadow">
                        <div class="card-img-overlay text-center">
                            <h2 class="card-title text-center">Mental</h2>
                            <button type="button" class="btn btn-secondary">Join
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card emotional shadow">
                        <div class="card-img-overlay text-center">
                            <h2 class="card-title text-center">Emotional</h2>
                            <button type="button" class="btn btn-secondary">Join
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Three button End -->

    <!-- Mentors img crousel Start -->

    <section class="multiSlider">
        <div class="customer-logos slider  shadow-lg p-3 bg-white rounded">
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/1.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/2.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/3.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/4.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/5.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/6.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/7.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/8.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/1.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/2.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/3.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/4.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/5.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/6.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/7.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('assets-frontend/images/profiles/8.png')); ?>"></div>
        </div>
    </section>

    <!-- Mentors img crousel End -->

    <!-- Schedule Section Start -->
    <section class="mainschedule">
        <!----schedule header start----->
        <div class="schedule">
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 scheduleHeding">
                        
                        <br>
                        <ul class="p">
                            <h2>schedule</h2>
                            <li><a href="#">TYPE</a></li>
                            <li><a href="#">RATING</a></li>
                            <li><a href="#">DATE</a></li>
                            <li><a href="#">TIME</a></li>
                            <li><a href="#">PRICE</a></li>
                        </ul>
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="schedule_btn">
                            <a href="#" class="fa fa-list"></a>
                            <a href="#" class="fa fa-th-large"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                       
                        <div class="dropdown ">
                            <div class=" " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <button class="btn btn-secondary">Type</button>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                               <ul>
                                    <li class="dropdown-item mb-1">Physical</li>
                                    <li class="dropdown-item mb-1" >Mental</li>
                                    <li class="dropdown-item mb-1" >Emotional</li>
                              </ul>
                              <button class="btn btn-primary btn-sm ml-1">Done</button>
                              <button class="btn btn-primary btn-sm">Clear all</button>
                            </div>
                            
                        </div>

                        <div class="ScheduleHeding d-flex"> 
                            <div class="dropdown dropdownbody">
                                <button class="btn btn-primary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Type
                                </button>
                                <form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <label class="dropdown-item"><input type="checkbox" name="" value="one">Physical</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="two">Mental</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="three">Emotional</label>
                                  
                                </form>
                                
                            </div>
                            <div class="dropdown dropdownbody">
                                <button class="btn btn-primary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Level
                                </button>
                                <form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <label class="dropdown-item"><input type="checkbox" name="" value="one">EVERYBODY</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="two">BEGINNER</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="three">INTERMEDIATE</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="three">ADVANCED</label>
                                  
                                </form>
                                
                            </div>
                            <div class="dropdown dropdownbody">
                                <button class="btn btn-primary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Time 
                                </button>
                                <form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <p>We believe you are in -</p>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="one">MORNING</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="two">AFTERNOON</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="three">EVENING</label>
                                  <label class="dropdown-item"><input type="checkbox" name="" value="three">ADVANCED</label>
                                  
                                </form>
                                
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div> -->



            <div class="container filter-pills sticky-filter-header mb-md-5 px-0 px-sm-3">


                <form id="jFilterForm" class="filterform">
                    <div class="position-relative col-12 pl-0">
                        <ul class="p-0 list-unstyled d-flex align-items-center justify-content-start scroll-x-filter-pils"
                            style="margin-bottom:0 !important; padding-bottom: 1rem !important;">
                            <li class="d-block d-md-none px-2 jToggleFilter">
                                <svg width="20" height="20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 13">
                                    <path
                                        d="M3.936 4.574h4.723a.787.787 0 000-1.574H3.936a.787.787 0 100 1.574zM2.362 8.297h7.871a.787.787 0 000-1.574H2.362a.787.787 0 100 1.574zm9.446 2.137H.788a.787.787 0 000 1.574h11.02a.787.787 0 100-1.574z"
                                        fill="url(#paint0_linear)"></path>
                                    <path d="M7.5 1.574H5.01A.787.787 0 015.01 0H7.5a.787.787 0 010 1.574z"
                                        fill="url(#paint1_linear)"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="-9.428" y1=".968" x2="13.45" y2="19.628"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset=".001" stop-color="#FF505C"></stop>
                                            <stop offset="1" stop-color="#CA33A9"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear" x1="-9.428" y1=".968" x2="13.45" y2="19.628"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset=".001" stop-color="#FF505C"></stop>
                                            <stop offset="1" stop-color="#CA33A9"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg></li>
        
                            <li class="dropdown jTypeClick jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span>TYPE</span>
                                </a>
        
        
                                <div class="dropdown-menu dropdown-menu-form p-3 border-0 jFilterContainer jTypeClick mt-2 width340 categoryFilterDropDown"
                                    role="menu" style="">
                                    <div class="dropdownScrollWrapper">
                                        <div class="btn-group-toggle row jIgnoreDropDownClick" data-toggle="buttons">
        
        
        
                                            <label class="col-4 checkbox-label" title="HIIT">
                                                <input type="checkbox" name="categories[]" value="HIIT" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="45" height="44" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 45 44">
                                                        <g style="mix-blend-mode:multiply" opacity=".3">
                                                            <path
                                                                d="M18.086 35.964h-.768a.328.328 0 00-.328.327v7.101c0 .181.147.328.328.328h.768a.328.328 0 00.328-.328v-7.1a.328.328 0 00-.328-.328zM15.387 37.067h1.055v5.55h-1.055a.37.37 0 01-.37-.37v-4.81a.37.37 0 01.37-.37zM14.26 39.13h.21v1.425h-.21a.712.712 0 010-1.425zM39.625 43.721h.767a.328.328 0 00.328-.327v-7.102a.328.328 0 00-.328-.327h-.767a.328.328 0 00-.328.327v7.102c0 .18.147.327.328.327zM42.322 42.618h-1.054v-5.55h1.054a.371.371 0 01.37.37v4.81a.37.37 0 01-.37.37zM43.45 40.554h-.21v-1.425h.21a.713.713 0 010 1.425z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <path
                                                            d="M6.637 43.855H.134A.134.134 0 010 43.72a.133.133 0 01.134-.134h6.503a.133.133 0 01.124.186.133.133 0 01-.124.083zM24.379 43.855H11.007a.135.135 0 010-.27h13.372a.133.133 0 01.124.187.134.134 0 01-.124.083zM44.284 43.855H28.941a.135.135 0 110-.27h15.343a.133.133 0 01.134.135.134.134 0 01-.134.135z"
                                                            fill="#000"></path>
                                                        <path d="M8.012 16.428a3.36 3.36 0 100-6.719 3.36 3.36 0 000 6.72z"
                                                            fill="#45B7D3"></path>
                                                        <path
                                                            d="M28.076 41.487L15.572 17.975l1.694-8.085a1.634 1.634 0 00-.459-1.503l-4.925-4.8a1.694 1.694 0 00-2.164-.212 1.634 1.634 0 00-.178 2.49l4.345 4.234-1.165 5.566-5.95 3.268a1.628 1.628 0 00-.923.942l-2.332 6.227a1.63 1.63 0 00.235 1.568l3.66 4.756a1.63 1.63 0 001.805.554l-1.844 8.968a1.695 1.695 0 001.02 1.953 1.634 1.634 0 002.16-1.205l1.862-9.038 5.237-3.748a.45.45 0 01.66.155L25.24 43.1a1.631 1.631 0 002.443.524 1.695 1.695 0 00.393-2.137zM10.307 31.143a1.63 1.63 0 00-.313-.71l-3.106-4.037 1.584-4.23 4.048 7.394-2.213 1.583z"
                                                            fill="#65DFEF"></path>
                                                        <path opacity=".3"
                                                            d="M13.217.156l-.54.32a1.094 1.094 0 00-.38 1.5l.184.311-4.436 2.639-.186-.312a1.09 1.09 0 00-1.498-.381l-.54.322a1.09 1.09 0 00-.381 1.497l1.442 2.426a1.09 1.09 0 001.498.381l.54-.321a1.09 1.09 0 00.381-1.498l-.185-.312 4.438-2.639.185.312a1.09 1.09 0 001.497.38l.541-.32a1.09 1.09 0 00.38-1.498L14.716.533a1.09 1.09 0 00-1.498-.377zM18.748 39.13v1.425h4.083l-.754-1.425h-3.33zm9.114 0l.754 1.425H39.63V39.13H27.862z"
                                                            fill="#65DFEF"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">HIIT</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="YOGA">
                                                <input type="checkbox" name="categories[]" value="YOGA" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="43" height="44" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 43 44">
                                                        <g style="mix-blend-mode:multiply" opacity=".3">
                                                            <path
                                                                d="M21.1 19.571a14.187 14.187 0 00-3.905 10.114 14.636 14.636 0 003.906 10.021 14.636 14.636 0 003.905-10.023A14.195 14.195 0 0021.1 19.572zM17.636 38.676a17.368 17.368 0 01-2.545-8.968c0-.402.007-.815.031-1.23a14.032 14.032 0 00-9.204-3.52c.231 7.219 5.915 12.45 11.718 13.718zM5.887 32.33a16.59 16.59 0 01-.91-1.877c-.865.088-1.72.258-2.553.507.226.667.504 1.316.831 1.94.86-.263 1.74-.454 2.632-.57zM8.512 35.826c-.464-.478-.9-.982-1.308-1.51A13.856 13.856 0 00.5 36.48a14.581 14.581 0 0012.098 6.072c2.28.018 4.533-.504 6.573-1.523l-.339-.034a17.243 17.243 0 01-10.32-5.169zM16.47 22.768a13.675 13.675 0 00-3.393-2.092 13.658 13.658 0 00-.855 3.51 16.59 16.59 0 013.215 1.855 16.37 16.37 0 011.033-3.273zM36.172 24.957a14.02 14.02 0 00-9.204 3.518c.024.412.036.825.03 1.23a17.362 17.362 0 01-2.544 8.968c5.804-1.265 11.487-6.496 11.718-13.716zM39.667 30.963a13.74 13.74 0 00-2.553-.507 16.303 16.303 0 01-.91 1.876c.892.119 1.773.31 2.633.574.327-.625.604-1.275.83-1.943zM34.887 34.316c-.406.527-.841 1.03-1.304 1.509a17.236 17.236 0 01-10.322 5.174l-.338.034A15.05 15.05 0 0041.59 36.48a13.856 13.856 0 00-6.703-2.164zM29.87 24.187a13.655 13.655 0 00-.856-3.511 13.606 13.606 0 00-3.391 2.092 16.48 16.48 0 011.03 3.271 16.68 16.68 0 013.217-1.852z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <path d="M20.701 11.45a3.522 3.522 0 100-7.045 3.522 3.522 0 000 7.044z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M24.78 15.437A8.944 8.944 0 0023.848.182a1.516 1.516 0 10-1.388 2.695 5.902 5.902 0 01.642 10.023h-4.838a5.904 5.904 0 01.64-10.023A1.517 1.517 0 0017.518.18a8.944 8.944 0 00-.93 15.257l.011 8.472-6.581 2.733a2.022 2.022 0 00-1.234 1.457 1.767 1.767 0 00.9 2.137l8.43 4.105a1.777 1.777 0 001.561-3.185l-5.194-2.527 6.543-2.717c.08-.036.157-.076.232-.121l.006 16.403a1.76 1.76 0 103.52-.006l-.007-17.673c0-.031-.008-.062-.01-.093l.014-8.985z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M41.956 43.549H26.432a.136.136 0 010-.27h15.524a.135.135 0 110 .27zM20.328 43.549H.135a.136.136 0 010-.27h20.193a.135.135 0 110 .27z"
                                                            fill="#000"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">YOGA</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="BOXING">
                                                <input type="checkbox" name="categories[]" value="BOXING" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="50" height="59" viewBox="0 0 50 59" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.69 20a4.16 4.16 0 100-8.32 4.16 4.16 0 000 8.32z"
                                                            fill="#EF515A"></path>
                                                        <path d="M37.96 26.74a3.06 3.06 0 100-6.12 3.06 3.06 0 000 6.12z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M38 20.62a3 3 0 00-2.43 1.23H15a1.8 1.8 0 00-1.15.44L6.9 28.18a1.82 1.82 0 00.95 3.29c.09.01.18.01.27 0h.29L15 29.73v7.88L1.59 55.09a2.33 2.33 0 00.09 3.27 2.34 2.34 0 003.2-.68l14.57-19c.084-.115.16-.236.23-.36l7.7 8.11V56.7a2.1 2.1 0 104.19 0V45.62a2.08 2.08 0 00-.69-1.54 2.48 2.48 0 00-.21-.27l-6.27-6.6v-11.7h11.1a3.06 3.06 0 102.5-4.89z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M48.87 58.27H32.75a.16.16 0 010-.32h16.12a.16.16 0 01.16.16.17.17 0 01-.16.16zM26 58.27H6.69a.16.16 0 010-.32H26a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <path
                                                            d="M43.58 10.89h-.3l-2.11-4.42V0h-1v6.47l-2.11 4.42h-.38a4.05 4.05 0 00-4 4v5.41h1.23A4.49 4.49 0 0138 19.12a4.56 4.56 0 110 9.12A4.49 4.49 0 0134.85 27h-1.22v3.84a4.001 4.001 0 004 4.05h5.9a4.002 4.002 0 004-4.05v-15.9a4.05 4.05 0 00-3.95-4.05zm-4.41 0l1.5-3.14 1.51 3.14h-3.01z"
                                                            fill="#65DFEF" opacity=".3"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">BOXING</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="BARRE">
                                                <input type="checkbox" name="categories[]" value="BARRE" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="40" height="43" viewBox="0 0 40 43" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g style="mix-blend-mode:multiply" opacity="0.3">
                                                            <path d="M23.0737 14.022L23.4033 16.0734H37.6643V14.022H23.0737Z"
                                                                fill="#65DFEF"></path>
                                                        </g>
                                                        <g style="mix-blend-mode:multiply" opacity="0.3">
                                                            <path d="M21.3519 14.022H0.187012V16.0734H21.6732L21.3519 14.022Z"
                                                                fill="#65DFEF"></path>
                                                        </g>
                                                        <path
                                                            d="M15.8897 6.8545C16.5675 6.8545 17.2301 6.6535 17.7937 6.27691C18.3573 5.90032 18.7966 5.36505 19.056 4.7388C19.3154 4.11256 19.3833 3.42345 19.251 2.75863C19.1188 2.09381 18.7924 1.48313 18.3131 1.00382C17.8338 0.524511 17.2231 0.198096 16.5583 0.065855C15.8935 -0.0663862 15.2043 0.00148543 14.5781 0.260886C13.9519 0.520286 13.4166 0.959565 13.04 1.52317C12.6634 2.08678 12.4624 2.74941 12.4624 3.42725C12.4646 4.33555 12.8264 5.20602 13.4686 5.84828C14.1109 6.49054 14.9814 6.85233 15.8897 6.8545"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M39.221 41.8603H24.647C24.612 41.8603 24.5785 41.8464 24.5537 41.8217C24.529 41.797 24.5151 41.7635 24.5151 41.7285C24.5151 41.6935 24.529 41.66 24.5537 41.6353C24.5785 41.6106 24.612 41.5967 24.647 41.5967H39.221C39.256 41.5967 39.2895 41.6106 39.3142 41.6353C39.3389 41.66 39.3528 41.6935 39.3528 41.7285C39.3509 41.7628 39.3363 41.7952 39.312 41.8195C39.2877 41.8438 39.2553 41.8583 39.221 41.8603V41.8603Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M17.8093 41.8603H1.73582C1.7015 41.8583 1.6691 41.8438 1.6448 41.8195C1.62049 41.7952 1.60597 41.7628 1.604 41.7285C1.604 41.6935 1.61789 41.66 1.64261 41.6353C1.66733 41.6106 1.70086 41.5967 1.73582 41.5967H17.8093C17.8443 41.5967 17.8778 41.6106 17.9025 41.6353C17.9272 41.66 17.9411 41.6935 17.9411 41.7285C17.9411 41.7635 17.9272 41.797 17.9025 41.8217C17.8778 41.8464 17.8443 41.8603 17.8093 41.8603Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M22.9498 18.8334C22.9628 18.7267 22.9628 18.6188 22.9498 18.5121L21.5163 9.68855C21.4015 9.04303 21.0573 8.46074 20.5471 8.04895C20.0369 7.63716 19.3951 7.42362 18.7399 7.44765C18.5117 7.43535 18.283 7.46324 18.0644 7.53004L10.7073 10.7678L4.00111 11.4434L2.93833 10.8667C2.53629 10.6482 2.06391 10.5983 1.62513 10.7281C1.18634 10.8579 0.817075 11.1567 0.598574 11.5587C0.380073 11.9607 0.330231 12.4331 0.460014 12.8719C0.589797 13.3107 0.888572 13.68 1.29061 13.8985L18.3857 23.2081C18.7256 23.3917 19.1193 23.45 19.4979 23.3728V40.4844C19.5281 40.9215 19.7231 41.3309 20.0434 41.6299C20.3638 41.9289 20.7857 42.0951 21.2239 42.0951C21.6621 42.0951 22.0839 41.9289 22.4043 41.6299C22.7246 41.3309 22.9196 40.9215 22.9498 40.4844V18.8334ZM11.2428 13.7419C11.3981 13.7323 11.5497 13.6902 11.6877 13.6183H11.7371L15.4445 11.9706L16.4166 18.199L8.68062 13.9891L11.2428 13.7419Z"
                                                            fill="#F2737B"></path>
                                                    </svg>
        
                                                    <span class="mt-2 type-name">BARRE</span>
                                                </span>
                                            </label>
        
        
                                            <label class="col-4 checkbox-label" title="AERIAL">
                                                <input type="checkbox" name="categories[]" value="AERIAL" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="33" height="49" viewBox="0 0 33 49" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.651367 48.0801H32.5691" stroke="black"
                                                            stroke-width="0.268558" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M10.3033 16.2272L10.8729 0.0893555H9.79869L8.03271 16.2679L10.3033 16.2272Z"
                                                            fill="#C1F2F9"></path>
                                                        <path
                                                            d="M6.11175 37.5978C6.77473 37.7049 7.39103 38.0064 7.8826 38.464C8.37417 38.9215 8.71891 39.5147 8.87319 40.1683C9.02747 40.822 8.98434 41.5067 8.74927 42.1358C8.51419 42.7649 8.09774 43.3101 7.55264 43.7024C7.00754 44.0947 6.3583 44.3164 5.68711 44.3395C5.01592 44.3626 4.35296 44.186 3.78217 43.8322C3.21138 43.4783 2.75843 42.963 2.48065 42.3516C2.20287 41.7401 2.11276 41.06 2.22173 40.3973C2.37149 39.5128 2.8638 38.7229 3.59196 38.1989C4.32011 37.6748 5.22545 37.4589 6.11175 37.5978"
                                                            fill="#45B7D3"></path>
                                                        <path
                                                            d="M4.91572 22.2255L7.65826 19.0516L7.55246 18.6447L16.773 16.0568C17.0223 16.0313 17.263 15.9516 17.4782 15.8232C17.6935 15.6949 17.878 15.5209 18.0189 15.3136C18.1597 15.1064 18.2535 14.8708 18.2936 14.6234C18.3337 14.376 18.3192 14.1228 18.2511 13.8817C18.183 13.6405 18.0629 13.4172 17.8992 13.2273C17.7356 13.0375 17.5324 12.8858 17.3039 12.7829C17.0754 12.6799 16.8272 12.6283 16.5766 12.6315C16.326 12.6347 16.0791 12.6927 15.8533 12.8015L5.41214 15.7068C5.08993 15.7982 4.7905 15.9563 4.53322 16.1707L4.46812 16.2277L4.36232 16.3253C4.14542 16.5299 3.98669 16.7883 3.90233 17.0743C3.81798 17.3602 3.81102 17.6634 3.88217 17.9529L4.91572 22.2255Z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M30.9981 22.7868C30.8689 22.3361 30.5681 21.9541 30.1602 21.7228C29.7524 21.4915 29.2701 21.4294 28.817 21.5498L16.6099 24.5691L16.8703 27.9789L29.6309 24.8376C29.8355 24.7883 30.0307 24.7059 30.2087 24.5935C30.5099 24.4099 30.7472 24.138 30.8885 23.8147C31.0297 23.4915 31.068 23.1326 30.9981 22.7868Z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M24.5613 34.1798H10.9136L11.7274 31.128V25.7732L10.1731 26.1556C9.82313 26.237 9.48947 26.1556 9.35926 25.8057L8.35827 21.8262L5.72152 25.9441L3.28008 33.4881C3.15172 33.9351 3.19591 34.414 3.4039 34.83C3.61189 35.246 3.96851 35.5687 4.40314 35.7342L7.9595 36.9793L8.15481 37.0363C8.21308 37.0574 8.27295 37.0737 8.33385 37.0851H8.42337H8.58613H24.488C24.8199 37.0194 25.1194 36.8426 25.3374 36.5839C25.5554 36.3252 25.6788 36 25.6874 35.6618C25.6959 35.3236 25.589 34.9926 25.3843 34.7232C25.1797 34.4539 24.8894 34.2622 24.5613 34.1798Z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M13.7783 28.7357L16.1058 28.1579L13.6644 0H11.7764L12.5902 29.4112C12.9163 29.0806 13.3275 28.8468 13.7783 28.7357V28.7357Z"
                                                            fill="#C1F2F9"></path>
                                                        <path
                                                            d="M7.62552 18.6206L4.81787 21.8433L5.53403 24.7649L9.96116 17.9858L7.62552 18.6206Z"
                                                            fill="#C1F2F9"></path>
                                                    </svg>
        
                                                    <span class="mt-2 type-name">AERIAL</span>
                                                </span>
                                            </label>
                                            
        
        
        
                                            <label class="col-4 checkbox-label" title="SUSPENSION">
                                                <input type="checkbox" name="categories[]" value="SUSPENSION" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.5 47.3H.9c-.1 0-.2-.1-.2-.2s.1-.2.2-.2h7.6c.1 0 .2.1.2.2s-.1.2-.2.2zM33 47.3H13.5c-.1 0-.2-.1-.2-.2s.1-.2.2-.2H33c.1 0 .2.1.2.2s-.2.2-.2.2zM46.8 47.3h-7.6c-.1 0-.2-.1-.2-.2s.1-.2.2-.2h7.6c.1 0 .2.1.2.2s-.1.2-.2.2z"
                                                            fill="#000"></path>
                                                        <path
                                                            d="M10.6 16.1c2.3 0 4.2-1.9 4.2-4.2 0-2.3-1.9-4.2-4.2-4.2-2.3 0-4.2 1.9-4.2 4.2 0 2.3 1.9 4.2 4.2 4.2z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M11.5 20.1l5.1 4.3-6.5 1.3c-.3.1-.7.3-.9.6-.2.2-.3.7-.2 1.1.1.8.9 1.4 1.6 1.3l9.8-1.9c.6-.1 1.1-.6 1.1-1.3.1-.5-.1-1-.4-1.3l-7.6-6.4c-.3-.2-.6-.3-1-.3s-.8.2-1.1.6c-.5.6-.5 1.5.1 2zM37 43.5l-9.8-5.3c-.5-.5-6.8-5.9-8.3-7.2-.2-.2-.4-.4-.4-.7l-.7-2.5-7 1.4h-.4l.8 2.5-7.3 2.4c-.3.1-.6.3-.8.5-.9.7-1.1 1.9-.4 2.8l6.4 9.1c.7.9 2 1.2 2.9.5.9-.7 1.2-2 .5-2.9l-4.9-6.8 8.1-2.7c.4-.1.9 0 1.2.2l7.6 6.6c.1.1.3.2.4.3.1.1.2.2.3.2l9.8 5.3c1 .5 2.3.2 2.8-.9.6-1 .2-2.2-.8-2.8z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M9 25.5c.3-.2.6-.4 1-.5l5.2-1-4.2-3.5c-.8-.7-.9-2-.1-2.9l.4-.4c-.1 0-.2 0-.2.1-2.2.7-3.5 3.5-2.9 5.7l.8 2.5z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M47.3 0h-2.4L12.5 25.8l-1.4-1-1 .2 2.3 1.7-1.1 2.4.9-.2.8-1.5L47.3 0z"
                                                            fill="#C1F2F9"></path>
                                                    </svg>
        
                                                    <span class="mt-2 type-name">SUSPENSION</span>
                                                </span>
                                            </label>
        
        
        
                                            <!-- <label class="col-4 checkbox-label" title="TAI CHI">
                                                <input type="checkbox" name="categories[]" value="TAI CHI" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M.49 41.08h7.09M16.29 41.08h27.46" stroke="#000"
                                                            stroke-width=".33" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path opacity=".3"
                                                            d="M13.51 23.12a18 18 0 1136 0 18 18 0 01-36 0zM27.06 40l-.38-.23a9.071 9.071 0 01-4.25-6.82 8.847 8.847 0 01.17-2.9 9.13 9.13 0 018.57-7.15c.46 0 .91 0 1.37-.08a7.662 7.662 0 002.2-.56A8.58 8.58 0 0040 12.8a8.53 8.53 0 00-8.31-7.14 17.999 17.999 0 00-2.64.18 17.45 17.45 0 00-9.5 4.66 17.329 17.329 0 00-5.19 9.66 16.38 16.38 0 00-.24 2.22 16.887 16.887 0 00.66 5.53 16.562 16.562 0 001.5 3.62 17.64 17.64 0 0010.37 8.37l.41.1zm2.23-8a2.22 2.22 0 102.16-2.23A2.2 2.2 0 0029.29 32z"
                                                            fill="#65DFEF"></path>
                                                        <path opacity=".3"
                                                            d="M29.29 14.27a2.22 2.22 0 114.44-.02 2.22 2.22 0 01-4.44.02z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M48.14 37.27l-9.82-3.67-7.53-10V13.5a2.623 2.623 0 01-.48.4L22 19a2.66 2.66 0 01-.85.36v3.08l-9.8 3.21a2.579 2.579 0 00-1.81 1.94 1.84 1.84 0 00-.08.53L9.5 39.2a2.1 2.1 0 104.19 0v-9.88l11.65-3.82a1.77 1.77 0 011.7.18l8 10.45c.078.095.162.185.25.27a2.07 2.07 0 001.08.93l10.31 3.87a2.1 2.1 0 001.46-3.93zM13.9 10.42c.071.036.145.066.22.09l7 2.38 5.68-3.48h-3.07a9.58 9.58 0 01-2-.21l-6.37-2.12L6 2a1.83 1.83 0 00-1.69 3.24l9.37 5.09.22.09z"
                                                            fill="#84E5F2"></path>
                                                        <path
                                                            d="M20.39 18.45c.123.015.248.015.37 0 .249-.038.487-.127.7-.26l8.31-5.09a1.83 1.83 0 10-2-3.07L20 14.79l-10.21-.22a1.83 1.83 0 100 3.66l10.6.22z"
                                                            fill="#84E5F2"></path>
                                                        <path d="M26.13 8.41a4.17 4.17 0 10.08-8.34 4.17 4.17 0 00-.08 8.34z"
                                                            fill="#6AC5DC"></path>
                                                    </svg>
        
                                                    <span class="mt-2 type-name">TAI CHI</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="BOXING">
                                                <input type="checkbox" name="categories[]" value="BOXING" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="50" height="59" viewBox="0 0 50 59" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.69 20a4.16 4.16 0 100-8.32 4.16 4.16 0 000 8.32z"
                                                            fill="#EF515A"></path>
                                                        <path d="M37.96 26.74a3.06 3.06 0 100-6.12 3.06 3.06 0 000 6.12z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M38 20.62a3 3 0 00-2.43 1.23H15a1.8 1.8 0 00-1.15.44L6.9 28.18a1.82 1.82 0 00.95 3.29c.09.01.18.01.27 0h.29L15 29.73v7.88L1.59 55.09a2.33 2.33 0 00.09 3.27 2.34 2.34 0 003.2-.68l14.57-19c.084-.115.16-.236.23-.36l7.7 8.11V56.7a2.1 2.1 0 104.19 0V45.62a2.08 2.08 0 00-.69-1.54 2.48 2.48 0 00-.21-.27l-6.27-6.6v-11.7h11.1a3.06 3.06 0 102.5-4.89z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M48.87 58.27H32.75a.16.16 0 010-.32h16.12a.16.16 0 01.16.16.17.17 0 01-.16.16zM26 58.27H6.69a.16.16 0 010-.32H26a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <path
                                                            d="M43.58 10.89h-.3l-2.11-4.42V0h-1v6.47l-2.11 4.42h-.38a4.05 4.05 0 00-4 4v5.41h1.23A4.49 4.49 0 0138 19.12a4.56 4.56 0 110 9.12A4.49 4.49 0 0134.85 27h-1.22v3.84a4.001 4.001 0 004 4.05h5.9a4.002 4.002 0 004-4.05v-15.9a4.05 4.05 0 00-3.95-4.05zm-4.41 0l1.5-3.14 1.51 3.14h-3.01z"
                                                            fill="#65DFEF" opacity=".3"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">BOXING</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="MARTIAL ARTS">
                                                <input type="checkbox" name="categories[]" value="MARTIAL ARTS" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="52" height="46" viewBox="0 0 52 46" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.84 45.08h14.65M24.87 45.08H51.5" stroke="#000"
                                                            stroke-width=".33" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path
                                                            d="M48.7 12.15a2.2 2.2 0 00-2.7-1.49L25.9 15.5l-4.18-4.31 5.15-.08c.132-.005.263-.025.39-.06.106.01.214.01.32 0l10.54-1.64a1.83 1.83 0 00-.62-3.6L27 7.43a.7.7 0 00-.14 0h-.09L17 7.6a1.78 1.78 0 00-.93.31L16 8l-3.21 2.36-.07.05-.08.06c-.146.11-.274.241-.38.39l-5.7 7.91a1.78 1.78 0 00-.3.79A1.88 1.88 0 006.57 21l6.52 8.44a1.825 1.825 0 002.85-2.28l-5.69-7.38L13 16l7 7.26-.26 20.19c-.005.258.032.514.11.76a2.1 2.1 0 001.94 1.55 2.19 2.19 0 002.11-2.26l.3-22.39a1.35 1.35 0 011-1.14L47 14.71c.251-.057.49-.155.71-.29a2.12 2.12 0 00.99-2.27z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M15.46 2.29a9.46 9.46 0 01-4.76 2.47 11.48 11.48 0 01-2.3.25h-.64a4.21 4.21 0 01-.05-.62v-.38a9.68 9.68 0 002.76-.2 8.22 8.22 0 004.38-2.31 4.15 4.15 0 00-7.11 2.35 2.11 2.11 0 00-1.9.08c-1.23.7-1.77 2.6-1.89 4a5.46 5.46 0 01-2.46.06.49.49 0 00-.58.4.5.5 0 00.4.58c.472.084.95.128 1.43.13A5.7 5.7 0 003.89 9a1.32 1.32 0 01-.54.86 2.33 2.33 0 01-2.15-.07.502.502 0 00-.4.92 4.452 4.452 0 001.69.38 2.55 2.55 0 001.41-.39 2.48 2.48 0 001-2.05 5.85 5.85 0 002.53-2.73c.11-.21.24-.44.35-.62A4.16 4.16 0 0016 4.35a3.999 3.999 0 00-.54-2.06zM6.58 5.4a5.79 5.79 0 01-1.53 2 3.85 3.85 0 011.3-2.63 1 1 0 01.67-.12c-.165.239-.312.49-.44.75z"
                                                            fill="#45B7D3"></path>
                                                        <path opacity=".3"
                                                            d="M31.72 37.08h-5v8h5v-8zM49.65 37.08h-5v8h5v-8zM47.22 35.1h-18v1h18v-1zM47.22 33.1h-18v1h18v-1zM47.22 31.1h-18v1h18v-1zM47.22 29.1h-18v1h18v-1z"
                                                            fill="#65DFEF"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">MARTIAL ARTS</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="DANCE">
                                                <input type="checkbox" name="categories[]" value="DANCE" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="70" height="58" viewBox="0 0 70 58" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M39 41.06a5.39 5.39 0 100 10.78 5.39 5.39 0 000-10.78zm0 7.21a1.83 1.83 0 111.83-1.83A1.82 1.82 0 0139 48.27z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M29.05 25.32V57h19.89V25.32H29.05zM39 29.45a4.11 4.11 0 110 8.22 4.11 4.11 0 010-8.22zm0 23.92a6.93 6.93 0 110-13.861 6.93 6.93 0 010 13.861z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M39 36.76a3.2 3.2 0 10-3.19-3.2 3.21 3.21 0 003.19 3.2zm0-4.34a1.14 1.14 0 110 2.281 1.14 1.14 0 010-2.28z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <path
                                                            d="M33.72 57.26h-33a.16.16 0 010-.32h33a.16.16 0 110 .32zM69.25 57.26H59.7a.16.16 0 010-.32h9.55a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <path
                                                            d="M25.14 20a4.17 4.17 0 110-8.34 4.17 4.17 0 010 8.34zM55.64 21.41a4.16 4.16 0 110-8.32 4.16 4.16 0 010 8.32z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M64.94 11.07A1.82 1.82 0 0063 12.81l-.57 9.31-5.2 1.2a3.999 3.999 0 01-1.86 0l-3-.67a4.21 4.21 0 01-2.87-2.24l-1.87-3.76 6.83-6.35A1.83 1.83 0 0052 7.59l-7.8 7.26a1.84 1.84 0 00-.6 1.41c-.01.285.044.57.16.83l4.34 8.71-1 8.63-5.78 8.45a2.66 2.66 0 00-.35 2.42l2.64 10.62a2.1 2.1 0 004.07-1l-2.53-10.2 5.73-8.38a1 1 0 01.91-.42 1 1 0 01.85.87l1.9 18.47c.03.255.098.505.2.74a2.1 2.1 0 002.11 1.32 2.2 2.2 0 001.83-2.49L56.71 36a3.617 3.617 0 010-.87l1-8.16 6.88-1.59a1.86 1.86 0 00.74-.41 1.81 1.81 0 00.67-1.35L66.69 13a1.83 1.83 0 00-1.75-1.93zM43.2 11.77a1.83 1.83 0 10-2.46-2.7l-12.66 12h-4.83a1.66 1.66 0 00-.81.16L11.89 26.4a2.54 2.54 0 00-.45.13 1.83 1.83 0 00-.88 2.47l4.33 8.73a1.83 1.83 0 002.43.89 1.83 1.83 0 00.88-2.43l-3.5-7 5.63-2.73v8.81l-7.79 19a2.19 2.19 0 001.06 2.9 2.11 2.11 0 002.4-.66c.16-.203.294-.424.4-.66l7.1-17.42a2 2 0 013.21-.75l7.93 7v10.51a2.1 2.1 0 104.19 0l-.05-11a2.621 2.621 0 00-.94-2.25L30 35l.15-10.8L43.2 11.77z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M53.52 57.26H49a.16.16 0 010-.32h4.49a.16.16 0 110 .32h.03zM42.7 57.26h-3.61a.16.16 0 010-.32h3.61a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M33.48 4.22c-.6-.71-1.77-.73-2.28-1.31a.19.19 0 00-.16 0 .15.15 0 00-.12.2l1.51 4.44a1.39 1.39 0 00-1.63.23 1.62 1.62 0 00-.34 2 1.62 1.62 0 002.44-1.93l-1.19-3.49a.94.94 0 00.45.27 1.69 1.69 0 011.38 1.58s.06.07.08 0a2.34 2.34 0 00-.14-1.99z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M50.46 3.12c-.1-.93-1.05-1.61-1.14-2.37a.2.2 0 00-.184-.13.16.16 0 00-.146.11l-1.28 4.5a1.38 1.38 0 00-1.47-.74 1.61 1.61 0 00-1.4 1.44 1.62 1.62 0 003.08-.15l1-3.55a.92.92 0 00.22.48 1.7 1.7 0 01.24 2.08s0 .09.07 0c.3-.2 1.08-.91 1.01-1.67z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M14.48 14.14c-.68-.64-1.85-.53-2.42-1a.19.19 0 00-.17 0 .15.15 0 00-.106.148c0 .021.006.043.016.062l2 4.24a1.38 1.38 0 00-1.59.41 1.63 1.63 0 00-.12 2 1.62 1.62 0 002.23-2.14l-1.58-3.33a.941.941 0 00.48.21 1.7 1.7 0 011.55 1.41s.06.07.08 0a2.33 2.33 0 00-.37-2.01z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                    </svg>
                                                    <span class="mt-2 type-name">DANCE</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="MEDITATION">
                                                <input type="checkbox" name="categories[]" value="MEDITATION" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="50" height="34" viewBox="0 0 50 34" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g style="mix-blend-mode:multiply" opacity=".3">
                                                            <path
                                                                d="M25.07 1a16.75 16.75 0 00-4.62 12 17.29 17.29 0 004.62 11.85A17.33 17.33 0 0029.68 13a16.76 16.76 0 00-4.61-12zM21 23.57A20.52 20.52 0 0118 13v-1.46A16.61 16.61 0 007.12 7.39C7.39 15.9 14.11 22.08 21 23.57zM7.08 16.07A19.721 19.721 0 016 13.85c-1.017.11-2.021.314-3 .61.277.787.611 1.552 1 2.29a19.61 19.61 0 013.08-.68zM10.19 20.21a20.271 20.271 0 01-1.55-1.79A16.321 16.321 0 00.72 21 17.23 17.23 0 0015 28.16c2.696.02 5.358-.597 7.77-1.8h-.4a20.44 20.44 0 01-12.18-6.15zM19.59 4.77a15.758 15.758 0 00-4-2.47 15.941 15.941 0 00-1 4.15 19.719 19.719 0 013.8 2.19 19.584 19.584 0 011.2-3.87zM42.88 7.36A16.54 16.54 0 0032 11.52v1.45a20.49 20.49 0 01-3 10.6c6.89-1.49 13.61-7.67 13.88-16.21zM47 14.46c-.979-.296-1.983-.5-3-.61a17.41 17.41 0 01-1.07 2.22 19.38 19.38 0 013.11.68c.377-.738.698-1.504.96-2.29zM41.36 18.42a19.826 19.826 0 01-1.54 1.78 20.34 20.34 0 01-12.2 6.12h-.4A17.77 17.77 0 0049.28 21a16.321 16.321 0 00-7.92-2.58zM35.43 6.45a16.14 16.14 0 00-1-4.15 15.76 15.76 0 00-4 2.47c.543 1.243.952 2.54 1.22 3.87a19.72 19.72 0 013.78-2.19z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <path d="M25 8.52a4.17 4.17 0 10.02-8.34A4.17 4.17 0 0025 8.52z"
                                                            fill="#45B7D3"></path>
                                                        <path
                                                            d="M40.9 12.69A2.08 2.08 0 0038 13a3.22 3.22 0 01-2.46 1.17A3.26 3.26 0 0133 13c-1-1.22-1-1.23-1.13-1.32a3.65 3.65 0 00-2.61-1.08h-8.52a3.65 3.65 0 00-2.61 1.08C18 11.77 18 11.8 17 13a3.26 3.26 0 01-2.46 1.12A3.22 3.22 0 0112 13a2.085 2.085 0 00-3.2 2.67 7.422 7.422 0 005.62 2.66h.08a7.27 7.27 0 005-2 .351.351 0 01.52.066.351.351 0 01.06.184v7.3a.7.7 0 00.47.65l3.9 1.38c.299.1.622.1.92 0l3.9-1.38a.7.7 0 00.47-.65v-7.3a.35.35 0 01.21-.32.34.34 0 01.37.07 7.31 7.31 0 005 2h.08a7.398 7.398 0 005.62-2.66 2.08 2.08 0 00-.27-2.93M33.14 24.63L28 26.44a.35.35 0 00-.165.53.36.36 0 00.165.13l3 1a3.6 3.6 0 011.28.8.69.69 0 00.72.16l1.55-.55a2.08 2.08 0 10-1.39-3.92M30.51 29.45l-13.65-4.82a2.078 2.078 0 00-2.811 2.065 2.081 2.081 0 001.421 1.855l13.66 4.82c.22.083.455.124.69.12a2.08 2.08 0 00.69-4"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M49.72 29.33H35.19a.16.16 0 110-.32h14.53a.16.16 0 010 .32zM14.81 29.33H.28a.16.16 0 110-.32h14.53a.16.16 0 010 .32z"
                                                            fill="#000"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">MEDITATION</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="PRENATAL">
                                                <input type="checkbox" name="categories[]" value="PRENATAL" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="66" height="31" viewBox="0 0 66 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.043 24.375a9.2 9.2 0 10-13.011-13.01 9.2 9.2 0 0013.01 13.01z"
                                                            fill="#65DFEF" opacity=".3"></path>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M57.27 21.36h-.66a1.13 1.13 0 00-.91.5c.109.16.193.335.25.52h2.43a1.13 1.13 0 00-1.11-1.02zm-7.16 1.14A1.14 1.14 0 0049 21.36h-.65a1.14 1.14 0 00-1.14 1.14v2.93a1.14 1.14 0 001.14 1.14H49a1.14 1.14 0 001.14-1.14v-.37h1V23v-.12h-1l-.03-.38z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <path
                                                            d="M62.2 21.87h-.65A1.14 1.14 0 0060.41 23v.38H55V23a1.14 1.14 0 00-1.13-1.13h-.66a1.14 1.14 0 00-1.1 1.13v2.94a1.14 1.14 0 001.14 1.14h.66A1.14 1.14 0 0055 25.94v-.38h5.37v.38a1.14 1.14 0 001.14 1.14h.65a1.14 1.14 0 001.14-1.14V23a1.14 1.14 0 00-1.1-1.13z"
                                                            fill="#65DFEF" opacity=".3"></path>
                                                        <path
                                                            d="M28.57 27H20.2a.16.16 0 010-.32h8.37a.16.16 0 110 .32zM14.28 27H3a.16.16 0 010-.32h11.28a.16.16 0 01.16.16.17.17 0 01-.16.16zM65 27H45.62a.16.16 0 010-.32H65a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <path d="M14.21 8.7a4.17 4.17 0 10-.04 0" fill="#EF515A"></path>
                                                        <path
                                                            d="M42.12 23.07h-8v-8.5l-1.62.4A6.6 6.6 0 0129.91 19v6.14A2.092 2.092 0 0032 27.25h10.12a2.09 2.09 0 000-4.18z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M54.1 3.32a2.1 2.1 0 00-2.81-.91l-8.88 4.51-11.5 2.84a3.53 3.53 0 00-2.34-.9H18.39a2.92 2.92 0 00-2.92 2.92v13.59a1.85 1.85 0 103.69 0V14c3.49.75 3.66 4.52 8 4.52 3.27 0 3.83-2.67 4.35-4.57l12-3 .22-.08c.166-.039.327-.096.48-.17l9-4.59a2.1 2.1 0 00.89-2.79z"
                                                            fill="#F2737B"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">PRENATAL</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="CYCLING">
                                                <input type="checkbox" name="categories[]" value="CYCLING" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="66" height="46" viewBox="0 0 66 46" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.26 22.44c-.518 0-1.034.057-1.54.17a9.33 9.33 0 00-18 3.49 9.13 9.13 0 00.18 1.82h-.18a4.3 4.3 0 100 8.6h19.54a7.04 7.04 0 000-14.08zM54.15 31.16c.245.001.49.028.73.08a4.48 4.48 0 018.63 1.68c0 .292-.03.584-.09.87h.09a2.06 2.06 0 110 4.12h-9.36a3.38 3.38 0 110-6.75z"
                                                            fill="#65DFEF" opacity=".3"></path>
                                                        <path
                                                            d="M42.65 13.66a2.09 2.09 0 00-2.82-.9L30 17.82a2.09 2.09 0 00-.9 2.82s.06.09.08.14c.05.098.106.191.17.28L33 25.93l.12-.81c.05-.516.214-1.015.48-1.46l1.34-2.12-.83-1.11 7.68-3.93a2.09 2.09 0 00.86-2.84z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M43.25 45.27H23.41a.16.16 0 010-.32h19.84a.16.16 0 110 .32zM18.09 45.27a8.83 8.83 0 110-17.66c.451.003.902.037 1.35.1a.16.16 0 01.13.19.15.15 0 01-.18.13 8.51 8.51 0 101.79.48.16.16 0 01-.09-.21.17.17 0 01.21-.09 8.83 8.83 0 01-3.21 17.06zM39.85 36.6a.16.16 0 01-.16-.16 8.862 8.862 0 013-6.65.17.17 0 01.23 0 .16.16 0 010 .23 8.521 8.521 0 00-2.9 6.4.16.16 0 01-.17.18zM48.51 45.27a8.83 8.83 0 01-8.67-7.19.16.16 0 01.13-.19.15.15 0 01.18.13 8.53 8.53 0 104.14-9 .17.17 0 01-.244-.12.15.15 0 01.084-.16 8.73 8.73 0 014.38-1.17 8.83 8.83 0 010 17.66v.04zM33.05 35.58a.18.18 0 01-.12 0L22.8 24.15a.161.161 0 01-.034-.183.16.16 0 01.274-.027l10.13 11.37a.16.16 0 010 .23.15.15 0 01-.12.04zM35.65 34.78h-.07a.16.16 0 01-.08-.21l6.87-16a.17.17 0 01.21-.09.18.18 0 01.09.22l-6.87 16a.16.16 0 01-.15.08z"
                                                            fill="#000"></path>
                                                        <path
                                                            d="M18.09 36.6H18a.17.17 0 01-.09-.21l5.31-13.6a.15.15 0 01.15-.1h17.35a.161.161 0 01.14.08l7.79 13.6a.15.15 0 010 .16.16.16 0 01-.14.08H36.69a.16.16 0 110-.32h11.55L40.63 23H23.51l-5.27 13.5a.15.15 0 01-.15.1zM23.9 21.7h-.06a.16.16 0 01-.09-.21l1.58-4h-4.52a1.7 1.7 0 100 3.4.16.16 0 110 .32 2 2 0 010-4h4.76a.17.17 0 01.13.07.191.191 0 010 .15l-1.65 4.17a.15.15 0 01-.15.1zM37.84 17.61h6.53a.33.33 0 01.16.62l-2.34 1.14-4.45-1.14a.32.32 0 01.1-.62zM13.07 45.27H3.23a.16.16 0 010-.32h9.84a.16.16 0 110 .32zM64.48 45.27h-10a.16.16 0 010-.32h10a.16.16 0 110 .32zM60.89 42.59h-3.13a.16.16 0 110-.32h3.13a.16.16 0 010 .32zM62.08 42.59a.17.17 0 01-.12-.05.16.16 0 010-.11.14.14 0 010-.11.161.161 0 01.177-.036.16.16 0 01.053.036.14.14 0 010 .11.15.15 0 010 .11.16.16 0 01-.11.05zM62.88 42.43a.16.16 0 11.32 0 .16.16 0 01-.32 0zM64 42.59a.21.21 0 01-.12-.05.15.15 0 010-.11.14.14 0 010-.11.151.151 0 01.178-.04c.02.01.038.023.052.04a.14.14 0 010 .11.17.17 0 01-.16.16H64zM59.76 43.81h-3.12a.16.16 0 01-.16-.16.17.17 0 01.16-.17h3.12a.17.17 0 01.16.17.16.16 0 01-.16.16zM61 43.8a.15.15 0 01-.11 0 .18.18 0 010-.12.16.16 0 010-.11.16.16 0 01.22 0 .16.16 0 010 .11.17.17 0 010 .12.139.139 0 01-.11 0zM61.75 43.64a.16.16 0 11.32 0 .16.16 0 01-.32 0zM62.91 43.8a.15.15 0 01-.11 0 .18.18 0 010-.12.16.16 0 010-.11.17.17 0 01.23 0 .15.15 0 010 .11.17.17 0 010 .12.16.16 0 01-.12 0zM30.89 42.59h-3.12a.16.16 0 110-.32h3.12a.16.16 0 010 .32zM32.08 42.59a.17.17 0 01-.16-.16.14.14 0 010-.11.15.15 0 01.22 0 .138.138 0 01.05.11.17.17 0 01-.16.16h.05zM32.88 42.43a.16.16 0 11.32 0 .16.16 0 01-.32 0zM34 42.59a.17.17 0 01-.16-.16.139.139 0 010-.11.149.149 0 01.17-.035.15.15 0 01.05.035.14.14 0 01.05.11.17.17 0 01-.16.16H34zM29.77 43.81h-3.13a.17.17 0 01-.16-.16.17.17 0 01.16-.17h3.13a.17.17 0 01.16.17.16.16 0 01-.16.16zM31 43.8a.16.16 0 01-.12 0 .21.21 0 01-.05-.12.16.16 0 01.05-.11.17.17 0 01.23 0 .16.16 0 010 .11c.012.04.012.08 0 .12a.15.15 0 01-.11 0zM31.75 43.64a.17.17 0 01.17-.16.16.16 0 110 .32.17.17 0 01-.17-.16zM32.92 43.8a.19.19 0 01-.12 0 .17.17 0 010-.12.15.15 0 010-.11.17.17 0 01.23 0 .16.16 0 010 .11.17.17 0 010 .12.15.15 0 01-.11 0z"
                                                            fill="#000"></path>
                                                        <path d="M23.43 8.69a4.16 4.16 0 100-8.32 4.16 4.16 0 000 8.32z"
                                                            fill="#45B7D3"></path>
                                                        <path
                                                            d="M41.47 9.34l-9.42-3.06a3.37 3.37 0 00-4.16 2 2.103 2.103 0 00-.16.34L27 10.94l-.47 1.48-1.32 4.32-6.66 2.64a1.83 1.83 0 101.35 3.4l7.45-3c.376-.148.69-.42.89-.77.043-.063.08-.13.11-.2.04-.067.073-.137.1-.21L30 13.7l9.18 3.39-4.54 7.2v.05a1.88 1.88 0 00-.28.8L32.66 36a2.099 2.099 0 104.14.65l1.62-10.53 5.3-8.42.45-.7a5.45 5.45 0 00-2.7-7.66z"
                                                            fill="#65DFEF"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">CYCLING</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="KIDS">
                                                <input type="checkbox" name="categories[]" value="KIDS" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="66" height="50" viewBox="0 0 66 50" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M65.28 49.26h-3.9a.16.16 0 110-.32h3.9a.16.16 0 010 .32zM15.62 49.26H5.06a.16.16 0 110-.32h10.56a.16.16 0 010 .32zM35.51 49.26H26.6a.16.16 0 110-.32h8.91a.16.16 0 010 .32zM56 49.26H43.11a.16.16 0 110-.32H56a.16.16 0 010 .32z"
                                                            fill="#000"></path>
                                                        <path d="M59.96 16.57a4.01 4.01 0 100-8.02 4.01 4.01 0 000 8.02z"
                                                            fill="#EF515A" opacity=".3"></path>
                                                        <path
                                                            d="M36.5 49a1.94 1.94 0 002.91-.62l8.27-15.55a.54.54 0 01.79-.19l6.25 4.47 2.22 10.79a1.94 1.94 0 002.57 1.43A2 2 0 0060.73 47l-2.2-10.7a1.929 1.929 0 002.15-.66L65.05 30a2.002 2.002 0 00.28-1.87l-2.79-7.43a2 2 0 00-1.1-1.13l-7.1-3.89L53 9l5.19-5a2 2 0 00-.22-3 2 2 0 00-2.58.26L49.47 7a2 2 0 00-.55 1.8l2 9.64L36 46.46a2 2 0 00.5 2.54zm18.08-16.77l4.83-8.82 1.89 5.05-3.71 4.82a1.81 1.81 0 00-.37.84l-2.64-1.89z"
                                                            fill="#F2737B" opacity=".3"></path>
                                                        <path d="M41.17 25.55a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M23 49.05a1.941 1.941 0 002.91-.62L31 39a.54.54 0 01.79-.18l5.3 3.92 1 5.18A2 2 0 0040 49.45a2 2 0 00.67-.11A2 2 0 0041.85 47l-1-5.1c.265.059.538.082.81.07a1.93 1.93 0 001.54-.76l2.63-4.93a1.79 1.79 0 00.14-2l-3.52-5a2.92 2.92 0 00-1.1-1.13l-5.56-3-1.16-5.06 3.64-3.68a1.938 1.938 0 00-.21-3 2 2 0 00-2.58.25l-4.34 4.36a1.94 1.94 0 00-.54 1.79l1.79 8.07L22.5 46.5a2 2 0 00.5 2.55zm13.92-11.22l2.82-5.13L42 35.28l-2.39 4.49-2.69-1.94z"
                                                            fill="#F2737B"></path>
                                                        <path d="M19.47 25.55a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M1.28 49.05a1.941 1.941 0 002.91-.62L9.27 39a.54.54 0 01.79-.18l5.3 3.92 1 5.18a2 2 0 001.91 1.55 2 2 0 00.67-.11A2 2 0 0020.15 47l-1-5.1c.277.072.563.106.85.1a1.93 1.93 0 001.54-.76l2.63-4.93a1.79 1.79 0 00.14-2l-3.52-5a3 3 0 00-1.09-1.13l-5.57-3L13 20.09l3.65-3.68a2 2 0 00-.22-3 2 2 0 00-2.58.25l-4.33 4.36a1.92 1.92 0 00-.55 1.79l1.79 8.07L.8 46.5a2 2 0 00.48 2.55zm14-11.22L18 32.7l2.23 2.58-2.39 4.49-2.56-1.94z"
                                                            fill="#F2737B"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">KIDS</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="STRENGTH">
                                                <input type="checkbox" name="categories[]" value="STRENGTH" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="50" height="54" viewBox="0 0 50 54" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M49.624 53.171H32.629a.149.149 0 01-.105-.253.149.149 0 01.105-.044h16.995a.148.148 0 110 .297zM17.37 53.171H.377a.149.149 0 010-.297h16.995a.148.148 0 110 .297zM27.283 53.171h-4.567a.149.149 0 010-.297h4.567a.148.148 0 110 .297z"
                                                            fill="#000"></path>
                                                        <g style="mix-blend-mode:multiply" opacity=".3">
                                                            <path
                                                                d="M8.73 1h-.855c-.2 0-.362.162-.362.362v7.861c0 .2.162.362.362.362h.854c.2 0 .362-.162.362-.362V1.362c0-.2-.162-.362-.362-.362zM5.74 2.216h1.17V8.36H5.74a.408.408 0 01-.408-.408V2.634a.408.408 0 01.409-.418zM2.9.71h.25v1.7H2.9a.85.85 0 110-1.7zM41.27 9.585h.854c.2 0 .362-.162.362-.362V1.362c0-.2-.162-.362-.362-.362h-.854c-.2 0-.362.162-.362.362v7.861c0 .2.163.362.362.362zM44.259 8.37h-1.17V2.225h1.17a.409.409 0 01.408.409v5.318a.408.408 0 01-.408.418zM45.503 6.077h-.233V4.499h.233a.789.789 0 110 1.578z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path d="M40.305 4.508H9.73v1.578h30.574V4.508z" fill="#65DFEF"
                                                                opacity=".3"></path>
                                                        </g>
                                                        <path d="M25 16.658a3.861 3.861 0 100-7.722 3.861 3.861 0 000 7.722z"
                                                            fill="#45B7D3"></path>
                                                        <path
                                                            d="M36.137 3.747a1.698 1.698 0 00-2.023 1.3l-1.69 8.019-4.844 5.309h-5.198l-4.808-5.309-1.624-8.02a1.7 1.7 0 10-3.323.715l1.708 8.419v.083c.065.284.202.547.4.761l5.79 6.34c.03.035.065.067.103.092v9.885L18.094 51.26a1.855 1.855 0 001.615 2.293 1.93 1.93 0 002.237-1.773l2.46-19.38a.604.604 0 011.197 0l2.46 19.38a1.94 1.94 0 002.236 1.773 1.856 1.856 0 001.615-2.293L29.38 31.25v-9.765a.482.482 0 00.103-.093l5.791-6.404a1.68 1.68 0 00.4-.76v-.084l1.707-8.419a1.698 1.698 0 00-1.244-1.977z"
                                                            fill="#65DFEF"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">STRENGTH</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="FLEXIBILITY">
                                                <input type="checkbox" name="categories[]" value="FLEXIBILITY" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="44" height="52" viewBox="0 0 44 52" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity=".3"
                                                            d="M20.94 21.35a1.002 1.002 0 000-1.44 1 1 0 00-1.44 0L18 21.37a10.15 10.15 0 00-6-2.73v-2.08h3.06a1 1 0 000-2H7a1 1 0 100 2h3v2.08a10.19 10.19 0 109.33 4.27l1.61-1.56zM11.05 35.9a7.1 7.1 0 01-5-2.09l5-5v-7.16a7.089 7.089 0 015.12 2.17c.22.24.54.64.68.82a7 7 0 011.33 4.13 7.13 7.13 0 01-7.13 7.13z"
                                                            fill="#65DFEF"></path>
                                                        <path d="M27.67 51.27H15.22a.16.16 0 010-.32h12.45a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <path d="M37.96 16.91a4.16 4.16 0 100-8.32 4.16 4.16 0 000 8.32z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M43.45 1.39A1.82 1.82 0 0041 .65l-8.2 4.28h-.06a1.75 1.75 0 00-.69.66l-4 6.45-7.3 11.58a2.158 2.158 0 00-.33.62l-9.71 24.47a2.23 2.23 0 001.17 2.91 2.23 2.23 0 002.77-1.48l8.05-20.21a1.388 1.388 0 012.07-.65c.25.165.44.407.54.69l3.22 8.94v10.73a2.08 2.08 0 002.09 2.09 2.1 2.1 0 002.1-2.09V38.41a2.692 2.692 0 00-.14-.61l-2.74-7.62a1.74 1.74 0 001 0l8.79-2.88a1.781 1.781 0 001.09-.93 1.83 1.83 0 00-.22-2l-6-7a1.666 1.666 0 00-.23-.23 2.484 2.484 0 00-.23-.23l-3.05-2.44 4-6.44 7.82-4.07a1.831 1.831 0 00.64-2.57zM33.31 21.55l2.63 3-5.79 1.9 3.16-4.9z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M9.62 51.27H4.37a.16.16 0 010-.32h5.25a.16.16 0 110 .32zM43.63 51.27h-10.2a.16.16 0 010-.32h10.2a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">FLEXIBILITY</span>
                                                </span>
                                            </label>
        
        
        
                                            <label class="col-4 checkbox-label" title="OTHER">
                                                <input type="checkbox" name="categories[]" value="OTHER" hidden="">
                                                <span class="inner pt-2 ">
                                                    <svg width="53" height="55" viewBox="0 0 53 55" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity=".3" d="M21.5 30.86a12 12 0 00-12 12h24a12 12 0 00-12-12z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M21.48 22.21a.469.469 0 01-.35-.15.45.45 0 01-.15-.35.47.47 0 01.15-.35.49.49 0 01.54-.11.36.36 0 01.16.11.471.471 0 01.15.35.45.45 0 01-.15.35.36.36 0 01-.16.11.43.43 0 01-.19.04zM21 25.88a.5.5 0 011 0 .5.5 0 01-.5.49.487.487 0 01-.5-.49zm0-2.09a.5.5 0 01.5-.5.51.51 0 01.5.5.5.5 0 01-1 0zM21.48 28.46a.49.49 0 01-.499-.5c0-.13.05-.255.139-.35a.51.51 0 01.71 0 .501.501 0 01-.35.85zM12.72 24.12a.41.41 0 01-.19 0 .36.36 0 01-.16-.11.48.48 0 010-.7.5.5 0 01.7 0 .36.36 0 01.11.16.41.41 0 010 .19.51.51 0 01-.5.5l.04-.04zM14 27.62a.49.49 0 01.25-.66.492.492 0 01.672.626.51.51 0 01-.262.284.52.52 0 01-.21 0 .49.49 0 01-.45-.25zm-.86-1.9a.491.491 0 01.24-.66.51.51 0 01.67.25.5.5 0 01-.25.66.49.49 0 01-.67-.25h.01zM15.31 29.81a.53.53 0 01-.36-.15.5.5 0 01-.14-.35A.54.54 0 0115 29a.53.53 0 01.55-.11c.057.03.11.068.16.11a.53.53 0 01.15.36.47.47 0 01-.15.35.573.573 0 01-.16.11.65.65 0 01-.24-.01zM5.54 29.49a.582.582 0 01-.19 0l-.17-.11A.51.51 0 015 29a.5.5 0 01.14-.35.51.51 0 01.822.16A.47.47 0 016 29a.48.48 0 01-.15.36.51.51 0 01-.31.13zM8.35 32.1a.51.51 0 01-.05-.71.51.51 0 01.71 0 .51.51 0 010 .71.52.52 0 01-.38.17.5.5 0 01-.28-.17zm-1.57-1.37a.51.51 0 01-.05-.71.51.51 0 01.71-.05.499.499 0 010 .71.48.48 0 01-.37.17.501.501 0 01-.29-.12zM10.25 33.59a.41.41 0 01-.19 0 .53.53 0 01-.27-.27.41.41 0 010-.19.47.47 0 01.15-.35.5.5 0 01.85.35.412.412 0 010 .19.36.36 0 01-.11.16.42.42 0 01-.16.11.41.41 0 01-.27 0zM1.22 37.34a.488.488 0 01-.35-.15.36.36 0 01-.11-.16.58.58 0 010-.19.51.51 0 01.86-.35.5.5 0 01.14.35.48.48 0 01-.31.46.409.409 0 01-.23.04zM5.07 38.51a.5.5 0 01-.33-.62.49.49 0 01.62-.34.5.5 0 01.33.62.49.49 0 01-.47.36l-.15-.02zm-2-.59a.5.5 0 11.28-.96.5.5 0 01.34.62.51.51 0 01-.48.36l-.14-.02zM7.21 39.13a.582.582 0 01-.19 0 .46.46 0 01-.16-.11.42.42 0 01-.11-.16.45.45 0 010-.2.49.49 0 01.15-.35.52.52 0 01.7 0 .47.47 0 01.15.35.45.45 0 010 .2.42.42 0 01-.11.16.51.51 0 01-.43.11zM30.28 24.12a.51.51 0 01-.5-.5.41.41 0 010-.19.53.53 0 01.27-.27.49.49 0 01.54.11.481.481 0 010 .7.36.36 0 01-.16.11.409.409 0 01-.15.04zM28.35 27.87a.51.51 0 01-.25-.67.491.491 0 01.66-.24.5.5 0 01.25.66.5.5 0 01-.45.29.492.492 0 01-.21-.04zm.86-1.9a.5.5 0 01-.25-.66.51.51 0 01.82-.139.49.49 0 01.09.549.49.49 0 01-.45.3.54.54 0 01-.21-.02v-.03zM27.69 29.81a.51.51 0 01-.35-.15.47.47 0 01-.15-.35.51.51 0 01.86-.36.54.54 0 01.14.36.5.5 0 01-.14.35.53.53 0 01-.36.15zM37.46 29.49a.51.51 0 01-.35-.15A.48.48 0 0137 29a.47.47 0 01.15-.35.52.52 0 01.71 0A.5.5 0 0138 29a.51.51 0 01-.14.36l-.17.11a.577.577 0 01-.23.02zM33.94 32.05a.51.51 0 01.05-.71.51.51 0 01.71 0 .51.51 0 01-.05.71.52.52 0 01-.33.12.52.52 0 01-.38-.12zm1.57-1.37a.51.51 0 01.05-.71.51.51 0 01.71.05.51.51 0 01-.05.71.5.5 0 01-.538.075.52.52 0 01-.172-.125zM32.75 33.59a.41.41 0 01-.19 0 .53.53 0 01-.27-.27.41.41 0 010-.19.47.47 0 01.15-.35.5.5 0 01.7 0 .471.471 0 01.15.35.412.412 0 010 .19.53.53 0 01-.27.27.41.41 0 01-.27 0zM41.78 37.34a.481.481 0 01-.2 0 .511.511 0 01-.16-.11.64.64 0 01-.11-.16.577.577 0 010-.19.5.5 0 01.14-.35.51.51 0 01.71 0 .5.5 0 01.14.35c.01.063.01.127 0 .19a.461.461 0 01-.11.16.49.49 0 01-.41.11zM37.3 38.17a.51.51 0 01.34-.62.5.5 0 01.29.96h-.15a.51.51 0 01-.48-.34zm2-.59a.5.5 0 11.62.34h-.14a.5.5 0 01-.48-.34zM35.79 39.13a.582.582 0 01-.19 0 .46.46 0 01-.16-.11.42.42 0 01-.11-.16.45.45 0 010-.2.49.49 0 01.405-.48.53.53 0 01.285.02.64.64 0 01.16.11.47.47 0 01.15.35.45.45 0 010 .2.42.42 0 01-.11.16.51.51 0 01-.43.11z"
                                                            fill="#D1F5FA"></path>
                                                        <path d="M40.45 54.25h-14.9a.16.16 0 010-.32h14.9a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                        <path d="M33 12.76a4.16 4.16 0 100-8.32 4.16 4.16 0 000 8.32z"
                                                            fill="#45B7D3"></path>
                                                        <path
                                                            d="M37.83 17.83L51 3.45A1.83 1.83 0 1048.35 1L35.82 14.61h-5.64L17.65 1a1.831 1.831 0 00-3.36 1.083A1.831 1.831 0 0015 3.45l13.17 14.38.11.09v10.59a1.41 1.41 0 00-.08.18l-7.58 22.74a2.33 2.33 0 001.15 3.06 2.33 2.33 0 002.81-1.68l6.9-20.7a1.4 1.4 0 011.34-1 1.42 1.42 0 011.34 1l6.89 20.7a2.13 2.13 0 104-1.38l-7.33-21.88V17.92l.11-.09z"
                                                            fill="#65DFEF"></path>
                                                        <path
                                                            d="M52.19 54.25h-5.86a.16.16 0 010-.32h5.86a.16.16 0 110 .32zM19.67 54.25h-5.86a.16.16 0 010-.32h5.86a.16.16 0 110 .32z"
                                                            fill="#000"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">OTHER</span>
                                                </span>
                                            </label>
        
        
                                            <label class="col-4 checkbox-label">
        
                                                <input type="checkbox" name="featured" hidden="" value="1">
                                                <span class="inner pt-2 ">
                                                    <svg width="62" height="42" viewBox="0 0 62 42" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M31.44 37.38v-1.69a1.75 1.75 0 00-1.75-1.75h-.9A1.75 1.75 0 0027 35.69v1.69a2.65 2.65 0 00.61 3.62h3.26a2.65 2.65 0 00.57-3.59v-.03zm-2.65-2.45h.9a.75.75 0 01.75.76v.81a2.63 2.63 0 00-2.4 0v-.81a.75.75 0 01.75-.76z"
                                                            fill="#65DFEF" opacity=".3"></path>
                                                        <g style="mix-blend-mode:multiply">
                                                            <path
                                                                d="M37.33 22.8a9.2 9.2 0 00-9.2 9.2v.76a2.7 2.7 0 01.63-.07h.9a3 3 0 013 3V37a3.88 3.88 0 01.46 1.83c-.006.413-.08.822-.22 1.21a9.201 9.201 0 0013.406-9.959A9.2 9.2 0 0037.3 22.76l.03.04z"
                                                                fill="#65DFEF" opacity=".3"></path>
                                                        </g>
                                                        <path
                                                            d="M21.51 6.46a1.48 1.48 0 01-1.52-1c-.2-.61 0-1.57 1.24-2.4a.16.16 0 01.274.11.16.16 0 01-.044.11c-1.07.74-1.29 1.54-1.13 2a1.17 1.17 0 001.22.74.16.16 0 110 .32l-.04.12z"
                                                            fill="#000"></path>
                                                        <path d="M25.2 8.7a4.16 4.16 0 100-8.32 4.16 4.16 0 000 8.32z"
                                                            fill="#EF515A"></path>
                                                        <path
                                                            d="M8.74 41.26H1a.16.16 0 110-.32h7.76a.16.16 0 010 .32h-.02zM45.35 41.26H15.89a.16.16 0 110-.32h29.46a.16.16 0 010 .32zM61 41.26h-7.74a.16.16 0 110-.32H61a.16.16 0 010 .32z"
                                                            fill="#000"></path>
                                                        <path
                                                            d="M51 37.32L30 24.43V14.21h13.48a1.83 1.83 0 10.08-3.66H6.91a1.83 1.83 0 10-.08 3.66h13.65v9.94l-8.18 1.64A2.25 2.25 0 0010.4 28a1.362 1.362 0 000 .2v11.09a2.1 2.1 0 004.19 0v-9.72l10.5-2.11h1.81L48.78 40.9A2.106 2.106 0 0051 37.32z"
                                                            fill="#F2737B"></path>
                                                        <path
                                                            d="M22.71 7.06h-.64a.79.79 0 01-.8-.79.8.8 0 01.8-.8h.64a.79.79 0 01.79.8.79.79 0 01-.79.79z"
                                                            fill="#000"></path>
                                                    </svg>
                                                    <span class="mt-2 type-name">FEATURED INSTRUCTORS</span>
                                                </span>
                                            </label> -->
                                        </div>
                                        <div class="pt-3 pb-3">
                                            <button class="btn  donebtn col-4 py-2 jApplyFilter" type="button">DONE</button>
                                            <button class="btn btn-outline-valhalla col-4 py-2 ml-3 jCFilter " type="button"
                                                disabled="">CLEAR ALL</button>
                                        </div>
                                    </div>
                                </div>
        
                            </li>
        
                            <li class="dropdown jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span class="px-3 px-md-0">RATING</span>
                                </a>
        
                                <div class="dropdown-menu rating dropdown-menu-form pb-4 border-0 jFilterContainer mt-2" role="menu"
                                    style="">
                                    <div class="jIgnoreDropDownClick">
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="radio" name="min_rating" id="option1" value="4.9" hidden="">
                                            <span class="rating-title">4.9 +</span>
                                            <span class="star-ratings-css">
                                                <span class="star-ratings-css-top"
                                                    style="width: 99%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></span>
                                            </span>
                                        </label>
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="radio" name="min_rating" id="option2" value="4.75" hidden="">
                                            <span class="rating-title">4.75 +</span>
                                            <span class="star-ratings-css">
                                                <span class="star-ratings-css-top"
                                                    style="width: 97.5%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></span>
                                            </span>
                                        </label>
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="radio" name="min_rating" id="option3" value="4.5" hidden="">
                                            <span class="rating-title">4.5 +</span>
                                            <span class="star-ratings-css">
                                                <span class="star-ratings-css-top"
                                                    style="width: 95%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></span>
                                            </span>
                                        </label>
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="radio" name="min_rating" id="option4" value="4" hidden="">
                                            <span class="rating-title">4 +</span>
                                            <span class="star-ratings-css">
                                                <span class="star-ratings-css-top"
                                                    style="width: calc(90% - 3px)"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></span>
                                                <span
                                                    class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="text-left mt-2">
                                        <button class="btn donebtn col-5 py-2 jApplyFilter" type="button">DONE</button>
                                        <button class="btn btn-outline-valhalla col-6 py-2   jCFilter" disabled=""
                                            type="button">CLEAR ALL</button>
                                    </div>
                                </div>
                            </li>
        
                            <li class="dropdown jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span>DATE</span>
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-form py-3 px-4 border-0 text-center jFilterContainer mt-2"
                                    role="menu" style="">
                                    <div class="datepicker-wrapper ">
                                        <div class="jFilterDatepicker">
                                            <div class="datepicker datepicker-inline">
                                                                                                   
                                            </div>
                                            
                                              
                                              <section class="mounth" id="january">
                                                <header>
                                                  <h1>JANUARY 2013</h1>
                                                  <nav role='padigation'>
                                                    <span></span>
                                                    <span></span>
                                                  </nav>
                                                </header>
                                              
                                                <article>
                                                  <div class="days">
                                                    <b>SU</b>
                                                    <b>MO</b>
                                                    <b>TU</b>
                                                    <b>WE</b>
                                                    <b>TH</b>
                                                    <b>FR</b>
                                                    <b>SA</b>
                                                  </div>
                                                  <div class="dates">
                                                    <span class="disable">30</span>
                                                    <span class="disable">31</span>
                                                    
                                                    <span>1</span>
                                                    <span>2</span>
                                                    <span>3</span>
                                                    <span>4</span>
                                                    <span>5</span>
                                                    <span>6</span>
                                                    <span>7</span>
                                                    <span>8</span>
                                                    <span>9</span>
                                                    <span>10</span>
                                                    <span>11</span>
                                                    <span>12</span>
                                                    <span>13</span>
                                                    <span>14</span>
                                                    <span>15</span>
                                                    <span class="active">16</span>
                                                    <span>17</span>
                                                    <span>18</span>
                                                    <span>19</span>
                                                    <span>20</span>
                                                    <span>21</span>
                                                    <span>22</span>
                                                    <span>23</span>
                                                    <span>24</span>
                                                    <span>25</span>
                                                    <span>26</span>
                                                    <span>27</span>
                                                    <span>28</span>
                                                    <span>29</span>
                                                    <span>30</span>
                                                    <span>31</span>
                                                    
                                                    <span class="disable">1</span>
                                                    <span class="disable">2</span>
                                                    <span class="disable">3</span>
                                                    <span class="disable">4</span>
                                                    <span class="disable">5</span>
                                                    <span class="disable">6</span>
                                                    <span class="disable">7</span>
                                                    <span class="disable">8</span>
                                                    <span class="disable">9</span>
                                                  </div>
                                                </article>
                                              </section>
                                        </div>
                                        
                                    </div>
                                    <div class="text-left mt-2">
                                        <button class="btn donebtn col-5 py-2 jApplyFilter" type="button">DONE</button>
                                        <button class="btn btn-outline-valhalla col-6 py-2   jCFilter" disabled=""
                                            type="button">CLEAR ALL</button>
                                    </div>
                                </div>
        
        
                                <input type="hidden" name="start_date" value="">
                            </li>
        
                            <li class="dropdown jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" data-toggle="dropdown" href="#" aria-expanded="true">
                                    <span>TIME</span>
                                </a>
        
                                <div class="dropdown-menu level dropdown-menu-form pb-4 border-0 jFilterContainer mt-2"
                                    role="menu"
                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(84px, 5px, 0px);"
                                    x-placement="top-start">
                                    <div class="jIgnoreDropDownClick">
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level1" value="EVERYBODY" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="everybody-icon mr-2"></span>
                                                <span>MORNING</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level2" value="BEGINNER" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="beginner-icon mr-2"></span>
                                                <span>AFTERNOON</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level3" value="INTERMEDIATE" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="intermediate-icon mr-2"></span>
                                                <span>EVENING</span>
                                            </div>
                                        </label>
        
        
                                       
        
        
                                    </div>
                                    <div class="text-left mt-2">
                                        <button class="btn donebtn col-5 py-2 jApplyFilter" type="button">DONE</button>
                                        <button class="btn btn-outline-valhalla col-6 py-2   jCFilter" disabled=""
                                            type="button">CLEAR ALL</button>
                                    </div>
                                </div>
                            </li>
        
                            <li class="dropdown jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" data-toggle="dropdown" href="#" aria-expanded="true">
                                    <span>LEVEL</span>
                                </a>
        
                                <div class="dropdown-menu level dropdown-menu-form pb-4 border-0 jFilterContainer mt-2"
                                    role="menu"
                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(84px, 5px, 0px);"
                                    x-placement="top-start">
                                    <div class="jIgnoreDropDownClick">
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level1" value="EVERYBODY" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="everybody-icon mr-2"></span>
                                                <span>EVERYBODY</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level2" value="BEGINNER" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="beginner-icon mr-2"></span>
                                                <span>BEGINNER</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level3" value="INTERMEDIATE" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="intermediate-icon mr-2"></span>
                                                <span>INTERMEDIATE</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="levels[]" id="level4" value="ADVANCED" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="advanced-icon mr-2"></span>
                                                <span>ADVANCED</span>
                                            </div>
                                        </label>
        
        
                                    </div>
                                    <div class="text-left mt-2">
                                        <button class="btn donebtn col-5 py-2 jApplyFilter" type="button">DONE</button>
                                        <button class="btn btn-outline-valhalla col-6 py-2   jCFilter" disabled=""
                                            type="button">CLEAR ALL</button>
                                    </div>
                                </div>
                            </li>
        
                            <li class="dropdown jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span class="px-3">PRICE</span>
                                </a>
        
                                <div class="dropdown-menu price dropdown-menu-form pb-4 border-0 jFilterContainer mt-2" role="menu"
                                    style="">
                                    <div class="jIgnoreDropDownClick">
                                        
        
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="intensities[]" id="intensity1" value="LOW" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="low-icon mr-2"></span>
                                                <span>Less than 200</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="intensities[]" id="intensity2" value="MEDIUM"
                                                hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="medium-icon mr-2"></span>
                                                <span>200 to 500</span>
                                            </div>
                                        </label>
        
        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="checkbox" name="intensities[]" id="intensity3" value="HIGH" hidden="">
                                            <div class="option-title text-uppercase d-flex align-items-center">
                                                <span class="high-icon mr-2"></span>
                                                <span>Above 500</span>
                                            </div>
                                        </label>
        
        
                                    </div>
                                    <div class="text-left mt-2">
                                        <button class="btn donebtn col-5 py-2 jApplyFilter" type="button">DONE</button>
                                        <button class="btn btn-outline-valhalla col-6 py-2   jCFilter" disabled=""
                                            type="button">CLEAR ALL</button>
                                    </div>
                                </div>
                            </li>
        
                            <li class="dropdown jFilterDropDown">
                                <a class="dropdown-toggle badge-pill" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span class="px-3">Classroom Type</span>
                                </a>
        
                                <div class="dropdown-menu classroomtype dropdown-menu-form pb-4 border-0 jFilterContainer mt-2" role="menu"
                                    style="">
                                    <div class="jIgnoreDropDownClick">
                                        
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="radio" name="equipment_required" id="equip1" value="1" hidden="">
                                            <span class="option-title">Group session</span>
                                        </label>
                                        <label class="d-flex align-items-center radio-label ">
                                            <input type="radio" name="equipment_required" id="equip0" value="0" hidden="">
                                            <span class="option-title">Personal session</span>
                                        </label>
                                    </div>
                                    <div class="text-left mt-2">
                                        <button class="btn donebtn col-5 py-2 jApplyFilter" type="button">DONE</button>
                                        <button class="btn btn-outline-valhalla col-6 py-2   jCFilter" disabled=""
                                            type="button">CLEAR ALL</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        <!----schedule header end----->

        <!----scheduleImges header start----->
        <div class="scheduleImges" style="margin-top: -70px;">
          <div class="container-fluid">
            <div class="row" id="MeetingTableBody">
            <!-- Classes Listing -->
            </div>
          </div>
        </div>

               
        <!----scheduleImges header start----->
    </section>
    <!-- Schedule Section End -->
</div>
<?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/home/home.blade.php ENDPATH**/ ?>