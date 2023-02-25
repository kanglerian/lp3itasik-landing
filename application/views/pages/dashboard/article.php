<div class="flex-1 overflow-x-auto">
  <div class="space-y-2 mb-2 pl-2">
    <a href="<?= base_url() ?>article">
      <h1 class="font-bold text-2xl">Artikel</h1>
    </a>
    <p class="text-gray-500 text-sm mb-2">Fitur ini memungkinkan Anda untuk menambah, menghapus, dan mengedit artikel di Politeknik LP3I Kampus Tasikmalaya.</p>
    <a href="<?= base_url() ?>article/new" role="button" class="inline-block text-center text-white px-4 py-2 text-sm rounded bg-sky-500 md:hover:bg-sky-600"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
  </div>
  <div class="relative overflow-x-auto border border-gray-300 rounded-lg mt-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="md:w-1/12 px-6 py-3">
            No
          </th>
          <th scope="col" class="md:w-4/12 px-6 py-3">
            Judul
          </th>
          <th scope="col" class="md:w-3/12 px-3 py-3">
            Tanggal
          </th>
          <th scope="col" class="md:w-2/12 px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0; ?>
        <?php if (!empty($articles)) { ?>
          <?php foreach ($articles as $number => $article) : ?>
            <tr class="bg-white border-b transition ease-in-out duration-200 hover:bg-gray-50">
              <td class="px-6 py-4">
                <?= $number + 1 ?>
              </td>
              <th scope="row" class="px-6 py-3">
                <a target="_blank" href="<?= base_url() ?>about/article/<?= $article->uuid ?>" role="button" class="font-bold text-blue-500"><?= $article->title ?></a>
              </th>
              </td>
              <th scope="row" class="px-3 py-3">
                <span class="font-medium"><?= date("d F Y", strtotime($article->date)) ?></span>
              </th>
              <td colspan="2" class="space-y-2 px-6 py-4">
                <!-- Toggle -->
                <a role="button" href="<?= base_url() ?>article/change/<?= $article->id ?>" class="block md:inline-block text-center text-white px-2 py-1 text-sm rounded <?= $article->status == "1" ? 'bg-blue-600' : 'bg-red-600' ?>"><?= $article->status == "1" ? '<i class="fa-solid fa-toggle-on fa-1x"></i>' : '<i class="fa-solid fa-toggle-off fa-1x"></i>' ?></a>
                <!-- Edit -->
                <a href="<?= base_url() ?>article/detail/<?= $article->uuid ?>" role="button" class="block md:inline-block text-center text-white px-2 py-1 text-sm rounded bg-yellow-500"><i class="fa-solid fa-pen-to-square"></i>
                </a>
                <!-- Delete -->
                <a role="button" data-modal-target="popup-modal<?= $article->id ?>" data-modal-toggle="popup-modal<?= $article->id ?>" class="block md:inline-block text-center bg-red-600 px-2 py-1 text-sm rounded text-white"><i class="fa-solid fa-trash"></i></a>
                <div id="popup-modal<?= $article->id ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                  <div class="relative w-full h-full max-w-md md:h-auto">
                    <div class="relative bg-white rounded-lg shadow">
                      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal<?= $article->id ?>">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                      <div class="p-6 text-center">
                        <i class="block mb-5 text-gray-500 fa-solid fa-circle-exclamation fa-3x"></i>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Kamu yakin akan menghapus <?= $article->title ?>?</h3>
                        <a href="<?= base_url() ?>article/delete/<?= $article->id ?>" role="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                          Ya, tentu saja!
                        </a>
                        <button data-modal-hide="popup-modal<?= $article->id ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak, batalkan</button>
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
  const editInformation = (id, title, description, source, status, date) => {
    var editor = CKEDITOR.instances.description;
    let titleInput = document.getElementById('title');
    let descriptionInput = document.getElementById('description');
    let sourceInput = document.getElementById('source');
    let statusInput = document.getElementById('status');
    let dateInput = document.getElementById('date');
    let form = document.getElementById('form');
    let btnSubmit = document.getElementById('btnSubmit');
    let info = document.getElementById('info');
    titleInput.value = title;
    editor.setData(description);
    descriptionInput.innerHTML = description;
    sourceInput.value = source;
    statusInput.value = status;
    dateInput.value = date;

    btnSubmit.innerHTML = "Ubah";
    form.setAttribute("action", `<?= base_url() ?>article/update/${id}`);
    info.classList.remove('hidden');
  }
</script>