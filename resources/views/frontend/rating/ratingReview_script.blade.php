<script>



var BaseUrl = "/";

var nav = "{{$nav}}";



var Categories_ArrayList = [];

var varLedgerId = <?php echo $rating['LedgerId'];?>;





$( document ).ready(function() {

	getReviews();

});





function getReviews()

{

	$('#ReviewBody').html("");

	var JsonData = {

	};

	JsonData['nav'] 		= 	nav;

	JsonData['LedgerId']	=	varLedgerId

	JsonData['Method'] 		= 	"ajax_reviews_fr";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='';

            

			Categories_ArrayList = [];	

			$.each( response.data, function( index, obj ) {

				Categories_ArrayList[index] = obj;

				

				Row +='<div>'+this.Review+'</div>';

			});

			$('#ReviewBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}



$("#addReviewForm").submit(function(e) {

	

    var form = $(this);

    e.preventDefault();

	$(":submit").attr("disabled", true);

	$("#addReviewSubmit").html('<span class="spinner-border spinner-border-sm"></span> Adding Review...');

	var JsonData = {

	};

	JsonData['nav']             =   nav;

    JsonData['LedgerId']        =   $('#LedgerId').val();

	JsonData['ReviewLedgerId']	=   $('#ReviewLedgerId').val();

	JsonData['Rating']  		=   $('#Rating').val();

	JsonData['Review']  		=   $('#Review').val();

	JsonData['Method']          =   "ajax_addReview_fr";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='';

			getReviews();

			$("#addReviewForm")[0].reset();

			$("#addReviewSubmit").html('SUBMIT REVIEW');

			$(":submit").attr("disabled", false);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

});

</script>