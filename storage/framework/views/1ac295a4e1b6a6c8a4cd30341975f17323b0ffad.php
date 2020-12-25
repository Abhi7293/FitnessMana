<script>

var BaseUrl = "/";
var nav = "<?php echo e($nav); ?>";

var Categories_ArrayList 	= 	[];
var varCategoryImage 		= 	"";
var CategoryId				=	<?php echo $Meeting->CategoryId;?>;


$( document ).ready(function() {
    getMeetings('0', CategoryId, '0');
});

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
                    TabClass        =   'SD_part1';
                }else if(this.CategoryId == "2"){
                    TabClass        =   'SD_part2';
                }else{
                    TabClass        =   'SD_part3';
                }
                var MeetingDescription  =    this.MeetingDescription.substr(0, 100);
                        Row +='<div class="col-lg-6" onclick="window.location.href=\'class?c='+this.MeetingId+'\'">'
                                +'<div class="scheduleImges_container '+TabClass+'">'
                                    +'<div class="scheduleimg_content">'
                                        +'<data>'+this.MettingDate+', '+this.MettingTime+'</data>'
                                        +'<div class="user-img">'
                                            +'<a href="instructorProfile?i='+this.LedgerId+'">'
                                                +'<img src="<?php echo e(asset('')); ?>uploads/'+this.LoginPhoto+'">'
                                                +'<p class="name">'+this.LedgerName+'</p>'
                                            +'</a>'
                                            +'<h4>'+this.CategoryName+' '+this.SubCategoryName+'</h4>'
                                            +'<p>'+MeetingDescription+'</p>'
                                            +'<a href="#" class="rate">'+MeetingPrice+'</a>'
                                            +'<a href="bookingClasses?cid='+this.MeetingId+'" class="joinNow">Join Now</a>'
                                        +'</div>'
                                    +'</div>'
                                    +'<div class="scheduleimg_img">'
                                        +'<img src="<?php echo e(asset('')); ?>uploads/'+this.MeetingImage+'">'
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

</script><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/class/class_script.blade.php ENDPATH**/ ?>