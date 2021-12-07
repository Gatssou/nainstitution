
/*
function toggleSwitch(){
    if(document.body.className = 'clair'){
    document.body.classList.remove("clair");
    document.body.classList.add("obscur");
    }
    else if(document.body.className = 'obscur'){
        document.body.classList.remove("obscur");
        document.body.classList.add("clair");
    }
}
*/

$(document).ready(function(){
    $("#switch").click(function(){
        if(this.checked){
            $('html').attr('data-theme', 'night');
            $(this).prop("checked", true);
            $('html').removeClass('clair').addClass('obscur');
            
            
        }else{
            $('html').attr('data-theme', 'day');
            $(this).prop("checked", false);
            $('html').removeClass('obscur').addClass('clair');
        }
    })
})

//98x*@CziY0vz4%6eC^
/*$('body').css('background', 'url("../img/img_log/659797.jpg")');*/