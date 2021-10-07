<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajar Form Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <center><h1>Selamat anda berhasil submit</h1></center>
    <center>
        <iframe width="500" height="500"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1">
        </iframe>
    </center>
    <center><a href="/index.php" class="btn btn-primary">Kembali</a></center>
    <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["nama"].value == "") {
                alert("Nama Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["nama"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
                alert("Email Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["jurusan"].selectedIndex < 1) {
                alert("Pilih Jurusan.");
                document.forms["formPendaftaran"]["jurusan"].focus();
                return false;
            }
        }
    </script>
</body>
</html>
