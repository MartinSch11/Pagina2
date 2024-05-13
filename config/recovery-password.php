<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

require_once('config.php');
$email = $_POST['email'];

$query = "SELECT * FROM usuarios where correo = '$email' AND status = 0";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    $mail = new PHPMailer(true);

    try {
        // Configuración de la codificación de caracteres
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->isSMTP();
        $mail->Host       ='smtp-mail.outlook.com';
        $mail->SMTPAuth   =true;
        $mail->Username   ='trabajodds@outlook.com';
        $mail->Password   ='Disenodesabores2024';
        $mail->Port       = 587;

        $mail->setFrom('trabajodds@outlook.com','Trabajo Final');
        $mail->addAddress('mschonberger11@outlook.com','Martin Schonberger');
        $mail->isHTML(true);
        $mail->Subject = 'Recuperación de contraseña';
        $mail->Body = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visita la página de <a href="http://localhost/Pagina2/change-password.php?id='.$row['id'].'">Recuperación de contraseña</a>';

        $mail->send();
        header("Location: ../index.php?message=ok");
    } catch (Exception $e) {
        header("Location: ../index.php?message=error&error=" . urlencode($mail->ErrorInfo));
    }

} else {
    header("Location: ../index.php?message=not_found");
}
?>