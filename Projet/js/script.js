// $("#dropzone").droppable({
//     drop: function (event, ui) {
//         $(this).css('background', 'white');
//     },
//     over: function (event, ui) {
//         $(this).css('background', 'rgb(236, 236, 236)');
//     },
//     out: function (event, ui) {
//         $(this).css('background', 'black');
//     }
// });
// $("#winston").draggable({ containment: "#dropzone" });




$('.can2').draggable({
    appendTo: 'body',
    helper: 'clone'
});
$nb = 0
$('#dropzone').droppable({
    activeClass: 'active',
    hoverClass: 'hover',
    accept: ":not(.ui-sortable-helper)", // Reject clones generated by sortable
    drop: function (e, ui) {
        $nb++;
        var $el = $("<img class='can2 " + $nb + "' src='img/can2.png' height='100px'>");

        $(this).append($el);
    }
}).sortable({
    items: '.can2'
});

$('body').on('click', '#dropzone', function () {

    console.log("coucou");
    let random = getNbrCan();
    for (let i = 1; i <= random; i++) {
        console.log("cc1");
        console.log(random);
        let random2 = getCan();
        $('.' + random2 + '').css('opacity', '0.2');
    }
});

function getNbrCan() {
    var minNumber = 1; // le minimum
    var maxNumber = 10; // le maximum
    var randomnumber = Math.floor(Math.random() * (maxNumber) + minNumber); // la fonction magique
    return randomnumber;
}
function getCan() {
    var minNumber = 1; // le minimum
    var maxNumber = $('#dropzone .can2').length; // le maximum
    var randomnumber = Math.floor(Math.random() * (maxNumber) + minNumber); // la fonction magique
    return randomnumber;
}


