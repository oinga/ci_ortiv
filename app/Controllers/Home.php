<?php

namespace App\Controllers;

use App\Models\emailModel;

class Home extends BaseController
{
    private $emailModel;

    public function __construct()
    {
        $this->emailModel = new emailModel();
    }

    public function index(): string
    {
        $data = ['cv' => 'Ortiv_Inga-Software_Engineer.pdf'];
        $postData = $this->request->getPost();
        if (!empty($postData)) {
            $email = !empty($postData['email']) ? $postData['email'] : $postData['long_email'];
            if (!empty($email)) {
                if ($this->isValidEmail($email)) {
                    $msg = 'Your email has been successfully submitted.';
                    $this->sendEmail($postData);
                    $this->session->setFlashdata('message', $msg);
                } else {
                    $this->session->setFlashdata('message', 'Oops! It looks like that email address isn\'t formatted correctly. Please try again.');
                }
            } else {
                $this->session->setFlashdata('message', 'Oops, It looks like you forgot your email address. Please try again.');
            }
        }
        return view('index', $data);
    }

    private function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function sendEmail(array $postData)
    {
        $postData['email'] = !empty($postData['email']) ? $postData['email'] : $postData['long_email'];
        // sendKeepInTouchEmail(string $email, string $subject, string $body)
        $subject = 'Message from ' . $postData['email'];

        $msg = $this->emailModel->email($postData, $subject);
        return $msg;
    }
}
