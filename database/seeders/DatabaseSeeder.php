<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // membuat data dummy user dengan factory & faker
        User::factory(5)->create();

        // User::create([
        //     "name" => "Benony Gabriel",
        //     "email" => "benogabriel12@gmail.com",
        //     "password" => bcrypt("1243")
        // ]);

        // User::create([
        //     "name" => "Jhon Doe",
        //     "email" => "jdoe@gmail.com",
        //     "password" => bcrypt("321joe")
        // ]);

        Category::create([
            "name" => "Web",
            "slug" => "web"
        ]);

        Category::create([
            "name" => "Backend",
            "slug" => "backend"
        ]);

        Category::create([
            "name" => "Frontend",
            "slug" => "frontend"
        ]);

        Post::factory(25)->create();
        // Post::create([
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "title" => "Belajar Laravel 8",
        //     "slug" => "belajar-laravel-8",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim magni deserunt quibusdam cumque. Incidunt rem at consectetur distinctio voluptate magni officiis...",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora suscipit natus sint nulla enim doloribus rerum minus. Corporis facilis totam placeat eveniet animi architecto ducimus aliquid laboriosam sed eius error commodi dolorum aliquam sapiente, velit cum laudantium. Asperiores aut, dolorum accusamus voluptas nam optio! Omnis accusantium harum quam quo, minus, necessitatibus perferendis iure cumque dolores iste fugiat quos ad eligendi reprehenderit asperiores hic corporis ipsa praesentium quod, impedit aperiam enim? Consequatur vitae nihil numquam, sequi tenetur sapiente ex delectus voluptas in dolorem asperiores facilis eius facere maiores assumenda repudiandae voluptates impedit, aliquid ullam officiis, ad autem alias iure. Exercitationem dolores officiis eveniet laboriosam, odio officia, pariatur doloremque at minus delectus cupiditate assumenda et? Consequuntur, eaque. Aspernatur blanditiis est, eaque, reprehenderit ex non fuga eum eos reiciendis, itaque eligendi praesentium beatae!"
        // ]);

        // Post::create([
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "title" => "Restful API",
        //     "slug" => "restful-api",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim magni deserunt quibusdam cumque. Incidunt rem at consectetur distinctio voluptate magni officiis...",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora suscipit natus sint nulla enim doloribus rerum minus. Corporis facilis totam placeat eveniet animi architecto ducimus aliquid laboriosam sed eius error commodi dolorum aliquam sapiente, velit cum laudantium. Asperiores aut, dolorum accusamus voluptas nam optio! Omnis accusantium harum quam quo, minus, necessitatibus perferendis iure cumque dolores iste fugiat quos ad eligendi reprehenderit asperiores hic corporis ipsa praesentium quod, impedit aperiam enim? Consequatur vitae nihil numquam, sequi tenetur sapiente ex delectus voluptas in dolorem asperiores facilis eius facere maiores assumenda repudiandae voluptates impedit, aliquid ullam officiis, ad autem alias iure. Exercitationem dolores officiis eveniet laboriosam, odio officia, pariatur doloremque at minus delectus cupiditate assumenda et? Consequuntur, eaque. Aspernatur blanditiis est, eaque, reprehenderit ex non fuga eum eos reiciendis, itaque eligendi praesentium beatae!"
        // ]);

        // Post::create([
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "title" => "Belajar Membuat Blog Sederhana Dengan Laravel 8",
        //     "slug" => "belajar-membuat-blog-sederhana-dengan-laravel-8",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim magni deserunt quibusdam cumque. Incidunt rem at consectetur distinctio voluptate magni officiis...",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora suscipit natus sint nulla enim doloribus rerum minus. Corporis facilis totam placeat eveniet animi architecto ducimus aliquid laboriosam sed eius error commodi dolorum aliquam sapiente, velit cum laudantium. Asperiores aut, dolorum accusamus voluptas nam optio! Omnis accusantium harum quam quo, minus, necessitatibus perferendis iure cumque dolores iste fugiat quos ad eligendi reprehenderit asperiores hic corporis ipsa praesentium quod, impedit aperiam enim? Consequatur vitae nihil numquam, sequi tenetur sapiente ex delectus voluptas in dolorem asperiores facilis eius facere maiores assumenda repudiandae voluptates impedit, aliquid ullam officiis, ad autem alias iure. Exercitationem dolores officiis eveniet laboriosam, odio officia, pariatur doloremque at minus delectus cupiditate assumenda et? Consequuntur, eaque. Aspernatur blanditiis est, eaque, reprehenderit ex non fuga eum eos reiciendis, itaque eligendi praesentium beatae!"
        // ]);
    }
}
