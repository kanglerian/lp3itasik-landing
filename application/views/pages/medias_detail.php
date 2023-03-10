<style>
</style>
<section class="my-14">
	<div class="container mx-auto px-4">
		<div class="flex flex-col justify-end md:flex-row gap-5">
			<div class="w-full md:w-1/3 order-2 md:order-none">
				<h1 class="text-xl font-bold text-gray-800">
						<?= $this->session->userdata('language') == 'en' ? 'More Medias' : 'Media Lainnya' ?></h1>
				<hr class="my-2">
				<div>
					<ul class="space-y-3">
						<?php if (!empty($medias)) { ?>
							<?php foreach ($medias as $news) { ?>
								<li>
									<a href="<?= base_url() ?>blogs/media/<?= $news->uuid ?>" class="bg-gray-100 py-1 px-2 rounded text-base text-sky-600 underline md:hover:text-sky-700"><?= substr($news->title, 0, 40) ?>...</a>
								</li>
							<?php } ?>
						<?php } else { ?>
							<li>Tidak ada berita.</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="w-full md:w-2/3 order-1 md:order-none">
				<img src="<?= base_url() ?>uploads/<?= $media->image ?>" alt="<?= $media->title ?>" class="rounded-xl shadow border-8 border-white">
				<div class="space-y-5 mt-4 bg-gray-100 p-5 rounded-xl">
					<h1 class="text-4xl font-bold text-gray-800"><?= $media->title ?></h1>
					<span class="inline-block bg-sky-200 text-sky-700 text-sm py-1 px-5 rounded-md mb-3"><i class="fa-solid fa-calendar-days mr-2"></i> <?= date("d F Y", strtotime($media->date)) ?></span>
					<div id="media" class="text-gray-700 leading-6 space-y-5"><?= $media->description ?></div>
				</div>
			</div>
		</div>
	</div>
</section>