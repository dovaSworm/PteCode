<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Pro-technology electronics nudi veliki izbor lemilica, sistema za montažu pcb komponenti, robota kao i antistaički program odeće i podova.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="rdDesign">
    <meta name="keywords" content="pro-technology, sistemi, oprema, electronics, prodaja, lemilice, roboti, asembliranje, motnaža, sistemi za montažu, ESD, PCB,  manualni sistemi, automatski sistemi, izvlačenje isparenja, dodatna oprema, štampači, antistatički program, antistatičke majice, antistatički podovi, antistatički mantili, vizuelna kontrola, desktop peći, peci, antistatički, video mikroskpi">
    <meta name="google-site-verification" content="pMiLlWc0tbntvS3Ky6VZVY9rHKxaVqnqZHD8daTZEus" />
    <link rel="canonical" href="https://protech-electronics.rs" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/ptefavicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/ptefavicon.png"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title><?php echo isset($title) ? $title : '' ; ?></title>

</head>


<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top d-block">


            <div class="container">

                <div id="logo">
                    <a class="navbar-brand" href="<?php echo base_url();?>"><img
                            src="<?php echo base_url(); ?>assets/img/prologo.png" alt="Pro-technology"></a>
                    <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:063/810-1242">&nbsp;063/810-1242</a>
                </div>
                <button id="triangle-up" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <h2>PRO-TECHNOLOGY Electronics</h2>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php">Početna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#about">O nama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#contact">Kontakt</a>
                        </li>
                        <li class="nav-item dropdown dropdown-menu-right">
                            <a class="nav-link dropdown-toggle"
                                onClick="window.location.href = '<?php echo base_url();?>products';return false;"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Proizvodi
                            </a>
                            <ul class="dropdown-menu dropleft">

                                <li class="dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category_id=1">Lemilice i propratna
                                        oprema</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Lemilice">Lemilice</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Propratni-materijal">Propratna
                                                oprema i materijal</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Predgrejači">Predgrejači</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Stanica-vazduh">Stanice
                                            za topli vazduh-duvaljke</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category_id=2">Manuelni sistemi za SMD
                                        motažu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Manualni-printeri">Manualni
                                                štampači</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Manualni-polagač">Manualni
                                                SMD polagač</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Desktop-peći">Desktop
                                                peći</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category_id=4">Automatski sistemi za
                                        SMD motažu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Stencile-printeri">Stencile
                                                štampači</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=p-and-p">Pick &
                                                place mašine</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Peći-lemljenje">Peći
                                                za lemljenje</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Talasno-lemljenje">Sistemi
                                                za talasno lemljenje</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Optička-inspekcija">Sistemi
                                                za Optičku inspekciju</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=Automatski-dodaci">Dodatna
                                                oprema za automatske sisteme</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="<?php echo base_url(); ?>products/?category_id=5">Oprema za vizuelnu
                                        kontrolu</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="<?php echo base_url(); ?>products/?category_id=3">Sistemi za izvlačenje
                                        isparenja</a>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category_id=7">Antistatički program ESD</a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Podloge">Antistatik
                                            podloge</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Narukvice">Antistatik narukvice i kablovi</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Kese">Antistatik kese</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Rukavice">Antistatik rukavice</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Testeri">Testeri i merna ESD oprema</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Odeća">Antistatička
                                            odeća</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Stolice">Antistatik
                                            stolice</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Stolovi">Antistatik
                                        radni stolovi</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Podovi">Antistatički
                                        podovi</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Kutije">Kutije, kontejneri, ormani, stalci</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Četke">Antistatik
                                            četke</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Trake">Trake i nalepnice za upozoravanje</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Jonizatori">Jonizatori</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Hemija">ESD hemijska sredstva</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>products/?subcategory=Dodatak">Dodatna oprema</a>
                                    </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="<?php echo base_url(); ?>products/?category_id=6">Roboti</a>
                                </li>
                            </ul>
                        </li>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>products/create">Unesi proizvod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Izloguj se</a>
                        </li>
                        <?php endif; ?>
                        <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a title="samo za admina" class="nav-link" href="<?php echo base_url(); ?>users/login"><i
                                    class="far fa-user-circle"></i></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div id="zaNaslov">

            </div>
        </nav>
    </header>
    <?php if($this->session->flashdata('user_registered')) : ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>'; ?>
    <?php endif ; ?>
    <?php if($this->session->flashdata('product_created')) : ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_created') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif ; ?>
    <?php if($this->session->flashdata('product_updated')) : ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_updated') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif ; ?>
    <?php if($this->session->flashdata('product_deleted')) : ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_deleted') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif ; ?>
    <?php if($this->session->flashdata('user_loggedin')) : ?>
    <?php echo '<p class="alert alert-success"  style="z-index:500000000000">' . $this->session->flashdata('user_loggedin') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif ; ?>
    <?php if($this->session->flashdata('user_loggedout')) : ?>
    <?php echo '<p class="alert alert-success"  style="z-index:500000000000">' . $this->session->flashdata('user_loggedout') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif ; ?>
    <?php if($this->session->flashdata('login_failed')) : ?>
    <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif ; ?>

    <input type="hidden" name="adminovo" id="adminovo" value="<?php echo $this->session->userdata('user_id'); ?>">