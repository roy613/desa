<script>
    function tolak_berkas(a,b) {
        var a= a;

        $.ajax({
            url: "<?php echo base_url('be/proses/tolak_berkas') ?>",
            method: "POST",
            data: {
                a: a
            },
        });
        Swal.fire({
            title: 'Berkas di Tolak Persyaratan Tidak Lengkap!',
            text: "Apakah Anda Ingin Mengirim Pemberitahuan Via Whatsapp kepada Pemohon ?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: 'green',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Kirim WA',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                window.open("https://kirimwa.id/petok/"+b+":(uji_coba)_Mohon_Maaf_Syarat_Anda_tidak_lengkap,_Silahkan_lengkapi_lagi!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!", '_blank');
                // window.location.href="https://kirimwa.id/petok/"+a+":(uji_coba)_Mohon_Maaf_Syarat_Anda_tidak_lengkap,_Silahkan_lengkapi_lagi!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!";
            }
        });
    }
    function berkas_selesai(a,b) {
        var a= a;

        $.ajax({
            url: "<?php echo base_url('be/proses/selesai_berkas') ?>",
            method: "POST",
            data: {
                a: a
            },
        });
        Swal.fire({
            title: 'Berkas Telah Selesai!',
            text: "Apakah Anda Ingin Mengirim Pemberitahuan Via Whatsapp kepada Pemohon ?",
            icon: 'success',
            showCancelButton: true,
            confirmButtonColor: 'green',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Kirim WA',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                window.open("https://kirimwa.id/petok/"+b+":(uji_coba)Surat_anda_sudah_selesai_dan_bisa_diambil_di_Kantor_Camat!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!", '_blank');
                // window.location.href="https://kirimwa.id/petok/"+a+":(uji_coba)Surat_anda_sudah_selesai_dan_bisa_diambil_di_Kantor_Camat!_pesan_ini_dikirim_secara_otomatis_dengan_menggunakan_petokapps._Anda_tidak_perlu_membalasnya._Terima_kasih!!!" ;
            }
        });
    }
</script>