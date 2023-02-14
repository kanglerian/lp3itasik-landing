<div class="flex-1 overflow-x-auto">
  <div class="space-y-2 mb-2 pl-2">
    <a href="<?= base_url() ?>organization">
      <h1 class="font-bold text-2xl">Organization</h1>
    </a>
    <p class="text-gray-500 text-sm">Gunakan pengaturan ini untuk menyesuaikan bagian informasi di website halaman depan. Tambahkan, ganti atau hapus informasi, seperti Pendidikan dan Karier, dan Pengumuman.</p>
  </div>
  <form id="form" action="<?= base_url() ?>organization/insert" class="flex flex-col md:flex-row md:items-start gap-4 py-3 px-2" method="post" enctype="multipart/form-data">
    <div class="flex-1">
      <div class="flex flex-col gap-2">
        <input type="text" name="title" id="title" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Type title.." required>
        <select name="status" id="status" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
          <option>Pilih</option>
          <option value="1">Aktif</option>
          <option value="0">Tidak aktif</option>
        </select>
      </div>
    </div>
    <div class="flex-1">
      <textarea rows="4" name="drawio" id="drawio" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Type link drawio.." required></textarea>
    </div>
    <div>
      <button type="submit" class="bg-cyan-600 text-white text-sm py-2 px-3 rounded-md"><i class="fa-solid fa-floppy-disk"></i> <span id="btnSubmit">Simpan</span></button>
    </div>
  </form>
  <div id="info" class="hidden flex p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
    <i class="fa-solid fa-circle-info"></i>
    <div class="ml-3 text-sm font-medium">
      <span>Isi kolom di atas untuk mengubah data.</span>
    </div>
    <button onclick="document.getElementById('info').classList.add('hidden')" type="button" class="ml-auto mr-2">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>
  <?php if ($this->session->flashdata('message')) { ?>
    <div id="alert" class="flex p-4 mb-4 <?= $this->session->flashdata('message')['status'] == 'error' ? 'bg-red-50 text-red-800' : 'bg-green-50 text-green-800' ?> rounded-lg" role="alert">
      <?= $this->session->flashdata('message')['status'] == 'error' ? '<i class="fa-solid fa-triangle-exclamation"></i>' : '<i class="fa-solid fa-circle-check"></i>' ?>
      <div class="ml-3 text-sm font-medium">
        <?= $this->session->flashdata('message')['message']; ?>
      </div>
      <button type="button" class="ml-auto mr-2" data-dismiss-target="#alert" aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
  <?php } ?>
  <div class="relative overflow-x-auto border border-gray-300 rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="md:w-1/12 px-6 py-3">
            No
          </th>
          <th scope="col" class="md:w-4/12 px-6 py-3">
            Title
          </th>
          <th scope="col" class="md:w-2/12 px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0; ?>
        <?php if (!empty($organizations)) { ?>
          <?php foreach ($organizations as $number => $organization) : ?>
            <tr class="bg-white border-b transition ease-in-out duration-200 hover:bg-gray-50">
              <td class="px-6 py-4">
                <?= $number + 1 ?>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                <?= $organization->title ?>
              </th>
              <td colspan="2" class="space-y-2 px-6 py-4">
                <!-- Toggle -->
                <a role="button" href="<?= base_url() ?>organization/change/<?= $organization->id ?>" class="block md:inline text-center text-white px-2 py-1 text-sm rounded <?= $organization->status == "1" ? 'bg-blue-600' : 'bg-red-600' ?>"><?= $organization->status == "1" ? '<i class="fa-solid fa-toggle-on fa-1x"></i>' : '<i class="fa-solid fa-toggle-off fa-1x"></i>' ?></a>
                <!-- Edit -->
                <a role="button" onclick="editInformation(`<?= $organization->id ?>`,`<?= $organization->title ?>`,`<?= $organization->drawio ?>`,`<?= $organization->status ?>`)" class="block md:inline text-center bg-amber-400 px-2 py-1 text-sm rounded text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                <!-- Delete -->
                <a role="button" data-modal-target="popup-modal<?= $organization->id ?>" data-modal-toggle="popup-modal<?= $organization->id ?>" class="block md:inline text-center bg-red-600 px-2 py-1 text-sm rounded text-white"><i class="fa-solid fa-trash"></i></a>
                <!-- Delete Modal -->
                <div id="popup-modal<?= $organization->id ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                  <div class="relative w-full h-full max-w-md md:h-auto">
                    <div class="relative bg-white rounded-lg shadow">
                      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal<?= $organization->id ?>">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                      <div class="p-6 text-center">
                        <i class="block mb-5 text-gray-500 fa-solid fa-circle-exclamation fa-3x"></i>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Kamu yakin akan menghapus <?= $organization->title ?>?</h3>
                        <a href="<?= base_url() ?>organization/delete/<?= $organization->id ?>" role="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                          Ya, tentu saja!
                        </a>
                        <button data-modal-hide="popup-modal<?= $organization->id ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak, batalkan</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Toggle -->
              </td>
            </tr>
          <?php endforeach; ?>
        <?php } else { ?>
          <tr class="bg-white border-b">
            <td colspan="6" class="text-center px-6 py-4">Data belum tersedia</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


<script>
  const editInformation = (id, title, drawio, status) => {
    let titleInput = document.getElementById('title');
    let drawioInput = document.getElementById('drawio');
    let statusInput = document.getElementById('status');
    let form = document.getElementById('form');
    let btnSubmit = document.getElementById('btnSubmit');
    let info = document.getElementById('info');
    titleInput.value = title;
    drawioInput.value = drawio;
    statusInput.value = status;
    btnSubmit.innerHTML = "Ubah";
    form.setAttribute("action", `<?= base_url() ?>organization/update/${id}`);
    info.classList.remove('hidden');
  }
</script>