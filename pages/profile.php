<?php session_start(); ?>

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
  <main class="max-w-7xl mx-auto p-6 md:p-8">
    
    <!-- Header -->
    <?php include '../inc/layouts/header.php'; ?>

    <!-- Profile Card -->
    <section class="bg-white p-8 rounded-lg border border-gray-300 shadow-md max-w-lg mx-auto">
      
      <form action="update_profile.php" method="POST" enctype="multipart/form-data">

        <!-- Profile Picture -->
        <div class="mb-6 text-center">
          <label class="block text-sm font-medium text-gray-700 mb-2">Profile Picture</label>
          <div class="relative inline-block">
            <img id="profile_preview" src="../assets/img/default-avatar.png" class="w-28 h-28 rounded-full border border-gray-300 object-cover" alt="Profile Preview">
            <input type="file" name="profile_picture" id="profile_picture" class="hidden">
            <button type="button" id="upload_button" class="absolute bottom-0 right-0 bg-blue-600 text-white px-2 py-1 text-xs rounded-full shadow hover:bg-blue-700 transition duration-200">Change</button>
          </div>
        </div>

        <!-- Username -->
        <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" name="username" id="username" class="mt-1 block w-full rounded-md border border-gray-400 px-4 py-2 text-gray-700 focus:ring-blue-500 focus:border-blue-500 text-base" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border border-gray-400 px-4 py-2 text-gray-700 focus:ring-blue-500 focus:border-blue-500 text-base" required>
        </div>

        <!-- Password -->
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="relative">
            <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border border-gray-400 px-4 py-2 pr-10 text-gray-700 focus:ring-blue-500 focus:border-blue-500 text-base" required>
            <button type="button" id="togglePassword" class="absolute inset-y-0 right-3 flex items-center text-gray-500 text-sm font-semibold hover:text-blue-600 transition duration-200">Show</button>
          </div>
        </div>

        <!-- Bio -->
        <div class="mb-4">
          <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
          <textarea name="bio" id="bio" rows="4" class="mt-1 block w-full rounded-md border border-gray-400 px-4 py-2 text-gray-700 focus:ring-blue-500 focus:border-blue-500 text-base"></textarea>
        </div>

        <!-- Buttons -->
        <div class="flex justify-between mt-6">
          <a href="dashboard.php" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition duration-200">Back</a>
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-200">Save Changes</button>
        </div>

      </form>
    </section>

    <!-- Footer -->
    <?php include '../inc/layouts/footer.php'; ?>

  </main>

  <!-- JavaScript: Show/Hide Password & Image Preview -->
  <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordField = document.getElementById('password');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      this.textContent = type === 'password' ? 'Show' : 'Hide';
    });

    document.getElementById('upload_button').addEventListener('click', function () {
      document.getElementById('profile_picture').click();
    });

    document.getElementById('profile_picture').addEventListener('change', function (event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          document.getElementById('profile_preview').setAttribute('src', e.target.result);
        };
        reader.readAsDataURL(file);
      }
    });
  </script>

</body>
</html>
