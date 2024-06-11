<?php

namespace Manhndph45324\Baseweb\Commons;


class Helper
{
    public static function debug($data) {
        echo '<pre>';

        print_r($data);

        die;
    }

}