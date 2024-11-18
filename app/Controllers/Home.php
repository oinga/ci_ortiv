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
        helper('recaptcha'); // Ensure Recaptcha helpers are loaded

        // Prepare data for the view, including Recaptcha script and widget
        $data = [
            'scriptTag' => getScriptTag(), // Render the Recaptcha script
            'widgetTag' => getWidget(),   // Render the Recaptcha widget
            'cv' => 'Ortiv_Inga-Software_Engineer.pdf'
        ];

        $postData = $this->request->getPost();

        if (!empty($postData)) {
            $email = $postData['email'] ?? $postData['long_email'] ?? null;

            if ($email) {
                if ($this->isValidEmail($email)) {
                    $captcha = $this->request->getPost('g-recaptcha-response');
                    $response = verifyResponse($captcha);

                    if (isset($response['success']) && $response['success'] === true) {
                        // Send email if Recaptcha is valid
                        $msg = 'Your email has been successfully submitted.';
                        $this->sendEmail($postData);
                        $this->session->setFlashdata('message', $msg);
                    } else {
                        $this->session->setFlashdata('message', 'Oops! It looks like you forgot to check the reCAPTCHA box. Please try again.');
                    }
                } else {
                    $this->session->setFlashdata('message', 'Oops! It looks like that email address isn\'t formatted correctly. Please try again.');
                }
            } else {
                $this->session->setFlashdata('message', 'Oops, It looks like you forgot your email address. Please try again.');
            }
        }

        return view('index', $data); // Load the view with data
    }

    private function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function sendEmail(array $postData)
    {
        $postData['email'] = $postData['email'] ?? $postData['long_email'];
        $subject = 'Message from ' . $postData['email'];

        return $this->emailModel->email($postData, $subject);
    }
}
