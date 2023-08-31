$(document).ready(function(){
    $("#boton1").click(function(e){
        alert("Evento Papu1")
    });

    $("#div1").on("dblclick", function(){
        alert("Evento del papu doble")
    });

    $("#texto1").hover(function(){
            $("#texto1").css("background-color", "red");
        }, function(){
            $("#texto1").css("background-color", "white");
        }
    );
    $("#input2").keydown(function(){
        console.log("key papu")
        $("#input2").css("background-color", "green");
    });

});