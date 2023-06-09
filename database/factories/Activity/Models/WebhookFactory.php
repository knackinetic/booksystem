<?php

namespace Database\Factories\Activity\Models;

use BookStack\Activity\Models\Webhook;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebhookFactory extends Factory
{
    protected $model = Webhook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'     => 'My webhook for ' . $this->faker->country(),
            'endpoint' => $this->faker->url(),
            'active'   => true,
            'timeout'  => 3,
        ];
    }
}
