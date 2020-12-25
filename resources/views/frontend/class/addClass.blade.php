
    <section>
          
        <div class="container">

           


           <div class="row pt-3">
               <div class="col-sm">
                   
               </div>
               <div class="col-md-6 shadow pt-4 mt100">
                    
               <form id="addClassForm" method="post">
                        @csrf
                        <p style="color:green;" id="formStatus"></p>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Class Name</label>
                            <input type="text" name="MeetingName" class="form-control" id="MeetingName" placeholder="Enter class Name" required>
                        </div>
                        <div class="form-group">
                            <label for="MeetingDescription">Class Description</label>
                            <input type="text" class="form-control" id="MeetingDescription" placeholder="Let people know what to expect" name="MeetingDescription" required>
                        </div>
                        <div class="form-group">
                            <label for="MeetingImage">Class Image</label>
                            <input type="file" class="form-control" id="ChooseImage" placeholder="Please Select Class Image" name="MeetingImage" required>
                        </div>
                        <div class="form-group">
                          <img id="Image" style="width:175px; height:175px; border:1px dashed; margin-top:28px;">
                        </div>
                        <div class="form-group">
                            <label for="MeetingDescription">Class link</label>
                            <input type="text" class="form-control" id="MeetingUrl" placeholder="Let people know what to expect" name="MeetingUrl" required>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="CategoryOptionBody">Class Category</label>
                              <select class="form-control" name="CategoryId" id="CategoryOptionBody" required>
                                  
                                  </select>
                          </div>
                          
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="SubCategoryOptionBody">Workout Type</label>
                              <select class="form-control" id="SubCategoryOptionBody" name="SubCategoryId" required>
                               </select>
                              </div>
                          </div>
                        </div>
                            <div class="form-group">
                                <label class="label-edit-profile mb-3">Class Type</label>
                                <fieldset id="MeetingType">
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" name="MeetingType" class="custom-control-input jGcom" value="1" id="group_class" checked="">
                                    <label class="label-edit-profile custom-control-label form-check-label" for="group_class" style="line-height: initial">Group Class</label>
                                </div>
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="private_class" name="MeetingType" class="custom-control-input jCPvt" value="2">
                                    <label class="label-edit-profile custom-control-label form-check-label" for="private_class" style="line-height: initial">Private Session</label>
                                </div>
                                </fieldset>
                                <div class="invalid-feedback">&nbsp;</div>
                            </div>
                            <div class="form-group">
                                <label class="label-edit-profile mb-3">Class Status</label>
                                <fieldset id="MeetingPriceStatus">
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" name="MeetingPriceStatus" class="custom-control-input jGcom" value="1" id="free" checked="">
                                    <label class="label-edit-profile custom-control-label form-check-label" for="free" style="line-height: initial">Free Class</label>
                                </div>
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="paid" name="MeetingPriceStatus" class="custom-control-input jCPvt" value="2">
                                    <label class="label-edit-profile custom-control-label form-check-label" for="paid" style="line-height: initial">Paid Class</label>
                                </div>
                                </fieldset>
                                <div class="invalid-feedback">&nbsp;</div>
                            </div>
                            <div class="row" id="MeetingPriceBody">
                              <div class="col">
                                <div class="form-group">
                                  <label for="MeetingPrice">Class Price</label>
                                  <input type="number" class="form-control" id="MeetingPrice" name="MeetingPrice" placeholder="Please Enter Meating Price">
                              </div> 
                            </div>
                        </div>
                              
                              
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="MeetingCapacity">Capacity</label>
                                  <input type="number" min='1' max='100' class="form-control" id="MeetingCapacity" name="MeetingCapacity" placeholder="Max 100" required>
                              </div>
                              
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="MeetingDuration">Duration in Minutes</label>
                                  <input type="number" min="10" max="120" class="form-control" id="MeetingDuration" name="MeetingDuration" placeholder="Max 120" required>
                              </div>
                              </div>
                            </div>
                           <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="MettingDate">Class Date</label>
                              <input type="date" class="form-control" id="MettingDate"  min="<?php echo date('Y-m-d'); ?>" name="MettingDate" placeholder="Select Date" required>
                          </div>
                          </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="MettingTime">Class Time</label>
                            <input type="time" class="form-control" id="MettingTime" name="MettingTime" placeholder="Select Time" required>
                        </div>
                        </div>
                        </div>
                        
                        
                        
                        <div class="pb-2">

                            <div>
                              <button type="submit" id="addClassSubmit" class="btn btn-primary ">CREATE CLASS</button>
                              <button type="reset" class="btn btn-outline-red  ml-3 jCreateClassesCancelBtn">CANCEL</button>
                          </div>
                        </div>
                        
                    </form>
                    
               </div>

               <div class="col-sm">

               </div>
           </div>
        </div>
    </section>
