<script>



var BaseUrl = "/";

var nav = "<?php echo e($nav); ?>";



var Categories_ArrayList = [];

var varCategoryImage = "";





$( document ).ready(function() {

	getCategories();

    getSubCategories('1');

    getMeetings('0');

});



$(document).on('click', '.ParentCategory', function() {

    var CategoryId      =   $(this).data('id');

    getSubCategories(CategoryId);

    getMeetings('0', CategoryId, '0');

});



$(document).on('click', '.SubCategory', function() {

    var CategoryId      =   $(this).data('id');

    var CategoryField   =   $(this).data('subid');

    getMeetings('0', CategoryId, CategoryField);

});



function getCategories()

{

	$('#CategoryTableBody').html("");

	var JsonData = {

	};

	JsonData['nav'] = nav;

	JsonData['Method'] = "ajax_parent_categories";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='';

            

			Categories_ArrayList = [];	

			$.each( response.data, function( index, obj ) {

				Categories_ArrayList[index] = obj;

				

				Row +='<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">'

                            +'<div  class="padd text-white shadow">'

                                +'<a href="#" data-id="'+this.CategoryId+'" style="color: #fff;" class="ParentCategory">'

                                    +'<img src="http://127.0.0.1:8000/'+this.CategoryImage+'" alt="" class="img-fluid relative">'

                                    +'<h3 style="position: absolute; top: 18px;left: 30px;">'+this.CategoryName+'</h3>'

                                +'</a>'

                            +'</div>'

                        +'</div>';

			});

			$('#CategoryTableBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}





function getSubCategories(CategoryId)

{

	$('#SubCategoryTableBody').html("");

	var JsonData = {

	};

	JsonData['nav']           = nav;

    JsonData['CategoryId']    = CategoryId;

	JsonData['Method']        = "ajax_parentSub_categories";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='';



			Categories_ArrayList = [];	

			$.each( response.data, function( index, obj ) {

				Categories_ArrayList[index] = obj;



				Row +='<div class="item">'

                    +'<div>'

                      +'<div class="card">'

                        +'<div class="card-body"> <a href="#" data-id="'+this.CategoryParentId+'" data-subid="'+this.CategoryId+'" class="SubCategory" style="color : white">'

                         +'<img src="<?php echo e(asset('')); ?>'+this.CategoryImage+'" heignt="200" width="180" alt="" class="img-fluid">'

                          +'<!-- <h6 class="card-subtitle mb-2 text-muted">Dumbel</h6> -->'

                          +'</a>'

                        +'</div>'

                      +'</div> '

                    +'</div>'

                +'</div>';

			});

			$('#SubCategoryTableBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}



function getMeetings(LedgerId = null, CategoryId = null, SubCategoryId = null)

{

	$('#MeetingTableBody').html("");

    var Spinner  =   '<div class="spinner-grow text-success"></div>';

    $('#MeetingTableBody').html(Spinner);

	var JsonData = {

	};

	JsonData['nav']             =   nav;

    JsonData['CategoryId']      =   CategoryId;

    JsonData['SubCategoryId']   =   SubCategoryId;

    JsonData['LedgerId']        =   LedgerId;

	JsonData['Method']          =   "ajax_GetParentMeetings";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='';

            $('#MeetingTableBody').html("");

			Categories_ArrayList = [];	

			$.each( response.data, function( index, obj ) {

                Categories_ArrayList[index] = obj;

                var MeetingPrice    =   '';

				if(this.MeetingPriceStatus == 1){

                    MeetingPrice    =   'Free';

                }else{

                    MeetingPrice    =   '$'+this.MeetingPrice;

                }

                var TabClass        =   '';

                if(this.CategoryId == "1"){

                    TabClass        =   'physical';

                }else if(this.CategoryId == "2"){

                    TabClass        =   'mental';

                }else{

                    TabClass        =   'emotional';

                }

                var MeetingDescription  =    this.MeetingDescription.substr(0, 100);

                        Row += '<div class="col-sm-6" onclick="window.location.href=\'class?c='+this.MeetingId+'\'">'
                                    +'<div class="scheduleImges_container '+TabClass+'">'
                                        +'<div class="scheduleimg_content">'
                                            +'<data>'+this.MettingDate+', '+this.MettingTime+'</data>'
                                            +'<ul class="user-img-s1" onclick="window.location.href=\'instructorProfile?i='+this.LedgerId+'\'">'
                                                +'<li><img src="<?php echo e(asset('')); ?>uploads/'+this.LoginPhoto+'" class="img-fluid"></li>'
                                                +'<li><p class="name">'+this.LedgerName+'</p></li>'
                                            +'</ul>'
                                            +'<div class="user-img">'
                                                +'<p class="class_type"><b></b>'+this.CategoryName+' '+this.SubCategoryName+'</b></p>'
                                                +'<p><b>'+MeetingDescription+'</b></p>'
                                                +'<span class="rate"><b>'+MeetingPrice+'</b></span>'
                                                +'<a href="bookingClasses?cid='+this.MeetingId+'" class="joinNow">Join Now</a>'
                                            +'</div>'
                                        +'</div>'
                                        +'<div class="scheduleimg_img">'
                                            +'<img src="<?php echo e(asset('')); ?>uploads/'+this.MeetingImage+'" class="img-fluid">'
                                        +'</div>'
                                    +'</div>'
                                +'</div>';

			});



            



			$('#MeetingTableBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}







$(document).ready(function () {

            $('.customer-logos').slick({

                slidesToShow: 6,

                slidesToScroll: 1,

                autoplay: true,

                autoplaySpeed: 1500,

                arrows: false,

                dots: false,

                pauseOnHover: false,

                responsive: [{

                    breakpoint: 768,

                    settings: {

                        slidesToShow: 4

                    }

                }, {

                    breakpoint: 520,

                    settings: {

                        slidesToShow: 3

                    }

                }]

            });

        });

</script><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/home/home_script.blade.php ENDPATH**/ ?>