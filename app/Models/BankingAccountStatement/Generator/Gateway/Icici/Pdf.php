<?php

namespace RZP\Models\BankingAccountStatement\Generator\Gateway\Icici;

use View;
use Carbon\Carbon;

use RZP\Exception;
use RZP\Constants\Timezone;
use mikehaertl\wkhtmlto\Pdf as PdfLibrary;
use RZP\Models\BankingAccountStatement\Generator\SupportedFormats;

class Pdf extends Generator
{
    protected const TEMPLATE_FILE_NAME = 'bank_account_statement.ICICI.statement';

    function getStatement()
    {
        $htmlAccountStatement = View::make(self::TEMPLATE_FILE_NAME, $this->data);

        $pdfAccountStatement = $this->getPdfContent($htmlAccountStatement);

        $tmpFileName = $this->generateFileName(SupportedFormats::PDF);

        $tmpFileFullPath = self::TEMP_STORAGE_DIR . $tmpFileName;

        $fileHandle = fopen($tmpFileFullPath, 'w');

        fwrite($fileHandle, $pdfAccountStatement);

        fclose($fileHandle);

        return $tmpFileFullPath;
    }

    protected function getPdfContent(string $html): string
    {
        $basDetails = $this->repo->banking_account_statement_details
                           ->fetchByAccountNumberAndChannel($this->accountNumber, $this->channel);

        $lastUpdatedAt = $this->getLastStatementAttemptAt($basDetails);

        $options = [
            'print-media-type',
            'page-width'       => '275.844mm',
            'page-height'      => '564.388mm',
            'footer-font-size' => '6',
            'footer-right'     => 'Page [page] of [topage]',
            'footer-left'      => 'This account statement has been generated by Razorpay Software Pvt Ltd.' .
                                  ' Last Updated At: ' .
                                  Carbon::createFromTimestamp($lastUpdatedAt, Timezone::IST)
                                        ->format('d/m/Y h:i A'),
            'dpi'              => 290,
            'zoom'             => 1,
            'ignoreWarnings'   => false,
            'encoding'         => 'UTF-8',
        ];

        $pdf = (new PdfLibrary($options))->addPage($html);

        $pdfContent = $pdf->toString();

        if ($pdfContent === false)
        {
            throw new Exception\LogicException('Pdf generation failed: ' . $pdf->getError(),
                                               null,
                                               [
                                                   'account_number' => $this->accountNumber,
                                                   'channel'        => $this->channel,
                                                   'from_date'      => $this->fromDate,
                                                   'to_date'        => $this->toDate,
                                               ]);
        }

        return $pdfContent;
    }
}
