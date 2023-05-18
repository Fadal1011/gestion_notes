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
    <?php require_once "Dashboard.php" ?>
    <div class="admin-product-form-container">

        <form action="" method="post" enctype="multipart/form-data">
           <h3>Ajouter un classe</h3>
           <input type="text" placeholder="entrer le nom de la classe" name="" class="box">
           <select name="" id="" class="box">
            <option value="">Primaire</option>
            <option value="">Secondaire Inferieur</option>
            <option value="">Secondaire superieur</option>
           </select>
           <input type="submit" class="btn" name="Ajouter" value="Ajouter">
        </form>
  
     </div>
     <?php require_once "footer.php"?>
</body>
</html>