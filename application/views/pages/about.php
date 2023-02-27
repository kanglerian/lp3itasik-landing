<section class="my-5">
	<div class="container mx-auto px-4">
		<div class="flex flex-col md:flex-row justify-center items-center gap-8">
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/img/<?= $manager['photo'] ?>" alt="" class="bg-white p-2 rounded-2xl shadow">
			</div>
			<div class="basis-1/2">
				<h5 class="font-bold"><?= $this->session->userdata('language') == 'en' ? 'Welcome from the Head of Campus' : 'Sambutan Kepala Kampus' ?></h5>
				<h3 class="font-bold text-3xl mt-2"><?= $manager['name'] ?></h3>
				<p class="mt-4 text-sm text-gray-700"><?= $manager['content'] ?></p>
			</div>
		</div>
	</div>
</section>

<hr class="my-8">

<section class="my-5">
	<div class="container mx-auto px-4">
		<div class="flex flex-col md:flex-row justify-center items-center gap-8">
			<div class="basis-1/2">
				<h3 class="font-bold text-3xl mt-2"><?= $this->session->userdata('language') == 'en' ? 'History of LP3I' : 'Sejarah LP3I' ?></h3>
				<p class="mt-4 text-sm text-gray-700"><?= $story['content'] ?></p>
			</div>
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/img/potrait.jpg" alt="" class="bg-white p-2 rounded-2xl shadow">
			</div>
		</div>
	</div>
</section>

<hr class="my-8">

<section class="my-10">
	<div class="container mx-auto px-4">
		<div class="flex flex-col md:flex-row justify-center items-center gap-8">
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/img/banner-default.jpg" alt="" class="bg-white p-2 rounded-2xl shadow">
			</div>
			<div class="basis-1/2">
				<h3 class="font-bold text-3xl mt-2"><?= $this->session->userdata('language') == 'en' ? 'What is Vocational Education?' : 'Apa itu Pendidikan Vokasi?' ?></h3>
				<p class="mt-4 text-sm text-gray-700"><?= $vokasi['what'] ?></p>
				<a href="#" class="transition ease-in-out duration-300 inline-block py-2 px-4 text-sm mt-5 text-white bg-lp3i-200 hover:bg-lp3i-600 rounded">
					<?= $this->session->userdata('language') == 'en' ? 'More' : 'Selengkapnya' ?>
				</a>
			</div>
		</div>
		<div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-10">
			<div class="basis-1/2">
				<h3 class="font-bold text-3xl mt-2"><?= $this->session->userdata('language') == 'en' ? 'What is the vocational education at LP3I like?' : 'Pendidikan vokasi di LP3I seperti apa?' ?></h3>
				<p class="mt-4 text-sm text-gray-700"><?= $vokasi['how'] ?></p>
				<a href="#" class="transition ease-in-out duration-300 inline-block py-2 px-4 text-sm mt-5 text-white bg-lp3i-200 hover:bg-lp3i-600 rounded">
					<?= $this->session->userdata('language') == 'en' ? 'More' : 'Selengkapnya' ?>
				</a>
			</div>
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/img/banner-default.jpg" alt="" class="bg-white p-2 rounded-2xl shadow">
			</div>
		</div>
	</div>
</section>

<hr class="my-8">

<section class="my-10">
	<div class="container mx-auto px-4">

		<div class="flex flex-col md:flex-row justify-center items-center gap-8">
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/img/banner-default.jpg" alt="" class="bg-white p-2 rounded-2xl shadow">
			</div>
			<div class="basis-1/2">
				<h3 class="font-bold text-3xl mt-2"><?= $this->session->userdata('language') == 'en' ? 'Vision' : 'Visi' ?></h3>
				<p class="mt-4 text-sm text-gray-700"><?= $vision['content'] ?></p>
			</div>
		</div>
		<div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-8">
			<div class="basis-1/3">
				<img src="<?= base_url() ?>public/img/banner-default.jpg" alt="" class="bg-white p-2 rounded-2xl shadow">
			</div>
			<div class="basis-1/2">
				<h3 class="font-bold text-3xl mt-2"><?= $this->session->userdata('language') == 'en' ? 'Mision' : 'Misi' ?></h3>
				<ol class="ml-5 list-outside list-decimal mt-4 text-sm text-gray-700 space-y-2">
					<?php foreach ($mision['contents'] as $content) { ?>
						<li><?= $content ?></li>
					<?php } ?>
				</ol>
			</div>
		</div>

	</div>
</section>