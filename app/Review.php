<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';
    protected $fillable = array('dealer_id', 'comment', 'created_at', 'updated_at');

    public function dealer(){
      return $this->belongsTo('App\Dealer');
    }

    public function storeReviewForDealer($dealerID, $comment){
      $dealer = Dealer::find($dealerID);
      $this->comment = $comment;

      $dealer->reviews()->save($this);
    }
}
