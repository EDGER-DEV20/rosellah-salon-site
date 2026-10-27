<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts', function () {
    $data = request(['name', 'email', 'phone', 'message']);

    \Illuminate\Support\Facades\Mail::to('e.e.mtambala@gmail.com')
        ->send(new \App\Mail\SalonSiteMail($data));

    return redirect('/contacts')
        ->with('flash', 'Ujumbe umetumwa kikamilifu');
});

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');

Route::post('/appointment', function () {
    $data = request(['name', 'email', 'phone', 'service', 'message']);

    \Illuminate\Support\Facades\Mail::to('e.e.mtambala@gmail.com')
        ->send(new \App\Mail\SalonSiteAppointment($data));

    return redirect('/appointment')
        ->with('flash', 'Appointment imewekwa kikamilifu, tutakurudia hivi punde');
});
