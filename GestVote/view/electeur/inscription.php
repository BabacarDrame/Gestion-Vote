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
    <div class="col-md-8 offset-md-2" style="box-shadow: 0px 0px 4px 4px rgba(0.1,0.1,0.1,0.1); padding:20px">
    <div class="card" style="margin-top:100px;">
    <div class="card-header bg-primary">
        Formulaire d'Inscription
    </div>
    <div class="card-body">
    <form action="controller/electeurController.php" method="post">
        <div class="row">
            <div class="col-md-5 offset-md-1">
            <div class="form-group">
            <label class="control-label">Nom</label>
            <input name="nom_electeur" type="text" class="form-control" placeholder="Entrez votre nom">
        </div>
        <div class="form-group mt-3">
            <label class="control-label">Prenom</label>
            <input name="prenom_electeur" type="text" class="form-control" placeholder="Entrez votre prenom">
        </div>
        <div class="form-group mt-3">
            <label class="control-label">Numero carte d'identite</label>
            <input name="cni" type="number" class="form-control" placeholder="Entrez votre CNI">
        </div>
        <div class="form-group mt-3">
            <label class="control-label">Numero carte electeur</label>
            <input name="num_electeur" type="number" class="form-control" placeholder="Entrez votre NCE">
        </div>
        <div class="form-group mt-3">
        <label class="control-label">Sexe</label> </br>
        <input type="radio" value="masculin" name="sexe" ><label for="masculin">Masculin</label>
        <input type="radio" value="feminin" name="sexe" ><label for="feminin">Feminin</label>
         </div>
         <div class="form-group mt-3">
            <label class="control-label">date naissance</label>
            <input name="date_nais" type="Date" class="form-control" placeholder="Entrez votre date naissance">
        </div>
    </div>
    <div class="col-md-5 offset-md-1">
    
        <div class="form-group">
            <label class="control-label">lieu naissance</label>
            <input name="lieu_nais" type="text" class="form-control" placeholder="Entrez votre lieu de naissance">
    </div>
        <div class="form-group mt-3">
            <label class="control-label">Adresse</label>
            <input name="adress" type="text" class="form-control" placeholder="Adresse">
        </div>
        <div class="form-group mt-3">
            <label class="control-label">Commune L</label>
            <input name="commune" type="text" class="form-control" placeholder="Commune">
       </div>
       <div class="form-group mt-3">
            <label class="control-label">Bureau de Vote</label>
            <input name="bureau_vote" type="text" class="form-control" placeholder="bureau de vote">
       </div>
       <div class="form-group mt-3">
            <label class="control-label">Login</label>
            <input name="login" type="text" class="form-control" placeholder="Login">
       </div>
       <div class="form-group mt-3">
            <label class="control-label">mdp</label>
            <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mdp">
       </div>
    </div>
    <div class="row">
            <div class="col-md-5 offset-md-1">
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary" name="inscription">Connecter</button>
            <button type="submit" class="btn btn-danger" >Annuler</button>
        </div>
    </div>

    </form>
    </div>
    </div>
    </div>
</div>
</div>
</body>
</html>