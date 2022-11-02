function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

/************************************************************/

function getPDFmail(sb){
  		email =document.getElementById("pdf_email").value;
        freepdf_id =document.getElementById("freepdf_id").value;
      if ((email.length) < 5) {
                alert("Please enter Email address.");
                return false;
            }
  if(window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("getpdf_msg").innerHTML=xmlhttp.responseText;
	    
	    
	    }
	  }
	xmlhttp.open("GET","../ajax/ajax_pdfmail.php?email="+email+"&freepdf_id="+freepdf_id,true);
	xmlhttp.send();
}

/************************************************************/



/************************************************************/
function SubscribeNow(sb){
  		email =document.getElementById("subscribe_email").value;
        checkbox =document.getElementById("check_consent").checked;
      if ((email.length) < 5) {
                alert("Please enter Email address.");
                return false;
            }
if (checkbox== false) {
    alert("Please click on the checkbox.");
    return false;
}
  if(window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("subscribe_now").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","../ajax/ajaxsubscribe.php?email="+email,true);
	xmlhttp.send();
}

/************************************************************/
var contact_message = document.getElementById('message');
if(contact_message){
contact_message.addEventListener('keyup', function(e) {
     //alert('aa');
  var max = 500;
  var len = $(this).val().length;
  var text = document.getElementById('message').value;
  if (len >= max) {
    $('#charNum').text('You have reached the characters limit');
  } else {
    var char = max - len;
    $('#charNum').text(char + ' characters left');
  }
  if ((text.search('http') != -1) || (text.search('HTTP') != -1) || (text.search('www') != -1) || (text.search('WWW') != -1)) {
        alert('This character is not allowed!');
    }
    text = text.replace(/http/g,'');
    text = text.replace(/www/g,'');
    text = text.replace(/HTTP/g,'');
    text = text.replace(/WWW/g,'');
    document.getElementById('message').value = text;
},false);
}

/************************************************************/

var comment_text = document.getElementById('comment');
if(comment_text){
comment_text.addEventListener('keyup', function(e) {
     //alert('aa');
  var max = 500;
  var len = $(this).val().length;
  var text = document.getElementById('comment').value;
  if (len >= max) {
    $('#charNum').text('You have reached the characters limit');
  } else {
    var char = max - len;
    $('#charNum').text(char + ' characters left');
  }
  if ((text.search('http') != -1) || (text.search('HTTP') != -1) || (text.search('www') != -1) || (text.search('WWW') != -1)) {
        alert('This character is not allowed!');
    }
    text = text.replace(/http/g,'');
    text = text.replace(/www/g,'');
    text = text.replace(/HTTP/g,'');
    text = text.replace(/WWW/g,'');
    document.getElementById('comment').value = text;
},false);
}

/************************************************************/

$(document).on("click", ".get-pdfid", function() {
            var myPDFAdd = $(this).data('id');
            $(".modal-content #freepdf_id").val(myPDFAdd);
            var pdf_title = document.getElementById("pdf_title"+myPDFAdd).value;
             var pdf_img = document.getElementById("pdf_getimg"+myPDFAdd).value;
            $(".modal-content #freepdf_title").val( pdf_title );
            $(".free-pdfimg").attr("src", pdf_img);
        });

/************************************************************/

	$(window).on('scroll', function () {
		'use strict';
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});
	$('#toTop').on('click', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
	});
	
/*************************************************************/
$( ".table" ).wrap( "<div class='table-responsive'></div>"); 