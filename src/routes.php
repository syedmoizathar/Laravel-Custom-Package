<?php
use Illuminate\Support\Facades\Route;
use Vendor\Mzpackage\Controllers\mzpackagecontroller;

Route::get('greeting', [mzpackagecontroller::class,'greeting']);
