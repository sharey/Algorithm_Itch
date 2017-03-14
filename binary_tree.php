<?php
class Node
{
    public $value, $left, $right;
    
    public function __construct($value)
    {
        $this->value = $value;
    }
    
    public function dump()
    {
        // In-order Traversal
        if($this->left !== null)
            $this->left->dump();
        
        var_dump($this->value);
        
        if($this->right !== null)
            $this->right->dump();
    }
}

class BinaryTree
{
    public $root;
    
    public function __construct($value = NULL)
    {
        $this->root = new Node($value);
    }
    
    public function traverse()
    {
        $this->root->dump();
    }
    
    public function insert($item)
    {
        $node = new Node($item);
        if($this->root === null)
        {
            $this->root = $node;
        }
        else
        {
            $this->insertNode($node, $this->root);
        }
    }
    
    public function insertNode($node, &$subtree)
    {
        if($subtree === null)
        {
            $subtree = $node;
        }
        else
        {
            if($node->value > $subtree->value)
                $this->insertNode($node, $subtree->right);
            else if($node->value < $subtree->value)
                $this->insertNode($node, $subtree->left);
            
        }
    }
}

$obj = new BinaryTree();

$obj->insert(2);
$obj->insert(20);
$obj->insert(12);
$obj->insert(5);
$obj->insert(17);
$obj->insert(7);

$obj->traverse();
