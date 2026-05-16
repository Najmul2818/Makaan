<?php
header("Content-Type: application/json");

include 'db.php';

$userMessage = $_POST['message'] ?? '';

if (!$userMessage) {
    echo json_encode([
        "reply" => "Please enter a message."
    ]);
    exit;
}

/*
======================================
GET PROPERTY DATA FROM DATABASE
======================================
*/

$sql = "SELECT * FROM properties";
$result = mysqli_query($conn, $sql);

$propertyData = "";

while($row = mysqli_fetch_assoc($result)) {

    $propertyData .= "
    Property ID: {$row['id']}
    Title: {$row['title']}
    Price: {$row['price']}
    Location: {$row['location']}
    Type: {$row['type']}
    Category: {$row['category']}
    Area: {$row['area']}
    Bedroom: {$row['bedroom']}
    Bathroom: {$row['bathroom']}
    ";
}

/*
======================================
YOUR GEMINI API KEY
======================================
*/

$apiKey = "AIzaSyB_hTjCCWgYDF5kgc1DtnOEDW23ETWeSBA";

/*
======================================
PROMPT FOR AI
======================================
*/

$prompt = "
You are a real estate assistant chatbot for Makaan website.

You must answer only about:
- Properties
- Rent
- Sale
- Apartments
- Villas
- Offices
- Buildings
- Prices
- Locations

Property Database:

$propertyData

User Question:
$userMessage

Rules:
- Be friendly
- Give short answers
- Recommend matching properties
- Mention price and location
- If possible give property ID
- Do not answer unrelated questions
";

/*
======================================
GEMINI API URL
======================================
*/

$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$apiKey";

/*
======================================
REQUEST DATA
======================================
*/

$data = [
    "contents" => [
        [
            "parts" => [
                [
                    "text" => $prompt
                ]
            ]
        ]
    ]
];

/*
======================================
CURL REQUEST
======================================
*/

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo json_encode([
        "reply" => "Error connecting to AI."
    ]);
    exit;
}

curl_close($ch);

/*
======================================
DECODE RESPONSE
======================================
*/

$result = json_decode($response, true);

$reply = $result['candidates'][0]['content']['parts'][0]['text'] 
    ?? "No response from AI.";

echo json_encode([
    "reply" => $reply
]);
?>