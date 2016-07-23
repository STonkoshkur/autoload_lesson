<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 23.07.16
 * Time: 18:04
 */

namespace Mindk\Blog\Content;


class Video extends Item
{
    /**
     * @inheritdoc
     */
    public function displayContent()
    {
        echo sprintf('<iframe width="560" height="315" src="%s" frameborder="0" allowfullscreen></iframe>', $this->content);
    }
}