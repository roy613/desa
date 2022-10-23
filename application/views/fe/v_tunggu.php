<!DOCTYPE html>
<html lang="en">
<head>
	<title>Layanan Online | Desa Karangan Hilir</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/img/logokutim.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tunggu/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('<?php echo base_url(); ?>assets/tunggu/images/1.jpeg');">
		<div class="wsize1">
			<p class="txt-center p-b-23">
				<!-- <i class="zmdi zmdi-card-giftcard cl0 fs-60"></i> -->
				<img src="<?php echo base_url(); ?>assets/img/logokutim.png" alt="logo" height="80px">
			</p>

			<h3 class="l1-txt1 txt-center p-b-22">
				COOMING SOON
			</h3>

			<p class="txt-center m2-txt1 p-b-67">
				Aplikasi Pelayanan Ini Akan Aktif Setelah Di launching!
			</p>

			<div class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 days">35</span>
					<span class="m2-txt2">Days</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>
				
				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 hours">17</span>
					<span class="m2-txt2">Hours</span>
				</div>

				<span class="l1-txt2 p-b-22 respon2">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 minutes">50</span>
					<span class="m2-txt2">Minutes</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 seconds">39</span>
					<span class="m2-txt2">Seconds</span>
				</div>
			</div>

		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/countdowntime/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 71,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/tunggu/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/tunggu/js/main.js"></script>

</body>
</html>