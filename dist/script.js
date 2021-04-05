var correctCards = 0;
$(init);


function init() {



  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css({
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  });

  // Reset the game
  correctCards = 0;
  // $('#cardPile').html('');
  $('#cardSlots').html('');

  // Create the pile of shuffled cards


  $('.card1').draggable({
    containment: '#content',
    stack: '#cardPile div',
    cursor: 'move',
    start: function (event, ui) {
      var $el = $("<div class='card1' style='position:absolute;'>1</div>");
      $el.appendTo("#cardPile");
    },
    revert: true
  });


  // Create the card slots
  var words = ['', '', '', '', '', '', '', '', '', ''];
  for (var i = 1; i <= 10; i++) {
    $('<div>' + words[i - 1] + '</div>').appendTo('#cardSlots').droppable({
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    });
  }

}

function handleCardDrop(event, ui) {



  ui.draggable.draggable('disable');
  $(this).droppable('disable');
  ui.draggable.position({ of: $(this), my: 'left top', at: 'left top' });
  ui.draggable.draggable('option', 'revert', false);
  correctCards++;


  // If all the cards have been placed correctly then display a message
  // and reset the cards for another go

  if (correctCards == 10) {
    $('#successMessage').show();
    $('#successMessage').animate({
      left: '380px',
      top: '200px',
      width: '400px',
      height: '100px',
      opacity: 1
    });
  }

}