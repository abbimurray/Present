<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $giftChoice = $_POST['gift-choice'];

    // Email details
    $to = "abbimurray73@gmail.com";
    $subject = "Gift Selection";
    $message = "Selected Gift Option: " . $giftChoice;
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your selection has been submitted.";
    } else {
        echo "Error: Unable to send your selection.";
    }
}
?>