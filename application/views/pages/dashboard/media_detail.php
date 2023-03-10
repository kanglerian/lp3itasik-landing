<div class="container mx-auto overflow-x-auto px-2 mt-10">
  <div class="space-y-2 mb-2 pl-2">
    <form id="form" action="<?= base_url() ?>media/update/<?= $media->id ?>" class="flex flex-col md:items-start gap-4 py-3 px-2" method="post" enctype="multipart/form-data">
      <div class="flex flex-row items-center justify-center gap-5">
        <div class="flex-1 flex flex-col gap-2">
          <h1 class="font-bold text-2xl mb-3"><?= $media->title ?></h1>
          <input type="text" name="title" id="title" value="<?= $media->title ?>" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Type title.." required>
          <input type="date" name="date" value="<?= $media->date ?>" id="date" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
          <select name="status" id="status" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
            <option value="<?= $media->status ?>"><?= $media->status == '1' ? 'Aktif' : 'Tidak aktif' ?></option>
            <option value="<?= $media->status == '1' ? '0' : '1' ?>"><?= $media->status == '1' ? 'Tidak aktif' : 'Aktif' ?></option>
          </select>
          <div>
            <input type="file" name="image" id="image" class="w-full text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <small class="mt-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-medium">Ketentuan:</span> 1280(px) x 720(px) maksimal 1MB (1000KB)</small>
          </div>
        </div>
        <div class="flex-1">
          <img src="<?= base_url() ?>uploads/<?= $media->image ?>" class="w-full rounded shadow border-8 border-white">
        </div>
      </div>
      <div class="w-full">
        <textarea name="description" id="description" class="w-full p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Type description.." required contenteditable></textarea>
      </div>
      <div>
        <button type="submit" class="bg-cyan-600 text-white text-sm py-2 px-3 rounded-md"><i class="fa-solid fa-floppy-disk"></i> <span id="btnSubmit">Simpan</span></button>
      </div>
    </form>
  </div>

  <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('description');
  </script>
  <script>
    const editInformation = () => {
      let description = `<?= $media->description ?>`;
      var editor = CKEDITOR.instances.description;
      let descriptionInput = document.getElementById('description');
      editor.setData(description);
      descriptionInput.innerHTML = description;
    }
    editInformation();
  </script>
</div>