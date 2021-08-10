<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $number = $this->faker->randomElement(['1','2', '3', '4' , '5' ,'6' ,'7' ,'8', '9', '10']);
        $date_day = $this->faker->date($format = 'Y/m/d', $max = '2021/09/09',$min = '2021/01/09');
        $title = $this->faker->text($maxNbChars = 50);
        return [
            'title' => $this->faker->text,
            'img' => "post/$number",
            'date_day' => $this->faker->date($format = 'Y.m.d', $max = '2021/09/09',$min = '2021/01/09'),
            'time_hour' => $this->faker->time($format = 'H:i', $max = 'now'),
            'link_url' => "kun.uz/news/$date_day/$title"
        ];
    }
}
