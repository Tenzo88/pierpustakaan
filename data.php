<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Toko Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

    <?php
    //tambahkan dbconnect
    include('dbconnect.php');

    //query
    $query = "SELECT * FROM buku";

    $result = mysqli_query($conn , $query);

    ?>

    <div class="container bg-info mt-5" style="padding-top: 20px; padding-bottom: 20px;">
      <h3>Crud APP Toko Buku</h3>
      <hr>
      <div class="row">
      <div class="col-sm-4">
        <h3>Form Tambah Buku</h3>
        <form role="form" action="insert.php" method="post">

        <div class="form-group">
          <label>Id Buku</label>
          <input type="text" name="id_bk" class="form-control">
        </div>

        <div class="form-group">
          <label>Judul Buku</label>
          <input type="text" name="judul_bk" class="form-control">
        </div>
        <div class="form-group">
          <label>Penerbit Buku</label>
          <input type="text" name="terbit_bk" class="form-control">
        </div>
        <div class="form-group">
          <label>Genre Buku</label>
          <input type="text" name="genre_bk" class="form-control">
        </div>
        <div class="form-group">
          <label>Harga Buku</label>
          <input type="text" name="harga_bk" class="form-control">
        </div>
        <button type="submit" class="btn btn-success btn-success mb-3">Tambah Buku</button>   
          <div class="ml-3 mr-3">
            <a href="logout.php" class="btn btn-danger">Log Out</a>
          </div>  
        </form>
        
      </div>
      <div class="col-sm-8">
        <h3>Tabel Daftar Buku</h3>
        <table class="table table-striped table-hover dtabel">
        <thead>
          <tr>
          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">No</th>

          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">Id Buku</th>

          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">Judul Buku</th>
          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">Penerbit Buku</th>
          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">Genre Buku</th>
          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">Harga Buku</th>
          <th class="align-middle text-black text-center" scope="col" style="background-color: #e5ff18">Aksi</th>
          </tr>
        </thead>
        <tbody> 
          
          <?php
          $no = 1;  
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
          <td class="align-middle text-black text-center"><?php echo $no++; ?></td>

          <td class="align-middle text-black text-center"><?php echo $row['id_buku']; ?></td>

          <td class="align-middle text-black text-center"><?php echo $row['judul_buku']; ?></td>
          <td class="align-middle text-black text-center"><?php echo $row['penerbit_buku']; ?></td>
          <td class="align-middle text-black text-center"><?php echo $row['genre_buku']; ?></td>
          <td class="align-middle text-black text-center"><?php echo $row['harga_buku']; ?></td>
          <td class="align-middle text-black text-center">
            <a href="editform.php?id=<?php echo $row['id_buku'];?>" class="btn btn-warning" role="button">Edit</a>
            <a href="delete.php?id=<?php echo $row['id_buku']?>" class="btn btn-danger" role="button">Delete</a>
          </td>
          </tr>

          <?php
          }
          mysqli_close($conn); 
          ?>
        </tbody>
        </table>
      </div>
      </div>
    </div>
    </body>

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
      $('.dtabel').DataTable();
    } );
    </script>

    </html>
