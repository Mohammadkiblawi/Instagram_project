<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 50),
            'post_id' => $this->faker->numberBetween(1, 1500),
            'comment' => $this->faker->text(100),
            // for arabic langauge 'comment' => $this->faker->realText(100), then we empty the comments table in data base then 
            //write this command: php artisan db:seed --class=CommentSeeder
        ];
    }
}
