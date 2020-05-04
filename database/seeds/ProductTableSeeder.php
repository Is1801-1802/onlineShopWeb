<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => 4,
            'name' => 'iPhone 11 Pro Green 64GB',
            'description' => '- type: monoblock (classic); operating system: iOS 13; diagonal: 5.8"; amount of RAM: 6144 MB; built-in memory: 64 GB; color: green',
            'image' => 'https://satelonline.kz/upload/iblock/5c4/5c44cad0f6a121aa3bb9593b609e7e70.jpg',
            'price' => 514390,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'iPhone 11 Yellow 64GB',
            'description' => '- type: monoblock (classic); operating system: iOS 13; diagonal: 6.1"; RAM: 4096 MB; internal memory: 64 GB; color: yellow',
            'image' => 'https://images.kz.prom.st/109733124_w640_h640_iphone-11-256gb.jpg',
            'price' => 388990,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'iPhone XS White 64GB',
            'description' => '- iOS; nano SIM+eSIM, support 1 SIM card; screen 5.8", resolution 2436x1125; dual camera 12/12 MP, autofocus, F / 1.8; memory 64 GB, without card slot; 3G, 4G LTE, LTE-A, Wi-Fi, Bluetooth, NFC, GPS; weight 177 g; color: white',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/986077/img_id2845335275996509808.jpeg/9hq',
            'price' => 329990,
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'iMac 21.5',
            'description' => 'Intel Core i5 7360U 2300 Mhz / 21.5" / 1920x1080 / 8.0Gb / 1000Gb / Iris Plus Graphics / Wi-Fi / Bluetooth / Mac OS X',
            'image' => 'https://i.ya-webdesign.com/images/apple-imac-png-7.png',
            'price' => 609900,
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'iMac 27 Retina 5K',
            'description' => 'Intel Core i5 3000 Mhz / 27" / 5120×2880 / 8.0Gb / 1128Gb HDD+SSD/ Radeon Pro 570X / Wi-Fi / Bluetooth / Mac OS X',
            'image' => 'https://mobilworld.by/upload/iblock/036/036b6707c1f27a6e3457d6957964c190.png',
            'price' => 859390,
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'iMac A1418',
            'description' => 'Core i5 2300 Mhz / 21.5" / 1920x1080 / 8.0Gb / 1000Gb / Intel Iris Plus Graphics 640 / Wi-Fi / Bluetooth / MacOS X',
            'image' => 'https://apollo-frankfurt.akamaized.net/v1/files/eh9bj7fxo7ys-KZ/image',
            'price' => 532990,
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'MacBook Pro 13 2019',
            'description' => 'Intel Core i5 2400 MHz / 13.3" / 2560x1600 / 8Gb / 512Gb SSD / Intel Iris Plus Graphics 655 / Wi-Fi / Bluetooth / MacOS',
            'image' => 'https://gadgetstore.kz/wa-data/public/shop/products/40/02/240/images/1023/1023.970.jpg',
            'price' => 890990,
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'MacBook Air 13 2019',
            'description' => 'Intel Core i5 1600 Mhz / 13.3" / 2560x1600 / 8Gb / 128Gb / Intel UHD Graphics 617 / Wi-Fi / Bluetooth / MacOS Mojave',
            'image' => 'https://satelonline.kz/upload/iblock/35e/35e1371edb9bb6cbd9578f37e499d6f1.jpg',
            'price' => 499990,
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'MacBook Air 13',
            'description' => 'Intel Core i5 1800 Mhz / 13.3" / 1440x900 / 8.0Gb / 128Gb / Intel HD Graphics 6000 / Wi-Fi / Bluetooth / macOS',
            'image' => 'https://object.pscloud.io/cms/cms/Photo/img_0_62_1075_0.jpg',
            'price' => 413990,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'iPhone Xr 64GB',
            'description' => '- iOS 12; nano SIM+eSIM, support 1 SIM card; screen 6.1", resolution 1792x828; camera 12 MP, autofocus, F / 1.8; memory 64 GB, without card slot; RAM 3072 MB; 3G, 4G LTE, LTE-A, Wi-Fi, Bluetooth, NFC, GPS; weight 194 g;',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/901948/img_id8894906300353055076.jpeg/9hq',
            'price' => 296890,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'iPhone 8 64Gb',
            'description' => '- type: monoblock (classic); operating system: iOS 11; diagonal: 4.7"; RAM: 2048 MB; internal memory: 64 GB;',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/466729/img_id2120181388893803514.jpeg/9hq',
            'price' => 238552,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'iPhone 7 Plus 32Gb',
            'description' => '- type: monoblock (classic); diagonal: 5.5"; RAM: 3072 MB; internal memory: 32 GB;',
            'image' => 'https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/e/a/ea379c26faf734fb5aa1b1b8262c3eed6263b700_39726_1.jpg',
            'price' => 219127,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'iPad 10.2 ',
            'description' => '- tablet 10.2", 2160x1620, TFT IPS; built-in memory 32 GB, without slot; iOS, Apple a10 processor; Wi-Fi, Bluetooth; rear camera 8 Mpix; front camera 1.2 Mpix; working time 10 h; accelerometer, gyroscope',
            'image' => 'https://gadgetstore.kz/wa-data/public/shop/products/42/02/242/images/1029/1029.970.jpg',
            'price' => 153880,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'iPad Pro 11 64 Gb',
            'description' => '- tablet 11, 2388x1668, TFT IPS; built-in memory 64 GB, without a memory card slot; iOS, Apple a12x Bionic processor; Wi-Fi, Bluetooth; weight 468 g; rear camera 12 Mpix; front camera 7 Mpix; working time 9 h; accelerometer, gyroscope.',
            'image' => 'https://freshmobile.kz/image/cache/catalog/Apple/Ipad%20Pro%2011/Ipad%2011%202-650x650.jpg',
            'price' => 399800,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'iPad mini 5',
            'description' => '- 7.9 inch, 2048x1536; iOS 12; 64 GB internal memory; Touch ID',
            'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-mini-select-201911_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1573825332486',
            'price' => 214890,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'iPad Air',
            'description' => '- tablet 10.5", 2224x1668, TFT IPS; built-in memory 64 GB, without a memory card slot; iOS, Apple A12 bionic processor; Wi-Fi, Bluetooth, 4G; rear camera 8 Mpix; front camera 7 Mpix; working time 10 h; accelerometer, gyroscope',
            'image' => 'https://chocomart.kz/upload/eb/eb7537ee045e4ef41d12d3f348c721a6.jpg',
            'price' => 329700,
        ]);

        Product::create([
            'category_id' => 5,
            'name' => 'Apple Watch Series 5 44mm',
            'description' => '- water-proof; case material: aluminum, ceramic; OLED touch screen, 368x448; iOS compatibility; sleep monitoring, calories, Phys. activity; scratch-resistant glass; weight: 36.7 g',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/364668/img_id3564374869392273018.jpeg/9hq',
            'price' => 219488,
        ]);

        Product::create([
            'category_id' => 5,
            'name' => 'Apple Watch Series 3 38mm',
            'description' => '- shockproof, water-proof; aluminum case; Ion-X glass; OLED touch screen, 1.5"; calls via phone or tablet; iOS compatibility; sleep monitoring, calories, Phys. activity; weight: 26.7 g',
            'image' => 'https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/5/6/567ba069483d354eca915048a85cd34d89061cba_120067_2sdf.jpg',
            'price' => 114790,
        ]);

        Product::create([
            'category_id' => 5,
            'name' => 'Apple Watch Series 5 Nike',
            'description' => '- waterproof; case material: aluminum; OLED touch screen, 368x448; calls via phone or tablet; iOS compatibility; sleep monitoring, calories, Phys. activity; scratch-resistant glass; weight: 36.1 g',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/1417902/img_id7119235806185572461.jpeg/9hq',
            'price' => 233490,
        ]);

        Product::create([
            'category_id' => 6,
            'name' => 'Apple TV 4K MQD22RS/A 32GB',
            'description' => '- media player without hard disk; support for 4K UHD; FLAC playback; HDMI 2.0 interface; TVs operating system; network connection via Wi-Fi and Ethernet; support for services: iTunes, Apple Music, Netflix, Hulu, HBO, Showtime.',
            'image' => 'https://www.ixbt.com/img/00/02/02/45/images/apple-tv-hero-select-201709_large.jpg',
            'price' => 119900,
        ]);

        Product::create([
            'category_id' => 6,
            'name' => 'Apple TV Gen 4 MR912RS/A 32GB',
            'description' => '- media player without hard disk; support for 4K UHD; FLAC playback; HDMI 2.0 interface; TVs operating system; network connection via Wi-Fi and Ethernet; support for services: iTunes, Apple Music, Netflix, Hulu, HBO, Showtime.',
            'image' => 'https://www.ixbt.com/img/00/02/02/45/images/apple-tv-hero-select-201709_large.jpg',
            'price' => 99900,
        ]);

        Product::create([
            'category_id' => 6,
            'name' => 'Apple TV 4K MP7P2RS/A64GB',
            'description' => '- media player without hard disk; support for 4K UHD; FLAC playback; HDMI 2.0 interface; TVs operating system; network connection via Wi-Fi and Ethernet; support for services: iTunes, Apple Music, Netflix, Hulu, HBO, Showtime.',
            'image' => 'https://www.ixbt.com/img/00/02/02/45/images/apple-tv-hero-select-201709_large.jpg',
            'price' => 134900,
        ]);

        Product::create([
            'category_id' => 7,
            'name' => 'Apple AirPods 2',
            'description' => '- Bluetooth headset; earbuds; weight 4 g; support iPhone; working time 5 hours.',
            'image' => 'https://img.sapateq.kz/image/cache/data/p/8b0e/a13bb639-500x500.jpg',
            'price' => 64089,
        ]);

        Product::create([
            'category_id' => 7,
            'name' => 'Apple AirPods 2 Wireless',
            'description' => '- Bluetooth headset; earbuds; weight 4 g; support iPhone; working time 5 h; with wireless charging case',
            'image' => 'https://target.scene7.com/is/image/Target/GUEST_6016b06d-e8d6-403a-9e1d-1938f45bb1f7?wid=488&hei=488&fmt=pjpeg',
            'price' => 81490,
        ]);

        Product::create([
            'category_id' => 7,
            'name' => 'Apple AirPods Pro',
            'description' => '- Bluetooth headset; plug-in (plugs); active noise reduction; weight 5.4 g (each earphone); wireless charging case; up to 4.5 hours of audio listening; IPX4 sweat and water protection',
            'image' => 'https://www.mixshop.net.ua/wp-content/uploads/2020/02/apple-airpods-pro.jpeg',
            'price' => 118960,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'iPad mini 3 16Gb',
            'description' => '- 7.87 inches, 2048x1536; iOS; Internal memory 16 GB; Mobile: 3G, LTE (4G), EDGE, GPRS, GSM 1800, GSM 1900, GSM 900, HSCSD, HSDPA, HSPA+, HSUPA;',
            'image' => 'https://display.ua/image/cache/data/iPad%20Mini%203/Mini%203%20Wi-Fi%20%28Space%20Gray%29/qaGAG-500x500.jpg',
            'price' => 184890,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'iPhone 6 32 GB',
            'description' => '- type: monoblock (classic); diagonal: 4.7 inches; RAM: 1024 MB; internal memory: 32 GB;',
            'image' => 'https://applestock.com.ua/image/cache/catalog/iphone/iphone6s-gold-500x500.png',
            'price' => 159990,
        ]);
    }
}
