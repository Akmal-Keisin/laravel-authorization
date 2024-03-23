<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    public array $menus = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = [
            $this->mappingMenu('Dashboard', 'dashboard.index'),
            $this->mappingMenu('Users', 'users.index'),
        ];
    }

    private function mappingMenu(string $name, string $route)
    {
        $splittedRoute = explode('.', $route);

        return [
            'name' => $name,
            'url' => $route === '#' ? '#' : route($route),
            'route' => $route,
            'isActive' => $route === '#' ? false : Route::is(count($splittedRoute) > 1 ? $splittedRoute[0] . '.*' : $route)
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.sidebar');
    }
}
