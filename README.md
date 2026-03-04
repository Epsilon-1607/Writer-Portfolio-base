# ✦ Writer Portfolio Template

Template portfolio untuk penulis — dibangun dengan PHP, HTML, dan Tailwind CSS. Tampilannya bergaya antik/steampunk dengan nuansa manuskrip dan sepia. Cocok untuk dipasang di hosting seperti InfinityFree, Niagahoster, atau server PHP manapun.

![preview](preview.png)

---

## Tampilan

- Tema gelap bernuansa sepia dan emas
- Custom cursor berbentuk bulu angsa ✒
- Animasi debu emas melayang di background
- Tipografi klasik (Cinzel + Cormorant Garamond)
- Scroll reveal animation di tiap section
- Form kontak fungsional (kirim email via PHP)
- Responsif di mobile

---

## Struktur File

```
portfolio/
├── index.php             ← Halaman utama
├── config.php            ← ⭐ File utama yang perlu diedit
├── contact.php           ← Handler form kontak (jangan diubah)
├── includes/
│   ├── header.php        ← Bagian atas halaman (nav, head)
│   └── footer.php        ← Bagian bawah halaman
└── assets/
    ├── css/style.css     ← Semua styling
    └── js/main.js        ← Animasi dan logika form
```

Kamu cukup buka **`config.php`** untuk mengisi semua informasi. File lainnya tidak perlu disentuh kecuali kamu mau ubah tampilan.

---

## Cara Pakai

### 1. Download atau Clone

```bash
git clone https://github.com/username/writer-portfolio.git
cd writer-portfolio
```

Atau download ZIP lalu extract.

### 2. Buka di VSCode

Buka folder hasil extract di VSCode. Kamu cukup edit satu file:

```
config.php
```

### 3. Isi Data di config.php

Buka `config.php` dan isi bagian-bagian berikut:

#### Nama dan tagline

```php
define('PENULIS_NAMA',    'Nama Kamu');
define('PENULIS_TAGLINE', 'Penulis & Pencerita');
```

#### Bio (dua paragraf)

```php
define('PENULIS_BIO_1', 'Paragraf pertama...');
define('PENULIS_BIO_2', 'Paragraf kedua...');
```

Kamu bisa pakai tag `<em>` untuk memiringkan kata tertentu, misalnya:

```php
define('PENULIS_BIO_1', 'Aku suka nulis cerita <em>Slice of Life</em> yang terasa dekat.');
```

#### Quote

```php
define('PENULIS_QUOTE', 'Kalimat favorit atau motto yang mau kamu tampilkan.');
```

#### Sosial media

```php
define('INSTAGRAM_URL',    'https://instagram.com/username_kamu');
define('INSTAGRAM_HANDLE', '@username_kamu');
define('WATTPAD_URL',      'https://wattpad.com/user/username_kamu');
```

#### Email untuk form kontak

```php
define('CONTACT_EMAIL', 'emailkamu@gmail.com');
```

> Pastikan hosting kamu mendukung fungsi `mail()` PHP. InfinityFree mendukung ini.

#### Genre

```php
$GENRES = [
  'Romance',
  'Fantasy',
  // 'Horror', // hapus // untuk mengaktifkan
];
```

#### Daftar karya

Setiap karya ditulis seperti ini:

```php
[
  'vol'      => 'Vol. I',
  'judul'    => 'Judul Ceritamu',
  'genre'    => 'Romance · Drama',
  'desc'     => '"Tagline atau sinopsis singkat."',
  'status'   => 'Selesai',       // atau 'Sedang Ditulis'
  'platform' => 'Wattpad',       // atau '' kalau belum tayang
  'link'     => 'https://wattpad.com/story/xxxxx', // atau ''
],
```

Untuk **menambah karya baru**, copy satu blok di atas dan paste di bawahnya (sebelum tanda `]` penutup). Sudah ada contoh yang dikomentari di dalam file.

Untuk **menghapus karya**, hapus satu blok dari tanda `[` sampai `],`.

---

## Upload ke InfinityFree

1. Login ke panel InfinityFree
2. Buka **File Manager** → masuk ke folder `htdocs`
3. Upload semua file (bisa via ZIP lalu extract di sana, atau upload satu per satu)
4. Pastikan struktur foldernya tetap sama seperti di atas
5. Akses domain kamu — selesai

> Kalau pakai hosting lain, prosesnya sama — upload ke folder `public_html` atau `htdocs`.

---

## Ubah Warna Tema

Semua warna ada di bagian atas `assets/css/style.css`:

```css
:root {
  --parchment: #f5e6c8;   /* warna teks utama */
  --gold:      #c9973a;   /* aksen emas */
  --sepia:     #6b4c1e;   /* teks redup */
  --aged:      #d4b896;   /* teks sedang */
  --shadow:    #0d0905;   /* background */
}
```

Ganti nilai hex-nya sesuai selera. Misalnya kalau mau aksen biru tua, ganti `--gold` dengan `#4a7fc1`.

---

## Tambah Halaman Baru

Buat file PHP baru, misalnya `blog.php`, lalu tambahkan include di awal dan akhir:

```php
<?php
require_once 'config.php';
require_once 'includes/header.php';
?>

<!-- konten halaman kamu di sini -->

<?php require_once 'includes/footer.php'; ?>
```

Jangan lupa tambahkan link-nya di navigasi (`includes/header.php`).

---

## Lisensi

Bebas dipakai dan dimodifikasi untuk keperluan pribadi. Kalau mau share ulang atau jadikan template publik, kredit ke repo asal akan sangat diapresiasi — tapi tidak wajib.

---

Kalau ada yang bingung atau error pas dipasang, buka issue di repo ini ya.
