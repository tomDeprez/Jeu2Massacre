<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Jeu2Massacre</title>
</head>

<body>
    <div class="container-fluid" style="width:100%">
      
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <img src="img/stand.svg" width="98%" alt="" style="position:absolute; left: 10px; top:10px">
                        <div class="row mt-5">
                            <div class="col-1 offset-1" style="height: 100%;">
                                <div class="row justify-content-center">
                                    <img class="element" src="img/can.svg" height="100px">
                                </div>
                            </div>
                            <div class="col-1 ml-4" style="height: 100%;">
                                <div class="row justify-content-center">
                                    <img class="element" src="img/can2.svg" height="100px">

                                </div>
                            </div>
                            <div class="col-1 ml-4" style="height: 100%;">
                                <div class="row justify-content-center">
                                    <img class="element" src="img/can3.svg" height="100px">
                                </div>
                            </div>
                            <div class="col-1 ml-4" style="height: 100%;">
                                <div class="row justify-content-center">
                                    <img class="element" src="img/can4.svg" height="100px">
                                </div>
                            </div>
                            <div class="col-1 ml-4" style="height: 100%;">
                                <div class="row justify-content-center">
                                    <img class="element" src="img/can5.svg" height="100px">
                                </div>
                            </div>
                            <div class="col-1 offset-1" style="height: 100%;">
                                <div class="row file-upload justify-content-center" style="height:100px; position:relative">
                                    <div class="col">
                                        <div class="row file-upload-btn justify-content-center" type="button"
                                            onclick="$('.file-upload-input').trigger('click')">
                                            <i class="fas fa-plus fa-3x"></i>
                                            <input class="file-upload-input" type='file' onchange="readURL(this);"
                                            accept="image/*" />
                                        </div>
                                       
                                        <div class="row file-upload-content">                                               
                                                <img class="file-upload-image element" src=""  height="100px">
                                        </div>
                                        <div class="row remove-image justify-content-center" onclick="removeUpload()">
                                            <i class="fas fa-times fa-1x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 ml-4" style="height: 100%;">
                                <div class="row file-upload2 justify-content-center" style="height:100px; position:relative">
                                    <div class="col">
                                        <div class="row file-upload-btn justify-content-center" type="button"
                                            onclick="$('.file-upload-input').trigger('click')">
                                            <i class="fas fa-plus fa-3x"></i>
                                            <input class="file-upload-input" type='file' onchange="readURL2(this);"
                                            accept="image/*" />
                                        </div>
                                       
                                        <div class="row file-upload-content">                                               
                                                <img class="file-upload-image element" src=""  height="100px">
                                        </div>
                                        <div class="row remove-image justify-content-center" onclick="removeUpload2()">
                                            <i class="fas fa-times fa-1x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 ml-4">
                                <div class="row file-upload3 justify-content-center">
                                    <div class="col">                        
                                        <div class="row image-upload-wrap" style="height:100px">
                                                <input class="file-upload-input" type='file' onchange="readURL3(this);"
                                                    accept="image/*" />
                                                <div class="drag-text">
                                                    <h3>Drag and drop votre image</h3>
                                                </div>
                                            </div>
                                        
                                        <div class="row file-upload-content">                                               
                                                <img class="file-upload-image element" src=""  height="100px">
                                        </div>
                                        <div class="row remove-image justify-content-center" onclick="removeUpload3()">
                                            <i class="fas fa-times fa-1x"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                    <div id="cardPile" style="position: relative; top:60px; left:6px">
                            <div class="row"
                                style="position: absolute; top: 0; left: 50%; transform: translate(-50%,0);">
                                <div class="col-12">
                                    <div class="pos" style="width: 100px; height: 110px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row"
                                style="position: absolute; top: 100px; left: 50%; transform: translate(-50%,0);">
                                <div class="col-6">
                                    <div class="pos"></div>
                                </div>
                                <div class="col-6">
                                    <div class="pos"></div>
                                </div>
                            </div>
                            <div class="row"
                                style="position: absolute; top: 200px; left: 50%; transform: translate(-50%,0);">
                                <div class="col-4">
                                    <div class="pos"></div>
                                </div>
                                <div class="col-4">
                                    <div class="pos" ></div>
                                </div>
                                <div class="col-4">
                                    <div class="pos" ></div>
                                </div>
                            </div>
                            <div class="row"
                                style="position: absolute; top: 300px; left: 50%; transform: translate(-50%,0);">
                                <div class="col-3">
                                    <div class="pos"></div>
                                </div>
                                <div class="col-3">
                                    <div class="pos" ></div>
                                </div>
                                <div class="col-3">
                                    <div class="pos" ></div>
                                </div>
                                <div class="col-3">
                                    <div class="pos"></div>
                                </div>
                            </div>

                            <div class="row balls hide" style="position: absolute; top: 440px; left:180px; width:100%">
                                <div class="col-4 mt-3"> 
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="ball ball2"  src="img/balls.svg" width="60%">
                                        </div>
                                        <div class="col-4">
                                            <img class="ball ball3"  src="img/balls.svg" width="60%">
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-4">  
                                    <img class="ball active"  src="img/balls.svg" width="20%">
                                    <img class="ball hide"  src="img/balls.svg" width="20%">
                                    <img class="ball hide"  src="img/balls.svg" width="20%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col-3">
            <img src="img/panel.png" width="95%" alt="" style="position:absolute; left: 10px; top:-50px"> 
                <div class="row ">
                    <div class="col text-right">
                        <i class="fas fa-user-circle text-light fa-2x mt-2" onclick="window.location.href = 'connexion.php'" style="cursor:pointer;position:relative;z-index:1"></i>
                    </div>
                     
                </div>
                
                <div class="row" style="margin-top:23rem; margin-left:2.3rem; max-width:83%; max-height:258px;overflow-y: scroll;scrollbar-width: thin;">
                    <div class="col tabScores">
                        <div class="row mb-3 justify-content-center">
                            <h5 class="text-light font-weight-bold text-right">Partie 1 : 25 points <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Score réalisé le 19/04/2021"></i></h5>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <h5 class="text-light font-weight-bold text-right">Partie 2 : 18 points <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Score réalisé le 19/04/2021"></i></h5>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <h5 class="text-light font-weight-bold text-right">Partie 3 : 10 points <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Score réalisé le 19/04/2021"></i></h5>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <h5 class="text-light font-weight-bold text-right">Partie 4 : 28 points <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Score réalisé le 19/04/2021"></i></h5>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <h5 class="text-light font-weight-bold text-right">fcezvbezvbzevbezbfveb nefefzzzzzzzzdszdazefefbvfe : 5 points <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Score réalisé le 19/04/2021"></i></h5>
                        </div>
                    </div>
                </div>     
            </div>   
           
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">               
                <div class="modal-body">
                <h4 class="text-center text-uppercase font-weight-bold mb-4">Bravo !</h4>

                <p class="text-center mb-5">Votre score est de <span class="score"></span> points.</p>
                   
                <div class="text-center text-uppercase font-weight-bold mb-2">
                    <span style="background:#FFC502;padding:5px 15px 9px 15px; border-radius:20px;color:white;cursor:pointer;" onclick="location.reload();">Réessayer </span> 
                </div>
             
                </div>
               
                </div>
            </div>
        </div>
        <!-- <div class="modal fade" id="myModal1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">                
                <div class="modal-body">
                    <h4 class="text-center text-uppercase font-weight-bold">Bienvenue sur chamboule-tout !</h4>
                    <span>Pour accéder au jeu, merci de vous connecter ou de vous inscrire.</span>
                             
                </div>
                </div>
            </div>
        </div> -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/addPicture.js"></script>
<script src="js/class/partie.js"></script>
<script src="js/class/image.js"></script>

</html>