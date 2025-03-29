<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">
  <main class="max-w-7xl mx-auto p-4 md:p-8">
    <?php include '../inc/layouts/header.php'; ?>

    <!-- Title & Add Portfolio Button (Responsive) -->
    <div class="flex flex-wrap items-center justify-between mb-4 gap-2 sm:gap-0">
      <h1 class="text-lg sm:text-2xl font-bold text-gray-800 w-full sm:w-auto text-center sm:text-left">
        Manage Portfolios
      </h1>
      <a href="add_edit-portofolio.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition w-full sm:w-auto text-center">
        ➕ Add Portfolio
      </a>
    </div>

    <div class="overflow-x-auto bg-white p-4 rounded-lg shadow-md">
      <table class="w-full border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-3 border-b text-left text-sm font-medium text-gray-700">Title</th>
            <th class="px-4 py-3 border-b text-left text-sm font-medium text-gray-700">Creation Date</th>
            <th class="px-4 py-3 border-b text-left text-sm font-medium text-gray-700">Status</th>
            <th class="px-4 py-3 border-b text-left text-sm font-medium text-gray-700">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Example data, replace with database query
          $portfolios = [
            ['id' => 1, 'title' => 'Portfolio 1', 'status' => 'Published', 'date' => '2023-01-01'],
            ['id' => 2, 'title' => 'Portfolio 2', 'status' => 'Draft', 'date' => '2023-02-15'],
            ['id' => 3, 'title' => 'Portfolio 3', 'status' => 'Published', 'date' => '2023-03-10'],
          ];

          foreach ($portfolios as $portfolio) {
            $checked = $portfolio['status'] === 'Published' ? 'checked' : '';
            echo "<tr class='hover:bg-gray-50 transition'>";
            echo "<td class='px-4 py-4 border-b text-sm text-gray-700'>{$portfolio['title']}</td>";
            echo "<td class='px-4 py-4 border-b text-sm text-gray-700'>{$portfolio['date']}</td>";
            echo "<td class='px-4 py-4 border-b text-sm text-gray-700'>
                    <input type='checkbox' class='status-toggle' data-id='{$portfolio['id']}' {$checked}>
                  </td>";
            echo "<td class='px-4 py-4 border-b text-sm text-gray-700 flex space-x-3'>
                    <a href='edit.php?id={$portfolio['id']}' class='text-blue-500 hover:text-blue-700'>
                      ✏️ Edit
                    </a>
                    <button class='text-red-500 hover:text-red-700 delete-btn' data-id='{$portfolio['id']}'>
                      🗑️ Delete
                    </button>
                  </td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>

    <!-- Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-lg font-semibold">Are you sure?</h3>
        <p class="text-sm text-gray-600">This action cannot be undone.</p>
        <div class="flex justify-center mt-4 space-x-4">
          <button id="cancelDelete" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
          <button id="confirmDelete" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
        </div>
      </div>
    </div>

    <?php include '../inc/layouts/footer.php'; ?> 
  </main>

  <script src="../assets/js/script.js"></script>

  <script>
    $(document).ready(function() {
      // Update Status
      $(".status-toggle").change(function() {
        let portfolioId = $(this).data("id");
        let newStatus = $(this).is(":checked") ? "Published" : "Draft";

        $.ajax({
          url: "update_status.php",
          type: "POST",
          data: { id: portfolioId, status: newStatus },
          success: function(response) {
            alert("Status updated successfully!");
          },
          error: function() {
            alert("Failed to update status.");
          }
        });
      });

      // Delete Confirmation
      let deleteId = null;
      $(".delete-btn").click(function() {
        deleteId = $(this).data("id");
        $("#deleteModal").removeClass("hidden");
      });

      $("#cancelDelete").click(function() {
        $("#deleteModal").addClass("hidden");
      });

      $("#confirmDelete").click(function() {
        if (deleteId) {
          $.ajax({
            url: "delete_portfolio.php",
            type: "POST",
            data: { id: deleteId },
            success: function(response) {
              alert("Portfolio deleted successfully!");
              location.reload(); // Refresh page after delete
            },
            error: function() {
              alert("Failed to delete portfolio.");
            }
          });
          $("#deleteModal").addClass("hidden");
        }
      });
    });
  </script>
</body>
</html>
