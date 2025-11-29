<?= view('components/head') ?>

<body class="font-sans text-gray-200 bg-[#0a0a0d]">

<?= view('components/header') ?>

<section class="pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto bg-[#111129]/60 p-10 rounded-2xl shadow-xl border border-white/10 backdrop-blur-xl">

        <!-- Product Image -->
        <img 
            src="https://images.unsplash.com/photo-1504753793650-d4a2b783c15e?auto=format&fit=crop&w=900&q=80"
            class="w-full h-80 object-cover rounded-xl mb-8"
        >

        <!-- Title -->
        <h1 class="text-4xl font-bold text-purple-300 mb-3">
            Signature Void Coffee
        </h1>

        <!-- Description -->
        <p class="text-gray-400 mb-6 text-lg">
            Strong, bold, and aromatic — fuel for wanderers of the night, brewed fresh daily.
        </p>

        <!-- Price -->
        <p class="text-2xl font-semibold text-purple-300 mb-6">
            Price: ₱150
        </p>

        <!-- Checkout Form -->
        <form action="/checkout" method="POST" class="space-y-6">

            <!-- Hidden Product Name -->
            <input type="hidden" name="product" value="Signature Void Coffee">

            <!-- Quantity -->
            <div>
                <label class="block text-gray-300 mb-2">Quantity</label>
                <input 
                    type="number" 
                    name="quantity"
                    id="quantity"
                    min="1" 
                    value="1"
                    class="w-24 p-2 text-center bg-[#0e0e14] rounded-lg border border-gray-600"
                    required
                >
            </div>

            <!-- Customer Address -->
            <div>
                <label class="block text-gray-300 mb-2">Address</label>
                <textarea
                    name="address"
                    rows="3"
                    class="w-full p-3 bg-[#0e0e14] rounded-lg border border-gray-600"
                    placeholder="Enter your full delivery address"
                    required
                ></textarea>
            </div>

            <!-- Contact Number -->
            <div>
                <label class="block text-gray-300 mb-2">Contact Number</label>
                <input 
                    type="text"
                    name="contact"
                    class="w-full p-3 bg-[#0e0e14] rounded-lg border border-gray-600"
                    placeholder="09xxxxxxxxx"
                    required
                >
            </div>

            <!-- Total Price -->
            <p class="text-xl">
                Total: 
                <span id="totalPrice" class="text-purple-300 font-semibold">₱150</span>
            </p>

            <!-- Submit Button -->
            <button 
                type="submit"
                class="px-6 py-3 bg-purple-600 hover:bg-purple-700 rounded-xl text-white font-semibold text-lg w-full mt-6">
                Proceed to Checkout
            </button>
        </form>

    </div>
</section>

<script>
    const basePrice = 150;
    const quantity = document.getElementById('quantity');
    const totalPrice = document.getElementById('totalPrice');

    quantity.addEventListener('input', () => {
        let qty = parseInt(quantity.value);
        if (qty < 1) qty = 1;
        totalPrice.textContent = "₱" + (qty * basePrice);
    });
</script>

<?= view('components/footer') ?>

</body>
</html>
