<section class="my-14">
	<div class="container mx-auto px-4">
		<?php if (!empty($students)) { ?>
			<div class="w-full flex justify-center flex-wrap gap-5">
				<?php foreach ($students as $student) { ?>
					<div class="item w-96 h-auto border-8 border-white shadow rounded-lg ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
						<img src="<?= base_url() ?>uploads/<?= $student->image ?>" alt="<?= $student->title ?>" class="rounded-lg">
						<div class="p-4">
							<h5 class="font-bold text-sm mb-1 text-left text-gray-700"><?= $student->title ?></h5>
							<p class="text-gray-600 text-xs"><?= $student->description ?></p>
							<div class="flex justify-between items-center mt-4">
								<a role="button" class="bg-cyan-600 text-white text-xs py-2 px-3 rounded-md">
									<?= $this->session->userdata('language') == 'en' ? 'More' : 'Selengkapnya' ?>
								</a>
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