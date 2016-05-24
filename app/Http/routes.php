<?php
use App\Dealer;
use App\Review;
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dealers', function(){
    return view('index')
      ->with('dealers', Dealer::all());
});

Route::get('dealers/{id}', function($id){
    $dealer = Dealer::find($id);
    return view('showbyid', compact('dealer'));
});

Route::post('dealers/{id}', function($id){
    $comment = array(
      'comment' => Input::get('comment')
    );
    $review = new Review;
    $review->storeReviewForDealer($id, $comment['comment']);
    return Redirect::to('/')
    -> with('message', 'Well done Arthur :*');

});
