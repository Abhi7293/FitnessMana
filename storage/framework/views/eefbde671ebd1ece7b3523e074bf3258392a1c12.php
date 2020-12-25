<script type="text/javascript">

    var BaseUrl = "/";

    var nav = "<?php echo e($nav); ?>";



    var Categories_ArrayList = [];

    var varCategoryImage = "";

    var varImage = "";







    $( document ).ready(function() {

        document.getElementById("ChooseImage").addEventListener("change", ReadFileToBase64);

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







    $("#updateProfileForm").submit(function(e) {

	

        var form = $(this);

        e.preventDefault();

        $(":submit").attr("disabled", true);

        $("#SubmitButton").html('<span class="spinner-border spinner-border-sm"></span> Updating...');

        var JsonData = {

        };

        JsonData['nav']             =   nav;

        JsonData['Name']            =   $('#Name').val();

        JsonData['Mobile']          =   $('#Mobile').val();

        JsonData['ProfileImage']    =   varImage;

        JsonData['Method']          =   "ajax_updateProfile_fr";

        AjaxCallSync("ajax_index",JsonData,function(response) {

            if(response.status==true){

                var Row =response.message;

                $('#formStatus').html(Row);

                $(":submit").attr("disabled", false);

                $(location).attr('href', 'Profile');

            }else if(response.status==true){

                Notify("Message ",response.message,"danger");

            }

        });

    });

</script><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/profile/updateProfile_script.blade.php ENDPATH**/ ?>