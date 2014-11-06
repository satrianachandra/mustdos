<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MustdosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Mustdo::create(
				array(
				    'name' => $faker->word,
				    'completeness' => $faker->numberBetween($min = 0, $max = 100)
				  )
			);
		}
	}

}