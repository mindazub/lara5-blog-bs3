<?php namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FirstController extends Controller {

	// public function __construct(){
		

	// 	return $posts;
	// }

	public function index(){
		$posts = Post::simplepaginate(4);

		// return view('namai')->with('posts', $posts);
		return view('namai', compact('posts'));
	}

	public function about(){
		return view('apie');
	}

	public function contact(){
		return view('contact');
	}

	// public function getTimeAfterAttribute($value) {
 //    return Carbon::parse($value);
	// }

	public function postShow($id){

		$post = Post::find($id);

// dd($post);

		

		// dd($post);
		// return $post;

		// $post = Post::find($post)->with('user');
		// $post = Post::find($post);

		// return view('posts.post')->with($post);

		return view('posts.post', compact('post'));
		// 


	}

}
