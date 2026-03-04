<?php
// ════════════════════════════════════════════════════════════
//  config.php — Semua data ada di sini, edit file ini saja!
// ════════════════════════════════════════════════════════════


// ── Identitas
define('PENULIS_NAMA',    'Nama Kamu');           // Contoh: 'Nadia Arief'
define('PENULIS_TAGLINE', 'Penulis & Pencerita'); // Contoh: 'Novelis · Blogger'

// ── Bio (dua paragraf, boleh pakai tag <em> untuk miring)
define('PENULIS_BIO_1',
  'Tulis paragraf pertama bio kamu di sini. '.
  'Ceritakan siapa kamu, apa yang kamu tulis, dan apa yang membuatmu unik sebagai penulis.'
);
define('PENULIS_BIO_2',
  'Tulis paragraf kedua di sini. '.
  'Bisa tentang motivasi menulis, pembaca yang kamu tuju, atau hal lain yang ingin kamu sampaikan.'
);

// ── Quote favorit (ditampilkan di bagian tengah halaman)
define('PENULIS_QUOTE',
  'Tulis kutipan atau kalimat favoritmu di sini.'
);

// ── Sosial Media
define('INSTAGRAM_URL',    'https://instagram.com/username_kamu');
define('INSTAGRAM_HANDLE', '@username_kamu');
define('WATTPAD_URL',      'https://wattpad.com/user/username_kamu');
define('WATTPAD_HANDLE',   'Baca karya lengkap di Wattpad');

// ── Email tujuan form kontak
define('CONTACT_EMAIL', 'emailkamu@gmail.com');

// ── Genre (tambah atau kurangi sesukamu)
$GENRES = [
  'Genre Pertama',   // Contoh: 'Romance'
  'Genre Kedua',     // Contoh: 'Fantasy'
  // 'Genre Ketiga', // Hapus tanda // untuk mengaktifkan
];

// ════════════════════════════════════════════════════════════
//  DAFTAR KARYA
//  Salin blok di bawah untuk menambah karya baru.
// ════════════════════════════════════════════════════════════
$KARYA = [

  [
    'vol'      => 'Vol. I',
    'judul'    => 'Judul Karya Pertama',
    'genre'    => 'Genre · Sub-genre',
    'desc'     => '"Tulis sinopsis singkat atau tagline ceritamu di sini."',
    'status'   => 'Selesai',
    'platform' => 'Wattpad',
    'link'     => 'https://wattpad.com/story/xxxxx',
  ],

  [
    'vol'      => 'Vol. II',
    'judul'    => 'Judul Karya Kedua',
    'genre'    => 'Genre · Sub-genre',
    'desc'     => '"Tulis sinopsis singkat atau tagline ceritamu di sini."',
    'status'   => 'Selesai',
    'platform' => 'Wattpad',
    'link'     => 'https://wattpad.com/story/xxxxx',
  ],

  [
    'vol'      => 'Vol. III',
    'judul'    => 'Judul Karya Ketiga',
    'genre'    => 'Genre',
    'desc'     => '"Tulis sinopsis singkat atau tagline ceritamu di sini."',
    'status'   => 'Sedang Ditulis',
    'platform' => '',
    'link'     => '',
  ],

  // Salin blok ini untuk menambah karya baru:
  // [
  //   'vol'      => 'Vol. IV',
  //   'judul'    => 'Judul Baru',
  //   'genre'    => 'Genre',
  //   'desc'     => '"Tagline."',
  //   'status'   => 'Selesai',
  //   'platform' => 'Wattpad',
  //   'link'     => 'https://wattpad.com/story/xxxxx',
  // ],

];
