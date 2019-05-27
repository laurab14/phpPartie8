<?php
if (isset($_POST['loginUt']) && isset($_POST['mdpUt'])) {
    $loginUtili = $_POST['loginUt'];
    $mdpUtili = $_POST['mdpUt'];
    setcookie('loginUt', $loginUtili, time() + 360, '/', 'phpPartie8', false, true);
    setcookie('mdpUt', $mdpUtili, time() + 360, '/', 'phpPartie8', false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Partie 8 Exo5</title>
    </head>
    <body>
                        <p class="text-center">Souhaitez-vous modifier votre mot de passe ?</p>
                    <div class="container-fluid pt-5 bg-info">
                        <form method="post" action="index.php">
                            <div class="row">
                                <div class="col-5 text-right">
                                    <p><span>Pseudo : </span></p>
                                </div>
                                <div class="col-7">
                                    <p><input type="text" name="loginUt" /></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-right">
                                    <p><span>Mot de passe : </span></p>
                                </div>
                                <div class="col-7">
                                    <p><input type="password" name="mdpUt" /></p>
                                </div>
                            </div>
                            <div class="row ml-4">
                                <div class="col-12 text-center ml-5">
                                    <p><input type="submit" value="modifier" /></p>
                                </div>
                            </div>
                        </form>
                    </div>
                        <div class="container-fluid bg-light my-auto" >
                            <div class="row "style="height:100px">
                                <div class="col-12 text-center my-auto">
                                    <h4 class="text-info"><?php echo 'Bonjour, ' . $_COOKIE['loginUt'] . ' voici ton mot de passe, ' . $_COOKIE['mdpUt']; ?></h4>
                                </div>
                            </div>
                        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>