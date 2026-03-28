<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf/muzakki', function () {
    $records = \App\Models\Muzakki::all();
    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.muzakki', ['records' => $records]);
    return $pdf->stream('Laporan Muzakki.pdf');
})->name('pdf.muzakki')->middleware('auth');

Route::get('/pdf/mustahik', function () {
    $records = \App\Models\Mustahik::all();
    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.mustahik', ['records' => $records]);
    return $pdf->stream('Laporan Mustahik.pdf');
})->name('pdf.mustahik')->middleware('auth');
