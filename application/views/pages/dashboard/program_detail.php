<div class="container mx-auto px-2 mt-10">
  <section class="space-y-2 mb-2 pl-2">
    <form id="form" action="<?= base_url() ?>media/update/" class="flex flex-col md:items-start gap-4 py-3 px-2" method="post" enctype="multipart/form-data">
      <div class="flex flex-col md:flex-row items-center justify-center gap-5">
        <div class="flex-1 flex flex-col gap-2">
          <h1 class="font-bold text-2xl mb-3">Informasi Kampus</h1>
          <input type="text" name="title" id="title" value="<?= $program->title ?>" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Type name major.." required>
          <select name="campus" id="campus" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
            <option value="<?= $program->campus ?>"><?= $program->campus ?></option>
            <option value="Politeknik LP3I Kampus Tasikmalaya">Politeknik LP3I Kampus Tasikmalaya</option>
            <option value="Kampus Utama">Kampus Utama</option>
          </select>
          <select name="level" id="level" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
            <option value="<?= $program->level ?>"><?= $program->level == '1' ? 'Aktif' : 'Tidak aktif' ?></option>
            <option value="Vokasi 2 Tahun">Vokasi 2 Tahun</option>
            <option value="D3">D3</option>
          </select>
          <select name="status" id="status" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
            <option value="<?= $program->status ?>"><?= $program->status == '1' ? 'Aktif' : 'Tidak aktif' ?></option>
            <option value="<?= $program->status == '1' ? '0' : '1' ?>"><?= $program->status == '1' ? 'Tidak aktif' : 'Aktif' ?></option>
          </select>
          <div>
            <input type="file" name="image" id="image" class="w-full text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <small class="mt-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-medium">Ketentuan:</span> 1280(px) x 720(px) maksimal 1MB (1000KB)</small>
          </div>
          <div>
            <button type="submit" class="bg-cyan-600 text-white text-sm py-2 px-3 rounded-md"><i class="fa-solid fa-floppy-disk"></i> <span id="btnSubmit">Simpan</span></button>
          </div>
        </div>
        <div class="flex-1">
          <img src="<?= base_url() ?>uploads/<?= $program->image ?>" class="w-full rounded shadow border-8 border-white">
        </div>
      </div>
    </form>
  </section>
  <hr class="my-5">
  <section id="alumni">

    <div class="w-full px-4 py-4 bg-slate-200 rounded-lg my-3">
      <form class="flex flex-col md:flex-row items-center justify-center gap-3">
        <input type="text" name="content" id="content" class="w-full md:w-5/12 p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Type program study description.." required>
        <select name="type" id="type" class="w-full md:w-4/12 p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
          <option>Pilih</option>
          <option value="visi">Visi</option>
          <option value="misi">Misi</option>
          <option value="keunggulan">Keunggulan</option>
        </select>
        <button type="submit" class="w-full md:w-3/12 bg-cyan-600 text-white text-sm py-2 px-3 rounded-md"><span id="btnSubmit">Simpan</span></button>
      </form>
    </div>

    <div class="flex flex-wrap">
      <div class="w-full md:w-1/2 p-3">
        <h1 class="font-bold text-center md:text-left text-2xl mb-3">Visi</h1>
        <table class="w-full border border-gray-300 rounded-lg text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="md:w-1/12 px-6 py-3">
                No
              </th>
              <th scope="col" class="md:w-4/12 px-3 py-3">
                Content
              </th>
              <th scope="col" class="md:w-2/12 px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 0; ?>
            <?php if (!empty($visis)) { ?>
              <?php foreach ($visis as $number => $visi) : ?>
                <tr class="bg-white border-b transition ease-in-out duration-200 hover:bg-gray-50">
                  <td class="px-6 py-4">
                    <?= $number + 1 ?>
                  </td>
                  <td class="space-y-2 px-6 py-4">
                    <?= $visi->content ?>dasdasdasdasdas
                  </td>
                  <td class="space-y-2 px-6 py-4">
                    <?= $visi->content ?>
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

      <div class="w-full md:w-1/2 p-3">
        <h1 class="font-bold text-center md:text-left text-2xl mb-3">Misi</h1>
        <table class="w-full border border-gray-300 rounded-lg text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="md:w-1/12 px-6 py-3">
                No
              </th>
              <th scope="col" class="md:w-4/12 px-3 py-3">
                Content
              </th>
              <th scope="col" class="md:w-2/12 px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 0; ?>
            <?php if (!empty($visis)) { ?>
              <?php foreach ($visis as $number => $visi) : ?>
                <tr class="bg-white border-b transition ease-in-out duration-200 hover:bg-gray-50">
                  <td class="px-6 py-4">
                    <?= $number + 1 ?>
                  </td>
                  <td class="space-y-2 px-6 py-4">
                    <?= $visi->content ?>
                  </td>
                  <td class="space-y-2 px-6 py-4">
                    <?= $visi->content ?>
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

      <div class="w-full p-3">
        <h1 class="font-bold text-center md:text-left text-2xl mb-3">Keunggulan</h1>
        <table class="w-full border border-gray-300 rounded-lg text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="md:w-1/12 px-6 py-3">
                No
              </th>
              <th scope="col" class="md:w-4/12 px-3 py-3">
                Content
              </th>
              <th scope="col" class="md:w-2/12 px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 0; ?>
            <?php if (!empty($visis)) { ?>
              <?php foreach ($visis as $number => $keunggulan) : ?>
                <tr class="bg-white border-b transition ease-in-out duration-200 hover:bg-gray-50">
                  <td class="px-6 py-4">
                    <?= $number + 1 ?>
                  </td>
                  <td class="space-y-2 px-6 py-4">
                    <?= $keunggulan->content ?>
                  </td>
                  <td class="space-y-2 px-6 py-4">
                    <?= $keunggulan->content ?>
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
  </section>
  <hr class="my-5">
</div>