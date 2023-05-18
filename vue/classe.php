<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="template">
        <div class="dashboard">
            <div class="profil">
                <img src="image/profil.png" alt="">
            </div>
            <button class="v_profil">Voir profil</button>
            <div class="navbar">
                <ul>
                    <li><a href="HomePage.php"><i class="las la-user"></i> Eleves</a></li>
                    <li><a href=""><i class="las la-chalkboard-teacher"></i> Classe</a></li>
                    <li><a href=""><i class="las la-sort-amount-up"></i> Niveau</a></li>
                    <li><a href=""><i class="las la-calendar"></i> Annee scolaire</a></li>
                </ul>
            </div>
        </div>
        <div class="body">
            <a href="ajout_classe.php" class="aj"><button class="ajout">ajouter un Classe</button></a>
            <table class="display-table">
               <thead>
               <tr>
                  <th>Nom</th>
                  <th>Niveaux</th>
                  <th>Action</th>
               </tr>
               </thead>
               <tr>
                  <td>CM1</td>
                  <td>Primaire</td>
                  <td>
                     <a href="" class="btn"> <i class="fas fa-edit"></i> edit </a>
                     <a href="" class="btn"> <i class="fas fa-trash"></i> delete </a>
                  </td>
               </tr>
            </table>
         </div>
        <div class="footer">
            <p>copyright @ 2022 by fadal ndiaye || all right reserved</p>
        </div>
    </div>
</body>
</html>