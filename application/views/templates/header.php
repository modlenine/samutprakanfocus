<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">

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
	</style>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav classic navbar-light navbar-bg-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?=base_url()?>">หน้าแรก</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">หาอะไรเลือกเลย</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="./blog.html">หางาน</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="./blog2.html">หาห้องเช่า</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="./blog3.html">หาของกิน</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="./blog3.html">หาที่เที่ยว</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url("contactus.html")?>">ติดต่อเรา</a></li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-signin">เข้าสู่ระบบ</a>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-signup">ลงทะเบียน</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start">ยินดีต้อนรับ</h2>
              <p class="lead mb-6 text-start">กรอกชื่อผู้ใช้งานและรหัสผ่านเพื่อเข้าสู่โปรแกรม</p>
              <form class="text-start mb-3">
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                  <label for="loginEmail">ชื่อผู้ใช้งาน</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPassword">รหัสผ่าน</label>
                </div>
                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2" id="btn-login" name="btn-login">ลงชื่อเข้าใช้</a>
              </form>
              <!-- /form -->
              <p class="mb-1"><a href="#" class="hover">ลืมรหัสผ่าน?</a></p>
              <p class="mb-0">ยังไม่ได้สมัครสมาชิก? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">สมัครสมาชิก</a></p>
              <div class="divider-icon my-4">หรือ</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-line"><i class="uil uil-line"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
      <div class="modal fade" id="modal-signup" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
              <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
              <form class="text-start mb-3">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" placeholder="Name" id="loginName">
                  <label for="loginName">Name</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPassword">Password</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPasswordConfirm">Confirm Password</label>
                </div>
                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
              </form>
              <!-- /form -->
              <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
    </header>
</body>

<script>
    const loginbtn = document.getElementById("btn-login");
    loginbtn.addEventListener("click" , checklogin('test'));
    function checklogin(input)
    {
      console.log(input);
    }
</script>

</html>