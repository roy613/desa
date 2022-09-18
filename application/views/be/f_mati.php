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
        window.location.href = "<?php echo base_url() . 'be/hapus/mati'; ?>/" + a;
      }
    });
  }

  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#mati_nama').val(f);
    $('#mati_tptlahir').val(g);
    $('#mati_tgllahir').val(h);
    $('#mati_kwn').val(i);
    $('#mati_agama').val(j);
    $('#mati_pekerjaan').val(k);
    $('#mati_alamat').val(l);
    $('#mati_tglmeninggal').val(m);
    $('#mati_pukul').val(n);
    $('#mati_tptmeninggal').val(o);


    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#mati_nama').val('');
    $('#mati_tptlahir').val('');
    $('#mati_tgllahir').val('');
    $('#mati_kwn').val('');
    $('#mati_agama').val('');
    $('#mati_pekerjaan').val('');
    $('#mati_alamat').val('');
    $('#mati_tglmeninggal').val('');
    $('#mati_pukul').val('');
    $('#mati_tptmeninggal').val('');
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