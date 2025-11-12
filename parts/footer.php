<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:26:05+07:00
# @Email:  ido.alit@gmail.com
# @Filename: footer.php
# @Last modified by:   Erwan Setyo Budi
# @Last modified time: 2025-11-12T18:43:45+07:00
?>

<section class="container-fluid px-0">
    <div class="row g-0">
        <div class="col-md-6"><a target="_blank" class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-pink" href="#">
                <div class="card-body text-center"><i class="ci-youtube h3 mt-2 mb-4 text-pink"></i>
                    <h3 class="h5 mb-1">Temukan kami di Youtube</h3>
                    <p class="text-muted fs-sm">Video edukasi yang menarik tentang berbagai topik</p>
                </div>
            </a></div>
        <div class="col-md-6"><a target="_blank" class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                    <h3 class="h5 mb-1">Ikuti Instagram Kami</h3>
                    <p class="text-muted fs-sm">#</p>
                </div>
            </a></div>
    </div>
</section>
<footer class="footer bg-dark pt-5">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <?php
                if (isset($sysconf['logo_image']) && $sysconf['logo_image'] != '' && file_exists('images/default/' . $sysconf['logo_image'])) {
                    echo '<img class="h-16 mb-2" width="40px" src="images/default/' . $sysconf['logo_image'] . '">';
                } elseif (file_exists(__DIR__ . '/../assets/images/logo.png')) {
                    echo '<img src="' . assets('images/logo.svg') . '" width="150" height="240" class="mb-2">';
                    
                    
                }
                ?>
            </br>

                <!-- Link NPP -->
                <a target="_blank" title="NPP" class="btn btn-info mb-2" href="#">
                    <i class="fas fa-info-circle mr-2"></i><?= __('NPP 3200000C0000001'); ?>
                </a>
                
                </div>
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Link</h3>
                    <ul class="widget-list">
                        
                        <li class="widget-list-item"><a class="widget-list-link" target="_blank" href="#"><?php echo __('Web Utama'); ?></a></li>
                        <li class="widget-list-item"><a class="widget-list-link" target="blank" href="index.php"><?php echo __('Web Perpustakaan'); ?></a></li>
                        <li class="widget-list-item"><a class="widget-list-link" target="blank" href="#"><?php echo __('Repository'); ?></a></li>
                        <li class="widget-list-item"><a class="widget-list-link" target="blank" href="http://kink.kemkes.go.id/"><?php echo __('KINK'); ?></a></li>
                        <li class="widget-list-item"><a class="widget-list-link" target="blank" href="https://e-resources.perpusnas.go.id/"><?php echo __('Eresources PNRI'); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Kontak Kami</h3>
                    <p class="text-light fs-sm">
                        <strong>Perpustakaan </strong><br>
                        Jateng, Indonesia
                    </p>
                    <p class="text-light fs-sm">
                        Telp.: (0271) xxxx<br>
                        Email: library@gmail.com
                    </p>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1"><?= __('Search'); ?></h3>
                    <form action="index.php">
                    <div class="input-group mb-3">
                        <input name="keywords" type="text" class="form-control" placeholder="<?= __('Enter keywords'); ?>" aria-label="Enter keywords" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" value="search" name="search" id="button-addon2"><?= __('Find Collection'); ?>
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                
                
                </div>
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">Download</h3>
                    <div class="d-flex flex-wrap">
                          <a href="#"><img style="width: 164px; height: 56px;" class="img-fluid" src="template/default-blue/assets/images/btn-apple.png" alt=""></a>
                         <a href="#"><img style="width: 164px; height: 56px;" class="img-fluid" src="template/default-blue/assets/images/btn-google.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 bg-darker">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="d-flex"><i class="fa fa-bookmark  p-3" aria-hidden="true"  style="font-size: 2.25rem;color: yellow;"></i>
                        <div class="ps-3">
                            <h6 class="fs-base text-light mb-1">Tumbuh Bersama</h6>
                            <p class="mb-0 fs-ms text-light opacity-50">Tumbuh bersaama kami dengan pengetahuan yang menakjubkan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="d-flex"><i class="fa fa-search  p-3" aria-hidden="true"  style="font-size: 2.25rem;color: yellow;"></i>
                        <div class="ps-3">
                            <h6 class="fs-base text-light mb-1">Temukan, Pelajari, Berkembang</h6>
                            <p class="mb-0 fs-ms text-light opacity-50">Perpustakaan, Membangkitkan Keajaiban Lintas Generasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="d-flex"><i class="fa fa-globe  p-3" aria-hidden="true"  style="font-size: 2.25rem;color: yellow;"></i>
                        <div class="ps-3">
                            <h6 class="fs-base text-light mb-1">Nyalakan Masa Depan Anda</h6>
                            <p class="mb-0 fs-ms text-light opacity-50">Alat dan Panduan untuk Perjalanan Setiap Pembelajar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="d-flex"><i class="fa fa-book  p-3" aria-hidden="true"  style="font-size: 2.25rem;color: yellow;"></i>
                        <div class="ps-3">
                            <h6 class="fs-base text-light mb-1">Baca. Jelajahi. Raih</h6>
                            <p class="mb-0 fs-ms text-light opacity-50">Dimana Imajinasi Menjadi Kenyataan</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr-light mb-5">

        </div>
        <div class="container pattern">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
    </div>
</footer>



<?php if ($sysconf['chat_system']['enabled'] && $sysconf['chat_system']['opac']) : ?>
    <div id="show-pchat2" style="position: fixed; bottom: 16px; right: 16px" class="shadow rounded">
        <button title="Chat" class="btn btn-primary"><i class="fas fa-comments mr-2"></i><?= __('Chat'); ?></button>
    </div>
<?php endif; ?>

<?php
// Chat Engine
include LIB . "contents/chat.php"; ?>

<!-- // Load modal -->
<?php include "_modal_topic.php"; ?>
<?php include "_modal_advanced.php"; ?>

<!-- // Load highlight -->
<script src="<?= JWB; ?>highlight.js"></script>
<?php if (isset($_GET['search']) && (isset($_GET['keywords'])) && ($_GET['keywords'] != '')) : ?>
    <script>
        $('.card-link, p, dl > dd').highlight(<?= $searched_words_js_array; ?>);
    </script>
<?php endif; ?>

<!-- // load our vue app.js -->
<script src="<?php echo assets('js/app.js?v=' . date('Ymd-his')); ?>"></script>
<script src="<?php echo assets('js/app_jquery.js?v=' . date('Ymd-his')); ?>"></script>
<?php include __DIR__ . "./../assets/js/vegas.js.php"; ?>
<?php if ($sysconf['chat_system']['enabled'] && $sysconf['chat_system']['opac']) : ?>
    <script>
        $('#show-pchat').click(() => {
            $('.s-chat').hide()
            $('#show-pchat2').show()
        })
        $('#show-pchat2').click(() => {
            $('.s-chat').show(300, () => {
                $('#show-pchat2').hide()
            })
        })
    </script>
<?php endif; ?>
</body>

</html>