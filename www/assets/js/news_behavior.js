/**
 * Created by JetBrains PhpStorm.
 * User: ekimov
 * Date: 7/30/12
 * Time: 8:43 PM
 * To change this template use File | Settings | File Templates.
 */

function load_item(news_id) {

    $('#news_mainbody').html("<img src='/assets/images/loader.gif' />");

    $.ajax({
        url: "index.php?r=news/view&id=" + news_id,
        dataType: 'html',
        success: function(data, textStatus, jqXHR) {
            if($('#news_mainbody').length)
                $('#news_mainbody').html(data);
            else
                alert("No target container");
        },
        error: function(jqXHR, textStatus, errorThrown) {
            if($('#news_mainbody').length)
                $('#news_mainbody').html(data);
            else
                alert("No target container");
        },
        complete: function(jqXHR, textStatus) {
            init();
        }
    })
}