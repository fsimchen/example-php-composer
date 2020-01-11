<?php

namespace App;

use Carbon\Carbon;

class MainController
{
    public static function index()
    {
        echo 'vendor Carbon\Carbon: ' . Carbon::now()->toDateString();

        echo '<br><br>';

        echo 'helper function strip_non_numeric: ' . strip_non_numeric('sd21s3d21s3d2 1s3 d1');
    }
}
