$(".hover").hover(function(){
    $(this).css("background-color", "#112235");
    }, function(){
    $(this).css("background-color", "white");
});

$('li.bounce').hover(function(event) {
    /* Act on the event */
    $(this).effect('bounce', 500);
});

$('img').css('display','none').fadeIn(1800);

$('html, body').animate({
    scrollTop: ($('#top').offset().top)
},500);



$("#arrow").click(function() {
    $('html, body').animate({
        scrollTop: $("#effect").offset().top
    }, 2000);
});
$("#arrow2").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 2000);
});

$(".hover_project").hover(function(){
    $(this).css("border-bottom",  "02px solid gray");
    }, function(){
    $(this).css("border-bottom",  "02px solid white");
    
});

//edw gia na na kanw hover panw apo to form

/*function progress(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "% ");
}
*/

 /* Credits: 
 * https://www.developphp.com/video/JavaScript/Circular-Progress-Loader-Canvas-JavaScript-Programming-Tutorial
 */
 //edw vazw ton modal gia na exw ta skill

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
