<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\TeamController;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/members', MemberController::class);
Route::resource('/teams', TeamController::class);


Route::get('/', function () {
    return view('components.team-detail',
        ['teams' => Team::with('members')->get()]);
});

Route::get('/create-member', function () {
    return view('components.member-form');
});

Route::get('/create-team', function () {
    return view('components.team-form',
        ['members' => Member::all()]);
});
