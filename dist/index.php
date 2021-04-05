<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Drag-and-Drop with jQuery: Your Essential Guide</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="./style.css">

</head>

<body>


  <div id="content">
    <div id="cardPile">
      <div class='card1'>1</div>
    </div>
    <div id="cardSlots"> </div>


    <div id="successMessage">
      <h2>You did it!</h2>
      <button onclick="init()">Play Again</button>
    </div>

  </div>


  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>