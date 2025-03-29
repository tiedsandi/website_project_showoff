<?php session_start();?>

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
    <?php include '../inc/layouts/header.php'; ?>

    <!-- Hero Section -->
    <section class="border border-slate-200 bg-white p-6 md:p-14 rounded-xl text-center">
      <h1 class="text-3xl md:text-5xl font-bold">Discover Creative Work</h1>
      <p class="text-slate-400 text-sm md:text-base mt-2">
        The world's leading platform for creative professionals and storytellers
      </p>

      <!-- Filter Section -->
      <div class="mt-6 flex flex-wrap justify-center gap-2 md:gap-4">
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-6 py-2 text-white rounded-lg text-base">All</button>
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-6 py-2 text-white rounded-lg text-base">Design</button>
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-6 py-2 text-white rounded-lg text-base">Art</button>
        <button class="bg-indigo-500 hover:bg-fuchsia-500 px-6 py-2 text-white rounded-lg text-base">Photography</button>
      </div>

      <!-- Search Bar -->
      <div class="mt-4 flex justify-center">
        <input type="text" class="border border-slate-300 rounded-lg px-4 py-2 w-10/12 md:w-1/3 text-base" placeholder="Search">
      </div>
    </section>

   <!-- Gallery Section -->
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
      <!-- Card -->
      <a href="detail.php?id=1" class="bg-white rounded-xl p-4 border border-slate-200 shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl aspect-[4/3]">
        
        <h2 class="text-xl font-bold mt-4">Design</h2>
        <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        
        <!-- Like & Comment Section -->
        <div class="flex justify-between items-center mt-4 text-gray-500">
          <!-- Likes -->
          <div class="flex items-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-red-500">
              <path fill-rule="evenodd" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm font-medium">120</span>
          </div>

          <!-- Comments -->
          <div class="flex items-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-blue-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h6m5 4h-4l-3 3-3-3H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2z" />
            </svg>
            <span class="text-sm font-medium">45</span>
          </div>
        </div>
      </a>
    </section>



    <!-- Button Load More -->
    <div class="flex justify-center">
      <button class="bg-indigo-500 hover:bg-fuchsia-500 px-6 py-3 text-white rounded-xl text-lg mt-10 shadow-md hover:shadow-lg transition-all">Load More</button>
    </div>


    <?php include '../inc/layouts/footer.php'; ?> 
  </main>

  <script src="../assets/js/script.js"></script>
</body>
</html>
