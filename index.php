<?php
$config = [
    "digest_alg" => "sha256",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
];

// Generate the key pair
$res = openssl_pkey_new($config);

// Extract private key
openssl_pkey_export($res, $privateKey);

// Extract public key
$publicKeyDetails = openssl_pkey_get_details($res);
$publicKey = $publicKeyDetails["key"];

// Save to files
file_put_contents("private.pem", $privateKey);
file_put_contents("public.pem", $publicKey);

echo "Keys generated and saved.\n";
?>