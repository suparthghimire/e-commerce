<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items=null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQuty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item,$id){
        $storedItems = ['qty'=>0,'price'=>$item->price,'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItems = $this->items[$id];
            }
        }
        $storedItems['qty']++;
        $storedItems['price']+$item->price*$storedItems['qty'];
        $this->items[$id] = $storedItems;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
