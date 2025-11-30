<?= view('components/head') ?>

<body class="font-sans text-gray-200 bg-[#0a0a0d]">

    <?= view('components/header') ?>

    <!-- Title Section -->
    <section class="pt-32 pb-12 text-center">
        <h1 class="text-5xl font-bold text-purple-300 drop-shadow-[0_0_8px_rgba(127,90,240,0.5)]">
            Our Products
        </h1>
        <p class="text-gray-400 mt-4 text-lg">
            Fresh bread, warm coffee, and sweet pastries — crafted in the void.
        </p>
    </section>

    <!-- Product Grid -->
    <section class="px-6 py-12">
        <div class="max-w-6xl mx-auto grid gap-10 md:grid-cols-3">

            <!-- Bread -->
            <?= view('components/cards/productCard1', [
                'image' => 'https://tse1.mm.bing.net/th/id/OIP.l3941H8GXgwf_j59bdBQMgHaFG?w=474&h=474&c=7&p=0&o=5&dpr=1.25&pid=1.7',
                'title' => 'Cocopan Bread Loaf',
                'text' => 'Crispy, warm, and freshly baked — our signature bread.',
                'link' => '/products/cocopan_bread_loaf'
            ]) ?>

            <?= view('components/cards/productCard1', [
                'image' => 'https://images.unsplash.com/photo-1608198093002-ad4e005484ec?auto=format&fit=crop&w=900&q=80',
                'title' => 'Dark Rye Bread',
                'text' => 'Dense, flavorful, and crafted perfectly for toast lovers.',
                'link' => '/products/dark_rye_bread'
            ]) ?>

            <!-- Coffee -->
            <?= view('components/cards/productCard1', [
                'image' => 'https://images.unsplash.com/photo-1504753793650-d4a2b783c15e?auto=format&fit=crop&w=900&q=80',
                'title' => 'Signature Void Coffee',
                'text' => 'Strong, bold, and aromatic — fuel for wanderers of the night.',
                'link' => '/products/signature_void_coffee'
            ]) ?>

            <?= view('components/cards/productCard1', [
                'image' => 'https://images.unsplash.com/photo-1470337458703-46ad1756a187?auto=format&fit=crop&w=900&q=80',
                'title' => 'Iced Purple Latte',
                'text' => 'A mystical blend of espresso and lavender milk.',
                'link' => '/products/iced_purple_latte'
            ]) ?>

            <!-- Pastries -->
            <?= view('components/cards/productCard1', [
                'image' => 'https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=900&q=80',
                'title' => 'Glazed Donut',
                'text' => 'Soft, sweet, and perfect with coffee.',
                'link' => '/products/glazed_donut'
            ]) ?>

            <?= view('components/cards/productCard1', [
                'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=900&q=80',
                'title' => 'Cinnamon Roll',
                'text' => 'Warm, gooey, and covered in creamy vanilla glaze.',
                'link' => '/products/cinnamon_roll'
            ]) ?>

        </div>
    </section>

    <!-- CTA Section -->
    <?= view('components/cta') ?>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>
</html>
