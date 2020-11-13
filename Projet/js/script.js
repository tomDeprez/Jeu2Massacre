$('#winston').draggable({});

$("#dropzone").droppable({
    drop: function (event, ui) {
        $(this).css('background', 'white');
    },
    over: function (event, ui) {
        $(this).css('background', 'rgb(236, 236, 236)');
    },
    out: function (event, ui) {
        $(this).css('background', 'black');
    }
});
$("#winston").draggable({ containment: "#dropzone" });    