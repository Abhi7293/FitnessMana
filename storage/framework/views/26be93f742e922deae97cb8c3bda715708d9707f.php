<script>
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
</script><?php /**PATH /home/experts3/nutridietplanner.in/test/FitnessMana/resources/views/frontend/login/login_script.blade.php ENDPATH**/ ?>