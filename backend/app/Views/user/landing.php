<?= view('components/head') ?>


<body class="font-sans text-gray-200 bg-[#0a0a0d]">

    <?= view('components/header') ?>

  <!-- Scroll Behavior -->
  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('bg-[#111129]/90', 'shadow-lg');
        navbar.classList.remove('bg-transparent');
      } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('bg-[#111129]/90', 'shadow-lg');
      }
    });
  </script>

  <!-- Hero -->
  <section id="home" 
           class="h-screen bg-cover bg-center relative"
           style="background-image:url('https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=1600&q=80');">

    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative h-full flex flex-col items-center justify-center text-center px-6 text-gray-200">
      <h1 class="text-6xl md:text-6xl font-bold mb-4 text-purple-300 drop-shadow-[0_0_8px_rgba(127,90,240,0.5)]">
        Cocopan
      </h1>
      <p class="text-xl md:text-2xl mb-6 opacity-90">
        24/7 Fresh Bread & Coffee in the Void
      </p>
      <a href="#products">
        <?= view('components/buttons/primary', ['title' => "Explore Our Menu"]) ?>
      </a>
    </div>

  </section>

  <!-- Products -->
  <section id="products" class="py-16 px-6 bg-[#0d0d12] text-center text-gray-200">

    <h2 class="text-4xl font-bold mb-4 text-purple-300">Favorites From the Void</h2>
    <p class="text-gray-400 mb-12">Dark. Minimal. Fresh. Always.</p>

    <div class="grid gap-8 max-w-6xl mx-auto md:grid-cols-3">
        <?= view('components/cards/productCard1', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>
        <?= view('components/cards/productCard1', ['image' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=800&q=80', 'title' => "Signature Coffee", 'text' => "Freshly brewed coffee to energize your day or night"]) ?>
        <?= view('components/cards/productCard1', ['image' => 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/95cbc784-4f8a-4446-815a-bdba5ad03b94/Glazed+Donut.png', 'title' => "Delicious Pastries", 'text' => "Sweet treats baked daily, perfect with your coffee."]) ?>
    </div>
  </section>

  <section class="py-16 px-6 text-center max-w-3xl mx-auto text-gray-300">
    <h2 class="text-4xl font-bold mb-6 text-purple-300">Why Cocopan?</h2>
    <p class="text-gray-400 text-lg">
      Crafted in darkness — warm bread and bold coffee, available 24/7 for all wanderers of the night.
    </p>
  </section>

  <!-- CTA -->
    <?= view('components/cta') ?>

  <!-- Footer -->
    <?= view('components/footer') ?>
</body>
</html>
