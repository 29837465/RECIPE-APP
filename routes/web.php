<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'main']);
Route::get('front/recipes', [HomeController::class, 'index']);
Route::get('front/recipes/{id}', [HomeController::class, 'show'])->whereNumber('id');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware(['auth'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('admin/recipes', [RecipeController::class, 'index']);
//     Route::get('admin/recipes/create', [RecipeController::class, 'create']);
//     Route::post('admin/recipes/store', [RecipeController::class, 'store']);
//     Route::get('admin/recipes/{id}', [RecipeController::class, 'show'])->whereNumber('id');

//     Route::get('admin/categories', [CategoryController::class, 'index']);
//     Route::get('admin/categories/create', [CategoryController::class, 'create']);
//     Route::post('admin/categories/create', [CategoryController::class, 'store']);
//     Route::get('admin/categories/{id}', [CategoryController::class, 'show']);

//     Route::get('admin/ingredients', [IngredientController::class, 'index']);
//     Route::get('admin/ingredients/create', [IngredientController::class, 'create']);
//     Route::post('admin/ingredients/create', [IngredientController::class, 'store']);
//     Route::get('admin/ingredients/{ingredient}', [IngredientController::class, 'show']);
// });

// Route::middleware(['auth', 'role'])->group(function () {
//     Route::any('admin/recipes/edit/{id}', [RecipeController::class, 'edit'])->name('recipe.edit');
//     Route::delete('admin/recipes/delete/{id}', [RecipeController::class, 'delete'])->name('recipe.delete');

//     Route::any('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
//     Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

//     Route::any('admin/ingredients/edit/{id}', [IngredientController::class, 'edit'])->name('ingredient.edit');
//     Route::delete('admin/ingredients/delete/{id}', [IngredientController::class, 'delete'])->name('ingredient.delete');
// });

require __DIR__ . '/auth.php';

// Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
// Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.create_category');
// Route::post('admin/category/create', [CategoryController::class, 'store'])->name('admin.store_category');
// Route::get('admin/category/{id}', [CategoryController::class, 'show'])->name('admin.show_category');
// Route::any('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.edit_category');
// Route::delete('admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.delete_category');

// Route::get('admin/recipes', [RecipeController::class, 'index'])->name('admin.recipes');
// Route::get('admin/recipe/create', [RecipeController::class, 'create'])->name('admin.create_recipe');
// Route::post('admin/recipe/create', [RecipeController::class, 'store'])->name('admin.store_recipe');
// Route::get('admin/recipe/{id}', [RecipeController::class, 'show'])->name('admin.show_recipe');
// Route::any('admin/recipe/edit/{id}', [RecipeController::class, 'edit'])->name('admin.edit_recipe');
// Route::delete('admin/recipe/delete/{id}', [RecipeController::class, 'delete'])->name('admin.delete_recipe');

// Route::get('admin/ingredients', [IngredientController::class, 'index'])->name('admin.ingredients');
// Route::get('admin/ingredient/create', [IngredientController::class, 'create'])->name('admin.create_ingredient');
// Route::post('admin/ingredient/create', [IngredientController::class, 'store'])->name('admin.store_ingredient');
// Route::get('admin/ingredient/{id}', [IngredientController::class, 'show'])->name('admin.show_ingredient');
// Route::any('admin/ingredient/edit/{id}', [IngredientController::class, 'edit'])->name('admin.edit_ingredient');
// Route::delete('admin/ingredient/delete/{id}', [IngredientController::class, 'delete'])->name('admin.delete_ingredient');

// Route::get('admin/recipeIngredient', [RecipeIngredientController::class, 'index'])->name('admin.recipe_ingredient');
// Route::get('admin/recipeIngredient/create', [RecipeIngredientController::class, 'create'])->name('admin.create_recipe_ingredient');
// Route::post('admin/recipeIngredient/create', [RecipeIngredientController::class, 'store'])->name('admin.store_recipe_ingredient');
// Route::get('admin/recipeIngredient/{id}', [RecipeIngredientController::class, 'show'])->name('admin.show_recipe_ingredient');
// Route::any('admin/recipeIngredient/edit/{id}', [RecipeIngredientController::class, 'edit'])->name('admin.edit_recipe_ingredient');
// Route::delete('admin/recipeIngredient/delete/{id}', [RecipeIngredientController::class, 'delete'])->name('admin.delete_recipe_ingredient');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('admin/recipes', [RecipeController::class, 'index']);
Route::get('admin/recipes/create', [RecipeController::class, 'create']);
Route::post('admin/recipes/store', [RecipeController::class, 'store']);
Route::get('admin/recipes/{id}', [RecipeController::class, 'show'])->whereNumber('id');
Route::any('admin/recipes/edit/{id}', [RecipeController::class, 'edit'])->name('admin.edit_recipe');
Route::delete('admin/recipes/delete/{id}', [RecipeController::class, 'delete'])->name('admin.delete_recipe');

Route::get('admin/categories', [CategoryController::class, 'index']);
Route::get('admin/categories/create', [CategoryController::class, 'create']);
Route::post('admin/categories/create', [CategoryController::class, 'store']);
Route::get('admin/categories/{id}', [CategoryController::class, 'show']);
Route::any('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.edit_category');
Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.delete_category');

Route::get('admin/ingredients', [IngredientController::class, 'index']);
Route::get('admin/ingredients/create', [IngredientController::class, 'create']);
Route::post('admin/ingredients/create', [IngredientController::class, 'store']);
Route::get('admin/ingredients/{ingredient}', [IngredientController::class, 'show']);
Route::any('admin/ingredients/edit/{id}', [IngredientController::class, 'edit'])->name('admin.edit_ingredient');
Route::delete('admin/ingredients/delete/{id}', [IngredientController::class, 'delete'])->name('admin.delete_ingredient');