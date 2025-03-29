<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Portfolio</title>
  <script defer src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/choices.js/10.2.0/choices.min.css">
</head>
<body class="bg-gray-100">
  <main class="max-w-7xl mx-auto p-6 md:p-8">
    
    <!-- Header -->
    <?php include '../inc/layouts/header.php'; ?>
    
    <!-- Card Wrapper -->
    <div class="bg-white p-8 rounded-lg border border-gray-300 shadow-md max-w-4xl mx-auto">
      <h2 class="text-2xl font-bold mb-6 text-gray-800">Add/Edit Portfolio</h2>
      
      <form action="process_portfolio.php" method="POST" enctype="multipart/form-data">

        <!-- Title -->
        <div class="mb-4">
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" id="title" name="title" class="mt-1 block w-full border border-gray-400 rounded-md px-4 py-2 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500 text-base" required>
        </div>

        <!-- GitHub & Website Link -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div>
            <label for="github_link" class="block text-sm font-medium text-gray-700">GitHub Link</label>
            <input type="url" id="github_link" name="github_link" class="mt-1 block w-full border border-gray-400 rounded-md px-4 py-2 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500 text-base">
          </div>
          <div>
            <label for="website_link" class="block text-sm font-medium text-gray-700">Website Link</label>
            <input type="url" id="website_link" name="website_link" class="mt-1 block w-full border border-gray-400 rounded-md px-4 py-2 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500 text-base">
          </div>
        </div>

        <!-- Description -->
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id="description" name="description" rows="4" class="mt-1 block w-full border border-gray-400 rounded-md px-4 py-2 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500 text-base"></textarea>
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
          <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
          <input type="file" id="image" name="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-400 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
        </div>

        <!-- Categories -->
        <div class="mb-4">
          <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
          <select id="categories" name="categories[]" class="mt-1 block w-full border border-gray-400 rounded-md px-4 py-2 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500 text-base">
            <option value="web">Web Development</option>
            <option value="mobile">Mobile Development</option>
            <option value="design">Design</option>
            <option value="other">Other</option>
          </select>
        </div>

        <!-- Tags (Multi-Select Dropdown) -->
        <div class="mb-4">
          <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
          <select id="tags" name="tags[]" multiple class="mt-1 block w-full border border-gray-400 rounded-md px-4 py-2 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500 text-base">
            <option value="">Select tags...</option>
          </select>
        </div>

        <!-- Save Button -->
        <div class="mt-6">
          <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
          </button>
        </div>

      </form>
    </div>

    <!-- Footer -->
    <?php include '../inc/layouts/footer.php'; ?>

  </main>

  <!-- Load JavaScript -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/choices.js/10.2.0/choices.min.js"></script>
  <script defer src="../assets/js/script.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tagElement = document.querySelector("#tags");

      if (tagElement) {
        const tagSelect = new Choices(tagElement, {
          removeItemButton: true,
          placeholder: true,
          placeholderValue: "Select or add tags...",
          duplicateItemsAllowed: false,
          allowHTML: false,
        });

        // Tambahkan pilihan dummy
        const dummyTags = [
          { value: "javascript", label: "JavaScript" },
          { value: "php", label: "PHP" },
          { value: "laravel", label: "Laravel" },
          { value: "react", label: "React" },
          { value: "vue", label: "Vue.js" },
          { value: "tailwind", label: "Tailwind CSS" },
          { value: "nodejs", label: "Node.js" },
        ];

        tagSelect.setChoices(dummyTags, "value", "label", true);
      }
    });
  </script>

</body>
</html>
