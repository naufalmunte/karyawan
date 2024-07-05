<?php
    $cnn = mysqli_connect('localhost','root','','webkaryawan'); 

         

    $id = $_POST['txtid'];
    $nama = $_POST['txtnama'];
    $alamat = $_POST['txtalamat'];
    $nohp = $_POST['txtnohp'];
    $simpan = $_POST['simpan'];
  

    /*
    $query = "select * from t";// memilih mengakses db_kampus */

    $sql = "INSERT INTO karyawan VALUES
    ('$id','$nama','$alamat','$nohp')";

    $simpan = mysqli_query($cnn,$sql);

    if($simpan){
        echo "data berhasil disimpan";
    }
    else{
        echo "data gagal disimpan";
    }

?>
