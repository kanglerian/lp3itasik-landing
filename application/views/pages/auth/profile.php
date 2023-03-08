<div class="flex-1 overflow-x-auto">
  <div class="space-y-2 mb-2 pl-2">
    <a href="<?= base_url() ?>banner">
      <h1 class="font-bold text-2xl">Selamat Datang 👋<br><?= $this->session->userdata('fullname'); ?></h1>
    </a>
    <p class="text-gray-500 text-sm">Ini adalah fitur Admin Dashboard dimana <?= $this->session->userdata('fullname'); ?> bisa mengedit beberapa informasi yang tersedia di menu sebelah kiri. Silahkan diakses! 😊</p>
  </div>
</div>
