<?php

return [
    'table_name' => 'carafe',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `carafe`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `carafe` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `Subcategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
        'ALTER TABLE `carafe` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `carafe` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `carafe` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'id'            => 6,
                'name'          => 'Karaf set luxe',
                'image'         => 'meestverkocht6.jpg',
                'category'      => 'bestSale',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 34.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 7,
                'name'          => 'Karaf set 7 delig',
                'image'         => 'karafset1.jpeg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 36.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 8,
                'name'          => 'Karaf set 3 delig',
                'image'         => 'karafset2.jpeg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 29.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 9,
                'name'          => 'Karaf set 7 delig luxe',
                'image'         => 'karafset3.jpeg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 39.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 10,
                'name'          => 'PeaKaraf set 4 delig inc houderches',
                'image'         => 'karafset4.jpeg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 44.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 11,
                'name'          => 'Karaf set 3 delig ovaal',
                'image'         => 'karafset5.jpeg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 33.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 12,
                'name'          => 'Karaf set 2 delig',
                'image'         => 'karafset6.jpeg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 29.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 13,
                'name'          => 'Karaf Deluxe',
                'image'         => 'karafset7.jpg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 2.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 14,
                'name'          => 'Karaf met kurk',
                'image'         => 'karafset8.jpg',
                'category'      => 'carafe',
                'Subcategory'   => 'carafe',
                'description'   => 'lorem',
                'price'         => 27.95,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
                'created_by'    => 2,
            ],
            
        ),
    ]
];