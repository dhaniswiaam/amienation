<?php
// --- INTI DARI ROUTER FINAL ---
echo '<main>';

// --- TAMBAHKAN BLOK BARU DI SINI ---
// Cek apakah ini permintaan untuk halaman Tag
if (isset($_GET['tag_slug'])) {
    $slug = $_GET['tag_slug'];
    require 'pages/tag.php';

// --- AKHIR PENAMBAHAN ---

// Cek apakah ini permintaan untuk halaman Kategori
} elseif (isset($_GET['category_slug'])) {
    $slug = $_GET['category_slug'];
    require 'pages/category.php';

// Cek apakah ini permintaan untuk Detail Berita
} elseif (isset($_GET['post_slug'])) {
    $slug = $_GET['post_slug'];
    require 'pages/single-post.php';

// Cek apakah ini permintaan untuk Halaman Biasa
} elseif (isset($_GET['page_slug'])) {
    $slug = $_GET['page_slug'];

    if ($slug === 'home') {
        require 'pages/home.php';
    } elseif ($slug === 'news') {
        require 'pages/news.php';
    } else {
        $stmt_page = $pdo->prepare("SELECT * FROM posts WHERE slug = ? AND post_type = 'page' AND status = 'publish'");
        $stmt_page->execute([$slug]);
        $page_content = $stmt_page->fetch();

        if ($page_content) {
            require 'pages/page-template.php';
        } else {
            echo '<div class="container pt-120 pb-120 text-center"><h2>Halaman tidak ditemukan (404)</h2></div>';
        }
    }
// Jika tidak ada parameter sama sekali, ini adalah Halaman Home
} else {
    require 'pages/home.php';
}

echo '</main>';
// --- AKHIR DARI ROUTER ---
?>
