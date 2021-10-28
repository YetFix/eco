<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(3,false),
            'slug'=>$this->faker->unique()->slug(),
            'summary'=>$this->faker->sentence(2,false),
            'description'=>$this->faker->paragraph(),
            'stock'=>$this->faker->numberBetween(2,18),
            'brand_id'=>$this->faker->randomElement(Brand::pluck('id')->toArray()),
            'vendor_id'=>$this->faker->randomElement(User::pluck('id')->toArray()),
            'category_id'=>$this->faker->randomElement(Category::pluck('id')->toArray()),
          
            'photo'=>$this->faker->imageUrl(400,200),
            'price'=>$this->faker->randomFloat(null,10,2),
            'offer_price'=>$this->faker->randomFloat(null,10,2),
            'discount'=>$this->faker->randomFloat(null,10,2),
            'size'=>$this->faker->randomElement(['S','M','L','XL']),
            'conditions'=>$this->faker->randomElement(['new','popular','winter','summer']),
            'status'=>$this->faker->randomElement(['active','inactive']),
        ];
    }
}