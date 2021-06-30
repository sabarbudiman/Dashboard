<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Penumpang</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID Tiket</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="Id Tiket" name="ID_TIKET" placeholder="Id Tiket" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penumpang</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="Nama Penumpang" name="NAMA_CST" placeholder="Nama Penumpang">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat Penumpang</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="Alamat Penumpang" name="ALAMAT_CST" placeholder="Alamat Penumpang">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-penumpang" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO costumer (ID_TIKET, NAMA_CST, ALAMAT_CST) VALUES (
        '".$_POST['ID_TIKET']."',
        '".$_POST['NAMA_CST']."',
        '".$_POST['ALAMAT_CST']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-penumpang';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-penumpang';
          }
      })</script>";
    }}
     //selesai proses simpan data
