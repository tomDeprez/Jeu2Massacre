<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 space-center"></div>
            <div class="col-3"></div>
            <form class="col-6" id="myForm">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" id="exampleInputEmail1" aria-describedby="Pseudo"
                        placeholder="Entrez votre pseudo" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Entrez votre mot de passe" required>
                </div>
                <button onclick="connexion(event)" class="btn btn-primary">Connexion</button>
            </form>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function connexion(ev) {
        ev.preventDefault();
        var myForm = document.getElementById('myForm');
        formData = new FormData(myForm);
        var object = {};
        formData.forEach((value, key) => object[key] = value);
        var formData = JSON.stringify(object);
        var param = JSON.stringify({
            x: {
                'form': formData
            }
        });
        $.ajax({
            type: "POST",
            url: "php/Controller/PrincipalController.php",
            data: "GET=getUserConnexion&PARAM=" + param,
            success: function (retour) {
                udpateDataInView();
                update = true;
                document.getElementById("back").innerHTML = "<div class='alert alert-success' id='alert' role='alert'><strong>Succès!</strong> succès!</div>";
                window.setTimeout(function () {
                    $(".alert").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });
                }, 1000);
                getStockMoove();
            }
        });
    }
</script>