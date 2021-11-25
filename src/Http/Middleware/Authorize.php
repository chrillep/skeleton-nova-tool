<?php

namespace amespace_vendor\namespace_tool_name\Http\Middleware;

use amespace_vendor\namespace_tool_name\Tool;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    public function handle(Request $request, Closure $next): Response
    {
        return app(Tool::class)->authorize($request)
            ? $next($request)
            : abort(403);
    }
}
