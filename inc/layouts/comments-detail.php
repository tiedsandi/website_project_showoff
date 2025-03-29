<h2 class="text-xl font-semibold mb-2">Comments</h2>
  <!-- Scroll untuk comment jika terlalu panjang -->
  <div class="max-h-48 overflow-y-auto border p-2 rounded">
      <ul class="mb-4">
          <li class="mb-2">Comment 1: Great post!</li>
          <li class="mb-2">Comment 2: Very informative.</li>
          <li class="mb-2">Comment 3: I love this!</li>
          <li class="mb-2">Comment 4: Thanks for sharing.</li>
          <li class="mb-2">Comment 5: Amazing content.</li>
          <li class="mb-2">Comment 1: Great post!</li>
          <li class="mb-2">Comment 2: Very informative.</li>
          <li class="mb-2">Comment 3: I love this!</li>
          <li class="mb-2">Comment 4: Thanks for sharing.</li>
          <li class="mb-2">Comment 5: Amazing content.</li>
          <li class="mb-2">Comment 1: Great post!</li>
          <li class="mb-2">Comment 2: Very informative.</li>
          <li class="mb-2">Comment 3: I love this!</li>
          <li class="mb-2">Comment 4: Thanks for sharing.</li>
          <li class="mb-2">Comment 5: Amazing content.</li>
          <li class="mb-2">Comment 1: Great post!</li>
          <li class="mb-2">Comment 2: Very informative.</li>
          <li class="mb-2">Comment 3: I love this!</li>
          <li class="mb-2">Comment 4: Thanks for sharing.</li>
          <li class="mb-2">Comment 5: Amazing content.</li>
      </ul>
  </div>
  <?php if (isset($_SESSION['user_id'])): ?>
    <form action="../actions/add_comment.php" method="POST" class="mt-4">
      <textarea name="comment" rows="3" class="w-full p-2 border rounded" placeholder="Write your comment here..." required></textarea>
      <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Post Comment</button>
    </form>
  <?php else: ?>
    <p class="mt-4 text-gray-500">Please <a href="../login.php" class="text-blue-500 hover:underline">log in</a> to post a comment.</p>
  <?php endif; ?>