<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
=======
>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            
            User::create([
                    'name'=> 'azka',
                    'email'=> 'Azka@gmail.com',
                    'password'=> bcrypt('12345')
                ]);

                    
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        //     Post::create([
        //         'title' => 'Judul pertamax',
        //         'slug' => 'judul-pertamax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 1,
        //         'user_id'=> 1
        //   ]);

        //     Post::create([
        //         'title' => 'Judul keduax',
        //         'slug' => 'judul-keduax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 1,
        //         'user_id'=> 1
        //    ]);

        //     Post::create([
        //         'title' => 'Judul ketiax',
        //         'slug' => 'judul-ketiax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 2,
        //         'user_id'=> 1
        //   ]);
        
        //   Post::create([
        //         'title' => 'Judul keempax',
        //         'slug' => 'judul-keempax',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //         Fugit dolores repellat velit pariatur saepe non suscipit rerum, 
        //         deserunt, quod nulla a ipsa rem numquam, ex culpa ad iste iure labore.',
        //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        //         Alias hic, eligendi iusto maxime quisquam consequatur temporibus beatae. 
        //         Fugit qui velit tempora expedita itaque! Voluptates, corrupti.',
        //         'category_id'=> 2,
        //         'user_id'=> 2
        //   ]);



    }
}
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601
