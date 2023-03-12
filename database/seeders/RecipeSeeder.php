<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipe::create([
            'name' => 'Croissant French Toast',
            'category_id' => '1',
            'description' => 'An easy and impressive breakfast or brunch, this recipe is the perfect choice for special occasions or holidays. Serve warm with your favorite toppings. Some suggestions are powdered sugar, chopped nuts, cinnamon sugar, berries, maple syrup, blueberry or strawberry syrup, and whipped cream.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Overnight Breakfast Bake with Ham, Cheese, and Croissants',
            'category_id' => '1',
            'description' => 'This overnight breakfast casserole is just the right size for smaller families. We love this with cherry tomatoes, but it is equally nice with fruit. You could also call this a savory bread pudding and serve it for lunch, with a salad. If you love mustard, double the Dijon amount in the recipe.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Chocolate Cereal Breakfast Bars',
            'category_id' => '1',
            'description' => 'Make your own chewy energy/granola bars with a not-too-sweet chocolate flavor with hints of coconut and almond.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Basted Eggs',
            'category_id' => '1',
            'description' => 'This recipe produces a delicious, simple egg with satisfying, set whites and a creamy, runny yolk. It`s similar to a poached egg, but more flavorful and less fussy.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Basted Eggs',
            'category_id' => '1',
            'description' => 'This recipe produces a delicious, simple egg with satisfying, set whites and a creamy, runny yolk. It`s similar to a poached egg, but more flavorful and less fussy.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Delicious Egg Salad for Sandwiches',
            'category_id' => '2',
            'description' => 'This egg salad tastes wonderful in a sandwich and will definitely be devoured! It`s really good on rye.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Best Cream Of Broccoli Soup',
            'category_id' => '2',
            'description' => 'This broccoli soup recipe is thick and flavorful. It is simple, delicious, and quick to make. Enjoy (I know you will).',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Ukrainian Red Borscht Soup',
            'category_id' => '2',
            'description' => 'This borscht recipe comes from my friend`s mother from Ukraine who taught me how to make this classic beet soup. It`s as authentic as it gets. It can be served vegetarian-style by omitting the sausage.',
            'is_active' => true,
        ]);
        
        Recipe::create([
            'name' => 'Homemade Sloppy Joes',
            'category_id' => '2',
            'description' => 'Homemade Sloppy Joes don`t have to be difficult to eat. Despite the name of this iconic retro dish, the secret to a great Sloppy Joe is a thick, rich, almost dry consistency, which allows the sandwich to be eaten with your hands. Serve on hamburger buns.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Stout-Braised Lamb Shanks',
            'category_id' => '3',
            'description' => 'This hearty Irish lamb shank stew is perfect if you feel like having something a little different on St. Patrick`s Day.',
            'is_active' => true,
        ]);

        
        Recipe::create([
            'name' => 'Prosciutto-Wrapped Pork Tenderloin with Crispy Sage',
            'category_id' => '3',
            'description' => 'Turn your weeknight dinner into a fancy affair with this easy pork tenderloin recipe.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Lasagna Flatbread',
            'category_id' => '3',
            'description' => 'A simple lasagna pizza.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Mississippi Chicken',
            'category_id' => '3',
            'description' => 'This is such a fun and simple recipe with only 4 ingredients that can be made in the oven or in the slow cooker. The chicken turns out buttery, spicy, juicy, and herby.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Vegan Pumpkin Pancakes',
            'category_id' => '4',
            'description' => 'These vegan pancakes take on a hint of fall with the savory goodness of pumpkin, cinnamon, and pecans! Serve with toppings of choice, including additional pecans and maple syrup.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Apple Fritter Pancakes',
            'category_id' => '4',
            'description' => 'Apple fritter pancakes make a wonderful breakfast topped with some warmed maple syrup and served with some breakfast meats. You can use any type of apple for this recipe—I used Honeycrisp (Fuji works great, too), but the sweeter the better. If you are using a tart apple, add another tablespoon of sugar.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Donut Pan Egg Sandwiches',
            'category_id' => '4',
            'description' => 'Breakfast sandwiches have never been easier than with this simple trick. Use your donut pan to create fluffy, stuffed omelet rings perfect for a toasty bagel (or biscuit) sandwich. The whole dish comes together in the oven, so you won`t have to spend the morning standing over the stove top. Customize with your favorite breakfast meats, cheeses, veggies, or toppings.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Waffles',
            'category_id' => '4',
            'description' => 'This waffle recipe is the only one you`ll need to make homemade waffles with your waffle iron. Simple pantry ingredients mix up quickly in this easy batter that can be used right away or stored in the refrigerator for up to a week. Serve waffles hot with whipped cream and fresh fruit or with butter and maple syrup for either breakfast, brunch, or a snack.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Church Supper Macaroni and Cheese',
            'category_id' => '5',
            'description' => 'It seems like there are endless recipe variations on macaroni and cheese; however my family is not a big fan of cheese sauce-based macaroni and cheese. It seems to dilute the cheese flavor. This simple but tasty recipe was given to me at a church supper in Terre Haute; it`s old, definitely has German or Jewish (kugel?) roots. The secret is to use a good-quality EXTRA-SHARP Cheddar cheese.',
            'is_active' => false,
        ]);

        Recipe::create([
            'name' => 'The Best Meatballs',
            'category_id' => '5',
            'description' => 'Learn how to make meatballs with this recipe that is the best meatball recipe I have ever tried! I`ve used the combination of pork, beef, and veal but you can make them with just ground beef and they still taste great. Definitely use fresh bread crumbs and freshly grate your cheese instead of using the canned variety... It really does make a difference!',
            'is_active' => false,
        ]);

        Recipe::create([
            'name' => 'Daddy Eddie`s Roast Pork (Pernil), Puerto Rican-Style',
            'category_id' => '5',
            'description' => 'Pernil is roasted pork shoulder, seasoned to the max. It is served with rice and beans, salad, or sweet plantains.',
            'is_active' => false,
        ]);

        Recipe::create([
            'name' => 'Simple Pork Chops',
            'category_id' => '5',
            'description' => 'Learn how long to cook pork chops in the oven with this great-tasting recipe that`s easy to make.',
            'is_active' => false,
        ]);

        Recipe::create([
            'name' => 'Thai Shrimp Wonton Cups',
            'category_id' => '6',
            'description' => 'These wonton cups will be the talk of your next party! They only use 8 ingredients, including sweet Thai chili sauce, shrimp, and cream cheese. They turn out tasty and fancy.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'TikTok Candied Kielbasa Bites',
            'category_id' => '6',
            'description' => 'Inspired by @vics_tricks_to on TikTok, we`re sharing the tastiest new take on classic kielbasa. Double-baked in a brown sugar and mustard glaze, these sweet and smoky sausage bites are a crowd-pleasing new take on little smokies.',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Air Fryer Crispy Cajun Black-Eyed Peas',
            'category_id' => '6',
            'description' => 'Crispy on the outside, creamy on the inside, puffed black eyed peas will be your new favorite healthy snack. Cooked in the air fryer to create a golden, savory shell, these peas can add delicious texture to soups, salads, and snack mixes. And with only 3 ingredients, what`s not to love?',
            'is_active' => true,
        ]);

        Recipe::create([
            'name' => 'Air Fryer Pretzel Crescent Rolls',
            'category_id' => '6',
            'description' => 'These air fried croissant pretzels made with refrigerated crescent roll dough are the perfect game day appetizer! Serve with a side of beer cheese dip!',
            'is_active' => true,
        ]);

    }
}
