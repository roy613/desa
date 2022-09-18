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
        window.location.href = "<?php echo base_url() . 'be/hapus/usaha'; ?>/" + a;
      }
    });
  }

  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#usaha_nama').val(f);
    $('#usaha_nik').val(g);
    $('#usaha_jk').val(h);
    $('#usaha_tptlahir').val(i);
    $('#usaha_tgllahir').val(j);
    $('#usaha_pekerjaan').val(k);
    $('#usaha_alamat1').val(l);
    $('#usaha_alamat').val(m);
    $('#usaha_rt').val(n);
    $('#usaha_usaha').val(o);

    document.getElementById("usaha_jk").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#usaha_nama').val('');
    $('#usaha_nik').val('');
    $('#usaha_jk').val('');
    $('#usaha_tptlahir').val('');
    $('#usaha_tgllahir').val('');
    $('#usaha_pekerjaan').val('');
    $('#usaha_alamat').val('');
    $('#usaha_rt').val('');
    $('#usaha_usaha').val('');
    $('#usaha_alamat1').val('');
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

  function usaha_ceknik() {
    var target = document.getElementById("usaha_nik");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("usaha_notifnik").style.color = "red";
      document.getElementById("usaha_notifnik").innerHTML = c;
      document.getElementById("usaha_jk").disabled = true;

    } else {
      document.getElementById("usaha_jk").disabled = false;
      document.getElementById("usaha_notifnik").innerHTML = "";
    }
  }
</script>