<?php
$productKey = $_GET['product'] ?? ''; // toma el producto de la URL

$products = [
    'baby-blue-ink' => [
        'name' => 'Baby Blue Ink',
        'price' => 140.00,
        'desc' => 'Pigmento azul vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'bermuda-blue-ink' => [
        'name' => 'Bermuda Blue Ink',
        'price' => 140.00,
        'desc' => 'Pigmento azul vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'big-sleeps-killer-bee-black' => [
        'name' => 'Killer Bee Black Big Sleeps',
        'price' => 285.00,
        'desc' => 'Killer Bee Black Big Sleeps de Big Sleeps Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'big-sleeps-pelican-bay-black' => [
        'name' => 'Pelican Bay Black Big Sleeps',
        'price' => 285.00,
        'desc' => 'Pelican Bay Black Big Sleeps de Big Sleeps Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'big-sleeps-venom-black' => [
        'name' => 'Venom Black Big Sleeps',
        'price' => 285.00,
        'desc' => 'Venom Black Big Sleeps de Big Sleeps Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'blue-ribbon-ink' => [
        'name' => 'Blue Ribbon Ink',
        'price' => 140.00,
        'desc' => 'Pigmento azul vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'blueberry-hill-ink' => [
        'name' => 'Blueberry Hill Ink',
        'price' => 140.00,
        'desc' => 'Pigmento azul vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'bright-orange-ink' => [
        'name' => 'Bright Orange Ink',
        'price' => 140.00,
        'desc' => 'Pigmento naranja saturado de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'bright-yellow-ink' => [
        'name' => 'Bright Yellow Ink',
        'price' => 140.00,
        'desc' => 'Pigmento amarillo radiante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'brown-ink' => [
        'name' => 'Brown Ink',
        'price' => 140.00,
        'desc' => 'Pigmento café cálido de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'california-orange-ink' => [
        'name' => 'California Orange Ink',
        'price' => 140.00,
        'desc' => 'Pigmento naranja saturado de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'caramel-ink' => [
        'name' => 'Caramel Ink',
        'price' => 140.00,
        'desc' => 'Pigmento café cálido de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'cool-medium-gray-ink' => [
        'name' => 'Cool Medium Gray Ink',
        'price' => 140.00,
        'desc' => 'Pigmento gris suave de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'cotton-candy-ink' => [
        'name' => 'Cotton Candy Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rosa luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'cream-sugar-ink' => [
        'name' => 'Cream & Sugar Ink',
        'price' => 140.00,
        'desc' => 'Pigmento blanco luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'crimson-red-ink' => [
        'name' => 'Crimson Red Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'cuda-purple-ink' => [
        'name' => 'Cuda Purple Ink',
        'price' => 140.00,
        'desc' => 'Pigmento morado profundo de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'dark-brown-ink' => [
        'name' => 'Dark Brown Ink',
        'price' => 140.00,
        'desc' => 'Pigmento café cálido de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'dark-red-ink' => [
        'name' => 'Dark Red Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'deep-red-ink' => [
        'name' => 'Deep Red Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'dynamic-black-hard-line-8oz' => [
        'name' => 'Dynamic Black Hard Line 8oz',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Black Hard Line 8oz – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-black-ink' => [
        'name' => 'Dynamic Black Promo',
        'price' => 148.00,
        'desc' => 'Dynamic Black Promo de Dynamic Color – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'dynamic-blackout-tattoo-ink-blkout-8-oz' => [
        'name' => 'Dynamic Blackout Tattoo Ink – BLKOut 8 oz',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Blackout Tattoo Ink – BLKOut 8 oz – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-blue' => [
        'name' => 'Dynamic Blue',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Blue – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-bright-orange' => [
        'name' => 'Dynamic Bright Orange',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Bright Orange – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-brown' => [
        'name' => 'Dynamic Brown',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Brown – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-bubble-gum' => [
        'name' => 'Dynamic Bubble Gum',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Bubble Gum – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-burgundy-red' => [
        'name' => 'Dynamic Burgundy Red',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Burgundy Red – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-canary-yellow-ink' => [
        'name' => 'Dynamic Canary Yellow',
        'price' => 145.00,
        'desc' => 'Dynamic Canary Yellow de Dynamic Color – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'dynamic-cherry-yellow' => [
        'name' => 'Dynamic Cherry Yellow',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Cherry Yellow – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-chinese-red' => [
        'name' => 'Dynamic Chinese Red',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Chinese Red – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-dark-green' => [
        'name' => 'Dynamic Dark Green',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Dark Green – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-electric-blue' => [
        'name' => 'Dynamic Electric Blue',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Electric Blue – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-fire-red' => [
        'name' => 'Dynamic Fire Red',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Fire Red – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-golden-yellow' => [
        'name' => 'Dynamic Golden Yellow',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Golden Yellow – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-green' => [
        'name' => 'Dynamic Green',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Green – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-heavy-white-ink' => [
        'name' => 'Dynamic Heavy White',
        'price' => 150.00,
        'desc' => 'Dynamic Heavy White de Dynamic Color – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'dynamic-hk-pink' => [
        'name' => 'Dynamic HK Pink',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic HK Pink – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-lavender' => [
        'name' => 'Dynamic Lavender',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Lavender – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-lemon-yellow' => [
        'name' => 'Dynamic Lemon Yellow',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Lemon Yellow – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-light-brown' => [
        'name' => 'Dynamic Light Brown',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Light Brown – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-lime-green' => [
        'name' => 'Dynamic Lime Green',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Lime Green – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-magenta' => [
        'name' => 'Dynamic Magenta',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Magenta – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-orange' => [
        'name' => 'Dynamic Orange',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Orange – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-silver-blue' => [
        'name' => 'Dynamic Silver Blue',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Silver Blue – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-teal' => [
        'name' => 'Dynamic Teal',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Teal – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-triple-black-ink' => [
        'name' => 'Dynamic Triple Black',
        'price' => 148.00,
        'desc' => 'Dynamic Triple Black de Dynamic Color – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'dynamic-tropical-purple' => [
        'name' => 'Dynamic Tropical Purple',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Tropical Purple – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-turquoise' => [
        'name' => 'Dynamic Turquoise',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Turquoise – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-union-black-ink' => [
        'name' => 'Dynamic Union Black',
        'price' => 148.00,
        'desc' => 'Dynamic Union Black de Dynamic Color – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'dynamic-violet' => [
        'name' => 'Dynamic Violet',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Violet – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-wax-red' => [
        'name' => 'Dynamic Wax Red',
        'price' => 200.00,
        'desc' => 'Dynamic Ink Dynamic Wax Red – Tinta profesional para tatuajes',
        'images' => [
            '',
        ],
    ],
    'dynamic-white-ink' => [
        'name' => 'Dynamic White',
        'price' => 150.00,
        'desc' => 'Dynamic White de Dynamic Color – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'flamingo-pink-ink' => [
        'name' => 'Flamingo Pink Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rosa luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'fog-ink' => [
        'name' => 'Fog Ink',
        'price' => 140.00,
        'desc' => 'Pigmento gris suave de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'golden-yellow-ink' => [
        'name' => 'Golden Yellow Ink',
        'price' => 140.00,
        'desc' => 'Pigmento amarillo radiante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'graffiti-green-ink' => [
        'name' => 'Graffiti Green Ink',
        'price' => 140.00,
        'desc' => 'Pigmento verde brillante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'gray-ink' => [
        'name' => 'Gray Ink',
        'price' => 140.00,
        'desc' => 'Pigmento gris suave de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'green-river-ink' => [
        'name' => 'Green River Ink',
        'price' => 140.00,
        'desc' => 'Pigmento verde brillante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'hot-pink-ink' => [
        'name' => 'Hot Pink Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rosa luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'imperial-violet-ink' => [
        'name' => 'Imperial Violet Ink',
        'price' => 140.00,
        'desc' => 'Pigmento morado profundo de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'ivory-ink' => [
        'name' => 'Ivory Ink',
        'price' => 140.00,
        'desc' => 'Pigmento blanco luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'jungle-green-ink' => [
        'name' => 'Jungle Green Ink',
        'price' => 140.00,
        'desc' => 'Pigmento verde brillante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'lavender-ink' => [
        'name' => 'Lavender Ink',
        'price' => 140.00,
        'desc' => 'Pigmento lila suave de Eternal Ink ideal para detalles delicados.',
        'images' => [
            '',
        ],
    ],
    'light-purple-ink' => [
        'name' => 'Light Purple Ink',
        'price' => 140.00,
        'desc' => 'Pigmento morado profundo de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'light-red-ink' => [
        'name' => 'Light Red Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'lightning-yellow-ink' => [
        'name' => 'Lightning Yellow Ink',
        'price' => 140.00,
        'desc' => 'Pigmento amarillo radiante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'lime-green-ink' => [
        'name' => 'Lime Green Ink',
        'price' => 140.00,
        'desc' => 'Pigmento verde brillante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'lining-black-ink' => [
        'name' => 'Lining Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'lipstick-red-ink' => [
        'name' => 'Lipstick Red Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'max-lining-black-ink' => [
        'name' => 'MAX Lining Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'maxx-black-ink' => [
        'name' => 'Maxx Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'mint-green-ink' => [
        'name' => 'Mint Green Ink',
        'price' => 140.00,
        'desc' => 'Pigmento verde brillante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'nocturnal-super-black-ink' => [
        'name' => 'Nocturnal Super Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'nuclear-green-ink' => [
        'name' => 'Nuclear Green Ink',
        'price' => 140.00,
        'desc' => 'Pigmento verde brillante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'orange-ink' => [
        'name' => 'Orange Ink',
        'price' => 140.00,
        'desc' => 'Pigmento naranja saturado de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'panthera-black-gold' => [
        'name' => 'Panthera Black Gold',
        'price' => 270.00,
        'desc' => 'Panthera Black Gold – Mezcla balanceada para packing rápido con acabado brillante.',
        'images' => [
            'img/panthera/panthera-black-gold.svg',
        ],
    ],
    'panthera-black-liner' => [
        'name' => 'Panthera Black Liner',
        'price' => 265.00,
        'desc' => 'Panthera Black Liner – Formulación Panthera diseñada para líneas definidas y limpias.',
        'images' => [
            'img/panthera/panthera-black-liner.svg',
        ],
    ],
    'panthera-blaze-shader' => [
        'name' => 'Panthera Blaze Shader',
        'price' => 265.00,
        'desc' => 'Panthera Blaze Shader – Tono medio ideal para sombras suaves y degradados sutiles.',
        'images' => [
            'img/panthera/panthera-blaze-shader.svg',
        ],
    ],
    'panthera-dark-sumy' => [
        'name' => 'Panthera Dark Sumy',
        'price' => 260.00,
        'desc' => 'Panthera Dark Sumy – Lavado oscuro listo para lograr transiciones profundas.',
        'images' => [
            'img/panthera/panthera-dark-sumy.svg',
        ],
    ],
    'panthera-light-sumy' => [
        'name' => 'Panthera Light Sumy',
        'price' => 260.00,
        'desc' => 'Panthera Light Sumy – Versión clara del sumy Panthera para veladuras y detalles.',
        'images' => [
            'img/panthera/panthera-light-sumy.svg',
        ],
    ],
    'panthera-tribal-xxx-black' => [
        'name' => 'Panthera Tribal XXX Black',
        'price' => 265.00,
        'desc' => 'Panthera Tribal XXX Black – Negro ultra profundo para rellenos sólidos y líneas con alta saturación.',
        'images' => [
            'img/panthera/panthera-tribal-xxx-black.svg',
        ],
    ],
    'pepto-pink-ink' => [
        'name' => 'Pepto Pink Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rosa luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'perfect-black-ink' => [
        'name' => 'Perfect Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'perfect-white-ink' => [
        'name' => 'Perfect White Ink',
        'price' => 140.00,
        'desc' => 'Pigmento blanco luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'pink-ink' => [
        'name' => 'Pink Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rosa luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'pitch-black-ink' => [
        'name' => 'Pitch Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'purple-concentrated-ink' => [
        'name' => 'Purple Concentrated Ink',
        'price' => 140.00,
        'desc' => 'Pigmento morado profundo de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'purple-haze-ink' => [
        'name' => 'Purple Haze Ink',
        'price' => 140.00,
        'desc' => 'Pigmento morado profundo de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'radiant-bright-red' => [
        'name' => 'Radiant Bright Red',
        'price' => 220.00,
        'desc' => 'Radiant Bright Red – Rojo intenso Radiant listo para usar con excelente fluidez.',
        'images' => [
            'img/radiant/radiant-bright-red.svg',
        ],
    ],
    'radiant-deep-purple' => [
        'name' => 'Radiant Deep Purple',
        'price' => 220.00,
        'desc' => 'Radiant Deep Purple – Morado profundo para contrastes dramáticos.',
        'images' => [
            'img/radiant/radiant-deep-purple.svg',
        ],
    ],
    'radiant-electric-blue' => [
        'name' => 'Radiant Electric Blue',
        'price' => 220.00,
        'desc' => 'Radiant Electric Blue – Azul eléctrico que destaca en trabajos de color vivo.',
        'images' => [
            'img/radiant/radiant-electric-blue.svg',
        ],
    ],
    'radiant-golden-yellow' => [
        'name' => 'Radiant Golden Yellow',
        'price' => 220.00,
        'desc' => 'Radiant Golden Yellow – Amarillo dorado con gran poder de cobertura.',
        'images' => [
            'img/radiant/radiant-golden-yellow.svg',
        ],
    ],
    'radiant-lime-green' => [
        'name' => 'Radiant Lime Green',
        'price' => 220.00,
        'desc' => 'Radiant Lime Green – Verde lima fluorescente ideal para efectos brillantes.',
        'images' => [
            'img/radiant/radiant-lime-green.svg',
        ],
    ],
    'radiant-turquoise' => [
        'name' => 'Radiant Turquoise',
        'price' => 220.00,
        'desc' => 'Radiant Turquoise – Turquesa vibrante de alta estabilidad y fácil aplicación.',
        'images' => [
            'img/radiant/radiant-turquoise.svg',
        ],
    ],
    'red-violet-ink' => [
        'name' => 'Red Violet Ink',
        'price' => 140.00,
        'desc' => 'Pigmento morado profundo de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'red-wagon-ink' => [
        'name' => 'Red Wagon Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'root-beer-ink' => [
        'name' => 'Root Beer Ink',
        'price' => 140.00,
        'desc' => 'Pigmento café cálido de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'ruby-red-ink' => [
        'name' => 'Ruby Red Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rojo vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'sea-shell-ink' => [
        'name' => 'Sea Shell Ink',
        'price' => 140.00,
        'desc' => 'Pigmento blanco luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'sepia-dark-ink' => [
        'name' => 'Sepia Dark Ink',
        'price' => 140.00,
        'desc' => 'Pigmento café cálido de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'sepia-medium-ink' => [
        'name' => 'Sepia Medium Ink',
        'price' => 140.00,
        'desc' => 'Pigmento café cálido de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'sky-blue-ink' => [
        'name' => 'Sky Blue Ink',
        'price' => 140.00,
        'desc' => 'Pigmento azul vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'solar-flare-ink' => [
        'name' => 'Solar Flare Ink',
        'price' => 140.00,
        'desc' => 'Pigmento naranja saturado de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'solid-gold-ink' => [
        'name' => 'Solid Gold Ink',
        'price' => 140.00,
        'desc' => 'Pigmento amarillo radiante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'solid-ink-anonymous' => [
        'name' => 'Solid Ink Anonymous',
        'price' => 128.00,
        'desc' => 'Solid Ink Anonymous de Solid Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'solid-ink-cancun-blue' => [
        'name' => 'Solid Ink Cancun Blue',
        'price' => 128.00,
        'desc' => 'Solid Ink Cancun Blue de Solid Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'solid-ink-el-dorado-yellow' => [
        'name' => 'Solid Ink El Dorado Yellow',
        'price' => 128.00,
        'desc' => 'Solid Ink El Dorado Yellow de Solid Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'solid-ink-miami-blue' => [
        'name' => 'Solid Ink Miami Blue',
        'price' => 128.00,
        'desc' => 'Solid Ink Miami Blue de Solid Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'solid-ink-mint' => [
        'name' => 'Solid Ink Mint',
        'price' => 128.00,
        'desc' => 'Solid Ink Mint de Solid Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'solid-ink-tiger' => [
        'name' => 'Solid Ink Tiger',
        'price' => 128.00,
        'desc' => 'Solid Ink Tiger de Solid Ink – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'starbrite-army-green' => [
        'name' => 'Army Green StarBrite',
        'price' => 125.00,
        'desc' => 'Army Green StarBrite de StarBrite Colors – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'starbrite-brite-green' => [
        'name' => 'Brite Green StarBrite',
        'price' => 125.00,
        'desc' => 'Brite Green StarBrite de StarBrite Colors – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'starbrite-brite-white' => [
        'name' => 'White StarBrite',
        'price' => 125.00,
        'desc' => 'White StarBrite de StarBrite Colors – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'starbrite-canary-yellow' => [
        'name' => 'Canary Yellow StarBrite',
        'price' => 125.00,
        'desc' => 'Canary Yellow StarBrite de StarBrite Colors – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'starbrite-green-abyss' => [
        'name' => 'Green Abyss StarBrite',
        'price' => 125.00,
        'desc' => 'Green Abyss StarBrite de StarBrite Colors – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'starbrite-nautical-purple' => [
        'name' => 'Nautical Purple StarBrite',
        'price' => 125.00,
        'desc' => 'Nautical Purple StarBrite de StarBrite Colors – tinta profesional lista para usar.',
        'images' => [
            '',
        ],
    ],
    'sunflower-ink' => [
        'name' => 'Sunflower Ink',
        'price' => 140.00,
        'desc' => 'Pigmento amarillo radiante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'tang-orange-ink' => [
        'name' => 'Tang Orange Ink',
        'price' => 140.00,
        'desc' => 'Pigmento naranja saturado de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'tangerine-ink' => [
        'name' => 'Tangerine Ink',
        'price' => 140.00,
        'desc' => 'Pigmento naranja saturado de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'triple-black-ink' => [
        'name' => 'Triple Black Ink',
        'price' => 140.00,
        'desc' => 'Pigmento negro intenso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'true-blue-ink' => [
        'name' => 'True Blue Ink',
        'price' => 140.00,
        'desc' => 'Pigmento azul vibrante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'true-gold-ink' => [
        'name' => 'True Gold Ink',
        'price' => 140.00,
        'desc' => 'Pigmento amarillo radiante de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'vivid-pink-ink' => [
        'name' => 'Vivid Pink Ink',
        'price' => 140.00,
        'desc' => 'Pigmento rosa luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'warm-light-gray-ink' => [
        'name' => 'Warm Light Gray Ink',
        'price' => 140.00,
        'desc' => 'Pigmento gris suave de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'white-knight-ink' => [
        'name' => 'White Knight Ink',
        'price' => 140.00,
        'desc' => 'Pigmento blanco luminoso de Eternal Ink ideal para trabajos profesionales.',
        'images' => [
            '',
        ],
    ],
    'wine-berry-ink' => [
        'name' => 'Wine Berry Ink',
        'price' => 140.00,
        'desc' => 'Pigmento vino profundo de Eternal Ink para sombreados ricos.',
        'images' => [
            '',
        ],
    ],
    'world-famous-berlin-blackout' => [
        'name' => 'World Famous Berlin Blackout',
        'price' => 245.00,
        'desc' => 'World Famous Berlin Blackout – Pigmento ultra oscuro para áreas sólidas y tribal.',
        'images' => [
            'img/world-famous/world-famous-berlin-blackout.svg',
        ],
    ],
    'world-famous-charcoal-grey' => [
        'name' => 'World Famous Charcoal Grey',
        'price' => 235.00,
        'desc' => 'World Famous Charcoal Grey – Tono gris carbón perfecto para realismo y retratos.',
        'images' => [
            'img/world-famous/world-famous-charcoal-grey.svg',
        ],
    ],
    'world-famous-pitch-black' => [
        'name' => 'World Famous Pitch Black',
        'price' => 240.00,
        'desc' => 'World Famous Pitch Black – Negro versátil de World Famous con consistencia ideal para rellenos.',
        'images' => [
            'img/world-famous/world-famous-pitch-black.svg',
        ],
    ],
    'world-famous-real-teal' => [
        'name' => 'World Famous Real Teal',
        'price' => 235.00,
        'desc' => 'World Famous Real Teal – Teal vibrante con alta permanencia y brillo.',
        'images' => [
            'img/world-famous/world-famous-real-teal.svg',
        ],
    ],
    'world-famous-rome-brown' => [
        'name' => 'World Famous Rome Brown',
        'price' => 235.00,
        'desc' => 'World Famous Rome Brown – Café cálido ideal para texturas de piel y sombras suaves.',
        'images' => [
            'img/world-famous/world-famous-rome-brown.svg',
        ],
    ],
    'world-famous-sailor-jerry-red' => [
        'name' => 'World Famous Sailor Jerry Red',
        'price' => 235.00,
        'desc' => 'World Famous Sailor Jerry Red – Rojo clásico inspirado en el estilo tradicional americano.',
        'images' => [
            'img/world-famous/world-famous-sailor-jerry-red.svg',
        ],
    ],
];

// chequea si el producto existe, si no, muestra un mensaje y sale
$product = $products[$productKey] ?? null;
if (!$product) {
    echo "<p>Producto no encontrado.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($product['name']); ?> | Neto Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="<?php echo htmlspecialchars($product['desc']); ?>">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
        <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <img src="img/BigDreamsLogo.png" height="100px" style="margin-left: 15px;" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0" style="padding-bottom: 20px;">Contáctanos por Whatsapp</p>
                <a href="https://wa.me/525570666253" target="_blank" style="text-decoration: none;">
                    <h5 class="m-0 d-inline-flex align-items-center" style="color:white inherit;">
                        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg"
                            alt="WhatsApp" width="20" height="20"
                            style="margin-right: 10px; filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(90deg);" />
                        +52 55 7066 6253
                    </h5>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block position-relative">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0">
                        <i class="fa fa-bars mr-2"></i>Categorías
                    </h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>

                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="#" class="nav-item nav-link">Máquinas rotativas</a>
                        <a href="#" class="nav-item nav-link">Fuentes y pedales</a>
                        <a href="#" class="nav-item nav-link">Cartuchos y agujas</a>
                        <a href="#" class="nav-item nav-link">Tinta para tatuar</a>
                        <a href="#" class="nav-item nav-link">Anestesia y cuidado</a>
                        <a href="#" class="nav-item nav-link">Higiene y desinfección</a>
                        <a href="#" class="nav-item nav-link">Mobiliario y lámparas</a>
                        <a href="#" class="nav-item nav-link">Transfer e impresoras</a>
                        <a href="#" class="nav-item nav-link">Guantes y consumibles</a>
                        <a href="#" class="nav-item nav-link">Accesorios y extras</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img src="img/BigDreamsLogo.png" height="80px" style="margin-left: 0px;" alt="">
                    </a>
                    <div class="d-flex flex-column align-items-center" style="margin-right: 40px;">
                        <button type="button" class="navbar-toggler mb-1" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <p class="mt-1 mb-0 font-weight-bold text-uppercase" style="font-size: 14px;">MENÚ</p>
                    </div>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active"
                                title="Inicio - Big Dreams Tattoo Supply">Inicio</a>

                            <div class="nav-item dropdown">
                                <a href="shop.html" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    title="Catálogo de productos">
                                    Productos <i class="fa fa-angle-down mt-1"></i>
                                </a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="category-tintas.html" class="dropdown-item">Tintas</a>
                                    <a href="category-cartuchos.html" class="dropdown-item">Cartuchos</a>
                                    <a href="category-maquinas.html" class="dropdown-item">Máquinas</a>
                                    <a href="category-anestesia.html" class="dropdown-item">Anestesia</a>
                                    <a href="category-guantes.html" class="dropdown-item">Guantes</a>
                                    <a href="shop.html" class="dropdown-item font-italic" style="color: #ffffff;">Ver
                                        más</a>
                                </div>
                            </div>

                            <a href="contact.html" class="nav-item nav-link"
                                title="Contáctanos para dudas, pedidos o soporte">Contacto</a>
                            <a href="index.php#/cart" class="nav-item nav-link"
                                title="Revisar productos agregados al carrito">
                                <i class="fas fa-shopping-cart mr-2"></i>Carrito
                            </a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="#" class="btn px-0 ml-3 snipcart-checkout">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <a class="breadcrumb-item text-dark" href="shop.php">Shop</a>
                <span class="breadcrumb-item active"><?php echo htmlspecialchars($product['name']); ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
 
<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <?php foreach ($product['images'] as $index => $img): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img class="w-100 h-100" src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                <br>
               
                <h3 class="font-weight-semi-bold mb-4">$<?php echo number_format($product['price'], 2); ?></h3>
                <p class="mb-4"><?php echo htmlspecialchars($product['desc']); ?></p>

                <!-- Sizes -->
                <div class="d-flex mb-3">
                    <strong class="text-light mr-3">Sizes:</strong>
                    <form>
                        <?php
                        $sizes = ['1/2 Oz','1 Oz','2 Oz'];
                        foreach ($sizes as $i => $size): ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-<?php echo $i+1; ?>" name="size">
                                <label class="custom-control-label" for="size-<?php echo $i+1; ?>"><?php echo $size; ?></label>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>

                <!-- Colors -->
                <div class="d-flex mb-4">
                    <strong class="text-light mr-3">Options:</strong>
                    <form>
                        <?php
                        $colors = ['op1','op2','op3','op4','op5'];
                        foreach ($colors as $i => $color): ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-<?php echo $i+1; ?>" name="color">
                                <label class="custom-control-label" for="color-<?php echo $i+1; ?>"><?php echo $color; ?></label>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs: Description / Info / Reviews -->
    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30">
                <div class="nav nav-tabs mb-4">
                    <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p><?php echo htmlspecialchars($product['desc']); ?></p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Additional Information</h4>
                        <p><?php echo htmlspecialchars($product['desc']); ?></p>
                    </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "<?php echo htmlspecialchars($product['name']); ?>"</h4>
                                    <!-- Static review example -->
                                    <div class="media mb-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-none pr-3">Podria Interesarte</span>
    </h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <?php foreach ($products as $key => $item): ?>
                    <?php if ($key === $productKey) continue; // no mostrar el producto actual ?>
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo htmlspecialchars($item['images'][0]); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="detail.php?product=<?php echo urlencode($key); ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?product=<?php echo urlencode($key); ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?product=<?php echo urlencode($key); ?>">
                                <?php echo htmlspecialchars($item['name']); ?>
                            </a>
                            <br><br>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$<?php echo number_format($item['price'],2); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>