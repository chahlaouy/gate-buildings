<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\User;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        return [
            'user_id' => function(){
                return User::factory()->count(1)->create()->first()->id;
            },

            'thread_id' => function(){
                return Thread::factory()->count(1)->create()->first()->id;
            },

            'body' => $this->faker->sentence(),
        ];
    }
}
