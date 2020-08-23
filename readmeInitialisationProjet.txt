## a faire pour les migration : 

Dans appServiceProvider :


use Illuminate\Support\Facades\Schema;

 
 public function boot()
    {
        Schema::defaultStringLength(191);
    }