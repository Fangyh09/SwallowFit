<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker::create();
//        foreach (range(1,10) as $index) {
//            DB::table('my_users')->insert([
//                'name' => $faker->name,
//                'sex' => $faker->biasedNumberBetween(10, 20, $function = 'sqrt'),
//                'age' => $faker->biasedNumberBetween(10, 20, $function = 'sqrt'),
//                'email' => $faker->email,
//                'password' => bcrypt('secret'),
//            ]);
//        }


        DB::table('medicalcase_category')->insert(
            [
                'name' => "传染病",
            ]);
        DB::table('medicalcase_category')->insert(
            [
                'name' => "寄生虫病",
            ]);
        DB::table('medicalcase_category')->insert(
            [
                'name' => "内科",
            ]);
        DB::table('medicalcase_category')->insert(
            [
                'name' => "外产科",
            ]);
        DB::table('medicalcase_category')->insert(
            [
                'name' => "常用手术",
            ]);
        DB::table('medicalcase_category')->insert(
            [
                'name' => "免疫",
            ]);

//        DB::table('medicalcase')->insert(
//            [
//                'name' => "传染病",
//                'category_id' => ""
//            ]);
    }
}
