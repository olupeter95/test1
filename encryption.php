<?php
$text = 'Welcome to Lagos';
$key = openssl_random_pseudo_bytes(32); 
$iv = openssl_random_pseudo_bytes(16);

// Encryption
$encrypted = openssl_encrypt($text, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
$encryptedHex = bin2hex($encrypted);

// Decryption
$decrypted = openssl_decrypt(hex2bin($encryptedHex), 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

echo "Original Text: $text\n";
echo "Encrypted HEX: $encryptedHex\n";
echo "Decrypted Text: $decrypted\n";
