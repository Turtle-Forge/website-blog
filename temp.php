App\Models\Category::create([ "name" => "Programming", "slug" => "programming"
])
App\Models\Category::create([ "name" => "Backend", "slug" => "backend" ])
App\Models\Category::create([ "name" => "Frontend", "slug" => "frontend" ])
App\Models\Category::create([ "name" => "Web", "slug" => "web" ])

App\Models\Post::create([
"title" => "Mencoba Laravel 11",
"category_id" => 4,
"slug" => "mencoba-laravel-11",
"author" => "Benony Gabriel",
"excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cupiditate doloribus voluptates amet quae. Cumque officiis hic ab. Totam, perspiciatis...<i><a href=''>Selengkapnya</a></i>",
"body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, incidunt adipisci ullam dolores illum vel similique. Dolorum inventore suscipit ipsa itaque illum laudantium ullam explicabo deserunt quia earum perspiciatis repellat modi voluptate vero pariatur placeat, iure, cum molestiae nam eius nostrum, odit aperiam? Modi dolores eos quidem voluptatum sint. Nostrum.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus aliquid, odio dignissimos quis illum consectetur pariatur, deleniti officiis minus, ex praesentium expedita veritatis! Quas eveniet sapiente doloremque, natus consequuntur quia. Expedita aliquam reprehenderit nobis natus sunt nostrum praesentium architecto asperiores.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit rerum assumenda aperiam dolorum recusandae earum libero labore est quae quisquam, blanditiis nobis tenetur cupiditate. Dolores est obcaecati itaque voluptatem minima?</p>"
])