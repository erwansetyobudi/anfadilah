<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:27:04+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _home.php
# @Last modified by:   Erwan Setyo Budi
# @Last modified time: 2025-11-12T18:43:45+07:00

?>




<section id="section1 container-fluid">
    <header class="c-header">
        <div class="mask"></div>

        <?php
        // ------------------------------------------------------------------------
        // include navbar
        // ------------------------------------------------------------------------
        include '_navbar.php';  ?>
    </header>
    <?php
    // --------------------------------------------------------------------------
    // include search form part
    // --------------------------------------------------------------------------
    include '_search-form.php'; ?>
</section>

<!-- ======= Top Bar ======= -->




<div id="slims-home">
    <section class="mt-5 container">
        <h4 class="text-secondary text-center text-thin mt-5 mb-4"><?php echo __('Select the topic you are interested in'); ?></h4>
        <ul class="topic d-flex flex-wrap justify-content-center px-0">
            <li class="d-flex justify-content-center align-items-center m-2">
                <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                    <img src="<?php echo assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto" />
                    <?php echo __('Literature'); ?>
                </a>
            </li>
            <li class="d-flex justify-content-center align-items-center m-2">
                <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                    <img src="<?php echo assets('images/3-diploma.png'); ?>" width="80" class="mb-3 mx-auto" />
                    <?php echo __('Social Sciences'); ?>
                </a>
            </li>
            <li class="d-flex justify-content-center align-items-center m-2">
                <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                    <img src="<?php echo assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto" />
                    <?php echo __('Applied Sciences'); ?>
                </a>
            </li>
            <li class="d-flex justify-content-center align-items-center m-2">
                <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                    <img src="<?php echo assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto" />
                    <?php echo __('Art & Recreation'); ?>
                </a>
            </li>
            <li class="d-flex justify-content-center align-items-center m-2">
                <a href="javascript:void(0)" class="d-flex flex-column" data-toggle="modal" data-target="#exampleModal">
                    <img src="<?php echo assets('images/icon/grid_icon.png'); ?>" width="80" class="mb-3 mx-auto" />
                    <?php echo __('see more..'); ?>
                </a>
            </li>
        </ul>
    </section>



    <!-- Koleksi baru dan diperbarui -->
    <?php if ($sysconf['template']['classic_new_collection']) : ?>
        <section class="mt-5 container">
            <h4 class=" mb-4">
                <?php echo __('New collections + updated'); ?>
                <br>
                <small class="subtitle-section"><?php echo __('These are new collections list. Hope you like them. Maybe not all of them are new. But in term of time, we make sure that these are fresh from our processing oven'); ?></small>
            </h4>

            <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
            <slims-collection url="index.php?p=api/biblio/latest"></slims-collection>

        </section>
    <?php endif; ?>

    <!-- Yang populer di antara koleksi kami -->
    <?php if ($sysconf['template']['classic_popular_collection']) : ?>
        <section class="mt-5 container">
            <h4 class=" mb-4">
                <?php echo __('Popular among our collections'); ?>
                <br>
                <small class="subtitle-section"><?php echo __('Our library\'s line of collection that have been favoured by our users were shown here. Look for them. Borrow them. Hope you also like them'); ?></small>
            </h4>

            <slims-group-subject url="index.php?p=api/subject/popular"></slims-group-subject>
            <slims-collection url="index.php?p=api/biblio/popular"></slims-collection>

        </section>
    <?php endif; ?>


    <!-- Penikmat Koleksi tahun ini -->
    <?php if ($sysconf['template']['classic_top_reader']) : ?>
        <section class="mt-5 bg-white">
            <div class="container py-5">
                <h4 class="mb-4">
                    <?php echo __('Top reader of the year'); ?>
                    <br>
                    <small class="subtitle-section"><?php echo __('Our best users, readers, so far. Continue to read if you want your name being mentioned here'); ?></small>
                </h4>
                <slims-group-member url="index.php?p=api/member/top"></slims-group-member>
            </div>
        </section>
    <?php endif; ?>
<section class="container pb-4 mb-md-3">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="d-sm-flex justify-content-between align-items-center rounded-3 id-corner-top-left">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-sm-start">
                    <h4 class="fs-lg fw-light mb-2">Dapatkan akses ke berbagai macam buku, e-book, dan sumber daya lainnya dengan menjadi anggota perpustakaan kami. Bergabunglah dengan Perpustakaan Kami!.</h4>
                    <h4 class="mb-4">Kunjungi segera Perpustakaan</h4>
                    <a class="btn btn-primary btn-shadow btn-sm" href="index.php?p=member">Daftar</a>
                </div>
               
            </div>
        </div>
        <div class="col-md-6 mb-4">
             <img class="d-block ms-auto -mt-20" width="100%" src="template/default-blue/assets/images/joinus.png" alt="Shop Converse">
        </div>
    </div>
</section>

    <!-- service -->
    <div class="container-fluid custom-bg-tosca hero-header mb-5">
        <div class="container ">
            <div class="row g-5 ">
                <div class="col-lg-6 align-self-center text-lg-start mb-lg-5 pt-10">
                   Perpustakaan memiliki peran yang sangat penting bagi suatu institusi karena menjadi pusat sumber belajar, penelitian, dan pengembangan pengetahuan. Keberadaannya tidak hanya menyediakan akses terhadap koleksi bahan pustaka, tetapi juga menjadi ruang untuk membangun budaya literasi, berpikir kritis, dan inovasi. Bagi sivitas akademika, perpustakaan berfungsi sebagai sarana pendukung Tridharma Perguruan Tinggi — pendidikan, penelitian, dan pengabdian kepada masyarakat — dengan menyediakan informasi yang valid, mutakhir, dan relevan dengan kebutuhan institusi. Dengan manajemen yang baik dan pemanfaatan teknologi informasi, perpustakaan mampu menjadi jantung intelektual institusi yang mendorong peningkatan kualitas akademik serta reputasi lembaga secara keseluruhan.
                    
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                </br>
                    <img class="img-fluid pb-5 pl-20" width="100%" height="100%"  src="template/default-blue/assets/images/welcome.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->
<section class="container my-5">
    <h1 class="h1 pb-4 text-center">Berita Terbaru Perpustakaan</h1>
    <div class="row g-3">
        <?php
        // Array warna latar belakang
        $colors = ['#FFB6C1', '#87CEEB', '#FFD700', '#90EE90', '#FFA07A', '#9370DB', '#00CED1', '#F08080'];

        // Query untuk mendapatkan berita utama
        $current_news = "SELECT content_id, content_title, content_desc, content_path, is_news, last_update 
                         FROM content 
                         WHERE is_news IS NOT NULL 
                         ORDER BY input_date DESC LIMIT 8";
        $current_news_q = $dbs->query($current_news);

        if ($current_news_q && $current_news_q->num_rows > 0) {
            $i = 0;
            while ($current_news_d = $current_news_q->fetch_assoc()) {
                $notes = is_null($current_news_d['content_desc']) 
                    ? '<i style="color:#f00;">Tidak ada deskripsi</i>'
                    : substr($current_news_d['content_desc'], 0, 100) . '...';

                // Pilih warna berdasarkan indeks (looping jika lebih dari jumlah warna)
                $bgColor = $colors[$i % count($colors)];

                // Ambil huruf pertama dari judul
                $firstLetter = strtoupper(substr($current_news_d['content_title'], 0, 1));
                
                echo '
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-img-top d-flex align-items-center justify-content-center" 
                             style="height: 200px; background-color: ' . $bgColor . '; color: white; font-size: 96px; font-weight: bold; text-align: center;">
                             ' . $firstLetter . '
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">' . $current_news_d['content_title'] . '</h5>
                            <p class="card-text">' . $notes . '</p>
                            <p class="text-muted"><small>Terakhir diperbarui: ' . $current_news_d['last_update'] . '</small></p>
                            <a href="?p=' . $current_news_d['content_path'] . '" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>';
                
                $i++;
            }
        } else {
            echo '<p class="text-center">Tidak ada berita utama yang ditemukan.</p>';
        }
        ?>
    </div>
</section>


<section class="mt-5 bg-white">
    <section id="getApp">
        <div class="container py-5">
            <div class="section-heading scrollpoint sp-effect3">
                <h4 class="mb-4">
                    E-Resources<br> 
                    <small class="subtitle-section">Akses sumber daya digital Kesehatan terbaik untuk studi dan penelitian.</small>
                </h4>
            </div>
            <div class="row text-center">
                <!-- Islamic E-Resources -->
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://pubmed.ncbi.nlm.nih.gov/" target="_blank">
                            <img src="template/default-blue/assets/images/pubmed.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Pubmed</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://www.sciencedirect.com/" target="_blank">
                            <img src="template/default-blue/assets/images/sciencedirect.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Science Direct</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://www.scopus.com/sources.uri" target="_blank">
                            <img src="template/default-blue/assets/images/scopus.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Scopus</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://www.proquest.com/" target="_blank">
                            <img src="template/default-blue/assets/images/proquest.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Proquest</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://doaj.org/" target="_blank">
                            <img src="template/default-blue/assets/images/doaj.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>DOAJ</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://e-resources.perpusnas.go.id/" target="_blank">
                            <img src="template/default-blue/assets/images/perpusnas.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>E-Resources PNRI</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Islamic Journals -->
            <div class="row text-center mt-5">
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://iris.who.int/" target="_blank">
                            <img src="template/default-blue/assets/images/iris.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>IRIS</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://www.biomedcentral.com/" target="_blank">
                            <img src="template/default-blue/assets/images/bmc.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Biomed Central</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://scholar.google.com/" target="_blank">
                            <img src="template/default-blue/assets/images/scholar.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Google Scholar</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-48 pr-4 pb-4 mx-auto">
                    <div class="project about-item scrollpoint sp-effect2">
                        <a href="https://www.springeropen.com/" target="_blank">
                            <img src="template/default-blue/assets/images/springer.png" class="text-center img-responsive equal-image">
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>Springer Open</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

    <!-- portofolio start -->
    <?php if ($sysconf['template']['classic_map']) : ?>
        <section class="my-5 container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <iframe class="embed-responsive" src="<?= $sysconf['template']['classic_map_link']; ?>" height="275" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 pt-8 md:pt-0">
                    <h4><?= $sysconf['library_name']; ?></h4>
                    <p><?= $sysconf['template']['classic_map_desc']; ?></p>
                    <p class="d-flex flex-row pt-2">
                        <a target="_blank" href="<?= $sysconf['template']['classic_fb_link'] ?>" class="btn btn-primary mr-2" name="button"><i class="fab fa-facebook-square text-white"></i></a>
                        <a target="_blank" href="<?= $sysconf['template']['classic_twitter_link'] ?>" class="btn btn-info mr-2" name="button"><i class="fab fa-twitter-square text-white"></i></a>
                        <a target="_blank" href="<?= $sysconf['template']['classic_youtube_link'] ?>" class="btn btn-danger mr-2" name="button"><i class="fab fa-youtube text-white"></i></a>
                        <a target="_blank" href="<?= $sysconf['template']['classic_instagram_link'] ?>" class="btn btn-dark mr-2" name="button"><i class="fab fa-instagram text-white"></i></a>
                    </p>
                </div>
            </div>
        </section>




    <?php endif; ?>
</div>
<style type="text/css">
    .card {
    margin: 0 auto;
    border: none;
}
.card .carousel-item {
    min-height: 190px;
}
.card .carousel-caption {
    padding: 0;
    right: 15px;
    left: 15px;
    top: 15px;
    color: #3d3d3d;
    border: 1px solid #ccc;
    min-height:175px;
    padding: 15px;
}
.card .carousel-caption .col-sm-3 {
    display: flex;
    align-items: center;
}
.card .carousel-caption .col-sm-9 {
    text-align: left;
}
.card .carousel-control-prev, .card .carousel-control-next {
    color: #3d3d3d !important;
    opacity: 1 !important;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    background-image: none;
    color: #fff;
    font-size: 14px;
    background-color: #cd3a54;
    height: 32px;
    line-height: 32px;
    width: 32px;
}
.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
    opacity: 0.85;
}
.carousel-control-prev {
    left: 40%;
    top: 110%;
}
.carousel-control-next {
    right: 40%;
    top: 110%;
}
.midline {
    width: 60px;
    border-top: 1px solid #d43025;
}
.carousel-caption h2 {
    font-size: 14px;
}
.carousel-caption h2 span {
    color: #cd3a54;
}
 @media (min-width: 320px) and (max-width: 575px) {
.carousel-caption {
    position: relative;
}
.card .carousel-caption {
    left: 0;
    top: 0;
    margin-bottom: 15px;
}
.card .carousel-caption img {
    margin: 0 auto;
}
.carousel-control-prev {
    left: 35%;
    top: 105%;
}
.carousel-control-next {
    right: 35%;
    top: 105%;
}
.card .carousel-caption h3 {
    margin-top: 0;
    font-size: 16px;
    font-weight: 700;
}
}
@media (min-width: 576px) and (max-width: 767px) {
.carousel-caption {
    position: relative;
}
.card .carousel-caption {
    left: 0;
    top: 0;
    margin-bottom: 15px;
}
.card .carousel-caption img {
    margin: 0 auto;
}
.card .carousel-caption h3, .card .carousel-caption small {
    text-align: center;
}
.carousel-control-prev {
    left: 35%;
    top: 105%;
}
.carousel-control-next {
    right: 35%;
    top: 105%;
}
}
@media (min-width: 767px) and (max-width: 991px) {
.card .carousel-caption h3 {
    margin-top: 0;
    font-size: 16px;
    font-weight: 700;
}
}

</style>