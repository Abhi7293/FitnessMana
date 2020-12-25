<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="FitnessMana">
    <title><?php echo strtoupper($title.""); ?></title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/652e4e3a5b.js" crossorigin="anonymous"></script>
      <script src="<?php echo e(asset('assets/js/main-base-jquery.js')); ?>" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-Gn5384xqQ1aoWXA84-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets-frontend/css/style.css')); ?>">
        <script>
          var _token =  "<?php echo e(csrf_token()); ?>";
      </script>
  </head>
  <body>
    <!-----header start here------>
      <header style="height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 image">
                    <a href="/"><img src="<?php echo e(asset('assets-frontend/image/Header-logo.png')); ?>"></a>
                </div>
                <div class="col-lg-5 col-md-4 input">
                    <input type="text" placeholder="Search here" name="">
                </div>
                <div class="col-lg-4 col-md-7 menu-top">
                    <div class="menu__">
                      <?php if(session()->get('LoginType') == 2){ ?>
                          <a href="<?php echo env('APP_URL')?>addClass" class="INSTRUCTOR ">ADD CLASS</a>
                      <?php } else if(session()->exists('LoginId')){ ?>
                        <a href="<?php echo env('APP_URL')?>becomeAnIsntructor" class="INSTRUCTOR ">BECOME INSTRUCTOR</a>
                      <?php } ?>
                      <?php if(session()->exists('LoginId')){ ?>
                        <a href="<?php echo env('APP_URL')?>logout" class="login ">LOGOUT</a>
                        <a href="<?php echo env('APP_URL')?>Profile" class="login ">PROFILE</a>
                      <?php }else{ ?>
                        <a href="<?php echo env('APP_URL')?>login" class="login ">Login</a>
                      <?php } ?>
                        <a href="#" class="fa fa-cart-plus add-to-cart"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php /**PATH E:\php\FitnessMana\resources\views/frontend/header.blade.php ENDPATH**/ ?>