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
    if (document.forms["formPendaftaran"]["nrp"].value == "") {
        alert("Masukkan NRP.");
        document.forms["formPendaftaran"]["nrp"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["vaksin"].selectedIndex < 1) {
        alert("Pilih Jurusan.");
        document.forms["formPendaftaran"]["vaksin"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["vaksin"].selectedIndex < 1) {
        alert("Pilih Status Vaksin.");
        document.forms["formPendaftaran"]["vaksin"].focus();
        return false;
    }
}