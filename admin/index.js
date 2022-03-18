$(document).ready(function(){

    let today = new HijriDate();
    $("#hijriy").text(today.getFullYear()+" "+today.getMonth()+" "+today.getDay());
    console.log(today);

});