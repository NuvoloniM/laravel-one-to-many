<?php

use Illuminate\Database\Seeder;
// importo model
use App\Models\Post;
// importo faker
use Faker\Generator as Faker;
// importo support\str per poter usare str::slug
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $post = new Post();
            $post->title = $faker->text(10);
            $post->content = $faker->paragraph(2);
            $post->image = $faker->imageUrl(250, 250);
            // al title aggiungo i trattini al posto dello spazio e rimuovo le maiuscole
            $post->slug = Str::slug( $post->title, '-');
            $post->save();
        }
    }
}
