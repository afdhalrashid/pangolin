<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_pangolin', function () {
    $cwd = getcwd();
    echo $cwd;
    chdir("../../");
    // __DIR__ . '/..';
    $cwd = getcwd();
    echo $cwd;
    $command = escapeshellcmd('pangolin cluster.fasta 911610105285');
    $output = shell_exec($command);
});
