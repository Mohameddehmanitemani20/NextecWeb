<?php

/**
 *génération des factures et devis au format pdf
 */

namespace App\Service;

use Spipu\Html2Pdf\Html2Pdf;


class T_HTML2PDF
{
    private $pdf;


    public function create(
        $orientation = null,
        $format = null,
        $lang = null,
        $unicode = null,
        $encoding = null,
        $margin = null
    ): void {
        $this->pdf = new Html2Pdf(
            $orientation ? $orientation : $this->orientation,
            $format ? $format : $this->format,
            $lang ? $lang : $this->lang,
            $unicode ? $unicode : $this->unicode,
            $encoding ? $encoding : $this->encoding,
            $margin ? $margin : $this->margin,
    );
    }
    public function generatePdf($template, $name)
    {
        $this->pdf->writeHTML($template);
        return $this->pdf->Output($name . '.pdf');
    }
    protected function _tag_open_IMG($param)
    {

        print_r($param);

        $src    = str_replace('&amp;', '&', $param['src']);

    }  }