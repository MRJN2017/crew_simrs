<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/sim.ico">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

    <title>SIM RS</title>
    <script type="application/javascript">
        /** After windod Load */
        $(window).bind("load", function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(800, 0).slideUp(800, function() {
                    $(this).remove();
                });
            }, 800);
        });
    </script>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= base_url('assets/'); ?>images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4">Aplikasi dibuat untuk crew SIM RS dalam pencacatan kegiatan pekerjaan yang sedang berlangsung pada waktu jam kerja</p>
                            </div>
                            <?php if (@$this->session->error) : ?>
                                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                    <button class="close" aria-dismissable="alert">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <p><?= $this->session->error ?></p>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('auth/login') ?>" method="post">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>



                            </form>
                            <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
                                </div>                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
</body>

</html>