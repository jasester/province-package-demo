<?php

$namespace = 'Hnndy\Province\Http\Controller\Api';

Route::group(['prefix' => 'api/v1', 'namespace' => $namespace, 'middleware' => 'web'], function () {
    Route::get('regions', 'RegionController@provinces')->name('regions.province'); //省份
    Route::get('region/{country_id}/citys', 'RegionController@citys')->name('regions.citys'); //城市
    Route::get('region/{country_id}/countys', 'RegionController@countys')->name('regions.countys'); //区县
    Route::get('region/{country_id}/streets', 'RegionController@streets')->name('regions.streets'); //街道
});