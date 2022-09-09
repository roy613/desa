
<script>
  function hapust(a) {
    //  alert(a);
    Swal.fire({
      title: 'Perhatian !!!',
      text: "Apakah Anda Yakin Ingin Menghapus Data ini ?",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "<?php echo base_url() . 'be/hapus/ttd'; ?>/" + a;
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