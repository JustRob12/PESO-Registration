<?php
require __DIR__ . '/../../vendor/autoload.php'; // Adjust path based on your directory structure


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $contact_number = $_POST['contact_number'];
    $birthday = $_POST['birthday'];
    $date_registered = $_POST['date_registered'];
    $religion = $_POST['religion'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $province = $_POST['province'];
    $purpose = $_POST['purpose'];

    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Add headers
    $sheet->setCellValue('A1', 'First Name');
    $sheet->setCellValue('B1', 'Middle Name');
    $sheet->setCellValue('C1', 'Last Name');
    $sheet->setCellValue('D1', 'Age');
    $sheet->setCellValue('E1', 'Contact Number');
    $sheet->setCellValue('F1', 'Birthday');
    $sheet->setCellValue('G1', 'Date Registered');
    $sheet->setCellValue('H1', 'Religion');
    $sheet->setCellValue('I1', 'Address');
    $sheet->setCellValue('J1', 'Course');
    $sheet->setCellValue('K1', 'Province');
    $sheet->setCellValue('L1', 'Purpose');

    // Add data to the spreadsheet
    $sheet->setCellValue('A2', $firstname);
    $sheet->setCellValue('B2', $middlename);
    $sheet->setCellValue('C2', $lastname);
    $sheet->setCellValue('D2', $age);
    $sheet->setCellValue('E2', $contact_number);
    $sheet->setCellValue('F2', $birthday);
    $sheet->setCellValue('G2', $date_registered);
    $sheet->setCellValue('H2', $religion);
    $sheet->setCellValue('I2', $address);
    $sheet->setCellValue('J2', $course);
    $sheet->setCellValue('K2', $province);
    $sheet->setCellValue('L2', $purpose);

    // Create a new writer
    $writer = new Xlsx($spreadsheet);
    
    // Determine file path
    $filename = 'Student_Registration_' . date('Y-m-d_H-i-s') . '.xlsx';
    $filePath = '../assets/' . $filename;

    // Check if file already exists
    if (file_exists($filePath)) {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $highestRow = $sheet->getHighestRow();
        $nextRow = $highestRow + 1;

        // Append data to existing file
        $sheet->setCellValue('A' . $nextRow, $firstname);
        $sheet->setCellValue('B' . $nextRow, $middlename);
        $sheet->setCellValue('C' . $nextRow, $lastname);
        $sheet->setCellValue('D' . $nextRow, $age);
        $sheet->setCellValue('E' . $nextRow, $contact_number);
        $sheet->setCellValue('F' . $nextRow, $birthday);
        $sheet->setCellValue('G' . $nextRow, $date_registered);
        $sheet->setCellValue('H' . $nextRow, $religion);
        $sheet->setCellValue('I' . $nextRow, $address);
        $sheet->setCellValue('J' . $nextRow, $course);
        $sheet->setCellValue('K' . $nextRow, $province);
        $sheet->setCellValue('L' . $nextRow, $purpose);
        
        $writer = new Xlsx($spreadsheet);
    } else {
        // Save new file
        $writer = new Xlsx($spreadsheet);
    }
    
    $writer->save($filePath);

    echo "Excel file has been created or updated and saved as $filename.";
}
