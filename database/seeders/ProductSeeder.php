<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 DB::table('products')->insert([
 'name' => 'Elden Ring',
 'description' => 'Elden Ring is an action role-playing game played in a third person perspective, 
with gameplay focusing on combat and exploration.',
 'photo' =>
'https://ftw.usatoday.com/wp-content/uploads/sites/90/2022/02/Elden_Ring_Keyart45-1.jpg?w=1000&h=600&crop=1',
 'price' => 62.00
 ]);

 DB::table('products')->insert([
 'name' => 'God of War Ragnarok',
 'description' => 'God of War Ragnarök is an action-adventure game developed by 
Santa Monica Studio and published by Sony Interactive Entertainment.',
 'photo' =>
'https://upload.wikimedia.org/wikipedia/en/e/ee/God_of_War_Ragnar%C3%B6k_cover.jpg',
 'price' => 20.00
 ]);

 DB::table('products')->insert([
 'name' => 'Cyberpunk 2077',
 'description' => 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the 
megalopolis of Night City, where you play as a cyberpunk mercenary wrapped-up in a do-or-die fight for survival.',
 'photo' =>
'https://cdn-wp.thesportsrush.com/2020/10/cb66c540-cyberpunk-2077-general.jpg',
 'price' => 35
 ]);

 DB::table('products')->insert([
 'name' => 'Fifa 23',
 'description' => 'FIFA 23 features both mens and womens World Cup game modes, 
replicating the 2022 FIFA World Cup and the 2023 FIFA Womens World Cup. ',
 'photo' =>
'https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-23/images/2022/07/f23-gameplay-feature-img-16x9.png.adapt.crop191x100.1200w.png',
 'price' => 35.00
 ]);

 DB::table('products')->insert([
 'name' => 'The Witcher 3',
 'description' => 'The Witcher 3: Wild Hunt is an action role-playing game with a third-person perspective. 
Players control Geralt of Rivia, a monster slayer known as a Witcher.',
 'photo' => 'https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg',
 'price' => 68.00
 ]);

 DB::table('products')->insert([
 'name' => 'Death Stranding',
 'description' => 'The game is set in the United States following a cataclysmic event which caused destructive creatures to begin roaming the Earth',
 'photo' =>
'https://cdn1.epicgames.com/f4a904fcef2447439c35c4e6457f3027/offer/DS_wide-2560x1440-c3d7bbf8ee36dd025610088381a5235a.jpg',
 'price' => 30
 ]);

DB::table('products')->insert([
 'name' => 'A Plague Tale: Requiem',
 'description' => 'After escaping their devastated homeland, Amicia and Hugo travel far south, to new regions and vibrant cities. There, they attempt to start a new life and control Hugo’s curse.',
 'photo' =>
'https://www.go4games.ro/wp-content/uploads/2022/11/PlagueTale2.jpeg',
 'price' => 43
 ]);

DB::table('products')->insert([
 'name' => 'Horizon Forbidden West',
 'description' => 'Explore distant lands, fight bigger and more awe-inspiring machines, and encounter astonishing new tribes as you return to the far-future, post-apocalyptic world of Horizon.',
 'photo' =>
'https://image.api.playstation.com/vulcan/ap/rnd/202107/3100/HO8vkO9pfXhwbHi5WHECQJdN.png',
 'price' => 60
 ]);

DB::table('products')->insert([
 'name' => 'Red Dead Redemption 2',
 'description' => 'Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. ',
 'photo' =>
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSahqhoIAd1hh4HOIdN6poChh5zzLGdguLH-w&usqp=CAU',
 'price' => 22
 ]);

DB::table('products')->insert([
 'name' => 'High On Life',
 'description' => 'Fresh out of high school with no job and no ambition, you’ve really got nothing going for you until an alien cartel that wants to get high off humanity invades Earth',
 'photo' =>
'https://www.gamespot.com/a/uploads/screen_small/1574/15746725/4075586-untitled(2).png',
 'price' => 27
 ]);

    }
}
