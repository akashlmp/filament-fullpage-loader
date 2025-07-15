
# Filament Full Page Loader

A Filament plugin that shows a full-page loading overlay during Livewire requests.  
Enhances UX by preventing users from interacting with the page while background operations run.

---

## 🚀 Features

- ⚡ Full-page loader overlay during Livewire operations
- 🎨 Dark mode and light mode compatible
- 🛠️ Configurable text and toggle
- 🧩 Plug-and-play for Filament v3

---

## 📦 Installation

You can install the package via Composer:

```bash
composer require akashlmp/fullpage-loader
````

---

## 🛠️ Configuration

You can publish the configuration file to customize the loader behavior:

```bash
php artisan vendor:publish --tag=fullpage-loader-config
```

This will create a file at `config/fullpage-loader.php`:

```php
return [

    // Enable or disable the loader globally
    'enabled' => true,

    // Text shown below the spinner if you are using localization then just padd key eg: common.loading
    'text' => 'Loading...',
];
```

* Set `'enabled' => false` to disable the loader entirely.
* Set `'text' => ''` or `null` to hide the loader text.

---

## ✅ Requirements

* PHP >= 8.1
* Laravel >= 10
* Filament >= 3.0

---

## 📚 License

MIT © [Akash](https://github.com/akashlmp)

---

## 🤝 Contributing

Pull requests are welcome!
Feel free to open issues or suggest improvements.

---

## 🔗 Links

* [GitHub Repository](https://github.com/akashlmp/filament-fullpage-loader)
* [Packagist Package](https://packagist.org/packages/akashlmp/fullpage-loader)
