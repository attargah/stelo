<?php

return [
    'name' => [
        'required' => 'Ad Soyad alanı zorunludur.',
        'max' => 'Ad Soyad alanı en fazla 255 karakter olabilir.',
    ],
    'phone' => [
        'required' => 'Telefon alanı zorunludur.',
        'regex' => 'Geçerli bir telefon numarası giriniz.',
        'min' => 'Telefon numarası en az 10 karakter olmalıdır.',
    ],
    'email' => [
        'required' => 'E-posta alanı zorunludur.',
        'email' => 'Geçerli bir e-posta adresi giriniz.',
    ],
    'product_code' => [
        'required' => 'Ürün kodu zorunludur.',
        'exists' => 'Geçersiz ürün kodu.',
    ],
    'note' => [
        'max' => 'Not alanı en fazla 1000 karakter olabilir.',
    ],
    'approve_check' => [
        'required' => 'Aydınlatma metnini kabul etmelisiniz.',
        'accepted' => 'Aydınlatma metnini kabul etmelisiniz.',
    ],
    'mail_marketing'=>[
        'success'=>'E-Posta Adresiniz Başarıyla Bültenimize Kaydedilmiştir!',
        'email_validation'=>'E-Posta Adresi Zaten Kayıtlıdır!'
    ],
    'product_form' =>[
        'success'=>'Fiyat talebiniz başarıyla iletilmiştir. En kısa sürede belirttiğiniz iletişim adreslerine geri dönüş sağlanacaktır!',
        'isset_validation'=>'Beklenmedik bir hata oluştu. Lütfen sayfayı yenileyip yeniden deneyin.',
    ],
];
