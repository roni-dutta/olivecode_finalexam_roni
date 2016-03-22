$(document).ready(function(){
    $("#news1").click(function(){
        $.ajax({url: "http://localhost/caohagan_r/wordpress/?page_id=38 ", success: function(result){
            $("#wrapper-outer").html(result);
        }});
    });
});