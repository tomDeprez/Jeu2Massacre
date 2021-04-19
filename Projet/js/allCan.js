$nb = 0;

$(".allCan").click(function () {
    $(".pos").each(function () {
        var $el = $("<img class='element " + $nb + " suppr' src='img/can.svg' height='100px'>");
        $(this).append($el);
        $("." + $nb).css("cursor", "not-allowed");
        $(this).droppable("option", "disabled", true);

        $w = $("." + $nb).width();
        $h = $("." + $nb).height();

        $(this).css("width", $w);
        $(this).css("height", $h);
        $(this).removeClass("pos");

        $("#cardPile .element").removeClass("suppr");

        $(".balls").removeClass("hide");

        $nb++
    });
});
