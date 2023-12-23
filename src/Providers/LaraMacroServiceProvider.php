<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LaraMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(ResponseFactory $response)
    {
        // Register in
        $response->macro('jsonApi', function ($data = null, $httpStatus = 500) {
            return ($data instanceof JsonResource || $data instanceof ResourceCollection)
                ? $data->response()->setStatusCode($httpStatus)
                : response()->json($data, $httpStatus);

            return response()->json($data ?? 'Oops! Something went wrong.', $httpStatus);
        });

    }
}
