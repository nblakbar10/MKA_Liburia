<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'Api\UserController@details');
    Route::post('logout', 'Api\UserController@logout');
    Route::post('user_edit', 'Api\UserController@user_edit'); //harusnya ini put tapi malah error wkwkkw jadinya pake post
    Route::delete('user_delete/{id}', 'Api\UserController@user_delete');

    Route::post('update', 'Api\UserController@update');

    Route::get('get_tempat_wisata', 'API\DetailController@get_tempat_wisata');
    Route::get('get_bundling_tiket', 'API\DetailController@get_bundling_tiket');
    Route::get('get_review_wisata', 'API\DetailController@get_review_wisata');
    Route::get('get_artikel', 'API\DetailController@get_artikel');

    Route::get('get_rencana_liburan/{user_id}', 'Api\RencanaLiburanController@get_rencana_liburan');
    Route::post('post_rencana_liburan', 'Api\RencanaLiburanController@post_rencana_liburan');
    Route::put('edit_rencana_liburan/{id}', 'Api\RencanaLiburanController@edit_rencana_liburan');
    Route::delete('delete_rencana_liburan/{id}', 'Api\RencanaLiburanController@delete_rencana_liburan');


    Route::get('get_pemesanan_tiket', 'Api\PemesananTiketController@get_pemesanan_tiket');
    Route::post('post_pemesanan_tiket/{id}', 'Api\PemesananTiketController@post_pemesanan_tiket');

    Route::post('add_bukti_pembayaran/{id}', 'Api\PemesananTiketController@add_bukti_pembayaran');

    Route::delete('delete_riwayat_pemesanan/{id}', 'Api\PemesananTiketController@delete_riwayat_pemesanan');


    Route::post('follow_user', 'Api\FollowController@follow_user');
    Route::delete('unfollow_user', 'Api\FollowController@unfollow_user');



    Route::get('get_riwayat_liburan/{user_id}', 'API\RiwayatLiburanController@get_riwayat_liburan');

    Route::apiResource('tempatwisatas/{tempatwisata}/reviews', 'ReviewTempatWisataController')
    ->only('store', 'update', 'destroy');
    
    //Route::match(array('GET','POST'),'post_rencana_liburan', 'Api\DetailController@post_rencana_liburan');

    
    
    
    
}); 


//Route::get('users', 'apicontroller@get_all_users');
//Route::post('users/add_users', 'apicontroller@insert_data_users');
//Route::put('/users/update/{id}','apicontroller@update_data_users');