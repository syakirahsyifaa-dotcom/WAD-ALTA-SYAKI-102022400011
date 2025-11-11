<?php

use Illuminate\Support\Facades\Route;
# 1. Import controller yang akan digunakan
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\profilController;

route::get('/', [DashboardController::class, 'index']);
route::get('/profil', [profilcontroller::class, 'index']);  


# 2. Tambahkan route untuk halaman dashboard dengan metode GET yang memanggil fungsi index() dari DashboardController.
# 3. Tambahkan route untuk halaman profil dengan metode GET yang memanggil fungsi index() dari ProfileController.
