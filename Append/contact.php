<?php
// Mengatur pelaporan kesalahan
error_reporting(E_ALL);
ini_set('display_errors', 0); // Tidak menampilkan error kepada pengguna

// Ganti dengan alamat email penerima
$receiving_email_address = 'andreansaputra240@gmail.com';

// Perbarui jalur ke php-email-form.php
if (file_exists($php_email_form = __DIR__ . '/assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    // Mencatat error jika file tidak ditemukan
    error_log('PHP Email Form Library tidak ditemukan');
    exit;
}

// Memeriksa input POST
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
    // Jika input kosong, mencatat error
    error_log('Input tidak lengkap pada form email.');
    exit;
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Mengaktifkan SMTP dan pastikan kredensial benar
$contact->smtp = array(
    'host' => 'smtp.gmail.com', // Host SMTP untuk Gmail
    'username' => 'andreansaputra240@gmail.com', // Ganti dengan email Gmail Anda
    'password' => 'ponsel1234', // Ganti dengan App Password dari Google
    'port' => '587', // Port untuk TLS
    'secure' => 'tls' // Atur ke 'tls' untuk Gmail
);

// Menambahkan pesan
$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

// Mengirim email dan menangani hasilnya tanpa menampilkan error langsung
if ($contact->send()) {
    echo 'Email sent successfully.';
} else {
    // Jika gagal, mencatat error untuk debugging tanpa menampilkan ke pengguna
    error_log('Failed to send email: ' . $contact->error);
    echo 'There was an error sending the email. Please try again later.';
}
?>
