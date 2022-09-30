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
        window.location.href = "<?php echo base_url() . 'be/hapus/nikah'; ?>/" + a;
      }
    });
  }

  function arsip(a) {
        $('#id_1').val(a);
        $('#arsip').modal('show');
    }
    
  function edit(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, aa, ab, ac, ad, ae, af, ag, ah, ai, aj, ak, al, am, an, ao, ap, aq, ar, as, at, au, av, aw, ax, ay, az, ba, bb, bc, bd, be, bf, bg, bh, bi, bj, bk, bl, bm) {
    $('#id').val(a);
    $('#tgl_surat').val(b);
    $('#ttd').val(c);
    $('#jabttd').val(d);
    $('#kodettd').val(e);

    // $('#nikah_kode').val(1);

    $('#nikah_nama1').val(f);
    $('#nikah_nik1').val(g);
    $('#nikah_job1').val(h);
    $('#nikah_tempat1').val(i);
    $('#nikah_tgl1').val(j);
    $('#nikah_agama1').val(k);
    $('#nikah_kwn1').val(l);
    $('#nikah_status1').val(m);
    $('#nikah_alamat1').val(n);
    // $('#nikah_rt1').val();

    $('#nikah_nama11').val(o);
    $('#stal1').val(p);
    $('#nikah_nik11').val(q);
    $('#nikah_agama11').val(r);
    $('#nikah_bin11').val(s);
    $('#nikah_tempat11').val(t);
    $('#nikah_tgl11').val(u);
    $('#nikah_kwn11').val(v);
    $('#nikah_job11').val(w);
    $('#nikah_alamat11').val(x);

    $('#nikah_nama12').val(y);
    $('#stal2').val(z);
    $('#nikah_nik12').val(aa);
    $('#nikah_agama12').val(ab);
    $('#nikah_bin21').val(ac);
    $('#nikah_tempat12').val(ad);
    $('#nikah_tgl12').val(ae);
    $('#nikah_kwn12').val(af);
    $('#nikah_job12').val(ag);
    $('#nikah_alamat12').val(ah);

    $('#nikah_nama2').val(ai);
    $('#nikah_nik2').val(aj);
    $('#nikah_job2').val(ak);
    $('#nikah_tempat2').val(al);
    $('#nikah_tgl2').val(am);
    $('#nikah_agama2').val(an);
    $('#nikah_kwn2').val(ao);
    $('#nikah_status2').val(ap);
    $('#nikah_alamat2').val(aq);
    // $('#nikah_rt2').val();

    $('#nikah_nama21').val(ar);
    $('#stal3').val(as);
    $('#nikah_nik21').val(at);
    $('#nikah_agama21').val(au);
    $('#nikah_binti12').val(av);
    $('#nikah_tempat21').val(aw);
    $('#nikah_tgl21').val(ax);
    $('#nikah_kwn21').val(ay);
    $('#nikah_job21').val(az);
    $('#nikah_alamat21').val(ba);

    $('#nikah_nama22').val(bb);
    $('#stal4').val(bc);
    $('#nikah_nik22').val(bd);
    $('#nikah_agama22').val(be);
    $('#nikah_binti22').val(bf);
    $('#nikah_tempat22').val(bg);
    $('#nikah_tgl22').val(bh);
    $('#nikah_kwn22').val(bi);
    $('#nikah_job22').val(bj);
    $('#nikah_alamat22').val(bk);

    $('#nikah_lokasi').val(bl);
    $('#nikah_waktu').val(bm);

    if (y !== "" && bb !== "") {
      $('#nikah_kode').val(1);
      document.getElementById("nikah_bnik11").style.display = "block";
      document.getElementById("nikah_nik11").required = true;
      document.getElementById("nikah_bagama11").style.display = "block";
      document.getElementById("nikah_agama11").required = true;
      document.getElementById("nikah_btempat11").style.display = "block";
      document.getElementById("nikah_tempat11").required = true;
      document.getElementById("nikah_btgl11").style.display = "block";
      document.getElementById("nikah_tgl11").required = true;
      document.getElementById("nikah_bkwn11").style.display = "block";
      document.getElementById("nikah_kwn11").required = true;
      document.getElementById("nikah_bjob11").style.display = "block";
      document.getElementById("nikah_job11").required = true;
      document.getElementById("nikah_balamat11").style.display = "block";
      document.getElementById("nikah_alamat11").required = true;

      document.getElementById("nikah_garis1").style.display = "block";
      document.getElementById("nikah_bbinti12").style.display = "block";
      document.getElementById("nikah_binti12").required = true;

      document.getElementById("nikah_bnama12").style.display = "block";
      document.getElementById("nikah_nama12").required = true;
      document.getElementById("nikah_bnik12").style.display = "block";
      document.getElementById("nikah_nik12").required = true;
      document.getElementById("nikah_bagama12").style.display = "block";
      document.getElementById("nikah_agama12").required = true;
      document.getElementById("nikah_btempat12").style.display = "block";
      document.getElementById("nikah_tempat12").required = true;
      document.getElementById("nikah_btgl12").style.display = "block";
      document.getElementById("nikah_tgl12").required = true;
      document.getElementById("nikah_bkwn12").style.display = "block";
      document.getElementById("nikah_kwn12").required = true;
      document.getElementById("nikah_bjob12").style.display = "block";
      document.getElementById("nikah_job12").required = true;
      document.getElementById("nikah_balamat12").style.display = "block";
      document.getElementById("nikah_alamat12").required = true;

      document.getElementById("nikah_bnik21").style.display = "block";
      document.getElementById("nikah_nik21").required = true;
      document.getElementById("nikah_bagama21").style.display = "block";
      document.getElementById("nikah_agama21").required = true;
      document.getElementById("nikah_btempat21").style.display = "block";
      document.getElementById("nikah_tempat21").required = true;
      document.getElementById("nikah_btgl21").style.display = "block";
      document.getElementById("nikah_tgl21").required = true;
      document.getElementById("nikah_bkwn21").style.display = "block";
      document.getElementById("nikah_kwn21").required = true;
      document.getElementById("nikah_bjob21").style.display = "block";
      document.getElementById("nikah_job21").required = true;
      document.getElementById("nikah_balamat21").style.display = "block";
      document.getElementById("nikah_alamat21").required = true;

      document.getElementById("nikah_garis2").style.display = "block";
      document.getElementById("nikah_bbinti22").style.display = "block";
      document.getElementById("nikah_binti22").required = true;

      document.getElementById("nikah_bnama22").style.display = "block";
      document.getElementById("nikah_nama22").required = true;
      document.getElementById("nikah_bnik22").style.display = "block";
      document.getElementById("nikah_nik22").required = true;
      document.getElementById("nikah_bagama22").style.display = "block";
      document.getElementById("nikah_agama22").required = true;
      document.getElementById("nikah_btempat22").style.display = "block";
      document.getElementById("nikah_tempat22").required = true;
      document.getElementById("nikah_btgl22").style.display = "block";
      document.getElementById("nikah_tgl22").required = true;
      document.getElementById("nikah_bkwn22").style.display = "block";
      document.getElementById("nikah_kwn22").required = true;
      document.getElementById("nikah_bjob22").style.display = "block";
      document.getElementById("nikah_job22").required = true;
      document.getElementById("nikah_balamat22").style.display = "block";
      document.getElementById("nikah_alamat22").required = true;

      // alm 1
      if (p == 1) {
        document.getElementById("nikah_bnik11").style.display = "none";
        document.getElementById("nikah_nik11").required = false;
        document.getElementById("nikah_nik11").value = "";
        document.getElementById("nikah_bagama11").style.display = "none";
        document.getElementById("nikah_agama11").required = false;
        document.getElementById("nikah_agama11").value = "";
        document.getElementById("nikah_btempat11").style.display = "none";
        document.getElementById("nikah_tempat11").required = false;
        document.getElementById("nikah_tempat11").value = "";
        document.getElementById("nikah_btgl11").style.display = "none";
        document.getElementById("nikah_tgl11").required = false;
        document.getElementById("nikah_tgl11").value = "";
        document.getElementById("nikah_bkwn11").style.display = "none";
        document.getElementById("nikah_kwn11").required = false;
        document.getElementById("nikah_kwn11").value = "";
        document.getElementById("nikah_bjob11").style.display = "none";
        document.getElementById("nikah_job11").required = false;
        document.getElementById("nikah_job11").value = "";
        document.getElementById("nikah_balamat11").style.display = "none";
        document.getElementById("nikah_alamat11").required = false;
        document.getElementById("nikah_alamat11").value = "";
        document.getElementById("a1").checked = true;
        $('#stal1').val(1);
      } else {
        $('#stal1').val("");
        document.getElementById("a1").checked = false;
        document.getElementById("nikah_bnik11").style.display = "block";
        document.getElementById("nikah_nik11").required = true;
        document.getElementById("nikah_bagama11").style.display = "block";
        document.getElementById("nikah_agama11").required = true;
        document.getElementById("nikah_btempat11").style.display = "block";
        document.getElementById("nikah_tempat11").required = true;
        document.getElementById("nikah_btgl11").style.display = "block";
        document.getElementById("nikah_tgl11").required = true;
        document.getElementById("nikah_bkwn11").style.display = "block";
        document.getElementById("nikah_kwn11").required = true;
        document.getElementById("nikah_bjob11").style.display = "block";
        document.getElementById("nikah_job11").required = true;
        document.getElementById("nikah_balamat11").style.display = "block";
        document.getElementById("nikah_alamat11").required = true;
      }
      // almh1
      if (z == 1) {
        document.getElementById("nikah_bnik12").style.display = "none";
        document.getElementById("nikah_nik12").required = false;
        document.getElementById("nikah_nik12").value = "";
        document.getElementById("nikah_bagama12").style.display = "none";
        document.getElementById("nikah_agama12").required = false;
        document.getElementById("nikah_agama12").value = "";
        document.getElementById("nikah_btempat12").style.display = "none";
        document.getElementById("nikah_tempat12").required = false;
        document.getElementById("nikah_tempat12").value = "";
        document.getElementById("nikah_btgl12").style.display = "none";
        document.getElementById("nikah_tgl12").required = false;
        document.getElementById("nikah_tgl12").value = "";
        document.getElementById("nikah_bkwn12").style.display = "none";
        document.getElementById("nikah_kwn12").required = false;
        document.getElementById("nikah_kwn12").value = "";
        document.getElementById("nikah_bjob12").style.display = "none";
        document.getElementById("nikah_job12").required = false;
        document.getElementById("nikah_job12").value = "";
        document.getElementById("nikah_balamat12").style.display = "none";
        document.getElementById("nikah_alamat12").required = false;
        document.getElementById("nikah_alamat12").value = "";
        document.getElementById("ah1").checked = true;
        $('#stal2').val(1);
      } else {
        $('#stal2').val("");
        document.getElementById("ah1").checked = false;
        document.getElementById("nikah_bnik12").style.display = "block";
        document.getElementById("nikah_nik12").required = true;
        document.getElementById("nikah_bagama12").style.display = "block";
        document.getElementById("nikah_agama12").required = true;
        document.getElementById("nikah_btempat12").style.display = "block";
        document.getElementById("nikah_tempat12").required = true;
        document.getElementById("nikah_btgl12").style.display = "block";
        document.getElementById("nikah_tgl12").required = true;
        document.getElementById("nikah_bkwn12").style.display = "block";
        document.getElementById("nikah_kwn12").required = true;
        document.getElementById("nikah_bjob12").style.display = "block";
        document.getElementById("nikah_job12").required = true;
        document.getElementById("nikah_balamat12").style.display = "block";
        document.getElementById("nikah_alamat12").required = true;
      }
      // alm 2
      if (as == 1) {
        document.getElementById("nikah_bnik21").style.display = "none";
        document.getElementById("nikah_nik21").required = false;
        document.getElementById("nikah_nik21").value = "";
        document.getElementById("nikah_bagama21").style.display = "none";
        document.getElementById("nikah_agama21").required = false;
        document.getElementById("nikah_agama21").value = "";
        document.getElementById("nikah_btempat21").style.display = "none";
        document.getElementById("nikah_tempat21").required = false;
        document.getElementById("nikah_tempat21").value = "";
        document.getElementById("nikah_btgl21").style.display = "none";
        document.getElementById("nikah_tgl21").required = false;
        document.getElementById("nikah_tgl21").value = "";
        document.getElementById("nikah_bkwn21").style.display = "none";
        document.getElementById("nikah_kwn21").required = false;
        document.getElementById("nikah_kwn21").value = "";
        document.getElementById("nikah_bjob21").style.display = "none";
        document.getElementById("nikah_job21").required = false;
        document.getElementById("nikah_job21").value = "";
        document.getElementById("nikah_balamat21").style.display = "none";
        document.getElementById("nikah_alamat21").required = false;
        document.getElementById("nikah_alamat21").value = "";
        document.getElementById("a2").checked = true;
        $('#stal3').val(1);
      } else {
        $('#stal3').val("");
        document.getElementById("a2").checked = false;
        document.getElementById("nikah_bnik21").style.display = "block";
        document.getElementById("nikah_nik21").required = true;
        document.getElementById("nikah_bagama21").style.display = "block";
        document.getElementById("nikah_agama21").required = true;
        document.getElementById("nikah_btempat21").style.display = "block";
        document.getElementById("nikah_tempat21").required = true;
        document.getElementById("nikah_btgl21").style.display = "block";
        document.getElementById("nikah_tgl21").required = true;
        document.getElementById("nikah_bkwn21").style.display = "block";
        document.getElementById("nikah_kwn21").required = true;
        document.getElementById("nikah_bjob21").style.display = "block";
        document.getElementById("nikah_job21").required = true;
        document.getElementById("nikah_balamat21").style.display = "block";
        document.getElementById("nikah_alamat21").required = true;
      }
      // almh 2
      if (bc == 1) {
        document.getElementById("nikah_bnik22").style.display = "none";
        document.getElementById("nikah_nik22").required = false;
        document.getElementById("nikah_nik22").value = "";
        document.getElementById("nikah_bagama22").style.display = "none";
        document.getElementById("nikah_agama22").required = false;
        document.getElementById("nikah_agama22").value = "";
        document.getElementById("nikah_btempat22").style.display = "none";
        document.getElementById("nikah_tempat22").required = false;
        document.getElementById("nikah_tempat22").value = "";
        document.getElementById("nikah_btgl22").style.display = "none";
        document.getElementById("nikah_tgl22").required = false;
        document.getElementById("nikah_tgl22").value = "";
        document.getElementById("nikah_bkwn22").style.display = "none";
        document.getElementById("nikah_kwn22").required = false;
        document.getElementById("nikah_kwn22").value = "";
        document.getElementById("nikah_bjob22").style.display = "none";
        document.getElementById("nikah_job22").required = false;
        document.getElementById("nikah_job22").value = "";
        document.getElementById("nikah_balamat22").style.display = "none";
        document.getElementById("nikah_alamat22").required = false;
        document.getElementById("nikah_alamat22").value = "";
        document.getElementById("ah2").checked = true;
        $('#stal4').val(1);
      } else {
        $('#stal4').val("");
        document.getElementById("ah2").checked = false;
        document.getElementById("nikah_bnik22").style.display = "block";
        document.getElementById("nikah_nik22").required = true;
        document.getElementById("nikah_bagama22").style.display = "block";
        document.getElementById("nikah_agama22").required = true;
        document.getElementById("nikah_btempat22").style.display = "block";
        document.getElementById("nikah_tempat22").required = true;
        document.getElementById("nikah_btgl22").style.display = "block";
        document.getElementById("nikah_tgl22").required = true;
        document.getElementById("nikah_bkwn22").style.display = "block";
        document.getElementById("nikah_kwn22").required = true;
        document.getElementById("nikah_bjob22").style.display = "block";
        document.getElementById("nikah_job22").required = true;
        document.getElementById("nikah_balamat22").style.display = "block";
        document.getElementById("nikah_alamat22").required = true;
      }
    } else if (y !== "" && bb == "") {
      $('#nikah_kode').val(2);

      document.getElementById("nikah_bnik11").style.display = "block";
      document.getElementById("nikah_nik11").required = true;
      document.getElementById("nikah_bagama11").style.display = "block";
      document.getElementById("nikah_agama11").required = true;
      document.getElementById("nikah_btempat11").style.display = "block";
      document.getElementById("nikah_tempat11").required = true;
      document.getElementById("nikah_btgl11").style.display = "block";
      document.getElementById("nikah_tgl11").required = true;
      document.getElementById("nikah_bkwn11").style.display = "block";
      document.getElementById("nikah_kwn11").required = true;
      document.getElementById("nikah_bjob11").style.display = "block";
      document.getElementById("nikah_job11").required = true;
      document.getElementById("nikah_balamat11").style.display = "block";
      document.getElementById("nikah_alamat11").required = true;

      document.getElementById("nikah_garis1").style.display = "block";
      document.getElementById("nikah_bbinti12").style.display = "block";
      document.getElementById("nikah_binti12").required = true;

      document.getElementById("nikah_bnama12").style.display = "block";
      document.getElementById("nikah_nama12").required = true;
      document.getElementById("nikah_bnik12").style.display = "block";
      document.getElementById("nikah_nik12").required = true;
      document.getElementById("nikah_bagama12").style.display = "block";
      document.getElementById("nikah_agama12").required = true;
      document.getElementById("nikah_btempat12").style.display = "block";
      document.getElementById("nikah_tempat12").required = true;
      document.getElementById("nikah_btgl12").style.display = "block";
      document.getElementById("nikah_tgl12").required = true;
      document.getElementById("nikah_bkwn12").style.display = "block";
      document.getElementById("nikah_kwn12").required = true;
      document.getElementById("nikah_bjob12").style.display = "block";
      document.getElementById("nikah_job12").required = true;
      document.getElementById("nikah_balamat12").style.display = "block";
      document.getElementById("nikah_alamat12").required = true;

      document.getElementById("nikah_bnik21").style.display = "none";
      document.getElementById("nikah_nik21").required = false;
      document.getElementById("nikah_bagama21").style.display = "none";
      document.getElementById("nikah_agama21").required = false;
      document.getElementById("nikah_btempat21").style.display = "none";
      document.getElementById("nikah_tempat21").required = false;
      document.getElementById("nikah_btgl21").style.display = "none";
      document.getElementById("nikah_tgl21").required = false;
      document.getElementById("nikah_bkwn21").style.display = "none";
      document.getElementById("nikah_kwn21").required = false;
      document.getElementById("nikah_bjob21").style.display = "none";
      document.getElementById("nikah_job21").required = false;
      document.getElementById("nikah_balamat21").style.display = "none";
      document.getElementById("nikah_alamat21").required = false;

      document.getElementById("nikah_garis2").style.display = "none";
      document.getElementById("nikah_bbinti22").style.display = "none";
      document.getElementById("nikah_binti22").required = false;

      document.getElementById("nikah_bnama22").style.display = "none";
      document.getElementById("nikah_nama22").required = false;
      document.getElementById("nikah_bnik22").style.display = "none";
      document.getElementById("nikah_nik22").required = false;
      document.getElementById("nikah_bagama22").style.display = "none";
      document.getElementById("nikah_agama22").required = false;
      document.getElementById("nikah_btempat22").style.display = "none";
      document.getElementById("nikah_tempat22").required = false;
      document.getElementById("nikah_btgl22").style.display = "none";
      document.getElementById("nikah_tgl22").required = false;
      document.getElementById("nikah_bkwn22").style.display = "none";
      document.getElementById("nikah_kwn22").required = false;
      document.getElementById("nikah_bjob22").style.display = "none";
      document.getElementById("nikah_job22").required = false;
      document.getElementById("nikah_balamat22").style.display = "none";
      document.getElementById("nikah_alamat22").required = false;

      // alm 1
      if (p == 1) {
        document.getElementById("nikah_bnik11").style.display = "none";
        document.getElementById("nikah_nik11").required = false;
        document.getElementById("nikah_nik11").value = "";
        document.getElementById("nikah_bagama11").style.display = "none";
        document.getElementById("nikah_agama11").required = false;
        document.getElementById("nikah_agama11").value = "";
        document.getElementById("nikah_btempat11").style.display = "none";
        document.getElementById("nikah_tempat11").required = false;
        document.getElementById("nikah_tempat11").value = "";
        document.getElementById("nikah_btgl11").style.display = "none";
        document.getElementById("nikah_tgl11").required = false;
        document.getElementById("nikah_tgl11").value = "";
        document.getElementById("nikah_bkwn11").style.display = "none";
        document.getElementById("nikah_kwn11").required = false;
        document.getElementById("nikah_kwn11").value = "";
        document.getElementById("nikah_bjob11").style.display = "none";
        document.getElementById("nikah_job11").required = false;
        document.getElementById("nikah_job11").value = "";
        document.getElementById("nikah_balamat11").style.display = "none";
        document.getElementById("nikah_alamat11").required = false;
        document.getElementById("nikah_alamat11").value = "";
        document.getElementById("a1").checked = true;
        $('#stal1').val(1);
      } else {
        $('#stal1').val("");
        document.getElementById("a1").checked = false;
        document.getElementById("nikah_bnik11").style.display = "block";
        document.getElementById("nikah_nik11").required = true;
        document.getElementById("nikah_bagama11").style.display = "block";
        document.getElementById("nikah_agama11").required = true;
        document.getElementById("nikah_btempat11").style.display = "block";
        document.getElementById("nikah_tempat11").required = true;
        document.getElementById("nikah_btgl11").style.display = "block";
        document.getElementById("nikah_tgl11").required = true;
        document.getElementById("nikah_bkwn11").style.display = "block";
        document.getElementById("nikah_kwn11").required = true;
        document.getElementById("nikah_bjob11").style.display = "block";
        document.getElementById("nikah_job11").required = true;
        document.getElementById("nikah_balamat11").style.display = "block";
        document.getElementById("nikah_alamat11").required = true;
      }
      // almh1
      if (z == 1) {
        document.getElementById("nikah_bnik12").style.display = "none";
        document.getElementById("nikah_nik12").required = false;
        document.getElementById("nikah_nik12").value = "";
        document.getElementById("nikah_bagama12").style.display = "none";
        document.getElementById("nikah_agama12").required = false;
        document.getElementById("nikah_agama12").value = "";
        document.getElementById("nikah_btempat12").style.display = "none";
        document.getElementById("nikah_tempat12").required = false;
        document.getElementById("nikah_tempat12").value = "";
        document.getElementById("nikah_btgl12").style.display = "none";
        document.getElementById("nikah_tgl12").required = false;
        document.getElementById("nikah_tgl12").value = "";
        document.getElementById("nikah_bkwn12").style.display = "none";
        document.getElementById("nikah_kwn12").required = false;
        document.getElementById("nikah_kwn12").value = "";
        document.getElementById("nikah_bjob12").style.display = "none";
        document.getElementById("nikah_job12").required = false;
        document.getElementById("nikah_job12").value = "";
        document.getElementById("nikah_balamat12").style.display = "none";
        document.getElementById("nikah_alamat12").required = false;
        document.getElementById("nikah_alamat12").value = "";
        document.getElementById("ah1").checked = true;
        $('#stal2').val(1);
      } else {
        $('#stal2').val("");
        document.getElementById("ah1").checked = false;
        document.getElementById("nikah_bnik12").style.display = "block";
        document.getElementById("nikah_nik12").required = true;
        document.getElementById("nikah_bagama12").style.display = "block";
        document.getElementById("nikah_agama12").required = true;
        document.getElementById("nikah_btempat12").style.display = "block";
        document.getElementById("nikah_tempat12").required = true;
        document.getElementById("nikah_btgl12").style.display = "block";
        document.getElementById("nikah_tgl12").required = true;
        document.getElementById("nikah_bkwn12").style.display = "block";
        document.getElementById("nikah_kwn12").required = true;
        document.getElementById("nikah_bjob12").style.display = "block";
        document.getElementById("nikah_job12").required = true;
        document.getElementById("nikah_balamat12").style.display = "block";
        document.getElementById("nikah_alamat12").required = true;
      }
      // alm 2
      if (as == 1) {
        document.getElementById("a2").checked = true;
        $('#stal3').val(1);
      } else {
        $('#stal3').val("");
        document.getElementById("a2").checked = false;
      }
    } else if (y == "" && bb !== "") {
      $('#nikah_kode').val(3);
      document.getElementById("nikah_bnik11").style.display = "none";
      document.getElementById("nikah_nik11").required = false;
      document.getElementById("nikah_bagama11").style.display = "none";
      document.getElementById("nikah_agama11").required = false;
      document.getElementById("nikah_btempat11").style.display = "none";
      document.getElementById("nikah_tempat11").required = false;
      document.getElementById("nikah_btgl11").style.display = "none";
      document.getElementById("nikah_tgl11").required = false;
      document.getElementById("nikah_bkwn11").style.display = "none";
      document.getElementById("nikah_kwn11").required = false;
      document.getElementById("nikah_bjob11").style.display = "none";
      document.getElementById("nikah_job11").required = false;
      document.getElementById("nikah_balamat11").style.display = "none";
      document.getElementById("nikah_alamat11").required = false;

      document.getElementById("nikah_garis1").style.display = "none";
      document.getElementById("nikah_bbinti12").style.display = "none";
      document.getElementById("nikah_binti12").required = false;

      document.getElementById("nikah_bnama12").style.display = "none";
      document.getElementById("nikah_nama12").required = false;
      document.getElementById("nikah_bnik12").style.display = "none";
      document.getElementById("nikah_nik12").required = false;
      document.getElementById("nikah_bagama12").style.display = "none";
      document.getElementById("nikah_agama12").required = false;
      document.getElementById("nikah_btempat12").style.display = "none";
      document.getElementById("nikah_tempat12").required = false;
      document.getElementById("nikah_btgl12").style.display = "none";
      document.getElementById("nikah_tgl12").required = false;
      document.getElementById("nikah_bkwn12").style.display = "none";
      document.getElementById("nikah_kwn12").required = false;
      document.getElementById("nikah_bjob12").style.display = "none";
      document.getElementById("nikah_job12").required = false;
      document.getElementById("nikah_balamat12").style.display = "none";
      document.getElementById("nikah_alamat12").required = false;


      document.getElementById("nikah_bnik21").style.display = "block";
      document.getElementById("nikah_nik21").required = true;
      document.getElementById("nikah_bagama21").style.display = "block";
      document.getElementById("nikah_agama21").required = true;
      document.getElementById("nikah_btempat21").style.display = "block";
      document.getElementById("nikah_tempat21").required = true;
      document.getElementById("nikah_btgl21").style.display = "block";
      document.getElementById("nikah_tgl21").required = true;
      document.getElementById("nikah_bkwn21").style.display = "block";
      document.getElementById("nikah_kwn21").required = true;
      document.getElementById("nikah_bjob21").style.display = "block";
      document.getElementById("nikah_job21").required = true;
      document.getElementById("nikah_balamat21").style.display = "block";
      document.getElementById("nikah_alamat21").required = true;

      document.getElementById("nikah_garis2").style.display = "block";
      document.getElementById("nikah_bbinti22").style.display = "block";
      document.getElementById("nikah_binti22").required = true;

      document.getElementById("nikah_bnama22").style.display = "block";
      document.getElementById("nikah_nama22").required = true;
      document.getElementById("nikah_bnik22").style.display = "block";
      document.getElementById("nikah_nik22").required = true;
      document.getElementById("nikah_bagama22").style.display = "block";
      document.getElementById("nikah_agama22").required = true;
      document.getElementById("nikah_btempat22").style.display = "block";
      document.getElementById("nikah_tempat22").required = true;
      document.getElementById("nikah_btgl22").style.display = "block";
      document.getElementById("nikah_tgl22").required = true;
      document.getElementById("nikah_bkwn22").style.display = "block";
      document.getElementById("nikah_kwn22").required = true;
      document.getElementById("nikah_bjob22").style.display = "block";
      document.getElementById("nikah_job22").required = true;
      document.getElementById("nikah_balamat22").style.display = "block";
      document.getElementById("nikah_alamat22").required = true;

      // alm 1
      if (p == 1) {
        document.getElementById("a1").checked = true;
        $('#stal1').val(1);
      } else {
        $('#stal1').val("");
        document.getElementById("a1").checked = false;
      }


      // alm 2
      if (as == 1) {
        document.getElementById("nikah_bnik21").style.display = "none";
        document.getElementById("nikah_nik21").required = false;
        document.getElementById("nikah_nik21").value = "";
        document.getElementById("nikah_bagama21").style.display = "none";
        document.getElementById("nikah_agama21").required = false;
        document.getElementById("nikah_agama21").value = "";
        document.getElementById("nikah_btempat21").style.display = "none";
        document.getElementById("nikah_tempat21").required = false;
        document.getElementById("nikah_tempat21").value = "";
        document.getElementById("nikah_btgl21").style.display = "none";
        document.getElementById("nikah_tgl21").required = false;
        document.getElementById("nikah_tgl21").value = "";
        document.getElementById("nikah_bkwn21").style.display = "none";
        document.getElementById("nikah_kwn21").required = false;
        document.getElementById("nikah_kwn21").value = "";
        document.getElementById("nikah_bjob21").style.display = "none";
        document.getElementById("nikah_job21").required = false;
        document.getElementById("nikah_job21").value = "";
        document.getElementById("nikah_balamat21").style.display = "none";
        document.getElementById("nikah_alamat21").required = false;
        document.getElementById("nikah_alamat21").value = "";
        document.getElementById("a2").checked = true;
        $('#stal3').val(1);
      } else {
        $('#stal3').val("");
        document.getElementById("a2").checked = false;
        document.getElementById("nikah_bnik21").style.display = "block";
        document.getElementById("nikah_nik21").required = true;
        document.getElementById("nikah_bagama21").style.display = "block";
        document.getElementById("nikah_agama21").required = true;
        document.getElementById("nikah_btempat21").style.display = "block";
        document.getElementById("nikah_tempat21").required = true;
        document.getElementById("nikah_btgl21").style.display = "block";
        document.getElementById("nikah_tgl21").required = true;
        document.getElementById("nikah_bkwn21").style.display = "block";
        document.getElementById("nikah_kwn21").required = true;
        document.getElementById("nikah_bjob21").style.display = "block";
        document.getElementById("nikah_job21").required = true;
        document.getElementById("nikah_balamat21").style.display = "block";
        document.getElementById("nikah_alamat21").required = true;
      }
      // almh 2
      if (bc == 1) {
        document.getElementById("nikah_bnik22").style.display = "none";
        document.getElementById("nikah_nik22").required = false;
        document.getElementById("nikah_nik22").value = "";
        document.getElementById("nikah_bagama22").style.display = "none";
        document.getElementById("nikah_agama22").required = false;
        document.getElementById("nikah_agama22").value = "";
        document.getElementById("nikah_btempat22").style.display = "none";
        document.getElementById("nikah_tempat22").required = false;
        document.getElementById("nikah_tempat22").value = "";
        document.getElementById("nikah_btgl22").style.display = "none";
        document.getElementById("nikah_tgl22").required = false;
        document.getElementById("nikah_tgl22").value = "";
        document.getElementById("nikah_bkwn22").style.display = "none";
        document.getElementById("nikah_kwn22").required = false;
        document.getElementById("nikah_kwn22").value = "";
        document.getElementById("nikah_bjob22").style.display = "none";
        document.getElementById("nikah_job22").required = false;
        document.getElementById("nikah_job22").value = "";
        document.getElementById("nikah_balamat22").style.display = "none";
        document.getElementById("nikah_alamat22").required = false;
        document.getElementById("nikah_alamat22").value = "";
        document.getElementById("ah2").checked = true;
        $('#stal4').val(1);
      } else {
        $('#stal4').val("");
        document.getElementById("ah2").checked = false;
        document.getElementById("nikah_bnik22").style.display = "block";
        document.getElementById("nikah_nik22").required = true;
        document.getElementById("nikah_bagama22").style.display = "block";
        document.getElementById("nikah_agama22").required = true;
        document.getElementById("nikah_btempat22").style.display = "block";
        document.getElementById("nikah_tempat22").required = true;
        document.getElementById("nikah_btgl22").style.display = "block";
        document.getElementById("nikah_tgl22").required = true;
        document.getElementById("nikah_bkwn22").style.display = "block";
        document.getElementById("nikah_kwn22").required = true;
        document.getElementById("nikah_bjob22").style.display = "block";
        document.getElementById("nikah_job22").required = true;
        document.getElementById("nikah_balamat22").style.display = "block";
        document.getElementById("nikah_alamat22").required = true;
      }
    }



    // document.getElementById("domisili_statuskwn").disabled = false;

    $('#m_surat').modal('show');
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


  function catinDua() {
    $('#nikah_kode').val(1);
    $('#nikah_nama1').val("");
    $('#nikah_nik1').val("");
    $('#nikah_job1').val("");
    $('#nikah_tempat1').val("");
    $('#nikah_tgl1').val("");
    $('#nikah_agama1').val("");
    $('#nikah_kwn1').val("");
    $('#nikah_status1').val("");
    $('#nikah_alamat1').val("");
    // $('#nikah_rt1').val("");

    $('#nikah_nama11').val("");
    $('#nikah_nik11').val("");
    $('#nikah_agama11').val("");
    $('#nikah_tempat11').val("");
    $('#nikah_tgl11').val("");
    $('#nikah_kwn11').val("");
    $('#nikah_job11').val("");
    $('#nikah_alamat11').val("");

    $('#nikah_nama12').val("");
    $('#nikah_nik12').val("");
    $('#nikah_agama12').val("");
    $('#nikah_tempat12').val("");
    $('#nikah_tgl12').val("");
    $('#nikah_kwn12').val("");
    $('#nikah_job12').val("");
    $('#nikah_alamat12').val("");

    $('#nikah_nama2').val("");
    $('#nikah_nik2').val("");
    $('#nikah_job2').val("");
    $('#nikah_tempat2').val("");
    $('#nikah_tgl2').val("");
    $('#nikah_agama2').val("");
    $('#nikah_kwn2').val("");
    $('#nikah_status2').val("");
    $('#nikah_alamat2').val("");
    // $('#nikah_rt2').val("");

    $('#nikah_nama21').val("");
    $('#nikah_nik21').val("");
    $('#nikah_agama21').val("");
    $('#nikah_tempat21').val("");
    $('#nikah_tgl21').val("");
    $('#nikah_kwn21').val("");
    $('#nikah_job21').val("");
    $('#nikah_alamat21').val("");

    $('#nikah_nama22').val("");
    $('#nikah_nik22').val("");
    $('#nikah_agama22').val("");
    $('#nikah_tempat22').val("");
    $('#nikah_tgl22').val("");
    $('#nikah_kwn22').val("");
    $('#nikah_job22').val("");
    $('#nikah_alamat22').val("");

    $('#nikah_lokasi').val("");
    $('#nikah_waktu').val("");
    $('#nikah_bin11').val("");
    $('#nikah_bin21').val("");
    $('#nikah_binti12').val("");
    $('#nikah_binti22').val("");

    $('#stal1').val("");
    $('#stal2').val("");
    $('#stal3').val("");
    $('#stal4').val("");

    $('#tgl_surat').val('');
    $('#ttd').val('');
    $('#jabttd').val('');
    $('#kodettd').val('');

    document.getElementById("nikah_job1").disabled = true;
    document.getElementById("nikah_agama11").disabled = true;
    document.getElementById("nikah_agama12").disabled = true;
    document.getElementById("nikah_job2").disabled = true;
    document.getElementById("nikah_agama21").disabled = true;
    document.getElementById("nikah_agama22").disabled = true;

    document.getElementById("nikah_bnik11").style.display = "block";
    document.getElementById("nikah_nik11").required = true;
    document.getElementById("nikah_bagama11").style.display = "block";
    document.getElementById("nikah_agama11").required = true;
    document.getElementById("nikah_btempat11").style.display = "block";
    document.getElementById("nikah_tempat11").required = true;
    document.getElementById("nikah_btgl11").style.display = "block";
    document.getElementById("nikah_tgl11").required = true;
    document.getElementById("nikah_bkwn11").style.display = "block";
    document.getElementById("nikah_kwn11").required = true;
    document.getElementById("nikah_bjob11").style.display = "block";
    document.getElementById("nikah_job11").required = true;
    document.getElementById("nikah_balamat11").style.display = "block";
    document.getElementById("nikah_alamat11").required = true;

    document.getElementById("nikah_garis1").style.display = "block";
    document.getElementById("nikah_bbinti12").style.display = "block";
    document.getElementById("nikah_binti12").required = true;

    document.getElementById("nikah_bnama12").style.display = "block";
    document.getElementById("nikah_nama12").required = true;
    document.getElementById("nikah_bnik12").style.display = "block";
    document.getElementById("nikah_nik12").required = true;
    document.getElementById("nikah_bagama12").style.display = "block";
    document.getElementById("nikah_agama12").required = true;
    document.getElementById("nikah_btempat12").style.display = "block";
    document.getElementById("nikah_tempat12").required = true;
    document.getElementById("nikah_btgl12").style.display = "block";
    document.getElementById("nikah_tgl12").required = true;
    document.getElementById("nikah_bkwn12").style.display = "block";
    document.getElementById("nikah_kwn12").required = true;
    document.getElementById("nikah_bjob12").style.display = "block";
    document.getElementById("nikah_job12").required = true;
    document.getElementById("nikah_balamat12").style.display = "block";
    document.getElementById("nikah_alamat12").required = true;

    document.getElementById("nikah_bnik21").style.display = "block";
    document.getElementById("nikah_nik21").required = true;
    document.getElementById("nikah_bagama21").style.display = "block";
    document.getElementById("nikah_agama21").required = true;
    document.getElementById("nikah_btempat21").style.display = "block";
    document.getElementById("nikah_tempat21").required = true;
    document.getElementById("nikah_btgl21").style.display = "block";
    document.getElementById("nikah_tgl21").required = true;
    document.getElementById("nikah_bkwn21").style.display = "block";
    document.getElementById("nikah_kwn21").required = true;
    document.getElementById("nikah_bjob21").style.display = "block";
    document.getElementById("nikah_job21").required = true;
    document.getElementById("nikah_balamat21").style.display = "block";
    document.getElementById("nikah_alamat21").required = true;

    document.getElementById("nikah_garis2").style.display = "block";
    document.getElementById("nikah_bbinti22").style.display = "block";
    document.getElementById("nikah_binti22").required = true;

    document.getElementById("nikah_bnama22").style.display = "block";
    document.getElementById("nikah_nama22").required = true;
    document.getElementById("nikah_bnik22").style.display = "block";
    document.getElementById("nikah_nik22").required = true;
    document.getElementById("nikah_bagama22").style.display = "block";
    document.getElementById("nikah_agama22").required = true;
    document.getElementById("nikah_btempat22").style.display = "block";
    document.getElementById("nikah_tempat22").required = true;
    document.getElementById("nikah_btgl22").style.display = "block";
    document.getElementById("nikah_tgl22").required = true;
    document.getElementById("nikah_bkwn22").style.display = "block";
    document.getElementById("nikah_kwn22").required = true;
    document.getElementById("nikah_bjob22").style.display = "block";
    document.getElementById("nikah_job22").required = true;
    document.getElementById("nikah_balamat22").style.display = "block";
    document.getElementById("nikah_alamat22").required = true;

    $('#m_surat').modal('show');
  }

  function catinPria() {
    $('#nikah_kode').val(2);
    $('#nikah_nama1').val("");
    $('#nikah_nik1').val("");
    $('#nikah_job1').val("");
    $('#nikah_tempat1').val("");
    $('#nikah_tgl1').val("");
    $('#nikah_agama1').val("");
    $('#nikah_kwn1').val("");
    $('#nikah_status1').val("");
    $('#nikah_alamat1').val("");
    // $('#nikah_rt1').val("");

    $('#nikah_nama11').val("");
    $('#nikah_nik11').val("");
    $('#nikah_agama11').val("");
    $('#nikah_tempat11').val("");
    $('#nikah_tgl11').val("");
    $('#nikah_kwn11').val("");
    $('#nikah_job11').val("");
    $('#nikah_alamat11').val("");

    $('#nikah_nama12').val("");
    $('#nikah_nik12').val("");
    $('#nikah_agama12').val("");
    $('#nikah_tempat12').val("");
    $('#nikah_tgl12').val("");
    $('#nikah_kwn12').val("");
    $('#nikah_job12').val("");
    $('#nikah_alamat12').val("");

    $('#nikah_nama2').val("");
    $('#nikah_nik2').val("");
    $('#nikah_job2').val("");
    $('#nikah_tempat2').val("");
    $('#nikah_tgl2').val("");
    $('#nikah_agama2').val("");
    $('#nikah_kwn2').val("");
    $('#nikah_status2').val("");
    $('#nikah_alamat2').val("");
    // $('#nikah_rt2').val("");

    $('#nikah_nama21').val("");
    $('#nikah_nik21').val("");
    $('#nikah_agama21').val("");
    $('#nikah_tempat21').val("");
    $('#nikah_tgl21').val("");
    $('#nikah_kwn21').val("");
    $('#nikah_job21').val("");
    $('#nikah_alamat21').val("");

    $('#nikah_nama22').val("");
    $('#nikah_nik22').val("");
    $('#nikah_agama22').val("");
    $('#nikah_tempat22').val("");
    $('#nikah_tgl22').val("");
    $('#nikah_kwn22').val("");
    $('#nikah_job22').val("");
    $('#nikah_alamat22').val("");

    $('#tgl_surat').val('');
    $('#ttd').val('');
    $('#jabttd').val('');
    $('#kodettd').val('');

    $('#nikah_lokasi').val("");
    $('#nikah_waktu').val("");
    $('#nikah_bin11').val("");
    $('#nikah_bin21').val("");
    $('#nikah_binti12').val("");
    $('#nikah_binti22').val("");

    $('#stal1').val("");
    $('#stal2').val("");
    $('#stal3').val("");
    $('#stal4').val("");

    document.getElementById("nikah_job1").disabled = true;
    document.getElementById("nikah_agama11").disabled = true;
    document.getElementById("nikah_agama12").disabled = true;
    document.getElementById("nikah_job2").disabled = true;

    document.getElementById("nikah_bnik11").style.display = "block";
    document.getElementById("nikah_nik11").required = true;
    document.getElementById("nikah_bagama11").style.display = "block";
    document.getElementById("nikah_agama11").required = true;
    document.getElementById("nikah_btempat11").style.display = "block";
    document.getElementById("nikah_tempat11").required = true;
    document.getElementById("nikah_btgl11").style.display = "block";
    document.getElementById("nikah_tgl11").required = true;
    document.getElementById("nikah_bkwn11").style.display = "block";
    document.getElementById("nikah_kwn11").required = true;
    document.getElementById("nikah_bjob11").style.display = "block";
    document.getElementById("nikah_job11").required = true;
    document.getElementById("nikah_balamat11").style.display = "block";
    document.getElementById("nikah_alamat11").required = true;

    document.getElementById("nikah_garis1").style.display = "block";
    document.getElementById("nikah_bbinti12").style.display = "block";
    document.getElementById("nikah_binti12").required = true;

    document.getElementById("nikah_bnama12").style.display = "block";
    document.getElementById("nikah_nama12").required = true;
    document.getElementById("nikah_bnik12").style.display = "block";
    document.getElementById("nikah_nik12").required = true;
    document.getElementById("nikah_bagama12").style.display = "block";
    document.getElementById("nikah_agama12").required = true;
    document.getElementById("nikah_btempat12").style.display = "block";
    document.getElementById("nikah_tempat12").required = true;
    document.getElementById("nikah_btgl12").style.display = "block";
    document.getElementById("nikah_tgl12").required = true;
    document.getElementById("nikah_bkwn12").style.display = "block";
    document.getElementById("nikah_kwn12").required = true;
    document.getElementById("nikah_bjob12").style.display = "block";
    document.getElementById("nikah_job12").required = true;
    document.getElementById("nikah_balamat12").style.display = "block";
    document.getElementById("nikah_alamat12").required = true;


    document.getElementById("nikah_bnik21").style.display = "none";
    document.getElementById("nikah_nik21").required = false;
    document.getElementById("nikah_bagama21").style.display = "none";
    document.getElementById("nikah_agama21").required = false;
    document.getElementById("nikah_btempat21").style.display = "none";
    document.getElementById("nikah_tempat21").required = false;
    document.getElementById("nikah_btgl21").style.display = "none";
    document.getElementById("nikah_tgl21").required = false;
    document.getElementById("nikah_bkwn21").style.display = "none";
    document.getElementById("nikah_kwn21").required = false;
    document.getElementById("nikah_bjob21").style.display = "none";
    document.getElementById("nikah_job21").required = false;
    document.getElementById("nikah_balamat21").style.display = "none";
    document.getElementById("nikah_alamat21").required = false;

    document.getElementById("nikah_garis2").style.display = "none";
    document.getElementById("nikah_bbinti22").style.display = "none";
    document.getElementById("nikah_binti22").required = false;

    document.getElementById("nikah_bnama22").style.display = "none";
    document.getElementById("nikah_nama22").required = false;
    document.getElementById("nikah_bnik22").style.display = "none";
    document.getElementById("nikah_nik22").required = false;
    document.getElementById("nikah_bagama22").style.display = "none";
    document.getElementById("nikah_agama22").required = false;
    document.getElementById("nikah_btempat22").style.display = "none";
    document.getElementById("nikah_tempat22").required = false;
    document.getElementById("nikah_btgl22").style.display = "none";
    document.getElementById("nikah_tgl22").required = false;
    document.getElementById("nikah_bkwn22").style.display = "none";
    document.getElementById("nikah_kwn22").required = false;
    document.getElementById("nikah_bjob22").style.display = "none";
    document.getElementById("nikah_job22").required = false;
    document.getElementById("nikah_balamat22").style.display = "none";
    document.getElementById("nikah_alamat22").required = false;

    $('#m_surat').modal('show');
  }

  function catinWanita() {
    $('#nikah_kode').val(3);
    $('#nikah_nama1').val("");
    $('#nikah_nik1').val("");
    $('#nikah_job1').val("");
    $('#nikah_tempat1').val("");
    $('#nikah_tgl1').val("");
    $('#nikah_agama1').val("");
    $('#nikah_kwn1').val("");
    $('#nikah_status1').val("");
    $('#nikah_alamat1').val("");
    // $('#nikah_rt1').val("");

    $('#nikah_nama11').val("");
    $('#nikah_nik11').val("");
    $('#nikah_agama11').val("");
    $('#nikah_tempat11').val("");
    $('#nikah_tgl11').val("");
    $('#nikah_kwn11').val("");
    $('#nikah_job11').val("");
    $('#nikah_alamat11').val("");

    $('#nikah_nama12').val("");
    $('#nikah_nik12').val("");
    $('#nikah_agama12').val("");
    $('#nikah_tempat12').val("");
    $('#nikah_tgl12').val("");
    $('#nikah_kwn12').val("");
    $('#nikah_job12').val("");
    $('#nikah_alamat12').val("");

    $('#nikah_nama2').val("");
    $('#nikah_nik2').val("");
    $('#nikah_job2').val("");
    $('#nikah_tempat2').val("");
    $('#nikah_tgl2').val("");
    $('#nikah_agama2').val("");
    $('#nikah_kwn2').val("");
    $('#nikah_status2').val("");
    $('#nikah_alamat2').val("");
    // $('#nikah_rt2').val("");

    $('#nikah_nama21').val("");
    $('#nikah_nik21').val("");
    $('#nikah_agama21').val("");
    $('#nikah_tempat21').val("");
    $('#nikah_tgl21').val("");
    $('#nikah_kwn21').val("");
    $('#nikah_job21').val("");
    $('#nikah_alamat21').val("");

    $('#nikah_nama22').val("");
    $('#nikah_nik22').val("");
    $('#nikah_agama22').val("");
    $('#nikah_tempat22').val("");
    $('#nikah_tgl22').val("");
    $('#nikah_kwn22').val("");
    $('#nikah_job22').val("");
    $('#nikah_alamat22').val("");

    $('#tgl_surat').val('');
    $('#ttd').val('');
    $('#jabttd').val('');
    $('#kodettd').val('');

    $('#nikah_lokasi').val("");
    $('#nikah_waktu').val("");
    $('#nikah_bin11').val("");
    $('#nikah_bin21').val("");
    $('#nikah_binti12').val("");
    $('#nikah_binti22').val("");

    $('#stal1').val("");
    $('#stal2').val("");
    $('#stal3').val("");
    $('#stal4').val("");


    document.getElementById("nikah_job1").disabled = true;
    document.getElementById("nikah_job2").disabled = true;
    document.getElementById("nikah_agama21").disabled = true;
    document.getElementById("nikah_agama22").disabled = true;


    document.getElementById("nikah_bnik11").style.display = "none";
    document.getElementById("nikah_nik11").required = false;
    document.getElementById("nikah_bagama11").style.display = "none";
    document.getElementById("nikah_agama11").required = false;
    document.getElementById("nikah_btempat11").style.display = "none";
    document.getElementById("nikah_tempat11").required = false;
    document.getElementById("nikah_btgl11").style.display = "none";
    document.getElementById("nikah_tgl11").required = false;
    document.getElementById("nikah_bkwn11").style.display = "none";
    document.getElementById("nikah_kwn11").required = false;
    document.getElementById("nikah_bjob11").style.display = "none";
    document.getElementById("nikah_job11").required = false;
    document.getElementById("nikah_balamat11").style.display = "none";
    document.getElementById("nikah_alamat11").required = false;

    document.getElementById("nikah_garis1").style.display = "none";
    document.getElementById("nikah_bbinti12").style.display = "none";
    document.getElementById("nikah_binti12").required = false;

    document.getElementById("nikah_bnama12").style.display = "none";
    document.getElementById("nikah_nama12").required = false;
    document.getElementById("nikah_bnik12").style.display = "none";
    document.getElementById("nikah_nik12").required = false;
    document.getElementById("nikah_bagama12").style.display = "none";
    document.getElementById("nikah_agama12").required = false;
    document.getElementById("nikah_btempat12").style.display = "none";
    document.getElementById("nikah_tempat12").required = false;
    document.getElementById("nikah_btgl12").style.display = "none";
    document.getElementById("nikah_tgl12").required = false;
    document.getElementById("nikah_bkwn12").style.display = "none";
    document.getElementById("nikah_kwn12").required = false;
    document.getElementById("nikah_bjob12").style.display = "none";
    document.getElementById("nikah_job12").required = false;
    document.getElementById("nikah_balamat12").style.display = "none";
    document.getElementById("nikah_alamat12").required = false;


    document.getElementById("nikah_bnik21").style.display = "block";
    document.getElementById("nikah_nik21").required = true;
    document.getElementById("nikah_bagama21").style.display = "block";
    document.getElementById("nikah_agama21").required = true;
    document.getElementById("nikah_btempat21").style.display = "block";
    document.getElementById("nikah_tempat21").required = true;
    document.getElementById("nikah_btgl21").style.display = "block";
    document.getElementById("nikah_tgl21").required = true;
    document.getElementById("nikah_bkwn21").style.display = "block";
    document.getElementById("nikah_kwn21").required = true;
    document.getElementById("nikah_bjob21").style.display = "block";
    document.getElementById("nikah_job21").required = true;
    document.getElementById("nikah_balamat21").style.display = "block";
    document.getElementById("nikah_alamat21").required = true;

    document.getElementById("nikah_garis2").style.display = "block";
    document.getElementById("nikah_bbinti22").style.display = "block";
    document.getElementById("nikah_binti22").required = true;

    document.getElementById("nikah_bnama22").style.display = "block";
    document.getElementById("nikah_nama22").required = true;
    document.getElementById("nikah_bnik22").style.display = "block";
    document.getElementById("nikah_nik22").required = true;
    document.getElementById("nikah_bagama22").style.display = "block";
    document.getElementById("nikah_agama22").required = true;
    document.getElementById("nikah_btempat22").style.display = "block";
    document.getElementById("nikah_tempat22").required = true;
    document.getElementById("nikah_btgl22").style.display = "block";
    document.getElementById("nikah_tgl22").required = true;
    document.getElementById("nikah_bkwn22").style.display = "block";
    document.getElementById("nikah_kwn22").required = true;
    document.getElementById("nikah_bjob22").style.display = "block";
    document.getElementById("nikah_job22").required = true;
    document.getElementById("nikah_balamat22").style.display = "block";
    document.getElementById("nikah_alamat22").required = true;

    $('#m_surat').modal('show');
  }


  function nikah_ceknik1() {
    var target = document.getElementById("nikah_nik1");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("nikah_notifnik").style.color = "red";
      document.getElementById("nikah_notifnik").innerHTML = c;
      document.getElementById("nikah_job1").disabled = true;

    } else {
      document.getElementById("nikah_job1").disabled = false;
      document.getElementById("nikah_notifnik").innerHTML = "";
    }
  }

  function nikah_ceknik11() {
    var target = document.getElementById("nikah_nik11");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("nikah_notifnik11").style.color = "red";
      document.getElementById("nikah_notifnik11").innerHTML = c;
      document.getElementById("nikah_agama11").disabled = true;

    } else {
      document.getElementById("nikah_agama11").disabled = false;
      document.getElementById("nikah_notifnik11").innerHTML = "";
    }
  }

  function nikah_ceknik12() {
    var target = document.getElementById("nikah_nik12");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("nikah_notifnik12").style.color = "red";
      document.getElementById("nikah_notifnik12").innerHTML = c;
      document.getElementById("nikah_agama12").disabled = true;

    } else {
      document.getElementById("nikah_agama12").disabled = false;
      document.getElementById("nikah_notifnik12").innerHTML = "";
    }
  }

  function nikah_ceknik2() {
    var target = document.getElementById("nikah_nik2");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("nikah_notifnik2").style.color = "red";
      document.getElementById("nikah_notifnik2").innerHTML = c;
      document.getElementById("nikah_job2").disabled = true;

    } else {
      document.getElementById("nikah_job2").disabled = false;
      document.getElementById("nikah_notifnik2").innerHTML = "";
    }
  }

  function nikah_ceknik21() {
    var target = document.getElementById("nikah_nik21");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("nikah_notifnik21").style.color = "red";
      document.getElementById("nikah_notifnik21").innerHTML = c;
      document.getElementById("nikah_agama21").disabled = true;

    } else {
      document.getElementById("nikah_agama21").disabled = false;
      document.getElementById("nikah_notifnik21").innerHTML = "";
    }
  }

  function nikah_ceknik22() {
    var target = document.getElementById("nikah_nik22");
    var batas_karakter = 16;
    var a = target.value.length;
    var b = "NIK Harus 16 Digit! Anda menginput ";
    var d = " karakter"
    var c = b + a + d;


    if (target.value.length !== batas_karakter) {
      document.getElementById("nikah_notifnik22").style.color = "red";
      document.getElementById("nikah_notifnik22").innerHTML = c;
      document.getElementById("nikah_agama22").disabled = true;

    } else {
      document.getElementById("nikah_agama22").disabled = false;
      document.getElementById("nikah_notifnik22").innerHTML = "";
    }
  }

  function tandatangan() {
    var peg = document.getElementById("ttd").value;

    $.ajax({
      url: "<?php echo base_url('sip/welcome/periksa') ?>",
      method: "POST",
      data: {
        peg: peg
      },
      async: false,
      dataType: 'json',
      success: function(data) {
        // alert(data[0].mp_nip);
        document.getElementById("nipttd").value = data[0].mp_nip;
        document.getElementById("golttd").value = data[0].mp_golongan;
        document.getElementById("jabttd").value = data[0].mp_jabatan;
        document.getElementById("mpket").value = data[0].mp_ket;
      }
    });

  }

  function alm1() {
    var checkBox = document.getElementById("a1");
    var s1 = document.getElementById("nikah_kode").value;
    if (checkBox.checked == true) {
      document.getElementById("nikah_bnik11").style.display = "none";
      document.getElementById("nikah_nik11").required = false;
      document.getElementById("nikah_nik11").value = "";
      document.getElementById("nikah_bagama11").style.display = "none";
      document.getElementById("nikah_agama11").required = false;
      document.getElementById("nikah_agama11").value = "";
      document.getElementById("nikah_btempat11").style.display = "none";
      document.getElementById("nikah_tempat11").required = false;
      document.getElementById("nikah_tempat11").value = "";
      document.getElementById("nikah_btgl11").style.display = "none";
      document.getElementById("nikah_tgl11").required = false;
      document.getElementById("nikah_tgl11").value = "";
      document.getElementById("nikah_bkwn11").style.display = "none";
      document.getElementById("nikah_kwn11").required = false;
      document.getElementById("nikah_kwn11").value = "";
      document.getElementById("nikah_bjob11").style.display = "none";
      document.getElementById("nikah_job11").required = false;
      document.getElementById("nikah_job11").value = "";
      document.getElementById("nikah_balamat11").style.display = "none";
      document.getElementById("nikah_alamat11").required = false;
      document.getElementById("nikah_alamat11").value = "";
      document.getElementById("stal1").value = 1;
    } else {
      if (s1 != 3) {
        document.getElementById("stal1").value = 0;
        document.getElementById("nikah_bnik11").style.display = "block";
        document.getElementById("nikah_nik11").required = true;
        document.getElementById("nikah_bagama11").style.display = "block";
        document.getElementById("nikah_agama11").required = true;
        document.getElementById("nikah_btempat11").style.display = "block";
        document.getElementById("nikah_tempat11").required = true;
        document.getElementById("nikah_btgl11").style.display = "block";
        document.getElementById("nikah_tgl11").required = true;
        document.getElementById("nikah_bkwn11").style.display = "block";
        document.getElementById("nikah_kwn11").required = true;
        document.getElementById("nikah_bjob11").style.display = "block";
        document.getElementById("nikah_job11").required = true;
        document.getElementById("nikah_balamat11").style.display = "block";
        document.getElementById("nikah_alamat11").required = true;
      } else {
        document.getElementById("stal1").value = 0;
      }
    }
  }

  function almh1() {
    var checkBox = document.getElementById("ah1");
    if (checkBox.checked == true) {
      document.getElementById("nikah_bnik12").style.display = "none";
      document.getElementById("nikah_nik12").required = false;
      document.getElementById("nikah_nik12").value = "";
      document.getElementById("nikah_bagama12").style.display = "none";
      document.getElementById("nikah_agama12").required = false;
      document.getElementById("nikah_agama12").value = "";
      document.getElementById("nikah_btempat12").style.display = "none";
      document.getElementById("nikah_tempat12").required = false;
      document.getElementById("nikah_tempat12").value = "";
      document.getElementById("nikah_btgl12").style.display = "none";
      document.getElementById("nikah_tgl12").required = false;
      document.getElementById("nikah_tgl12").value = "";
      document.getElementById("nikah_bkwn12").style.display = "none";
      document.getElementById("nikah_kwn12").required = false;
      document.getElementById("nikah_kwn12").value = "";
      document.getElementById("nikah_bjob12").style.display = "none";
      document.getElementById("nikah_job12").required = false;
      document.getElementById("nikah_job12").value = "";
      document.getElementById("nikah_balamat12").style.display = "none";
      document.getElementById("nikah_alamat12").required = false;
      document.getElementById("nikah_alamat12").value = "";
      document.getElementById("stal2").value = 1;
    } else {
      document.getElementById("stal2").value = 0;
      document.getElementById("nikah_bnik12").style.display = "block";
      document.getElementById("nikah_nik12").required = true;
      document.getElementById("nikah_bagama12").style.display = "block";
      document.getElementById("nikah_agama12").required = true;
      document.getElementById("nikah_btempat12").style.display = "block";
      document.getElementById("nikah_tempat12").required = true;
      document.getElementById("nikah_btgl12").style.display = "block";
      document.getElementById("nikah_tgl12").required = true;
      document.getElementById("nikah_bkwn12").style.display = "block";
      document.getElementById("nikah_kwn12").required = true;
      document.getElementById("nikah_bjob12").style.display = "block";
      document.getElementById("nikah_job12").required = true;
      document.getElementById("nikah_balamat12").style.display = "block";
      document.getElementById("nikah_alamat12").required = true;
    }
  }

  function alm2() {
    var checkBox = document.getElementById("a2");
    var s1 = document.getElementById("nikah_kode").value;
    if (checkBox.checked == true) {
      document.getElementById("nikah_bnik21").style.display = "none";
      document.getElementById("nikah_nik21").required = false;
      document.getElementById("nikah_nik21").value = "";
      document.getElementById("nikah_bagama21").style.display = "none";
      document.getElementById("nikah_agama21").required = false;
      document.getElementById("nikah_agama21").value = "";
      document.getElementById("nikah_btempat21").style.display = "none";
      document.getElementById("nikah_tempat21").required = false;
      document.getElementById("nikah_tempat21").value = "";
      document.getElementById("nikah_btgl21").style.display = "none";
      document.getElementById("nikah_tgl21").required = false;
      document.getElementById("nikah_tgl21").value = "";
      document.getElementById("nikah_bkwn21").style.display = "none";
      document.getElementById("nikah_kwn21").required = false;
      document.getElementById("nikah_kwn21").value = "";
      document.getElementById("nikah_bjob21").style.display = "none";
      document.getElementById("nikah_job21").required = false;
      document.getElementById("nikah_job21").value = "";
      document.getElementById("nikah_balamat21").style.display = "none";
      document.getElementById("nikah_alamat21").required = false;
      document.getElementById("nikah_alamat21").value = "";
      document.getElementById("stal3").value = 1;
    } else {
      if (s1 != 2) {
        document.getElementById("stal3").value = 0;
        document.getElementById("nikah_bnik21").style.display = "block";
        document.getElementById("nikah_nik21").required = true;
        document.getElementById("nikah_bagama21").style.display = "block";
        document.getElementById("nikah_agama21").required = true;
        document.getElementById("nikah_btempat21").style.display = "block";
        document.getElementById("nikah_tempat21").required = true;
        document.getElementById("nikah_btgl21").style.display = "block";
        document.getElementById("nikah_tgl21").required = true;
        document.getElementById("nikah_bkwn21").style.display = "block";
        document.getElementById("nikah_kwn21").required = true;
        document.getElementById("nikah_bjob21").style.display = "block";
        document.getElementById("nikah_job21").required = true;
        document.getElementById("nikah_balamat21").style.display = "block";
        document.getElementById("nikah_alamat21").required = true;
      } else {
        document.getElementById("stal3").value = 0;
      }
    }
  }

  function almh2() {
    var checkBox = document.getElementById("ah2");
    if (checkBox.checked == true) {
      document.getElementById("nikah_bnik22").style.display = "none";
      document.getElementById("nikah_nik22").required = false;
      document.getElementById("nikah_nik22").value = "";
      document.getElementById("nikah_bagama22").style.display = "none";
      document.getElementById("nikah_agama22").required = false;
      document.getElementById("nikah_agama22").value = "";
      document.getElementById("nikah_btempat22").style.display = "none";
      document.getElementById("nikah_tempat22").required = false;
      document.getElementById("nikah_tempat22").value = "";
      document.getElementById("nikah_btgl22").style.display = "none";
      document.getElementById("nikah_tgl22").required = false;
      document.getElementById("nikah_tgl22").value = "";
      document.getElementById("nikah_bkwn22").style.display = "none";
      document.getElementById("nikah_kwn22").required = false;
      document.getElementById("nikah_kwn22").value = "";
      document.getElementById("nikah_bjob22").style.display = "none";
      document.getElementById("nikah_job22").required = false;
      document.getElementById("nikah_job22").value = "";
      document.getElementById("nikah_balamat22").style.display = "none";
      document.getElementById("nikah_alamat22").required = false;
      document.getElementById("nikah_alamat22").value = "";
      document.getElementById("stal4").value = 1;
    } else {
      document.getElementById("stal4").value = 0;
      document.getElementById("nikah_bnik22").style.display = "block";
      document.getElementById("nikah_nik22").required = true;
      document.getElementById("nikah_bagama22").style.display = "block";
      document.getElementById("nikah_agama22").required = true;
      document.getElementById("nikah_btempat22").style.display = "block";
      document.getElementById("nikah_tempat22").required = true;
      document.getElementById("nikah_btgl22").style.display = "block";
      document.getElementById("nikah_tgl22").required = true;
      document.getElementById("nikah_bkwn22").style.display = "block";
      document.getElementById("nikah_kwn22").required = true;
      document.getElementById("nikah_bjob22").style.display = "block";
      document.getElementById("nikah_job22").required = true;
      document.getElementById("nikah_balamat22").style.display = "block";
      document.getElementById("nikah_alamat22").required = true;
    }
  }
</script>