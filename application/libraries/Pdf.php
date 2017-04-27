<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// Incluimos el archivo fpdf
require_once APPPATH . "/third_party/fpdf17/fpdf.php";

//Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
class Pdf extends FPDF {

    var $w;
    var $a;
    var $f = 'false';
    var $style = 'D';
    public function __construct() {
        parent::__construct();
      $this->title = "";
    }

    // El encabezado del PDF
    public function Header() {
        $this->Image('media/log_1o.png', 10, 8, 50, 20);
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(30);
        $this->Cell(120, 10, $this->title, 0, 0, 'C');
        $this->Ln('5');
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(30);
        $this->Cell(120, 10, date("d/m/y"), 0, 0, 'C');
        $this->Ln(20);
    }

    // El pie del pdf
    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Correo: areatecnica@rabina.com.mx ', '/{nb}', 0, 0, 'C');
    }

    public function SetWidths($w) {
        //Set the array of column widths 
        $this->widths = $w;
    }

    public function SetAligns($a) {
        //Set the array of column alignments 
        $this->aligns = $a;
    }

    public function SetTitle($title) {
        //Set the array of column alignments 
        $this->title = $title;
    }

    public function fill($f) {
        $f = 'false';
        //juego de arreglos de relleno
        $this->fill = $f;
    }

    public function Row($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(255, 255, 255);
            $this->MultiCell($w, 5, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row2($data) {
        //Calculate the height of the row 
        $nb = 0;
        //$f='true';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(218, 218, 218);
            $this->SetFillColor(230, 230, 230);
            $this->MultiCell($w, 5, $data[$i], '1', $a, 'true');
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row3($data) {
        //Calculate the height of the row 
        $nb = 0;
        //$f='true';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        //$nba=max($nba,$this->Nbaligns($this->aligns[$i],$data[$i])); 
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$a=isset($this->aligns[$i]); 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            $this->Rect(15, $y, 180, $h, 'D');
            //Print the text 
            $this->SetDrawColor(218, 218, 218);
            $this->SetFillColor(255, 255, 255);
            $this->MultiCell($w, 5, $data[$i], '0', $a, 'true');
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row4($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$color=$this->TextColor[$i]; 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(255, 255, 255);
            //$this->SetTextColor($w);
            $this->MultiCell($w, 5, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row5($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$color=$this->TextColor[$i]; 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(0, 39, 73);
            //$this->SetTextColor($w);
            $this->MultiCell($w, 5, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function RowDraw($data, $Borde, $f) {
        //Calculate the height of the row 
        $nb = 0;
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            //$x=$this->GetX(); 
            //$y=$this->GetY(); 
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(0, 0, 0);
            $this->SetFillColor(0, 39, 73);
            $this->MultiCell($w, 5, $data[$i], $Borde, $a, $f);
            //Put the position to the right of the cell 
            //$this->SetXY($x+$w,$y); 
        }
        //Go to the next line 
        $this->Ln(0);
    }

    public function RowDraw2($data, $Borde, $f) {
        //Calculate the height of the row 
        $nb = 0;
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            //$x=$this->GetX(); 
            //$y=$this->GetY(); 
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(0, 0, 0);
            $this->SetFillColor(255, 102, 0);
            $this->MultiCell($w, 5, $data[$i], $Borde, $a, $f);
            //Put the position to the right of the cell 
            //$this->SetXY($x+$w,$y); 
        }
        //Go to the next line 
        $this->Ln(0);
    }

    public function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately 
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    public function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take 
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l+=$cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    public function ChapterTitle($label) {
        // Arial 12
        $this->SetFont('Arial', '', 12);
        $this->SetTextColor(129, 0, 0);
        // Color de marco
        $this->SetDrawColor(129, 0, 0);
        // Título
        $this->Cell(0, 6, $label, 'B', 1, 'L');
        // Salto de línea
        $this->Ln(4);
    }

    public function PrintChapter($title) {
        $this->Ln(10);
        $this->ChapterTitle($title);
    }

}

class Pdf2 extends FPDF {

    var $w;
    var $a;
    var $f = 'false';
    var $style = 'D';

    public function __construct() {
        parent::__construct();
    }

    // El encabezado del PDF
    public function Header() {
        $this->Image('media/log_1o.png', 10, 8, 50, 20);
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(30);
        $this->Cell(120, 10, 'PRECIOS DEL CEMENTO', 0, 0, 'C');
        $this->Ln('5');
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(30);
        $this->Cell(120, 10, date("d/m/y"), 0, 0, 'C');
        $this->Ln(20);
    }

    // El pie del pdf
    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Correo: areatecnica@rabina.com.mx ', '/{nb}', 0, 0, 'C');
    }

    public function SetWidths($w) {
        //Set the array of column widths 
        $this->widths = $w;
    }

    public function SetAligns($a) {
        //Set the array of column alignments 
        $this->aligns = $a;
    }

    public function fill($f) {
        $f = 'false';
        //juego de arreglos de relleno
        $this->fill = $f;
    }

    public function Row($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(255, 255, 255);
            $this->MultiCell($w, 5, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row2($data) {
        //Calculate the height of the row 
        $nb = 0;
        //$f='true';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(218, 218, 218);
            $this->SetFillColor(230, 230, 230);
            $this->MultiCell($w, 5, $data[$i], '1', $a, 'true');
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row3($data) {
        //Calculate the height of the row 
        $nb = 0;
        //$f='true';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        //$nba=max($nba,$this->Nbaligns($this->aligns[$i],$data[$i])); 
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$a=isset($this->aligns[$i]); 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            $this->Rect(15, $y, 180, $h, 'D');
            //Print the text 
            $this->SetDrawColor(218, 218, 218);
            $this->SetFillColor(255, 255, 255);
            $this->MultiCell($w, 5, $data[$i], '0', $a, 'true');
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row4($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$color=$this->TextColor[$i]; 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(255, 255, 255);
            //$this->SetTextColor($w);
            $this->MultiCell($w, 5, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row5($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$color=$this->TextColor[$i]; 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(0, 39, 73);
            //$this->SetTextColor($w);
            $this->MultiCell($w, 5, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function RowDraw($data, $Borde, $f) {
        //Calculate the height of the row 
        $nb = 0;
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            //$x=$this->GetX(); 
            //$y=$this->GetY(); 
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(0, 0, 0);
            $this->SetFillColor(0, 39, 73);
            $this->MultiCell($w, 5, $data[$i], $Borde, $a, $f);
            //Put the position to the right of the cell 
            //$this->SetXY($x+$w,$y); 
        }
        //Go to the next line 
        $this->Ln(0);
    }

    public function RowDraw2($data, $Borde, $f) {
        //Calculate the height of the row 
        $nb = 0;
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            //$x=$this->GetX(); 
            //$y=$this->GetY(); 
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(0, 0, 0);
            $this->SetFillColor(255, 102, 0);
            $this->MultiCell($w, 5, $data[$i], $Borde, $a, $f);
            //Put the position to the right of the cell 
            //$this->SetXY($x+$w,$y); 
        }
        //Go to the next line 
        $this->Ln(0);
    }

    public function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately 
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    public function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take 
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l+=$cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    public function ChapterTitle($label) {
        // Arial 12
        $this->SetFont('Arial', '', 12);
        $this->SetTextColor(129, 0, 0);
        // Color de marco
        $this->SetDrawColor(129, 0, 0);
        // Título
        $this->Cell(0, 6, $label, 'B', 1, 'L');
        // Salto de línea
        $this->Ln(4);
    }

    public function PrintChapter($title) {
        $this->Ln(10);
        $this->ChapterTitle($title);
    }

}

class PdfCV extends FPDF {

    var $w;
    var $a;
    var $f = 'false';
    var $style = 'D';

    public function __construct() {
        parent::__construct();
    }

    // El encabezado del PDF
    public function Header() {
        $this->AddFont('CenturyGothic', '', 'CenturyGothic.php');
        $this->SetFont('CenturyGothic', '', 11);
        $this->AddFont('CenturyGothicB', '', 'CenturyGothicB.php');
        $this->SetFont('CenturyGothicB', '', 11);
        $proyecto = '1';
        $this->Image('media/Rabina.png', 14, 8, 50, 15);
        $this->Image("media/" . $proyecto . ".png", 147, 8, 50, 15);
        $this->SetFont('CenturyGothicB', '', 13);
        $this->Cell(30);
        $this->Cell(120, 10, 'Promesa de Compra Venta', 0, 0, 'C');
        $this->Ln('5');
        $this->SetFont('CenturyGothic', '', 8);
        $this->Ln(15);
    }

    // El pie del pdf
    public function Footer() {
        $this->AddFont('CenturyGothic', '', 'CenturyGothic.php');
        $this->SetFont('CenturyGothic', '', 11);
        $this->AddFont('CenturyGothicB', '', 'CenturyGothicB.php');
        $this->SetFont('CenturyGothicB', '', 11);
        $this->SetY(-15);
        $this->SetFont('CenturyGothic', '', 8);
        $this->Cell(0, 5, 'Correo: areatecnica@rabina.com.mx ', '/{nb}', 0, 0, 'C');
    }

    public function SetWidths($w) {
        //Set the array of column widths 
        $this->widths = $w;
    }

    public function SetAligns($a) {
        //Set the array of column alignments 
        $this->aligns = $a;
    }

    public function fill($f) {
        $f = 'false';
        //juego de arreglos de relleno
        $this->fill = $f;
    }

    public function Row($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(255, 255, 255);
            $this->MultiCell($w, 3, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row2($data) {
        $this->Ln(3);
        //Calculate the height of the row 
        $nb = 0;
        //$f='true';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(218, 218, 218);
            $this->SetFillColor(230, 230, 230);
            $this->MultiCell($w, 3, $data[$i], '1', $a, 'true');
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
        $this->Ln(1);
    }

    public function Row3($data) {
        //Calculate the height of the row 
        $nb = 0;
        //$f='true';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        //$nba=max($nba,$this->Nbaligns($this->aligns[$i],$data[$i])); 
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$a=isset($this->aligns[$i]); 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            $this->Rect(15, $y, 180, $h, 'D');
            //Print the text 
            $this->SetDrawColor(218, 218, 218);
            $this->SetFillColor(255, 255, 255);
            $this->MultiCell($w, 3, $data[$i], '0', $a, 'true');
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row4($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$color=$this->TextColor[$i]; 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(255, 255, 255);
            //$this->SetTextColor($w);
            $this->MultiCell($w, 3, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function Row5($data) {
        //Calculate the height of the row 
        $nb = 0;
        $f = 'false';
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //$color=$this->TextColor[$i]; 
            //Save the current position 
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(255, 255, 255);
            $this->SetFillColor(0, 39, 73);
            //$this->SetTextColor($w);
            $this->MultiCell($w, 3, $data[$i], '0', $a, $f);
            //Put the position to the right of the cell 
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line 
        $this->Ln($h);
    }

    public function RowDraw($data, $Borde, $f) {
        //Calculate the height of the row 
        $nb = 0;
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            //$x=$this->GetX(); 
            //$y=$this->GetY(); 
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(0, 0, 0);
            $this->SetFillColor(0, 39, 73);
            $this->MultiCell($w, 3, $data[$i], $Borde, $a, $f);
            //Put the position to the right of the cell 
            //$this->SetXY($x+$w,$y); 
        }
        //Go to the next line 
        $this->Ln(0);
    }

    public function RowDraw2($data, $Borde, $f) {
        //Calculate the height of the row 
        $nb = 0;
        //$style='D'; 
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 3 * $nb;
        //Issue a page break first if needed 
        $this->CheckPageBreak($h);
        //Draw the cells of the row 
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = $this->aligns[$i];
            //Save the current position 
            //$x=$this->GetX(); 
            //$y=$this->GetY(); 
            //Draw the border 
            //$this->Rect($x,$y,$w,$h,$style); 
            //Print the text 
            $this->SetDrawColor(0, 0, 0);
            $this->SetFillColor(255, 102, 0);
            $this->MultiCell($w, 3, $data[$i], $Borde, $a, $f);
            //Put the position to the right of the cell 
            //$this->SetXY($x+$w,$y); 
        }
        //Go to the next line 
        $this->Ln(0);
    }

    public function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately 
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    public function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take 
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l+=$cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    public function ChapterTitle($label) {
        // Arial 12
        $this->SetFont('Arial', '', 12);
        $this->SetTextColor(129, 0, 0);
        // Color de marco
        $this->SetDrawColor(129, 0, 0);
        // Título
        $this->Cell(0, 6, $label, 'B', 1, 'L');
        // Salto de línea
        $this->Ln(4);
    }

    public function PrintChapter($title) {
        $this->Ln(10);
        $this->ChapterTitle($title);
    }

}

?>