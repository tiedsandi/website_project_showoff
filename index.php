

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <main class="max-w-7xl mx-auto p-4 md:p-8">
    <header class="mb-8 flex flex-col md:flex-row justify-between items-center">
      <h1 class="text-4xl font-bold text-indigo-500">BlogCase</h1>
      <a href="login.php" class="mt-4 md:mt-0 bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Login</a>
    </header>

    <!-- Hero Section -->
    <section class="border border-slate-200 bg-stone-100 p-6 md:p-14 rounded-xl text-center">
      <h1 class="text-3xl md:text-5xl font-bold">Discover Creative Work</h1>
      <p class="text-slate-400 text-sm md:text-base mt-2">
        The world's leading platform for creative professionals and storytellers
      </p>

      <!-- Filter Section -->
      <div class="mt-6 flex flex-wrap justify-center gap-2 md:gap-4">
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-sm md:text-lg">All</button>
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-sm md:text-lg">Design</button>
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-sm md:text-lg">Art</button>
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-sm md:text-lg">Photography</button>
      </div>

      <!-- Search Bar -->
      <div class="mt-4 flex justify-center">
        <input type="text" class="border border-slate-300 rounded-xl px-4 py-2 w-full md:w-1/3 text-sm" placeholder="Search">
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
      <!-- Card -->
      <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-md">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-md">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-md">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-md">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-md">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-md">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </section>

    <!-- Button Load More -->
    <div class="flex justify-center">
      <button class="bg-indigo-500 hover:bg-fuchsia-500 px-6 py-3 text-white rounded-xl text-lg mt-6">Load More</button>
    </div>

    <!-- Footer -->
    <footer class="mt-8 text-center">
      <p class="text-slate-400 text-sm">© 2025 ShowBlog. All rights reserved.</p>
    </footer>
  </main>
</body>
</html>
