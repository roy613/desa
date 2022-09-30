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
        window.location.href = "<?php echo base_url() . 'be/hapus/skck'; ?>/" + a;
      }
    });
  }
  function arsip(a) {
        $('#id_1').val(a);
        $('#arsip').modal('show');
    }
    
  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#skck_nama').val(f);
    $('#skck_nik').val(g);
    $('#skck_jk').val(h);
    $('#skck_tptlahir').val(i);
    $('#skck_tgllahir').val(j);
    $('#skck_kwn').val(k);
    $('#skck_agama').val(l);
    $('#skck_statuskwn').val(m);
    $('#skck_pekerjaan').val(n);
    $('#skck_alamat').val(o);
    $('#skck_urus').val(p);
    document.getElementById("skck_jk").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#tgl_surat').val('');
    $('#ttd').val('');
    $('#jabttd').val('');
    $('#kodettd').val('');

    $('#skck_nama').val('');
    $('#skck_nik').val('');
    $('#skck_jk').val('');
    $('#skck_tptlahir').val('');
    $('#skck_tgllahir').val('');
    $('#skck_kwn').val('');
    $('#skck_agama').val('');
    $('#skck_statuskwn').val('');
    $('#skck_pekerjaan').val('');
    $('#skck_alamat').val('');
    $('#skck_urus').val('');
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

  function skck_ceknik() {
    var target = document.getElementById("skck_nik");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("skck_notifnik").style.color = "red";
      document.getElementById("skck_notifnik").innerHTML = c;
      document.getElementById("skck_jk").disabled = true;

    } else {
      document.getElementById("skck_jk").disabled = false;
      document.getElementById("skck_notifnik").innerHTML = "";
    }
  }
</script>