<?php

    $options = [
        CURLOPT_SSL_VERIFYHOST => false, // <-reported
        CURLOPT_SSL_VERIFYHOST => 0,     // <-reported
        CURLOPT_SSL_VERIFYHOST => null,  // <-reported
        CURLOPT_SSL_VERIFYHOST => true,  // <-reported
        CURLOPT_SSL_VERIFYHOST => 1,     // <-reported
        CURLOPT_SSL_VERIFYHOST => 2
    ];

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // <-reported
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);     // <-reported
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, null);  // <-reported
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);  // <-reported
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);     // <-reported
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $options = [
        CURLOPT_SSL_VERIFYHOST => 0,     // <-reported
        CURLOPT_SSL_VERIFYHOST => false, // <-reported
        CURLOPT_SSL_VERIFYHOST => null,  // <-reported
        CURLOPT_SSL_VERIFYHOST => true,
        CURLOPT_SSL_VERIFYHOST => 1
    ];

    $options = [
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CAINFO         => ''
    ];
    $options = [
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CAPATH         => ''
    ];

    function curlSllSpoofingCase1($ch) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CAINFO, '');
    }

    function curlSllSpoofingCase2($ch) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CAPATH, '');
    }