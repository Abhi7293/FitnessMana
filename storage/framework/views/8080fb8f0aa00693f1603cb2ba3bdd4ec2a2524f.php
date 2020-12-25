<?php $CategoryId = json_decode(session()->get('CategoryId')); 
if(!empty($CategoryId)){$CategoryId=implode(",",$CategoryId);}?>
    <!-- form START -->
    <section><br><br><br><br><br>
        <div class="container">
           <div class="row pt-3">
               <div class="col-sm">
               </div>
               <div class="col-md-6 shadow pt-4">
                    <h4>Update Profile</h4>

                    <?php if(!empty($Please_update_Profile)){ ?><p style="color:green;" id="formStatus"><?php echo $Please_update_Profile;?></p><?php } ?>
                    <div class="form-group">
                            <label for="Video1">First Feature Video First</label>
                            <input type="file" name="Video1" onchange="Video1()" class="form-control" id="Video1" placeholder="Select First Feature Video">
                            <progress id="progressBarVideo1" value="0" max="100" style="width:300px;"></progress>
							  <p id="statusVideo1"></p>
							  <!-- <p id="loaded_n_total"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="Video2">Second Feature Video</label>
                            <input type="file" name="Video2" onchange="Video2()" class="form-control" id="Video2" placeholder="Select Second Feature Video">
                            <progress id="progressBarVideo2" value="0" max="100" style="width:300px;"></progress>
                            <p id="statusVideo2"></p>
                        </div>
                        <div class="form-group">
                            <label for="Video3">Third Feature Video</label>
                            <input type="file" name="Video3" onchange="Video3()" class="form-control" id="Video3" placeholder="Select Third Feature Video">
                        	<progress id="progressBarVideo3" value="0" max="100" style="width:300px;"></progress>
                        	<p id="statusVideo3"></p>
                        </div>
                    <form id="updateProfileForm" method="post"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <p style="color:green;" id="formStatus"></p>
                        <div class="form-group">
                            <label for="Skills">Skills</label>
                            <input type="text" name="Skills" class="form-control" value="<?php echo session()->get('Skills');?>" id="Skills" placeholder="Enter Your Skills" >
                        </div>
                        <?php if(empty(session()->get('LoginPhoto'))){ ?>
                            <div class="form-group">
                                <label for="MeetingImage">Profile Image</label>
                                <input type="file" class="form-control" id="ChooseImage" placeholder="Please Select Profile Image" name="ProfileImage" <?php echo session()->get('LoginPhoto') ? '' : 'required'; ?>>
                            </div>
                            <div class="form-group">
                              <img id="Image" src="<?php echo e(asset('uploads')); ?>/<?php echo session()->get('LoginPhoto'); ?>" style="width:175px; height:175px; border:1px dashed; margin-top:28px;">
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="CategoryOptionBody">Category</label>
                            <input type="checkbox" id="Physical" name="Category[]" value="1" <?php if (strpos($CategoryId, '1') !== false) { echo 'checked'; } ?>>
                            <label for="Physical">Physical</label><br>
                            <input type="checkbox" id="Mental" name="Category[]" value="2" <?php if (strpos($CategoryId, '2') !== false) { echo 'checked'; } ?>>
                            <label for="Mental">Mental</label><br>
                            <input type="checkbox" id="Emotional" name="Category[]" value="3" <?php if (strpos($CategoryId, '3') !== false) { echo 'checked'; } ?>>
                            <label for="Emotional">Emotional</label><br>
                        </div>
                        <div class="form-group">
                            <label for="Experience">Experience</label>
                            <input type="text" name="Experience"   value="<?php echo session()->get('Experience');?>" class="form-control" id="Experience" placeholder="Enter Your Experience" >
                        </div>
                        
                        <div class="pb-2">
                            <button type="submit" id="SubmitButton" class="btn btn-primary ">UPDATE</button>
                    </form>
                    <div id="progress-div"><div id="progress-bar"></div></div>
               </div>
           </div>
        </div>
    </section><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/profile/updateInstructorProfile.blade.php ENDPATH**/ ?>