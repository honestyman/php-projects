/*var form = document.getElementById("form");

form.addEventListener("submit", function(event){
    event.preventDefault();
});*/

/*$(document).ready(function(){
    $("#form").submit(function(event){
        event.preventDefault();
    });
});*/

/*$(document).ready(function(){
    $("#button").click(function(){
        $("#form").load("weather_data.php");
    });
});*/

//GET method
/*$(document).ready(function(){
    $("button").click(function(){
        $.get("weather_data.php", function(data, status){
            $("#test").html(data);
            alert(status);
        });
    });
});*/

//POST method
/*$(document).ready(function(){
    $("input").keyup(function(){
        var city = $("input").val();
        $.post("weather_data.php", {
            city: city
        }, function(data, status){
            $("#test").html(data);
        });
    })
})*/