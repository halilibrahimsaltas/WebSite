$(document).ready(function(){

    $('#menu').click(function(){
       $(this).toggleClass('fa-times');
       $('header').toggleClass('toggle');

    });

    $(window).on('scroll load',function(){

        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle');

        if ($(window).scrollTop()> 0){
            $('.top').show();  
        }else{
            $('.top').hide();
        }

    });

    //smooth scrolling
    $('a[href*="#"').on('click',function(e){

        e.preventDefault();

        $('html, body').animate({
            scrollTop : $($(this).attr('href')).offset().top,
        },
           500,
           'linear'
        );
    });

    //form

    $('form').on('submit', function(event) {
        event.preventDefault();

        const formData = {
            name: $('input[name="name"]').val(),
            email: $('input[name="email"]').val(),
            topic: $('input[name="topic"]').val(),
            message: $('textarea[name="message"]').val()
        };

        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: formData,
            success: function(response) {
                alert('Your message has been sent successfully!');
            },
            error: function(error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    });
});