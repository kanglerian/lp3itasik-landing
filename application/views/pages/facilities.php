<section class="my-14">
	<div class="container mx-auto px-4">
		<?php if (!empty($facilities)) { ?>
			<div class="w-full flex justify-center flex-wrap gap-5">
				<?php foreach ($facilities as $facility) { ?>
					<div class="item w-96 h-auto border-8 border-white shadow rounded-lg ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
						<img src="<?= base_url() ?>uploads/<?= $facility->image ?>" alt="<?= $facility->title ?>" class="rounded-lg">
						<h5 class="bg-white block font-bold text-sm py-2 text-center text-gray-700"><?= $facility->title ?></h5>
					</div>
				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="h-[500px] text-center flex justify-center items-center">
			<lottie-player src="<?= base_url() ?>public/assets/empty.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop autoplay></lottie-player>
			</div>
		<?php } ?>
	</div>
</section>