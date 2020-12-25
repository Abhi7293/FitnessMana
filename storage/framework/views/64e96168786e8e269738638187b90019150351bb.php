
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-frontend/css/bootstrap.min.css')); ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-frontend/css/style.css')); ?>">
    <!-- style js -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-frontend/js/bootstrap.min.js')); ?>">
    <!-- font awesome link -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-frontend/fonts/fontawesome/js/all.js')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets-frontend/fonts/fontawesome/css/all.css')); ?>">

    <title><?php echo strtoupper($title.""); ?></title>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <script src="<?php echo e(asset('assets/js/main-base-jquery.js')); ?>" crossorigin="anonymous"></script>
	<script>
        var _token =  "<?php echo e(csrf_token()); ?>";
    </script>
</head>

<body>

    <!-- Header Start -->   
    <header class="bg-light">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
            	<a class="navbar-brand logo" href="<?php echo env('APP_URL')?>"><img src="<?php echo e(asset('assets-frontend/images/Header-logo.png')); ?>" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav searchBar">
                        <li class="nav-item active">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search here"aria-label="Search">
                                <a href="" class="search"><i class="fa fa-search" aria-hidden="true"></i></a>   

                            </form>
                        </li>
                    </ul>
                    <div class="navbar-nav ml-md-auto">
                        <?php if(session()->get('LoginType') == 2){ ?>
                          	<button onclick="window.location.href='<?php echo env('APP_URL')?>addClass'" class="btn btn-outline-secondary rounded-lg mr-2 ">ADD CLASS</button>
                      	<?php } else if(session()->exists('LoginId')){ ?>
                        	<button onclick="window.location.href='<?php echo env('APP_URL')?>becomeAnIsntructor'" class="btn btn-outline-secondary rounded-lg mr-2 ">BECOME AN INSTRUCTOR</button>
                      	<?php } ?>
                      	<?php if(session()->exists('LoginId')){ ?>
                        	<button onclick="window.location.href='<?php echo env('APP_URL')?>logout'" class="btn btn-warning mr-2 ">LOGOUT</button>
                        	<button onclick="window.location.href='<?php echo env('APP_URL')?>Profile'" class="btn btn-warning mr-2 ">PROFILE</button>
                      	<?php }else{ ?>
                        	<button onclick="window.location.href='<?php echo env('APP_URL')?>login'" class="btn btn-warning mr-2 ">Login</button>
                      	<?php } ?>
                        <button onclick="window.location.href='<?php echo env('APP_URL')?>Checkout'" class="btn btn-primary mr-2 rounded-lg secondary-btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </nav>
        </div>      
    </header>
    <!-- Header End -->
<?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/header.blade.php ENDPATH**/ ?>