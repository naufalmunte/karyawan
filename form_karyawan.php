<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <table >
        
    <div class="container">
        <div class="p-2 m-4">
        <h1 class="text-center" >Form Input Karyawan</h1>
        </div>
        <form action="proses.php" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Id Karyawan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan ID Karyawan" name="txtid">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Karyawan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Karyawan" name="txtnama">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" name="txtalamat">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No Hp</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan No Hp" name="txtnohp">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-secondary" name="simpan">Simpan</button>
    </form>
    </div>
    
    </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>