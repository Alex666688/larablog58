<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-7-26
 * Time: 16:46
 */

namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{

    public function toHTML ($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    protected function preTransformText ($text)
    {
        return $text;
    }

    protected function postTransformText ($text)
    {
        return $text;
    }


}