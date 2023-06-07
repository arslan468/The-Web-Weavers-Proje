window.addEventListener('load', function() {   //page loaded event
    $("#olive").on("keyup", function(){
        var inputValue =  $("#olive").val();
        console.log(inputValue);
    });
});