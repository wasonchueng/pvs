<?php
// 全局中间件定义文件
use app\middleware\Initialize;
use think\middleware\CheckRequestCache;
use think\middleware\LoadLangPack;
use think\middleware\SessionInit;

return [
    // 全局请求缓存
     // CheckRequestCache::class,
    // 多语言加载
   // LoadLangPack::class,
    // Session初始化
   //  SessionInit::class
    // 应用初始化
    Initialize::class
];
