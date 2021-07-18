<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
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
        $post_ids = Post::pluck('id')->toArray();

        return [
            'comment' => $this->faker->text(),
            'post_id' => $post_ids[array_rand($post_ids)]
        ];
    }
}
