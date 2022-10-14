<?php
require __DIR__ . '/Meta/Header.php';
require __DIR__ . '/Meta/Footer.php';

use Meta\Header;
use Meta\Footer;

Header::header('Home');
?>

<main>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Lorem</h1>
            <p class="col-md-8 fs-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui obcaecati autem eaque
                ut
                exercitationem eligendi nulla numquam necessitatibus maiores et.</p>
            <button class="btn btn-primary btn-lg" type="button">Learn More..</button>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Can Lorem, ipsum?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut fugiat laudantium dolorum reprehenderit
                    fugit voluptate, unde eveniet expedita sunt!</p>
                <button class="btn btn-outline-light" type="button">Visit</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Add Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aspernatur ad in id tenetur sint facilis
                    maiores accusantium. Harum, corrupti dolore suscipit ad voluptatem fugit enim ipsa. Necessitatibus error,
                    enim quae quos facilis eaque sunt dolorem nobis eum illo ratione?</p>
                <button class="btn btn-outline-secondary" type="button">Visit</button>
            </div>
        </div>
    </div>
</main>

<?php
Footer::footer('../');
?>