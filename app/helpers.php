<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-7-26
 * Time: 11:35
 */

if (! function_exists('human_filesize'))
{
    /**
     * 返回可读性更好的文件尺寸
     */
    function human_filesize ($bytes, $decimals = 2)
    {
        $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
        $factor = floor((strlen($bytes) - 1) / 3);

        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
    }
}

if (! function_exists('is_image'))
{
    /**
     * 判断文件的 MIME 类型是否为图片
     */
    function is_image ($mimeType)
    {
        return starts_with($mimeType, 'image/');
    }
}

