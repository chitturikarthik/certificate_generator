<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charLength - 1)];
        }
        return $randomString;
    }

    $cred_id = generateRandomString();
    $s_name = $_POST['s_name'];
    $s_email = $_POST['s_email'];

    $sql = "INSERT INTO `certificates`(`id`, `student_name`, `student_email`, `cred_id`) VALUES ('', '$s_name', '$s_email', '$cred_id')";
    if (mysqli_query($con, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
</head>
<body>
    <form method="post" action="#">
        <input type="text" placeholder="Enter Student Name" name="s_name">
        <input type="email" placeholder="Enter Student Email-ID" name="s_email">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
