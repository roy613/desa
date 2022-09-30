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
        window.location.href = "<?php echo base_url() . 'be/hapus/lahir'; ?>/" + a;
      }
    });
  }

  function arsip(a) {
        $('#id_1').val(a);
        $('#arsip').modal('show');
    }

  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#lahir_nama').val(f);
    $('#lahir_jk').val(g);
    $('#lahir_tptlahir').val(h);
    $('#lahir_tgllahir').val(i);
    $('#lahir_agama').val(j);
    $('#lahir_alamat').val(k);
    $('#lahir_anak_ke').val(l);
    $('#lahir_nama_a').val(m);
    $('#lahir_tptlahir_a').val(n);
    $('#lahir_tgllahir_a').val(o);
    $('#lahir_agama_a').val(p);
    $('#lahir_pekerjaan_a').val(q);
    $('#lahir_alamat_a').val(r);
    $('#lahir_nama_b').val(s);
    $('#lahir_tptlahir_b').val(t);
    $('#lahir_tgllahir_b').val(u);
    $('#lahir_agama_b').val(v);
    $('#lahir_pekerjaan_b').val(w);
    $('#lahir_alamat_b').val(x);


    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#lahir_nama').val('');
    $('#lahir_jk').val('');
    $('#lahir_tptlahir').val('');
    $('#lahir_tgllahir').val('');
    $('#lahir_agama').val('');
    $('#lahir_alamat').val('');
    $('#lahir_anak_ke').val('');
    $('#lahir_nama_a').val('');
    $('#lahir_tptlahir_a').val('');
    $('#lahir_tgllahir_a').val('');
    $('#lahir_agama_a').val('');
    $('#lahir_pekerjaan_a').val('');
    $('#lahir_alamat_a').val('');
    $('#lahir_nama_b').val('');
    $('#lahir_tptlahir_b').val('');
    $('#lahir_tgllahir_b').val('');
    $('#lahir_agama_b').val('');
    $('#lahir_pekerjaan_b').val('');
    $('#lahir_alamat_b').val('');
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