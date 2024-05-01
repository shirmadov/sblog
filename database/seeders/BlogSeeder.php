<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $hadings = array('Self','Relationships','Data Science','Programming',
//            'Love Story','Sports','Football','Life','Economy','Ecology','Politics','University','Productivity','Javascript');
//
//
//        foreach ($hadings as $heading){
//            \DB::table('heading')->insert([
//                'name'=> $heading,
//        ]);
//        }



//        $faker = Factory::create();

        $titles = array(
            'How I code for 8 hours without feeling tired',
            'Capitalism is Killing Democracy',
            'Walter Tull: From Footballer to Soldier',
            'What To Do If You Get Covid',
            'Was This Us?',
            'What it’s like to live in Kyiv during the war',
            'What’s new in Flutter 3',
            'Do not wait for Rust generators',
            'Why is your Data Science resumé not getting you interviews?',
            'Data Manipulation Using RxJS Declarative Pattern in Angular',
            'A Super-Fast Way to Loop in Python',
            '2 years of AI-lab at Ruter — Part 1',
            'How a Machine Can Tell If You’re an Asshole',
            'Training Quantum Kernels for Machine Learning Using Qiskit',
            'My First Impression Trying Python on Browser',
            'Stop Using JSON Web Tokens For Authentication. Use Stateful Sessions Instead',
            '5 Tips to Master the Art of Clean Code',
            '11 Useful Modern JavaScript Tips',
            'Making $300 Per Month With A Telegram Bot?',
            'Dependency Inversion Principle: How Google Developers write code'
            );

            foreach ($titles as $title){

                $user = Blog::factory()->create([
                    'name'      => $title,
                    'slug_name' => strtolower(str_replace(" ", "_", $title)),
                    'user_id'   => 1,
                ]);
            }


    }
}
