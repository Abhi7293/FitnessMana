<br><br><br><br><br><br><br><br>

<h2>Class Price = <?php echo $meetingBookingData->MeetingPrice; ?> </h2>

<button type="submit" onclick="window.location.href='<?php echo env('APP_URL')?>SubscribProcess?bid=<?php echo base64_encode($meetingBookingData->MeetingBookingId);?>'" id="addClassSubmit" class="btn btn-primary ">Pay Now</button>

<?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/class/bookClass.blade.php ENDPATH**/ ?>