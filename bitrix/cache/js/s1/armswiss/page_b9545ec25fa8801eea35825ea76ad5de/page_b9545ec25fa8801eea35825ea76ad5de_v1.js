
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
; /* Start:"a:4:{s:4:"full";s:86:"/local/templates/armswiss/components/bitrix/news.list/projects/script.js?1576055481466";s:6:"source";s:72:"/local/templates/armswiss/components/bitrix/news.list/projects/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
var projects = {

    ajaxMethod: "GET",

    filter: function (id) {

        console.log(id);
        $.ajax({
            url: '/local/ajax/project.php',
            type: this.ajaxMethod,
            data: {id: id},
            beforeSend: function () {
                // $('#otherProjectsTabs').text('Loading');
            },
            success: function (result) {
                $('.otherProjectsTabsBox').html(result);
            }
        });
    }

};
/* End */
;; /* /local/templates/armswiss/components/bitrix/system.pagenavigation/show_more/script.js?15759690461177*/
; /* /local/templates/armswiss/components/bitrix/news.list/projects/script.js?1576055481466*/
