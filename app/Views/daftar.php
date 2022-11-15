
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Daftar | Aplikasi Perpustakaan</title>


        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url() ?>/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?= base_url() ?>/assets/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url() ?>/assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
      
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="hero-static">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <!-- Sign Up Block -->
                                <div class="block block-themed block-fx-shadow mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Buat Akun</h3>
                                        <div class="block-options">
                                            <!-- <a class="btn-block-option font-size-sm" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">Sudah Punya Akun</a> -->
                                            <a class="btn-block-option" href="/login" data-toggle="tooltip" data-placement="left" title="Sudah Punya Akun">
                                                <i class="fa fa-sign-in-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="p-sm-3 px-lg-4 py-lg-5">
                                        <h1 class="mb-2">Perpustakaan AMIK GLOBAL</h1>
                                        <p>Silahkan isi form terlebih dahulu.</p>
                                            <form class="js-validation-signup" action="/proses_daftar" method="POST">
                                                <div class="py-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-lg form-control-alt" id="username" name="username" placeholder="Masukkan Nama Anda">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-lg form-control-alt" id="umur" name="umur" placeholder="Berapa Umur Anda">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control form-control-lg form-control-alt" placeholder="Alamat Anda"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Masukkan Password Anda">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                            <label class="custom-control-label font-w400" for="signup-terms">Saya Menyetujui Semua Kondisi & Persyaratan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-xl-5">
                                                        <button type="submit" class="btn btn-block btn-success">
                                                            <i class="fa fa-fw fa-plus mr-1"></i> Daftar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Sign Up Form -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sign Up Block -->
                            </div>
                        </div>
                    </div>
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong>OneUI 4.3</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Terms Modal -->
        <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-link mr-2" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">I Agree</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->


        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out <?= base_url() ?>/assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the <?= base_url() ?>/assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            <?= base_url() ?>/assets/js/core/jquery.min.js
            <?= base_url() ?>/assets/js/core/bootstrap.bundle.min.js
            <?= base_url() ?>/assets/js/core/simplebar.min.js
            <?= base_url() ?>/assets/js/core/jquery-scrollLock.min.js
            <?= base_url() ?>/assets/js/core/jquery.appear.min.js
            <?= base_url() ?>/assets/js/core/js.cookie.min.js
        -->
        <script src="<?= base_url() ?>/assets/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at <?= base_url() ?>/assets/_es6/main/app.js
        -->
        <script src="<?= base_url() ?>/assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url() ?>/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url() ?>/assets/js/pages/op_auth_signup.min.js"></script>
    </body>
</html>