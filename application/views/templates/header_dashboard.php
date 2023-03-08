<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Politeknik LP3I Kampus Tasikmalaya</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>public/assets/favicon.png">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/owl.carousel.min.css">
  <link href="<?= base_url() ?>public/css/flowbite.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>public/css/tailwind.css" rel="stylesheet" />
  <script src="<?= base_url() ?>public/js/tailwind.js"></script>
</head>

<body class="bg-gray-50">
  <?php include('components/navbar.php'); ?>
  <section class="container mx-auto px-4 py-10">

    <div class="mb-5 mt-10">
      <button id="btnAside" class="block font-bold font-base"><i class="fa-solid fa-bars mr-2"></i> Pengaturan</button>
    </div>
    <div class="flex gap-5 mb-24">
      <aside id="aside" class="flex-2 z-[1] md:m-0 rounded-lg md:static md:block text-sm">
        <ul class="w-full text-sm font-medium space-y-2 text-gray-700 border p-3 border-gray-300 rounded-lg mb-4">
          <?php if ($this->session->userdata('role') === 'admin') : ?>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'banner' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>banner"><i class="fa-regular fa-circle-dot"></i> Banner</a></li>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'benefit' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>benefit"><i class="fa-regular fa-circle-dot"></i> Benefit</a></li>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'company' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>company"><i class="fa-regular fa-circle-dot"></i> Company</a></li>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'information' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>information"><i class="fa-regular fa-circle-dot"></i> Informasi</a></li>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'organization' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>organization"><i class="fa-regular fa-circle-dot"></i> Struktur Organisasi</a></li>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'facility' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>facility"><i class="fa-regular fa-circle-dot"></i> Fasilitas Kampus</a></li>
          <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'documentation' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>documentation"><i class="fa-regular fa-circle-dot"></i> Dokumentasi</a></li>
          <?php endif; ?>
          <?php if ($this->session->userdata('role') === 'pendidikan' || $this->session->userdata('role') === 'admin') : ?>
            <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'agenda' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>agenda"><i class="fa-regular fa-circle-dot"></i> Agenda</a></li>
            <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'media' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>media"><i class="fa-regular fa-circle-dot"></i> Media</a></li>
            <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'program' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>program"><i class="fa-regular fa-circle-dot"></i> Program Studi</a></li>
          <?php endif; ?>
          <?php if ($this->session->userdata('role') === 'dosen' || $this->session->userdata('role') === 'pendidikan' || $this->session->userdata('role') === 'admin') : ?>
            <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'article' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>article"><i class="fa-regular fa-circle-dot"></i> Artikel</a></li>
          <?php endif; ?>
          <?php if ($this->session->userdata('role') === 'pendidikan' || $this->session->userdata('role') === 'kemahasiswaan' || $this->session->userdata('role') === 'admin') : ?>
            <li class="w-full px-4 py-2 <?= $this->uri->segment(1) == 'student' ? 'bg-cyan-700 text-white' : 'bg-white hover:text-white' ?> hover:bg-cyan-800 hover:shadow transition ease-in-out border border-gray-200 rounded-lg"><a href="<?= base_url() ?>student"><i class="fa-regular fa-circle-dot"></i> Organisasi Mahasiswa</a></li>
          <?php endif; ?>
        </ul>
        <hr>
        <a role="button" class="inline-block text-center mt-5 w-full px-4 py-2 bg-red-500 hover:bg-red-600 text-white transition ease-in-out rounded-lg" href="<?= base_url() ?>auth/logout"><i class="fa-solid fa-right-to-bracket"></i> Logout</a>
      </aside>