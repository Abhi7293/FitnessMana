<br><br><br><br><br><br><br>

<h1>Instructor Public Profile</h1><br><br><br><br>

Instructor Name = <?php echo $Instructor['Instructor']->LoginName;?><br><br>

Instructor Image = <img class="rounded" alt="Cinque Terre" height="111" src="{{asset('')}}uploads/<?php echo $Instructor['Instructor']->LoginPhoto;?>"><br><br>

Instructor Mobile = <?php echo $Instructor['Instructor']->Mobile;?><br><br>

Instructor Skills = <?php echo $Instructor['Instructor']->Skills;?><br><br>

Instructor Experience = <?php echo $Instructor['Instructor']->Experience;?><br><br>

Instructor Email = <?php echo $Instructor['Instructor']->Email;?><br>

<h2>User Rating</h2>

<div><?php echo number_format($Instructor['AvgRating'],1); ?></div>

<h2>User Review</h2>

<?php if(!empty($Instructor['Reviews'])){ foreach($Instructor['Reviews'] as $key => $val) { ?>

	<div><?php echo $val->Review; ?></div>

<?php }} ?>

<a href="<?php echo env('APP_URL')?>rating?l=<?php echo base64_encode($Instructor['Instructor']->LedgerId);?>">Rate Instructor</a>

<div id="MeetingTableBody"></div>