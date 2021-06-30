<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM costumer WHERE ID_TIKET='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <input type='hidden' class="form-control" name="ID_TIKET" value="<?php echo $data_cek['ID_TIKET']; ?>"
             readonly/>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Tiket</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ID_TIKET" name="ID_TIKET" value="<?php echo $data_cek['ID_TIKET']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Penumpnag</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="NAMA_CST" name="NAMA_CST" value="<?php echo $data_cek['NAMA_CST']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat Penumpang</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ALAMAT_CST" name="ALAMAT_CST" value="<?php echo $data_cek['ALAMAT_CST']; ?>"
                    />
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
            <a href="?page=data-penumpang" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE costumer SET
        NAMA_CST='".$_POST['NAMA_CST']."',
        ALAMAT_CST='".$_POST['ALAMAT_CST']."'
        WHERE ID_TIKET='".$_POST['ID_TIKET']."'";


    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-penumpang';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-penumpang';
        }
      })</script>";
    }}
?>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>