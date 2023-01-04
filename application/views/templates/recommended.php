<div class="col col-lg-8 col-12">
    <h3 class="text-center foot-h">&nbspSpecijalna ponuda&nbsp<i class="fa fa-bullhorn"></i></h3>
    <div class="container carusel-container">
        <div id="carousel-akcija" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-akcija" data-slide-to="0" class="active"></li>https://protech-electronics.rs/assets/img/kayo.jpg
                <li data-target="#carousel-akcija" data-slide-to="1"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item  active">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/1.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/2.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/3.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/4.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/5.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/6.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/7.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/8.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/9.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/10.jpg" alt="Slide">
                </div>
                <div class="carousel-item">
                    <img data-enlargable class="d-block w-100" src="<?php echo base_url(); ?>assets/img/11.jpg" alt="Slide">
                </div>
            </div>
            <div class="control-holder text-center">
                <a class="carousel-control-prev" href="#carousel-akcija" role="button" data-slide="prev">
                <button class="button-33" role="button"><<</button>
                </a>
                <a class="carousel-control-next" href="#carousel-akcija" role="button" data-slide="next">
                <button class="button-33" role="button">>></i></button>
                </a>
            </div>
        </div>
    </div>
    <h3 class="text-center foot-h">&nbspPreporučujemo&nbsp<i class="far fa-thumbs-up"></i></h3>
    <div class="row no-gutters d-flex justify-content-around rc-holder">
        <?php foreach ($products as $product) : ?>
            <div class="recom-card flex-column">
                <a href="<?php echo site_url('products/' . $product['slug']); ?>">
                    <img src="<?php echo base_url(); ?>assets/img/productimg/<?php echo $product['product_image'] ?>" alt="Prva slika ">
                    <h4><?php echo $product['title']; ?></h4>
                    <p><?php $karakter_niz = explode(', ', $product['karakteristike']);
                        $novi_niz = array($karakter_niz[0], $karakter_niz[1] ?? "-", $karakter_niz[2] ?? "-");
                        ?>
                        <?php foreach ($novi_niz as $string) : ?>
                            <?php echo $string ?><br>
                        <?php endforeach; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>