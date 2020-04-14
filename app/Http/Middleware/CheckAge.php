<?php


namespace App\Http\Middleware;


class CheckAge
{

    /**
     * 返回请求过滤器
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        if ($request->input('age') <= 20) {
            return redirect('home');
        } else {
            return $next($request);
        }
    }
}