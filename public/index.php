<?php

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');
// 定义vaeThink项目目录
define('VAE_ROOT', __DIR__ . '/../');
// 定义vaeThink核心包目录
define('VAE_LTR', VAE_ROOT . 'listenrain/vae/');
// 加载ThikPHP引导文件
require VAE_ROOT . 'listenrain/thinkphp/base.php';
// 加载vaeThink引导文件
require VAE_LTR . 'base.php';
// 执行应用
\think\App::run()->send();