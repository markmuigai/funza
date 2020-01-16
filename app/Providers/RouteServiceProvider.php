<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //Custom routes
        $this->mapSystemAdminRoutes();

        $this->mapSchoolAdminRoutes();

        $this->mapTeacherRoutes();

        $this->mapParentRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define system admin routes for the application.
     *
     *
     * @return void
     */
    protected function mapSystemAdminRoutes()
    {
        Route::prefix('systemAdmin')
             ->name('systemAdmin.')
             ->middleware(['web'])
             ->namespace('App\Http\Controllers\systemAdmin')
             ->group(base_path('routes/systemAdmin.php'));
    }

    /**
     * Define the branch admin routes for the application.
     *
     *
     * @return void
     */
    protected function mapSchoolAdminRoutes()
    {
        Route::prefix('schoolAdmin')
             ->name('schoolAdmin.')
             ->middleware(['web'])
             ->namespace('App\Http\Controllers\schoolAdmin')
             ->group(base_path('routes/schoolAdmin.php'));
    }

    /**
     * Define the unit admin routes for the application.
     *
     *
     * @return void
     */
    protected function mapTeacherRoutes()
    {
        Route::prefix('teacher')
             ->name('teacher.')
             ->middleware(['web', 'auth'])
             ->namespace('App\Http\Controllers\teacher')
             ->group(base_path('routes/teacher.php'));
    }

    /**
     * Define the unit admin routes for the application.
     *
     *
     * @return void
     */
    protected function mapParentRoutes()
    {
        Route::prefix('parent')
             ->name('parent.')
             ->middleware(['web'])
             ->namespace('App\Http\Controllers\parent')
             ->group(base_path('routes/parent.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
