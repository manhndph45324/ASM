<?php

namespace Manhndph45324\Baseweb\Controllers\Admin;

use Manhndph45324\Baseweb\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}