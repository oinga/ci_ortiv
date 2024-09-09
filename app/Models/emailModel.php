<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use CodeIgniter\Model;

class emailModel extends Model
{
    protected $table = 'emails';
    protected $primaryKey = 'id';
    protected $allowedFields = ['subject', 'body', 'recipient'];
    protected $phpMailer;

    public function __construct()
    {
        $this->phpMailer = new PHPMailer();
    }

    // Add your custom methods and functions here
    public function email(array $postData, string $subject): bool
    {
        $mail = new PHPMailer(true);

        $email = !empty($postData['email']) ? $postData['email'] : $postData['long_email'];
        $msg = !empty($postData['message']) ? $postData['message'] :'Contact ' . $email;

        try {
            // Server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = $_ENV['smtp_host']; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = $_ENV['email']; // SMTP username
            $mail->Password = $_ENV['password']; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` for SSL
            $mail->Port = 587; // TCP port to connect to


            // Optional: Disable SSL verification (for testing only)
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    // 'allow_self_signed' => true,
                ],
            ];
            // Recipients
            $mail->setFrom($_ENV['email'], 'Standing Dev'); // Sender's email and name
            $mail->addAddress($_ENV['email']); // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $msg;
            // $mail->AltBody = strip_tags($body); // Plain text body for non-HTML clients

            $mail->send(); // Send the email
            return true;
        } catch (Exception $e) {
            // Log the detailed error
            // error_log("Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}. Exception: {$e->getMessage()}");
            return false;
        }
    }
}
