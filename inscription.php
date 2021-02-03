<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    
<body>
    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
              <div class="card-img-left d-none d-md-flex">
                 <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">

              <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                         <div class="alert alert-success" role="alert">
                     <h4 class="alert-heading text-center">FELICITATION</h4>
                  <p class="text-center">Votre inscription a été effectuée avec succès.</p>
                              <hr>
                     <p class="text-center"><a href="index.php">Acceder à votre compte</a></p>
                        </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4  class="text-center">Erreur !!! mot de passe incorrect</h4>
                                <p  class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email non valide</Em></h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email trop long</h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Nom d'utlisateur trop long</h4>
                                <p>Merci de réessayer</p>
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur Compte déjà existant</h4>
                              
                            </div>
                        <?php 

                    }
                }
                ?>




                <h5 class="card-title text-center"><span style="font-weight: bolder; color: red;">INSCRIPTION</span></h5>
                <form class="form-signin" action="traitementinscription.php" method="POST">
                  <div class="form-label-group">
                    <input type="text" name="pseudo" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                    
                  </div>
    
                  <div class="form-label-group">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                    
                  </div>
                  
                  <hr>
    
                  <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    
                  </div>
                  <div class="form-label-group">
                    <input type="password" name="password_retype" id="inputPassword" class="form-control" placeholder="Password" required>
                    
                  </div>
                  <div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Inscrire</button>
                    <button class="btn btn-lg btn-danger btn-block text-uppercase" type="reset">Anuler</button>
                  </div>
                  <a class="d-block text-center mt-2 small" href="index.html">Sign In</a>
                  <hr class="my-4">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>






      <style>
          :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #ff4800;
  background: linear-gradient(to right, #e63600, #ff4133);
  background-image: url("image/hero-bg.svg");
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #ec2a08;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  text-align: center;
}

.form-label-group input:-ms-input-placeholder {
    text-align: center;
}

.form-label-group input::-ms-input-placeholder {
    text-align: center;
}

.form-label-group input::-moz-placeholder {
    text-align: center;
}

.form-label-group input::placeholder {
    text-align: center;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: rgb(240, 6, 6);
}
      </style>
</body>
</html>