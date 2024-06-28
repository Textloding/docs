<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Dcat\Admin\Admin;

Admin::routes();

Route::post('/admin/upload-image', function (Request $request) {
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images', 'public');
        return response()->json(['url' => Storage::url($path)]);
    }

    return response()->json(['error' => 'Upload failed'], 400);
});

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resources([
        '/documents' => 'DocumentController',
        '/versions' => 'VersionController',
        '/chapters' => 'ChapterController',
        '/articles' => 'ArticleController',
    ]);


});
