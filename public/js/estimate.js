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
        $.ajax({
            url:'form/estimate',
            method:'post',
            data:data,
            success:function(data,status){
                if(status === 'success'){
                    alert("Thank you so much for reaching out to us, we will get backt o you as soon as we can.");
                }
            }
        });
    });
});