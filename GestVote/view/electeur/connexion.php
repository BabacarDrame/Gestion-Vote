<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
     <div class="container">
         <div class="row">
             <div class="col-md-6 offset-md-3" style="box-shadow: 1px 1px 4px 0 rgba(0,0,0,.8); padding:20px">
             <div class="card" style="margin-top:100px;">
                <div class="card-header bg-primary">
                   Formulaire de connexion
                </div>
                <div class="card-body">
                      <form action="controller/electeurController.php" method="post">
                          <div class="form-group">
                             <label class="control-label">Login</label>
                             <input name="login" type="text" class="form-control"  required placeholder="Login">
                          </div>
                          <div class="form-group mt-3">
                             <label class="control-label">Mots de Passe</label>
                             <input name="mdp" type="text" class="form-control" required placeholder="mots de pass">
                          </div>
                          <div class="form-group mt-3">
                              <button type="submit" class="btn btn-primary" name="btn_connexion">Connecter</button>
                              <button type="submit" class="btn btn-danger" name="">Annuler</button>
                              <a href="?page=inscription">S'inscrire</a>

                            </div>
                      </form>
                </div>
                </div>
             </div>
         </div>
     </div>
</body>
</html>