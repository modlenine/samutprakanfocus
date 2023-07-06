<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">

	<!-- Site favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/')?>vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/')?>vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/')?>vendors/images/favicon-16x16.png"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>vendors/styles/style.css">
	

    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>src/plugins/sweetalert2/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>css/custom.css">

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/')?>fileupload/bs-filestyle.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url('assets/')?>fileupload/bootstrap-icons.css" type="text/css" />

	<link rel="stylesheet" href="<?=base_url()?>assets/ekko_lightbox/ekko-lightbox.css" type="text/css"/>


	<!-- Date picker -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/default/zebra_datepicker.min.css" type="text/css" />

    <script src="<?=base_url('assets/js/jquery.min.js?v='.filemtime('./assets/js/jquery.min.js'))?>"></script>
	<script src="<?=base_url('assets/js/vue.js')?>"></script>
	<script src="<?=base_url('assets/js/axios.min.js')?>"></script>

	<style>
		/* thai */
		@font-face {
			font-family: 'Sarabun';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Sarabun Regular'), local('Sarabun-Regular'), url(<?= base_url('assets/fonts/DtVjJx26TKEr37c9aAFJn2QN.woff2') ?>) format('woff2');
			unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
		}

		/* vietnamese */
		@font-face {
			font-family: 'Sarabun';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Sarabun Regular'), local('Sarabun-Regular'), url(<?= base_url('assets/fonts/DtVjJx26TKEr37c9aBpJn2QN.woff2') ?>) format('woff2');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Sarabun';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Sarabun Regular'), local('Sarabun-Regular'), url(<?= base_url('assets/fonts/DtVjJx26TKEr37c9aBtJn2QN.woff2') ?>) format('woff2');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Sarabun';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Sarabun Regular'), local('Sarabun-Regular'), url(<?= base_url('assets/fonts/DtVjJx26TKEr37c9aBVJnw.woff2') ?>) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		* {
			font-family: 'Sarabun', sans-serif;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		label {
			font-family: 'Sarabun', sans-serif !important;
		}

		body {
			font-size: .9rem !important;
		}

		.form-control {
			font-size: .9rem !important;
		}

		.process-steps li h5 {
			font-size: .85rem !important;
		}

		.col-search-input {
			width: 100% !important;
		}


		
	</style>

</head>
<?php
	getModal("machine/modals/manage_runscreen_modal");
	getModal("machine/modals/create_template_modal");
	getModal("machine/modals/edit_template_modal");
	getModal("modal/addNewData_modal");
	getModal("graph/modal/qcsampling_modal");
?>

<div class="loader">
	<div></div>
</div>

<script> 
	 // Code page Load
	$(window).on('load',function(){ 
    $('.loader').fadeOut(100); 
  }) 
</script>

<body>
	

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				
			</div>
		</div>
		<div class="header-right">
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="<?=getUserImage()?>" alt="">
						</span>
						<span class="user-name"><?=getUser()->Fname." ".getUser()->Lname?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
						<a class="dropdown-item" id="logoutBtn" href="#"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?=base_url()?>">
				<!-- <img src="<?=base_url('assets/')?>vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="<?=base_url('assets/')?>vendors/images/deskapp-logo-white.svg" alt="" class="light-logo"> -->
				<span style="font-size:28px;"><b>เครื่องมิกซ์</b></span>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="<?=base_url()?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">หน้าหลัก</span>
						</a>
					</li>
			
					<li id="settingMenuLi" style="display:none;">
						<a href="<?=base_url('main/machine')?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">ตั้งค่าเทมเพลต</span>
						</a>
					</li>
			
					<!-- <li>
						<a href="sitemap.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">ขอความช่วยเหลือ</span>
						</a>
					</li> -->
					<li>
						<div class="dropdown-divider"></div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

    <script>
        const url = "<?php echo base_url()?>";

        $(document).ready(function(){
			const ecode = "<?php echo getUser()->ecode; ?>";
			const adminEcode = ['M1809' , 'M1413' , 'M0506' , 'D2022' , 'M2067'];

			if(ecode == "M1809" ||
			ecode == "M1413" ||
			ecode == "M0506" ||
			ecode == "D2022" ||
			ecode == "M2067" ||
			ecode == "M0282"){
				$('#settingMenuLi').css('display' , '');
			}else{
				$('#settingMenuLi').css('display' , 'none');
			}

			// controlButton_foradmin(ecode);

            $('#logoutBtn').click(function(){
                logoutConfirm();
            });


			//control button
			function controlButton_foradmin(ecode)
			{
				//Control ปุ่มลงทะเบียน
				let ecodeAdminTrue = adminEcode.filter(function(value , index, arr){
					if(value == ecode){
						$('#settingMenuLi').css('display' , '');
						return value;
					}else{
						$('#settingMenuLi').css('display' , 'none');
						return null;
					}
					
				});
				console.log(ecodeAdminTrue);
			}

			
        });

		


        function logoutConfirm()
        {
            swal({
                title: 'ต้องการลงชื่ออกจากระบบ ใช่หรือไม่',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'ยืนยัน',
				cancelButtonText:'ยกเลิก'
            }).then((result)=> {
                if(result.value == true){
                    location.href = url+'login/logout';
                }
            });
        }
    </script>


