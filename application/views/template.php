<!doctype html>
<html lang="en">

<head>
    <title>SIM RS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/sim.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets_template/css/style.css">
    <script>
        var BASEURL = '<?= base_url() ?>';
    </script>
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

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <h1><a href="<?= base_url('') ?>" class="logo">CREW SIM RS</a></h1>
            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="<?= base_url('') ?>"><span class="fa fa-home mr-3"></span> Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('patroli') ?>"><span class="fa fa-server mr-3"></span> Patroli Harian</a>
                </li>
                <li>
                    <a href="<?= base_url('patroli/form_penanganan') ?>"><span class="fa fa-bullhorn mr-3"></span> Form Penanganan</a>
                </li>
                <li>
                    <a href="<?= base_url('patroli/laporan') ?>"><span class="fa fa-bar-chart mr-3"></span> Laporan Patroli</a>
                </li>

                <br>

                <li>
                    <a href="<?= base_url('dashboard/logout') ?>"><span class="fa fa-sign-out mr-3"></span> Keluar</a>
                </li>

            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container-fluid">
                <div id="alert">
                <?php if (isset($this->session->response) && $this->session->response) : ?>
                        <div class="alert alert-<?= $this->session->response['status'] == 'error' ? 'danger' : $this->session->response['status'] ?> alert-dismissable fade show" role="alert">
                            <button class="close" aria-dismissable="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p><?= $this->session->response['message'] ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <?= $content ?>

            </div>

        </div>
    </div>

    <script src="<?= base_url('assets/'); ?>assets_template/js/jquery.min.js" defer></script>
    <script src="<?= base_url('assets/'); ?>assets_template/js/popper.js" defer></script>
    <script src="<?= base_url('assets/'); ?>assets_template/js/bootstrap.min.js" defer></script>
    <script src="<?= base_url('assets/'); ?>assets_template/js/main.js" defer></script>

</body>

</html>