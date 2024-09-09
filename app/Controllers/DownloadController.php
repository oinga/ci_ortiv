<?php

namespace App\Controllers;

class DownloadController extends BaseController
{
    public function downloadCV()
    {
        $file_path = WRITEPATH . 'uploads/Ortiv_Inga-Software_Engineer.pdf';

        if (file_exists($file_path)) {
            return $this->response->download($file_path, null);
        } else {
            return 'File does not exist.';
        }
    }
}
