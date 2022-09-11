<script>
    function kerja_ceknik() {
        var target = document.getElementById("kerja_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("kerja_notifnik").style.color = "red";
            document.getElementById("kerja_notifnik").innerHTML = c;
            document.getElementById("kerja_jk").disabled = true;

        } else {
            document.getElementById("kerja_jk").disabled = false;
            document.getElementById("kerja_notifnik").innerHTML = "";
        }
    }
    function usaha_ceknik() {
        var target = document.getElementById("usaha_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("usaha_notifnik").style.color = "red";
            document.getElementById("usaha_notifnik").innerHTML = c;
            document.getElementById("usaha_jk").disabled = true;

        } else {
            document.getElementById("usaha_jk").disabled = false;
            document.getElementById("usaha_notifnik").innerHTML = "";
        }
    }
    function skck_ceknik() {
        var target = document.getElementById("skck_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("skck_notifnik").style.color = "red";
            document.getElementById("skck_notifnik").innerHTML = c;
            document.getElementById("skck_jk").disabled = true;

        } else {
            document.getElementById("skck_jk").disabled = false;
            document.getElementById("skck_notifnik").innerHTML = "";
        }
    }
    function tmampu_ceknik() {
        var target = document.getElementById("tmampu_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("tmampu_notifnik").style.color = "red";
            document.getElementById("tmampu_notifnik").innerHTML = c;
            document.getElementById("tmampu_jk").disabled = true;

        } else {
            document.getElementById("tmampu_jk").disabled = false;
            document.getElementById("tmampu_notifnik").innerHTML = "";
        }
    }
    function hilang_ceknik() {
        var target = document.getElementById("hilang_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("hilang_notifnik").style.color = "red";
            document.getElementById("hilang_notifnik").innerHTML = c;
            document.getElementById("hilang_tptlahir").disabled = true;

        } else {
            document.getElementById("hilang_tptlahir").disabled = false;
            document.getElementById("hilang_notifnik").innerHTML = "";
        }
    }
    function pindah_ceknik() {
        var target = document.getElementById("pindah_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("pindah_notifnik").style.color = "red";
            document.getElementById("pindah_notifnik").innerHTML = c;
            document.getElementById("pindah_jk").disabled = true;

        } else {
            document.getElementById("pindah_jk").disabled = false;
            document.getElementById("pindah_notifnik").innerHTML = "";
        }
    }
    function pkerja_ceknik() {
        var target = document.getElementById("pkerja_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("pkerja_notifnik").style.color = "red";
            document.getElementById("pkerja_notifnik").innerHTML = c;
            document.getElementById("pkerja_jk").disabled = true;

        } else {
            document.getElementById("pkerja_jk").disabled = false;
            document.getElementById("pkerja_notifnik").innerHTML = "";
        }
    }
    function domisili_ceknik() {
        var target = document.getElementById("domisili_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("domisili_notifnik").style.color = "red";
            document.getElementById("domisili_notifnik").innerHTML = c;
            document.getElementById("domisili_statuskwn").disabled = true;

        } else {
            document.getElementById("domisili_statuskwn").disabled = false;
            document.getElementById("domisili_notifnik").innerHTML = "";
        }
    }

    function proposal_validasi() {
        var inputFile = document.getElementById('proposal_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("proposal_notif").style.color = "red";
            document.getElementById("proposal_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("proposal_notif").style.color = "red";
            document.getElementById("proposal_notif").innerHTML = "";
        }
    }

    function domisili_validasi() {
        var inputFile = document.getElementById('domisili_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("domisili_notif").style.color = "red";
            document.getElementById("domisili_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("domisili_notif").style.color = "red";
            document.getElementById("domisili_notif").innerHTML = "";
        }
    }
    function kerja_validasi() {
        var inputFile = document.getElementById('kerja_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("kerja_notif").style.color = "red";
            document.getElementById("kerja_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("kerja_notif").style.color = "red";
            document.getElementById("kerja_notif").innerHTML = "";
        }
    }
    function pkerja_validasi() {
        var inputFile = document.getElementById('pkerja_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("pkerja_notif").style.color = "red";
            document.getElementById("pkerja_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("kerja_notif").style.color = "red";
            document.getElementById("pkerja_notif").innerHTML = "";
        }
    }
    function lahir_validasi() {
        var inputFile = document.getElementById('lahir_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("lahir_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("lahir_notif").innerHTML = "";
        }
    }
    function usaha_validasi() {
        var inputFile = document.getElementById('usaha_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("usaha_notif").style.color = "red";
            document.getElementById("usaha_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("usaha_notif").innerHTML = "";
        }
    }
    function skck_validasi() {
        var inputFile = document.getElementById('skck_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("skck_notif").style.color = "red";
            document.getElementById("skck_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("skck_notif").innerHTML = "";
        }
    }
    function tmampu_validasi() {
        var inputFile = document.getElementById('tmampu_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("tmampu_notif").style.color = "red";
            document.getElementById("tmampu_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("tmampu_notif").innerHTML = "";
        }
    }
    function hilang_validasi() {
        var inputFile = document.getElementById('hilang_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("hilang_notif").style.color = "red";
            document.getElementById("hilang_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("hilang_notif").innerHTML = "";
        }
    }
    function pindah_validasi() {
        var inputFile = document.getElementById('pindah_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("pindah_notif").style.color = "red";
            document.getElementById("pindah_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("pindah_notif").innerHTML = "";
        }
    }
    function mati_validasi() {
        var inputFile = document.getElementById('mati_filegambar');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;

        if (!ekstensiOk.exec(pathFile)) {
            document.getElementById("mati_notif").style.color = "red";
            document.getElementById("mati_notif").innerHTML = "Silahkan Upload File dengan format jpeg atau jpg atau png";
            inputFile.value = '';
            return false;
        } else {
            // document.getElementById("lahir_notif").style.color = "red";
            document.getElementById("mati_notif").innerHTML = "";
        }
    }
</script>