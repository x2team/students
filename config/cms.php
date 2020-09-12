<?php
return [
    'image' => [
        'directory' => 'storage',
        'directory_actors' => 'actors',
        // 'directory_lfm' => public_path('storage/lfm'),
        'watermarkPath' => 'frontend/img',
        'watermarkName' => 'watermark.png',
        'thumbnail' => [
            'width' => 250,
            'height' => 170,
        ],

        'dimentions' => [
            'thumbnail' => [
                'width' => 200,
                'height' => 100
            ],
            'medium' => [
                'width' => 400,
                'height' => 200
            ],
            'large' => [
                'width' => 800,
                'height' => 400
            ],
        ]
    ],

    'default_category_id' => 1,
    'default_user_id' => 1,


];
