const TIME_OUT = 600 
const body = document.querySelector('body')
const sectionsQty = document.querySelectorAll('section').length
const sectionStick = document.querySelector('.section-stick')
let startFlag = true
let initialScroll = window.scrollY
let qty = 1,
  main = null,
  next = null

Array(sectionsQty)
  .fill()
  .forEach(() => {
    sectionStick.innerHTML = sectionStick.innerHTML + '<div class="stick"></div>'
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
     
      const active = document.querySelector('.section-stick .stick.active')
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

/* Button menu */
$(document).ready(function openAv(){
  $(".av1").mouseenter(function(){
    $(".avs").css({
      transform: "translateY(20vw)",
      width: "20vw",
      bottom: "10vh"
    })
  })
  $(".av1").click(function closeAv(){
    $(".avs").css({
      width: "0",
      transform: "translateY(20vw)",
      bottom: "0"
    });
  });
});
