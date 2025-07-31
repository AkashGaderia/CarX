<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";

    // Create folder if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["photo"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "✅ Photo uploaded successfully: <a href='$target_file'>$file_name</a>";
    } else {
        echo "❌ Error uploading file.";
    }
}
?>
