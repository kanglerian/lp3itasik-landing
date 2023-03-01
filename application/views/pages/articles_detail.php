<style>
	#article h1 {
		font-size: 32px;
	}

	#article h2 {
		font-size: 24px;
	}

	#article h3 {
		font-size: 18px;
	}

	#article p {
		font-size: 14px;
		text-indent: 35px;
		text-align: justify;
	}

	#article ol li {
		font-size: 14px;
		margin-left: 50px;
		word-spacing: 13px;
		list-style: decimal;
	}

	#article ul li {
		margin-left: 30px;
		word-spacing: -20px;
		list-style: disc;
	}
</style>
<section class="my-14">
	<div class="container mx-auto px-4">
		<div class="flex flex-col justify-end md:flex-row gap-5">
			<div class="w-full md:w-1/3">
				<h1 class="text-xl font-bold text-gray-800">
					<?= $this->session->userdata('language') == 'en' ? 'More News' : 'Berita Lainnya' ?></h1>
				<hr class="my-2">
				<div>
					<ul class="space-y-3">
						<?php if (!empty($articles)) { ?>
							<?php foreach ($articles as $news) { ?>
								<li>
									<a href="<?= base_url() ?>blogs/article/<?= $news->uuid ?>" class="bg-gray-100 py-1 px-2 rounded text-base text-sky-600 underline md:hover:text-sky-700"><?= $news->title ?></a>
								</li>
							<?php } ?>
						<?php } else { ?>
							<li>Tidak ada berita.</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="w-full md:w-2/3">
				<img src="<?= base_url() ?>uploads/<?= $article->image ?>" alt="<?= $article->title ?>" class="rounded-xl shadow border-8 border-white">
				<div class="space-y-5 mt-4 bg-gray-100 p-5 rounded-xl">
					<h1 class="text-4xl font-bold text-gray-800"><?= $article->title ?></h1>
					<span class="inline-block bg-sky-200 text-sky-700 text-sm py-1 px-5 rounded-md mb-3"><i class="fa-solid fa-calendar-days mr-2"></i> <?= date("d F Y", strtotime($article->date)) ?></span>
					<div id="article" class="text-gray-700 leading-6 space-y-5"><?= $article->description ?></div>
				</div>
			</div>
		</div>
	</div>
</section>