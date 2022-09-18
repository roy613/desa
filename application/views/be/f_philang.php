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
        window.location.href = "<?php echo base_url() . 'be/hapus/philang'; ?>/" + a;
      }
    });
  }

  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    $('#hilang_nama').val(f);
    $('#hilang_nik').val(g);
    $('#hilang_tptlahir').val(h);
    $('#hilang_tgllahir').val(i);
    $('#hilang_agama').val(j);
    $('#hilang_pekerjaan').val(k);
    $('#hilang_kwn').val(l);
    $('#hilang_alamat').val(m);
    $('#hilang_barang').val(n);
    $('#hilang_tglhilang').val(o);
    
    document.getElementById("hilang_tptlahir").disabled = false;

    $('#m_surat').modal('show');
  }

  function empty1() {

    $('#id').val("");
    $('#hilang_nama').val('');
    $('#hilang_nik').val('');
    $('#hilang_tptlahir').val('');
    $('#hilang_tgllahir').val('');
    $('#hilang_agama').val('');
    $('#hilang_pekerjaan').val('');
    $('#hilang_kwn').val('');
    $('#hilang_alamat').val('');
    $('#hilang_barang').val('');
    $('#hilang_tglhilang').val('');
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

  function hilang_ceknik() {
    var target = document.getElementById("hilang_nik");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("hilang_notifnik").style.color = "red";
      document.getElementById("hilang_notifnik").innerHTML = c;
      document.getElementById("hilang_tptlahir").disabled = true;

    } else {
      document.getElementById("hilang_tptlahir").disabled = false;
      document.getElementById("hilang_notifnik").innerHTML = "";
    }
  }
</script>