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