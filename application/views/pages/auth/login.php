<section class="flex flex-col md:flex-row justify-center items-center h-screen gap-10">
  <section>
    <div class="flex justify-center items-center">
      <a href="<?= base_url() ?>" role="button"><img src="<?= base_url() ?>public/img/lp3i.svg" alt="Politeknik LP3I Kampus Tasikmalaya" class="w-60"></a>
    </div>
  </section>
  <div class="w-full md:w-1/3 bg-white p-6 shadow-lg rounded-xl transition ease-in-out md:hover:scale-105">
    <h1 class="font-bold text-xl text-gray-800">Sign In</h1>
    <p class="font-light text-sm text-gray-500 mt-1 mb-4">Please sign in to your account:</p>
    
    <?php if ($this->session->flashdata('message')) { ?>
      <div id="alert" class="flex justify-between bg-red-50 text-red-800 px-3 py-2 mb-4 rounded-lg text-sm font-medium">
        <p><?= $this->session->flashdata('message')['message']; ?></p>
        <button type="button" data-dismiss-target="#alert"><i class="fa-solid fa-xmark"></i></button>
      </div>
    <?php } ?>

    <form action="<?= base_url() ?>auth/login" method="post">
      <div class="mb-4">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username:</label>
        <input type="text" name="username" id="username" placeholder="Type your username" class="block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
      </div>
      <div class="mb-4">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password:</label>
        <input type="password" name="password" id="password" placeholder="Type your username" class="block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
      </div>
      <div>
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full md:w-auto px-5 py-2 text-center"><i class="fa-solid fa-right-to-bracket mr-1"></i> Masuk</button>
      </div>
    </form>
  </div>
</section>