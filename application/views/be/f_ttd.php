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

  function ettd(a, b, c, d) {
    $('#id').val(a);
    $('#nama').val(b);
    $('#jab').val(c);
    $('#status').val(d);

    $('#m_ttd').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#nama').val("");
    $('#jab').val("");
    $('#status').val("");
  }
</script>