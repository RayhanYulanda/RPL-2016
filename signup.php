<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  

  <body>


<div class="about">
  <div class="container">
    <section class="title-section">
      <center><h1 class="title-header"> Sign Up </h1></center>
    </section>
  </div>
</div>


  <div class="container-fluid">
  <div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
  <div class = "panel panel-default">
  <div class = "panel-body">
  <form method = 'POST' action='simpanabsen.php' enctype='multipart/form-data'>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name='nama' id='nama' placeholder="Nama">
          </div>

          <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
              <input class="form-control" input type="email" id="email" class="input-xlarge" name="email" placeholder="email">
            </div>
          </div>

          <div class="control-group">
           <label class="control-label" for="password">Password</label>
            <div class="controls">
             <input class="form-control" input type="text" id="password" class="input-medium" name="password" placeholder="password">
            </div> 
          </div>
		  
		  <div class="control-group">
            <label class="control-label" for="no.telp">No. Telp</label>
            <div class="controls">
              <input class="form-control" input type="number" id="notelp" class="input-xlarge" name="notelp" placeholder="No. Telp">
            </div>
          </div>
		  
		   <div class="control-group">
            <label class="control-label" for="alamat">Alamat</label>
            <div class="controls">
              <input class="form-control" input type="text" id="alamat" class="input-xlarge" name="alamat" placeholder="Alamat">
            </div>
          </div>
		  
		  <div class="control-group">
            <label class="control-label" for="ttl">TTL</label>
            <div class="controls">
              <input class="form-control" input type="text" id="tempat" class="input-xlarge" name="tempat" placeholder="Tempat">
			  <input class="form-control" input type="date" id="tgl" class="input-xlarge" name="tgl" placeholder="Tanggal Lahir">
            </div>
          </div>

<div class="form-group">
    <div class="modal-footer">
      <a class="btn btn-danger" href="profile.php" aria-hidden="true">Batal</a>
      <input type="submit" value="Sign Up" class="btn btn-success" id="submit">
    </div>
</div>
  </form>
  </div>
  </div>
  <br/>
  <br/>
  </div>
  <div class="col-md-3">
  </div>
  </div>
  </div>


  </body>
</html>