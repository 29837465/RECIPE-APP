<?php

namespace Database\Seeders;

use App\Models\IngredientList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientListSeeder extends Seeder
{
  
    public function run(): void
    {
        IngredientList::create([
            'ingredients_list' => '
            4 large croissants, halved horizontally, left out overnight,
            3 large eggs,
            ½ cup half-and-half,
            1 tablespoon white sugar,
            2 teaspoons vanilla extract,
            ½ teaspoon ground cinnamon,
            ¼ teaspoon salt,
            1 pinch ground nutmeg,
            2 tablespoons unsalted butter',
            'category_id' => '1',
            'recipe_id' => '1',
            'ingredient_id' => '1',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            butter-flavored cooking spray,
            2 large croissants,
            ½ cup shredded Gruyere cheese,
            1 cup diced cooked ham,
            6 large eggs,
            ¾ cup milk,
            ½ cup sour cream,
            ¼ teaspoon salt,
            ¼ teaspoon freshly ground black pepper,
            1 tablespoon Dijon mustard,
            2 tablespoons chopped green onions (Optional)',
            'category_id' => '1',
            'recipe_id' => '2',
            'ingredient_id' => '2',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 ½ cups rolled oats,
            1 cup puffed brown rice cereal,            
            ½ cup chopped raw almonds,            
            ⅓ cup shredded coconut,            
            3 tablespoons unsweetened cocoa powder,            
            1 teaspoon kosher salt,            
            tiny pinch cayenne pepper,            
            ⅓ cup packed brown sugar,            
            ½ cup maple syrup,            
            2 tablespoons vegetable oil,            
            1 tablespoon water',
            'category_id' => '1',
            'recipe_id' => '3',
            'ingredient_id' => '3',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 ½ tablespoons salted butter,
            2 large eggs,            
            1 tablespoon water,            
            ⅛ teaspoon freshly ground black pepper,            
            1 pinch flaky sea salt, or to taste',
            'category_id' => '1',
            'recipe_id' => '4',
            'ingredient_id' => '4',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            8 eggs,
            ½ cup mayonnaise,            
            ¼ cup chopped green onion,            
            1 teaspoon prepared yellow mustard,            
            ¼ teaspoon paprika,            
            salt and pepper to taste',
            'category_id' => '2',
            'recipe_id' => '5',
            'ingredient_id' => '5',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            5 tablespoons butter, divided,
            1 onion, chopped,            
            1 stalk celery, chopped,            
            3 cups chicken broth,            
            8 cups broccoli florets,            
            3 tablespoons all-purpose flour,            
            2 cups milk,            
            ground black pepper to taste',
            'category_id' => '2',
            'recipe_id' => '6',
            'ingredient_id' => '6',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 (16 ounce) package pork sausage,
            3 medium beets, peeled and shredded,            
            3 carrots, peeled and shredded,            
            3 medium baking potatoes, peeled and cubed,            
            ½ medium head cabbage, cored and shredded,            
            1 cup diced tomatoes, drained,            
            1 tablespoon vegetable oil,            
            1 medium onion, chopped,            
            1 (6 ounce) can tomato paste,            
            8 ¾ cups water, divided, or as needed,           
            3 cloves garlic, minced,            
            1 teaspoon white sugar, or to taste,            
            salt and pepper to taste,            
            ½ cup sour cream, for topping,            
            1 tablespoon chopped fresh parsley for garnish',
            'category_id' => '2',
            'recipe_id' => '7',
            'ingredient_id' => '7',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 ½ pounds extra-lean ground beef,
            ½ onion, diced,            
            1 green pepper, diced,            
            2 cloves garlic, minced,            
            2 cups water, divided,            
            ¾ cup ketchup,            
            2 tablespoons brown sugar,            
            1 teaspoon Dijon mustard,            
            1 ½ teaspoons salt, or to taste,            
            ½ teaspoon ground black pepper,            
            1 dash Worcestershire sauce,            
            1 pinch cayenne pepper, or to taste',
            'category_id' => '2',
            'recipe_id' => '8',
            'ingredient_id' => '8',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 tablespoon vegetable oil,
            4 lamb shanks,            
            1 onion, chopped,            
            4 cloves garlic, chopped,            
            2 carrots, chopped,            
            2 celery ribs, chopped,            
            2 tablespoons tomato paste,            
            1 (14 ounce) can beef broth,            
            1 (12 fluid ounce) bottle stout (such as Guinness®) or porter,            
            3 sprigs fresh thyme,            
            3 sprigs fresh parsley,            
            1 bay leaf,            
            1 sprig fresh rosemary,            
            salt and pepper to taste',
            'category_id' => '3',
            'recipe_id' => '9',
            'ingredient_id' => '9',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 pound pork tenderloin,
            salt and ground black pepper to taste,
            1 bunch fresh sage, leaves removed and stems discarded, divided,            
            6 ounces prosciutto,            
            1 tablespoon olive oil, or more as needed',
            'category_id' => '3',
            'recipe_id' => '10',
            'ingredient_id' => '10',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 (15 ounce) container ricotta cheese,
            1 (8 ounce) package shredded mozzarella cheese, divided,            
            1 (3 ounce) package Parmesan cheese,            
            1 egg,            
            2 teaspoons Italian seasoning,            
            1 pound sausage,            
            ½ (26 ounce) jar marinara sauce,            
            6 flatbreads',
            'category_id' => '3',
            'recipe_id' => '11',
            'ingredient_id' => '11',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            2 pounds skinless, boneless chicken breasts,
            1 (1 ounce) package dry ranch dressing mix (such as Hidden Valley Ranch®),            
            1 (16 ounce) jar sliced pepperoncini peppers, drained,            
            4 tablespoons unsalted butter, sliced',
            'category_id' => '3',
            'recipe_id' => '12',
            'ingredient_id' => '12',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            2 cups almond milk,
            2 tablespoons distilled white vinegar,            
            5 tablespoons water,            
            2 tablespoons flaxseed meal,            
            2 cups all-purpose flour,            
            2 tablespoons coconut sugar,            
            1 tablespoon baking powder,            
            1 tablespoon ground cinnamon,            
            2 teaspoons baking soda,            
            1 teaspoon salt,            
            1 cup pumpkin puree,            
            2 tablespoons coconut oil,            
            ¼ cup toasted chopped pecans',
            'category_id' => '4',
            'recipe_id' => '13',
            'ingredient_id' => '13',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 large egg,
            1 tablespoon white sugar,            
            ⅛ teaspoon ground cinnamon, or to taste,            
            1 pinch ground ginger,            
            1 pinch nutmeg,            
            ¼ teaspoon kosher salt,            
            ⅛ teaspoon pure vanilla extract,            
            1 cup shredded apple,            
            1 teaspoon lemon juice,            
            ½ cup all-purpose flour, or as needed,            
            ¼ teaspoon baking powder,            
            ⅛ teaspoon baking soda,            
            2 tablespoons melted butter',
            'category_id' => '4',
            'recipe_id' => '14',
            'ingredient_id' => '14',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            10 large eggs,
            salt and freshly ground black pepper to taste,            
            6 ounces cooked breakfast sausage,            
            3 tablespoons fresh chives, chopped,            
            6 mini bagels,            
            6 slices Cheddar cheese,            
            Sriracha sauce or hot sauce (optional)',
            'category_id' => '4',
            'recipe_id' => '15',
            'ingredient_id' => '15',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            2 large eggs,
            2 cups all-purpose flour,            
            1 ¾ cups milk,            
            ½ cup vegetable oil,            
            1 tablespoon white sugar,            
            4 teaspoons baking powder,            
            ¼ teaspoon salt,            
            ½ teaspoon vanilla extract,            
            nonstick cooking spray',
            'category_id' => '4',
            'recipe_id' => '16',
            'ingredient_id' => '16',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            2 tablespoons salt,
            2 cups elbow macaroni,            
            ¼ cup butter, softened (Optional),            
            2 large eggs,            
            1 (12 fluid ounce) can evaporated milk,            
            ½ (14 ounce) can sweetened condensed milk,            
            1 ½ pounds extra-sharp Cheddar cheese, shredded,            
            1 pinch paprika, or to taste,            
            ¼ cup butter (Optional),            
            ½ cup soft bread crumbs (Optional)',
            'category_id' => '5',
            'recipe_id' => '17',
            'ingredient_id' => '17',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 pound ground beef,
            ½ pound ground veal,            
            ½ pound ground pork,            
            1 cup freshly grated Romano cheese,            
            2 eggs,            
            2 cloves garlic, minced,            
            1 ½ tablespoons chopped Italian flat leaf parsley,            
            salt and ground black pepper to taste,            
            2 cups stale Italian bread, crumbled,            
            1 ½ cups lukewarm water,            
            1 cup olive oil',
            'category_id' => '5',
            'recipe_id' => '18',
            'ingredient_id' => '18',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            10 cloves garlic, or more to taste,
            ¼ cup olive oil,            
            3 tablespoons white vinegar,            
            2 tablespoons dried oregano,            
            1 tablespoon salt,            
            1 ½ teaspoons ground black pepper,            
            5 pounds pork shoulder, trimmed of excess fat',
            'category_id' => '5',
            'recipe_id' => '19',
            'ingredient_id' => '19',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            4 boneless pork chops,
            4 teaspoons butter, softened,            
            4 teaspoons mayonnaise,            
            1 teaspoon seasoned salt,            
            1 teaspoon garlic powder,            
            1 teaspoon dried parsley,            
            1 cup shredded sharp Cheddar cheese',
            'category_id' => '5',
            'recipe_id' => '20',
            'ingredient_id' => '20',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            24 wonton wrappers,
            1 ½ tablespoons olive oil,            
            1 clove garlic, minced,            
            1 teaspoon grated fresh ginger,            
            8 ounces frozen medium shrimp - thawed, shelled, and deveined,            
            ½ lime,            
            7 ½ ounces chive-and-onion cream cheese spread,            
            ¼ cup Thai sweet chili sauce,            
            1 green onion, chopped',
            'category_id' => '6',
            'recipe_id' => '21',
            'ingredient_id' => '21',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            12 ounces kielbasa sausage,
            1 ½ cups dark brown sugar,            
            2 tablespoons Dijon mustard,            
            1 ½ tablespoons apple cider vinegar,            
            1 pinch ground black pepper',
            'category_id' => '6',
            'recipe_id' => '22',
            'ingredient_id' => '22',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 (14.5 ounce) can black-eyed peas, rinsed and drained,
            1 tablespoon olive oil,            
            1 ½ teaspoons Cajun seasoning (such as Old Bay®)',
            'category_id' => '6',
            'recipe_id' => '23',
            'ingredient_id' => '23',
        ]);

        IngredientList::create([
            'ingredients_list' => '
            1 quart water,
            ¼ cup baking soda,            
            1 (8 ounce) package refrigerated crescent roll dough,            
            pretzel salt,            
            cooking spray',
            'category_id' => '6',
            'recipe_id' => '24',
            'ingredient_id' => '24',
        ]);

    }
}
