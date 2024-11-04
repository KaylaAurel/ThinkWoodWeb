<?php
// Ganti dengan alamat email penerima yang sebenarnya
$receiving_email_address = 'andreansaputra240@gmail.com';

// Memeriksa jalur ke file PHP Email Form
if (file_exists($php_email_form = __DIR__ . '/assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

// Memeriksa apakah input email ada sebelum mengaksesnya
if (isset($_POST['email'])) {
    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['email'];
    $contact->from_email = $_POST['email'];
    $contact->subject = "New Subscription: " . $_POST['email'];

    // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
    /*
    $contact->smtp = array(
        'host' => 'smtp.gmail.com',
        'username' => 'andreansaputra240@gmail.com',
        'password' => 'ponsel1234', // Ganti dengan kata sandi aplikasi jika perlu
        'port' => '587',
        'secure' => false
    );
    */

    // Menambahkan pesan
    $contact->add_message($_POST['email'], 'Email');

    // Mengirim email dan memeriksa hasil
    if ($contact->send()) {
        echo 'Email sent successfully.';
    } else {
        // Jika gagal, mencetak error untuk debugging
        echo 'Error: ' . $contact->error;
    }
} else {
    echo 'Email is required.';
}
?>
