/*!
 * Bootstrap 4 multi dropdown navbar ( https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-navbar/ )
 * Copyright 2017.
 * Licensed under the GPL license
*/

/*
AjaxCall(function(d) {
    //processing the data
    console.log(d);
});
*/



var TimerTransaction = null ;
var TimerNow = "";

function startCountDown(id,starttime, endtime){
	console.log(starttime+" - "+endtime);
  var STime = new Date( starttime).getTime();
  var ETime = new Date( endtime).getTime();
  var t = ETime- STime;
  t -= 3000;
  var seconds = 0;
  var minutes = 0;
  var hours = 0;

  TimerTransaction = setInterval(function(){
	seconds = Math.floor( (t/1000) % 60 );
	minutes = Math.floor( (t/1000/60) % 60 );
	hours = Math.floor( (t/1000/(60*60)) % 60 );
	hours = DigitNumber(hours,2);
	minutes = DigitNumber(minutes,2); 
	seconds = DigitNumber(seconds,2); 
	TimerNow = hours + ':' + minutes + ':' + seconds;
    if((parseInt(hours)+parseInt(minutes)+parseInt(seconds))<=0){
    	stopCountDown();
		$('#'+id).html('00:00:00');
		$('#'+id).parent().css( "background-color", "#f03" );
    }else{
		t -= 1000 ;
		$('#'+id).html(TimerNow);
		$('#'+id).parent().css( "background-color", "#33af65" );
	}
  },1000);
}  

function stopCountDown(){
	clearInterval(TimerTransaction);
}

function IsInternet()
{
	$.ajax({
		url: "internet",
		timeout: 10000,
		error: function(jqXHR) { 
			if(jqXHR.status==0) {
				Notify("Internet ","Please check your connection settings.","danger");
				return false;
			}
		},
		success: function() {
		}
	});
}

function getDatePickerValue(ControlId)
{
	var output = $("#Day_"+ControlId).val()+'-'+$("#Month_"+ControlId).val()+'-'+$("#Year_"+ControlId).val();
	return output;
}

function getCurrentDateTimeJS()
{
	var d = new Date();
	var o = {year:'numeric', month:'2-digit', day:'2-digit', hour:'2-digit', minute:'2-digit', second:'2-digit'};
	return d.toLocaleDateString('en-US', o);
}

function SplitNumber(number)
{
	var output = [],
		sNumber = number.toString();
	for (var i = 0, len = sNumber.length; i < len; i += 1) {
		output.push(+sNumber.charAt(i));
	}
	return output;
}
function SplitNumberTwoDigit(num) {
	   var s = '0' + num, //convert num to string
		res = [],
		  i;
	  for(i = s.length; i > 1; i -= 2) {
		//loop from back, extract 2 digits at a time, 
		//output as number,
		res.push(+s.slice(i - 2, i));
	  }
	  return res;
}

function DigitNumber(n, length) {
  var len = length - (''+n).length;
  return (len > 0 ? new Array(++len).join('0') : '') + n
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
	if(charCode==46 || charCode==190){
		if(evt.target.value.includes('.')){
			return false;
		}else{
			return true;
		}
	}else{
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
			return false;
		}else{
			return true;
		}
	}
}

function isNumberKeyOnly(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
	
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
			return false;
		}else{
			return true;
		}
}

function isYesNo(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode == 89 || charCode == 121){
		return true;
	}else if (charCode == 78 || charCode == 110){
		return true;
	}else{
		return false;
	}
	
}

function Notify(title,message,types){
	notes.show(message, {
		type: types,
		title: title,
	});
	setTimeout(function(){ $('#notes').html(''); }, 2000); 
}

function AjaxLoader(IsShow){
	
	if(IsShow=="show"){
		var content = '<div class="spinner-border text-light spinner-border-sm">'
				+'<span class="sr-only">Loading...</span>'
				+'</div>';
		$('#ajax_loader').html(content);
	}else if(IsShow=="show_black"){
		var content = '<div class="spinner-border spinner-border-sm">'
			+'<span class="sr-only">Loading...</span>'
			+'</div>';
		$('#ajax_loader').html(content);
	}else{
		setTimeout(function(){ $('#ajax_loader').html(''); }, 200);
	}
}


function AjaxLoaderMulti(Ids,IsShow){
	
	if(IsShow=="show"){
		var content = '<div class="spinner-border text-light spinner-border-sm">'
				+'<span class="sr-only">Loading...</span>'
				+'</div>';
		$('#'+Ids).html(content);
	}else if(IsShow=="show_black"){
		var content = '<div class="spinner-border spinner-border-sm">'
			+'<span class="sr-only">Loading...</span>'
			+'</div>';
		$('#'+Ids).html(content);
	}else{
		setTimeout(function(){ $('#'+Ids).html(''); }, 200);
	}
}

function BlockSpace(Ids)
{
	$(Ids+"").on("keypress", function(e) {
		if (e.which === 32)
			e.preventDefault();
	});
}

function TwoNumberWithSpaces(id, x) {
    var _value = x.replace(/\W/gi, '').replace(/(.{2})/g, '$1 ');
	$('#'+id).val(_value);
}

function CustomDatePicker(_Id, _Date)
{
	var d = new Date(_Date);
	var Day = DigitNumber(d.getDate(),2);
	var Month = DigitNumber((d.getMonth() + 1),2); // Since getMonth() returns month from 0-11 not 1-12
	var Year = DigitNumber(d.getFullYear(),2);

	var html = '<table style="width:100%;"><tr class="form-control form-control-sm" style="padding:0px !important;">';
	html += '<td style="width:32px; padding:0px !important;"><input onfocus="this.select();" onmouseup="return false;" onkeypress="return isNumberKeyOnly(event)" class="form-control form-control-sm" style="border:none !important; height:28px !important;" type="text" id="Day_'+_Id+'" name="Day_'+_Id+'" value="'+Day+'" maxlength="2"></td>';
	html += '<td style="width:3px; padding:0px !important;">/</td>';
	html += '<td style="width:32px; padding:0px !important;"><input onfocus="this.select();" onmouseup="return false;" onkeypress="return isNumberKeyOnly(event)" class="form-control form-control-sm" style="border:none !important; height:28px !important;" type="text" id="Month_'+_Id+'" name="Month_'+_Id+'" value="'+Month+'" maxlength="2"></td>';
	html += '<td style="width:3px; padding:0px !important;">/</td>';
	html += '<td style="width:50px; padding:0px !important;"><input onfocus="this.select();" onmouseup="return false;" onkeypress="return isNumberKeyOnly(event)" class="form-control form-control-sm" style="border:none !important; height:28px !important;" type="text" id="Year_'+_Id+'" name="Year_'+_Id+'" value="'+Year+'" maxlength="4"></td>';
	html += '</tr></table>';

	setTimeout(function(){ 

		$("#Day_"+_Id).bind('blur', function(e) { 
			var lastDay = new Date(d.getFullYear(), parseInt($("#Month_"+_Id).val()), 0);
			if($(this).val() == "" || parseInt($(this).val()) > parseInt(lastDay.getDate()) || parseInt($(this).val()) <= 0) {
				$(this).val(Day);
			}else{
				$(this).val(DigitNumber($(this).val(),2));
			}
		});

		$("#Month_"+_Id).bind('blur', function(e) { 
			if($(this).val() == "" || parseInt($(this).val()) > 12 || parseInt($(this).val()) <= 0) {
				$(this).val(Month);
			}else{
				$(this).val(DigitNumber($(this).val(),2));
			}
		});

		$("#Year_"+_Id).bind('blur', function(e) { 
			if($(this).val() == "" || parseInt($(this).val()) > 2022 || parseInt($(this).val()) < 1970) {
				$(this).val(Year);
			}
		});
	}, 500);

	return html;

}


function getCustomDatePicker(_Id,status)
{
	var Result = '';
	if(status=="D"){
		Result = $('#Year_'+_Id).val() + "-" + $('#Month_'+_Id).val() + "-" + $('#Day_'+_Id).val();
	}else{
		Result = $('#Day_'+_Id).val() + "-" + $('#Month_'+_Id).val() + "-" + $('#Year_'+_Id).val();
	}
	return Result;
}



function setDayTime(_Date)
{
	var d = new Date(_Date);
	var Day = d.getDate();
	var Month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
	var Year = d.getFullYear();

	var hr = d.getHours();
	var min = d.getMinutes();

	return DigitNumber(Day,2)+' ' + DigitNumber(hr,2)+ ':' + DigitNumber(min,2);
}



function setDateTimeProject(_Date)
{
	var d = new Date(_Date);
	var Day = d.getDate();
	var Month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
	var Year = d.getFullYear();

	var hr = d.getHours();
	var min = d.getMinutes();

	return DigitNumber(Day,2)+ '-' + DigitNumber(Month,2)+ '-' + DigitNumber(Year,2)+ ' ' + DigitNumber(hr,2)+ ':' + DigitNumber(min,2);
}


function setDateProject(_Date)
{
	var d = new Date(_Date);
	var Day = d.getDate();
	var Month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
	var Year = d.getFullYear();
	return DigitNumber(Day,2)+ ' / ' + DigitNumber(Month,2)+ ' / ' + DigitNumber(Year,2);
}


function getDateProject(_Date)
{
	var d = new Date(_Date);
	var Day = d.getDate();
	var Month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
	var Year = d.getFullYear();
	return DigitNumber(Day,2)+ '-' + DigitNumber(Month,2)+ '-' + DigitNumber(Year,2);
}

function getDateDB(_Date)
{
	var d = new Date(_Date);
	var Day = d.getDate();
	var Month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
	var Year = d.getFullYear();
	return  DigitNumber(Year,2)+ '-' +  DigitNumber(Month,2)+ '-' +  DigitNumber(Day,2);
}

function TextLimit(source, size) {
	return source.length > size ? source.slice(0, size - 1) + "…" : source;
  }

function IsActionAllow(IsAllow){
	if(IsAllow==0){ 
		Notify("Warning ","You are not allowed for this action!","warning"); 
		return false; 
	}else{
		return true;	
	}
}

function IsActionAllowLoad(IsAllow){
	if(IsAllow==0){ 
		return false; 
	}else{
		return true;	
	}
}


function ExportToExcel(file_name){	
	$(".table2excel").children().table2excel({
        filename: file_name+'-'+new Date().toLocaleDateString().replace(/[\-\:\.]/g, "") + ".xls",
    });
}


var IsAjaxActive = false;
function AjaxCall(AjaxUrl, JsonData, callback) {
	IsInternet();
    if (IsAjaxActive == true) {
        return false;
    }
    IsAjaxActive = true;
    JsonData["_token"] = _token;
    $.ajax({
        url: AjaxUrl,
        type: "post",
        data: JsonData,
		dataType: "json",
		timeout: (1000*60*5),
        success: function (resp) {
            IsAjaxActive = false;
            return callback(resp);
        },
        error: function (jqXHR, exception) {
            var msg = "";
            if (jqXHR.status === 0) {
                msg = "Not connect.\n Verify Network.";
            } else if (jqXHR.status == 404) {
                msg = "Requested page not found. [404]";
            } else if (jqXHR.status == 500) {
                msg = "Internal Server Error [500].";
            } else if (exception === "parsererror") {
                msg = "Requested JSON parse failed.";
            } else if (exception === "timeout") {
                msg = "Time out error.";
            } else if (exception === "abort") {
                msg = "Ajax request aborted.";
            } else {
                msg = "Uncaught Error.\n" + jqXHR.responseText;
            }
            IsAjaxActive = false;
            Notify("Error ", "" + msg, "danger");
        },
    }); // ajax asynchronus request
}
function AjaxCallSync(AjaxUrl, JsonData, callback) {
	IsInternet();
    JsonData["_token"] = _token;
    $.ajax({
        url: AjaxUrl,
        type: "post",
        data: JsonData,
		dataType: "json",
		timeout: (1000*60*5),
        success: function (resp) {
            return callback(resp);
        },
        error: function (jqXHR, exception) {
            var msg = "";
            if (jqXHR.status === 0) {
                msg = "Not connect.\n Verify Network.";
            } else if (jqXHR.status == 404) {
                msg = "Requested page not found. [404]";
            } else if (jqXHR.status == 500) {
                msg = "Internal Server Error [500].";
            } else if (exception === "parsererror") {
                msg = "Requested JSON parse failed.";
            } else if (exception === "timeout") {
                msg = "Time out error.";
            } else if (exception === "abort") {
                msg = "Ajax request aborted.";
            } else {
                msg = "Uncaught Error.\n" + jqXHR.responseText;
            }
            Notify("Error ", "" + msg, "danger");
        },
    }); // ajax asynchronus request
}


function SortJsonArray(JsonArray)
{
	JsonArray.sort(function(a,b){
		return a.Amount1 - b.Amount1;
		}
	);
	return JsonArray;
}

function OpenFullscreen() {
	var elem = document.getElementById("html");
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.mozRequestFullScreen) { /* Firefox */
		elem.mozRequestFullScreen();
	} else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
		elem.webkitRequestFullscreen();
	} else if (elem.msRequestFullscreen) { /* IE/Edge */
		elem.msRequestFullscreen();
	}
}

function setCache(KEY, VALUE)
{
	localStorage[KEY] = JSON.stringify(VALUE);
}

function getCache(KEY)
{
	var varReturn = "";
	var stored = localStorage[KEY];
	if (stored) {
		varReturn = stored;
	}
	return varReturn;
}


