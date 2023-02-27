<section class="my-20">
	<div class="container mx-auto px-4">
		<?php if (!empty($organizations)) { ?>
			<div class="w-full flex-col justify-center items-center gap-5">
				<?php foreach ($organizations as $organization) { ?>
					<div class="text-center">
						<span class="text-gray-700"><?= $this->session->userdata('language') == 'en' ? 'Organizational Structure' : 'Struktur Organisasi' ?></span><br>
						<span class="font-bold"><?= $organization->title ?></span>
					</div>
					<div class="shadow rounded-lg mb-20 mt-10">
						<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers tags lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; modified=\&quot;2023-02-14T04:53:56.066Z\&quot; agent=\&quot;5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36\&quot; etag=\&quot;zcEqzj7r5B3GXjpH7mug\&quot; version=\&quot;20.8.20\&quot; type=\&quot;google\&quot;&gt;&lt;diagram name=\&quot;Page-1\&quot; id=\&quot;19d8dcba-68ad-dc05-1034-9cf7b2a963f6\&quot;&gt;<?= $organization->drawio ?>&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
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