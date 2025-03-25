<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
  <main class="w-7xl mx-auto p-8">
    <header class="mb-8 flex justify-between  items-center">
      <h1 class="text-4xl font-bold text-indigo-500">
        ShowBlog
      </h1>
      <!-- login -->
      <a href="login.php" class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Login</a>
    </header>
    <section class=" border border-slate-200 bg-stone-100 p-14 rounded-xl">
      <div class="flex flex-col items-center justify-center gap-4">
        <h1 class="text-5xl font-bold ">Discover Creative Work</h1>
        <p class="text-slate-400 text-base">The world's leading platform for creative professionals and storytllers</p>
      </div>
      <div> <!-- filter -->
        <div class="flex justify-between items-center mt-8">
          <div class="flex gap-4">
            <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">All</button>
            <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Design</button>
            <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Art</button>
            <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Photography</button>
          </div>
          <div>
            <input type="text" class="border border-slate-200 rounded-xl px-4 py-2" placeholder="Search">
          </div>
        </div>    
    </section>

    <section class="grid grid-cols-3 gap-8 mt-8">
      <div class="bg-white rounded-xl p-4 border border-slate-200">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h1 class="text-2xl font-bold mt-4">Design</h1>
        <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>
      <div class="bg-white rounded-xl p-4 border border-slate-200">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h1 class="text-2xl font-bold mt-4">Design</h1>
        <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>
      <div class="bg-white rounded-xl p-4 border border-slate-200">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h1 class="text-2xl font-bold mt-4">Design</h1>
        <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>     
      <div class="bg-white rounded-xl p-4 border border-slate-200">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h1 class="text-2xl font-bold mt-4">Design</h1>
        <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>
      <div class="bg-white rounded-xl p-4 border border-slate-200">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h1 class="text-2xl font-bold mt-4">Design</h1>
        <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>
      <div class="bg-white rounded-xl p-4 border border-slate-200">
        <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" class="w-full h-48 object-cover rounded-xl">
        <h1 class="text-2xl font-bold mt-4">Design</h1>
        <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>   
    </section>

    <!-- button load more -->
     <div class="flex justify-center">
       <button class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg mt-8">Load More</button>
     </div>

     <footer class="mt-8">
        <p class="text-center text-slate-400">© 2021 ShowBlog. All rights reserved.</p>
    </footer>

  </main>
  
</body>
</html>