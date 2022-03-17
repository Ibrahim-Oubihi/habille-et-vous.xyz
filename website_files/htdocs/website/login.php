<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/website/css/login-style.css">

    <title>Login || Habille-Et-Vous</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="/website/images/login.svg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Connectez-vous</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Se connecter</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Prénom</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Votre Prénom" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Nom de famille</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Votre Nom de Famille" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Votre E-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Télephone</label>
                        <input id="number" type="number" name="number" placeholder="+33 0 00 00 00 00" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Mot de Passe</label>
                        <input id="password" type="password" name="password" placeholder="Votre Mot de Passe" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Mot de Passe</label>
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Votre Mot de Passe" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Sexe</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculin</label>
                        </div>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Féminin</label>
                        </div>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="others" name="gender">
                            <label for="others">Autre</label>
                        </div>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Je préfere ne pas le dire</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuer</a></button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
