<?php

namespace App\Controllers;

class DownloadController extends BaseController
{
    public function downloadCV()
    {
        // Construct the file path relative to the public directory
        $file_path = ROOTPATH . 'public/uploads/Ortiv_Inga-Software_Engineer.pdf';

        if (file_exists($file_path)) {
            // Prepare the response to force download
            return $this->response->setHeader('Content-Type', 'application/pdf')
                ->setHeader('Content-Disposition', 'attachment; filename="Ortiv_Inga-Software_Engineer.pdf"')
                ->setHeader('Content-Length', filesize($file_path))
                ->setBody(file_get_contents($file_path));
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("File not found: " . $file_path);
        }
    }
}
