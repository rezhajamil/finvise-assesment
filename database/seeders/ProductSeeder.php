<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 15 Pro Max',
                'price' => 24999000,
                'image' => 'https://cdnpro.eraspace.com/media/wysiwyg/ibox-banner/IMG_3053.webp',
                'description' => 'iPhone 15 Pro Max dengan chip A17 Pro, kamera 48MP, dan desain titanium premium.'
            ],
            [
                'name' => 'Samsung Galaxy S24 Ultra',
                'price' => 22999000,
                'image' => 'https://images.samsung.com/id/smartphones/galaxy-s24-ultra/images/galaxy-s24-ultra-highlights-kv.jpg',
                'description' => 'Samsung Galaxy S24 Ultra dengan AI features, kamera 200MP, dan S Pen terintegrasi.'
            ],
            [
                'name' => 'MacBook Pro M3 Pro',
                'price' => 32999000,
                'image' => 'https://storage.googleapis.com/productions-ccm-catalogservice/assets/ic-mbl-ct-103413232111001304431223423.webp',
                'description' => 'MacBook Pro dengan chip M3 Pro, layar Liquid Retina XDR, dan performa luar biasa.'
            ],
            [
                'name' => 'iPad Pro M2',
                'price' => 15999000,
                'image' => 'https://cdnpro.eraspace.com/media/catalog/product/i/p/ipad_pro_13-inch_m4_wi-fi_silver_1a_5.jpg',
                'description' => 'iPad Pro dengan chip M2, layar Liquid Retina XDR, dan dukungan Apple Pencil 2.'
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'price' => 4999000,
                'image' => 'https://www.sony.co.id/image/6145c1d32e6ac8e63a46c912dc33c5bb?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF',
                'description' => 'Headphone wireless dengan noise cancelling terbaik di kelasnya dan kualitas suara premium.'
            ],
            [
                'name' => 'DJI Mini 4 Pro',
                'price' => 8999000,
                'image' => 'https://cdn.shopify.com/s/files/1/0672/3806/8470/files/1695671537_IMG_20872994.jpg?v=1709703811',
                'description' => 'Drone ringan dengan kamera 4K, obstacle avoidance, dan performa terbang yang stabil.'
            ],
            [
                'name' => 'Apple Watch Series 9',
                'price' => 6999000,
                'image' => 'https://cdnpro.eraspace.com/media/catalog/product/a/p/apple_watch_series_9_41mm_gps_midnight_aluminium_case_with_midnight_sport_loop_1.jpg',
                'description' => 'Smartwatch dengan fitur kesehatan lengkap, Always-On display, dan performa S9 chip.'
            ],
            [
                'name' => 'Samsung Galaxy Tab S9 Ultra',
                'price' => 17999000,
                'image' => 'https://images.samsung.com/id/galaxy-tab-s9/buy/in_the_box_plus_graphite_PC_v2.png?imbypass=true',
                'description' => 'Tablet premium dengan S Pen, layar AMOLED 14.6", dan performa Snapdragon 8 Gen 2.'
            ],
            [
                'name' => 'Google Pixel 8 Pro',
                'price' => 15999000,
                'image' => 'https://images.samsung.com/id/smartphones/galaxy-s24-ultra/images/galaxy-s24-ultra-highlights-kv.jpg',
                'description' => 'Smartphone dengan kamera terbaik, AI features, dan update software jangka panjang.'
            ],
            [
                'name' => 'Microsoft Surface Laptop Studio',
                'price' => 27999000,
                'image' => 'https://images.samsung.com/id/smartphones/galaxy-s24-ultra/images/galaxy-s24-ultra-highlights-kv.jpg',
                'description' => 'Laptop 2-in-1 dengan layar touchscreen, dukungan Surface Pen, dan performa tinggi.'
            ],
            [
                'name' => 'AirPods Pro 2',
                'price' => 3999000,
                'image' => 'https://storage.googleapis.com/productions-ccm-catalogservice/assets/ic-mbl-ct-103413232111001304431223423.webp',
                'description' => 'Earbuds dengan noise cancelling aktif, spatial audio, dan koneksi H2 chip.'
            ],
            [
                'name' => 'Sony Alpha A7 IV',
                'price' => 32999000,
                'image' => 'https://www.sony.co.id/image/5d02da5df552836db894a0a0c4a0c0f0?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320',
                'description' => 'Kamera mirrorless full-frame dengan sensor 33MP, video 4K, dan autofocus canggih.'
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'price' => 1999000,
                'image' => 'https://resource.logitech.com/content/dam/logitech/en/products/mice/mx-master-3s/gallery/mx-master-3s-mouse-top-view-graphite.png',
                'description' => 'Mouse premium dengan scroll wheel MagSpeed, 8K DPI, dan multi-device connectivity.'
            ],
            [
                'name' => 'Samsung Odyssey OLED G9',
                'price' => 19999000,
                'image' => 'https://images.samsung.com/id/galaxy-tab-s9/buy/in_the_box_plus_graphite_PC_v2.png?imbypass=true',
                'description' => 'Monitor gaming ultrawide 49" dengan panel OLED, 240Hz refresh rate, dan HDR.'
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'price' => 4999000,
                'image' => 'https://cdn.shopify.com/s/files/1/0672/3806/8470/files/1695671537_IMG_20872994.jpg?v=1709703811',
                'description' => 'Console gaming portable dengan layar OLED 7", audio yang lebih baik, dan dock yang ditingkatkan.'
            ],
            [
                'name' => 'GoPro Hero 12 Black',
                'price' => 8999000,
                'image' => 'https://gopro.com/content/dam/help/hero12-black/hero12-black-camera.png',
                'description' => 'Action camera dengan stabilisasi HyperSmooth 6.0, video 5.3K, dan HDR.'
            ],
            [
                'name' => 'Razer Blade 15',
                'price' => 29999000,
                'image' => 'https://cdn.shopify.com/s/files/1/0672/3806/8470/files/1695671537_IMG_20872994.jpg?v=1709703811',
                'description' => 'Laptop gaming dengan RTX 4070, layar 240Hz, dan desain premium.'
            ],
            [
                'name' => 'Sony WF-1000XM5',
                'price' => 3999000,
                'image' => 'https://www.sony.co.id/image/5d02da5df552836db894a0a0c4a0c0f0?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320',
                'description' => 'True wireless earbuds dengan noise cancelling terbaik dan kualitas suara premium.'
            ],
            [
                'name' => 'DJI Osmo Pocket 3',
                'price' => 5999000,
                'image' => 'https://cdn.shopify.com/s/files/1/0672/3806/8470/files/1695671537_IMG_20872994.jpg?v=1709703811',
                'description' => 'Pocket camera dengan gimbal 3-axis, video 4K, dan fitur AI tracking.'
            ],
            [
                'name' => 'Samsung Galaxy Z Fold 5',
                'price' => 27999000,
                'image' => 'https://images.samsung.com/id/smartphones/galaxy-s24-ultra/images/galaxy-s24-ultra-highlights-kv.jpg',
                'description' => 'Smartphone foldable dengan layar 7.6", S Pen support, dan kamera premium.'
            ],
            [
                'name' => 'Apple Mac Studio',
                'price' => 19999000,
                'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mac-studio-select-202306?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1684518476563',
                'description' => 'Desktop workstation dengan chip M2 Max, performa tinggi, dan desain compact.'
            ],
            [
                'name' => 'Sony PlayStation 5',
                'price' => 7999000,
                'image' => 'https://www.sony.co.id/image/6145c1d32e6ac8e63a46c912dc33c5bb?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF',
                'description' => 'Console gaming next-gen dengan ray tracing, SSD ultra-fast, dan DualSense controller.'
            ],
            [
                'name' => 'Microsoft Surface Pro 9',
                'price' => 19999000,
                'image' => 'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4P7Yq',
                'description' => 'Tablet PC dengan Windows 11, dukungan Surface Pen, dan performa tinggi.'
            ],
            [
                'name' => 'Samsung Galaxy Buds2 Pro',
                'price' => 2999000,
                'image' => 'https://images.samsung.com/id/galaxy-tab-s9/buy/in_the_box_plus_graphite_PC_v2.png?imbypass=true',
                'description' => 'True wireless earbuds dengan ANC, 360 Audio, dan kualitas suara premium.'
            ],
            [
                'name' => 'Logitech MX Keys',
                'price' => 1999000,
                'image' => 'https://resource.logitech.com/content/dam/logitech/en/products/keyboards/mx-keys/gallery/mx-keys-keyboard-top-view-graphite.png',
                'description' => 'Keyboard premium dengan backlight, multi-device support, dan desain ergonomis.'
            ],
            [
                'name' => 'DJI Mavic 3 Pro',
                'price' => 19999000,
                'image' => 'https://dji-official-fe.djicdn.com/dps/6285e3b0b1b1c4e3a3c3c3c3c3c3c3c3.jpg',
                'description' => 'Drone profesional dengan kamera triple-camera, obstacle avoidance, dan performa terbang tinggi.'
            ],
            [
                'name' => 'Sony Xperia 1 V',
                'price' => 15999000,
                'image' => 'https://www.sony.co.id/image/5d02da5df552836db894a0a0c4a0c0f0?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320',
                'description' => 'Smartphone dengan kamera profesional, layar 4K HDR, dan audio berkualitas tinggi.'
            ],
            [
                'name' => 'Apple Studio Display',
                'price' => 15999000,
                'image' => 'https://storage.googleapis.com/productions-ccm-catalogservice/assets/ic-mbl-ct-103413232111001304431223423.webp',
                'description' => 'Monitor 27" dengan panel 5K, kamera Center Stage, dan speaker built-in.'
            ],
            [
                'name' => 'Samsung Galaxy Watch 6 Pro',
                'price' => 4999000,
                'image' => 'https://images.samsung.com/id/galaxy-tab-s9/buy/in_the_box_plus_graphite_PC_v2.png?imbypass=true',
                'description' => 'Smartwatch premium dengan Wear OS, health tracking, dan desain rotating bezel.'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
