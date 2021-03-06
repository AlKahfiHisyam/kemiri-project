<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        if ($this->isHttpException($exception))
        {
            switch ($exception->getStatusCode())
            {
                case 403:
                    return response()->view('error/403', [], $exception->getStatusCode());
                    break;
                case 404:
                    return response()->view('error/404', [], $exception->getStatusCode());
                    break;
                case 408:
                    return response()->view('error/408', [], $exception->getStatusCode());
                    break;
                case 500:
                    return response()->view('error/500', [], $exception->getStatusCode());
                    break;
                case 503:
                    return response()->view('error/503', [], $exception->getStatusCode());
                    break;
            }
        }
        return parent::render($request, $exception);
    }
}
