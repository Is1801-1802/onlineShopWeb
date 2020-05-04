<?php

use App\Info;
use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::create([
            'name' => 'iMac',
            'code' => 'imac',
            'description' => 'The iMac is great for both novices and demanding users. It can handle general-purpose and heavy-duty tasks equally well. It’s ideal for someone who needs to buy a complete computer setup (keyboard, mouse or trackpad, and display) and wants to maximize workspace efficiency.',
            'image' => 'https://support.apple.com/library/content/dam/edam/applecare/images/en_US/social/identify-imac-social-card.jpg',
        ]);

        Info::create([
            'name' => 'MacBook',
            'code' => 'macbook',
            'description' => 'The MacBook family were initially housed in designs similar to the iBook and PowerBook lines which preceded them, now making use of a unibody aluminum construction first introduced with the MacBook Air. This new construction also has a black plastic keyboard that was first used on the MacBook Air, which itself was inspired by the sunken keyboard of the original polycarbonate MacBooks. The now standardized keyboard brings congruity to the MacBook line, with black keys on a metallic aluminum body.',
            'image' => 'https://icdn3.digitaltrends.com/image/digitaltrends/apple-macbook-pro-16-ry-11-1200x630-c-ar1.91.jpg',
        ]);

        Info::create([
            'name' => 'iPad',
            'code' => 'ipad',
            'description' => 'iPad is a line of tablet computers designed, developed and marketed by Apple Inc., which run the iOS and iPadOS mobile operating systems. The user interface is built around the device\'s multi-touch screen, including a virtual keyboard. All iPads can connect using Wi-Fi; some models also have cellular connectivity. iPads can shoot video, take photos, play music, and perform Internet functions such as web-browsing and emailing. Other functions – games, reference, GPS navigation, social networking, etc. – can be enabled by downloading and installing apps. ',
            'image' => 'https://icdn2.digitaltrends.com/image/digitaltrends/apple_ipad_air_feat-1200x630-c-ar1.91.jpg',
        ]);

        Info::create([
            'name' => 'iPhone',
            'code' => 'iphone',
            'description' => 'The iPhone is a line of smartphones designed and marketed by Apple Inc. The user interface is built around the device\'s multi-touch screen, including a virtual keyboard. The iPhone has Wi-Fi and can connect to cellular networks. An iPhone can take photos, play music, send and receive emails, browse the web, send and receive text messages, record notes, perform mathematical calculations, and receive visual voicemail.',
            'image' => 'https://www.yodamobile.ru/image/catalog/!_Blog_foto/%D0%BB%D1%80%D0%BB%D0%B4/wired_up-close-and-personal-with-the-new-iphone-x-1-1200x630.jpg',
        ]);

        Info::create([
            'name' => 'Apple Watch',
            'code' => 'watch',
            'description' => 'Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness tracking and health-oriented capabilities with integration with iOS and other Apple products and services.',
            'image' => 'https://miapple.me/wp-content/uploads/2015/04/Apple-Watch-Gallery-1200x630.jpg',
        ]);

        Info::create([
            'name' => 'Apple TV',
            'code' => 'tv',
            'description' => 'Apple TV is a digital media player and microconsole developed and sold by Apple Inc. It is a small network appliance and entertainment device that can receive digital data for visual and audio content such as music, video, video games, or the screen display of certain other devices, and play it on a connected television set or other video display.',
            'image' => 'https://cdn.vox-cdn.com/thumbor/lop8atZb3UWmTpgumRyJEb1rFfE=/0x267:2040x1335/fit-in/1200x630/cdn.vox-cdn.com/uploads/chorus_asset/file/9289321/akrales_170919_1976_0018.jpg',
        ]);

        Info::create([
            'name' => 'AirPods',
            'code' => 'airpods',
            'description' => 'AirPods are wireless Bluetooth earbuds created by Apple. In addition to playing audio, AirPods feature a built-in microphone that filters out background noise, which allows phone calls and talking to Apple\'s digital assistant, Siri. Additionally, built-in accelerometers and optical sensors can detect taps (e.g. double-tap to pause audio) and in-ear placement, which enables automatic pausing when they are taken out of the ears.',
            'image' => 'https://i1.wp.com/icdn3.digitaltrends.com/image/digitaltrends/apple-airpods-pro-review-db-12-1200x630-c-ar1.91.jpg?w=1440&ssl=1',
        ]);
    }
}
