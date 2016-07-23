<?php

namespace Mindk\Blog;

use Mindk\Blog\Content\Item;

class Category
{
    /**
     * @var array   Items
     */
    protected $items = [];

    /**
     * @var string  Category name
     */
    public $name = '';

    /**
     * Category constructor.
     *
     * @param $name
     */
    public function __construct($name){

        $this->name = $name;
    }

    /**
     * Add item to category
     *
     * @param Item
     *
     * @return Category
     */
    public function addItem(Item $item){

        $this->items[] = $item;

        return $this;
    }

    /**
     * Display categpry content
     */
    public function displayContent(){

        echo sprintf("<h1>%s</h1>", $this->name);

        if(!empty($this->items)){
            foreach($this->items as $item){
                $item->display();
                echo "<hr />";
            }
        }
    }
}