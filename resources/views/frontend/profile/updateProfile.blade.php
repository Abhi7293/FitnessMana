



    <!-- form START -->

    <section><br><br><br><br><br>

        <div class="container">

           <div class="row pt-3">

               <div class="col-sm">

               </div>

               <div class="col-md-6 shadow pt-4">

                    <h4>Settings</h4>

                    <form id="updateProfileForm" action="<?php echo env('APP_URL')?>fr_updateProfile_user" method="post">

                        @csrf

                        <p style="color:green;" id="formStatus"></p>

                        <div class="form-group">

                            <label for="Name">Name</label>

                            <input type="text" name="Name" value="<?php echo session()->get('LoginName');?>" class="form-control" id="Name" placeholder="Enter Your Name">

                        </div>

                        <div class="form-group">

                            <label for="Mobile">Phone Number</label>

                            <input type="text" name="Mobile" value="<?php echo session()->get('Mobile');?>" class="form-control" id="Mobile" placeholder="Enter Phone Number">

                        </div>

                        <div class="form-group">

                            <label for="ChooseImage">Profile Image</label>

                            <input type="file" class="form-control" id="ChooseImage" placeholder="Please Select Image">

                        </div>

                        <div class="form-group">

							<img id="Image" src="{{asset('uploads')}}/<?php echo session()->get('LoginPhoto'); ?>" style="width:175px; height:175px; border:1px dashed; margin-top:28px;">

						</div>



                        <div class="pb-2">

                            <button type="submit" id="SubmitButton" class="btn btn-primary ">UPDATE</button>

                    </form>

               </div>

           </div>

        </div>

    </section>