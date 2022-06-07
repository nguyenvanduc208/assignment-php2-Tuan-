<?php
include_once "./app/views/client/layout/head.php";
include_once "./app/views/client/layout/header.php";
?>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4"><?= $title ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data as $item) {?>
            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="room">
                    <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= $item->image ?>);">
                    </a>
                    <div class="text p-3 text-center">
                        <h3 class="mb-3"><a href="rooms.html"><?= $item->name ?></a></h3>
                        <p><span class="price mr-2"><?= number_format($item->price, 2, '.', ',') ?> VND</span> <span class="per"><?php foreach ($_SESSION['category'] as $row) {
                        if ($item->cate_id == $row->id) {
                          echo $row->name;
                        }
                      } ?></span></p>
                        <hr>
                        <p class="pt-1"><a href="room-single.html" class="btn-custom">Xem chi tiết <span class="icon-long-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
include_once "./app/views/client/layout/footer.php";

?>