class EstimateStep{
    pipeSize;
    bore;
    shot;
    currentStep;
    serivceText;
    pipeText;
    borePerFeet = 12;
    pipesCost = {
        '1.25':{min:100,perFoot:1},
        '1.50':{min:100,perFoot:1.5},
        '2.0':{min:200,perFoot:2}
    };
    constructor(){
        this.serviceSelect = $('.service-select');
        this.boreField = $('.bore-field');
        this.shotField = $('.shot-field');
        this.estimateSummary = $('.sumarry');
        this.pipeSelector = $('.pipe-select');
        this.costContainer = $('.total-cost');
        this.modal = $('.call-modal');
        this.bindPipeSelector();
        this.bindServiceSelector();
    }
    bindServiceSelector(){
        const context = this
        this.serviceSelect.on('change',function(){
            context.serivceText = $(this).children("option:selected").text();
            context.currentStep = $(this).children('option:selected').data('step');
            context.handleStep(this);
        });
    }
    
    bindPipeSelector(){
        const context = this;
        this.pipeSelector.on('change',function(){
           context.pipeText =  $(this).children("option:selected").text();
           context.pipeSize = $(this).children("option:selected").val();
           if(context.pipeSize === '-1'){
               context.modal.addClass('is-active');
               return;
           }
           const htmlPipeText = `<li>${context.pipeText}</li>`;
           context.estimateSummary.append(htmlPipeText);
           $(this).attr('disabled',true);
        });
    }

    handleStep(current){
        const textValue = `<li>${this.serivceText}</li>`;
        if(this.currentStep === 1){            
            this.boreField.removeClass('is-hidden');
            this.estimateSummary.append(textValue);
            $(current).attr('disabled',true);
        }else if(this.currentStep === 2){
            this.shotField.removeClass('is-hidden');
            this.boreField.removeClass('is-hidden');
            this.estimateSummary.append(textValue);
            $(current).attr('disabled',true);
        }else if(this.currentStep === 3){
            this.modal.addClass('is-active');
        }
    }

    calculate(){
        let labor=0,material=0;
        const boreValue = this.boreField.find('input').val();
        if(this.currentStep === 1){
            if(boreValue > 100){
                const leftover = boreValue - 100;
                labor = 1200 + (leftover * this.borePerFeet);
            }else{
                labor = 1200;
            }
        }
        if(this.currentStep === 2){
            const shotValue = this.shotField.find('input').val();
            if(shotValue > 1){
                // meaning more than 1 shot
                labor = 500 * shotValue;
            }else if(showValue === 1){
                labor = 700;
            }
        }
        if(this.pipesCost.hasOwnProperty(this.pipeSize)){
            if( boreValue > 50){
                material = ( this.pipesCost[this.pipeSize].min + ( (boreValue - 50) * this.pipesCost[this.pipeSize].perFoot) );
            }else{
                material = this.pipesCost[this.pipeSize].min;
            }
        }
        const totalCost = labor + material;
        this.costContainer.html(`&#36; ${ totalCost.toFixed(2) }`)
    }
    reset(){
        this.boreField.addClass('is-hidden').find('input').val('');
        this.shotField.addClass('is-hidden').find('input').val('');
        this.serviceSelect.prop('selectedIndex',0).attr('disabled',false);
        this.pipeSelector.prop('selectedIndex',0).attr('disabled',false);
        this.estimateSummary.html('');
        this.costContainer.html('&#36;0.00');
    }

}