<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "contact_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die('Connection failed');

if (isset($_POST["send"])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $topic = mysqli_real_escape_string($conn, $_POST['topic']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name='$name' AND email='$email' AND topic='$topic' AND message='$message'") or die('Query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $messages[] = 'Message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO contact_form (name, email, topic, message) VALUES ('$name', '$email', '$topic', '$message')") or die('Query failed');
        $messages[] = 'Message sent successfully!';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
    if (isset($messages)) {
        foreach ($messages as $message) {
            echo '
            <div class="message">
                <span>' . $message . '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>

    <a href="index.html">Back to Home</a>

</body>
</html>