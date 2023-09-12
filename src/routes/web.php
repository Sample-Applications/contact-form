<?php
    use Kenprogrammer\Contactform\Http\Controllers\ContactFormController;

    Route::group(['namespace' => 'Kenprogrammer\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', [ContactFormController::class,'index']);
        Route::post('contact', [ContactFormController::class,'sendMail'])->name('contact');
    });
?>