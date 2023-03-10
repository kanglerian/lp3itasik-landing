<section class="my-14">
	<div class="container mx-auto px-4">
		<header class="mb-7 text-center">
			<a href="<?= base_url() ?>blogs/medias">
				<h1 class="text-3xl font-bold text-gray-700 hover:text-gray-800 underline underline-offset-8">Media</h1>
			</a>
		</header>
		<?php if (!empty($medias)) { ?>
			<div class="w-full flex justify-center flex-wrap gap-5">
				<?php foreach ($medias as $media) { ?>

					<div class="item w-96 h-auto border-8 border-white shadow rounded-lg ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
						<img src="<?= base_url() ?>uploads/<?= $media->image ?>" alt="<?= $media->title ?>" class="rounded-lg">
						<div class="p-4">
							<h5 class="font-bold text-base mb-1 text-left text-gray-700"><?= substr($media->title, 0, 70) ?>...</h5>
							<div class="flex justify-between items-center mt-3">
								<a href="<?= base_url() ?>blogs/media/<?= $media->uuid ?>" role="button" class="bg-cyan-600 text-white text-xs py-1 px-3 rounded-md">
									<?= $this->session->userdata('language') == 'en' ? 'View more' : 'Lihat selengkapnya' ?>
								</a>
								<span class="block bg-gray-200 text-gray-500 text-xs py-1 px-3 rounded-md"><?= date("d F Y", strtotime($media->date)) ?></span>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="h-[500px] text-center flex justify-center items-center">
				<lottie-player src="<?= base_url() ?>public/assets/empty.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
			</div>
		<?php } ?>
	</div>
</section>