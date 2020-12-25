<script>
var BaseUrl = "/";
var nav = "{{$nav}}";
var Categories_ArrayList = [];
var varCategoryImage = "";

$( document ).ready(function() {
    getBookedMeetings(<?php echo session()->get('LedgerId')?>);
});

function getBookedMeetings(LedgerId){
	$('#MeetingTableBody').html("");
    var Spinner  =   '<div class="spinner-grow text-success"></div>';
    $('#MeetingTableBody').html(Spinner);
	var JsonData = {};
	JsonData['nav']             =   nav;
    JsonData['LedgerId']        =   LedgerId;
	JsonData['Method']          =   "ajax_getBookedMeetings";
	AjaxCallSync("<?php echo env('APP_URL')?>ajax_index",JsonData,function(response) {
		if(response.status==true){
			var Row ='';
            $('#MeetingTableBody').html("");
			Categories_ArrayList = [];	
            var totalPrice  =   0;
			$.each( response.data, function( index, obj ) {
                Categories_ArrayList[index] = obj;
                totalPrice  =   +totalPrice + +this.MeetingPrice;
                Row +='<div class="col-lg-6" onclick="window.location.href=\'class?c='+this.MeetingId+'\'">'
                        +'<div class="scheduleImges_container ">'
                            +'<div class="scheduleimg_content">'
                                +'<data>'+this.MettingDate+', '+this.MettingTime+'</data>'
                                +'<div class="user-img">'
                                    +'<a href="instructorProfile?i='+this.LedgerId+'">'
                                        +'<img src="{{asset('')}}uploads/'+this.LoginPhoto+'">'
                                        +'<p class="name">'+this.LedgerName+'</p>'
                                    +'</a>'
                                    +'<h4>'+this.CategoryName+' '+this.SubCategoryName+'</h4>'
                                    +'<a href="#" class="rate">'+this.MeetingPrice+'</a>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>';
			});
            if(response.data == ''){
                $('#TotalPriceBody').html("No Class In Cart");
                var HomeButton = '<button type="submit" onclick="window.location.href=\'<?php echo env('APP_URL')?>\'" id="addClassSubmit" class="btn btn-primary ">Home Page</button>';
                $('#PayNowButton').html(HomeButton);
            }else{
                $('#TotalPriceBody').html('Total Payment = ' + totalPrice);
                $('#MeetingTableBody').html(Row);
                var PayNowButton = '<button type="submit" onclick="window.location.href=\'<?php echo env('APP_URL')?>SubscribProcess\'" id="addClassSubmit" class="btn btn-primary ">Pay Now</button>';
                $('#PayNowButton').html(PayNowButton);
            }
		}else if(response.status==true){
			Notify("Message ",response.message,"danger");
		}
	});
}
</script>