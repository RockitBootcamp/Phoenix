<?php

// This is how we could use classes to represent our HTML page


class Node {
    public $type = "unknown";
    public $value = "unknown";
    private $children = [];
    private $attributes = [];

    function addAttribute($node) {
        $this->attributes[] = $node;
    }
    function addChild($node) {
        $this->children[] = $node;
    }

}

class ElementNode extends Node {}
class AttributeNode extends Node {}
class TextNode extends Node {}


// <div class="fn">Brig Lamoreaux</div>
$div = new ElementNode();
$div->type = "div";

$attr = new AttributeNode();
$attr->type = "class";
$attr->value = "fn";

$text = new TextNode();
$text->value = "Brig Lamoreaux";

$div->addAttribute($attr);
$div->addChild($text);

print_r($div);


// <div class="fn">Brig <b>Lamoreaux</b></div>
$div = new ElementNode();
$div->type = "div";

$attr = new AttributeNode();
$attr->type = "class";
$attr->value = "fn";

$text = new TextNode();
$text->value = "Brig ";

$b = new ElementNode();
$div->type = "b";

$text2 = new TextNode();
$text2->value = "Brig ";
$b->addChild($text2);

$div->addAttribute($attr);
$div->addChild($text);
$div->addChild($b);

print_r($div);