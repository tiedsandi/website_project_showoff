<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="bg-gray-100">
  <main class="max-w-7xl mx-auto p-4 md:p-8">
    <?php include '../inc/layouts/header.php'; ?>

  <section class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto ">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Profile</h2>
    <form action="update_profile.php" method="POST" enctype="multipart/form-data">
      
      <!-- Profile Picture -->
      <div class="mb-4">
        <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
        <input type="file" name="profile_picture" id="profile_picture" class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition duration-200">
      </div>

      <!-- Username -->
      <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" name="username" id="username" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-3 py-2" required>
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-3 py-2" required>
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <div class="relative">
          <input type="password" name="password" id="password" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-3 py-2 pr-10" required>
          <button type="button" id="togglePassword" class="absolute inset-y-0 right-3 flex items-center text-gray-500 text-sm font-semibold hover:text-blue-600 transition duration-200">Show</button>
        </div>
      </div>

      <!-- Bio -->
      <div class="mb-4">
        <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
        <textarea name="bio" id="bio" rows="4" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-3 py-2"></textarea>
      </div>

      <!-- Buttons -->
      <div class="flex justify-between mt-6">
        <a href="dashboard.php" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition duration-200">Back</a>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">Edit</button>
      </div>

    </form>
  </section>

  <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordField = document.getElementById('password');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      this.textContent = type === 'password' ? 'Show' : 'Hide';
    });
  </script>


    <?php include '../inc/layouts/footer.php'; ?> 
  </main>
  <script src="../assets/js/script.js"></script>
</body>
</html>
