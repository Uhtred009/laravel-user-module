<?php

return [
    // register
    'register_success'              => '<p>Hesabın oluşturuldu! Hesabını aktifleştirmen için <strong>:email</strong> e-posta adresine bir posta gönderdik. E-posta adresini ziyaret et ve hesabını aktifleştir.</p><p>Aktivasyon postasının gelmesi sunucumuzdaki yoğunluğa göre, bazen 5 dakika kadar sürebilmektedir. Lütfen e-postanın <em>Spam</em> klasörünü de kontrol etmeyi unutma!</p>',


    // activation
    'activation' => [
        'activation_mail_subject'       => 'Lütfen Hesabını Aktifleştir',
        'not_found'                     => 'Aktivasyon bağlantısı bulunamadı.',
        'fail'                          => 'Hesabın aktifleştirilemedi.',
        'success'                       => 'Hesabın aktifleştirildi.'
    ],


    // login
    'login' => [
        'title'                         => 'Giriş Yap',
        'fail'                          => 'Giriş başarısız! Lütfen bilgilerini kontrol ederek tekrar dene. Eğer yeni üye olduysan, hesabını aktifleştirmeden hesabına ulaşamazsın.',
        'exception' => [
            'throttling' => [
                'global'                => 'Sistemimiz şu an saldırı altında gibi görünüyor. Ortalık sakinleşene kadar hizmetimize ara vermek zorunda kaldık. Lütfen giriş yapmayı :date tarihinden sonra tekrar dene.',
                'ip'                    => 'IP adresinden çok fazla yetkisiz giriş denemesi yapılmıştır. :date tarihinden önce tekrar giriş yapmayı denemeden bekle!',
                'user'                  => 'Hesabınıza ulaşmak için çok fazla yetkisiz giriş isteği aldık. Güvenliğin için :date tarihine kadar hesabını kitledik.'
            ],
            'not_activate'              => 'Hesabın aktifleşmediği için giriş yapamazsın.'
        ]
    ],


    // forget password and reset password
    'mail_subject'                  => 'Şifre Sıfırlama Bağlantın',
];