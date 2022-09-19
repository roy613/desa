<footer class="main-footer">
    <strong>Aplikasi Layanan Online Desa Karangan Hilir</strong>
    | PetokSangkulirang
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved. -->
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/sparklines/sparkline.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/chart.js/Chart.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function() {
        $("#table1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": false,
            // "buttons": ["colvis"]
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        })
        // .buttons().container().appendTo('#table1_wrapper .col-md-6:eq(0)');
        $('#table2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#table3').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["print"]
        }).buttons().container().appendTo('#table3_wrapper .col-md-6:eq(0)');
        $('#table4').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["print"]
        }).buttons().container().appendTo('#table4_wrapper .col-md-6:eq(0)');
    });
    $('.modal').on('shown.bs.modal', function() {
        $(this).find('[autofocus]').focus();
    });
    $(function() {
        // Summernote
        $('#summernote').summernote()
    })
    $(function() {
        // Summernote
        $('#summernote1').summernote()
    })
    $(function() {
        // Summernote
        $('#summernote2').summernote()
    })
    $(function() {
        // Summernote
        $('#summernote3').summernote()
    })
</script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/be1/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/be1/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url(); ?>assets/be1/plugins/toastr/toastr.min.js"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>

<?php if ($this->session->flashdata()) { ?>
    <div id="flash-data" data-type="<?= $_SESSION['tittle']; ?>" data-message="<?= $_SESSION['text']; ?>"></div>
    <script>
        const flashData = document.getElementById("flash-data");
        const tittle = flashData.getAttribute('data-type');
        const text = flashData.getAttribute('data-message');
        Swal.fire({
            icon: 'success',
            title: tittle,
            text: text,
        });
    </script>
<?php } ?>
<?php if (isset($gambar_error)) { ?>
    <div id="gagal" data-type="<?= $gambar_error;  ?>"></div>
    <script>
        const flashData = document.getElementById("gagal");
        const text = flashData.getAttribute('data-type');

        Swal.fire({
            icon: 'error',
            title: 'GAGAL !!!',
            text: text,
        });
    </script>
<?php } ?>

<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });


    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") {
            return;
        }

        // original length
        var original_len = input_val.length;

        // initial caret position 
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val = left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = input_val;

            // final formatting

        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }
</script>
<script>
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = {
        labels: [
            'Puas',
            'Tidak Puas',
            'Tidak Survei',
        ],
        datasets: [{
            data: [700, 500, 400, ],
            backgroundColor: ['#279F4B', '#BD473C', '#BD473'],
        }]
    }
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })
</script>
<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('a6102b946dc5ba9a26c7', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(kata) {
        // alert(JSON.stringify(kata));
        // Toast.fire({
        // icon: 'success',
        // title: 'Permohonan Baru Diterima.'
        //   })
        Swal.fire({
            icon: 'success',
            title: "Perhatian!!",
            text: "Permohonan Baru Diterima, Silahkan Proses Segera ..",
        });
        //     $(document).Toasts('create', {
        //     title: 'Toast Title',
        //     autohide: true,
        //     delay: 750,
        //     body: 'Permohonan Baru Diterima, Silahkan Proses segera...'
        //   })

        $.ajax({
            url: "<?php echo base_url('be/home/periksa_jumlah') ?>",
            method: "POST",
            data: {},
            async: false,
            dataType: 'json',
            success: function(data) {
                // alert(data);
                document.getElementById("jumlah_notif").innerHTML = data[0].jumlah;
                
            }
        });
    });
</script>
<script>
    function permohonan() {        
            $.ajax({
                url: "<?php echo base_url('be/home/periksa_permohonan') ?>",
                method: "POST",
                data: {

                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';

                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<a href="<?php echo base_url() . "be/home/lihat_surat1/"; ?>'+data[i].pe_kode+'"'+' class="dropdown-item notif">'+
              '<div class="media">'+                
                '<div class="media-body">'+
                  '<h3 class="dropdown-item-title">'+
                  data[i].s_1 +
                    '<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>'+
                  '</h3>'+
                  '<p class="text-sm">'+data[i].s_jenispelayanan+'</p>'+
                  '<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>'+data[i].pe_tgl+'</p>'+
                '</div>'+
              '</div>'+
            '</a>'+
            '<div class="dropdown-divider"></div>';            

                    }

                    document.getElementById("test").innerHTML = html;

                }
            });
    }
</script>
</body>

</html>