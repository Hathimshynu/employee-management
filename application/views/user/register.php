<html>

<head>



    <style>
        .gradient-custom {
            background: #9C27B0;
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="jquery-3.6.4.min.js"></script>



<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                            <form id='regist' method='post' enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-9 mb-9 lg-9 sm-9 ">

                                        <div class="form-outline">
                                            <label class="form-label pt-3" for="name">User Name</label>
                                            <input type="text" id="name" name='name' class="form-control form-control-lg " />
                                            <div id='nameerror'></div>
                                        </div>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-9 mb-9 lg-9 sm-9 ">

                                        <div class="form-outline">
                                            <label class="form-label pt-3" for="email">Email</label>
                                            <input type="email" id="email" name='email' class="form-control form-control-lg" />
                                            <div id='emailerror'></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9 mb-9 lg-9 sm-9 ">

                                        <div class="form-outline">
                                            <label class="form-label pt-3" for="mobile">Mobile Number</label>
                                            <input type="tel" id="mobile" name='mobile' class="form-control form-control-lg" />
                                            <div id='mobileerror'></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-9 mb-9 lg-9 sm-9 ">

                                        <div class="form-outline">
                                            <label class="form-label pt-3" for="password">password</label>
                                            <input type="password" id="password" name='password' class="form-control form-control-lg" />
                                            <div id='passworderror'></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-9 mb-9 lg-9 sm-9 ">

                                        <div class="form-outline">
                                            <label class="form-label pt-3" for="cpass">Confirm Password</label>
                                            <input type="password" id="cpass" name='cpass' class="form-control form-control-lg" />
                                            <div id='cpasserror'></div>
                                        </div>

                                    </div>
                                    <div id="passwordMatchStatus" class="text-danger"></div>
                                </div>


                                <div class="mt-4 pt-2">
                                    <button class="btn btn-primary btn-lg col-3" id='sbmt' type="submit" />Submit</button>
                                </div>

                                <div id='success-message' style='display:none' class="credential-container mt-2">
                                    <div class="row d-flex justify-content-center mb-0 pb-0 pt-1">
                                        <div class="col-lg-6 mb-0 pb-0">
                                            <div class="card text-center credential-card mb-0 pb-0">
                                                <p class="cred-details pt-3"><span style="color:#20604f;">User Name :</span> <span id='username' style="color:#ff0000;"></span> </p>
                                                <p class="cred-details"><span style="color:#20604f;">Password :</span> <span id='pass' style="color:#ff0000;"></span> </p>
                                                <a id="loginbtn" href="<?= BASEURL ?>user/login" type="button" class="btn mt-3 mt-sm-3 mt-lg-3 btn-success login-btn btn-label waves-effect waves-light rounded-pill"><i class=" ri-account-circle-fill label-icon align-middle rounded-pill fs-18 me-2"></i> Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>



</html>

<script src="<?= BASEURL ?>assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="<?= BASEURL ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?= BASEURL ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?= BASEURL ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="<?= BASEURL ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />

<script>
    $(document).ready(function() {
        $('#name').on('input', function() {
            $('#nameerror').text(''); // Clear the error message
        });

        $('#email').on('input', function() {
            $('#emailerror').text(''); // Clear the error message
        });

        $('#mobile').on('input', function() {
            $('#mobileerror').text(''); // Clear the error message
        });
        $('#password').on('input', function() {
            $('#passworderror').text(''); // Clear the error message
        });
        $('#cpass').on('input', function() {
            $('#cpasserror').text(''); // Clear the error message
        });

        $('#cpass').on('input', function() {
            $('#cpasserror').text(''); // Clear the error message
            checkPasswordMatch();
        });

        function checkPasswordMatch() {
            var password = $('#password').val();
            var cpass = $('#cpass').val();
            if (password === cpass) {
                $('#passwordMatchStatus').text('');
            } else {
                $('#passwordMatchStatus').text('Passwords do not match');
            }
        }

        $('#regist').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $('#sbmt').prop('disabled', true);
            $("#sbmt").html('Wait...');
            $.ajax({
                type: 'POST',
                url: '<?= BASEURL ?>user/regist_insert',
                data: new FormData(this),
                contentType: false, // Important for sending FormData
                processData: false,
                dataType: 'JSON',
                success: function(response) {
                    if (response.status == 'success') {

                        $('#success-message').show();

                        $('#username').text(response.username);
                        $('#pass').text(response.password);

                        var url = '<?= BASEURL ?>user/login';
                        $('#loginbtn').attr('href', url);

                        $("#regist")[0].reset();
                        $("#sbmt").prop("disabled", false);
                        $("#sbmt").html('Submit');
                        $('#imagePreview').hide();
                        Swal.fire('Success', response.message, 'success');
                    } else {
                        $("#nameerror").html(response.name_error);
                        $("#emailerror").html(response.email_error);
                        $("#mobileerror").html(response.mobile_error);
                        $("#passworderror").html(response.password_error);
                        $("#cpasserror").html(response.cpass_error);
                        $("#sbmt").prop("disabled", false);
                        $("#sbmt").html('Submit');
                    }
                },
                error: function() {
                    Swal.fire('Error!', 'An error occurred while processing your request.', 'error');
                }
            });
        });
    });
</script>


<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>