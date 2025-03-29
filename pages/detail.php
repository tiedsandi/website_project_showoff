<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="bg-gray-100">
  <main class="max-w-7xl mx-auto p-4 md:p-8">
    <?php include '../inc/layouts/header.php'; ?>

    <div class="flex flex-col md:flex-row gap-4">
        <!-- Left Content Section -->
        <!-- Modal untuk gambar besar -->
        <div id="imageModal" class="fixed p-2 lg:p-20 inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden z-50" onclick="closeImage()">
            <img id="modalImg" src="" class="max-w-full max-h-full rounded-xl shadow-lg">
        </div>
        <div class="flex-1 bg-white p-4 rounded shadow max-h-[75vh] overflow-auto md:max-h-none md:overflow-visible">
           <h2 class="text-2xl font-semibold mb-2 sticky top-0 bg-white z-40 p-2">Content Section</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem accusamus, nisi maiores sint amet temporibus optio ut, reiciendis nam adipisci enim iste inventore ad dolor non consequuntur dolorum, est quos corporis accusantium dicta sapiente dolore. Quibusdam aspernatur hic temporibus quam eos nihil nobis praesentium, nisi vitae nemo enim repellat blanditiis.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ea cumque enim atque facere laboriosam hic maxime dignissimos dolorem nesciunt esse cupiditate repellendus dolore voluptate aut culpa adipisci repellat molestias iste, quisquam earum! Et ipsa numquam assumenda explicabo rem. Pariatur, repellat inventore! Repellendus porro rerum laudantium ipsum perspiciatis fuga expedita, iusto quaerat error, ab obcaecati et hic molestiae nisi cupiditate id ex! Voluptatem nulla dolorem cumque aperiam atque saepe cupiditate illo harum consectetur est, soluta similique exercitationem tempora rem nemo, numquam molestias maxime beatae assumenda quia consequuntur in quidem impedit deleniti! Quod optio quibusdam eligendi eveniet blanditiis nobis cum, facere exercitationem enim officiis velit quisquam perferendis totam eum repudiandae. Porro, officia sint accusamus atque distinctio, tenetur labore delectus necessitatibus nam minima culpa vero voluptatem numquam repellat vitae incidunt dolorem mollitia possimus inventore rem pariatur eaque laudantium. Dignissimos nisi ducimus deserunt odio deleniti. Culpa assumenda officia hic laudantium. Et, inventore dicta!</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe vero impedit provident magni rerum eum molestiae similique suscipit iusto, consequatur ducimus vitae repudiandae incidunt aspernatur nulla pariatur minima consequuntur a aliquam iure, nam tempora. Voluptatum voluptas voluptates quaerat velit, dolores iusto nemo molestiae cupiditate modi veritatis neque obcaecati magni harum autem esse quis suscipit fuga ad quam? Nulla ex at impedit esse ipsam incidunt distinctio illum, obcaecati dignissimos facilis et!</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem accusamus, nisi maiores sint amet temporibus optio ut, reiciendis nam adipisci enim iste inventore ad dolor non consequuntur dolorum, est quos corporis accusantium dicta sapiente dolore. Quibusdam aspernatur hic temporibus quam eos nihil nobis praesentium, nisi vitae nemo enim repellat blanditiis.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ea cumque enim atque facere laboriosam hic maxime dignissimos dolorem nesciunt esse cupiditate repellendus dolore voluptate aut culpa adipisci repellat molestias iste, quisquam earum! Et ipsa numquam assumenda explicabo rem. Pariatur, repellat inventore! Repellendus porro rerum laudantium ipsum perspiciatis fuga expedita, iusto quaerat error, ab obcaecati et hic molestiae nisi cupiditate id ex! Voluptatem nulla dolorem cumque aperiam atque saepe cupiditate illo harum consectetur est, soluta similique exercitationem tempora rem nemo, numquam molestias maxime beatae assumenda quia consequuntur in quidem impedit deleniti! Quod optio quibusdam eligendi eveniet blanditiis nobis cum, facere exercitationem enim officiis velit quisquam perferendis totam eum repudiandae. Porro, officia sint accusamus atque distinctio, tenetur labore delectus necessitatibus nam minima culpa vero voluptatem numquam repellat vitae incidunt dolorem mollitia possimus inventore rem pariatur eaque laudantium. Dignissimos nisi ducimus deserunt odio deleniti. Culpa assumenda officia hic laudantium. Et, inventore dicta!</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe vero impedit provident magni rerum eum molestiae similique suscipit iusto, consequatur ducimus vitae repudiandae incidunt aspernatur nulla pariatur minima consequuntur a aliquam iure, nam tempora. Voluptatum voluptas voluptates quaerat velit, dolores iusto nemo molestiae cupiditate modi veritatis neque obcaecati magni harum autem esse quis suscipit fuga ad quam? Nulla ex at impedit esse ipsam incidunt distinctio illum, obcaecati dignissimos facilis et!</p>
        </div>

        <!-- Right Sidebar Section (Sticky) -->
        <div class="w-full md:w-1/3 bg-white p-4 rounded shadow md:sticky md:top-4 h-fit">
            <img src="https://images.unsplash.com/photo-1742218410181-9304b5548653?fm=jpg&q=60&w=3000" alt="image" class="w-full h-48 object-cover rounded-xl aspect-[4/3] cursor-pointer mb-4" onclick="openImage(this.src)">
            
            <?php include '../inc/layouts/likes-detail.php'; ?>
            <?php include '../inc/layouts/comments-detail.php'; ?>
        </div>
    </div>

    <?php include '../inc/layouts/footer.php'; ?> 
  </main>

  <script>
    function openImage(src) {
      document.getElementById("modalImg").src = src;
      document.getElementById("imageModal").classList.remove("hidden");
    }

    function closeImage() {
      document.getElementById("imageModal").classList.add("hidden");
    }
  </script>

  <script src="../assets/js/script.js"></script>
</body>
</html>
