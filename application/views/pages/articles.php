<section class="my-14">
	<div class="container mx-auto px-4">
		<?php if (!empty($articles)) { ?>
			<div class="w-full flex justify-center flex-wrap gap-5">
				<?php foreach ($articles as $article) { ?>
					<div class="item w-96 h-auto border-8 border-white shadow rounded-lg ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
						<img src="<?= base_url() ?>uploads/<?= $article->image ?>" alt="<?= $article->title ?>" class="rounded-lg">
						<div class="p-4">
							<h5 class="font-bold text-base mb-1 text-left text-gray-700"><?= $article->title ?></h5>
							<div class="flex justify-between items-center mt-3">
								<a href="<?= base_url() ?>about/article/<?= $article->uuid ?>" role="button" class="bg-cyan-600 text-white text-xs py-1 px-3 rounded-md">Selengkapnya</a>
								<span class="block bg-gray-200 text-gray-500 text-xs py-1 px-3 rounded-md"><?= date("d F Y", strtotime($article->date)) ?></span>
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