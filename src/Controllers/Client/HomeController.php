<?php

namespace Manhndph45324\Baseweb\Controllers\Client;

use Manhndph45324\Baseweb\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Aaaa';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}