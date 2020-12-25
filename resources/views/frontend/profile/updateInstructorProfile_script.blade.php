<script type="text/javascript">
    var BaseUrl                 =   "/";
    var nav                     =   "{{$nav}}";
    var Categories_ArrayList    =   [];
    var varCategoryImage        =   "";
    var varImage                =   '';
    var CategoryId              =   [];
    var redirectUrl             =   "<?php echo @$redirectUrl; ?>";

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

    $("#updateProfileForm").submit(function(e){
        if ($("#Physical").prop('checked')==true) {CategorySelect = '1';}
        else if($("#Mental").prop('checked')==true) {CategorySelect = '1';}
        else if($("#Emotional").prop('checked')==true) {CategorySelect = '1';}
        else{
            e.preventDefault();
            alert('Please select one Category at least');
            CategorySelect = '2';
        }
        if(CategorySelect == '1'){
            var form = $(this);
            e.preventDefault();
            $(":submit").attr("disabled", true);
            $("#SubmitButton").html('<span class="spinner-border spinner-border-sm"></span> Updating...');
            $("input[name='Category[]']:checked").each(function ()
            {
                CategoryId.push(parseInt($(this).val()));
            });
            var JsonData = {
            };
            JsonData['nav']             =   nav;
            JsonData['Skills']          =   $('#Skills').val();
            JsonData['Experience']      =   $('#Experience').val();
            JsonData['CategoryId']      =   CategoryId;
            JsonData['ProfileImage']    =   varImage;
            JsonData['Method']          =   "ajax_updateInstructorProfile_fr";
            AjaxCallSync("ajax_index",JsonData,function(response) {
                if(response.status==true){
                    var Row =response.message;
                    $('#formStatus').html(Row);
                    $(location).attr('href', redirectUrl);
                }else if(response.status==true){
                    Notify("Message ",response.message,"danger");
                    $(":submit").attr("disabled", false);
                }
            });
        }
    });
</script>
<script>
	function _(el) {
  		return document.getElementById(el);
	}


	function Video1() {
		var file = _("Video1").files[0];
		var name = file.name;
        var size = file.size;
       	var type = file.type;
		if(type="video/mp4" && size < 34000000){
			var formdata = new FormData();
			formdata.append("nav",  nav);
			formdata.append("_token", _token);
			formdata.append("Video1", file);
			formdata.append("Method", "ajax_updateFeatureVideos_fr");
			var ajax = new XMLHttpRequest();
			ajax.upload.addEventListener("progress", progressHandler1, false);
			ajax.addEventListener("load", completeHandler1, false);
			ajax.addEventListener("error", errorHandler1, false);
			ajax.addEventListener("abort", abortHandler1, false);
			ajax.open("POST", "ajax_index"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
			ajax.send(formdata);
		}else{
			alert("Please Select Video MP4 file and File size less then 30 MB");
			return;
		}
	}

	function progressHandler1(event) {
  		//_("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  		var percent = (event.loaded / event.total) * 100;
  		_("progressBarVideo1").value = Math.round(percent);
  		_("statusVideo1").innerHTML = Math.round(percent) + "% uploaded... please wait";
	}

	function completeHandler1(event) {
		var returnData = JSON.parse(event.target.responseText);
  		_("statusVideo1").innerHTML = returnData.message;
  		_("progressBarVideo1").value = 0; //wil clear progress bar after successful upload
	}

	function errorHandler1(event) {
  		_("statusVideo1").innerHTML = "Upload Failed";
	}

	function abortHandler1(event) {
  		_("statusVideo1").innerHTML = "Upload Aborted";
	}

	function Video2() {
		var file = _("Video2").files[0];
		var name = file.name;
        var size = file.size;
       	var type = file.type;
		if(type="video/mp4" && size < 34000000){
			var formdata = new FormData();
			formdata.append("nav",  nav);
			formdata.append("_token", _token);
			formdata.append("Video2", file);
			formdata.append("Method", "ajax_updateFeatureVideos_fr");
			var ajax = new XMLHttpRequest();
			ajax.upload.addEventListener("progress", progressHandler2, false);
			ajax.addEventListener("load", completeHandler2, false);
			ajax.addEventListener("error", errorHandler2, false);
			ajax.addEventListener("abort", abortHandler2, false);
			ajax.open("POST", "ajax_index"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
			ajax.send(formdata);
		}else{
			alert("Please Select Video MP4 file and File size less then 30 MB");
			return;
		}
	}

	function progressHandler2(event) {
  		//_("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  		var percent = (event.loaded / event.total) * 100;
  		_("progressBarVideo2").value = Math.round(percent);
  		_("statusVideo2").innerHTML = Math.round(percent) + "% uploaded... please wait";
	}

	function completeHandler2(event) {
		var returnData = JSON.parse(event.target.responseText);
  		_("statusVideo2").innerHTML = returnData.message;
  		_("progressBarVideo2").value = 0; //wil clear progress bar after successful upload
	}

	function errorHandler2(event) {
  		_("statusVideo2").innerHTML = "Upload Failed";
	}

	function abortHandler2(event) {
  		_("statusVideo2").innerHTML = "Upload Aborted";
	}

	function Video3() {
		var file = _("Video3").files[0];
		var name = file.name;
        var size = file.size;
       	var type = file.type;
		if(type="video/mp4" && size < 34000000){
			var formdata = new FormData();
			formdata.append("nav",  nav);
			formdata.append("_token", _token);
			formdata.append("Video3", file);
			formdata.append("Method", "ajax_updateFeatureVideos_fr");
			var ajax = new XMLHttpRequest();
			ajax.upload.addEventListener("progress", progressHandler3, false);
			ajax.addEventListener("load", completeHandler3, false);
			ajax.addEventListener("error", errorHandler3, false);
			ajax.addEventListener("abort", abortHandler3, false);
			ajax.open("POST", "ajax_index"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
			ajax.send(formdata);
		}else{
			alert("Please Select Video MP4 file and File size less then 30 MB");
			return;
		}
	}

	function progressHandler3(event) {
  		//_("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  		var percent = (event.loaded / event.total) * 100;
  		_("progressBarVideo3").value = Math.round(percent);
  		_("statusVideo3").innerHTML = Math.round(percent) + "% uploaded... please wait";
	}

	function completeHandler3(event) {
		var returnData = JSON.parse(event.target.responseText);
  		_("statusVideo3").innerHTML = returnData.message;
  		_("progressBarVideo3").value = 0; //wil clear progress bar after successful upload
	}

	function errorHandler3(event) {
  		_("statusVideo3").innerHTML = "Upload Failed";
	}

	function abortHandler3(event) {
  		_("statusVideo3").innerHTML = "Upload Aborted";
	}
</script>