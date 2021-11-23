<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


// require_once("dompdf/autoload.inc.php");
require_once 'system/helpers/dompdf/autoload.inc.php';
define("DOMPDF_UNICODE_ENABLED", true);

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Option;

function pdf_create($html, $filename='', $stream=TRUE) {

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();

    if($stream) {
        $dompdf->stream($filename . ".pdf");
    } else {
        return $domPdf->output();
    }

}