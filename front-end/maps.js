// client-side js
// run by the browser each time your view template is loaded

// by default, you've got jQuery,
// add other scripts at the bottom of index.html

$(function() {
    console.log('hello world :o');

    $.get('/dreams', function(dreams) {
        dreams.forEach(function(dream) {
            $('<li></li>').text(dream).appendTo('ul#dreams');
        });
    });

    $('form').submit(function(event) {
        event.preventDefault();
        dream = $('input').val();
        $.post('/dreams?' + $.param({dream: dream}), function() {
            $('<li></li>').text(dream).appendTo('ul#dreams');
            $('input').val('');
            $('input').focus();
        });
    });

});

var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 42.3425954, lng: -71.3772822},
        zoom: 15
    });
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng([42.3425954], [-71.3772822]),
        map: map
    });


    layer = new google.maps.FusionTablesLayer({
        map: map,
        heatmap: { enabled: false },
        query: {
            select: "col2, col0",
            from: "1pbba_dFcpWQKQDXQUt9RNXp16GqX5Jz-NraafEI",
            where: ""
        },
        options: {
            styleId: 3,
            templateId: 3
        }
    });
}




var yup = new google.maps.Marker({
    position: {lat: 42, lng: -71},
    map: map,
    title: 'Death'
});