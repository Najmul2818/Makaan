<?php

header("Content-Type: application/json");

/* =========================
   GET USER MESSAGE
========================= */

$message = $_POST['message'] ?? '';

if (empty($message)) {

    echo json_encode([
        "reply" => "Please type something."
    ]);

    exit;
}

/* =========================
   OPENROUTER API KEY
========================= */

$apiKey = "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";

/* =========================
   OPENROUTER URL
========================= */

$url = "https://openrouter.ai/api/v1/chat/completions";

/* =========================
   REQUEST DATA
========================= */

$data = array(

    "model" => "openai/gpt-3.5-turbo",

    "messages" => array(

        array(
            "role" => "system",
            "content" => "You are a helpful real estate assistant."
        ),

        array(
            "role" => "user",
            "content" => $message
        )

    )

);

/* =========================
   CURL START
========================= */

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    "Authorization: Bearer " . $apiKey,
    "Content-Type: application/json",
    "HTTP-Referer: http://localhost",
    "X-Title: Makaan AI"

));

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

$error = curl_error($ch);

curl_close($ch);

/* =========================
   CURL ERROR
========================= */

if ($error) {

    echo json_encode(array(
        "reply" => "CURL ERROR: " . $error
    ));

    exit;
}

/* =========================
   DECODE RESPONSE
========================= */

$result = json_decode($response, true);

/* =========================
   API ERROR
========================= */

if (isset($result['error'])) {

    echo json_encode(array(
    "reply" => "API ERROR: " . json_encode($result['error'])
));

    exit;
}

/* =========================
   GET AI RESPONSE
========================= */

$reply = $result['choices'][0]['message']['content'] ?? "No AI response";

/* =========================
   RETURN RESPONSE
========================= */

echo json_encode(array(
    "reply" => $reply
));

?>