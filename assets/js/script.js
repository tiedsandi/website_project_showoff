document.getElementById('menu-btn').addEventListener('click', function () {
  document.getElementById('mobile-menu').classList.toggle('hidden');
});

document.getElementById('user-menu-btn')?.addEventListener('click', function () {
  document.getElementById('user-menu').classList.toggle('hidden');
});

function openImage(src) {
  document.getElementById('modalImg').src = src;
  document.getElementById('imageModal').classList.remove('hidden');
}

function closeImage() {
  document.getElementById('imageModal').classList.add('hidden');
}
