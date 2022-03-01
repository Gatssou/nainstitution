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

let start11 = {x:630 , y:0}; 
let cp133 = {x: 960, y: 80};
let cp144 = {x: 960, y: 130};
let end11 = {x:630 , y:200};

let start111 = {x:630 , y:0}; 
let cp13 = {x: 300, y: 80};
let cp14 = {x: 300, y: 130};
let end111 = {x:630 , y:200};

let start10 = {x:630 , y:200}; 
let cp11 = {x: 630, y: 200};
let cp12 = {x: 630, y: 300};
let end10 = {x:630 , y:410};

let start = {x:630 , y:410}; 
let cp1 = {x: 630, y: 900};
let cp2 = {x: 200, y: 600};
let end = {x:130 , y:750};

let start2 = {x:130, y:800};
let cp3 = {x: 250, y: 1100};
let cp4 = {x: 800, y: 450};
let end2 = {x:1100 , y:1370};

let start3 = {x:1110, y:1420};
let cp5 = {x: 1300, y: 1900};
let cp6 = {x: 200, y: 2100};
let end3 = {x:430 , y:1700};

let start4 = {x:430, y:1700};
let cp7 = {x: 490, y: 1600};
let cp8 = {x: 650, y: 1600};
let end4 = {x:630 , y:1970};

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

    ctx.moveTo(start10.x, start10.y);
    ctx.bezierCurveTo(cp11.x, cp11.y, cp12.x, cp12.y, end10.x, end10.y);

    ctx.moveTo(start11.x, start11.y);
    ctx.bezierCurveTo(cp13.x, cp13.y, cp14.x, cp14.y, end11.x, end11.y);

    ctx.moveTo(start111.x, start111.y);
    ctx.bezierCurveTo(cp133.x, cp133.y, cp144.x, cp144.y, end111.x, end111.y);
    
    ctx.stroke();




    
        $(window).scroll(function(){
            let tran = $("#w");
            tran.animate({left: '20vw'}, 1000);
            let tran2 = $('#a');
            tran2.animate({right: '20vw'}, 1000),
            tran2.animate({opacity: '1'}, 1000)
            
            let tran3 = $('#t');
           tran3.animate({left: '0'}, 1000);
        });

        $(window).animate(function(){
            $("#canva").offset()
        });*/

/*
let ctxx = document.getElementById("canvaa").getContext("2d");



ctxx.lineWidth = "2";
ctxx.strokeStyle = "white";


ctxx.stroke();*/
/*
    $(window).scroll(function(){
        let bot = $(window).height()+$(window).scrollTop() >= $(document).height();
        let canv = $('#canva');
        if(bot){
            canv.hide({transition: 3000});

        }
        else{
            canv.show({transition: 5000});
        }
    });*/
    /*
let path = document.querySelector('#canva');
let pathL = path.getTotalLength();

path.style.strokeDasharray = pathL + ' ' + pathL;
path.style.strokeDashoffset = pathL;
path.getBoundingClientRect();

window.addEventListener("scroll", function(e){
    let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.body.clientHeight);
    let drawL = pathL * scrollPerc;
    path.style.strokeDashoffset = pathL - drawL;

    if(scrollPerc >= .99){
        path.style.strokeDasharray = "none";
    }
    else{
        path.style.strokeDasharray = pathL + ' ' + pathL;
    }
});*/

/*First svg*/
let path = document.querySelector('#pathf');
let pathLf = path.getTotalLength();

path.style.strokeDasharray = pathLf + ' ' + pathLf;
path.style.strokeDashoffset = pathLf;
path.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
  let drawLf = pathLf * scrollPerc;
  path.style.strokeDashoffset = pathLf - drawLf;
    
  if (scrollPerc >= 0.99) {
    path.style.strokeDasharray = "none";
    
  } else {
    path.style.strokeDasharray = pathLf + ' ' + pathLf;
  }
  
});

/*Second svg*/
let paths = document.querySelector('#paths');
let pathLs = paths.getTotalLength();

paths.style.strokeDasharray = pathLs + ' ' + pathLs;
paths.style.strokeDashoffset = pathLs;
paths.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
  let drawLs = pathLs * scrollPerc;
  paths.style.strokeDashoffset = pathLs - drawLs;
    
  if (scrollPerc >= 0.99) {
    paths.style.strokeDasharray = "none";
    
  } else {
    paths.style.strokeDasharray = pathLs + ' ' + pathLs;
  }
  
});

