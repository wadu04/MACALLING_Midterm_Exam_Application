<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Iphone 16',
                'description' => 'The iPhone 16 series features a 6.1-inch Super Retina XDR OLED display, powered by the A18 chip for improved performance. It has a 48MP main camera, a new Camera Control buttonc',
                'price' => 999,
                'category' => 'Iphone',
                'image' => 'https://www.apple.com/newsroom/images/2024/09/apple-introduces-iphone-16-and-iphone-16-plus/article/Apple-iPhone-16-finish-lineup-240909_big.jpg.large.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Samsung S24 Ultra',
                'description' => 'The Samsung Galaxy S24 Ultra, released in January 2024, is a flagship smartphone renowned for its advanced features and performance. It boasts a 6.8-inch Dynamic AMOLED 2X display with a resolution of 3120 x 1440 pixels, offering vibrant visuals and a smooth 120Hz refresh rate. The device is powered by the Qualcomm Snapdragon 8 Gen 3 processor, coupled with 12GB of RAM, ensuring seamless multitasking and responsiveness.',
                'price' => 92,990,
                'category' => 'Samsung',
                'image' => 'https://images.samsung.com/is/image/samsung/assets/hk_en/smartphones/galaxy-s24-ultra/01_S24Ultra-Group-KV_MO.jpg?imbypass=true'
            ],
            [
                'id' => 3,
                'name' => 'Ipad Air',
                'description' => 'The latest model is the 6th-generation iPad Air, announced on May 7, 2024. This device features Apples M3 chip, offering a 30% performance boost over its predecessor, and comes with up to 16GB of RAM, catering to professionals handling complex tasks.',
                'price' => 799,
                'category' => 'Ipad',
                'image' => 'https://switch.com.ph/cdn/shop/files/ROSA_iPad_Air_11_M2_WiFi_Blue_PDP_Image_Position_1b.jpg?v=1717578626&width=4000'
            ],
            [
                'id' => 4,
                'name' => 'Macbook Air',
                'description' => 'The MacBook Air is a line of laptop computers developed and manufactured by Apple Inc. It consists of a full-size keyboard, a machined aluminum case, and a thin light structure. The Air is available with a screen size of 13.3 inches, with different specifications produced by Apple.',
                'price' => 999,
                'category' => 'Macbook',
                'image' => 'https://images-cdn.ubuy.co.in/650188aee584193d8350a66b-2022-apple-macbook-pro-laptop-with-m2.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Alienware X17',
                'description' => 'The Alienware X17 is a high-end gaming laptop that offers a premium gaming experience. It features a 17.3-inch QHD display with a 240Hz refresh rate, providing smooth and immersive visuals. The laptop is powered by the latest Intel Core i9 processor and NVIDIA GeForce RTX 3080 graphics card, delivering exceptional performance for gaming and multitasking.',
                'price' => 2999,
                'category' => 'Laptop',
                'image' => 'https://media.wired.com/photos/59e9500c06a2232e82ba9bdd/master/w_2560%2Cc_limit/Dell_TA.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Mechanical Keyboard',
                'description' => 'Mechanical keyboards are a type of keyboard that uses individual mechanical switches for key presses. These switches are more durable and responsive than the membrane switches found in most standard keyboards, providing a more tactile and satisfying typing experience. Mechanical keyboards are popular among gamers and typists for their durability, performance, and customization options.',
                'price' => 5000,
                'category' => 'Keyboard',
                'image' => 'https://i.pcmag.com/imagery/reviews/00gYe8KsY1Rky7i0nKdpTA9-1..v1613573581.png'
            ]
   
        ];
        return view('products.index', compact('products'));
    }
}


