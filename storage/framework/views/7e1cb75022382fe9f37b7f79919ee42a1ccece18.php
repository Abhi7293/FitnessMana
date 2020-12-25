<?php $CategoryId = json_decode(session()->get('CategoryId')); 

if(!empty($CategoryId)){$CategoryId=implode(",",$CategoryId);}?>

<br><br><br>

<div>

    <div class="container emp-profile pt100 shadow">

        <form method="post">

            <div class="row">

                <div class="col-md-4">

                    <div class="profile-img">

                        <img height="200px" src="<?php echo e(asset('public/uploads')); ?>/<?php echo session()->get('LoginPhoto'); ?>" alt=""/>

                        <div class="file btn btn-lg btn-primary">

                            Change Photo

                            <input type="file" name="file"/>

                        </div>

                        

                    </div>

                    

                </div>

                <div class="col-md-6">

                    <div class="profile-head">

                                

                                

                                    <div class="form-group row">

                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>

                                        <div class="col-sm-10">

                                          <input type="email" value="<?php echo session()->get('Email'); ?>" class="form-control form-control-sm" id="colFormLabelSm" readonly placeholder="email">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>

                                        <div class="col-sm-10">

                                          <input type="text" value="<?php echo session()->get('LoginName'); ?>" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" readonly>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Phone no.</label>

                                        <div class="col-sm-10">

                                          <input type="text" value="<?php echo session()->get('Mobile'); ?>" class="form-control form-control-sm" id="colFormLabelSm" readonly placeholder="">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <div class="form-group">

                                            <label for="CategoryOptionBody">Category</label>

                                            <label><?php if (strpos($CategoryId, '1') !== false) { echo 'Physical'; } ?></label><br>

                                            <label><?php if (strpos($CategoryId, '2') !== false) { echo 'Mental'; } ?></label><br>

                                            <label><?php if (strpos($CategoryId, '3') !== false) { echo 'Emotional'; } ?></label><br>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        

                                        <label for="Skills">Skills</label>

                                        <input type="text" name="Skills"  value="<?php echo session()->get('Skills');?>" class="form-control" id="Skills" placeholder="Enter Your Skills" readonly>

                                    </div>

                                    <div class="form-group row">

                                        

                                        <label for="Experience">Experience</label>

                                        <input type="text" name="Experience"  value="<?php echo session()->get('Experience');?>" class="form-control" id="Experience" placeholder="Enter Your Experience" readonly>

                                    </div>

                                

                        

                        

                    </div>

                </div>

                <div class="col-md-2">

                <button type="button" onclick="location.href='<?php echo env('APP_URL')?>updateProfile'" class="btn btn-outline-info top;">Update Profile</button>

                </div>
                <?php if(!empty(session()->get('GroupId') == '2')){ ?>
                    <div class="col-md-2">

                    <button type="button" onclick="location.href='<?php echo env('APP_URL')?>updateInstructorProfile'" class="btn btn-outline-info top;">Update Instructor Profile</button>

                    </div>
                <?php } ?>


                

            </div>



            <div class="row">

                <div class="col-md-4">

                    <h3 class="text-center">About</h3>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>

                </div>



                <div class="col-md-8 card-deck">

                    <div class="card w-75">

                        <div class="card-body">

                          <div class="row">

                            <div class="col-md-2">

                                <img class="w-75" src="./assets/images/png/profile.jpg" alt="">

                            </div>

                            <div class="col-md-10">

                                <div class="box-text p-2">

                                    <!-- <h4 class=" box-title text-success">Morning Freshness class </h4>

                                    <p class="box-des">with <span class="saaso">Elisa Dal Sasso </span>  <b>10:30 PM, 30Mins</b></p>

                                    <p class="box-dec2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p> -->

                                                                

                                </div>



                            </div>

                          </div>

                        </div>

                    </div>



                    

                </div>

            </div>

            <div id="BookedMeeting">

                <h2>Class Booked</h2><br><br>

                <?php foreach($profileData['BookedMeeting'] as $key => $val) { ?>

                    <span><hr></span><br>

                    <span>Class Name</span> <a href="<?php echo env('APP_URL')?>class?c=<?php echo $val->MeetingId;?>"><?php echo $val->MeetingName; ?></a><br>

                    <span>Class Url</span> <a target="blank" href="<?php echo strpos($val->MeetingUrl, 'http') !== false ? $val->MeetingUrl : 'https://'.$val->MeetingUrl; ?>"><?php echo $val->MeetingUrl; ?></a><br>

                    <span>Class Date</span> <?php echo $val->MettingDate; ?><br>

                    <span>Class Time</span> <?php echo $val->MettingTime; ?><br>

                <?php } ?>

            </div>

            <div id="MeetingTableBody">

           

            </div>



            

          

        </form>           

    </div>

</div>

<?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/profile/profile.blade.php ENDPATH**/ ?>