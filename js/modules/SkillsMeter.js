import $ from 'jquery';

class SkillsMeter{
    constructor() {
        this.initSkillsMeter()
        
    }

    initSkillsMeter(){

        $('.progress-bar').each(function(){

            $(this).animate(
            {width: $(this).attr('id') },2000);
        });
        


        console.log( $('.progress-bar').attr('id'));

        /*$(function () { 
            jquery('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
        });  
        $(".progress-bar").each(function(){
            var $each_bar_width = $(this).attr('aria-valuenow');
            $(this).width(this.each_bar_width + '%');
        });*/
    }
}

export default SkillsMeter;