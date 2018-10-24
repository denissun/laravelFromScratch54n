Learn basic laravel from Laracast video



c:\Denis_files_C\laravel-from-scratch-5.4n>php artisan make:migration create_tasks_table --create=tasks
Created Migration: 2018_10_22_235928_create_tasks_table


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

