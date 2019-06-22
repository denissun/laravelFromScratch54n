Learn basic laravel from Laracast video
=======================================

ref : https://laracasts.com/series/laravel-from-scratch-2017/episodes/1

### to start a development server

C:\Denis_files_C\laravel-from-scratch-5.4n>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>


c:\Denis_files_C\laravel-from-scratch-5.4n>php artisan make:migration create_tasks_table --create=tasks
Created Migration: 2018_10_22_235928_create_tasks_table

21e1cfe (HEAD -> master) 11.1 client side validate - required
f3c6922 11 Form Request Data and CSRF
4d02469 10.1 blog layout done and before create form
b176c0a 10 Layouts and Structure
543b508 09.2 before change layout to Album example from v4-alpha.getbootstrap.com
faaa2fe 09.1 temp
d73520e 09 Route Model Binding
e35fa25 08 Controllers
1c27d0  07 Eloquent 101
e434b1d 06 Working With Query Builder
6397539 05 pass data to your view
fda31f1 04 database setup
0f1ee6c 02 Basic Routing and View


#### Eloquent

	php artisan make:model Task


	-- add -m to create model and migration
	php artisan make:model Task -m 


	App\Task::all()


	App\Task::where('id', '>',1)->get();
	App\Task::pluck('body')

	App\Task::where('completed', 1)->get();


	query scope


	>>> App\Task::incomplete()->where('id', '<',2)->get()
	=> Illuminate\Database\Eloquent\Collection {#2904
	     all: [
	       App\Task {#2913
		 id: 1,
		 body: "go to store",
		 completed: 0,
		 created_at: "2018-10-24 13:46:51",
		 updated_at: "2018-10-24 13:46:51",
	       },
	     ],
	   }



### 08 Controller

php artisan make:controller TasksController 


### 10 Layout ans structure

     ### make model, migrationa and controller at the same time

c:\Denis_files_C\laravel-from-scratch-5.4n>php artisan make:model Post -mc
Model created successfully.
Created Migration: 2018_11_26_130558_create_posts_table
Controller created successfully.


// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table


### 11 Form Request Data and CSRF

### 12 Form Validation 101

### 14 Laravel Mix and the Front-end
npm run watch
sass

### 15 Eloquent Relationships and Comments

php artisan make:model Commnent -m 
php artisan migrate


	c:\Denis_files_C\laravel-from-scratch-5.4n>php artisan tinker
	Psy Shell v0.9.9 (PHP 7.2.2 — cli) by Justin Hileman
	>>>
	>>> $post = App\Post::find(8);
	=> App\Post {#2910
		id: 8,
		title: "Kaite is a beautiful girl",
		body: "I agree!",
		created_at: "2019-06-19 23:44:22",
		updated_at: "2019-06-19 23:44:22",
	}
	>>> $post ->comments
	=> Illuminate\Database\Eloquent\Collection {#2922
		all: [
		App\Comment {#2919
			id: 1,
			body: "this is a great post",
			post_id: 8,
			created_at: null,
			updated_at: null,
		},
		App\Comment {#2921
			id: 2,
			body: "couldnt agree more!",
			post_id: 8,
			created_at: null,
			updated_at: null,
		},
		],
	}
	>>>                                                                                                                                                                   
	### 16 

	php artisan make:controller CommentsController                                                                         




#### MISC
=========


https://v4-alpha.getbootstrap.com/examples/blog/

convention:

posts

GET /posts
GET /posts/create

POST /posts
GET /posts/{id}/edit
GET /posts/{id}
PATCH /posts/{id}
DELETE /posts/{id}


php artisan make:controller TasksController -r 

<form method="POST" action="/posts">
           {{ csrf_field() }}

