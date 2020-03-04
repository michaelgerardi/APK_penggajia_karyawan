<?php

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
});
route::get('/pegawai','create_pegawaiController@Index')->name('indexpegawai');
route::post('/pegawai/create','create_pegawaiController@create');
route::get('/proseseditpegawai/{id_pegawai}','create_pegawaiController@editpegawai')->name('proseseditpegawai');
route::get('/editpegawai/{id_pegawai}','create_pegawaiController@vedit')->name('editpegawai');
route::get('/deletepegawai/{id_pegawai}','create_pegawaiController@delete');

route::get('/gaji','GajiController@Index')->name('indexgaji');
route::post('/gaji/create','GajiController@create');
route::get('/proseseditgaji/{id_gaji}','GajiController@editgaji')->name('proseseditgaji');
route::get('/editgaji/{id_gaji}','GajiController@vedit')->name('editgaji');
route::get('/deletegaji/{id_gaji}','GajiController@deletegaji');

route::get('/pensiun','create_pensiunController@Index')->name('indexpensiun');
route::post('/pensiun/create','create_pensiunController@create');
route::get('/proseseditpensiun/{id_pensiun}','create_pensiunController@editpensiun')->name('proseseditpensiun');
route::get('/editpensiun/{id_pensiun}','create_pensiunController@vedit')->name('editpensiun');
route::get('/deletepensiun/{id_pensiun}','create_pensiunController@deletepenisun');

route::get('/pangkat','create_pangkatController@Index')->name('indexpangkat');
route::post('/pangkat/create','create_pangkatController@create');
route::get('/proseseditpangkat/{id_pangkat}','create_pangkatController@editpangkat')->name('proseseditpangkat');
route::get('/editpangkat/{id_pangkat}','create_pangkatController@vedit')->name('editpangkat');
route::get('/deletepangkat/{id_pangkat}','create_pangkatController@deletepangkat');

route::get('/kehadiran','KehadiranController@Index')->name('indexkehadiran');
route::post('/kehadiran/create','KehadiranController@create');
route::get('/proseseditkehadiran/{id_kehadiran}','KehadiranController@editkehadiran')->name('proseseditkehadiran');
route::get('/editkehadiran/{id_kehadiran}','KehadiranController@vedit')->name('editkehadiran');
route::get('/deletekehadiran/{id_kehadiran}','KehadiranController@deletekehadiran');

route::post('/Laporan/gaji','LaporanController@LaporanGaji')->name('LaporanGaji');
route::get('/Laporan/bulangaji','LaporanController@vLaporangaji')->name('vLaporangaji');
route::post('/Laporan/kehadiran','LaporanController@Laporankehadiran')->name('Laporankehadiran');
Route::get('/Laporan/bulanabsen','LaporanController@vLaporanKehadiran')->name('vLaporanKehadiran');
route::get('/Laporan/bukubesar','LaporanController@Laporanbb')->name('LaporanBB');