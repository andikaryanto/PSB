<?php

use yidas\phpSpreadsheet\Helper as YidasHelper;

$header = [
    ["value" => "No", 'width' => 40, 'style' => [
        'font' => [
            'bold' => true,
            'color' => ['argb' => '000']
        ],
        'fill' => [
            'fillType' => 'solid',
            'startColor' => ['argb' => '279d06'],
        ]
    ]]
    // ["value" => "No. Daftar", 'width' => 30, 'style' => [
    //     'font' => [
    //         'bold' => true,
    //         'color' => ['argb' => '000']
    //     ],
    //     'fill' => [
    //         'fillType' => 'solid',
    //         'startColor' => ['argb' => '279d06'],
    //     ]
    // ]],
    // ["value" => "NIS", 'width' => 15, 'style' => [
    //     'font' => [
    //         'bold' => true,
    //         'color' => ['argb' => '000']
    //     ],
    //     'fill' => [
    //         'fillType' => 'solid',
    //         'startColor' => ['argb' => '279d06'],
    //     ]
    // ]],
    // ["value" => "Nama Lengkap", 'width' => 60, 'style' => [
    //     'font' => [
    //         'bold' => true,
    //         'color' => ['argb' => '000']
    //     ],
    //     'fill' => [
    //         'fillType' => 'solid',
    //         'startColor' => ['argb' => '279d06'],
    //     ]
    // ]],
    // ["value" => "Jenis Kelamin", 'width' => 60, 'style' => [
    //     'font' => [
    //         'bold' => true,
    //         'color' => ['argb' => '000']
    //     ],
    //     'fill' => [
    //         'fillType' => 'solid',
    //         'startColor' => ['argb' => '279d06'],
    //     ]
    // ]],
    // ["value" => "Asal Sekolah", 'width' => 15, 'style' => [
    //     'font' => [
    //         'bold' => true,
    //         'color' => ['argb' => '000']
    //     ],
    //     'fill' => [
    //         'fillType' => 'solid',
    //         'startColor' => ['argb' => '279d06'],
    //     ]
    // ]],
];

// echo json_encode($header, JSON_PRETTY_PRINT);


YidasHelper::newSpreadsheet()
->addRow(['ID', 'Name', 'Email'])
->addRows([
    ['1', 'Nick','myintaer@gmail.com'],
    ['2', 'Eric','eric@.....'],
])
->output('My Excel');


// $spreadsheet = new Spreadsheet();
// $sheet = $spreadsheet->getActiveSheet();
// $sheet->setCellValue('A1', 'Hello World !');

// // $writer = new Xlsx($spreadsheet);
// // $writer->save('hello world.xlsx');

// $streamedResponse = new StreamedResponse();
// $streamedResponse->setCallback(function () use ($spreadsheet) {
//         // $spreadsheet = //create you spreadsheet here;
//         $writer =  new Xlsx($spreadsheet);
//         $writer->save('php://output');
// });

// $streamedResponse->setStatusCode(200);
// $streamedResponse->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// $streamedResponse->headers->set('Content-Disposition', 'attachment; filename="test.xls"');
// return $streamedResponse->send();

