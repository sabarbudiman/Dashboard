<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Penumpang</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-penumpang" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Tiket</th>
						<th>Nama Penumpang</th>
						<th>Alamat Penumpang</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from costumer");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['ID_TIKET']; ?>
						</td>
						<td>
							<?php echo $data['NAMA_CST']; ?>
						</td>
						<td>
							<?php echo $data['ALAMAT_CST']; ?>
						</td>

						<td>
							<a href="?page=view-penumpang&kode=<?php echo $data['ID_TIKET']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-penumpang&kode=<?php echo $data['ID_TIKET']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-penumpang&kode=<?php echo $data['ID_TIKET']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->