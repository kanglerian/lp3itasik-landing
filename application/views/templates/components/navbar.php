<nav class="bg-cyan-700 text-white text-xs py-3">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center">
      <div class="flex items-center gap-2">
        <button id="dropdownNavbarLink" data-dropdown-toggle="language" class="flex items-center justify-start w-auto py-2 text-white rounded">
          <?php if ($this->session->userdata('language') == 'en') { ?>
            <img src="<?= base_url() ?>public/flag/en.gif" class="inline-block w-6 rounded mr-2">English
          <?php } else { ?>
            <img src="<?= base_url() ?>public/flag/id.gif" class="inline-block w-6 rounded mr-2">Indonesia
          <?php } ?>
          <i class="ml-2 fa-solid fa-chevron-down"></i></button>
        <div id="language" class="z-10 hidden font-normal bg-white rounded-lg shadow w-44">
          <ul class="py-3 text-xs text-gray-700 px-4 space-y-2">
            <li>
              <a href="<?= base_url() ?>Language/change/en"><img src="<?= base_url() ?>public/flag/en.gif" class="inline-block w-10 rounded mr-2 shadow">English</a>
            </li>
            <li>
              <a href="<?= base_url() ?>Language/change/id"><img src="<?= base_url() ?>public/flag/id.gif" class="inline-block w-10 rounded mr-2 shadow">Indonesia</a>
            </li>
          </ul>
        </div>
        |
        <span class="hidden md:inline"><i class="fa-solid fa-phone"></i> (0265)311766</span>
        <a href="https://bit.ly/InfoPMBLP3ITasik" target="_blank"><i class="fa-brands fa-whatsapp"></i> 0813-1360-8558</a>
      </div>
      <div class="flex gap-3">
        <a href="#" class="hidden lg:inline">Career Center</a>
        <?php if ($this->session->userdata('language') == 'en') { ?>
          <a href="http://brosur.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Digital Brochure</a>
          <a href="https://virtualkampus.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Virtual Campus</a>
        <?php } else { ?>
          <a href="http://brosur.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Brosur Digital</a>
          <a href="https://virtualkampus.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Virtual Kampus</a>
        <?php } ?>
        <?php if ($this->session->userdata('logged')) { ?>
          <a href="<?= base_url() ?>banner"><i class="fa-solid fa-user-circle"></i> <?= $this->session->userdata('username'); ?></a>
        <?php } else { ?>
          <a href="<?= base_url() ?>auth"><i class="fa-solid fa-right-to-bracket"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>

<header class="container mt-4 px-4 mx-auto text-sm">
  <div class="md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center">
      <span>
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>public/img/lp3i.svg" width="200px" alt="Politeknik LP3I Kampus Tasikmalaya" /></a>
      </span>
      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <button id="navbarMenu" type="button" class="p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
          <i class="fa-solid fa-bars"></i>
        </button>
      </span>
    </div>
    <div class="hidden w-full md:w-auto md:block transition duration-200 ease-in-out" data-attribute="0" id="navbar-dropdown">
      <ul class="flex flex-col mt-4 p-3 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
        <li>
          <a href="<?= base_url() ?>" class="block md:inline py-2 pl-3 pr-4 <?= $this->uri->segment(1) == '' ? 'font-bold text-cyan-700 md:hover:text-cyan-800' : 'font-medium text-gray-700 md:hover:text-cyan-700' ?> md:p-0">
            <?= $this->session->userdata('language') == 'en' ? 'Home' : 'Beranda' ?>
          </a>
        </li>
        <li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="about" class="flex items-center justify-between w-full py-2 pl-3 pr-4 <?= $this->uri->segment(1) == 'about' ? 'font-bold text-cyan-700' : 'text-gray-700' ?> rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-800 md:p-0 md:w-auto">
            <?= $this->session->userdata('language') == 'en' ? 'About Campus' : 'Tentang Kampus' ?>
            <i class="ml-2 fa-solid fa-chevron-down"></i></button>
          <!-- Dropdown menu -->
          <div id="about" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-gray-700">
              <li>
                <a href="<?= base_url() ?>about/lp3i" class="block px-4 py-2 hover:bg-gray-100">
                  <?= $this->session->userdata('language') == 'en' ? 'What is LP3I?' : 'Apa itu LP3I?' ?>
                </a>
              </li>
              <li>
                <a href="<?= base_url() ?>about/branding" class="block px-4 py-2 hover:bg-gray-100">
                  <?= $this->session->userdata('language') == 'en' ? 'Logos and Colors' : 'Logo & Warna' ?>
                </a>
              </li>
              <li>
                <a href="<?= base_url() ?>about/organization" class="block px-4 py-2 hover:bg-gray-100">
                  <?= $this->session->userdata('language') == 'en' ? 'Organizational Structure' : 'Struktur Organisasi' ?>
                </a>
              </li>
              <li>
                <a href="<?= base_url() ?>about/facilities" class="block px-4 py-2 hover:bg-gray-100">
                  <?= $this->session->userdata('language') == 'en' ? 'Campus Facilities' : 'Fasilitas Kampus' ?>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?= base_url() ?>programs" class="block md:inline py-2 pl-3 pr-4 <?= $this->uri->segment(1) == 'programs' ? 'font-bold text-cyan-700' : 'text-gray-700' ?>  md:hover:text-cyan-800 md:p-0">
            <?= $this->session->userdata('language') == 'en' ? 'Study Programs' : 'Program Studi' ?>
          </a>
        </li>
        <li>
          <a href="<?= base_url() ?>students" class="block md:inline py-2 pl-3 pr-4 <?= $this->uri->segment(1) == 'students' ? 'font-bold text-cyan-700' : 'text-gray-700' ?>  md:hover:text-cyan-800 md:p-0">
            <?= $this->session->userdata('language') == 'en' ? 'Student Organizations' : 'Organisasi Mahasiswa' ?>
          </a>
        </li>
        <li>
          <a href="<?= base_url() ?>articles" class="block md:inline py-2 pl-3 pr-4 <?= $this->uri->segment(1) == 'articles' ? 'font-bold text-cyan-700' : 'text-gray-700' ?>  md:hover:text-cyan-800 md:p-0">
            <?= $this->session->userdata('language') == 'en' ? 'Article' : 'Artikel' ?>
          </a>
        </li>
        <li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="service" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 md:w-auto">
            <?= $this->session->userdata('language') == 'en' ? 'Service' : 'Layanan' ?>
            <i class="ml-2 fa-solid fa-chevron-down"></i></button>
          <!-- Dropdown menu -->
          <div id="service" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-gray-700">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                  <?= $this->session->userdata('language') == 'en' ? 'Academic' : 'Akademik' ?>

                </a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                  SIAKAD
                </a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                  LMS
                </a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                  Career Center
                </a>
              </li>
            </ul>
          </div>
        </li>
        <div class="py-2 md:p-0">
          <a role="button" target="_blank" href="https://api.whatsapp.com/send?phone=6281313608558&text=Hallo%20Kak,%20Boleh%20minta%20informasi%20Pendaftaran%20Mahasiswa%20Politeknik%20LP3I%20Kampus%20Tasikmalaya%3F" class="transition ease-in-out duration-300 block md:inline py-2 px-4 text-white bg-cyan-700 hover:bg-cyan-800 rounded"><i class="fa-solid fa-headset mr-1"></i> Info PMB</a>
        </div>
      </ul>
    </div>
  </div>
</header>