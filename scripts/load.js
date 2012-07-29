$(document).bind('pageinit', function() {
    $.getJSON('stream.php', function(data) {
        var checkins = [];
        $.each(data, function(index, checkin) {
            checkins.push('<li class="ui-li ui-li-static ui-body-c"><p class="ui-li-aside ui-li-desc">'
                            + checkin.timestamp
                            + '</p><h3 class="ui-li-heading">
                            + checkin.name
                            + '</h3><p class="ui-li-desc">
                            + checkin.pts
                            + ' points</p></li>');
        });
        
        var html = '<ul data-role="listview" class="ui-listview">' + items.join('') + '</ul>';
        $('#stream').append(html);
    });
});

