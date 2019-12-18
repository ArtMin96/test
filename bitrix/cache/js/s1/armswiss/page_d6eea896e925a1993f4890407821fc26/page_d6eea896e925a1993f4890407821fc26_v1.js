
; /* Start:"a:4:{s:4:"full";s:101:"/local/templates/armswiss/components/bitrix/news.list/home_page_services/script.min.js?15759015653253";s:6:"source";s:82:"/local/templates/armswiss/components/bitrix/news.list/home_page_services/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function(t){if(!!t.JCNewsSlider){return}t.JCNewsSlider=function(t,e){if(t&&e){var i=BX(t);if(i){var s=BX.findChildByClassName(i,e.imagesContainerClassName,true);var a=BX.findChildByClassName(i,e.leftArrowClassName,true);var l=BX.findChildByClassName(i,e.rightArrowClassName,true);var r=BX.findChildByClassName(i,e.controlContainerClassName,true);if(s&&a&&l&&r){var n=new JCNewsSlider;n.Init(s,r,a,l)}}}};t.JCNewsSlider.prototype.Init=function(t,e,i,s){this.time=.5;this.type="accelerated";this.threshold=50;this.allowedTime=500;this.startX=0;this.startY=0;this.startTime=0;this.sliderImages=t;BX.bind(t,"touchstart",BX.delegate(this.touchStart,this));BX.bind(t,"touchend",BX.delegate(this.touchEnd,this));this.sliderControls=BX.findChildren(e,{tagName:"LI"},true);var a=function(t,e){return function(){return e(t)}};for(var l=0;l<this.sliderControls.length;l++){BX.bind(this.sliderControls[l],"click",a(l,BX.delegate(this.slideTo,this)))}this.sliderLeft=i;BX.bind(i,"click",BX.delegate(this.slideLeft,this));this.sliderRight=s;BX.bind(s,"click",BX.delegate(this.slideRight,this))};t.JCNewsSlider.prototype.slideRight=function(){if(this.animation)return;this.animation=true;var t=parseInt(this.sliderImages.style.left,10);if(t<=-100*(this.sliderControls.length-1)){this.animation=false;return}var e=this;new BX.fx({start:t,finish:t-100,time:this.time,type:this.type,callback:function(t){e.sliderImages.style.left=t+"%"},callback_start:function(){e.sliderImages.style.left=t+"%"},callback_complete:function(){e.sliderImages.style.left=t-100+"%";e.adjustSliderControls(-(t-100)/100);e.animation=false}}).start()};t.JCNewsSlider.prototype.slideLeft=function(){if(this.animation)return;this.animation=true;var t=parseInt(this.sliderImages.style.left,10);if(t>=0){this.animation=false;return}var e=this;new BX.fx({start:t,finish:t+100,time:this.time,type:this.type,callback:function(t){e.sliderImages.style.left=t+"%"},callback_start:function(){e.sliderImages.style.left=t+"%"},callback_complete:function(){e.sliderImages.style.left=t+100+"%";e.adjustSliderControls(-(t+100)/100);e.animation=false}}).start()};t.JCNewsSlider.prototype.slideTo=function(t){if(this.animation)return;this.animation=true;var e=parseInt(this.sliderImages.style.left,10);if(e==-t*100){this.animation=false;return}var i=this;new BX.fx({start:e,finish:-t*100,time:this.time,type:this.type,callback:function(t){i.sliderImages.style.left=t+"%"},callback_start:function(){i.sliderImages.style.left=e+"%";i.adjustSliderControls(t)},callback_complete:function(){i.sliderImages.style.left=-t*100+"%";i.animation=false}}).start()};t.JCNewsSlider.prototype.adjustSliderControls=function(t){for(var e=0;e<this.sliderControls.length;e++){if(t==e)BX.addClass(this.sliderControls[e],"current");else BX.removeClass(this.sliderControls[e],"current")}};t.JCNewsSlider.prototype.touchStart=function(t){var e=t.changedTouches[0];this.startX=e.pageX;this.startY=e.pageY;this.startTime=(new Date).getTime();t.preventDefault()};t.JCNewsSlider.prototype.touchEnd=function(t){var e=t.changedTouches[0];var i=e.pageX-this.startX;var s=(new Date).getTime()-this.startTime;if(s<=this.allowedTime){if(i>this.threshold)this.slideLeft();else if(i<-this.threshold)this.slideRight()}t.preventDefault()}})(window);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:100:"/local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js?15759690461177";s:6:"source";s:85:"/local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){

    $(document).on('click', '.load_more', function(){

        var targetContainer = $('.news-list'),          //  Контейнер, в котором хранятся элементы
            eventsLoaded = $('#events-loaded'),
            url =  $('.load_more').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    //  Удаляем старую навигацию
                    $('.load_more').remove();

                    var elements = $(data).find('.news-item'),  //  Ищем элементы
                        pagination = $(data).find('.load_more');//  Ищем навигацию

                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    eventsLoaded.append(pagination); //  добавляем навигацию следом

                }
            })
        }

    });

});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:104:"/local/templates/armswiss/components/altasib/feedback.form/contact_us/form_script.min.js?157606988511262";s:6:"source";s:84:"/local/templates/armswiss/components/altasib/feedback.form/contact_us/form_script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
var ALXpopup={timerId:"",timerReId:"",minw:500,param:"",removeWindow:true,fixed:false,canClearBlock:false,init:function(param){var oPopup=this;this.param=typeof param!=='undefined'?param:"";this.param.popupAnimation=typeof param.popupAnimation!=='undefined'?param.popupAnimation:['alx-popup-show-anime1','alx-popup-hide-anime1','alx-popup-mess-show-anime1'];if(typeof param.popupWindow!='undefined'){this.canClearBlock=typeof param.filledWithErrors!=='undefined'?param.filledWithErrors!=='Y':false;$('.alx_feed_back').find("form").unbind('submit').submit(function(){oPopup.send_dataAjax(this);return false;});}else{if(typeof param.cssURL!=='undefined'&&typeof param.cssURL!=='object')
$('head').append("<link rel='stylesheet' type='text/css' href='"+param.cssURL+"' />");else if(typeof param.cssURL=='object')
for(i in param.cssURL)$('head').append("<link rel='stylesheet' type='text/css' href='"+param.cssURL[i]+"' />");if(typeof param.objClick!=='undefined'){$(param.objClick).click(function(){oPopup.show(this);});}
this.param.data=typeof param.data!=='undefined'?param.data:"";this.param.url=typeof param.url!=='undefined'?param.url:"";this.param.fixed=typeof param.fixed!=='undefined'?param.fixed:oPopup.fixed;this.param.width=typeof param.width!=='undefined'?param.width:oPopup.minw;this.param.height=typeof param.height!=='undefined'?param.height:200;this.param.removeWindow=typeof param.removeWindow!=='undefined'?param.removeWindow:oPopup.removeWindow;}},show:function(el){var IB_ELEMENT_ID=$(el).attr(this.param.data.ELEMENT_ID_ATTR);if(typeof IB_ELEMENT_ID!=='undefined')
this.param.data.TARGET_ELEMENT_ID=parseInt(IB_ELEMENT_ID);else
this.param.data.TARGET_ELEMENT_ID="";var oPopup=this;document.body.style.overflowX='hidden';if(this.param.removeWindow)
$('.modal_form , .alx_fb_overlay').remove();if($('.alx-feedb-data').length<1){$('body').append('<div class="modal_form"><span class="modal_close"><span class="modal_close__left"></span><span class="modal_close__right"></span></span><div class="alx-feedb-error"></div><div class="alx_cont_popup"></div></div><div class="alx_fb_overlay"></div>');$('.alx_fb_overlay').fadeIn(400);$('body').append('<div class="alx_fedb_wait"><div class="alx-feedb-loading"></div><div class="alx-feedb-loading-text">loading</div></div>');$('.modal_close,.alx_fb_overlay,.modal_close_ok').click(function(){oPopup.close();});oPopup.timerId=setInterval(function(){oPopup.update();},200);setTimeout(function(){clearInterval(oPopup.timerId);oPopup.show_error();},5000);oPopup.load_contentAjax();}
else{$('.alx_fb_overlay').fadeIn(400);if(($(window).height()>($('.modal_form').outerHeight()+100))&&this.param.fixed)
$('.modal_form').css({'top':(($(window).height()-$('.modal_form').outerHeight())/ 2-50)+'px','marginTop':'0','position':'fixed','opacity':1});else
$('.modal_form').css({'position':'absolute','marginTop':$(window).scrollTop()+100+'px','top':'0','opacity':1})
$('.modal_form').removeClass(this.param.popupAnimation[0]+', '+this.param.popupAnimation[1]);$('.modal_form').addClass(this.param.popupAnimation[0]);}
return true;},autoResize:function(){var oPopup=this;if($('.alx-feedb-data').length<1||$('.modal_form').css('position')!='fixed'){clearInterval(oPopup.timerReId);return;}
if(($(window).height()>$('.modal_form').outerHeight()+100)&&this.param.fixed)
$('.modal_form').css({'top':(($(window).height()-$('.modal_form').outerHeight())/ 2-50)+'px','marginTop':'0','position':'fixed'});else
$('.modal_form').css({'position':'absolute','marginTop':$(window).scrollTop()+100+'px','top':'0'});},update:function(){var oPopup=this;if($('.alx-feedb-data').length<1)
return;clearInterval(oPopup.timerId);var w='';if((this.param.width+"").split('%').length==1){w=(this.param.width+"").split('px');var mLeft=0-parseInt(w[0])/ 2+'px';}else{w=(this.param.width+"").split('%');var mLeft=0-parseInt(w[0])/ 2+'%';}
$('.modal_form').css({'marginLeft':mLeft,'width':this.param.width});if(($(window).height()>$('.modal_form').outerHeight()+100)&&this.param.fixed)
$('.modal_form').css({'top':(($(window).height()-$('.modal_form').outerHeight())/ 2-50)+'px','marginTop':'0','position':'fixed'});else
$('.modal_form').css({'position':'absolute','marginTop':$(window).scrollTop()+100+'px','top':'0'});if(typeof this.param.popupAnimation!='undefined')
var animClass=this.param.popupAnimation[0];$('.modal_form').delay(400).queue(function(){$('.alx_fedb_wait').fadeOut(400,function(){$(this).remove()});$('.modal_form').addClass(animClass);$('.alx-feedb-data').addClass('alx-feedb-data-view');});if($('.modal_form').css('z-index')<0)
$('.modal_form').css({'z-index':'2001'});setTimeout(function(){if($('.modal_form').css('opacity')<1)
$('.modal_form').css({'opacity':1});},1000);oPopup.timerReId=setInterval(function(){oPopup.autoResize();},400);},close:function(){var oPopup=this;var animClass=this.param.popupAnimation[1];$('.alx-feedb-data').css({'maxHeight':($(window).height()-100)+'px'});$('.modal_form').addClass(animClass);$('.alx_fb_overlay, .alx_fedb_wait, .modal_form').fadeOut(400);setTimeout(function(){if($('.modal_form').css('z-index')>2000)
$('.modal_form').css({'z-index':'-1'});document.body.style.overflowX='';},750);setTimeout(function(){if($('.modal_form').css('opacity')>0)
$('.modal_form').css({'opacity':0,'marginTop':'-100000px'});if(oPopup.removeWindow||($('.alx-feedb-data-errorLoading').length>1))
$('.modal_form, .alx_fb_overlay').remove();},500);},show_error:function(){var oPopup=this;if($('.alx-feedb-data').length<1){$('.alx_cont_popup').html('<div class="alx-feedb-data alx-feedb-data-errorLoading">Loading error. Try again.<br /><a href="" onClick="ALXpopup.close(); return false" class="alx-feedb-data-close">close window</a></div>');oPopup.update();}},load_contentAjax:function(){if(typeof this.param.data!='undefined'){var oPopup=this;$.ajax({type:'POST',data:this.param.data,url:this.param.url,async:true,success:function(data){$('.alx_cont_popup').html('<div class="alx-feedb-data">'+data+'</div>');$('.alx-feedb-data').find("form").submit(function(){oPopup.send_dataAjax(this);return false;});}});}},reload_contentAjax:function(){var oPopup=this;$('body').append('<div class="alx_fedb_wait"><div class="alx-feedb-loading"></div><div class="alx-feedb-loading-text">loading</div></div>');$.ajax({type:'POST',data:this.param.data,url:this.param.url,async:true,success:function(data){$('.alx-feedb-data').remove();$('.alx_fedb_wait').remove();$('.alx_cont_popup').html('<div class="alx-feedb-data">'+data+'</div>');$('.alx-feedb-data').addClass('alx-feedb-data-view');$('.alx-feedb-data').find("form").submit(function(){oPopup.send_dataAjax(this);return false;});}});},ok_window:function(param){var oPopup=this;var w=typeof param.width!=='undefined'?param.width:300;if((w+"").split('%').length==1){w=(w+"").split('px');var mLeft=0-parseInt(w[0])/ 2+'px';}else{w=(w+"").split('%');var mLeft=0-parseInt(w[0])/ 2+'%';}
$('.modal_form').css({'marginLeft':mLeft,'width':w,'position':'fixed','top':'30%','marginTop':'0'});if(typeof param.fid!='undefined')
$('#alx_feed_back_'+param.fid+'.alx-feedb-data, #alx_feed_back_'+param.fid+'.alx_feed_back').empty();else
$('.modal_form .alx-feedb-data,.alx_feed_back').empty();$('.modal_close_ok').click(function(){oPopup.close();});},send_dataAjax:function(form){var oPopup=this;var sID=$(form).attr('name').split('_')[2];var buttonSumbit=$("#fb_close_"+sID);buttonSumbit.prop("type","button");var animClass=this.param.popupAnimation[2];var url=$(form).attr('action');url=typeof url!=='undefined'?url:"";var bTypeFD=false;if(typeof FormData=='function'){var FORM_DATA=new FormData(form);bTypeFD=true;}else{var FORM_DATA=$(form).serializeArray();}
$.ajax({url:url,type:'POST',data:FORM_DATA,cache:false,processData:(bTypeFD?false:true),contentType:(bTypeFD?false:'application/x-www-form-urlencoded;charset=UTF-8'),success:function(data){var sDelim='<!--REFRESH_SECTION-->';var pos=data.indexOf(sDelim);var errData=data,formData=false;if(pos>-1){errData=data.substr(0,pos);formData=data.substr(pos+sDelim.length);}
if(formData){$('#alx_feed_back_'+sID+'.alx_feed_back').html(formData);}
if(typeof sID!='undefined'&&$('#alx_feed_back_'+sID).siblings(".alx-feedb-error").length>0){$('#afbf_err_'+sID).html(errData).addClass(animClass);buttonSumbit.prop("type","submit");}
else if(typeof sID!='undefined'&&$('#alx_feed_back_'+sID).parent().parent().siblings(".alx-feedb-error").length>0){$('#alx_feed_back_'+sID).parent().parent().siblings(".alx-feedb-error").html(errData).addClass(animClass);buttonSumbit.prop("type","submit");}
else{$('.alx-feedb-error').html(errData).addClass(animClass);buttonSumbit.prop("type","submit");}
if(oPopup.canClearBlock)$('#alx_feed_back_'+sID+'.alx_feed_back').empty();return true;}});}}
function alx_addFormGroupFocus(element){var $element=$(element);if(!$element.prop('disabled')){$element.parents(".afbf_item_pole").addClass("is_focused");}}
function alx_removeFormGroupFocus(element){var $element=$(element);$(element).parents(".afbf_item_pole").removeClass("is_focused is_filled");if($element.val().length!==0){$(element).parents(".afbf_item_pole").addClass("is_filled");}}
$(document).ready(function(){$('.alx_feed_back .item_pole__captcha .afbf_name').each(function(i,elem){$(elem).next().find('input').css({'height':$(elem).height()+'px'});});$(document).on("focus",".afbf_item_pole .afbf_inputtext,.afbf_item_pole .afbf_textarea,.afbf_item_pole .afbf_select,.afbf_item_pole .afbf_textarea,.afbf_item_pole .afbf_file_input_add",function(){alx_addFormGroupFocus(this);}).on("blur",".afbf_item_pole .afbf_inputtext,.afbf_item_pole .afbf_textarea,.afbf_item_pole .afbf_select,.afbf_item_pole .afbf_textarea,.afbf_item_pole .afbf_file_input_add",function(){alx_removeFormGroupFocus(this);});});function poleError(pole){if(pole.name.split('[').length>1){if(pole.name.split('[')[1].split('_')[0]=='EMAIL'){if(!checkEmail(pole.value))return true;}}
if(pole.type=='radio'||pole.type=='checkbox'){if(!pole.checked&&$('[name="'+pole.name+'"]:checked').length==0)return true;else return false;}
if(pole.value.length==0||!$(pole).val()){return true;}
return false;}
function checkEmail(email){var re=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;return re.test(email);}
function validateForm(form){var required_fields=form.find('.afbf_item_pole.required');var email_fields=form.find('.afbf_item_pole.is_email');if(required_fields.length>0||email_fields.length>0){email_fields.each(function(){var $this=$(this);$this.find('input[name]').not('[type=hidden]').each(function(){if(this.value!=''&&!checkEmail(this.value))$this.addClass('error_pole');else $this.removeClass('error_pole');});});required_fields.each(function(){var $this=$(this);$this.find('input[name],textarea[name],select[name]').not('[type=hidden]').each(function(){if(poleError(this))$this.addClass('error_pole');else $this.removeClass('error_pole');});});var errorPoles=form.find('.afbf_item_pole.required.error_pole');if(errorPoles.length>0){errorPoles.eq(0).find('input,textarea').not('[type=hidden]').focus();return false;}}
return true;}
function ALX_captcha_Error(){$('.item_pole__captcha').addClass('error_pole');}
function ALX_captcha_Error(){$('.item_pole__captcha').addClass('error_pole');}
function ALX_fileError(field){field.addClass('error_fpole');}
/* End */
;; /* /local/templates/armswiss/components/bitrix/news.list/home_page_services/script.min.js?15759015653253*/
; /* /local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js?15759690461177*/
; /* /local/templates/armswiss/components/altasib/feedback.form/contact_us/form_script.min.js?157606988511262*/
