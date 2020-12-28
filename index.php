<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Surat Dinas Pemerintah</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Aplikasi Surat Dinas Pemerintah</h1>

    <!-- Tabel --> 
    <div class="card mt-3">
    <div class="card-header">
        Kirim
    </div>
    <div class="card-body">
        <form method="post" action=" ">
                        <div class="form-group">
                        <label>Unit Kerja</label>
                        <select class="form-control" name="redaksi">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
    </div>
                        <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control"required>
     </div>
                        <div class="form-group">
                        <label>Pegawai</label>
                        <input type="text" name="pegawai" class="form-control"required>
     </div>
                        <div class="form-group">
                        <label>Redaksi</label>
                        <select class="form-control" name="redaksi">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
    
                    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>

        </form>
     </div>    
    </div>
    <!-- Tabel --> 

    <!-- Form --> 
    <div class="card mt-3">
	  <div class="card-body mt-3">
	  	<table class="table table-bordered table-striped">
	  		<tr>
	  			<th>#</th>
	  			<th>Jabatan</th>
	  			<th>Pegawai</th>
	  			<th>Redaksi</th>
	  			<th>Hapus</th>
	  		</tr>
	  		<tr>
	  			<td></td>
	  			<td></td>
	  			<td></td>
	  			<td></td>
	  			<td>
	  				<a href="#" class="btn btn-danger"> Hapus </a>
	  			</td>
	  		</tr>
	  	</table>
	    
	  </div>
	</div>
	<!-- Form -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>