<?php

return [
    'title' => 'Ayarlar',
    'group' => 'Ayarlar',
    'resource' => [
        'id' => 'ID',
        'single' => 'Kullanıcı',
        'email_verified_at' => 'E-Posta Doğrulanma Tarihi',
        'created_at' => 'Oluşturulma Tarihi',
        'updated_at' => 'Güncellenme Tarihi',
        'verified' => 'Doğrulanmış',
        'unverified' => 'Doğrulanmamış',
        'name' => 'İsim',
        'email' => 'Eposta',
        'password' => 'Şifre',
        'roles' => 'Roller',
        'teams' => 'Takımlar',
        'label' => 'Kullanıcılar',
        'title' => [
            'show' => 'Kullanıcıyı Görüntüle',
            'delete' => 'Kullanıcıyı Sil',
            'impersonate' => 'Kullanıcıyı Kopyala',
            'create' => 'Yeni Kullanıcı Oluştur',
            'edit' => 'Kullanıcıyı Güncelle',
            'list' => 'Kullanıcılar',
            'home' => 'Kullanıcılar',
        ],
        'notificaitons' => [
            'last' => [
                'title' => 'Hata',
                'body' => 'Son kullanıcıyı silemezsin!',
            ],
            'self' => [
                'title' => 'Hata',
                'body' => 'Kendi kaydını silemezsin!',
            ],
        ],
    ],
    'bulk' => [
        'teams' => 'Takımları Güncelle',
        'roles' => 'Rolleri Güncelle',
    ],
    'team' => [
        'title' => 'Takımlar',
        'single' => 'Takım',
        'columns' => [
            'avatar' => 'Avatar',
            'name' => 'İsim',
            'owner' => 'Yönetici',
            'personal_team' => 'Personel Takımı',
        ],
    ],
];
