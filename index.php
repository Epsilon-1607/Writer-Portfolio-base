<?php
require_once 'config.php';
require_once 'includes/header.php';
?>

<!-- ══════════════════════════════════════
     HERO
══════════════════════════════════════ -->
<section class="hero-section">
  <div class="container">
    <div class="hero-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;">

      <!-- Left -->
      <div>
        <p class="hero-eyebrow" style="animation:fadeUp .8s .1s both ease;">
          ~ <?= htmlspecialchars(PENULIS_TAGLINE) ?> ~
        </p>
        <h1 class="hero-name" style="animation:fadeUp .9s .25s both ease;">
          <?= htmlspecialchars(PENULIS_NAMA) ?>
        </h1>
        <p class="hero-subtitle" style="animation:fadeUp .9s .4s both ease;">
          Menuangkan jiwa ke dalam kata-kata, mengukir cerita dari luka dan harapan yang nyata.
        </p>
        <div style="margin-top:1.5rem;animation:fadeUp .9s .55s both ease;">
          <?php foreach ($GENRES as $g): ?>
            <span class="hero-genre-tag"><?= htmlspecialchars($g) ?></span>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:2rem;animation:fadeUp .9s .65s both ease;display:flex;gap:1rem;flex-wrap:wrap;align-items:center;">
          <a href="#works" class="btn-send" style="text-decoration:none;display:inline-block;text-align:center;">
            Baca Karya
          </a>
          <a href="#contact" style="font-family:'Cinzel',serif;font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:var(--sepia);text-decoration:none;padding:14px 0;transition:color .3s;"
             onmouseover="this.style.color='var(--aged)'" onmouseout="this.style.color='var(--sepia)'">
            Hubungi →
          </a>
        </div>
      </div>

      <!-- Right — manuscript terminal -->
      <div style="animation:fadeUp 1s .5s both ease;">
        <div class="manuscript" style="padding:2.5rem;">
          <div class="corner-tl">⌐</div><div class="corner-tr">⌐</div>
          <div class="corner-bl">⌐</div><div class="corner-br">⌐</div>
          <p class="chapter-label" style="margin-bottom:1rem;">Nota Pembuka</p>
          <p style="font-family:'IM Fell English',serif;font-style:italic;font-size:1.05rem;color:var(--aged);line-height:1.9;margin:0;">
            Saya percaya bahwa setiap cerita adalah cermin — ia tidak menceritakan dunia di luar,
            melainkan memantulkan apa yang tersembunyi di dalam diri pembacanya sendiri.
          </p>
          <div class="ornament" style="margin-top:1.5rem;font-size:1rem;">— ✦ —</div>
          <div style="margin-top:1rem;display:flex;justify-content:space-between;">
            <div class="stat-box">
              <p class="stat-num"><?= count($KARYA) ?>+</p>
              <p class="stat-lbl">Karya</p>
            </div>
            <div class="stat-box">
              <p class="stat-num"><?= count($GENRES) ?></p>
              <p class="stat-lbl">Genre</p>
            </div>
            <div class="stat-box">
              <p class="stat-num">∞</p>
              <p class="stat-lbl">Cerita</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="scroll-hint">
    <span>Gulir ke Bawah</span>
    <svg width="14" height="20" viewBox="0 0 14 20" fill="none" stroke="currentColor" stroke-width="1.5">
      <rect x="1" y="1" width="12" height="18" rx="6"/>
      <line x1="7" y1="5" x2="7" y2="9"/>
    </svg>
  </div>
</section>

<!-- ══════════════════════════════════════
     ABOUT
══════════════════════════════════════ -->
<section id="about">
  <div class="container">
    <div class="rule-double" style="margin-bottom:1rem;"></div>
    <div class="ornament">✦ ✦ ✦</div>
    <div class="rule-double" style="margin-top:1rem;margin-bottom:4rem;"></div>

    <div class="about-grid" style="display:grid;grid-template-columns:1fr 2fr;gap:4rem;align-items:start;">

      <!-- Label -->
      <div class="reveal-left">
        <span class="chapter-label">Bab I</span>
        <h2 class="chapter-title">Mengenal<br><em style="font-style:italic;color:var(--gold);">Si Penulis</em></h2>
        <div class="ornament" style="text-align:left;margin-top:1.5rem;font-size:1rem;letter-spacing:.3em;">— ✦ —</div>
        <div style="margin-top:2rem;">
          <div class="wax-seal" style="margin-bottom:1rem;">✍</div>
          <p style="font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.2em;text-transform:uppercase;color:var(--sepia);line-height:2;">
            Segel Penulis<br><?= htmlspecialchars(PENULIS_NAMA) ?>
          </p>
        </div>
      </div>

      <!-- Bio -->
      <div class="reveal">
        <div class="manuscript">
          <div class="corner-tl">⌐</div><div class="corner-tr">⌐</div>
          <div class="corner-bl">⌐</div><div class="corner-br">⌐</div>
          <p><?= PENULIS_BIO_1 ?></p>
          <p style="margin-top:1.2rem;font-size:1.05rem;"><?= PENULIS_BIO_2 ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     QUOTE
══════════════════════════════════════ -->
<div class="quote-banner reveal">
  <div class="rule" style="max-width:200px;margin:0 auto 3rem;"></div>
  <p class="quote-text"><?= htmlspecialchars(PENULIS_QUOTE) ?></p>
  <p class="quote-attr">— <?= htmlspecialchars(PENULIS_NAMA) ?></p>
  <div class="rule" style="max-width:200px;margin:3rem auto 0;"></div>
</div>

<!-- ══════════════════════════════════════
     WORKS
══════════════════════════════════════ -->
<section id="works">
  <div class="container">
    <div class="reveal" style="margin-bottom:4rem;">
      <span class="chapter-label">Bab II</span>
      <h2 class="chapter-title">Kumpulan <em style="font-style:italic;color:var(--gold);">Karya</em></h2>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.5rem;">

      <?php foreach ($KARYA as $i => $k):
        $delay = 0.05 + $i * 0.05;
        $wrap_open  = $k['link'] ? "<a href=\"".htmlspecialchars($k['link'])."\" target=\"_blank\" class=\"book-link\">" : "<div>";
        $wrap_close = $k['link'] ? "</a>" : "</div>";
      ?>
      <div class="reveal" data-delay="<?= $delay ?>">
        <?= $wrap_open ?>
        <div class="book-card">
          <p class="book-number"><?= htmlspecialchars($k['vol']) ?></p>
          <h3 class="book-title"><?= htmlspecialchars($k['judul']) ?></h3>
          <p class="book-genre"><?= htmlspecialchars($k['genre']) ?></p>
          <p class="book-desc"><?= htmlspecialchars($k['desc']) ?></p>
          <div class="book-status">
            <span class="dot"></span>
            <?= htmlspecialchars($k['status']) ?>
            <?php if ($k['platform']): ?>
              · <?= htmlspecialchars($k['platform']) ?>
            <?php endif; ?>
          </div>
        </div>
        <?= $wrap_close ?>
      </div>
      <?php endforeach; ?>

      <!-- Placeholder -->
      <div class="reveal" data-delay="<?= 0.05 + count($KARYA) * 0.05 ?>">
        <div class="book-card" style="opacity:.35;display:flex;flex-direction:column;align-items:center;justify-content:center;min-height:180px;text-align:center;gap:.5rem;">
          <p style="font-size:2rem;color:var(--sepia);">✦</p>
          <p style="font-family:'IM Fell English',serif;font-style:italic;font-size:.9rem;color:var(--sepia);">Cerita berikutnya sedang dirajut...</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     CONTACT
══════════════════════════════════════ -->
<section id="contact">
  <div class="container">
    <div class="rule-double" style="margin-bottom:1rem;"></div>
    <div class="ornament">✦ ✦ ✦</div>
    <div class="rule-double" style="margin-top:1rem;margin-bottom:4rem;"></div>

    <div class="reveal" style="margin-bottom:3.5rem;">
      <span class="chapter-label">Bab III</span>
      <h2 class="chapter-title">Kirimkan <em style="font-style:italic;color:var(--gold);">Pesanmu</em></h2>
      <p style="font-family:'IM Fell English',serif;font-style:italic;color:var(--sepia);margin-top:.75rem;font-size:1.1rem;max-width:500px;">
        Setiap percakapan yang baik adalah awal dari sebuah cerita baru.
      </p>
    </div>

    <div class="contact-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;">

      <!-- Tiles -->
      <div class="reveal" style="display:flex;flex-direction:column;gap:1rem;">

        <!-- Instagram -->
        <a href="<?= htmlspecialchars(INSTAGRAM_URL) ?>" target="_blank" class="contact-tile">
          <div class="tile-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--gold)">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
            </svg>
          </div>
          <div>
            <span class="tile-label">Instagram</span>
            <span class="tile-sub"><?= htmlspecialchars(INSTAGRAM_HANDLE) ?></span>
          </div>
          <svg class="tile-arrow" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>

        <!-- Wattpad -->
        <a href="<?= htmlspecialchars(WATTPAD_URL) ?>" target="_blank" class="contact-tile">
          <div class="tile-icon" style="font-size:1.4rem;">📖</div>
          <div>
            <span class="tile-label">Wattpad</span>
            <span class="tile-sub"><?= htmlspecialchars(WATTPAD_HANDLE) ?></span>
          </div>
          <svg class="tile-arrow" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>

        <!-- Decoration -->
        <div style="margin-top:1.5rem;padding:1.5rem;border:1px solid rgba(107,76,30,.2);border-radius:2px;text-align:center;">
          <p style="font-family:'IM Fell English',serif;font-style:italic;color:var(--sepia);font-size:.95rem;line-height:1.8;">
            "Jangan ragu untuk menyapa.<br>Setiap percakapan adalah awal cerita."
          </p>
          <div class="ornament" style="font-size:.9rem;margin-top:.75rem;letter-spacing:.3em;">— ✦ —</div>
        </div>
      </div>

      <!-- Form -->
      <div class="reveal" data-delay="0.15">
        <div class="manuscript" style="padding:2.5rem;">
          <div class="corner-tl">⌐</div><div class="corner-tr">⌐</div>
          <div class="corner-bl">⌐</div><div class="corner-br">⌐</div>
          <p class="chapter-label" style="margin-bottom:1.5rem;">Tulis Pesanmu</p>

          <div id="alertSuccess" class="alert alert-success"></div>
          <div id="alertError"   class="alert alert-error"></div>

          <form id="contactForm" novalidate>
            <div class="form-field">
              <label class="form-label" for="nama">Nama</label>
              <input type="text" id="nama" name="nama" class="form-input" placeholder="Siapakah dirimu..." required/>
            </div>
            <div class="form-field">
              <label class="form-label" for="email">Surel</label>
              <input type="email" id="email" name="email" class="form-input" placeholder="Alamat surelmu..." required/>
            </div>
            <div class="form-field">
              <label class="form-label" for="pesan">Pesan</label>
              <textarea id="pesan" name="pesan" class="form-input" placeholder="Tuangkan kata-katamu di sini..." required></textarea>
            </div>
            <button type="submit" class="btn-send">Kirim Pesan ✦</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
