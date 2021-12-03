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

let ctx = document.getElementById("canva").getContext("2d");

let start = {x:380 , y:10};
let cp1 = {x: 200, y: 400};
let cp2 = {x: 100, y: -200};
let end = {x:400 , y:200};

    ctx.lineWidth = "2";
    ctx.strokeStyle = "white";
    ctx.moveTo(start.x, start.y);
    ctx.bezierCurveTo(cp1.x, cp1.y, cp2.x, cp2.y, end.x, end.y);
    ctx.stroke();

let start2 = {x:400 , y:200};
let cp3 = {x: 650, y: 500};
let cp4 = {x: 700, y: 600};
let end2 = {x:380 , y:900};

    ctx.lineWidth = "2";
    ctx.strokeStyle = "white";
    ctx.moveTo(start2.x, start2.y);
    ctx.bezierCurveTo(cp3.x, cp3.y, cp4.x, cp4.y, end2.x, end2.y);
    ctx.stroke();