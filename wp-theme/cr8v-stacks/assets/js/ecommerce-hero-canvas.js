(function () {
  var stage = document.getElementById('c8isv-anim-wrapper');
  var bg = document.getElementById('c8isv-canvas-bg');
  var main = document.getElementById('c8isv-canvas-main');
  var noise = document.getElementById('c8isv-canvas-noise');
  if (!stage || !bg || !main || !noise) return;
  var b = bg.getContext('2d'), m = main.getContext('2d'), n = noise.getContext('2d');
  var dots = Array.from({ length: 34 }, function (_, i) { return { x: (i * 47) % 439, y: (i * 83) % 439, r: 1 + (i % 3), s: .15 + (i % 5) * .05 }; });
  function size() { var r = stage.getBoundingClientRect(), d = Math.min(devicePixelRatio || 1, 2); [bg,main,noise].forEach(function(c){c.width=r.width*d;c.height=r.height*d;c.style.width=r.width+'px';c.style.height=r.height+'px';}); [b,m,n].forEach(function(c){c.setTransform(d,0,0,d,0,0);}); }
  function draw(t) { var w = stage.clientWidth, h = stage.clientHeight, time = t * .001; b.clearRect(0,0,w,h); var g=b.createRadialGradient(w*.56,h*.42,0,w*.56,h*.42,w*.65);g.addColorStop(0,'rgba(0,71,225,.68)');g.addColorStop(.45,'rgba(19,48,160,.18)');g.addColorStop(1,'rgba(5,8,19,0)');b.fillStyle=g;b.fillRect(0,0,w,h); m.clearRect(0,0,w,h); m.strokeStyle='rgba(124,147,255,.28)';m.lineWidth=1; for(var x=0;x<w;x+=36){m.beginPath();m.moveTo(x,0);m.lineTo(x,h);m.stroke();} for(var y=0;y<h;y+=36){m.beginPath();m.moveTo(0,y);m.lineTo(w,y);m.stroke();} dots.forEach(function(p,i){var x=(p.x+Math.sin(time*p.s+i)*42)%w,y=(p.y+Math.cos(time*p.s+i)*34)%h;m.beginPath();m.arc(x,y,p.r,0,Math.PI*2);m.fillStyle='rgba(210,225,255,.78)';m.fill();}); var cx=w*.5,cy=h*.5,r=Math.min(w,h)*.27; m.save();m.translate(cx,cy);m.rotate(time*.35);m.strokeStyle='rgba(255,255,255,.75)';m.lineWidth=2;m.beginPath();m.arc(0,0,r,0,Math.PI*2);m.stroke();m.fillStyle='#0047E1';m.fillRect(-r*.42,-r*.2,r*.84,r*.55);m.fillStyle='#FAFAF7';m.font='10px Space Mono, monospace';m.fillText('SHOP / CHECKOUT',-r*.34,0);m.restore(); n.clearRect(0,0,w,h);for(var i=0;i<170;i++){n.fillStyle='rgba(255,255,255,'+(Math.random()*.055)+')';n.fillRect(Math.random()*w,Math.random()*h,1,1);}requestAnimationFrame(draw); }
  size(); addEventListener('resize',size); requestAnimationFrame(draw);
})();
