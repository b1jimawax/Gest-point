<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <title>Page d'Authentification Administrateur</title>
</head>
<body style=background-color:#002731;>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3"style=color:#fff;>Gest-POINT</h1>
        <p class="col-lg-10 fs-4" style=color:#fff;>Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="auth_admin.php" class="p-4 p-md-5 border rounded-3 bg-light">
        <strong class="text-muted" >Connexion Administrateur</strong><br><br>
          <div class="form-floating mb-3">
            <input type="text" name="nom_utilisateur" required class="form-control" id="floatingInput" placeholder="Nom_utilisateur">
            <label for="floatingInput">Nom_utilisateur</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="mot_de_passe" required class="form-control" id="floatingPassword" placeholder="Mot de passe">
            <label for="floatingPassword">Mot de passe</label>
          </div>
         
          <button class="w-100 btn btn-lg  btn-primary" type="submit">Se connecter</button>
          <hr class="my-4">
          <small class="text-muted"><a href="accueil_appranant">Retouner à l'espace de pointage des apprenants ?</a></small>
        </form>
      </div>
    </div>
  </div>
</body>
</html>