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
        window.location.href = "<?php echo base_url() . 'be/hapus/csurat'; ?>/" + a;
      }
    });
  }

  function arsip(a) {
        $('#id_1').val(a);
        $('#arsip').modal('show');
    }
  function edit(a, b, c, d, e, f, g, h) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#csurat_nama').val(f);
    $('#csurat_no').val(g);
    $('#csurat_jenis').val(h);

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#csurat_nama').val('');
    $('#csurat_no').val('');
    $('#csurat_jenis').val('');
    $('#tgl_surat').val('');

    $('#ttd').val('');
    $('#jabttd').val('');
    $('#kodettd').val('');
  }

  function ttd_fungsi() {
    var peg = document.getElementById("ttd").value;

    $.ajax({
      url: "<?php echo base_url('be/proses/ttd_periksa') ?>",
      method: "POST",
      data: {
        peg: peg
      },
      async: false,
      dataType: 'json',
      success: function(data) {
        // alert(data[0].mp_nip);
        document.getElementById("jabttd").value = data[0].tt_jabatan;
        document.getElementById("kodettd").value = data[0].tt_ket;
      }
    });
  }

</script>