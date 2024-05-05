<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $file = 'messages.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new message to the file
    $current .= $message . "\n";
    // Write the contents back to the file
    file_put_contents($file, $current);
    // Redirect back to the main page
    header("Location: index.html");
    exit();
}
?>
