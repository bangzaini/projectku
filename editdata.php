<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_pegawai WHERE id_peserta = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA
            </div>
            <div class="card-body">
              <form action="updatedata.php" method="POST">
                
                <div class="form-group">
                  <label>PROJETNAME</label>
                  <input type="text" name="PROJETNAME" value="<?php echo $row['PROJETNAME'] ?>" placeholder="Masukkan PROJETNAME" class="form-control”>
                  <input type="hidden" name="id_peserta" value="<?php echo $row['id_peserta'] ?>">
                </div>

                <div class="form-group">
                  <label>CLIENT</label>
                  <input type="text" name="CLIENT" value="<?php echo $row['CLIENT'] ?>" placeholder="Masukkan CLIENT" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <textarea class="form-control" name="NAMA" placeholder="Masukkan NAMA" rows="4"><?php echo $row['NAMA'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>EMAIL</label>
                  <textarea class="form-control" name="EMAIL" placeholder="Masukkan EMAIL" rows="4"><?php echo $row['EMAIL'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>POTO</label>
                  <textarea class="form-control" name="POTO" placeholder="Masukkan POTO" rows="4"><?php echo $row['POTO'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>START DATE</label>
                  <textarea class="form-control" name="STARTDATE" placeholder="Masukkan STARTDATE" rows="4"><?php echo $row['STARTDATE'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>END DATE</label>
                  <textarea class="form-control" name="ENDDATE" placeholder="Masukkan ENDDATE" rows="4"><?php echo $row['ENDDATE'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>PROGRESS</label>
                  <textarea class="form-control" name="PROGRESS" placeholder="Masukkan PROGRESS" rows="4"><?php echo $row['PROGRESS'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>