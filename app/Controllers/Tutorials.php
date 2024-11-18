<?php

namespace App\Controllers;

use App\Models\emailModel;

class Tutorials extends BaseController
{
    private $emailModel;

    public function __construct()
    {
        $this->emailModel = new emailModel();
    }

    public function index(): string
    {
        helper('recaptcha'); // Load the reCAPTCHA helper
       
        // $recaptchaConfig = config('Recaptcha');

        // $recaptchaConfig->recaptchaSiteKey = $_ENV['recaptchaSiteKey'];
        // $recaptchaConfig->recaptchaSecretKey =  $_ENV['recaptchaSecretKey'];
        
        $data = [
            'scriptTag' => getScriptTag(),  // Load the reCAPTCHA script
            'widgetTag' => getWidget(),     // Load the reCAPTCHA widget
        ];

        $postData = $this->request->getPost();

        if (!empty($postData)) {
            $email = !empty($postData['email']) ? $postData['email'] : $postData['long_email'];

            if (!empty($email)) {
                if ($this->isValidEmail($email)) {

                    // Step 1: Get the reCAPTCHA response
                    $recaptchaResponse = $this->request->getPost('g-recaptcha-response');

                    // Step 2: Verify the reCAPTCHA response
                    $response = verifyResponse($recaptchaResponse);

                    if (isset($response['success']) && $response['success'] === true) {
                        // reCAPTCHA verification passed
                        $msg = 'Your email has been successfully submitted.';
                        $this->sendEmail($postData);
                        $this->session->setFlashdata('message', $msg);
                    } else {
                        // reCAPTCHA verification failed
                        $this->session->setFlashdata('message', 'Captcha verification failed. Please try again.');
                    }
                } else {
                    $this->session->setFlashdata('message', 'Oops! It looks like that email address isn\'t formatted correctly. Please try again.');
                }
            } else {
                $this->session->setFlashdata('message', 'Oops, It looks like you forgot your email address. Please try again.');
            }
        }

        return view('under_construction', $data); // Pass reCAPTCHA data to the view
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
