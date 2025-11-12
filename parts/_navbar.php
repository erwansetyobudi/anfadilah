<?php
# @Author: Erwan Setyo Budi
# @Date:   2018-01-25T10:25:29+07:00
# @Email:  erwans818@gmial.com
# @Filename: _navbar.php
# @Last modified by:   Erwan Setyo Budi
# @Last modified time: 2025-11-12T18:43:45+07:00

// Main Menu
$main_menus = [
  'home' => [
    'text' => __('Beranda'),
    'url' => 'index.php'
  ],

  'profil' => [ // Mengganti 'menu_profil' dengan 'profil'
    'text' => __('Profil'),
    'url' => '#',
    'submenu' => [
      'sdm' => [
        'text' => __('Tentang Kami'),
        'url' => 'index.php?p=tentangkami'
      ],

      'peraturan' => [
        'text' => __('Pustakawan'),
        'url' => 'index.php?p=librarian'
      ],
      'fasilitas' => [
        'text' => __('Fasilitas'),
        'url' => 'index.php?p=fasilitas'
      ],
      'statistik' => [
        'text' => __('Statistik'),
        'url' => 'index.php?p=statinfo'
      ],
      'kontak' => [
        'text' => __('Kontak'),
        'url' => 'index.php?p=kontak'
      ],
    ],
  ],
  'layanan' => [ // Mengganti 'menu_layanan' dengan 'layanan'
    'text' => __('Layanan'),
    'url' => '#',
    'submenu' => [
      'layanan_1' => [
        'text' => __('Layanan Baca Ditempat'),
        'url' => 'index.php?p=bacaditempat'
      ],
      'layanan_2' => [
        'text' => __('Sirkulasi'),
        'url' => 'index.php?p=sirkulasi'
      ],
      'layanan_3' => [
        'text' => __('Referensi'),
        'url' => 'index.php?p=referensi'
      ],
      'layanan_4' => [
        'text' => __('Data Riset'),
        'url' => 'index.php?p=datariset'
      ],
      'layanan_5' => [
        'text' => __('Ekstensi'),
        'url' => 'index.php?p=ekstensi'
      ],
      'layanan_6' => [
        'text' => __('Penelusuran Informasi'),
        'url' => 'index.php?p=penelusuraninformasi'
      ],
      'layanan_7' => [
        'text' => __('Pengembalian Buku Mandiri'),
        'url' => 'index.php?p=pengembalianbukumandiri'
      ],
    ],
  ],
  'news' => [
    'text' => __('Berita'),
    'url' => 'index.php?p=news'
  ],
  'faq' => [
    'text' => __('Repository'),
    'url' => 'index.php?=repository'
  ],
];

// Menu login dipisahkan untuk ditaruh di bagian kanan
$login_menu = [
  'login' => [
    'text' => __('Login'),
    'url' => '#',
    'submenu' => [
      'daftar_online' => [
        'text' => __('Registrasi Anggota'),
        'url' => 'index.php?p=daftar_anggota'
      ], 
      'area_anggota' => [
        'text' => __('Area Anggota'),
        'url' => 'index.php?p=member'
      ],
      'masuk' => [
        'text' => __('Pustakawan'),
        'url' => 'index.php?p=login'
      ],
      'visitor' => [
        'text' => __('Pengunjung'),
        'url' => 'index.php?p=visitor'
      ],
    ],
  ],
];

?>

    <!-- topbar -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <i class="fa fa-envelope"></i> <a href="mailto:layanan.perpustakaan@poltekssn.ac.id">layanan.perpustakaan@gmail.com</a>
                <i class="fa fa-phone"></i>  00000xxxx
            </div>

            <div class="social-and-login d-flex align-items-center">
                <div class="d-none d-lg-flex social-links">
                    <a target="blank" href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a target="blank" href="https://www.youtube.com/" class="youtube"><i class="fab fa-youtube"></i></a>
                </div>

                <!-- bahasa -->
              <?php
              $langstr = '';
              $current_lang = '';
              $select_lang = isset($_COOKIE['select_lang'])?$_COOKIE['select_lang']:$sysconf['default_lang'];
              // require_once(LANG . 'localisation.php');
              foreach ($available_languages??[] AS $lang_index) {
                $selected = null;
                $lang_code = $lang_index[0];
                $lang_name = $lang_index[1];
                $code_arr = explode('_', $lang_code);
                $code_flag = strtolower($code_arr[1]);
                if ($lang_code == $select_lang) {
                  $current_lang = [
                    'name' => $lang_name,
                    'code' => $code_flag
                  ];
                }
                $langstr .= <<<HTML
    <a class="dropdown-item" href="index.php?select_lang={$lang_code}">
        <span class="flag-icon flag-icon-{$code_flag} mr-2" style="border-radius: 2px;"></span> {$lang_name}
    </a>
HTML;
              }
              ?>
                <a class="nav-link dropdown-toggle cursor-pointer" type="button" id="languageMenuButton"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flag-icon flag-icon-<?= $current_lang['code'] ?>" style="border-radius: 2px;"></span>
                </a>
                <div class="dropdown-menu bg-grey-lighter dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton">
                    <h6 class="dropdown-header"><?= __('Select Language'); ?> : </h6>
                  <?= $langstr; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->

<div class="container-fluid sticky-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <a class="navbar-brand inline-flex items-center" href="index.php">
        <?php
        if (isset($sysconf['logo_image']) && $sysconf['logo_image'] != '' && file_exists('images/default/' . $sysconf['logo_image'])) {
          echo '<img class="h-10 w-15" src="images/default/' . $sysconf['logo_image'] . '">';
        } elseif (file_exists(__DIR__ . '/../assets/images/logo.svg')) {
          echo '<img src="' . assets('images/logo.svg') . '"width="200" height="240">';
        }
        ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php
          // Render menu utama
          foreach ($main_menus as $key => $main_menu) {
            $active = '';
            if (isset($_GET['p'])) {
              if ($key === $_GET['p']) $active = 'active';
            } elseif ($key === 'home') {
              $active = 'active';
            }

            if (isset($main_menu['submenu'])) {
              echo '<li class="nav-item dropdown ' . $active . '">';
              echo '<a class="nav-link dropdown-toggle" href="#" id="' . $key . 'Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
              echo $main_menu['text'];
              echo '</a>';
              echo '<div class="dropdown-menu" aria-labelledby="' . $key . 'Dropdown">';
              foreach ($main_menu['submenu'] as $submenu_key => $submenu_item) {
                echo '<a class="dropdown-item" href="' . $submenu_item['url'] . '">' . $submenu_item['text'] . '</a>';
              }
              echo '</div>';
              echo '</li>';
            } else {
              echo '<li class="nav-item ' . $active . '">';
              echo '<a class="nav-link" href="' . $main_menu['url'] . '">' . $main_menu['text'] . '</a>';
              echo '</li>';
            }
          }
          ?>
          
          <!-- E-Resources Menu -->
          <li class="nav-item dropdown has-megamenu">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> E-Resources  </a>
            <div class="dropdown-menu megamenu" role="menu">
              <div class="row">
                <div class="col-md-3">
                  <div class="col-megamenu">
                    <h6 class="title">Indonesiana</h6>
                    <ul class="list-unstyled">
                      <li><a href="http://bataviadigital.perpusnas.go.id" target="_blank">Batavia Digital</a></li>
                      <li><a href="http://candi.perpusnas.go.id" target="_blank">Candi di Indonesia</a></li>
                      <li><a href="http://perfilman.perpusnas.go.id" target="_blank">Dokumentasi Perfilman Indonesia</a></li>
                      <li><a href="http://sastra.perpusnas.go.id" target="_blank">Dokumentasi Sastra Indonesia</a></li>
                      <li><a href="http://kepustakaan-presiden.perpusnas.go.id" target="_blank">Kepustakaan Presiden RI</a></li>
                      <li><a href="http://keraton.perpusnas.go.id" target="_blank">Keraton Nusantara</a></li>
                      <li><a href="http://pernaskahan.perpusnas.go.id" target="_blank">Pernaskahan Nusantara</a></li>
                      <li><a href="http://kepustakaan-tokoh.perfilman.perpusnas.go.id" target="_blank">Kepustakaan Tokoh Perfilman</a></li>
                      <li><a href="http://khastara.perpusnas.go.id" target="_blank">Khasanah Pustaka Nusantara</a></li>
                      <li><a href="http://perpuspedia.perpusnas.go.id" target="_blank">Perpuspedia</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="col-megamenu">
                    <h6 class="title">Pencarian</h6>
                    <ul class="list-unstyled">
                      <li><a href="https://doaj.org/">DOAJ</a></li>
                      <li><a href="https://scholar.google.com/">Google Scholar</a></li>
                      <li><a href="https://jdihn.go.id/">JDIH</a></li>
                      <li><a href="https://bni.perpusnas.go.id/">Bibliografi Nasional Indonesia</a></li>
                      <li><a href="https://kin.perpusnas.go.id/">Katalog Induk Nasional</a></li>
                      <li><a href="https://www.idx.co.id/">Bursa Efek Indonesia</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="col-megamenu">
                    <h6 class="title">Alat</h6>
                    <ul class="list-unstyled">
                      <li><a href="https://www.mendeley.com/">Mendeley</a></li>
                      <li><a href="https://www.zotero.org/">Zotero</a></li>
                      <li><a href="https://harzing.com/resources/publish-or-perish">Publish or Perish</a></li>
                      <li><a href="https://www.vosviewer.com/">Vos Viewer</a></li>
                    </ul>
                  </div>
                </div>    
                <div class="col-md-3">
                  <div class="col-megamenu">
                    <h6 class="title">Sumber Belajar</h6>
                    <ul class="list-unstyled">
                      <li><a href="https://ipusnas.id/">Perpustakaan Digital</a></li>
                      <li><a href="https://www.ted.com/">TED</a></li>
                      <li><a href="https://experiments.withgoogle.com/">Google Experiments</a></li>
                      <li><a href="https://sumber.belajar.kemdikbud.go.id/">Sumber Belajar Kemdikbud</a></li>
                      <li><a href="https://www.pdfdrive.com/">Ebook</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>

        <!-- Menu Login dan User di sebelah kanan -->
        <ul class="navbar-nav mr-auto">
          <?php
          $menu_member_active = isset($_GET['p']) && $_GET['p'] === 'member' ? 'active' : '';
          
          if ($is_login) {
            // Jika user sudah login
          ?>
            <li class="nav-item <?= $menu_member_active; ?>">
              <a class="nav-link" href="index.php?p=member&sec=title_basket">
                <i class="fas fa-shopping-basket"></i>
                <?php
                $count_basket = count($_SESSION['m_mark_biblio']);
                ?>
                <sup id="count-basket" class="badge badge-danger"><?php echo $count_basket; ?></sup>
              </a>
            </li>
            <li class="nav-item dropdown <?= $menu_member_active; ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="w-6 h-6 rounded-full ml-2 mr-2" src="<?php echo $member_image_path; ?>" alt="Avatar of Jonathan Reinink">
                <?php echo $_SESSION['m_name']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="index.php?p=member"><i class="fas fa-user-circle mr-3"></i> <?= __('Profile'); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?p=member&logout=1"><i class="fas fa-sign-out-alt mr-3"></i> <?= __('Logout'); ?></a>
              </div>
            </li>
          <?php 
          } else {
            // Jika user belum login, tampilkan menu login
            foreach ($login_menu as $key => $main_menu) {
              $active = '';
              if (isset($_GET['p'])) {
                if ($key === $_GET['p']) $active = 'active';
              }

              if (isset($main_menu['submenu'])) {
                echo '<li class="nav-item dropdown ' . $active . '">';
                echo '<a class="nav-link dropdown-toggle" href="#" id="' . $key . 'Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo $main_menu['text'];
                echo '</a>';
                echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="' . $key . 'Dropdown">';
                foreach ($main_menu['submenu'] as $submenu_key => $submenu_item) {
                  echo '<a class="dropdown-item" href="' . $submenu_item['url'] . '">' . $submenu_item['text'] . '</a>';
                }
                echo '</div>';
                echo '</li>';
              } else {
                echo '<li class="nav-item ' . $active . '">';
                echo '<a class="nav-link" href="' . $main_menu['url'] . '">' . $main_menu['text'] . '</a>';
                echo '</li>';
              }
            }
          }
          ?>
        </ul>
      </div>
    </nav>
  </div>
</div>