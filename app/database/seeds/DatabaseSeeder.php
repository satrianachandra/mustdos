<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		//$this->call('MustdosTableSeeder');
		//$this->call('EntriesTableSeeder');
		//$this->call('ItemsTableSeeder');
		$this->call('SeedUsersTableTableSeeder');

	}

}
