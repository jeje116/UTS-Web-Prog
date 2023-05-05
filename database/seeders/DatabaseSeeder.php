<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Drink;
use App\Models\Promo;
use App\Models\Drink_type;
use App\Models\Transaction;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Vico Lomar',
            'email' => 'VicoLomar@gmail.com',
            'password' => 'myNameisVico',
            'gender' => 'male',
            'loyalty_level' => 'Gold',
            'star_balance' => 151,
            'total_transaction' => 3
        ]);
        User::create([
            'name' => 'Fei Fei Li',
            'email' => 'FeiFeiLi@gmail.com',
            'password' => 'ImFeiFeiLi',
            'gender' => 'female',
            'loyalty_level' => 'Green',
            'star_balance' => 68,
            'total_transaction' => 3
        ]);

        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Espresso',
            'price' => 16800,
            'description' => "Experience the rich and intense flavor of our expertly crafted espresso, perfect for coffee lovers who enjoy a strong and flavorful pick-me-up.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/skXPDLzIWZhlEckbV9ds.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Macchiato',
            'price' => 17500,
            'description' => "Savor the perfect balance of espresso and milk in our delicious and creamy macchiato.",
            'image_link' => 'https://www.mcdonalds.com.sg/sites/default/files/2022-01/Iced%20Caramel%20Macchiato.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Cappuccino',
            'price' => 18200,
            'description' => "Indulge in the smooth and velvety texture of our classic cappuccino, topped with a sprinkle of cocoa powder.",
            'image_link' => 'https://www.mcdonalds.com.sg/sites/default/files/2022-01/McCafe_Cappuccino.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Long Black',
            'price' => 17800,
            'description' => "Enjoy the rich and bold flavor of our long black, made with a double shot of espresso and hot water for a perfectly balanced taste.",
            'image_link' => 'https://mcdonalds.com.au/sites/mcdonalds.com.au/files/YMAL-FlatWhite2.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Flat White',
            'price' => 18200,
            'description' => "Experience the smooth and creamy taste of our expertly crafted flat white, made with perfectly steamed milk and a double shot of espresso.",
            'image_link' => 'https://www.mcdonalds.com.sg/sites/default/files/2022-01/Flat%20White.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Mocha',
            'price' => 20000,
            'description' => "Treat yourself to the perfect blend of rich chocolate and espresso in our delicious mocha, topped with a swirl of whipped cream.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/Xb8AmBi0DOXoTff9AAMU.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Vienna',
            'price' => 20000,
            'description' => "Warm up with our Vienna coffee, made with a double shot of espresso and topped with a generous dollop of whipped cream.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/skXPDLzIWZhlEckbV9ds.png'
        ]);
        Drink::create([
            'drink_type_id' => 1,
            'name' =>  'Affogato',
            'price' => 20100,
            'description' => "Indulge in the decadent and delicious combination of our creamy vanilla ice cream and a hot shot of espresso in our affogato.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/October2022/s6VSZWKjklLuUQ5MSGJT.png'
        ]);
        Drink::create([
            'drink_type_id' => 2,
            'name' =>  'Cafe Latte',
            'price' => 18200,
            'description' => "Enjoy the perfect balance of espresso and steamed milk in our classic cafe latte, topped with a light layer of foam.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/po7dglUn7wyuKBFwSdm9.png'
        ]);
        Drink::create([
            'drink_type_id' => 2,
            'name' =>  'Vanilla Latte',
            'price' => 21400,
            'description' => "Indulge in the sweet and creamy taste of our vanilla latte, made with a double shot of espresso and topped with a rich vanilla syrup.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/RBdPPF0pkpjtaaABNhS1.png'
        ]);
        Drink::create([
            'drink_type_id' => 2,
            'name' =>  'Caramel Latte',
            'price' => 21400,
            'description' => "Treat yourself to the indulgent and sweet taste of our caramel latte, made with a double shot of espresso and a delicious caramel drizzle.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/October2020/4WOqoluEuymnSdP8XPXY.png'
        ]);
        Drink::create([
            'drink_type_id' => 2,
            'name' =>  'Hazelnut Latte',
            'price' => 21400,
            'description' => "Savor the nutty and rich flavor of our hazelnut latte, made with a double shot of espresso and topped with a sweet hazelnut syrup.",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2019/xIa2hAU1wGYAFGJI3gmm.png'
        ]);
        Drink::create([
            'drink_type_id' => 3,
            'name' =>  'Hot Chocolate',
            'price' => 19600,
            'description' => "Satisfy your sweet cravings with our rich and creamy hot chocolate, made with high-quality chocolate and topped with whipped cream.",
            'image_link' => 'https://www.mcdonalds.com.sg/sites/default/files/2022-01/Hot%20Chocolate.png'
        ]);
        Drink::create([
            'drink_type_id' => 3,
            'name' =>  'Hot Tea',
            'price' => 16400,
            'description' => "Relax and unwind with our selection of high-quality loose leaf teas, made with fresh and hot water for the perfect cup.
            ",
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/lQkqJswXp4m1v2DYqwc2.png'
        ]);
        Drink::create([
            'drink_type_id' => 3,
            'name' =>  'Bottled Water',
            'price' => 8700,
            'description' => "FStay hydrated on the go with our selection of refreshing and pristine bottled water, available in both still and sparkling options.",
            'image_link' => 'https://www.mcdonalds.com.sg/sites/default/files/2021-09/Dasani%20Drinking%20Water.png'
        ]);

        Drink_type::create([
            'name' => 'Coffee'
        ]);
        Drink_type::create([
            'name' => 'Cafe Lattes'
        ]);
        Drink_type::create([
            'name' => 'Other Drinks'
        ]);

        Promo::create([
            'name' => 'Butter Caramel',
            'description' => 'Indulge in our sweet and creamy butter caramel latte, available for a limited time only.',
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/promos/September2021/wyPras8C1uKabqdYnRO8.jpg',
            'direct_link' => '/shop/2/prod/11'
        ]);
        Promo::create([
            'name' => 'Half Price Wednesday',
            'description' => 'Every Wednesday, you can enjoy any medium-sized drink on our menu for half price.',
            'image_link' => 'https://www.mcdonalds.com.my/storage/articles/56202a8d2ab42280113e68a45f1b15b1.jpg',
            'direct_link' => '/shop/1/prod/0'
        ]);
        Promo::create([
            'name' => 'Himalayan',
            'description' => 'Discover the rich and unique flavor of our Himalayan coffee, made with high-quality coffee beans sourced from the Himalayan region.',
            'image_link' => 'https://nos.jkt-1.neo.id/mcdonalds/promos/September2022/gIFm4hncbOi9VEYhnmSw.jpg',
            'direct_link' => '/shop/3/prod/14'
        ]);
        Promo::create([
            'name' => 'Cheap Price Medium Size',
            'description' => 'Satisfy your cravings and enjoy any medium-sized drink on our menu at an affordable price.',
            'image_link' => 'https://canadify.com/wp-content/uploads/2022/02/McDonald%E2%80%99s-Canada-Welcomes-Back-1-Medium-Coffee-Deal.jpg',
            'direct_link' => '/shop/1/prod/4'
        ]);

        Transaction::create([
            'user_id' => '1',
            'drink_id' => '2',
            'purchase_date' => '2023-03-19'
        ]);
        Transaction::create([
            'user_id' => '1',
            'drink_id' => '5',
            'purchase_date' => '2023-03-20'
        ]);
        Transaction::create([
            'user_id' => '1',
            'drink_id' => '10',
            'purchase_date' => '2023-03-21'
        ]);
        Transaction::create([
            'user_id' => '2',
            'drink_id' => '6',
            'purchase_date' => '2023-03-19'
        ]);
        Transaction::create([
            'user_id' => '2',
            'drink_id' => '1',
            'purchase_date' => '2023-03-18'
        ]);
        Transaction::create([
            'user_id' => '2',
            'drink_id' => '10',
            'purchase_date' => '2023-03-21'
        ]);
    }
}
