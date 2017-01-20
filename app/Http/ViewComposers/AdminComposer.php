<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class AdminComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $admin;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        if(auth()->guard('admin')->check())
            $this->admin = auth()->guard('admin');
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('admin', $this->admin);
    }
}