<?php
// ════════════════════════════════════════
//  HANDLER FORM KONTAK
//  File: contact.php
// ════════════════════════════════════════

require_once 'config.php';

header('Content-Type: application/json');

// Hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method tidak diizinkan.']);
    exit;
}

// Ambil & bersihkan input
$nama    = trim(strip_tags($_POST['nama']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$pesan   = trim(strip_tags($_POST['pesan']   ?? ''));

// Validasi
$errors = [];
if (empty($nama))                         $errors[] = 'Nama wajib diisi.';
if (empty($email))                        $errors[] = 'Email wajib diisi.';
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Format email tidak valid.';
if (empty($pesan))                        $errors[] = 'Pesan wajib diisi.';
if (strlen($pesan) < 10)                  $errors[] = 'Pesan terlalu pendek (min. 10 karakter).';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Kirim email
$to      = CONTACT_EMAIL;
$subject = "Pesan baru dari portofolio — {$nama}";
$body    = "Nama   : {$nama}\nEmail  : {$email}\n\nPesan:\n{$pesan}";
$headers = "From: noreply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n" .
           "Reply-To: {$email}\r\n" .
           "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Pesan berhasil dikirim. Terima kasih!']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Gagal mengirim pesan. Coba lagi nanti.']);
}
