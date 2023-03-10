<div class="container mx-auto overflow-x-auto px-2 mt-10">
  <div class="space-y-2 mb-2 pl-2">
    <form id="form" action="<?= base_url() ?>article/insert" class="flex flex-col md:items-start gap-4 py-3 px-2" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_user" value="<?= $this->session->userdata('uuid'); ?>">
      <div class="w-full flex flex-col md:flex-row gap-5">
        <div class="flex-1 flex flex-col gap-2">
          <div class="flex flex-col md:flex-row md:items-center gap-1">
            <label class="w-full md:w-1/6 text-gray-800 font-bold text-sm">Judul Artikel:</label>
            <input type="text" name="title" id="title" class="w-full md:w-5/6 p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis judul artikel disini..." required>
          </div>

          <div class="flex flex-col md:flex-row md:items-center gap-1">
            <label class="w-full md:w-1/6 text-gray-800 font-bold text-sm">Tanggal:</label>
            <input type="date" name="date" id="date" class="w-full md:w-5/6 p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" required>
          </div>

          <div class="flex flex-col md:flex-row md:items-center gap-1">
            <label class="w-full md:w-1/6 text-gray-800 font-bold text-sm">Sumber:</label>
            <input type="text" name="source" id="source" class="w-full md:w-5/6 p-2 text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis sumber artikel disini..." required>
          </div>

        </div>
        <hr>
        <div class="flex-1 flex flex-col gap-2">
          <div>
            <input type="file" name="image" id="image" class="w-full text-gray-700 border border-gray-300 rounded-md bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <small class="mt-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-medium">Ketentuan:</span> 1280(px) x 720(px) maksimal 1MB (1000KB)</small>
          </div>
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
    const editDescription = () => {
      let description = `Tulis artikel disini...`;
      var editor = CKEDITOR.instances.description;
      let descriptionInput = document.getElementById('description');
      editor.setData(description);
      descriptionInput.innerHTML = description;
    }
    editDescription();
  </script>
</div>