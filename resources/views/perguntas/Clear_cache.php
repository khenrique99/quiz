php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear

___________________________________

Clear Route in Browser

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});