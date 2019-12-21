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
});