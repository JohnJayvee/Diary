$(document).ready(function() {
    $('#stepBro').hide();
    $(function() {
        $("button").on({
            mouseover: function() {
                $(this).css({
                    left: (Math.random() * 200) + "px",
                    top: (Math.random() * 200) + "px",
                });
            }
        });
    });

    $('#loginForm').submit(function(event){
        event.preventDefault();
        $('.login').text('Dang it!');

        console.log('the form has been submitted');
        // let audioElement = new Audio("assets/js/stepBro.mp3");
        // audioElement.play();

        // $('#stepBro').fadeIn(3000);
        // $('#stepBro').slideUp(3000);
        // $('#loginDiv').hide();
        // $('h1').hide();
        // $('.marginBottom').hide();
    });
});