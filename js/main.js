$(function(){


    let c = 0;
    $('#subscription_form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'subscription_ajax.php',
            data: $('#subscription_form').serialize()
        }).done(function () {
            $('#subscription_form')[0].reset();
            alert("complite"); // ПОМЕНЯТЬ
        }).fail(function () {
            if (c === 1) {
                $('#subscription_form').stop();
                c = 0;
            } else {
                $('#subscription_form').submit();
                c++;
                alert('error'); // ПОМЕНЯТЬ


            }
        });
    });


      $('.menu__btn').on('click',function(){
         $('.menu__list').toggleClass('menu__list--active');
         $('.menu__btn').toggleClass('menu__btn--active');
         $('.menu__btn--img').toggleClass('active');
     });

    $('.menu__list a').on('click',function(){ 
        $('.menu__list').removeClass('menu__list--active');
        $('.menu__btn--img').toggleClass('active');
        $('.menu__btn').toggleClass('menu__btn--active');
    });

    var mixer = mixitup('.portfolio__content');





});



