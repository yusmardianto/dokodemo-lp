<?php 
    $page = 'subscribe';
    $page_title = 'Prosedur Berlangganan Dokodemo-Kerja';

    $meta_description = 'Prosedur berlangganan untuk menggunakan layanan yang disediakan oleh Logique Digital Indonesia, termasuk perjanjian & konsultasi dan pesanan pembelian.';
    $meta_keyword = 'Prosedur Berlangganan, Dokodemo-Kerja, PT LOGIQUE Digital Indonesia, Hubungi Kami, Persetujuan & Konsultasi, consultation, dokodemo instalasi, proses instalasi';

    $og_title = 'Prosedur Berlangganan Dokodemo-Kerja';
    $og_image = 'https://dokodemo-kerja.com/img/og-img/subscribe.jpg';
    $og_desription = 'Prosedur berlangganan untuk menggunakan layanan yang disediakan oleh Logique Digital Indonesia, termasuk perjanjian & konsultasi dan pesanan pembelian.';

    $add_css = '<link rel="stylesheet" href="/css/style-subscribe.css" />';

    include($_SERVER['DOCUMENT_ROOT'].'/ind/component/header.php');
?>
<div class="">

  <section class="mt-3 subscribe-header">
    <div class="container subscribe-header-container pb-3">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="subscribe-header-title">Prosedur Berlangganan</h1>
          <p class="subscribe-header-content">
            Sebelum membeli Dokodemo-Kerja berikut adalah beberapa hal yang harus Anda ketahui tentang prosedur kami.
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="hr-manager-benefits">
      <div class="container">
          <div class="row">
              <div class="col-md-12 benefits-item">
                  <h2>1. Hubungi Kami</h2>
                  <p>Untuk membeli dokodemo kerja, Anda harus menghubungi tim sales kami untuk mendiskusikan ketentuan-ketentuan. Anda bisa menjangkau kami melalui Whatsapp, Formulir Online, Telefon, atau Email.</p>
                  <p>Jam kantor kami mulai dari 09:00 sampai 17.00 WIB (Senin-Jumat).</p>
              </div>
              <div class="col-md-12 benefits-item">
                  <h2>2. Persetujuan & Konsultasi</h2>
                  <p>
                    Kami akan mendiskusikan dan meninjau kebutuhan Anda pada fase Persetujuan & Konsultasi. Persetujuan meliputi; proses transisi, proses instalasi, fitur custom, dll.
                  </p>
                  <p>
                    Anda dibebaskan untuk merevisi persetujuan awal sebelum Purchase Order diterbitkan. 
                  </p>
              </div>
              <div class="col-md-12 benefits-item">
                  <h2>3. Purchase Order</h2>
                  <p>
                    Setelah mengkonfirmasi ketentuan dari kebutuhan Anda, kami akan menerbitkan sebuah Purchase Order yang akan dikirimkan ke kantor atau email perusahaan Anda. Isi dari PO merangkum Syarat dan Ketentuan, Syarat Pembayaran, Jumlah Pengguna, PPN, dan Total Harga.
                  </p>
                  <p>
                    Setelah PO disetujui, kami akan membuat Akun Dokodemo-Kerja untuk perusahaan Anda, dan menawarkan layanan pelatihan / sesi instalasi gratis jika diperlukan.  
                  </p>
              </div>
              <div class="col-md-12 benefits-item">
                  <h2>4. Invoice</h2>
                  <p>
                    Faktur berulang akan dikirimkan kepada Anda pada awal bulan berikutnya. Anda dapat melihat faktur di dashboard admin Anda, atau dari email yang akan kami kirimkan setiap akhir bulan. 
                  </p>
                  <p>Perhatikan bahwa:</p>
                  <ol>
                    <li>
                      Ketentuan Pembayaran: Biaya ditutup pada akhir bulan, dan harus dibayar pada akhir bulan berikutnya
                    </li>
                    <li>
                      Jika pengguna menggunakan Dokodemo-Kerja selama kurang dari 10 hari dalam jangka waktu satu bulan, maka ia tidak akan dikenakan biaya pengguna tambahan.  
                    </li>
                  </ol>
              </div>
          </div>
      </div>
  </section>

  <section class="mb-5 subscribe-footer">
    <div class="container subscribe-footer-container pt-5">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="subscribe-footer-title">Decrease Expenses, Earn More</h3>
          <!-- <p class="subscribe-foooter-content">
            Jadwalkan pertemuan online dengan kami untuk melihat cara kerja Dokodemo-Kerja!
          </p>
          <button class="btn btn-primary" data-toggle="collapse" href="#collapseExample">Hubungi Kami</button> -->
        </div>
      </div>
    </div>
  </section>
  
  <!-- <section class="read-testimony">
      <h3>Wonder what other user are saying?</h3>
      <a href="index.php#testimony" class="btn-read-testimony" id="btn-read-testimony">
          Read user testimony
      </a>
  </section> -->

</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/ind/component/footer.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>
