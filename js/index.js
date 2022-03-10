//SCROLL ONE PAGE + RESPONSIVE

//if (window.matchMedia("(min-width: 700px)").matches) {

const TIME_OUT = 600
const body = document.querySelector('body')
const sectionsQty = document.querySelectorAll('section').length
const sct = document.querySelector('.sct')
let startFlag = true
let initialScroll = window.scrollY
let qty = 1,
  main = null,
  next = null

Array(sectionsQty)
  .fill()
  .forEach(() => {
    sct.innerHTML = sct.innerHTML + '<div class="sect"></div>'
  })
console.log('SLIDE', qty)
window.onscroll = () => {
  if (startFlag) {
    const scrollDown = this.scrollY >= initialScroll
    const scrollLimit = qty >= 1 && qty <= sectionsQty

    if (scrollLimit) {
      body.style.overflowY = 'hidden' // Lock el scroll
      if (scrollDown && qty < sectionsQty) {
        main = document.querySelector(`section.s${qty}`)
        next = document.querySelector(`section.s${qty + 1}`)
        main.style.transform = 'translateY(-100vh)'
        next.style.transform = 'translateY(0)'
        qty++
      } else if (!scrollDown && qty > 1) {
        main = document.querySelector(`section.s${qty - 1}`)
        next = document.querySelector(`section.s${qty}`)
        main.style.transform = 'translateY(0)'
        next.style.transform = 'translateY(100vh)'
        qty--
      }
      //else if (e.target.className === ".section-stick" & window.innerHeight<=680) return;
      const active = document.querySelector('.sct .sect')
      
      active.style.top = (62 + 30) * (qty - 1) + 'px'
    }
    console.log('SLIDE', qty)

    setTimeout(() => {
      initialScroll = this.scrollY
      startFlag = true
      body.style.overflowY = 'scroll'
    }, TIME_OUT)
    startFlag = false
  }
  window.scroll(0, window.screen.height)
}
/*
}else{
  $(document).ready(function(){
  let removeS = document.body.clientWidth;
  let b = $('body')
  if (removeS < 700){
    $('body').removeClass('active');
    b.css({
      overflowY: "scroll",
      scrollBehavior: "smooth",
    })
  }else if (removeS > 700) {
    $('body').addClass('active');
  };
})
}

*/

  
/*
function mediaS(s)
if (s.match){

}else{
  
}
const jm = window.matchMedia("(min-width: 700px)");
mdqObj(jm);
jm.addListener(mdqObj);*/

/* Button menu */
//SECTION 1  
// Passe la souris sur le nom = fait apparaître les bulles
$(document).ready(function () {

  $(".av1").mouseenter(function () {
    $(".st").css({
      transform: "translateX(-5vw)",
      top: "-4vh",
      background: "black"
    })
    $(".nd").css({
      transform: "translateY(-12vh)",
      background: "#c79c9c",
      right: "-10%"
    })
    $(".rd").css({
      transform: "translateY(5vh)",
      background: "white",
      right: "20%"
    })
    $(".th").css({
      transform: "translateY(5vh)",
      background: "#407261",
      right: "5%"
    })
    $(".fi").css({
      transform: "translateX(9vh)",
      background: "#407261",
      top: "-4vh"
    })
  })
  $(".av1").click(function () {
    $(".st").css({
      background: "transparent"
    })
    $(".nd").css({
      background: "transparent"
    })
    $(".rd").css({
      background: "transparent"
    })
    $(".th").css({
      background: "transparent"
    })
    $(".fi").css({
      background: "transparent"
    })
  })
})

//Fonction qui ouvre la bulle, donc fait apparaître le cadre au clique pour first (black)
$(document).ready(function () {
  $('.st').click(function openPop() {
    $('.pop').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "10vw",
      top: "15vh",
    })
  })

  /*if (window.matchMedia("(min-width: 700px)").matches){
  $('.pop').click(function closePop(){
    $('.pop').css({
      visibility: "hidden",
    })
  })
}else{
  $('.pop').click(function closePop(){
    $('.pop').css({
      display: "block"
    })
  })
}*/

  //Fonction pour second (wheat)
  $('.nd').click(function openPopnd() {
    $('.popnd').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "18vw",
    })
  })

  //Fonction pour third (white)
  $('.rd').click(function openPoprd() {
    $('.poprd').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "50vh",
      left: "-20vw",
      width: "15vw"
    })
  })

  //Fonction pour fourth (blue)
  $('.th').click(function openPopth() {
    $('.popth').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "55vh",
      left: "-10vw"
    })
  })

  //Fonction pour fourth (blue)
  $('.fi').click(function openPopfi() {
    $('.popfi').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "30vh",
      width: "15vw",
      height: "15vh",
      left: "-13vw"
    })
  })

  function mediaQ(q) {
    if (q.matches) {
      $('.pop').click(function closePop() {
        $('.pop').css({
          visibility: "hidden"
        })
      })
      $('.popnd').click(function closePopnd() {
        $('.popnd').css({
          visibility: "hidden"
        })
      })
      $('.poprd').click(function closePoprd() {
        $('.poprd').css({
          visibility: "hidden"
        })
      })
      $('.popth').click(function closePopth() {
        $('.popth').css({
          visibility: "hidden"
        })
      })
      $('.popfi').click(function closePopfi() {
        $('.popfi').css({
          visibility: "hidden"
        })
      })
    } else {
      $('.pop').click(function closePop() {
        $('.pop').css({
          display: "block",
        })
      })
      $('.popnd').click(function closePopnd() {
        $('.popnd').css({
          display: "block"
        })
      })
      $('.poprd').click(function closePoprd() {
        $('.poprd').css({
          display: "block"
        })
      })
      $('.popth').click(function closePopth() {
        $('.popth').css({
          display: "block"
        })
      })
      $('.popfi').click(function closePopfi() {
        $('.popfi').css({
          display: "block"
        })
      })
    }
  }

  const mdqObj = window.matchMedia("(min-width: 700px)");
  mediaQ(mdqObj);
  mdqObj.addListener(mediaQ);

});

//SECTION 2
$(document).ready(function () {

  //quand souris passe dessus fait apparaître les balles
  $(".av2").mouseenter(function () {
    $(".st2").css({
      transform: "translateX(-5vw)",
      top: "-4vh",
      background: "black"
    })
    $(".nd2").css({
      transform: "translateY(-12vh)",
      background: "#c79c9c",
      right: "-14%"
    })
    $(".rd2").css({
      transform: "translateY(5vh)",
      background: "white",
      right: "13%"
    })
    $(".th2").css({
      transform: "translateY(5vh)",
      background: "#407261",
      right: "-5%"
    })
    $(".fi2").css({
      transform: "translateX(10vh)",
      background: "#f5deb3",
      top: "-4vh"
    })
  })
  //Quand clique, fait disparaître les balles
  $(".av2").click(function () {
    $(".st2").css({
      background: "transparent"
    })
    $(".nd2").css({
      background: "transparent"
    })
    $(".rd2").css({
      background: "transparent"
    })
    $(".th2").css({
      background: "transparent"
    })
    $(".fi2").css({
      background: "transparent"
    })
  })
})

//Ouvre la bulle (cadre) quand on clique sur la balle pour first (black)
$(document).ready(function () {
  $('.st2').click(function openPop2() {
    $('.pop2').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "10vw",
      top: "15vh",
      width: "20vw",
    })
  })
  //Fait disparaître la bulle (cadre) quand on clique dessus
  /* $('.popst2').click(function closePopth2(){
     $('.popst2').css({
       display: "block"
     })
   })*/

  //Fonction pour second (grey)
  $('.nd2').click(function openPopnd2() {
    $('.popnd2').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "23vw",
      width: "10vw"
    })
  })

  //Fonction pour third (white)
  $('.rd2').click(function openPoprd2() {
    $('.poprd2').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "50vh",
      left: "-25vw",
      width: "15vw",
      height: "25vh",
    })
  })

  //Fonction pour fourth (blue)
  $('.th2').click(function openPopth2() {
    $('.popth2').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "60vh",
      width: "15vw",
      height: "15vh",
      left: "-9vw"
    })
  })

  //Fonction pour fifth (wheat)
  $('.fi2').click(function openPopfi2() {
    $('.popfi2').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "30vh",
      width: "15vw",
      height: "15vh",
      left: "-13vw"
    })
  })

  function mediaQ(q) {
    if (q.matches) {
      $('.pop2').click(function closePop2() {
        $('.pop2').css({
          visibility: "hidden"
        })
      })
      $('.popnd2').click(function closePopnd2() {
        $('.popnd2').css({
          visibility: "hidden"
        })
      })
      $('.poprd2').click(function closePoprd2() {
        $('.poprd2').css({
          visibility: "hidden"
        })
      })
      $('.popth2').click(function closePopth2() {
        $('.popth2').css({
          visibility: "hidden"
        })
      })
      $('.popfi2').click(function closePopfi2() {
        $('.popfi2').css({
          visibility: "hidden",
        })
      })
    } else {
      $('.popst2').click(function closePop2() {
        $('.popst2').css({
          display: "block"
        })
      })
      $('.popnd2').click(function closePopnd2() {
        $('.popnd2').css({
          display: "block"
        })
      })
      $('.poprd2').click(function closePoprd2() {
        $('.poprd2').css({
          display: "block"
        })
      })
      $('.popth2').click(function closePopth2() {
        $('.popth2').css({
          display: "block"
        })
      })
      $('.popfi2').click(function closePopfi2() {
        $('.popfi2').css({
          display: "block"
        })
      })
    }
  }

  const mdqObj = window.matchMedia("(min-width: 700px)");
  mediaQ(mdqObj);
  mdqObj.addListener(mediaQ);

});

//SECTION 3
$(document).ready(function () {

  $(".av3").mouseenter(function () {
    $(".st3").css({
      transform: "translateX(-5vw)",
      top: "-4vh",
      background: "black"
    })
    $(".nd3").css({
      transform: "translateY(-12vh)",
      background: "#c79c9c",
      right: "-10%"
    })
    $(".rd3").css({
      transform: "translateY(5vh)",
      background: "white",
      right: "20%"
    })
    $(".th3").css({
      transform: "translateY(5vh)",
      background: "#407261",
      right: "5%"
    })
    $(".fi3").css({
      transform: "translateX(9vh)",
      background: "#407261",
      top: "-4vh"
    })
  })
  $(".av3").click(function () {
    $(".st3").css({
      background: "transparent"
    })
    $(".nd3").css({
      background: "transparent"
    })
    $(".rd3").css({
      background: "transparent"
    })
    $(".th3").css({
      background: "transparent"
    })
    $(".fi3").css({
      background: "transparent"
    })
  })
})

//Fonction qui ouvre la bulle, donc fait apparaître le cadre au clique pour first (black)
$(document).ready(function () {
  $('.st3').click(function openPop3() {
    $('.pop3').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "10vw",
      top: "15vh",
    })
  })

  //Fonction pour second (wheat)
  $('.nd3').click(function openPopnd3() {
    $('.popnd3').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "18vw",
    })
  })

  //Fonction pour third (white)
  $('.rd3').click(function openPoprd3() {
    $('.poprd3').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "50vh",
      left: "-20vw",
      width: "15vw"
    })
  })

  //Fonction pour fourth (blue)
  $('.th3').click(function openPopth3() {
    $('.popth3').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "55vh",
      left: "-10vw"
    })
  })

  //Fonction pour fourth (blue)
  $('.fi3').click(function openPopfi3() {
    $('.popfi3').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "30vh",
      width: "15vw",
      height: "15vh",
      left: "-13vw"
    })
  })

  function mediaQ(q) {
    if (q.matches) {
      $('.pop3').click(function closePop3() {
        $('.pop3').css({
          visibility: "hidden"
        })
      })
      $('.popnd3').click(function closePopnd() {
        $('.popnd3').css({
          visibility: "hidden"
        })
      })
      $('.poprd3').click(function closePoprd3() {
        $('.poprd3').css({
          visibility: "hidden"
        })
      })
      $('.popth3').click(function closePopth3() {
        $('.popth3').css({
          visibility: "hidden"
        })
      })
      $('.popfi3').click(function closePopfi3() {
        $('.popfi3').css({
          visibility: "hidden"
        })
      })
    } else {
      $('.pop3').click(function closePop3() {
        $('.pop3').css({
          display: "block",
        })
      })
      $('.popnd3').click(function closePopnd3() {
        $('.popnd3').css({
          display: "block"
        })
      })
      $('.poprd3').click(function closePoprd3() {
        $('.poprd3').css({
          display: "block"
        })
      })
      $('.popth3').click(function closePopth3() {
        $('.popth3').css({
          display: "block"
        })
      })
      $('.popfi3').click(function closePopfi3() {
        $('.popfi3').css({
          display: "block"
        })
      })
    }
  }

  const mdqObj = window.matchMedia("(min-width: 700px)");
  mediaQ(mdqObj);
  mdqObj.addListener(mediaQ);

});

//SECTION 4
$(document).ready(function () {

  $(".av4").mouseenter(function () {
    $(".st4").css({
      transform: "translateX(-5vw)",
      top: "-4vh",
      background: "black"
    })
    $(".nd4").css({
      transform: "translateY(-12vh)",
      background: "#c79c9c",
      right: "-10%"
    })
    $(".rd4").css({
      transform: "translateY(5vh)",
      background: "white",
      right: "20%"
    })
    $(".th4").css({
      transform: "translateY(5vh)",
      background: "#407261",
      right: "5%"
    })
    $(".fi4").css({
      transform: "translateX(9vh)",
      background: "#407261",
      top: "-4vh"
    })
  })
  $(".av4").click(function () {
    $(".st4").css({
      background: "transparent"
    })
    $(".nd4").css({
      background: "transparent"
    })
    $(".rd4").css({
      background: "transparent"
    })
    $(".th4").css({
      background: "transparent"
    })
    $(".fi4").css({
      background: "transparent"
    })
  })
})

//Fonction qui ouvre la bulle, donc fait apparaître le cadre au clique pour first (black)
$(document).ready(function () {
  $('.st4').click(function openPop4() {
    $('.pop4').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "10vw",
      top: "15vh",
    })
  })

  /*if (window.matchMedia("(min-width: 700px)").matches){
  $('.pop').click(function closePop(){
    $('.pop').css({
      visibility: "hidden",
    })
  })
}else{
  $('.pop').click(function closePop(){
    $('.pop').css({
      display: "block"
    })
  })
}*/

  //Fonction pour second (wheat)
  $('.nd4').click(function openPopnd4() {
    $('.popnd4').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      left: "18vw",
    })
  })

  //Fonction pour third (white)
  $('.rd4').click(function openPoprd4() {
    $('.poprd4').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "50vh",
      left: "-20vw",
      width: "15vw"
    })
  })

  //Fonction pour fourth (blue)
  $('.th4').click(function openPopth4() {
    $('.popth4').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "55vh",
      left: "-10vw"
    })
  })

  //Fonction pour fourth (blue)
  $('.fi4').click(function openPopfi4() {
    $('.popfi4').css({
      visibility: "visible",
      color: "white",
      backgroundColor: "#00000042",
      border: "2px solid black",
      borderRadius: "10px",
      position: "relative",
      top: "30vh",
      width: "15vw",
      height: "15vh",
      left: "-13vw"
    })
  })

  function mediaQ(q) {
    if (q.matches) {
      $('.pop4').click(function closePop4() {
        $('.pop4').css({
          visibility: "hidden"
        })
      })
      $('.popnd4').click(function closePopnd4() {
        $('.popnd4').css({
          visibility: "hidden"
        })
      })
      $('.poprd4').click(function closePoprd3() {
        $('.poprd4').css({
          visibility: "hidden"
        })
      })
      $('.popth4').click(function closePopth4() {
        $('.popth4').css({
          visibility: "hidden"
        })
      })
      $('.popfi4').click(function closePopfi4() {
        $('.popfi4').css({
          visibility: "hidden"
        })
      })
    } else {
      $('.pop4').click(function closePop4() {
        $('.pop4').css({
          display: "block",
        })
      })
      $('.popnd4').click(function closePopnd4() {
        $('.popnd4').css({
          display: "block"
        })
      })
      $('.poprd4').click(function closePoprd4() {
        $('.poprd4').css({
          display: "block"
        })
      })
      $('.popth4').click(function closePopth4() {
        $('.popth4').css({
          display: "block"
        })
      })
      $('.popfi4').click(function closePopfi4() {
        $('.popfi4').css({
          display: "block"
        })
      })
    }
  }

  const mdqObj = window.matchMedia("(min-width: 700px)");
  mediaQ(mdqObj);
  mdqObj.addListener(mediaQ);

});

/*
function mediaQ(q){
  if (q.matches){
    document.getElementsByClassName('.popfi2').style = "visibility: hidden";
  }else{
    document.getElementsByClassName('.popfi2').style = "display: block";
  }
}

const mdqObj = window.matchMedia("(min-width: 700px)");
mediaQ(mdqObj);
mdqObj.addListener(mediaQ);*/

/*if(window.matchMedia("(mix-width: 500px)").matches){
  }else{
    $('.avs').css({
    display: none
    })
}*/
/*
if (window.matchMedia("(min-width: 540px)").matches){
  $(document).ready(function(){

    $(".av1").mouseenter(function(){
      $(".st").css({
        transform: "translateX(-5vw)",
        top: "-4vh",
        background: "black"
      })
      $(".nd").css({
        transform: "translateY(-12vh)",
        background: "#c79c9c",
        right: "-5%"
      })
      $(".rd").css({
        transform: "translateY(5vh)",
        background: "white",
        right: "20%"
      })
      $(".th").css({
        transform: "translateY(5vh)",
        background: "#407261",
        right: "5%"
      })
    })
  })
  
}else{
  $(document).ready(function(){

    $(".av1").mouseenter(function(){
      $(".st").css({
        display: "none"
      })
      $(".nd").css({
        display: "none"
      })
      $(".rd").css({
        display: "none"
      })
      $(".th").css({
        display: "none"
      })
    })
  })
}*/

