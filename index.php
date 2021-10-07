<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajar Form Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="Assets/main.js"></script>
</head>
<body>
    <div class="container">
        <center><h1>Form Kelayakan Kuliah Offline</h1></center>
        <form name="formPendaftaran" action="Assets/daftar.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Nama lengkap" class="form-control" required maxlength="40" minlength="3">
            </div>
            <div class="form-group">
                <label>NRP</label>
                <input type="number" name="nrp" placeholder="NRP" class="form-control" required maxlength="14" minlength="10">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Aktif" class="form-control">
                <small id="emailHelp" class="form-text text-muted">Email Akan Digunakan Untuk Mengirimkan Notifikasi.</small>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea placeholder="Masukkan alamat" name="alamat" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                        <option value="0">Pilih Jurusan</option>
                        <option value="1">Jurusan Informatika</option>
                        <option value="2">Jurusan Teknik Komputer Jaringan</option>
                        <option value="3">Jurusan Multimedia</option>
                        <option value="4">Jurusan Sistem Informasi</option>
                        <option value="5">Jurusan Teknologi Informasi</option>
                    </select>
            </div>

            <div class="form-group">
                <label>Pilih Status Vaksin</label>
                <select name="vaksin" class="form-control">
                    <option value="0">Pilih Status Vaksin</option>
                    <option value="1">Vaksin Pertama</option>
                    <option value="2">Vaksin Kedua</option>
                </select>
            </div>
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>
    
</body>
</html>