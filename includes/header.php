<?php
// includes/header.php
// Dipanggil di awal setiap halaman
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?= htmlspecialchars(PENULIS_NAMA) ?> — <?= htmlspecialchars(PENULIS_TAGLINE) ?>. Portfolio karya tulis Slice of Life & Drama."/>
  <meta property="og:title"       content="<?= htmlspecialchars(PENULIS_NAMA) ?> — Penulis"/>
  <meta property="og:description" content="Portfolio karya tulis <?= htmlspecialchars(PENULIS_NAMA) ?>"/>
  <meta property="og:type"        content="website"/>
  <title><?= htmlspecialchars(PENULIS_NAMA) ?> — <?= htmlspecialchars(PENULIS_TAGLINE) ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=IM+Fell+English:ital@0;1&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            display: ['Cinzel', 'serif'],
            body:    ['Cormorant Garamond', 'serif'],
            fell:    ['IM Fell English', 'serif'],
          }
        }
      }
    }
  </script>
</head>
<body>

  <div id="quill-cursor">✒</div>
  <div id="cursor-trail"></div>
  <div id="particles"></div>

  <!-- NAVIGATION -->
  <nav>
    <div class="nav-inner">
      <a href="index.php" class="nav-brand">✦ <?= htmlspecialchars(PENULIS_NAMA) ?> ✦</a>
      <div class="nav-links">
        <a href="index.php#about"   class="nav-link">Tentang</a>
        <a href="index.php#works"   class="nav-link">Karya</a>
        <a href="index.php#contact" class="nav-link">Kontak</a>
      </div>
    </div>
  </nav>

  <div class="page">
