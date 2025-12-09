<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Path untuk redirect user yang belum login.
     */
    protected function redirectTo(Request $request): ?string
    {
        return route('loginView');
    }

    /**
     * Dipanggil ketika user tidak terautentikasi.
     */
    protected function unauthenticated($request, array $guards)
    {
        abort(
            redirect()->guest($this->redirectTo($request))
        );
    }
}
