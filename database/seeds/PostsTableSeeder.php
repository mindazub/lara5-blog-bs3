<?php 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder {


		public function run(){
			$faker = Faker\Factory::create();

			foreach (range(1, 20) as $index) {
			 	App\Post::create([
			 		'user_id'=>'1',
			 		'username'=>$faker->userName,
			 		'title'=>$faker->sentence(3),
			 		'body'=>$faker->paragraph(20),
			 		'published_at'=>$faker->dateTimeBetween('now', '+7 days')
			 		]);
			 } 
		}
}

 ?>