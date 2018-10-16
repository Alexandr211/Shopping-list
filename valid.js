$(document).ready(function() {
	//console.log("hallo");
   $('form').submit(function(e) {
       
       var psd1 = $('#psd1').val();
        if (($('#psd').val() != psd1) || ($('#psd').val() == 0)){
             e.preventDefault();
            //alert("psd = 0"); 
            //console.log(psd1);
            psdSpan.innerHTML = "Invalid Password! Pls, try again!";
            psdSpan.style.color = "red";
            psdSpan.style.fontWeight = "bold";
          }
        
  });  
	
  });