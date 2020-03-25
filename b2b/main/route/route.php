<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//Route::get('think', function () {
//    return 'hello,ThinkPHP5!';
//});
//
//Route::get('hello/:name', 'index/hello');
use think\facade\Route;
//图片上传
Route::post('api/:version/cms/cms_upload_goods_img$', 'api/:version.upload.Upload/ImgUpload');
Route::rule('api/:version/cms/cms_upload_goods_img$', 'api/:version.Option/returnTrue', 'OPTIONS');
//所有管理员
Route::get('api/:version/cms/all_admin','api/:version.cms.CmsAdmin/allAdmin');
//return [
//
//];
