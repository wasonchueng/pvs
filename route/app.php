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
use app\common\Request;
use think\facade\Route;


/**
 * 首页路由
 */
Route::view('/','index');



/*Route::get('/[:page]',function (Request $request){
    return $request->pathinfo();
})->pattern([
    'page'=>'.+'
]);*/

/**
 *  404 msg
 */
Route::miss(function (){
    return view('404');
});