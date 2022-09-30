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
        window.location.href = "<?php echo base_url() . 'be/hapus/domisili'; ?>/" + a;
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

    $('#domisili_nama').val(f);
    $('#domisili_jk').val(g);
    $('#domisili_tptlahir').val(h);
    $('#domisili_tgllahir').val(i);
    $('#domisili_kewarganegaraan').val(j);
    $('#domisili_agama').val(k);
    $('#domisili_nik').val(l);
    $('#domisili_statuskwn').val(m);
    $('#domisili_pekerjaan').val(n);
    $('#domisili_alamat').val(o);
    $('#domisili_guna').val(p);

    document.getElementById("domisili_statuskwn").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#domisili_nama').val('');
    $('#domisili_jk').val('');
    $('#domisili_tptlahir').val('');
    $('#domisili_tgllahir').val('');
    $('#domisili_kewarganegaraan').val('');
    $('#domisili_agama').val('');
    $('#domisili_nik').val('');
    $('#domisili_statuskwn').val('');
    $('#domisili_pekerjaan').val('');
    $('#domisili_alamat').val('');
    $('#domisili_guna').val('');
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

  function domisili_ceknik() {
    var target = document.getElementById("domisili_nik");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("domisili_notifnik").style.color = "red";
      document.getElementById("domisili_notifnik").innerHTML = c;
      document.getElementById("domisili_statuskwn").disabled = true;

    } else {
      document.getElementById("domisili_statuskwn").disabled = false;
      document.getElementById("domisili_notifnik").innerHTML = "";
    }
  }
</script>