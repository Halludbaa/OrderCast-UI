<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barista</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-white">

  <div class="flex flex-col md:flex-row p-4 gap-6">
    <!-- Sidebar Category -->
    <div class="w-full md:w-1/3 lg:w-1/4">
      <div class="border rounded-lg p-4 md:sticky md:top-4">
        <h2 class="font-semibold mb-3 text-lg">Category</h2>
        <ul class="flex md:flex-col gap-4 md:gap-3 text-sm overflow-x-auto md:overflow-visible">
          <li><a href="#" class="hover:underline whitespace-nowrap">Coffee</a></li>
          <li><a href="#" class="hover:underline whitespace-nowrap">Matcha</a></li>
          <li><a href="#" class="hover:underline whitespace-nowrap">Pastry</a></li>
          <li><a href="#" class="hover:underline whitespace-nowrap">Artisan Bread</a></li>
        </ul>
      </div>
    </div>

    <!-- Product List -->
    <div class="w-full md:w-2/3 lg:w-3/4">
      <h2 class="text-2xl font-medium tracking-widest mb-2">Coffee</h2>
      <hr class="border-black mb-6">

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Banyak Produk -->
        <div class="cursor-pointer" onclick="openDetail('Cappucino', 25000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Cappucino</p>
          <p class="text-sm md:text-base">Rp. 25.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Espresso Matcha', 25000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Espresso Matcha</p>
          <p class="text-sm md:text-base">Rp. 25.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Latte', 28000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Latte</p>
          <p class="text-sm md:text-base">Rp. 28.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Mocha', 30000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Mocha</p>
          <p class="text-sm md:text-base">Rp. 30.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Americano', 22000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Americano</p>
          <p class="text-sm md:text-base">Rp. 22.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Macchiato', 30000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Macchiato</p>
          <p class="text-sm md:text-base">Rp. 30.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Flat White', 28000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Flat White</p>
          <p class="text-sm md:text-base">Rp. 28.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Caramel Latte', 35000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Caramel Latte</p>
          <p class="text-sm md:text-base">Rp. 35.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Hazelnut Coffee', 32000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Hazelnut Coffee</p>
          <p class="text-sm md:text-base">Rp. 32.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Vanilla Latte', 30000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Vanilla Latte</p>
          <p class="text-sm md:text-base">Rp. 30.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Affogato', 40000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Affogato</p>
          <p class="text-sm md:text-base">Rp. 40.000</p>
        </div>

        <div class="cursor-pointer" onclick="openDetail('Café au Lait', 28000)">
          <div class="bg-[#A69595] h-40 rounded-lg mb-3"></div>
          <p class="text-sm md:text-base">Café au Lait</p>
          <p class="text-sm md:text-base">Rp. 28.000</p>
        </div>

      </div>
    </div>
  </div>

  <!-- Popup Modal Detail -->
  <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white w-[90%] max-w-2xl rounded-lg shadow-lg p-6 overflow-y-auto max-h-[90vh] relative">
      <div class="flex flex-col md:flex-row gap-6">
        <!-- Image -->
        <div class="w-full md:w-1/3">
          <div class="bg-[#A69595] h-40 md:h-48 rounded-lg"></div>
          <p id="modalProductName" class="text-center mt-2 font-medium"></p>
        </div>

        <!-- Options -->
        <div class="w-full md:w-2/3 text-sm">
          <div class="mb-4">
            <p class="font-medium">Type</p>
            <div class="flex gap-4 mt-1">
              <label><input type="radio" name="type" class="accent-emerald-700" checked> Hot</label>
              <label><input type="radio" name="type" class="accent-emerald-700"> Iced</label>
            </div>
          </div>
          <div class="mb-4">
            <p class="font-medium ">Iced Type</p>
            <div class="flex gap-4 mt-1">
              <label><input type="radio" name="type-iced" class="accent-emerald-700" checked> Less</label>
              <label><input type="radio" name="type-iced" class="accent-emerald-700" > Normal</label>
              <label><input type="radio" name="type-iced" class="accent-emerald-700" > More</label>
            </div>
          </div>

          <div class="mb-4">
            <p class="font-medium">Milk</p>
            <div class="flex flex-col gap-1 mt-1">
              <label><input type="radio" name="milk" class="accent-emerald-700" checked> Dairy</label>
              <label><input type="radio" name="milk" class="accent-emerald-700" > Oat + Rp. 15.000</label>
              <label><input type="radio" name="milk" class="accent-emerald-700" > Soy + Rp. 12.000</label>
            </div>
          </div>

          <div class="mb-4">
            <p class="font-medium">Add</p>
            <div class="flex flex-col gap-1 mt-1">
              <label><input type="radio" name="add" class="accent-emerald-700" > Espresso +1 shot + Rp. 5.000</label>
              <label><input type="radio" name="add" class="accent-emerald-700" > Espresso +2 shot + Rp. 9.000</label>
              <label><input type="radio" name="add" class="accent-emerald-700" > Sugar</label>
            </div>
          </div>

          <!-- Quantity & Total -->
          <div class="flex justify-between items-center mt-6">
            <p class="font-medium">Total</p>
            <p id="modalProductPrice" class="font-semibold">Rp. 0</p>
          </div>

          <div class="flex justify-center items-center gap-4 my-4">
            <button onclick="decreaseQty()" class="text-red-500 text-xl">➖</button>
            <span id="modalQty">1</span>
            <button onclick="increaseQty()" class="text-green-600 text-xl">➕</button>
          </div>

          <!-- Add to Cart -->
          <button onclick="addToCartFromModal()" class="bg-[#4a2c16] text-white w-full py-2 rounded-lg font-medium">
            Add to Cart
          </button>
        </div>
      </div>

      <!-- Close Button -->
      <button onclick="closeDetail()" class="absolute top-2 right-3 text-gray-600 text-2xl">&times;</button>
    </div>
  </div>

<!-- CART POPUP -->
<div id="cartModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-xl shadow-lg w-[90%] md:w-[600px] p-6 relative">
    
    <h2 class="text-xl font-semibold mb-4">Your Cart</h2>

    <!-- Cart Items -->
    <div id="cartItems" class="space-y-4 max-h-[300px] overflow-y-auto">
      <!-- Item contoh -->
      <div class="flex items-center gap-4 border-b pb-3">
        <div class="w-16 h-16 bg-gray-400 rounded-lg"></div>
        <div class="flex-1">
          <h3 class="font-medium">Hot Latte</h3>
          <p class="font-semibold">Rp. 25.000</p>
          <p class="text-sm text-gray-500">Oat Milk</p>
        </div>
        <div class="flex items-center gap-2">
          <button onclick="increaseQty(1)" class="text-green-600 text-xl">+</button>
          <span id="qty-1" class="w-6 text-center">2</span>
          <button onclick="decreaseQty(1)" class="text-red-600 text-xl">−</button>
        </div>
      </div>
    </div>

    <!-- Total -->
    <div class="flex justify-between items-center mt-6 text-lg font-medium">
      <span>Total</span>
      <span id="cartTotal">Rp. 50.000</span>
    </div>

    <!-- Order Button -->
    <button class="w-full mt-4 bg-[#4b3621] text-white py-2 rounded-lg text-lg font-medium hover:bg-[#3b2c1a]">
      ORDER
    </button>

    <!-- Close Button -->
    <button onclick="closeCart()" class="absolute top-4 right-6 text-gray-600 text-xl">✕</button>
  </div>
</div>

  <!-- Cart Fixed Bottom -->
<div class="fixed bottom-0 left-0 w-full flex justify-center pb-4 z-40">
  <div class="bg-white border rounded-xl shadow-md w-[95%] sm:w-[90%] max-w-md p-4">
    <div class="flex justify-between items-center mb-2">
      <p class="text-sm text-gray-600">Total</p>
      <p class="text-sm font-medium" id="totalPrice">Rp. 0</p>
    </div>
    <button class="bg-[#4a2c16] w-full text-white py-2 rounded-lg font-medium" id="cartBtn">
      Cart (0)
    </button>
  </div>
</div>

  <script>
    let cartCount = 0;
    let total = 0;
    let currentProduct = { name: "", price: 0, qty: 1 };

    function openDetail(name, price) {
      currentProduct = { name, price, qty: 1 };
      document.getElementById("modalProductName").innerText = name;
      document.getElementById("modalProductPrice").innerText = "Rp. " + price.toLocaleString("id-ID");
      document.getElementById("modalQty").innerText = 1;
      document.getElementById("detailModal").classList.remove("hidden");
      document.getElementById("detailModal").classList.add("flex");
    }

    function closeDetail() {
      document.getElementById("detailModal").classList.add("hidden");
      document.getElementById("detailModal").classList.remove("flex");
    }

    function increaseQty() {
      currentProduct.qty++;
      updateModalTotal();
    }

    function decreaseQty() {
      if (currentProduct.qty > 1) {
        currentProduct.qty--;
        updateModalTotal();
      }
    }

    function updateModalTotal() {
      const totalPrice = currentProduct.price * currentProduct.qty;
      document.getElementById("modalQty").innerText = currentProduct.qty;
      document.getElementById("modalProductPrice").innerText = "Rp. " + totalPrice.toLocaleString("id-ID");
    }

    function addToCartFromModal() {
      cartCount += currentProduct.qty;
      total += currentProduct.price * currentProduct.qty;
      document.getElementById("cartBtn").innerText = `Cart (${cartCount})`;
      document.getElementById("totalPrice").innerText = `Rp. ${total.toLocaleString("id-ID")}`;
      closeDetail();
    }

  // Tombol Cart di bottom
  document.getElementById("cartBtn").addEventListener("click", function () {
    openCart();
  });

  function openCart() {
    document.getElementById("cartModal").classList.remove("hidden");
  }

  function closeCart() {
    document.getElementById("cartModal").classList.add("hidden");
  }

  function increaseQty(id) {
    const qtyEl = document.getElementById("qty-" + id);
    qtyEl.textContent = parseInt(qtyEl.textContent) + 1;
    updateTotal();
  }

  function decreaseQty(id) {
    const qtyEl = document.getElementById("qty-" + id);
    let value = parseInt(qtyEl.textContent);
    if (value > 1) {
      qtyEl.textContent = value - 1;
      updateTotal();
    }
  }

  function updateTotal() {
    let qty1 = parseInt(document.getElementById("qty-1").textContent);
    let total = qty1 * 25000;
    document.getElementById("cartTotal").textContent = "Rp. " + total.toLocaleString("id-ID");
    document.getElementById("totalPrice").textContent = "Rp. " + total.toLocaleString("id-ID");
  }
  </script>

</body>
</html>
