 var canvas=document.getElementById('mycanvas');
 var context=canvas.getContext('2d');
 context.beginPath();
 context.moveTo(160,120);
 context.arc(160,120,70,0,Math.PI*2,false);
 context.closePath();
 context.fill();
 context.fillStyle="red";