$(function(){
    /*
    const estimateStepper = new EstimateStep();
    $('#calculate').on('click',function(){
        estimateStepper.calculate();
    })
    $('#reset').on('click',function(){
        estimateStepper.reset();
    });*/
    $(document).on('submit','.estimate-form',function(e){
        e.preventDefault();
        const data = $(this).serializeArray();
        $btn = $(this).find('button[type="submit"]');
        $btn.addClass('is-loading');
        $.ajax({
            url:'form/estimate',
            method:'post',
            data:data,
            success:function(data,status){
                if(status === 'success'){
                    $btn.removeClass('is-loading');
                    alert("Thank you so much for reaching out to us, we will get back to you as soon as we can.");
                }
            }
        });
    });
});