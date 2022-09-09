<script>
  function cek1() {
    var target = document.getElementById("pass1");
    var batas = 6;
    var a = target.value.length;
    var b = "Password minimal 6 karakter! Anda Baru Menginput ";
    var c = " Karakter";
    var d = b + a + c;

    if (a < batas) {
      document.getElementById("npass1").innerHTML = d;
      document.getElementById("password").disabled = true;
      document.getElementById("status").disabled = true;
      document.getElementById("password").value = "";
      document.getElementById("npass2").innerHTML = "";
    } else {
      document.getElementById("npass1").innerHTML = "";
      document.getElementById("password").disabled = false;
      document.getElementById("status").disabled = false;
    }
  }

  function cek2() {
    var a = document.getElementById("pass1").value;
    var b = document.getElementById("password").value;

    if (a != b) {
      document.getElementById("npass2").innerHTML = "Password yang anda ketik tidak sama";
      document.getElementById("tombol1").disabled = true;
      document.getElementById("status").disabled = true;
    } else {
      document.getElementById("npass2").innerHTML = "";
      document.getElementById("tombol1").disabled = false;
      document.getElementById("status").disabled = false;
    }
  }
</script>
<script>
  function hapusp(a) {
    //  alert(a);
    Swal.fire({
      title: 'Perhatian !!!',
      text: "Apakah Anda Yakin Ingin Menghapus Data Pengguna ini ?",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "<?php echo base_url() . 'be/hapus/pengguna'; ?>/" + a;
      }
    });
  }

  function empty1() {
   
    $('#username').val("");
    $('#pass1').val("");
    $('#password').val("");
    $('#status').val("");
    document.getElementById("password").disabled = true;
    document.getElementById("status").disabled = true;
  }
</script>