<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntriesTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Entry::create(
				array(
				'mustdo_id' => ($index+10),
				'name' => $faker->word
				)
			);
		}
	}

}