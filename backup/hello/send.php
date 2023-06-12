<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    header("Content-Type: application/json");
    $mail = isset($_POST["msmes_mail"]) ? trim($_POST["msmes_mail"]) : false;
    $result = ["error" => 0];
    /*if (!$mail) {
    $result["error"] = 1;
    $result["message"] = "";
    echo json_encode($result);
    die;
    }
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL) ? $mail : false;
    if (!$mail) {
    $result["error"] = 2;
    $result["message"] = "Email address '{$_POST["msmes_mail"]}' is considered invalid.\n";
    echo json_encode($result);
    die;
    }
    $mysqli = new mysqli("localhost", "root", "", "msmes");
    $query = $mysqli->query("select * from mails where mail_text='$mail'");
    if ($query->num_rows > 0) {
    $result["error"] = 3;
    $result["message"] = "";
    echo json_encode($result);
    die;
    }
    $mysqli->query("insert into mails values(null, '$mail', now())");*/
    mail("donia.jemail@medmsmes.eu", "Nouvelle inscription", "Vous avez reçu une nouvelle inscription : $mail");
    // mail("maghrebimoez1986@gmail.com", "Nouvelle inscription", "Vous avez reçu une nouvelle inscription : $mail");
    $result["message"] = "L'enregistrement est réussi";
    echo json_encode($result);
}
