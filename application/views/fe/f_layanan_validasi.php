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
</script>