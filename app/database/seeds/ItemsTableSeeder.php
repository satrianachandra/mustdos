<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Item::create(
				array(
				    'entry_id' => $index+2,
				    'name' => $faker->word,
				    'completed' => 0,
				    'description' => $faker->paragraph($nbSentences = 3)
				  )
			);
		}
	}

}