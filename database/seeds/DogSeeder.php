<?php

use Illuminate\Database\Seeder;
use App\Dog;
use Faker\Generator as Faker;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $race =['Pitbul','Golden Retriever','Doberman','Collie'];
        $size =['S','M','L','XL'];
        $color =['black','white','brown','red','honey'];
        $nationality = ['American','English','Italian'];

       for($i = 0; $i < 10; $i++){
        $dog = new Dog();
        $dog->name = $faker->name();
        $dog->race = $race[rand(0,sizeof($race)-1)];
        $dog->size = $size[rand(0,sizeof($size)-1)];
        $dog->color = $color[rand(0,sizeof($color)-1)];
        $dog->age = rand(1,12);
        $dog->nationality = $nationality[rand(0,sizeof($nationality)-1)];
        $dog->save();
       }
    }
}
