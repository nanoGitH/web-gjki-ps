<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Activity;
use App\Models\Petugas;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Nano',
            'username' => 'nano',
            'email' => 'nano@gmail.com',
            'password' => bcrypt('12345')
        ]);



        Petugas::create([
            'name' => 'Febryano',
            'slug' => 'febryano',
            'task' => 'Monitor',
            'task_id' => 4,
            'phone' => '123'
        ]);
        Petugas::create([
            'name' => 'Ariel',
            'slug' => 'ariel',
            'task' => 'Keyboard',
            'task_id' => 3,
            'phone' => '456'
        ]);
        Petugas::create([
            'name' => 'Kevin',
            'slug' => 'kevin',
            'task' => 'Keyboard',
            'task_id' => 3,
            'phone' => '789'
        ]);



        Task::create([
            'name' => 'Perjamuan Kudus',
            'slug' => 'holy-communion'
        ]);
        Task::create([
            'name' => 'Kolektan',
            'slug' => 'coins'
        ]);
        Task::create([
            'name' => 'Keyboard',
            'slug' => 'keyboard'
        ]);
        Task::create([
            'name' => 'Monitor',
            'slug' => 'projector'
        ]);
        Task::create([
            'name' => 'Singer',
            'slug' => 'singer'
        ]);

        

        Activity::create([
            'name' => 'Baptis',
            'slug' => 'baptis',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus sint nihil placeat perferendis quasi possimus at',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus sint nihil placeat perferendis quasi possimus at maiores, aspernatur non dolorum neque sapiente maxime nemo quidem dolore omnis id assumenda sunt quae odio accusamus fugiat a. Sapiente ab sunt repudiandae, error, corporis recusandae numquam veniam voluptates quisquam consequuntur soluta repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa odio quam reprehenderit a perferendis sed ducimus vitae vero, esse commodi in nobis quasi consequuntur expedita animi magni nemo nostrum, minus minima maiores possimus tempora iure illo eveniet? Totam atque suscipit nobis illo tempore ab aliquid necessitatibus iure at expedita aliquam dignissimos sunt omnis earum soluta, harum adipisci consectetur quia cumque repudiandae repellat dolore ipsam. Error, magnam ab! Eligendi fuga doloremque fugit, eos dolore molestias quia incidunt quibusdam, voluptate et amet commodi obcaecati illum facilis animi doloribus cupiditate quasi suscipit porro! Ipsa eum minus omnis dicta numquam mollitia consectetur ratione recusandae cupiditate error magnam porro quos, ducimus qui earum, cumque ipsam voluptates ab, voluptatem animi blanditiis! Ex incidunt porro distinctio, dolore minima officia? Facilis accusamus sint id totam possimus, voluptatibus aperiam, quidem, nam impedit consequatur minus quas vero ab voluptate repellat eligendi eaque quam cupiditate doloribus placeat obcaecati excepturi odio error?'
        ]);
        Activity::create([
            'name' => 'Pemberkatan Nikah',
            'slug' => 'pemberkatan-nikah',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus sint nihil placeat perferendis quasi possimus at',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus sint nihil placeat perferendis quasi possimus at maiores, aspernatur non dolorum neque sapiente maxime nemo quidem dolore omnis id assumenda sunt quae odio accusamus fugiat a. Sapiente ab sunt repudiandae, error, corporis recusandae numquam veniam voluptates quisquam consequuntur soluta repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa odio quam reprehenderit a perferendis sed ducimus vitae vero, esse commodi in nobis quasi consequuntur expedita animi magni nemo nostrum, minus minima maiores possimus tempora iure illo eveniet? Totam atque suscipit nobis illo tempore ab aliquid necessitatibus iure at expedita aliquam dignissimos sunt omnis earum soluta, harum adipisci consectetur quia cumque repudiandae repellat dolore ipsam. Error, magnam ab! Eligendi fuga doloremque fugit, eos dolore molestias quia incidunt quibusdam, voluptate et amet commodi obcaecati illum facilis animi doloribus cupiditate quasi suscipit porro! Ipsa eum minus omnis dicta numquam mollitia consectetur ratione recusandae cupiditate error magnam porro quos, ducimus qui earum, cumque ipsam voluptates ab, voluptatem animi blanditiis! Ex incidunt porro distinctio, dolore minima officia? Facilis accusamus sint id totam possimus, voluptatibus aperiam, quidem, nam impedit consequatur minus quas vero ab voluptate repellat eligendi eaque quam cupiditate doloribus placeat obcaecati excepturi odio error?'
        ]);
        Activity::create([
            'name' => 'Penyerahan Anak',
            'slug' => 'penyerahan-anak',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus sint nihil placeat perferendis quasi possimus at',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque necessitatibus sint nihil placeat perferendis quasi possimus at maiores, aspernatur non dolorum neque sapiente maxime nemo quidem dolore omnis id assumenda sunt quae odio accusamus fugiat a. Sapiente ab sunt repudiandae, error, corporis recusandae numquam veniam voluptates quisquam consequuntur soluta repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa odio quam reprehenderit a perferendis sed ducimus vitae vero, esse commodi in nobis quasi consequuntur expedita animi magni nemo nostrum, minus minima maiores possimus tempora iure illo eveniet? Totam atque suscipit nobis illo tempore ab aliquid necessitatibus iure at expedita aliquam dignissimos sunt omnis earum soluta, harum adipisci consectetur quia cumque repudiandae repellat dolore ipsam. Error, magnam ab! Eligendi fuga doloremque fugit, eos dolore molestias quia incidunt quibusdam, voluptate et amet commodi obcaecati illum facilis animi doloribus cupiditate quasi suscipit porro! Ipsa eum minus omnis dicta numquam mollitia consectetur ratione recusandae cupiditate error magnam porro quos, ducimus qui earum, cumque ipsam voluptates ab, voluptatem animi blanditiis! Ex incidunt porro distinctio, dolore minima officia? Facilis accusamus sint id totam possimus, voluptatibus aperiam, quidem, nam impedit consequatur minus quas vero ab voluptate repellat eligendi eaque quam cupiditate doloribus placeat obcaecati excepturi odio error?'
        ]);
    }
}
