<?php

return [
    'table_name' => 'products',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `products`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `products` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `description` TEXT,
        `price` decimal(6,2),
        `stock` int(11),
        `created_at` timestamp NOT NULL,
        `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted_at` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `products` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `products` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `products` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'id'            => 1,
                'name'          => 'Humidor compleet set',
                'image'         => 'meestverkocht3.jpg',
                'description'   => 'lorem',
                'price'         => 19.99,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 2,
                'name'          => 'Sigaar bundel',
                'image'         => 'meestverkocht2.jpg',
                'description'   => 'lorem',
                'price'         => 25.99,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 3,
                'name'          => 'Houten asbak',
                'image'         => 'meestverkocht1.jpg',
                'description'   => 'lorem',
                'price'         => 2.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 4,
                'name'          => 'Zippo',
                'image'         => 'meestverkocht4.jpg',
                'description'   => 'lorem',
                'price'         => 15.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 5,
                'name'          => 'Glazen asbak',
                'image'         => 'meestverkocht5.jpg',
                'description'   => 'lorem',
                'price'         => 2.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 6,
                'name'          => 'Karaf set luxe',
                'image'         => 'meestverkocht6.jpg',
                'description'   => 'lorem',
                'price'         => 34.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],            
        ),
    ]
];