<a href="<?= esc($link ?? "") ?>" ><div class="bg-[#151522]/70 border border-white/10 rounded-xl shadow-xl backdrop-blur-xl hover:scale-105 transition">
  <div class="flex justify-center items-center">
        <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
             class="m-2 object-contain w-full h-56 object-cover opacity-80" alt="Bread">
  </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <p class="text-gray-400"><?= esc($text ?? "text") ?></p>
        </div>
      </div>
</a>
