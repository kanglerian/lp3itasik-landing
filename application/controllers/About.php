<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Benefit_model');
		$this->load->model('Information_model');
		$this->load->model('Banner_model');
		$this->load->model('Agenda_model');
		$this->load->model('Media_model');
		$this->load->model('Company_model');
		$this->load->model('Documentation_model');
		$this->load->model('Facility_model');
		$this->load->model('Program_model');
		$this->load->model('Organization_model');
		$this->load->model('Student_model');
	}

	public function index()
	{

		$data['banners'] = $this->Banner_model->get_active_records();
		$data['medias'] = $this->Media_model->get_active_records();
		$data['agendas'] = $this->Agenda_model->get_active_records();
		$data['informations'] = $this->Information_model->get_one_record();
		$data['companies'] = $this->Company_model->get_active_records();
		$data['documentations'] = $this->Documentation_model->get_active_records();
		$data['benefits'] = $this->Benefit_model->get_active_records();

		$data['mains'] = $this->Program_model->get_all_campus('Kampus Utama');
		$data['colleges'] = $this->Program_model->get_all_campus('LP3I Tasikmalaya');
		$data['politechnics'] = $this->Program_model->get_all_campus('Politeknik LP3I Kampus Tasikmalaya');

		$this->load->view('templates/header');
		$this->load->view('pages/index', $data);
		$this->load->view('templates/footer');
	}

	public function lp3i()
	{
		$data['manager'] = [
			'name' => 'H. Rudi Kurniawan, ST., MM.',
			'content' => 'Bahagia sekali rasanya kami bisa berada di tengah anda untuk menghadirkan sekelumit informasi mengenai lembaga pendidikan kami, yang selama ini telah turut membantu ribuan lulusannya meraih cita-cita menjadi profesional dibidangnya masing-masing.<br><br>Kami merasa bertanggung jawab untuk menyebarkan informasi ini seluas-luasnya agar anda, para generasi muda , tidak keliru dalam menentukan pilihan tempat belajar lanjutan pasca SMA/K, yang kami inginkan agar anda mendapatkan pendidikan terbaik yang dapat dimanfaatkan sepenuhnya dalam pengembangan karir anda dan tentunya juga, peningkatan kualitas hidup Anda.<br><br>Sebagai pelopor pendidikan profesi di Indonesia, yaitu pendidikan yang berorientasi dunia kerja tanpa meninggalkan kaidah-kaidah akademis, kami terus-menerus meningkatkan kualitas pendidikan dengan cara menyesuaikan kurikulum dengan mengikuti perkembangan yang terjadi di dunia kerja. Itulah yang menyebabkan daya saing lulusan LP3I di mata perusahaan selama ini tetap tinggi dan sulit untuk ditiru oleh lembaga lain. Era globalisasi sudah kita lalui, persaingan untuk terjun kedunia kerja akan semakin keras, kami siap menghadapinya! Bagaimana dengan anda?',
			'photo' => 'kepalakampus.png'
		];

		$data['story'] = [
			'content' => "Fenomena tidak tertampungnya lulusan pendidikan tinggi, di dunia kerja bukan cerita milik era tahun 2000-an saja. Bila dirunut ke belakang, sebenarnya gejala tersebut sudah mulai muncul ke permukaan sekitar dua puluh tahun sebelumnya. Semakin hari semakin meresahkan masyarakat yang mengalami langsung. Namun hingga menjelang akhir 1980- an, belum ada tanda-tanda pihak yang merasa terpanggil untuk menyelesaikan masalah tersebut, baik pemerintah maupun swasta.<br><br>Atas dasar itulah, maka Lembaga Pendidikan dan Pengembangan Profesi Indonesia (LP3I) didirikan pada 29 Maret 1989 dengan cabang pertama di Pasar Minggu Jakarta Selatan.<br><br>Selanjutnya, bermula dari program kursus 6 bulan, LP3I kemudian mengembangkan sayapnya menjadi lembaga pendidikan profesi (1-2 tahun), yang berorientasi dunia kerja.<br><br>Melihat keberhasilan model pendidikan yang dijalankan oleh LP3I, animo masyarakat pun semakin besar. Peserta didik bukan hanya penduduk ibukota saja, bahkan dari beberapa daerah yang cukup jauh. Oleh sebab itulah, LP3I membuka cabang-cabang hampir di seluruh kota-kota besar di Indonesia.<br><br>Kiprah LP3I semakin diakui oleh masyarakat luas. Pengakuan dari dunia industri tercermin dari semakin banyaknya perusahaan yang merekrut lulusan LP3I. Sedangkan pengakuan lain datang dari dunia pendidikan dalam dan luar negeri melalui kerjasama transfer kredit dan konversi materi ajar."
		];

		$data['vokasi'] = [
			'what' => "Pendidikan vokasi adalah pendidikan tinggi yang menunjang pada penguasaan keahlian terapan. Lulusan pendidikan vokasi akan mendapatkan gelar vokasi/gelar ahli madya.",
			'how' => "Pendidikan di LP3I memiliki fokus kepada latihan berbasis praktek (70% praktek, 30% teori) dan penempatan kerja. Program penempatan kerja kami salah satu yang terbaik di Indonesia. Di LP3I, mahasiswa berkualitas yang performanya sesuai persyaratan akan dibantu penempatan kerja hingga duduk di perusahaan."
		];

		$data['vision'] = [
			'content' => "Pendidikan vokasi adalah pendidikan tinggi yang menunjang pada penguasaan keahlian terapan. Lulusan pendidikan vokasi akan mendapatkan gelar vokasi/gelar ahli madya.",
			'image' => 'bg.jpg'
		];

		$data['mision'] = [
			'contents' => [
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
				'Mencetak sumber daya manusia yang siap kerja dengan kemampuan yang terampil dan profesional.',
			],
			'image' => 'potrait.jpg'
		];

		$this->load->view('templates/header');
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer');
	}

	public function branding()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/branding');
		$this->load->view('templates/footer');
	}

	public function organization()
	{
		$data['organizations'] = $this->Organization_model->get_active_records();
		$this->load->view('templates/header');
		$this->load->view('pages/organization', $data);
		$this->load->view('templates/footer');
	}

	public function programs()
	{
		
		$data['programs'] = $this->Program_model->get_active_records();
		$this->load->view('templates/header');
		$this->load->view('pages/programs', $data);
		$this->load->view('templates/footer');
	}

	public function facilities()
	{
		
		$data['facilities'] = $this->Facility_model->get_active_records();
		$this->load->view('templates/header');
		$this->load->view('pages/facilities', $data);
		$this->load->view('templates/footer');
	}

	public function students()
	{
		$data['students'] = $this->Student_model->get_active_records();
		$this->load->view('templates/header');
		$this->load->view('pages/students', $data);
		$this->load->view('templates/footer');
	}

}
