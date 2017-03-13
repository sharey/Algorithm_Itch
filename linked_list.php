<?php


class Node
{
    public $data;
    public $next;
    
    public function __construct($item)
    {
        $this->data = $item;
        $this->next = NULL;
    }
}


class LinkList
{
    public $head = NULL;
    
    private static $count = 0;
    
    
    public function getCount()
    {
        return self::$count;
    }
    
    public function InsertAtFirst($item)
    {
        if($this->head == NULL)
        {
            $this->head = new Node($item);
        }
        else
        {
            $temp = new Node($item);
            
            $temp->next = $this->head;
            
            $this->head = $temp;
        }
        
        self::$count++;
    }
    
    public function InsertAtLast($item)
    {
        if($this->head == NULL)
        {
            $this->head = new Node($item);
        }
        else
        {
            $current = $this->head;
            
            while($current->next != NULL)
            {
                $current = $current->next;
            }
            
            $current->next = new Node($item);
        }
        
        self::$count++;    
    }
    
    public function ReadNode()
    {
        $arr_nodes = array();
        
        $current = $this->head;
        
        while($current != NULL)
        {
            array_push($arr_nodes, $current->data);
            $current = $current->next;
        }
        
        echo "\r\n".implode("->", $arr_nodes);
        
    }
    
    public function DeleteNode($item)
    {
        $current = $previous = $this->head;
        
        while($current->data != $item)
        {
            $previous = $current;
            $current = $current->next;
            
        }    
        
        if($current == $previous)
        {
            $this->head = $current->next;
        }
        
        if($current->next == NULL)
            $previous->next = NULL;
        else
            $previous->next = $current->next;
        
    }
}

$obj = new LinkList();

print("\r\nInserting 25 at first...");
$obj->InsertAtFirst(25);
print("\r\nInserting 24 at first...");
$obj->InsertAtFirst(24);
print("\r\nInserting 26 at last...");
$obj->InsertAtLast(26);
print("\r\nInserting 23... at first");
$obj->InsertAtFirst(23);
print("\r\nInserting 22... at first");
$obj->InsertAtFirst(22);
$obj->ReadNode();
print("\r\nDeleting 24...");
$obj->DeleteNode(24);
$obj->ReadNode();
print("\r\nDeleting 22...");
$obj->DeleteNode(22);
$obj->ReadNode();
