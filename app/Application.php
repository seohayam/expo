<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Auth;

class Application extends Model
{
    protected $regurded = array('id');

    protected $fillable = ['item_id','from_user_id','from_store_owner_id','to_user_id','to_store_owner_id','application-status'];


    public function item()
    {
        return $this->belongsTo('App\application', 'item_id', 'id');
    }

    public function storeOwner()
    {        
            $toStoreOwner = $this->belongsTo('App\StoreOwner', 'to_store_owner_id', 'id');                  
            $fromStoreOwner = $this->belongsTo('App\StoreOwner', 'from_store_owner_id', 'id');      
            
            if(!isset($toStoreOwner))
            {
                return $fromStoreOwner;
            }else{
                return $toStoreOwner;
            }
        
    }
    public function user()
    {        
            $fromUser =  $this->belongsTo('App\User', 'from_user_id', 'id');
        
            $toUser =  $this->belongsTo('App\User', 'to_user_id', 'id');   
            
            if(!isset($toUser))
            {
                return $fromUser;
            }else{
                return $toUser;
            }
        
    }

}
