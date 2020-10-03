$(document).ready( function (){

    $("#formSubmit").click(function () {
        //on click of this button
        // get data from the fields 
        //validate the data 
        //send the data to the server using ajax
        const email = $("#email").val();
        const pwd = $("#pwd").val();
        //alert("email and pass is "+email+" "+pwd);
        console.log("before entering ajax");
        $.ajax({
            type: "POST",
            url: "formProcess.php",
          
            data: {email:email , pwd:pwd},
            success : function(data){
               alert(" "+data);
              
            },
          error : function( jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
            }

            
        });
        console.log("after ajax");
    });

});