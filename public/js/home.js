$(function(){
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

});