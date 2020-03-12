$(document).ready(function() {


    $('#submit').click(function(e){
        e.preventDefault();


        var name_first = $("#name_first").val();
        var name_second = $("#name_second").val();
        var age = $("#age").val();
        var phone_number = $("#phone_number").val();
        var email = $("#email").val();


        $.ajax({
            type: "POST",
            url: "/SaveData.php",
            dataType: "json",
            data: {name_first:name_first,name_second:name_second, email:email,age:age,phone_number:phone_number},
            success : function(data){
                if (data.code == "200"){
                    alert("Success: " +data.msg);
                } else {
                    $(".display-error").html("<ul>"+data.msg+"</ul>");
                    $(".display-error").css("display","block");
                }
            }
        });


    });
});