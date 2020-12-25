<script>

var BaseUrl = "/";

var nav = "{{$nav}}";



var Categories_ArrayList = [];

var varCategoryImage = "";

var varImage = "";



$( document ).ready(function() {

	getCategories();



	document.getElementById("ChooseImage").addEventListener("change", ReadFileToBase64);



    $("#MeetingPriceBody").hide();

    $('#MeetingPriceStatus input[type=radio]').change(function(){

        if( $(this).val() == '2' ){

            $("#MeetingPriceBody").show();

            $("#MeetingPrice").prop("required", true);

        }else{

            $("#MeetingPriceBody").hide();

            $("#MeetingPrice").prop("required", false);

        } 

    });

});



	function ReadFileToBase64() {

        if (this.files && this.files[0]) {

            var FR= new FileReader();

            FR.addEventListener("load", function(e) {

            document.getElementById("Image").src = e.target.result;

            varImage = e.target.result;

            }); 

            FR.readAsDataURL( this.files[0] );

        }

    }



$(document).on('change', '#CategoryOptionBody', function() {

    var CategoryId = $(this).val(); 

    getSubCategories(CategoryId);

});



function getCategories()

{

	$('#CategoryOptionBody').html("");

	var JsonData = {

	};

	JsonData['nav'] = nav;

	JsonData['Method'] = "ajax_parent_categories";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='<option disabled selected>Please Select Class Category</option>';

            

			Categories_ArrayList = [];	

			$.each( response.data, function( index, obj ) {

				Categories_ArrayList[index] = obj;

				

				Row +='<option value="'+this.CategoryId+'">'+this.CategoryName+'</option>';

			});

			$('#CategoryOptionBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}



function getSubCategories(CategoryId)

{

	$('#SubCategoryOptionBody').html("");

	var JsonData = {

	};

	JsonData['nav']           = nav;

    JsonData['CategoryId']    = CategoryId;

	JsonData['Method']        = "ajax_parentSub_categories";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row ='<option disabled selected>Please Select Workout Type</option>';

            

			Categories_ArrayList = [];	

			$.each( response.data, function( index, obj ) {

				Categories_ArrayList[index] = obj;

				

				Row +='<option value="'+this.CategoryId+'">'+this.CategoryName+'</option>';

			});

			$('#SubCategoryOptionBody').html(Row);

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

}



$("#addClassForm").submit(function(e) {

	

    var form = $(this);

    e.preventDefault();

	$(":submit").attr("disabled", true);

	$("#addClassSubmit").html('<span class="spinner-border spinner-border-sm"></span> Adding Class...');

	var JsonData = {

	};

	JsonData['nav']                 =   nav;

    JsonData['MeetingName']         =   $('#MeetingName').val();

	JsonData['MeetingDescription']  =   $('#MeetingDescription').val();

	JsonData['MeetingUrl']  		=   $('#MeetingUrl').val();

    JsonData['CategoryId']          =   $('#CategoryOptionBody').val();

    JsonData['SubCategoryId']       =   $('#SubCategoryOptionBody').val();

	JsonData['MeetingType']         =   $("input[name='MeetingType']:checked").val();

	JsonData['MeetingPriceStatus'] 	= 	$("input[name='MeetingPriceStatus']:checked").val();

    JsonData['MeetingPrice']        =   $('#MeetingPrice').val();

    JsonData['MeetingCapacity']     =   $('#MeetingCapacity').val();

    JsonData['MeetingDuration']     =   $('#MeetingDuration').val();

    JsonData['MettingDate']         =   $('#MettingDate').val();

	JsonData['MettingTime']         =   $('#MettingTime').val();

	JsonData['MeetingImage']		=	varImage;

	JsonData['Method']              =   "ajax_addClass_fr";

	AjaxCallSync("ajax_index",JsonData,function(response) {

		if(response.status==true){

			var Row =response.message;

			$('#formStatus').html(Row);

            $("#addClassForm")[0].reset();

			$(":submit").attr("disabled", false);

			$(location).attr('href', 'Profile');

		}else if(response.status==true){

			Notify("Message ",response.message,"danger");

		}

	});

});
</script>