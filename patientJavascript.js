//Ajax Call for the patient login form
//Once the form is submitted
$("#doctorloginform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//   console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "logindoc.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if (data == "success"){
                window.location = "doctorlogin.php" ;
            }else{
                console.log(data) ;
                $("#doctormessage").html(data) ;
            }
        },
        error: function(){
            $("#doctormessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});
