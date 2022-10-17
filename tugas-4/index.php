<?php
require __DIR__ . '/Meta/Header.php';
require __DIR__ . '/Meta/Footer.php';
include __DIR__ . '/View/Page.php';

use Meta\Header;
use Meta\Footer;
use View\Page;

Header::header('Home');
?>

<main>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Tempat Wisata di Kabupaten Subang</h1>
            <p class="col-md-8 fs-4">Berikut tempat wisata di Kabupaten Subang Jawa Barat</p>
        </div>
    </div>

    <div class="row">
        <?php $arrPost = count(Page::$arrPost); for ( $i = 1; $i <= $arrPost; $i++) : $post = 'post'.$i; ?>
        <div class="col-md-6 p-2">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <img src="<?php echo Page::$arrPost[$post]['thumbnail'] ?>" class="img-thumbnail w-100">

                <h2><?php echo Page::$arrPost[$post]['title'] ?></h2>
                <p><?php echo Page::$arrPost[$post]['excerpt'] ?></p>
                <a href="" class="btn btn-outline-light" type="button">Visit</a>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</main>

<?php
Footer::footer('../');
?>