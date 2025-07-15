<?php
namespace Akashlmp\FullPageLoader\Providers;

use Filament\Support\Facades\FilamentView;
use Illuminate\Support\ServiceProvider;
use Filament\View\PanelsRenderHook;
class FullPageLoaderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/fullpage-loader.php' => config_path('fullpage-loader.php'),
        ], 'fullpage-loader-config');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'fullpage-loader');
        FilamentView::registerRenderHook(
            PanelsRenderHook::BODY_END,
            fn() => view('fullpage-loader::components.full-page-loader')
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/fullpage-loader.php', 'fullpage-loader');
    }
}
