<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from costumer WHERE ID_TIKET='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Penumpang</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>ID Tiket</b>
							</td>
							<td>:
								<?php echo $data_cek['ID_TIKET']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['NAMA_CST']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['ALAMAT_CST']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-penumpang" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-penumpang.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

</div>