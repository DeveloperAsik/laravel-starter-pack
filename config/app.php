<?php

$base_api_url = '';
$base_static_url = '';
$base_assets_url = '';
$base_media_url = '';
$base_json_uri = '';
switch (env('APP_ENV')) {
    case 'local' :
        $base_assets_url = env('APP_URL_ASSETS_LOCAL');
        $base_static_url = env('APP_URL_STATIC_LOCAL');
        $base_media_url = env('APP_URL_MEDIA_LOCAL');
        $base_api_url = env('APP_URL_API_LOCAL');
        $base_json_uri = env('APP_URL_JSON_LOCAL');
        break;
    case 'dev' :
        $base_assets_url = env('APP_URL_ASSETS_DEV');
        $base_static_url = env('APP_URL_STATIC_DEV');
        $base_media_url = env('APP_URL_MEDIA_DEV');
        $base_api_url = env('APP_URL_API_DEV');
        $base_json_uri = env('APP_URL_JSON_DEV');
        break;
}
return [
    'default_variables' => [
        'title_for_layout' => "Welcome to Laravel Skeleton project, simple cms for great amazing profit."
    ],

    'name' => env('APP_NAME', 'Laravel'),
  
    'env' => env('APP_ENV', 'production'),
  
    'debug' => (bool) env('APP_DEBUG', false),
  
    'url' => env('APP_URL', 'http://localhost:1000'),
    'base_extraweb_uri' => env('APP_URL'). '/extraweb',
    'base_api_uri' => $base_api_url,
    'base_static_uri' => $base_static_url,
    'base_media_uri' => $base_media_url,
    'base_assets_uri' =>$base_assets_url,
    'base_json_uri' => $base_json_uri,
    
    'salt' => 'c1isvFdxMDdmjOlvxpecFwdawdwq3221dsad3ewda',
 
    'timezone' => 'UTC',
   
    'locale' => 'en',
 
    'fallback_locale' => 'en',
  
    'faker_locale' => 'en_US',
  
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',

    'providers' => [
        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
    ],

    'aliases' => [
        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Date' => Illuminate\Support\Facades\Date::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'RateLimiter' => Illuminate\Support\Facades\RateLimiter::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'JWTAuth' => Tymon\JWTAuth\Facades\JWTAuth::class,
        'JWTFactory' => Tymon\JWTAuth\Facades\JWTFactory::class,
    ],
];
