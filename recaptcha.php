<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['g-recaptcha-response'])) {
        echo "Empty reCaptcha!";
    } else {
        $recaptcha = $_POST['g-recaptcha-response'];
        $secret_key = 'your_secret_key';
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;
        $response = file_get_contents($url);
        $response = json_decode($response);
        if ($response->success = true) {
            // Your code if the reCaptcha is True
        } else {
            // Your code if the reCaptcha is False
        }
    }
}
?>

<html>
<head>
    <title>Implementing Google reCaptcha using PHP</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <form action="?" method="POST">
        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
