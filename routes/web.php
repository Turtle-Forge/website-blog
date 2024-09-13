<?php


use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view("home");
});

Route::get('/about', function () {
    return view(
        "about",
        [
            "nama" => "Benony Gabriel",
            "prodi" => "Ilmu Komputer"
        ]
    );
});

Route::get('/blog', [PostController::class, "index"]);




// Halaman single post
Route::get("posts/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", function () {
    return view("categories", [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});

Route::get("/categories/{category:slug}", function (Category $category) {
    return view("category", [
        "title" => $category->name,
        "posts" => $category->post,
        "category" => $category->name
    ]);
});

Route::get("/authors/{user}", function (User $user) {
    return view("posts", [
        "title" => "Posts by {user}",
        "posts" => $user->posts
    ]);
});
