var container = document.querySelector('.container');

var c0 = document.querySelector('#c0');
var c1 = document.querySelector('#c1');
var c2 = document.querySelector('#c2');
var c3 = document.querySelector('#c3');
var c4 = document.querySelector('#c4');

TweenMax.set([container, 'svg'], {
  position:'absolute',
  top:'50%',
  left:'50%',
  xPercent:-50,
  yPercent:-50
})

var tl = new TimelineMax({repeat:-1});

tl.set(c0, {
  svgOrigin:'300 300'
  
})
.to(c0, 0.75, {
  rotation:-180,
  ease:Back.easeInOut.config(0.5)
})
.to(c0, 0.5, {
  attr:{
    r:15
  },
  ease:Power3.easeIn
}, '-=1')
.to(c0, 0.5, {
  attr:{
    r:15
  },
  ease:Power1.easeInOut
},'-=0.5')

.staggerTo([c1, c2, c3, c4], 1, {
  attr:{
  cx:'-=108',
  }, 
  ease:Back.easeOut.config(0.5)
},0.05, '-=1')
