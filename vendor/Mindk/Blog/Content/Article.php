<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 23.07.16
 * Time: 17:57
 */

namespace Mindk\Blog\Content;


class Article extends Item
{
    /**
     * @inheritdoc
     */
    public function displayContent()
    {
        echo sprintf("<p>%s</p>", $this->content);
    }
}