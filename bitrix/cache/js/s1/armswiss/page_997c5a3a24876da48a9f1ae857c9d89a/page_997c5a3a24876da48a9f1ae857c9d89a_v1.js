
; /* Start:"a:4:{s:4:"full";s:101:"/local/templates/armswiss/components/bitrix/news.list/home_page_services/script.min.js?15759015653253";s:6:"source";s:82:"/local/templates/armswiss/components/bitrix/news.list/home_page_services/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function(t){if(!!t.JCNewsSlider){return}t.JCNewsSlider=function(t,e){if(t&&e){var i=BX(t);if(i){var s=BX.findChildByClassName(i,e.imagesContainerClassName,true);var a=BX.findChildByClassName(i,e.leftArrowClassName,true);var l=BX.findChildByClassName(i,e.rightArrowClassName,true);var r=BX.findChildByClassName(i,e.controlContainerClassName,true);if(s&&a&&l&&r){var n=new JCNewsSlider;n.Init(s,r,a,l)}}}};t.JCNewsSlider.prototype.Init=function(t,e,i,s){this.time=.5;this.type="accelerated";this.threshold=50;this.allowedTime=500;this.startX=0;this.startY=0;this.startTime=0;this.sliderImages=t;BX.bind(t,"touchstart",BX.delegate(this.touchStart,this));BX.bind(t,"touchend",BX.delegate(this.touchEnd,this));this.sliderControls=BX.findChildren(e,{tagName:"LI"},true);var a=function(t,e){return function(){return e(t)}};for(var l=0;l<this.sliderControls.length;l++){BX.bind(this.sliderControls[l],"click",a(l,BX.delegate(this.slideTo,this)))}this.sliderLeft=i;BX.bind(i,"click",BX.delegate(this.slideLeft,this));this.sliderRight=s;BX.bind(s,"click",BX.delegate(this.slideRight,this))};t.JCNewsSlider.prototype.slideRight=function(){if(this.animation)return;this.animation=true;var t=parseInt(this.sliderImages.style.left,10);if(t<=-100*(this.sliderControls.length-1)){this.animation=false;return}var e=this;new BX.fx({start:t,finish:t-100,time:this.time,type:this.type,callback:function(t){e.sliderImages.style.left=t+"%"},callback_start:function(){e.sliderImages.style.left=t+"%"},callback_complete:function(){e.sliderImages.style.left=t-100+"%";e.adjustSliderControls(-(t-100)/100);e.animation=false}}).start()};t.JCNewsSlider.prototype.slideLeft=function(){if(this.animation)return;this.animation=true;var t=parseInt(this.sliderImages.style.left,10);if(t>=0){this.animation=false;return}var e=this;new BX.fx({start:t,finish:t+100,time:this.time,type:this.type,callback:function(t){e.sliderImages.style.left=t+"%"},callback_start:function(){e.sliderImages.style.left=t+"%"},callback_complete:function(){e.sliderImages.style.left=t+100+"%";e.adjustSliderControls(-(t+100)/100);e.animation=false}}).start()};t.JCNewsSlider.prototype.slideTo=function(t){if(this.animation)return;this.animation=true;var e=parseInt(this.sliderImages.style.left,10);if(e==-t*100){this.animation=false;return}var i=this;new BX.fx({start:e,finish:-t*100,time:this.time,type:this.type,callback:function(t){i.sliderImages.style.left=t+"%"},callback_start:function(){i.sliderImages.style.left=e+"%";i.adjustSliderControls(t)},callback_complete:function(){i.sliderImages.style.left=-t*100+"%";i.animation=false}}).start()};t.JCNewsSlider.prototype.adjustSliderControls=function(t){for(var e=0;e<this.sliderControls.length;e++){if(t==e)BX.addClass(this.sliderControls[e],"current");else BX.removeClass(this.sliderControls[e],"current")}};t.JCNewsSlider.prototype.touchStart=function(t){var e=t.changedTouches[0];this.startX=e.pageX;this.startY=e.pageY;this.startTime=(new Date).getTime();t.preventDefault()};t.JCNewsSlider.prototype.touchEnd=function(t){var e=t.changedTouches[0];var i=e.pageX-this.startX;var s=(new Date).getTime()-this.startTime;if(s<=this.allowedTime){if(i>this.threshold)this.slideLeft();else if(i<-this.threshold)this.slideRight()}t.preventDefault()}})(window);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:100:"/local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js?15759677631182";s:6:"source";s:85:"/local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){

    $(document).on('click', '.load_more', function(){

        var targetContainer = $('.news-list'),          //  Контейнер, в котором хранятся элементы
            url =  $('.load_more').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){
                    console.log(targetContainer);

                    //  Удаляем старую навигацию
                    $('.load_more').remove();

                    var elements = $(data).find('.news-item'),  //  Ищем элементы
                        pagination = $(data).find('.load_more');//  Ищем навигацию

                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    targetContainer.append(pagination); //  добавляем навигацию следом

                }
            })
        }

    });

});
/* End */
;; /* /local/templates/armswiss/components/bitrix/news.list/home_page_services/script.min.js?15759015653253*/
; /* /local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js?15759677631182*/
