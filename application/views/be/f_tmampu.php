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
        window.location.href = "<?php echo base_url() . 'be/hapus/tmampu'; ?>/" + a;
      }
    });
  }

  function arsip(a) {
        $('#id_1').val(a);
        $('#arsip').modal('show');
    }
  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#tmampu_nama').val(f);
    $('#tmampu_nik').val(g);
    $('#tmampu_jk').val(h);
    $('#tmampu_tptlahir').val(i);
    $('#tmampu_tgllahir').val(j);
    $('#tmampu_agama').val(k);
    $('#tmampu_kwn').val(l);
    $('#tmampu_statuskwn').val(m);
    $('#tmampu_pekerjaan').val(n);
    $('#tmampu_alamat').val(o);
    document.getElementById("tmampu_jk").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#tmampu_nama').val('');
    $('#tmampu_nik').val('');
    $('#tmampu_jk').val('');
    $('#tmampu_tptlahir').val('');
    $('#tmampu_tgllahir').val('');
    $('#tmampu_agama').val('');
    $('#tmampu_kwn').val('');
    $('#tmampu_statuskwn').val('');
    $('#tmampu_pekerjaan').val('');
    $('#tmampu_alamat').val('');
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
  function tmampu_ceknik() {
        var target = document.getElementById("tmampu_nik");
        var batas_karakter = 16;
        var a = target.value.length;
        var b = "NIK Harus 16 Digit! Anda menginput ";
        var d = " karakter"
        var c = b + a + d;


        if (target.value.length !== batas_karakter) {
            document.getElementById("tmampu_notifnik").style.color = "red";
            document.getElementById("tmampu_notifnik").innerHTML = c;
            document.getElementById("tmampu_jk").disabled = true;

        } else {
            document.getElementById("tmampu_jk").disabled = false;
            document.getElementById("tmampu_notifnik").innerHTML = "";
        }
    }
</script>