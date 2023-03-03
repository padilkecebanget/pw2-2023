<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $fruits = [
    ["id" => 01 ,"name" => "Alpukat" , "color" => "Hijau" , "stock" => 10 , "price" => 20000 , "description" => "Merawat Kesehatan Jantung"],
    ["id" => 02 , "name" => "Strawberry" , "color" => "Merah" , "stock" => 20 , "price" => 25000 , "description" => "Menjaga Kesehatan Rambut"],
    ["id" => 03 ,"name" => "Jeruk" , "color" => "Orange" , "stock" => 30 , "price" => 30000 ,"description" => "Mengurangi Resiko Diabetes"],
    ["id" => 04 , "name" => "Durian" , "color" => "Hijau" , "stock" => 40 ,"price" => 28000 ,"description" => "Menjaga Kesehatan Pencernaan"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <br>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

          foreach($fruits as $fruit){ ?>

            <tr>
              <td> <?php echo $fruit['id']?> </td>
              <td> <?php echo $fruit['name']?> </td>
              <td> <?php echo $fruit['color']?> </td>
              <td> <?php echo $fruit['stock']?> </td>
              <td> <?php echo $fruit['price']?> </td>
              <td> <?php echo $fruit['description']?> </td>
  
          </tr>
          <?php } ?>


         
        
      </tbody>
    </table>
  </div>
</body>
</html>