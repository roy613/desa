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
        window.location.href = "<?php echo base_url() . 'be/hapus/pindah'; ?>/" + a;
      }
    });
  }

  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#pindah_nama').val(f);
    $('#pindah_nik').val(g);
    $('#pindah_jk').val(h);
    $('#pindah_tptlahir').val(i);
    $('#pindah_tgllahir').val(j);
    $('#pindah_kwn').val(k);
    $('#pindah_agama').val(l);
    $('#pindah_statuskwn').val(m);
    $('#pindah_pekerjaan').val(n);
    $('#pindah_pendidikan').val(o);
    $('#pindah_alamat').val(p);
    $('#pindah_jalan').val(q);
    $('#pindah_desa').val(r);
    $('#pindah_camat').val(s);
    $('#pindah_kab').val(t);
    $('#pindah_provinsi').val(u);
    $('#pindah_tglpindah').val(v);

    document.getElementById("pindah_jk").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#pindah_nama').val('');
    $('#pindah_nik').val('');
    $('#pindah_jk').val('');
    $('#pindah_tptlahir').val('');
    $('#pindah_tgllahir').val('');
    $('#pindah_kwn').val('');
    $('#pindah_agama').val('');
    $('#pindah_statuskwn').val('');
    $('#pindah_pekerjaan').val('');
    $('#pindah_pendidikan').val('');
    $('#pindah_alamat').val('');
    $('#pindah_jalan').val('');
    $('#pindah_desa').val('');
    $('#pindah_camat').val('');
    $('#pindah_kab').val('');
    $('#pindah_provinsi').val('');
    $('#pindah_tglpindah').val('');
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
</script>