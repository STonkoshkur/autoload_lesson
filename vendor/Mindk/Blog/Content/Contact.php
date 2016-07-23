<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 23.07.16
 * Time: 18:01
 */

namespace Mindk\Blog\Content;


class Contact extends Item
{
    /**
     * @inheritdoc
     */
    public function displayContent()
    {
        if(!empty($this->content))
        {
            echo "<dl>";
            foreach($this->content as $key=>$value){
                echo sprintf("<dt><b>%s</b></dt>", $key);
                echo sprintf("<dd>%s</dd>", $value);
            }
            echo "</dl>";
        }
    }
}