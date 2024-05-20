$(document).ready(function()
{    

    $(document).on("click", "btn-login", function(){

        let username=$("#username").val();
        let password=$("#password").val();
       
        $.ajax({
            url:"checkLogin.php",
            method:"POST",
            data:{username:username, password:password},
            success: function(rtn){
                if (rtn==true){
                    window.location.replace("../pages/index.php");
                }else{
                    alert("Username or Password is incorrect");
                }
            }

        });

    });

});