<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function include(string $relationship): bool
    {
        $parm = request()->get('include');

        if (! isset($parm)) {
            return false;
        }

        $includeValues = explode(',', strtolower($parm));

        return in_array(strtolower($relationship), $includeValues);

    }
}
