$(function(){
    $.typeahead({
        input: ".js-typeahead",
        order: "asc",
        source: {
            names: {
                ajax: {
                    url: 'api/counties'
                }
            },
        },
        display:'name',
        callback:{
            onSubmit: function(node, form, item, event){
                event.preventDefault();
                const id = item.id;
                $.ajax({
                    url:'api/county/available/'+id,
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

});