<!DOCTYPE html>
<html>
<head>
    <title>Response</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .output {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $day = $_POST["day"];
    
    if ($day == "monday" || $day == "Monday") {
        echo "Laugh on Monday, laugh for danger.";
    } else if ($day == "tuesday" || $day == "Tuesday") {
        echo "Laugh on Tuesday, smile at a stranger.";
    } else if ($day == "wednesday" || $day == "Wednesday") {
        echo "Laugh on Wednesday, laugh for joy.";
    } else if ($day == "thursday" || $day == "Thursday") {
        echo "Laugh on Thursday, something better.";
    } else if ($day == "friday" || $day == "Friday") {
        echo "Laugh on Friday, laugh for sorrow.";
    } else if ($day == "saturday" || $day == "Saturday") {
        echo "Laugh on Saturday, joy tomorrow.";
    } else {
        echo "Invalid input. Please enter a valid day.";
    }
}
?>

</body>
</html>
