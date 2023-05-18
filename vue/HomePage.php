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
    <?php require_once "Dashboard.php" ?>
        <div class="body">
            <a href="ajoutEtuidant.php" class="aj"><button class="ajout">ajouter un éleve</button></a>
            <input type="search" name="" id="" class="search" placeholder="search">
            <table class="display-table">
               <thead>
               <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Classe</th>
                  <th>Niveau</th>
                  <th>Action</th>
               </tr>
               </thead>
               <tr>
                  <td>Ndiaye</td>
                  <td>AMI NDIAYE</td>
                  <td>CP</td>
                  <td>primaire</td>
                  <td>
                     <a href="" class="btn"> <i class="fas fa-edit"></i> edit </a>
                     <a href="" class="btn"> <i class="fas fa-trash"></i> delete </a>
                  </td>
               </tr>
               <tr>
                  <td>Ndiaye</td>
                  <td>AMI NDIAYE</td>
                  <td>CP</td>
                  <td>primaire</td>
                  <td>
                     <a href="" class="btn"> <i class="fas fa-edit"></i> edit </a>
                     <a href="" class="btn"> <i class="fas fa-trash"></i> delete </a>
                  </td>
               </tr>
            </table>
         </div>
         <?php require_once "footer.php"?>
    </div>
</body>
</html>