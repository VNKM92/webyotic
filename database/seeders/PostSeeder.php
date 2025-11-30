<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;
class PostSeeder extends Seeder {
public function run(){
for($i=1;$i<=5;$i++){
Post::create([
'user_id'=>1,
'title'=>"Sample Post $i",
'slug'=>Str::slug("Sample Post $i").'-'.Str::random(5),
'excerpt'=>'Sample excerpt '.$i,
'content'=>'Sample content '.$i,
'is_published'=>true,
]);
}
}
}