<script>
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
   
</script>