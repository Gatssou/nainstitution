
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
        if(this.checked){ //element pour check si c'est true ou false
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


let pass = document.querySelector('input[type="text"]');

pass.addEventListener('focus', (event) => {
    event.target.style.color = '#7e2d4f';
});

const eye = document.querySelector(".eye");
const eyeoff = document.querySelector(".eye-off");
const passwordField = document.querySelector("input[type=password]");

eye.addEventListener("click", () => {
  eye.style.display = "none";
  eyeoff.style.display = "block";

  passwordField.type = "text";
});

eyeoff.addEventListener("click", () => {
  eyeoff.style.display = "none";
  eye.style.display = "block";

  passwordField.type = "password";
});
