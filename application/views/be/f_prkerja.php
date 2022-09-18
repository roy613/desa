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
        window.location.href = "<?php echo base_url() . 'be/hapus/prekomkerja'; ?>/" + a;
      }
    });
  }

  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n) {
    $('#id').val(a);
    $('#kerja_nama').val(b);
    $('#kerja_nik').val(c);
    $('#kerja_jk').val(d);
    $('#kerja_tptlahir').val(e);
    $('#kerja_tgllahir').val(f);
    $('#kerja_agama').val(g);
    $('#kerja_pekerjaan').val(h);
    $('#kerja_alamat').val(i);
    $('#kerja_perusahaan').val(j);
    $('#tgl_surat').val(k);
    $('#ttd').val(l);
    $('#jabttd').val(m);
    $('#kodettd').val(n);
    document.getElementById("kerja_jk").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#kerja_nama').val('');
    $('#kerja_nik').val('');
    $('#kerja_jk').val('');
    $('#kerja_tptlahir').val('');
    $('#kerja_tgllahir').val('');
    $('#kerja_agama').val('');
    $('#kerja_pekerjaan').val('');
    $('#kerja_alamat').val('');
    $('#kerja_perusahaan').val('');
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

  function kerja_ceknik() {
    var target = document.getElementById("kerja_nik");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("kerja_notifnik").style.color = "red";
      document.getElementById("kerja_notifnik").innerHTML = c;
      document.getElementById("kerja_jk").disabled = true;

    } else {
      document.getElementById("kerja_jk").disabled = false;
      document.getElementById("kerja_notifnik").innerHTML = "";
    }
  }
</script>