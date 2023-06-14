<?php 
namespace App\Models\modelPublic;

use Illuminate\View\View;

class Singleton 
{
    public function compose(View $view)
    {
        $html = '<select class="custom-select">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>';
        $view->with('index', $html);
    }
}