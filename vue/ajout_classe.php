<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        html{
            font-size: 90%;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="profil">
            <img src="../image/profil.png" alt="">
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
    <div class="admin-product-form-container">

        <form action="" method="post" enctype="multipart/form-data">
           <h3>Ajouter un eleve</h3>
           <input type="text" placeholder="entrer le nom de la classe" name="" class="box">
           <select name="" id="" class="box">
            <option value="">Primaire</option>
            <option value="">Secondaire Inferieur</option>
            <option value="">Secondaire superieur</option>
           </select>
           <input type="submit" class="btn" name="Ajouter" value="Ajouter">
        </form>
  
     </div>
     <div class="footer">
        <p>copyright @ 2022 by fadal ndiaye || all right reserved</p>
    </div>
</body>
</html>