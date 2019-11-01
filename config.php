<?php

return [
    'production'        => false,
    'baseUrl'           => 'https://blog.azur.network',
    'site' => [
        'title'         => 'Azur Network Blog',
        'description'   => 'Stay up to date with Azur Network!',
        'image'         => 'share_image.png',
    ],
    'services' => [
        'analytics'     => 'UA-XXXXX-Y',
        'disqus'        => 'Test',
    ],
    'collections' => [
        'posts' => [
            'path'      => 'posts/{filename}',
            'sort'      => '-date',
            'extends'   => '_layouts.post',
            'section'   => 'postContent',
            'isPost'    => true,
            'tags'      => [],
        ],
        'tags' => [
            'path'      => 'tags/{filename}',
            'extends'   => '_layouts.tag',
            'section'   => '',
            'name'      => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
