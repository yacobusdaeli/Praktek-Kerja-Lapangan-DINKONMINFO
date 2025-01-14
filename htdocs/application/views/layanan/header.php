<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan Diskominfo Kab Purbalingga</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url()?>assets/img/komin_icon.ico" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="<?=base_url()?>assets/css/variables.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
</head>



<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="<?=base_url()?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <h1>KOMINFO</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="bi bi-person fs-3"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body mx-3">
                    <div class="text-center w-100 mb-3">
                        <img src="<?=base_url()?>assets/img/kisspng-kominfo-jica-expert-ministry-of-communication-and-id-5ac4684772d1d0.1483048215228211914703.png"
                            class="img-fluid" width="100px">
                    </div>
                    <h5 class="w-100 fs-3">Login</h5>
                    <?php if ($this->session->flashdata('dc')) {
    echo '<div class="alert alert-danger" role="alert">';
    echo $this->session->flashdata('dc');
    echo '</div>';
}?>
                    <form method="POST" action="<?=base_url('layanan/aksi_login');?>">
                        <div class="mb-4">
                            <i class="bi bi-person-fill"></i>
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                value="<?=set_value('username');?>">
                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="mb-4">
                            <i class="bi bi-eye-fill"></i>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <input type="submit" class="btn btn-primary text-center w-100" value="Login">

                    </form>
                </div>
                <!-- <div class="modal-footer text-center">

                </div> -->
            </div>
        </div>
    </div>


