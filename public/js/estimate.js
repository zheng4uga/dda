$(function(){
    const estimateStepper = new EstimateStep();
    $('#calculate').on('click',function(){
        estimateStepper.calculate();
    })
    $('#reset').on('click',function(){
        estimateStepper.reset();
    });
});