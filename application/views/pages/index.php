<section class="container mx-auto mt-5 px-4">
	<div id="default-carousel" class="relative z-0" data-carousel="slide">
		<!-- Carousel wrapper -->
		<div class="relative h-56 overflow-hidden rounded-lg md:h-[550px]">
			<?php if (count($banners) > 1) { ?>

				<?php foreach ($banners as $banner) { ?>
					<div class="hidden duration-700 ease-in-out" data-carousel-item>
						<img src="<?= base_url() ?>uploads/<?= $banner->image ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg" alt="<?= $banner->title ?>">
					</div>
				<?php } ?>
			<?php } elseif (count($banners) == 1) { ?>

				<?php foreach ($banners as $banner) { ?>
					<div class="duration-700 ease-in-out">
						<img src="<?= base_url() ?>uploads/<?= $banner->image ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg" alt="<?= $banner->title ?>">
					</div>
				<?php } ?>

			<?php } else { ?>

				<div class="duration-700 ease-in-out">
					<img src="<?= base_url() ?>public/img/banner-default.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg" alt="Politeknik LP3I Kampus Tasikmalaya">
				</div>

			<?php } ?>
		</div>
		<?php if (count($banners) > 1) { ?>
			<!-- Slider controls -->
			<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
				<span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
					<i class="w-5 h-5 text-white sm:w-6 sm:h-6 fa-solid fa-chevron-left"></i>
					<span class="sr-only">Previous</span>
				</span>
			</button>
			<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
				<span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
					<i class="w-5 h-5 text-white sm:w-6 sm:h-6 fa-solid fa-chevron-right"></i>
					<span class="sr-only">Next</span>
				</span>
			</button>
		<?php } ?>
	</div>
</section>
<section class="mt-3 md:mt-5">
	<div class="container mx-auto text-sm md:text-base px-4">
		<div class="flex flex-col md:flex-row gap-2	md:gap-4 justify-center">
			<a role="button" href="https://api.whatsapp.com/send?phone=6281313608558&text=Hallo%20Kak,%20Boleh%20minta%20informasi%20Pendaftaran%20Mahasiswa%20Politeknik%20LP3I%20Kampus%20Tasikmalaya%3F" target="_blank" class="transition ease-in-out duration-300 inline py-2 px-8 text-center text-white bg-cyan-700 hover:bg-cyan-800 rounded"><i class="fa-solid fa-circle-info mr-1"></i>
				<?= $this->session->userdata('language') == 'en' ? 'Registration Information' : 'Informasi Pendaftaran' ?>
			</a>
			<a role="button" href="https://brosur.politekniklp3i-tasikmalaya.ac.id/" target="_blank" class="transition text-center ease-in-out duration-300 inline py-2 px-8 text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-700 rounded"><i class="fa-solid fa-book-open mr-1"></i>
				<?= $this->session->userdata('language') == 'en' ? 'Digital Brochure' : 'Brosur Digital' ?>
			</a>
			<a href="https://virtualkampus.politekniklp3i-tasikmalaya.ac.id/" role="button" target="_blank" class="transition ease-in-out duration-300 inline py-2 px-8 text-cyan-700 text-center hover:text-white border border-cyan-700 hover:bg-cyan-700 rounded"><i class="fa-solid fa-map-location-dot mr-1"></i>
				<?= $this->session->userdata('language') == 'en' ? 'Virtual Campus' : 'Virtual Kampus' ?>
			</a>
			<a href="https://schoolarship.politekniklp3i-tasikmalaya.ac.id/" role="button" target="_blank" class="transition ease-in-out duration-300 inline py-2 px-8 text-cyan-700 text-center hover:text-white border border-cyan-700 hover:bg-cyan-700 rounded"><i class="fa-solid fa-qrcode mr-1"></i>
				<?= $this->session->userdata('language') == 'en' ? 'Scholarship Check' : 'Cek Beasiswa' ?>
			</a>
		</div>
	</div>
</section>

<?php if (!empty($benefits)) { ?>
	<section class="my-10">
		<div class="container mx-auto text-sm px-4">
			<div class="flex flex-wrap justify-center items-center gap-5">
				<?php foreach ($benefits as $benefit) { ?>
					<div class="text-center w-[400px]">
						<div class="bg-white shadow-sm text-center p-4 rounded-lg transition ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
							<img src="<?= base_url() ?>uploads/<?= $benefit->image ?>" alt="<?= $benefit->title ?>" class="inline w-20 rounded-full">
							<div class="mt-3 bg-gray-50 p-2 rounded">
								<h5 class="font-bold text-cyan-700 text-base mb-1"><?= $benefit->title ?></h5>
								<p class="text-gray-600 text-sm"><?= $benefit->description ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>

<?php if (!empty($politechnics) || !empty($colleges) || !empty($mains)) { ?>
	<section class="bg-lp3i-500 py-8">
		<div class="container mx-auto text-center text-white px-4">
			<?php if (!empty($politechnics) || !empty($colleges)) { ?>
				<div class="bg-lp3i-100 py-3 mb-8 rounded-lg">
					<h5 class="font-bold text-xl"><?= $this->session->userdata('language') == 'en' ? 'Tasikmalaya Campus' : 'Kampus Tasikmalaya' ?></h5>
				</div>
			<?php } ?>

			<?php if (!empty($politechnics)) { ?>
				<?php if ($this->session->userdata('language') == 'en') { ?>
					<h5 class="font-bold text-2xl my-3">Academic Program <span class="text-merah-100">Diploma 3</span></h5>
					<p>The following is a list of D3 level study programs at the LP3I Polytechnic, Tasikmalaya Campus</p>
				<?php } else { ?>
					<h5 class="font-bold text-2xl my-3">Program <span class="text-merah-100">Pendidikan Diploma 3</span></h5>
					<p>Berikut adalah daftar program studi jenjang D3 di Politeknik LP3I Kampus Tasikmalaya</p>
				<?php } ?>
				<div class="flex flex-wrap flex-col md:flex-row justify-center gap-5 my-8">

					<?php foreach ($politechnics as $politechnic) { ?>
						<div class="group relative w-1/1 md:w-1/3">
							<img class="w-full object-cover rounded-lg" alt="<?= $politechnic->title ?>" src="<?= base_url() ?>uploads/<?= $politechnic->image ?>" />
							<div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-lp3i-200 rounded-lg opacity-0 group-hover:h-full group-hover:opacity-95 duration-500">
								<h1 class="text-lg text-white"><?= $politechnic->level ?> <?= $politechnic->title ?></h1>
								<a role="button" class="mt-5 px-8 py-2 text-sm rounded-full bg-amber-400 hover:bg-amber-600 duration-300" href="#">
									<?= $this->session->userdata('language') == 'en' ? 'View more' : 'Lihat selengkapnya' ?>
								</a>
							</div>
						</div>
					<?php } ?>

				</div>
			<?php } ?>

			<?php if (!empty($colleges)) { ?>

				<?php if ($this->session->userdata('language') == 'en') { ?>
					<h5 class="font-bold text-2xl my-3">Academic Program <span class="text-merah-100">2 Year Vocation</span></h5>
					<p>The following is a list of 2-year Vocational level study programs at LP3I Tasikmalaya</p>
				<?php } else { ?>
					<h5 class="font-bold text-2xl my-3">Program Pendidikan <span class="text-merah-100">Vokasi 2 Tahun</span></h5>
					<p>Berikut adalah daftar program studi jenjang Vokasi 2 Tahun di LP3I Tasikmalaya</p>
				<?php } ?>

				<div class="flex flex-col md:flex-row justify-center gap-5 my-8">

					<?php foreach ($colleges as $college) { ?>
						<div class="group relative w-1/1 md:w-1/3">
							<img class="w-full object-cover rounded-lg" alt="<?= $college->title ?>" src="<?= base_url() ?>uploads/<?= $college->image ?>" />
							<div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-lp3i-200 rounded-lg opacity-0 group-hover:h-full group-hover:opacity-95 duration-500">
								<h1 class="text-lg text-white"><?= $college->title ?> <?= $college->level ?></h1>
								<a role="button" class="mt-5 px-8 py-2 text-sm rounded-full bg-amber-400 hover:bg-amber-600 duration-300" href="#">
									<?= $this->session->userdata('language') == 'en' ? 'More' : 'Selengkapnya' ?>
								</a>
							</div>
						</div>
					<?php } ?>

				</div>
			<?php } ?>


			<?php if (!empty($mains)) { ?>
				<div class="bg-lp3i-200 py-3 mb-8 rounded-lg">
					<h5 class="font-bold text-xl">
						<?= $this->session->userdata('language') == 'en' ? 'Main Campus' : 'Kampus Utama' ?>
					</h5>
				</div>

				<?php if ($this->session->userdata('language') == 'en') { ?>
					<h5 class="font-bold text-2xl my-3">Academic Program <span class="text-merah-100">Diploma 3</span></h5>
					<p>The following is a list of D3 level study programs at the LP3I Polytechnic</p>
				<?php } else { ?>
					<h5 class="font-bold text-2xl my-3">Program Pendidikan <span class="text-merah-100">Diploma 3</span></h5>
					<p>Berikut adalah daftar program studi jenjang D3 di Politeknik LP3I</p>
				<?php } ?>

				<div class="flex flex-wrap flex-col md:flex-row justify-center gap-5 my-8">

					<?php foreach ($mains as $main) { ?>
						<div class="group relative w-1/1 md:w-1/3">
							<img class="w-full object-cover rounded-lg" alt="<?= $main->title ?>" src="<?= base_url() ?>uploads/<?= $main->image ?>" />
							<div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-lp3i-200 rounded-lg opacity-0 group-hover:h-full group-hover:opacity-95 duration-500">
								<h1 class="text-lg text-white"><?= $main->level ?> <?= $main->title ?></h1>
								<a role="button" class="mt-5 px-8 py-2 text-sm rounded-full bg-amber-400 hover:bg-amber-600 duration-300" href="#">
									<?= $this->session->userdata('language') == 'en' ? 'View more' : 'Lihat selengkapnya' ?>
								</a>
							</div>
						</div>
					<?php } ?>

				</div>
			<?php } ?>

		</div>
	</section>
<?php } ?>

<section class="my-10">
	<div class="container mx-auto px-4">

		<div class="py-3 mb-8 text-center rounded-lg">

			<?php if ($this->session->userdata('language') == 'en') { ?>
				<h5 class="font-bold text-3xl"><span class="text-merah-300">Campus</span> Media</h5>
				<p class="text-gray-600 text-sm mt-2">The following is the latest news from the LP3I Polytechnic, Tasikmalaya Campus</p>
			<?php } else { ?>
				<h5 class="font-bold text-3xl"><span class="text-merah-300">Media</span> Kampus</h5>
				<p class="text-gray-600 text-sm mt-2">Berikut adalah berita terbaru dari Politeknik LP3I Kampus Tasikmalaya</p>
			<?php } ?>

		</div>

		<?php if (!empty($medias)) { ?>
			<div class="flex flex-row flex-wrap justify-center gap-5 my-8">
				<?php foreach ($medias as $media) { ?>
					<div class="bg-white shadow rounded-xl p-5 md:w-[400px] ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300 space-y-3">
						<img src="<?= base_url() ?>uploads/<?= $media->image ?>" alt=<?= $media->title ?>" class="rounded-lg">
						<h5 class="font-bold text-lg"><?= substr($media->title, 0, 70) ?><?= strlen($media->title) >=70 ? '...' : '' ?></h5>
						<div class="text-sm text-gray-600"><?= $content = substr($media->description, 0, 150)  ?><?= strlen($media->description) >=150 ? '...' : '' ?></div>
						<div class="text-sm flex align-center justify-between">
							<a role="button" href="<?= base_url() ?>blogs/media/<?= $media->uuid ?>" class="transition ease-in-out duration-300 bg-lp3i-200 hover:bg-lp3i-600 px-5 py-1 rounded-lg text-white">
								<?= $this->session->userdata('language') == 'en' ? 'View more' : 'Lihat selengkapnya' ?>
							</a>
							<p class="text-gray-600 py-1"><?= date("d F Y", strtotime($media->date)); ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="text-center">
				<a href="<?= base_url() ?>blogs/medias" class="text-sky-600 text-sm underline"><?= $this->session->userdata('language') == 'en' ? 'View more' : 'Lihat selengkapnya' ?></a>
			</div>
		<?php } else { ?>
			<p class="bg-red-500 text-white text-center text-sm py-2 rounded-lg">
				<?= $this->session->userdata('language') == 'en' ? 'No news yet' : 'Belum ada berita' ?>
			</p>
		<?php } ?>
	</div>
</section>

<section class="my-10">
	<div class="container mx-auto px-4">

		<div class="py-3 mb-8 text-center rounded-lg">
			<?php if ($this->session->userdata('language') == 'en') { ?>
				<h5 class="font-bold text-3xl"><span class="text-merah-300">Campus</span> Agenda</h5>
				<p class="text-gray-600 text-sm mt-2">The following is a list of activities carried out at the LP3I Polytechnic, Tasikmalaya Campus</p>
			<?php } else { ?>
				<h5 class="font-bold text-3xl"><span class="text-merah-300">Agenda</span> Kampus</h5>
				<p class="text-gray-600 text-sm mt-2">Berikut ini adalah daftar kegiatan yang dilakukan di Politeknik LP3I Kampus Tasikmalaya</p>
			<?php } ?>
		</div>
		<?php if (!empty($agendas)) { ?>
			<div class="flex justify-center">
				<div class="owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							<?php foreach ($agendas as $agenda) { ?>
								<div class="owl-item">
									<img src="<?= base_url() ?>uploads/<?= $agenda->image ?>" alt="<?= $agenda->image ?>" class="rounded-lg shadow-lg">
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>
			<p class="bg-red-500 text-white text-center text-sm py-2 rounded-lg">
				<?= $this->session->userdata('language') == 'en' ? 'No agendas yet' : 'Belum ada agenda' ?>
			</p>
		<?php } ?>
	</div>

</section>

<section class="my-10">
	<div class="container mx-auto px-4">

		<div class="flex flex-col md:flex-row items-center justify-center gap-4">
			<?php if (!empty($informations)) { ?>
				<?php foreach ($informations as $information) : ?>
					<div class="w-full md:w-1/2 h-auto">
						<iframe width="100%" height="350px" class="rounded-2xl border-4 border-gray-200" src="https://www.youtube.com/embed/<?= $information->youtube ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>

					<div class="w-full md:w-1/2">
						<h5 class="font-bold text-2xl md:text-3xl"><?= $information->title ?></h5>
						<p class="text-sm text-gray-600 mt-3"><?= $information->description ?></p>

						<a href="#" class="transition ease-in-out duration-300 inline-block py-2 px-4 text-sm mt-5 text-white bg-lp3i-200 hover:bg-lp3i-600 rounded">
							<?= $this->session->userdata('language') == 'en' ? 'View more' : 'Lihat selengkapnya' ?>
						</a>

						<?php if (!empty($documentations)) { ?>
							<div class="mt-5 flex justify-center">
								<div class="owl-carousel owl-theme owl-loaded">
									<div class="owl-stage-outer">
										<div class="owl-stage">

											<?php foreach ($documentations as $documentation) : ?>
												<div class="owl-item">
													<img src="<?= base_url() ?>uploads/<?= $documentation->image ?>" alt="<?= $documentation->title ?>" class="rounded-lg">
												</div>

											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				<?php endforeach; ?>
			<?php } else { ?>
				<div class="w-full md:w-1/2 h-auto">
					<iframe width="100%" height="350px" class="rounded-2xl border-4 border-gray-200" src="https://www.youtube.com/embed/Vo1R5cElVqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="w-full md:w-1/2">

					<?php if ($this->session->userdata('language') == 'en') { ?>
						<h5 class="font-bold text-2xl md:text-3xl">LP3I Tasikmalaya – Condong Pada Mimpi Cover</h5>
						<p class="text-sm text-gray-600 mt-3">This video contains about vocational education at LP3I Tasikmalaya starting from Campus Environment Introduction activities, accounting practice activities, automotive practice, informatics practice, office management practice, and the work placement process which is one of the leading programs at LP3I.</p>
						<a href="#" class="transition ease-in-out duration-300 inline-block py-2 px-4 text-sm mt-5 text-white bg-lp3i-200 hover:bg-lp3i-600 rounded">More information</a>
					<?php } else { ?>
						<h5 class="font-bold text-2xl md:text-3xl">LP3I Tasikmalaya – Cover Condong Pada Mimpi</h5>
						<p class="text-sm text-gray-600 mt-3">Video ini berisi tentang pendidikan vokasi di LP3I Tasikmalaya mulai dari kegiatan Pengenalan Lingkungan Kampus, kegiatan praktek akuntansi, praktek otomotif, praktek informatika, praktek manajemen perkantoran, dan proses penempatan kerja yang menjadi salah satu program unggulan di LP3I.</p>
						<a href="#" class="transition ease-in-out duration-300 inline-block py-2 px-4 text-sm mt-5 text-white bg-lp3i-200 hover:bg-lp3i-600 rounded">Lihat selengkapnya</a>
					<?php } ?>

					<?php if (!empty($documentations)) { ?>
						<div class="mt-5 flex justify-center">
							<div class="owl-carousel owl-theme owl-loaded">
								<div class="owl-stage-outer">
									<div class="owl-stage">

										<?php foreach ($documentations as $documentation) : ?>
											<div class="owl-item">
												<img src="<?= base_url() ?>uploads/<?= $documentation->image ?>" alt="<?= $documentation->title ?>" class="rounded-lg">
											</div>

										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
			<?php } ?>
		</div>

	</div>
</section>

<section class="my-10">
	<div class="container mx-auto px-4">
		<div class="py-3 mb-8 md:px-20 text-center rounded-lg">
			<?php if ($this->session->userdata('language') == 'en') { ?>
				<h5 class="font-bold text-3xl">Partnertship</h5>
				<p class="text-gray-600 text-sm mt-2">LP3I collaborates with hundreds of companies in Indonesia for student work placements even before graduation to ensure that we give them the opportunity for a better future.</p>
			<?php } else { ?>
				<h5 class="font-bold text-3xl">Kerjasama</h5>
				<p class="text-gray-600 text-sm mt-2">LP3I berkolaborasi dengan ratusan perusahaan di Indonesia untuk penempatan kerja mahasiswa bahkan sebelum lulus untuk memastikan bahwa kami memberikan mereka kesempatan untuk masa depan yang lebih baik.</p>
			<?php } ?>
		</div>

		<div class="text-center space-x-10">
			<img src="<?= base_url() ?>public/img/partnert/kampus-merdeka.png" class="inline w-32">
			<img src="<?= base_url() ?>public/img/partnert/msib.png" class="inline w-32">
			<img src="<?= base_url() ?>public/img/partnert/tutwuridhandayani.png" class="inline w-32">
		</div>

		<div class="mt-10 flex justify-center">
			<div class="owl-carousel owl-theme owl-loaded">
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<?php foreach ($companies as $company) { ?>
							<div class="owl-item">
								<img src="<?= base_url() ?>uploads/<?= $company->image ?>" alt="<?= $company->name ?>" class="w-10 rounded-lg">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
