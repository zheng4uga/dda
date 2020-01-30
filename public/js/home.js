$(function(){

    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {

            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

        });
        });
    }
    $.typeahead({
        input: ".js-typeahead",
        order: "asc",
        source: {
            names: {
                ajax: {
                    url: 'api/zipcodes'
                }
            },
        },
        display:'zipcode',
        callback:{
            onSubmit: function(node, form, item, event){
                event.preventDefault();
                let zipcode;
                if(item){
                    zipcode = item.zipcode;
                }else{
                    zipcode = $(node).val();
                }
                $.ajax({
                    url:'api/zipcode/available/'+zipcode,
                    success:function(data,success){
                        if(success === 'success'){
                            const status = data.status;
                            const identifer = '.'+status+'-modal';
                            $(identifer).addClass('is-active');
                        }
                    }
                });

            }
        }
    });
    
    $('.modal-close, .ok-btn').on('click',function(){
        $(this).closest('.modal').removeClass('is-active');
    });

    $('.carousel_1').carousel({
        matchWidth:false       
    });
    const stepParagraph = $('.step-paragraph');
    const stepAnchors = $('.step-anchor');
    stepAnchors.on('click',function(){
        const toggleId = $(this).data('toggle');
        $(this).addClass('is-active');
        stepAnchors.each(function(){
            if( $(this).data('toggle') !== toggleId ){
                $(this).removeClass('is-active');
            }
        });
        stepParagraph.each(function(){
            if($(this).attr('id') === toggleId){
                $(this).removeClass('is-hidden');
            }else{
                $(this).addClass('is-hidden');
            }
        });
    });

    $('.dda-nav-link').on('click',function(e){
        e.preventDefault();
        let id = $(this).attr('href');
        scrollTo(id);
    });

    $(document).on('submit','.contactus-form',function(e){
        e.preventDefault();
       const data= $(this).serializeArray();
       $btn = $(this).find('button[type="submit"]');
       $btn.addClass("is-loading");
       $.ajax({
           url:'form/contactus',
           data:data,
           method:"post",
           success:function(data,status){
               if(status === 'success'){
                   $btn.removeClass('is-loading');
                   alert("We have recieve your information, and we'll get in contact with you shortly");
               }
           }
       })
    });

    function scrollTo(id){
        $('html, body').animate({
            scrollTop:$(id).offset().top - 96
        },1000);
    }

});