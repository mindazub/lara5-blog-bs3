<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'body', 'published_at'];

	public function getDates()
{
    // only this field will be converted to Carbon
    return array('updated_at');
}

// $post->created_at->toFormattedDateString();

}
