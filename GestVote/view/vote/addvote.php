<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>D</title>
</head>
<body>
      <div class="container">
          <div class="row">
              <div class="col-md-10 offset-md-1">
                  <table class="table table-bordered" style="margin-top:100px;">
                      <tr>
                          <th>Id Candidat</th>
                          <th>Nom Candidats</th>
                          <th>Nom Partie</th>
                          <th>CHOISIR</th>
                          <th>VOTER</th>
                      </tr>
                      <tr>
                      <form method='POST' action='controller/votecontroller.php'>
                        <?php
                      
                            foreach($listeCandidat as $ele){
                            echo "
                                 <tr>
                                    <td>$ele[id_candidat]</td>
                                    <td>$ele[nom_candidat]</td>
                                    <td>$ele[nom_partie]</td>
                                    <td><input name='choix_vote' type='radio' value='$ele[id_candidat]'></td>
                                    <td><button type='submit' name='btn_vote' class='btn btn-info'>Voter</button></td>
                                
                                 </tr>
                                ";
                             
                            }
                                

                        ?>
                            </form>
                    </tr>
                  </table>
              </div>
          </div>
      </div>
</body>
</html>