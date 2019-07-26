<?php
/**
 * Created by PhpStorm.
 * User: smadmin
 * Date: 2019-7-5
 * Time: 15:42
 */

return [
    'title' => 'My Blog',
    'posts_per_page' => 5,
    'uploads' => [
        'storage' => 'public', // 配置使用的文件系统
        'webpath' => '/storage', // 配置 Web 访问根目录
    ],
];