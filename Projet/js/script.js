// $('#myModal1').modal('show');
$nb = 1;
var correctCards = 0;

$('body').on('click', '#cardPile .suppr', function () {
    $(this).parent().addClass("pos");
    $(this).parent().droppable("option", "disabled", false);
    $(this).remove();
    correctCards--;
});

$('.element').draggable({
    cursor: 'grabbing',
    revert: true,
    revertDuration: 0,
    start: function (event, ui) {
        $source = $(this).attr("src");
        $(this).css("cursor", "grabbing");

        $w = $(this).width();
        $h = $(this).height();

        $(".pos").css("width", $w);
        $(".pos").css("height", $h);

        $(".pos").addClass("border");
    },
    stop: function (event, ui) {
        $(".pos").removeClass("border");
        $(this).css("cursor", "grab");

    }
});

$('#cardPile div div div').droppable({
    hoverClass: 'hovered',
    drop: handleCardDrop
})


function handleCardDrop(event, ui) {
    var $el = $("<img class='element " + $nb + " suppr' src='" + $source + "' height='100px'>");
    $(this).append($el);
    $("." + $nb).css("cursor", "pointer");
    $(this).droppable("option", "disabled", true);

    $w = $("." + $nb).width();
    $h = $("." + $nb).height();

    $(this).css("width", $w);
    $(this).css("height", $h);
    $(this).removeClass("border");
    $(this).removeClass("pos");

    correctCards++;
    $nb++;

    if (correctCards == 10) {
        $("#cardPile .element").removeClass("suppr");
        $("#cardPile .element").css("cursor", "not-allowed");
        $(".balls").removeClass("hide");
    }

}

$nbrClick = 0;
$score = 0;
$score1 = 0;
$score2 = 0;
$score3 = 0;

$('body').on('click', '.active', function () {
    $nbrClick++;
    $this = $(this);

    if ($nbrClick === 1) {
        $this.css('animation', 'launch 0.3s linear');
        setTimeout(function () { fallElement(); }, 100);
        setTimeout(function () { $(".ball2").addClass("hide"); $this.css('animation', 'none'); }, 260);
        setTimeout(function () {
            $score1 = (10 - ($('#cardPile .element').length)) * 3;
            console.log("Score : " + $score1);
        }, 550);

    }
    else if ($nbrClick === 2) {
        $this.css('animation', 'launch 0.3s linear');
        setTimeout(function () { fallElement(); }, 100);
        setTimeout(function () { $(".ball3").addClass("hide"); $this.css('animation', 'none'); }, 260);
        setTimeout(function () {
            $score2 = ((10 - ($score1 / 3)) - ($('#cardPile .element').length)) * 2;
            console.log("Score : " + $score2);
        }, 550);

    }
    else if ($nbrClick === 3) {
        $this.css('animation', 'launch 0.3s linear');
        setTimeout(function () { fallElement(); }, 100);
        setTimeout(function () { $this.remove(); }, 260);
        setTimeout(function () {
            $score3 = ((10 - (($score1 / 3) + ($score2 / 2))) - ($('#cardPile .element').length));
            $score = $score1 + $score2 + $score3;
            $(".score").html($score);
            $('#myModal').modal('show');
        }, 550);

    }
});

function fallElement() {
    let random = getNbrCan();
    console.log("Nbr de cannette qui tombe : " + random);
    for (let i = 1; i <= random; i++) {
        let random2 = getCan();
        console.log("Canette numéro : " + random2);
        $('.' + random2 + '').css('animation', 'fly 0.4s linear');
        setTimeout(function () { $('.' + random2 + '').remove() }, 400);
    }


}

function getNbrCan() {
    var minNumber = 1; // le minimum
    var maxNumber = 10; // le maximum
    var randomnumber = Math.floor(Math.random() * (maxNumber) + minNumber); // la fonction magique
    return randomnumber;
}
function getCan() {
    var minNumber = 1; // le minimum
    var maxNumber = 10 // le maximum
    var randomnumber = Math.floor(Math.random() * (maxNumber) + minNumber); // la fonction magique
    return randomnumber;
}


