<?php
declare (strict_types = 1);

namespace app\middleware;

use Closure;
use think\facade\Config;
use think\facade\View;
use think\Request;
use think\Response;

class Initialize
{
    /**
     * 处理请求
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $panda = Config::get('panda');
        // 配置模板全局变量
        View::assign(  'panda',$panda);
        // 动态配置模板目录
        Config::set(['view_dir_name'=>  'view/' . $panda['app']['template_dir']],'view');



        return  $next($request);
    }
}
