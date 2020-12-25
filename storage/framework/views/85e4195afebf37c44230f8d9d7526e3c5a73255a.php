

<script>

    $('#ConfirmPassword').on('keyup', function () {

        if ($('#Password').val() == $('#ConfirmPassword').val() && $('#Password').val() != '') {

            $('#reg_message').html('Password Match').css('color', 'green');

            $('#Submit').attr({disabled:false});

            return true;

        } else {

            $('#reg_message').html('Password Not Matching').css('color', 'red');

            $('#Submit').attr({disabled:true});

        }

    });


function myInput(input) {
    $("#loginType").val(input);
    if(input == 'phone'){
        $("#Email").prop('required',false);
        $("#Phone").prop('required',true);
    }else{
        $("#Email").prop('required',true);
        $("#Phone").prop('required',false);
    }
}
</script><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/signup/signup_script.blade.php ENDPATH**/ ?>