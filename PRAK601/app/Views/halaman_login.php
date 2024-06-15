<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .gradient-custom {
            background: linear-gradient(45deg, #2c3e50, #4ca1af);
        }
        .btn-outline-custom {
            color: white; 
            background-color: rgb(75, 80, 236);
            padding: 12px 30px; 
            width: 100%; 
            border-radius: 20px;
        }

        .btn-outline-custom:hover {
            background-color: grey; 
            color: #fff; 
        }
    </style>
</head>
<body class="text-center">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url(); ?>/login/process">
                                <?= csrf_field(); ?>
                                <h1 class="h3 mb-3 fw-normal text-uppercase">Login</h1>
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" placeholder="Username" required autofocus>
                                </div>
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" required>
                                </div>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn-outline-custom btn-lg px-5" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
