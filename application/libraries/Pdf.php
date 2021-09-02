<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF{

	function __construct(){
		parent::__construct();
	
	}

    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logo.png';
        $this->Image($image_file, 1, 5, 15, '', 'PNG', '', 'T', false, 300, 'R', false, false, 0, false, false, false);
        // // Set font0
        $this->SetFont('helvetica', 'B', 7);
        // Title
        //$this->Cell(0, 5, 'Trasabilitate 2.0', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        
    }

	// Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 7);
        // Page number
        $this->Cell(0, 10, 'Pagina '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }

}

