<style>
	#media p a {
		color: #0284c7;
		text-decoration: underline;
	}
</style>
<section class="my-8">
	<div class="container mx-auto px-4">
		<header>
			<div class="group relative">
				<img class="w-full object-cover rounded-xl h-80" alt="<?= $program->title ?>" src="<?= base_url() ?>uploads/<?= $program->image ?>" />
				<div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-lp3i-200 rounded-xl opacity-90 h-full">
					<div class="space-y-3 text-center text-white px-3">
						<h1 class="text-4xl"><?= $program->level ?> <?= $program->title ?></h1>
						<span class="inline-block rounded-lg text-sm bg-lp3i-100 px-4 py-2"><?= $program->campus ?></span>
					</div>
				</div>
			</div>
		</header>
		<nav class="my-5 bg-slate-100 border border-slate-200 py-3 rounded-xl">
			<ul class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-5 text-sm text-center px-4">
				<li onclick="hiddenSection('visi')" class="w-full md:w-auto bg-slate-200 hover:bg-slate-300 px-3 py-2 rounded-lg text-slate-900" role="button">Visi & Misi</li>
				<li onclick="hiddenSection('keunggulan')" class="w-full md:w-auto bg-slate-200 hover:bg-slate-300 px-3 py-2 rounded-lg text-slate-900" role="button">Keunggulan</li>
				<li onclick="hiddenSection('karir')" class="w-full md:w-auto bg-slate-200 hover:bg-slate-300 px-3 py-2 rounded-lg text-slate-900" role="button">Potensi Karir</li>
				<li onclick="hiddenSection('kompetensi')" class="w-full md:w-auto bg-slate-200 hover:bg-slate-300 px-3 py-2 rounded-lg text-slate-900" role="button">Standar Kompetensi & Lulusan</li>
				<li onclick="hiddenSection('alumni')" class="w-full md:w-auto bg-slate-200 hover:bg-slate-300 px-3 py-2 rounded-lg text-slate-900" role="button">Testimoni Alumni</li>
			</ul>
		</nav>
		<section class="block py-5" id="visi">
			<?php if (!empty($misi) && !empty($visi)) { ?>
				<?php if (!empty($visi)) { ?>
					<div class="flex flex-col md:flex-row items-center gap-5">
						<div class="w-full md:w-1/2 space-y-3 order-2 md:order-none">
							<h3 class="font-bold text-3xl">Visi</h3>
							<?php foreach ($visi as $number => $vis) : ?>
								<p class="text-slate-700"><?= $vis->content ?></p>
							<?php endforeach; ?>
						</div>
						<div class="w-full md:w-1/2 order-1 md:order-none">
							<img class="w-full object-cover rounded-xl" alt="<?= $program->title ?>" src="<?= base_url() ?>uploads/<?= $program->image ?>" />
						</div>
					</div>
				<?php } ?>
				<hr class="my-5">
				<?php if (!empty($misi)) { ?>
					<div class="flex flex-col md:flex-row items-center gap-5">
						<div class="w-full md:w-1/2 order-1 md:order-none">
							<img class="w-full object-cover rounded-xl" alt="<?= $program->title ?>" src="<?= base_url() ?>uploads/<?= $program->image ?>" />
						</div>
						<div class="w-full md:w-1/2 space-y-3 order-2 md:order-none">
							<h3 class="font-bold text-3xl">Misi</h3>
							<ol class="text-slate-700 list-decimal ml-5 space-y-3">
								<?php foreach ($misi as $number => $mis) : ?>
									<li><?= $mis->content ?></li>
								<?php endforeach; ?>
							</ol>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<div class="h-[500px] text-center flex justify-center items-center">
					<lottie-player src="<?= base_url() ?>public/assets/empty.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
				</div>
			<?php } ?>
		</section>
		<section class="hidden py-5" id="keunggulan">
			<?php if (!empty($keunggulan)) { ?>
				<?php if (!empty($keunggulan)) { ?>
					<div class="flex flex-col md:flex-row items-center gap-5">
						<div class="w-full md:w-1/2 order-1 md:order-none">
							<img class="w-full object-cover rounded-xl" alt="<?= $program->title ?>" src="<?= base_url() ?>uploads/<?= $program->image ?>" />
						</div>
						<div class="w-full md:w-1/2 space-y-3 order-2 md:order-none">
							<h3 class="font-bold text-3xl">Keunggulan</h3>
							<ol class="text-slate-700 list-decimal ml-5 space-y-3">
								<?php foreach ($keunggulan as $number => $unggul) : ?>
									<li><?= $unggul->content ?></li>
								<?php endforeach; ?>
							</ol>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<div class="h-[500px] text-center flex justify-center items-center">
					<lottie-player src="<?= base_url() ?>public/assets/empty.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
				</div>
			<?php } ?>
		</section>
		<section class="hidden py-5" id="kompetensi">
			<?php if (!empty($kompetensi)) { ?>
				<?php if (!empty($kompetensi)) { ?>
					<div class="flex flex-col md:flex-row items-center gap-5">
						<div class="w-full md:w-1/2 order-1 md:order-none">
							<img class="w-full object-cover rounded-xl" alt="<?= $program->title ?>" src="<?= base_url() ?>uploads/<?= $program->image ?>" />
						</div>
						<div class="w-full md:w-1/2 space-y-3 order-2 md:order-none">
							<h3 class="font-bold text-3xl">Kompetensi</h3>
							<ol class="text-slate-700 list-decimal ml-5 space-y-3">
								<?php foreach ($kompetensi as $number => $kompeten) : ?>
									<li><?= $kompeten->content ?></li>
								<?php endforeach; ?>
							</ol>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<div class="h-[500px] text-center flex justify-center items-center">
					<lottie-player src="<?= base_url() ?>public/assets/empty.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
				</div>
			<?php } ?>
		</section>
		<section class="hidden py-5" id="karir">
			<?php if (!empty($careers)) { ?>
				<div class="flex flex-wrap flex-row justify-center items-center">
					<?php foreach ($careers as $number => $career) : ?>
						<div class="w-1/2 md:w-1/5 p-2 transition ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
							<div class="flex items-center justify-center bg-red-500 h-40 rounded-lg">
								<span class="text-white"><?= $career->content ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php } else { ?>
				<div class="h-[500px] text-center flex justify-center items-center">
					<lottie-player src="<?= base_url() ?>public/assets/empty.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
				</div>
			<?php } ?>
		</section>
		<section class="hidden py-5" id="alumni">
			<?php if (!empty($alumnis)) { ?>
					<div class="flex flex-wrap flex-row justify-center items-center">
						<?php foreach ($alumnis as $number => $alumni) : ?>
							<div class="w-full md:w-1/3 p-2 transition ease-in-out delay-50 md:hover:-translate-y-1 md:hover:scale-105 duration-300">
								<div class="text-center bg-white border border-slate-200 rounded-xl p-5 space-y-3">
									<span class="inline-block h-20 w-20 rounded-full bg-red-500"></span>
									<h3 class="text-lg"><?= $alumni->name ?></h3>
									<hr>
									<ul class="text-[13px] text-slate-800">
										<li><span class="font-bold">Alumni</span> <?= $alumni->school ?></li>
										<li><span class="font-bold">Bekerja</span> di <?= $alumni->work ?></li>
										<li><span class="font-bold">Sebagai</span> <?= $alumni->profession ?></li>
									</ul>
									<hr>
									<p class="text-slate-800"><i>"<?= $alumni->quote ?>."</i></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php } else { ?>
					<div class="h-[500px] text-center flex justify-center items-center">
						<lottie-player src="<?= base_url() ?>public/assets/empty.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
					</div>
				<?php } ?>
		</section>
	</div>
</section>

<script>
	const hiddenSection = (data) => {
		switch (data) {
			case 'visi':
				$('#visi').show();
				$('#keunggulan').hide();
				$('#kompetensi').hide();
				$('#karir').hide();
				$('#alumni').hide();
				break;
			case 'keunggulan':
				$('#visi').hide();
				$('#keunggulan').show();
				$('#kompetensi').hide();
				$('#karir').hide();
				$('#alumni').hide();
				break;
			case 'kompetensi':
				$('#visi').hide();
				$('#keunggulan').hide();
				$('#kompetensi').show();
				$('#karir').hide();
				$('#alumni').hide();
				break;
			case 'karir':
				$('#visi').hide();
				$('#keunggulan').hide();
				$('#kompetensi').hide();
				$('#karir').show();
				$('#alumni').hide();
				break;
			case 'alumni':
				$('#visi').hide();
				$('#keunggulan').hide();
				$('#kompetensi').hide();
				$('#karir').hide();
				$('#alumni').show();
				break;
			default:
				$('#visi').hide();
		}
	}
</script>