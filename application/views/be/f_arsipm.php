<script>
  function hapus(a) {
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
        window.location.href = "<?php echo base_url() . 'be/hapus/arsipm'; ?>/" + a;
      }
    });
  }


  function edit(a, b) {
    $('#id').val(a);

    $('#nama').val(b);

    $('#arsip').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#nama').val('');
  }
</script>