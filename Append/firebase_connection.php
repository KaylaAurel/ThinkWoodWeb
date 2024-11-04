<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Sesuaikan path ini ke lokasi file JSON yang Anda unduh di langkah 3
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/path/to/firebase_credentials.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

// Jika Anda menggunakan Realtime Database
$database = $firebase->getDatabase();

// Jika menggunakan Firestore, Anda dapat menggantinya dengan
// $firestore = $firebase->createFirestore();
?>
