<div id="full-page-loader"
    class="fixed inset-0 z-[9999] flex items-center justify-center bg-white/40 dark:bg-gray-900/40 backdrop-blur-sm transition-opacity duration-300">
    <div class="flex flex-col items-center gap-4">
        <x-filament::loading-indicator class="h-10 w-10 text-primary-600 dark:text-primary-500" />
        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">
            loading...
        </p>
    </div>
</div>
<script>
    const loader = document.getElementById('full-page-loader');

    function showLoader() {
        loader?.classList.remove('hidden', 'opacity-0', 'pointer-events-none');
        document.body.classList.add('blurred');
    }

    function hideLoader() {
        loader?.classList.add('opacity-0', 'pointer-events-none');
        document.body.classList.remove('blurred');
    }

    window.addEventListener('beforeunload', showLoader);

    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            hideLoader();
        }, 500);
    });

    document.addEventListener('livewire:navigated', () => {
        hideLoader();
    });
</script>
<style>
    body.blurred>*:not(#full-page-loader) {
        filter: blur(4px);
        transition: filter 0.3s ease;
    }

    #full-page-loader.opacity-0 {
        opacity: 0;
    }
</style>
