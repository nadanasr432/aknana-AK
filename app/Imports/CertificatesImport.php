<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Certificate;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\SkipsOnError;

class CertificatesImport implements ToModel, WithHeadingRow, WithBatchInserts, SkipsEmptyRows
{
    private $previousCertificateNo;

    public function __construct()
    {
        // Retrieve the last imported certificate number from a persistent storage
        // For example, retrieve from database or cache
        $this->previousCertificateNo = $this->getLastCertificateNumber();
    }

    public function model(array $row)
    {
        // dd( $row);
        // Check if certificate_No already exists
        if (Certificate::where('certificate_No', $row['certificate_number'])->exists()) {
            Log::warning('Skipping row. Certificate number already exists: ' . $row['certificate_number']);
            return null; // Skip row if certificate number exists
        }

        // Increment the certificate number for each new row
        $this->previousCertificateNo++;

        // Parse date from different formats
        $date = $this->parseDate($row['date']);

        return new Certificate([
            'certificate_No' => $this->previousCertificateNo,
            'trainee_Name' => $row['trainee_name'],
            'course_Name' => $row['course_name'],
            'trainer_Name' => $row['trainer_name'],
            'country' => $row['country'],
            'date' => $date,
            'days_No' => intval($row['days']),
            'email'=> $row['email'],
        ]);
    }

    private function parseDate($dateString)
    {
        // Parse Excel date format or various other date formats
        if (is_numeric($dateString)) {
            return Carbon::instance(Date::excelToDateTimeObject($dateString))->format('Y-m-d');
        }

        $formats = ['d-m-Y', 'd-M-y', 'd/m/Y', 'd/m/y'];
        foreach ($formats as $format) {
            try {
                return Carbon::createFromFormat($format, $dateString)->format('Y-m-d');
            } catch (\Exception $e) {
                // Log and continue trying other formats
                Log::error('Date format not recognized: ' . $dateString);
            }
        }
    }

    public function batchSize(): int
    {
        return 1600; // Adjust batch size based on performance testing
    }

    // Example method to retrieve the last certificate number from a database
    private function getLastCertificateNumber()
    {
        // Implement logic to retrieve the last certificate number
        // Example: return Certificate::max('certificate_No') ?? 0;
        // Adjust according to your actual database model and logic
        return Certificate::max('certificate_No') ?? 1200199; // Default starting number if no previous imports
    }
}
