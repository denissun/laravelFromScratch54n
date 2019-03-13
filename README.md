Learn basic laravel from Laracast video

ref : https://laracasts.com/series/laravel-from-scratch-2017/episodes/1

### to start a development server

c:\Denis_files_C\laravel-from-scratch-5.4n>php artisan serve
Laravel development server started: <http://127.0.0.1:8000>



c:\Denis_files_C\laravel-from-scratch-5.4n>php artisan make:migration create_tasks_table --create=tasks
Created Migration: 2018_10_22_235928_create_tasks_table



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