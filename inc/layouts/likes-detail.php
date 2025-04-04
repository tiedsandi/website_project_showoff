<div class="mt-4 flex justify-between items-center">
  <h2 class="text-xl font-semibold mb-2">Likes</h2>
  <!-- Icon Like -->
  <div class="flex items-center space-x-2">
  <?php if (isset($_SESSION['user_id'])): ?>
    <button id="like-btn" class="flex items-center space-x-1 bg-gray-100 px-3 py-2 rounded hover:bg-gray-200 transition">
    <svg id="like-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500 transition-colors duration-300">
      <path fill-rule="evenodd" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" clip-rule="evenodd"/>
    </svg>
    <span id="like-count" class="text-sm font-medium">120</span>
    </button>
  <?php else: ?>
    <p class="text-gray-500 mt-2">Please <a href="../login.php" class="text-blue-500 hover:underline">log in</a> to like this post.</p>
  <?php endif; ?>
  </div>
</div>

<!-- JavaScript -->
<script>
  $(document).ready(function () {
    $("#like-btn").click(function () {
        let portofolioId = 1; // Ganti dengan ID portfolio yang benar
        
          $.post("../actions/like.php", { portofolio_id: portofolioId }, function (data) {
              let response = JSON.parse(data);
              
              if (response.status === "success") {
                  if (response.liked) {
                      $("#like-icon").removeClass("text-gray-500").addClass("text-red-500");
                  } else {
                      $("#like-icon").removeClass("text-red-500").addClass("text-gray-500");
                  }
                  $("#like-count").text(response.like_count);
              } else {
                  alert(response.message);
              }
          });
      });
  });
</script>