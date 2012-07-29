$(document).bind('pageinit', function() {
    $.getJSON('stream.php', { userid:'1' }, function(data) {
        console.log(data);
        var checkins = [];
        $.each(data, function(index, checkin) {
            checkins.push('<li class="ui-li ui-li-static ui-body-c"><p class="ui-li-aside ui-li-desc">'
                            + checkin.timestamp
                            + '</p><h3 class="ui-li-heading">'
                            + "Conquest #" + checkin.useeid
                            + '</h3><p class="ui-li-desc">'
                            + checkin.pts
                            + ' points</p></li>');
        });
        
        var html = '<ul data-role="listview" class="ui-listview">' + checkins.join('') + '</ul>';
        $('#stream').append(html);
    });
});

