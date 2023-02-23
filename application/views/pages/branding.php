<section class="my-20">
	<div class="container mx-auto px-4">

		<div class="flex flex-col md:flex-row items-center justify-center gap-8">
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/assets/lp3i.svg" alt="">
				<div class="mt-5">
					<a href="<?= base_url() ?>public/assets/lp3i.svg" class="bg-gray-500 hover:bg-gray-600 text-white rounded-lg text-xs px-4 py-2" download="logo-svg.svg">Download .svg</a>
					<a href="<?= base_url() ?>public/assets/lp3i.png" class="bg-gray-500 hover:bg-gray-600 text-white rounded-lg text-xs px-4 py-2" download="logo-png.png">Download .png</a>
				</div>
				<hr class="my-5">
				<img src="<?= base_url() ?>public/assets/lp3i-white.svg" alt="" class="bg-lp3i-500 px-5 py-3 rounded-xl">
				<div class="mt-5">
					<a href="<?= base_url() ?>public/assets/lp3i-white.svg" class="bg-gray-500 hover:bg-gray-600 text-white rounded-lg text-xs px-4 py-2" download="logo-svg.svg">Download .svg</a>
					<a href="<?= base_url() ?>public/assets/lp3i-white.png" class="bg-gray-500 hover:bg-gray-600 text-white rounded-lg text-xs px-4 py-2" download="logo-png.png">Download .png</a>
				</div>
			</div>
			<div class="basis-1/2">
				<div class="flex flex-wrap justify-center gap-5">
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-lp3i-500 text-white rounded-lg justify-center items-center">#00426D</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-merah-200 text-white rounded-lg justify-center items-center">#F15C67</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-hijau-100 text-white rounded-lg justify-center items-center">#00AEB6</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-lp3i-500 text-white rounded-lg justify-center items-center">#00426D</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-merah-200 text-white rounded-lg justify-center items-center">#F15C67</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-hijau-100 text-white rounded-lg justify-center items-center">#00AEB6</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-lp3i-500 text-white rounded-lg justify-center items-center">#00426D</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-merah-200 text-white rounded-lg justify-center items-center">#F15C67</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-hijau-100 text-white rounded-lg justify-center items-center">#00AEB6</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-lp3i-500 text-white rounded-lg justify-center items-center">#00426D</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-merah-200 text-white rounded-lg justify-center items-center">#F15C67</div>
					<div onclick="copyToClipboard(this)" class="flex cursor-pointer w-32 h-20 bg-hijau-100 text-white rounded-lg justify-center items-center">#00AEB6</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	const copyToClipboard = (content) => {
		var color = content.textContent;
		navigator.clipboard.writeText(color).then(() => {
			alert(`Warna ${color} Berhasil disalin!`);
		});
	}
</script>