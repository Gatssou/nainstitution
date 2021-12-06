/*
Fonctionne mais prend toute la ligne et pas x et y
$(document).ready(function(){
    $("h2").click(function(){
        let line = $("#line");
        line.animate({top: '15vh'}, 3000);
        line.animate({left: '15vh'}, 3000);
        line.animate({top: '0vh'}, 3000);
        line.animate({left: '0vh'}, 3000);
        
    });
    
});
*/



/*
    const ctx = document.getElementById("canva").getContext("2d");
    
    let start = {x:150 , y:10 };
    let cp1 =   { x: 230,   y: 30  };
    let cp2 =   { x: 150,   y: 80  };
    let end = {x:250 , y:100 };

    ctx.beginPath();
    ctx.moveTo(start.x, end.y);
    ctx.bezierCurveTo(cp1.x, cp1.y, cp2.x, cp2.y, end.x, end.y);
    ctx.stroke();

    ctx.fillStyle = 'white';
    ctx.beginPath();
    ctx.arc(start.x, start.y, 5, 0, 2 * Math.PI);
    ctx.arc(end.x, end.y, 5, 0, 2 * Math.PI);
    ctx.fill();
    */
    /*
    ctx.lineWidth = "2";
    ctx.strokeStyle = "white";
    ctx.moveTo(150, 0);
    ctx.lineTo(150, 150);
    ctx.stroke();*/


  /*  function gameLoop () {
        window.requestAnimationFrame(gameLoop);
        renderLine();
      
      }
      let counter = 0; 
      let old_position = {x: 0, y: 0};
      let new_position = {x: 0, y: 0}; 
      let width = 10;
      let height = 10;

      function renderLine(){
       context.clearRect(old_position.x, old_position.y, width, height)
       new_position = {x: 100, y: 200};  
       old_position = new_position;
      
      }
*/
/*
let ctx = document.getElementById("canva").getContext("2d");

let start = {x:630 , y:10}; 
let cp1 = {x: 630, y: 400};
let cp2 = {x: 630, y: 600};
let end = {x:630 , y:1000};

let start2 = {x:0, y:300};
let cp3 = {x: 250, y: 700};
let cp4 = {x: 500, y: 50};
let end2 = {x:1200 , y:500};

let start3 = {x:0, y:500};
let cp5 = {x: 250, y: 100};
let cp6 = {x: 500, y: 600};
let end3 = {x:1200 , y:350};

let start4 = {x:0, y:400};
let cp7 = {x: 250, y: 100};
let cp8 = {x: 500, y: 800};
let end4 = {x:1200 , y:250};

    ctx.lineWidth = "2";
    ctx.strokeStyle = "white";
    ctx.moveTo(start.x, start.y);
    ctx.bezierCurveTo(cp1.x, cp1.y, cp2.x, cp2.y, end.x, end.y);
    ctx.moveTo(start2.x, start2.y);
    ctx.bezierCurveTo(cp3.x, cp3.y, cp4.x, cp4.y, end2.x, end2.y);
    ctx.moveTo(start3.x, start3.y);
    ctx.bezierCurveTo(cp5.x, cp5.y, cp6.x, cp6.y, end3.x, end3.y);
    ctx.moveTo(start4.x, start4.y);
    ctx.bezierCurveTo(cp7.x, cp7.y, cp8.x, cp8.y, end4.x, end4.y);
    ctx.stroke();

    $(window).scroll(function(){
        let bot = $(window).height()+$(window).scrollTop() >= $(document).height();
        let canv = $('#canva');
        if(bot){
            canv.hide({transition: 3000});

        }
        else{
            canv.show({transition: 5000});
        }
    });
    */

    var path = document.querySelector('#star-path');

    // Get length of path... ~577px in this case
    var pathLength = path.getTotalLength();
    
    // Make very long dashes (the length of the path itself)
    path.style.strokeDasharray = pathLength + ' ' + pathLength;
    
    // Offset the dashes so the it appears hidden entirely
    path.style.strokeDashoffset = pathLength;
    
    // Jake Archibald says so
    // https://jakearchibald.com/2013/animated-line-drawing-svg/
    path.getBoundingClientRect();
    
    // When the page scrolls...
    window.addEventListener("scroll", function(e) {
     
      // What % down is it? 
      // https://stackoverflow.com/questions/2387136/cross-browser-method-to-determine-vertical-scroll-percentage-in-javascript/2387222#2387222
      // Had to try three or four differnet methods here. Kind of a cross-browser nightmare.
      var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
        
      // Length to offset the dashes
      var drawLength = pathLength * scrollPercentage;
      
      // Draw in reverse
      path.style.strokeDashoffset = pathLength - drawLength;
        
      // When complete, remove the dash array, otherwise shape isn't quite sharp
     // Accounts for fuzzy math
      if (scrollPercentage >= 0.99) {
        path.style.strokeDasharray = "none";
        
      } else {
        path.style.strokeDasharray = pathLength + ' ' + pathLength;
      }
      
    });
