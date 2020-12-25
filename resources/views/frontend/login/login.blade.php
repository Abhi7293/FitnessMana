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
 
    <div class="login_BG">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="Signin_bg">
                        <div class="login_logo ">
                            <img src="{{asset('assets-frontend/images/Header-logo.png')}}" alt="">
                        </div>
                        <div class="login-form-1">
                            <h3>Login</h3>
                            <form action='fr_login_user' method="post">
                                @csrf
                                <input type="hidden" name="loginType" id="loginType" value="email">
                                <ul class="nav nav-tabs form-group login_btn">
                                    <li onclick="myInput('email')" class="active"><a data-toggle="tab" class="active EMAIL_" href="#email">Email</a></li>
                                    <li onclick="myInput('phone')"><a data-toggle="tab" class="MOBILE_" href="#mobile">Mobile</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="email" class="tab-pane fade in active show">
                                        <div class="form-group">
                                            <input type="email" name="Email" id="Email" class="form-control" placeholder="Please Enter Your Email" required />
                                        </div>
                                    </div>
                                    <div id="mobile" class="tab-pane fade">
                                        <div class="form-group">
                                            <input type="text" name="Phone" id="Phone" class="form-control" placeholder="Please Enter Your Mobile Number"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" minlength="8" maxlength="12" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="Password" id="Password" class="form-control" placeholder="Your Password *" required />
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="ForgetPwd">Forget Password?</a>
            
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btnSubmit S__Login" value="Login" />
                                        <h6>OR</h6>
                                    </div>
                                    </form>
                                    <div class="tab-content">
                                <div class="form-group">
                                    <button onclick="window.location.href='google'" class="btnSubmit s__GMAIL">SIGN UP WITH GMAIL</button>
                                </div>
                                <div class="form-group">
                                    <button  onclick="window.location.href='facebook'" class="btnSubmit S__FACEBOOK">SIGN UP WITH FACEBOOK</button>
                                </div>
                            </div>
                                </div>
                                    
                                
                                
                            
                          
                        </div>
                      
                        <div class="Dont_have text-center p-2">
                            <h6>Already have an account? <a href="signup" style="font-weight: bold;">Signup</a> </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 rightbg_img">
                    <div class="girl-Img">
                        <div>
                            <img class="w-100 img-fluid d-sm-none d-md-block d-lg-block d-none" src="{{asset('assets-frontend/images/login-signup/girl.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>