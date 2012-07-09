(function(jQuery,undefined){var timer;function Timer(fn,fd){var self=this,clock;function update(){self.frameCount++;fn.call(self);}
this.frameDuration=fd||25;this.frameCount=-1;this.start=function(){update();clock=setInterval(update,this.frameDuration);};this.stop=function(){clearInterval(clock);clock=null;};}
function callHandler(){var fn=jQuery.event.special.frame.handler,event=jQuery.Event("frame"),array=this.array,l=array.length;event.frameCount=this.frameCount;while(l--){fn.call(array[l],event);}}
if(!jQuery.event.special.frame){jQuery.event.special.frame={setup:function(data,namespaces){if(timer){timer.array.push(this);}
else{timer=new Timer(callHandler,data&&data.frameDuration);timer.array=[this];var t=setTimeout(function(){timer.start();clearTimeout(t);t=null;},0);}
return;},teardown:function(namespaces){var array=timer.array,l=array.length;while(l--){if(array[l]===this){array.splice(l,1);break;}}
if(array.length===0){timer.stop();timer=undefined;}
return;},handler:function(event){jQuery.event.handle.apply(this,arguments);}};}})(jQuery);