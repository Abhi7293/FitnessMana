<br><br><br><br><br>
<?php if(session()->exists('LoginId')){ ?>
	<h2>Please Add User Review</h2>
	<form method="post" id="addReviewForm">
		<input type="hidden" name="LedgerId" id="LedgerId" value="<?php echo $rating['LedgerId'];?>"><br>
		<input type="hidden" name="ReviewLedgerId" id="ReviewLedgerId" value="<?php echo session()->get("LedgerId");?>"><br>
		<select name="Rating" required id="Rating">
			<option selected="" disabled="">Please select Rating</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select><br><br>
		<input type="text" name="Review" id="Review" required><br><br>
		<button type="submit" id="addReviewSubmit" class="btn btn-primary ">SUBMIT REVIEW</button>
	</form>
<?php } ?>
<br><br><br><br>
<h2>User Rating</h2> <?php echo number_format($rating['rating'], 1); ?>
<br><br>
<h2>User Reviews</h2>
<div id="ReviewBody">

</div><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/rating/ratingReview.blade.php ENDPATH**/ ?>