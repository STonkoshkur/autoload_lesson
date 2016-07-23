<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 23.07.16
 * Time: 17:51
 */

namespace Mindk\Blog\Content;

abstract class Item
{
    public $title;

    public $content;

    /**
     * Item constructor.
     *
     * @param $title
     * @param $content
     */
    public function __construct($title, $content){
       $this->title = $title;
       $this->content = $content;
    }

    /**
     * Display heading
     */
    public function displayHeading(){

        echo sprintf("<h2>%s</h2>", $this->title);
    }

    /**
     * Display content
     */
    public function displayContent(){

        echo $this->content;
    }

    /**
     * Display item's Content
     *
     * @return mixed
     */
    public function display(){

        $this->displayHeading();
        $this->displayContent();
    }
}