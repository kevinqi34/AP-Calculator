$(document).ready(function(){
			  	
            $("#button").click(function(){
            
            var txt=$("#uid").val();
            var pwd=$("#password").val();
			   if ((txt.length>2) && (pwd.length >5)){ 
              // document.getElementById("fm").method = "post";
		         document.getElementById("fm").submit();
		         document.getElementById("fm").reset();
              } else { alert("Email/Username should be atleast 3 characters.");}           
		           
		       });
		   });   
		   