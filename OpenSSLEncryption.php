<?php
$word = "HelloWorld";
$password = "1234";
$method = "aes128";
$iv = 1234567812345678;

$encryptedWord = openssl_encrypt($word, $method, $password, 0, $iv);
echo $encryptedWord;

