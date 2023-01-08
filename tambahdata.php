<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
  </head>
  

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH Data
            </div>
            <div class="card-body">
              <form action="simpandata.php" method="POST">
                
                <div class="form-group">
                  <label>PROJET NAME</label>
                  <input type="text" name="PROJETNAME" placeholder="Masukkan PROJET NAME" class="form-control">
                </div>

                <div class="form-group">
                  <label>CLIENT</label>
                  <input type="text" name="CLIENT" placeholder="Masukkan CLIENT" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="NAMA" placeholder="Masukkan NAMA" class="form-control">
                </div>

                <div class="form-group">
                  <label>EMAIL</label>
                  <input type="text" name="EMAIL" placeholder="Masukkan EMAIL" class="form-control">
                </div>

                <div class="form-group">
                  <label>POTO</label>
                  <input type="file" name="POTO" placeholder="Masukkan POTO" class="form-control">
                </div>

                <div class="form-group">
                  <label>START DATE</label>
                  <input type="text" name="STARTDATE" placeholder="Masukkan STARTDATE" class="form-control">
                </div>

                <div class="form-group">
                  <label>END DATE</label>
                  <input type="text" name="ENDDATE" placeholder="Masukkan ENDDATE" class="form-control">
                </div>

                <div class="form-group">
                  <label>PROGRESS</label>
                  <input type="text" name="PROGRESS" placeholder="Masukkan PROGRESS" class="form-control">
                </div>
 
                <button type="submit" class="btn btn-success">SIMPAN</button>
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