<script>

    var BaseUrl = "/";

    var nav = "{{$nav}}";



    var Categories_ArrayList = [];

    var varCategoryImage = "";

    var varImage = "";

    var LedgerId    =   <?php echo $Instructor['Instructor']->LedgerId; ?>;





$( document ).ready(function() {

    getMeetings(LedgerId);

});



function getMeetings(LedgerId = null, CategoryId = null, SubCategoryId = null)

{

	$('#MeetingTableBody').html("");

    var Spinner  =   '<div class="spinner-grow text-muted"></div>'

                    +'<div class="spinner-grow text-primary"></div>'

                    +'<div class="spinner-grow text-success"></div>'

                    +'<div class="spinner-grow text-info"></div>'

                    +'<div class="spinner-grow text-warning"></div>'

                    +'<div class="spinner-grow text-danger"></div>'

                    +'<div class="spinner-grow text-secondary"></div>'

                    +'<div class="spinner-grow text-dark"></div>'

                    +'<div class="spinner-grow text-light"></div>';

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



				Row +='<a href="class?c='+this.MeetingId+'"><div class="row">'

                        +'<div>'

                        +'</div>'

                        +'<div class="col-md-8 card-deck">'

                        +'<div class="card w-75">'

                        +'<div class="card-body">'

                        +'<div class="row">'

                        +'<div class="col-md-2">'

                        +'<img class="rounded" height="100" src="{{asset('')}}uploads/'+this.MeetingImage+'" alt="">'

                        +'</div>'

                        +'<div class="col-md-10">'

                        +'<div class="box-text p-2">'

                        +'<h4 class=" box-title text-success">'+this.MeetingName+'</h4>'

                        +'<p class="box-des">with <span class="saaso"><a href="instructorProfile?i='+this.LedgerId+'">'+this.LedgerName+' </a></span>  <b>'+this.MettingDate+', '+this.MettingTime+', '+this.MeetingDuration+'</b></p>'

                        +'<p class="box-dec2">'+this.MeetingDescription+'...</p><b> '+MeetingPrice+'</b>'

                        +'</div>'

                        +'</div>'

                        +'</div>'

                        +'</div>'

                        +'</div>'

                        +'</div>'

                        +'</div></a>';

			});

			$('#MeetingTableBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}

</script>