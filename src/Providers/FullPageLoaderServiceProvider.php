<?php
namespace Akashlmp\FullPageLoader\Providers;

use Filament\Support\Facades\FilamentView;
use Illuminate\Support\ServiceProvider;

class FullPageLoaderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'fullpage-loader');
        FilamentView::registerRenderHook(
            'body.end',
            fn() => view('fullpage-loader::components.full-page-loader')
        );
    }

    public function register(): void
    {
    }
}
