



  <section>

    <div class="workoutTopBanner">

      <img src="{{asset('assets-frontend/image/bg2.jpg')}}">

    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-9 workout_content">

          <h4><?php echo $Meeting->MeetingName;?></h4>

          <h5>Price:<span> <?php echo $Meeting->MeetingPriceStatus == 2 ? '$'.$Meeting->MeetingPrice : "Free";?></span></h5>

          <img src="{{asset('')}}uploads/<?php echo $Meeting->MeetingImage;?>">

          <br><br><br>

          	<?php if(@$Meeting->MeetingStatus == 'A'){ ?>

          		<h4>Class Link</h4>

				<span>Class Url</span> <a target="blank" href="<?php echo strpos($Meeting->MeetingUrl, 'http') !== false ? $Meeting->MeetingUrl : 'https://'.$Meeting->MeetingUrl; ?>"><?php echo $Meeting->MeetingUrl; ?></a>

			<?php }else{ ?>

				<a href="<?php echo env('APP_URL')?>bookingClasses?cid=<?php echo $Meeting->MeetingId;?>">Book Now</a>

			<?php } ?>

			<br><br>

			<h4>Class Description</h4>

          <p><?php echo $Meeting->MeetingDescription;?></p>

        </div>

        <div class="col-lg-3 details">

          <div class="details_clmn-One">

            <div class="details_part1">

              <h4><b>Details</b></h4>

              <ul>

                <li><b>Start:</b></li>

                <li><b>End:</b></li>

                <li><b>Cost:</b></li>

                <li><b>Categories:</b></li>

                <li><b>Tags:</b></li>

              </ul>

              <br>

            </div>

            <div class="details_part2">

              <ul>

                <li><?php echo date('d-M-Y, H:i:s', strtotime($Meeting->MettingDate.' '.$Meeting->MettingTime)); ?></li>

                <li><?php echo date('d-M-Y, H:i:s', strtotime($Meeting->MeetingDuration, strtotime($Meeting->MettingDate.' '.$Meeting->MettingTime))); ?></li>

                <li><?php echo $Meeting->MeetingPriceStatus == 2 ? '$'.$Meeting->MeetingPrice : "Free";?></li>

                <li><?php echo $Meeting->CategoryName.', '.$Meeting->SubCategoryName;?></li>

                <li>e-learn</li>

              </ul>

            </div>

          </div>

          <div class="OrganizersImg">

          	<a href="<?php echo env('APP_URL')?>instructorProfile?i=<?php echo $Meeting->LedgerId?>">

	            <img src="{{asset('')}}uploads/<?php echo $Meeting->LoginPhoto;?>">

	            <i class="OI_img"><b>&nbsp; <?php echo $Meeting->LedgerName;?></b></i>

	        </a>

          </div>



          <div class="details_clmn-two">





            <div class="details_part1">

              <h4><b>Organizers</b></h4>

              <ul>

                <li><b>Phone:</b></li>

                <li><b>Email:</b></li>

              </ul>

            </div>

            <div class="details_part2">

              <ul>

                <li>Feb 24 @ 05:35am</li>

                <li>achu@mail.com</li>

              </ul>

            </div>

          </div>



        </div>

      </div>

    </div>

  </section>



  <!----scheduleImges header start----->

	<section id="scheduleImges">

		<div class="container">

			<div class="row rows" id="MeetingTableBody">

<!-- Meetings Table Body -->

			</div>

		</div>

	</section>

  <!----scheduleImges header start----->

  