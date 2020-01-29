<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Badan Narkotika Nasional</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/Logo_BNN.png" sizes="any" />
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/Chart.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="homepage.php">
        <img class="navbar-brand-full" src="img/brand/BNN2.png" width="130" height="40">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link">Divisi Umum</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link">Divisi P2M</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link">Divisi Rehabilitasi</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link">Divisi Pemberantasan</a>
        </li>
      </ul>
      <main class="main">
      <div class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
          <a class="btn">
            <i class="icon-speech"></i>
          </a>
          <a class="btn">
            <i class="icon-settings"></i></a>
        </div>
      </div>
  </main>
  <main class="main">
  <div class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
      <a class="btn">
        <i class="icon-speech"></i>
      </a>
      <a class="btn" href="login.php">
        <i class="icon-settings"></i>LOGIN</a>
    </div>
  </div>
</main>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          </a>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="card-columns cols-2">
            <div class="card">
              <div class="card-header"><h3>Divisi Pemberantasan</h3>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <div style="width: 800px;margin: 0px auto;">
                     <canvas id="myChart"></canvas>
                  </div>
                  <?php
                    require_once 'CRUD/koneksi.php'
                    ?>
                  <script>
                    
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Kecamatan Tegalsari", "Kecamatan Simokerto", "Kecamatan Genteng", "Kecamatan Bubutan", "Kecamatan Gubeng" ,"Kecamatan Gunung Anyar", "Kecamatan Sukolilo", "Kecamatan Tambaksari", "Kecamatan Mulyorejo", "Kecamatan Rungkut", "Kecamatan Tenggilis Mejoyo", "Kecamatan Benowo", "Kecamatan Pakal", "Kecamatan Asemrowo", "Kecamatan Sukomanunggal", "Kecamatan Tandes", "Kecamatan Sambikarep", "Kecamatan Lakarsantri", "Kecamatan Bulak", "Kecamatan Kenjeran", "Kecamatan Semampir", "Kecamatan Pabean Cantian", "Kecamatan Krembangan", "Kecamatan Wonokromo", "Kecamatan Wonocolo", "Kecamatan Wiyung", "Kecamatan Karang Pilang", "Kecamatan Jambangan", "Kecamatan Gayungan", "Kecamatan Dukuh Pakis", "Kecamatan Sawahan"],
        datasets: [{
          label: '',
          data: [
          
          <?php 
          $kecamatan_tegalsari = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='tegalsari'");
          echo mysqli_num_rows($kecamatan_tegalsari);
          ?>, 
          
          <?php 
          $kecamatan_simokerto = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='simokerto'");
          echo mysqli_num_rows($kecamatan_simokerto);
          ?>, 
          
          <?php 
          $kecamatan_genteng = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='genteng'");
          echo mysqli_num_rows($kecamatan_genteng);
          ?>, 
          
          <?php 
          $kecamatan_bubutan = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='bubutan'");
          echo mysqli_num_rows($kecamatan_bubutan);
          ?>,
          
          <?php 
          $kecamatan_gubeng = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='gubeng'");
          echo mysqli_num_rows($kecamatan_gubeng);
          ?>,
          
          <?php 
          $kecamatan_gunung_anyar = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='gunung_anyar'");
          echo mysqli_num_rows($kecamatan_gunung_anyar);
          ?>,
          
          <?php 
          $kecamatan_sukolilo = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='gunung_sukolilo'");
          echo mysqli_num_rows($kecamatan_sukolilo);
          ?>,
          
          <?php 
          $kecamatan_tambaksari = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='tambaksari'");
          echo mysqli_num_rows($kecamatan_tambaksari);
          ?>,
          
          <?php 
          $kecamatan_mulyorejo = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='mulyorejo'");
          echo mysqli_num_rows($kecamatan_mulyorejo);
          ?>,

          <?php 
          $kecamatan_rungkut = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='rungkut'");
          echo mysqli_num_rows($kecamatan_rungkut);
          ?>,

          <?php 
          $kecamatan_benowo = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='benowo'");
          echo mysqli_num_rows($kecamatan_benowo);
          ?>,

          <?php 
          $kecamatan_pakal = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='pakal'");
          echo mysqli_num_rows($kecamatan_pakal);
          ?>,

          <?php 
          $kecamatan_asemrowo = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='asemrowo'");
          echo mysqli_num_rows($kecamatan_asemrowo);
          ?>,

          <?php 
          $kecamatan_sukomanunggal = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='sukomanunggal'");
          echo mysqli_num_rows($kecamatan_sukomanunggal);
          ?>,

          <?php 
          $kecamatan_tandes = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='tandes'");
          echo mysqli_num_rows($kecamatan_tandes);
          ?>,

          <?php 
          $kecamatan_sambikarep = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='sambikarep'");
          echo mysqli_num_rows($kecamatan_sambikarep);
          ?>,

          <?php 
          $kecamatan_lakarsantri = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='lakarsantri'");
          echo mysqli_num_rows($kecamatan_lakarsantri);
          ?>,

          <?php 
          $kecamatan_bulak = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='bulak'");
          echo mysqli_num_rows($kecamatan_bulak);
          ?>,

          <?php 
          $kecamatan_kenjeran = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='kenjeran'");
          echo mysqli_num_rows($kecamatan_kenjeran);
          ?>,

          <?php 
          $kecamatan_semampir = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='semampir'");
          echo mysqli_num_rows($kecamatan_semampir);
          ?>,

          <?php 
          $kecamatan_pabean_cantian = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='pabean_cantian'");
          echo mysqli_num_rows($kecamatan_pabean_cantian);
          ?>,

          <?php 
          $kecamatan_wonokromo = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='wonokromo'");
          echo mysqli_num_rows($kecamatan_wonokromo);
          ?>,

          <?php 
          $kecamatan_wonocolo = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='wonocolo'");
          echo mysqli_num_rows($kecamatan_wonocolo);
          ?>,

          <?php 
          $kecamatan_wiyung = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='wiyung'");
          echo mysqli_num_rows($kecamatan_wiyung);
          ?>,

          <?php 
          $kecamatan_karang_pilang = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='karang_pilang'");
          echo mysqli_num_rows($kecamatan_karang_pilang);
          ?>,

          <?php 
          $kecamatan_jambangan = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='jambangan'");
          echo mysqli_num_rows($kecamatan_jambangan);
          ?>,

          <?php 
          $kecamatan_gayungan = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='gayungan'");
          echo mysqli_num_rows($kecamatan_gayungan);
          ?>,

          <?php 
          $kecamatan_dukuh_pakis = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='dukuh_pakis'");
          echo mysqli_num_rows($kecamatan_dukuh_pakis);
          ?>,

          <?php 
          $kecamatan_sawahan = mysqli_query($koneksi,"select * from tb_tsk where kecamatan_tsk='sawahan'");
          echo mysqli_num_rows($kecamatan_sawahan);
          ?>,
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.9)',
          'rgba(54, 162, 235, 0.9)',
          'rgba(255, 206, 86, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.9)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
  <br><CENTER>Data Laporan Kasus Penangkapan Berdasarkan Wilayah Kecamatan</CENTER>
  <br><center>Grafik Data tahun 2019 - <?php echo date('Y');?> Total Kasus Narkotika</center>

                  <canvas id="canvas-1"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header"><h3>Divisi Pemberantasan</h3>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                         <div style="width: 800px;margin: 0px auto;">
                     <canvas id="myChart2"></canvas>
                  </div>
                  <?php
                    require_once 'CRUD/koneksi.php'
                    ?>
                   <script>
                    
    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Tuna Karya", "SMA", "SMK", "Mahasiswa", "Swasta"],
        datasets: [{
          label: '',
          data: [
          <?php 
          $tuna_karya = mysqli_query($koneksi,"select * from tb_tsk where pekerjaan_tsk='tuna_karya'");
          echo mysqli_num_rows($tuna_karya);
          ?>, 
          <?php 
          $sma = mysqli_query($koneksi,"select * from tb_tsk where pekerjaan_tsk='sma'");
          echo mysqli_num_rows($sma);
          ?>, 
          <?php 
          $smk = mysqli_query($koneksi,"select * from tb_tsk where pekerjaan_tsk='smk'");
          echo mysqli_num_rows($smk);
          ?>, 
          <?php 
          $mahasiswa = mysqli_query($koneksi,"select * from tb_tsk where pekerjaan_tsk='mahasiswa'");
          echo mysqli_num_rows($mahasiswa);
          ?>,
          <?php 
          $swasta = mysqli_query($koneksi,"select * from tb_tsk where pekerjaan_tsk='swasta'");
          echo mysqli_num_rows($swasta);
          ?>,
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.9)',  
          'rgba(54, 162, 235, 0.9)',
          'rgba(255, 206, 86, 0.9)',
          'rgba(75, 192, 192, 0.9)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
<br><CENTER><h5>Data Laporan Penangkapan Tersangka Berdasarkan Status Pekerjaan</CENTER></h5>
<br><center><h5>Grafik Tahun 2019 - <?php echo date('Y');?> Pekerjaan Tersangka</center></h5>

                  <canvas id="canvas-1"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header"><h3>Divisi Pemberantasan</h3>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                         <div style="width: 800px;margin: 0px auto;">
                     <canvas id="myChart3"></canvas>
                  </div>
                  <?php
                    require_once 'CRUD/koneksi.php'
                    ?>
                   <script>
                    
    var ctx = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Sabu", "Ganja", "Ekstasi", "Okerbaya", "kokain"],
        datasets: [{
          label: '',
          data: [
          <?php 
          $sabu = mysqli_query($koneksi,"select * from tb_bb where nama_bb='sabu'");
          echo mysqli_num_rows($sabu);
          ?>, 
          <?php 
          $ganja = mysqli_query($koneksi,"select * from tb_bb where nama_bb='ganja'");
          echo mysqli_num_rows($ganja);
          ?>, 
          <?php 
          $ekstasi = mysqli_query($koneksi,"select * from tb_bb where nama_bb='ekstasi'");
          echo mysqli_num_rows($ekstasi);
          ?>, 
          <?php 
          $okerbaya = mysqli_query($koneksi,"select * from tb_bb where nama_bb='okerbaya'");
          echo mysqli_num_rows($okerbaya);
          ?>,
          <?php 
          $kokain = mysqli_query($koneksi,"select * from tb_bb where nama_bb='kokain'");
          echo mysqli_num_rows($kokain);
          ?>,
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.9)',
          'rgba(54, 162, 235, 0.9)',
          'rgba(255, 206, 86, 0.9)',
          'rgba(75, 192, 192, 0.9)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
<br><CENTER><h5>Data Laporan Barang Bukti</CENTER></h5>
<br><center><h5>Grafik Tahun 2019 - <?php echo date('Y');?> </center></h5>

                  <canvas id="canvas-2"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header"><h3>Visi dan Misi</h3>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <p>Visi :
"Mewujudkan masyarakat Surabaya yang sehat, bebas dari penyalahgunaan dan peredaran gelap Narkotika, dalam rangka mendukung terciptanya sumber daya manusia Indonesia yang berkualitas dan Kompetitif di segala bidang".</p>

<p>Misi :
"Menyatukan dan menggerakkan segenap potensi masyarakat Surabaya dalam upaya Pencegahan, Rehabilitasi dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkotika"</p>

                  <canvas id="canvas-3"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header"><h3>Tugas Pokok dan Fungsi</h3>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                 <p>Tugas Pokok BNN Kota Surabaya</p>
<h3>Kedudukan :</h3>
<p>Badan Narkotika Nasional yang selanjutnya dalam Peraturan Kepala Badan Narkotika Nasional disebut BNN adalah lembaga pemerintah non kementrian yang berkedudukan di bawah dan bertanggung jawab kepada Presiden melalui koordinasi Kepala Kepolisian Negara Republik Indonesia. BNN dipimpin oleh Kepala.</p>

<h3>Tugas :</h3>
<p>1. Menyusun dan melaksanakan kebijakan nasional mengenai pencegahan dan pemberantasan penyalahgunaan dan peredaran gelap Narkotika dan Prekursor Narkotika</p>
<p>2. Mencegah dan memberantas penyalahgunaan dan peredaran gelap Narkotika dan Prekursor Narkotika</p>
<p>3. Berkoordinasi dengan Kepala Kepolisian Negara Republik Indonesia dalam pencegahan dan pemberantasan penyalahgunaan dan peredaran gelap Narkotika dan Prekursor Narkotika</p>
<p>4. Meningkatkan kemampuan lembaga rehabilitasi medis dan rehabilitasi sosial pecandu Narkotika, baik yang diselenggarakan oleh pemerintah maupun masyarakat</p>
<p>5. Memberdayakan masyarakat dalam pencegahan penyalahgunaan dan peredaran gelap Narkotika dan Prekursor Narkotika</p>
<p>6. Memantau, mengarahkan dan meningkatkan kegiatan masyarakat dalam pencegahan penyalahgunaan dan peredaran gelap Narkotika dan Psikotropika Narkotika</p>
<p>7. Melalui kerja sama bilateral dan multiteral, baik regional maupun internasional, guna mencegah dan memberantas peredaran gelap Narkotika dan Prekursor Narkotika</p>
<p>8. Mengembangkan laboratorium Narkotika dan Prekursor Narkotika</p>
<p>9. Melaksanakan administrasi penyelidikan dan penyidikan terhadap perkara penyalahgunaan dan peredaran gelap Narkotika dan Prekursor Narkotika</p>
<p>10. Membuat laporan tahunan mengenai pelaksanaan tugas dan wewenang.
<p>11.Selain tugas sebagaimana diatas, BNN juga bertugas menyusun dan melaksanakan kebijakan nasional mengenai pencegahan dan pemberantasan penyalahgunaan dan peredaran gelap psikotropika, prekursor dan bahan adiktif lainnya kecuali bahan adiktif untuk tembakau dan alkohol.</p>

<h3>Fungsi :</h3>
<p>Penyusunan dan perumusan kebijakan nasional di bidang pencegahan dan pemberantasan penyalahgunaan dan peredaran gelap narkotika, psikotropika dan prekursor serta bahan adiktif lainnya kecuali bahan adiktif untuk tembakau dan alkohol yang selanjutnya disingkat dengan P4GN.
Penyusunan, perumusan dan penetapan norma, standar, kriteria dan prosedur P4GN.
Penyusunan perencanaan, program dan anggaran BNN.
Penyusunan dan perumusan kebijakan teknis pencegahan, pemberdayaan masyarakat, pemberantasan, rehabilitasi, hukum dan kerjasama di bidang P4GN.
Pelaksanaan kebijakan nasional dan kebijakna teknis P4GN di bidang pencegahan, pemberdayaan masyarakat, pemberantasan, rehabilitasi, hukum dan kerjasama.
Pelaksanaan pembinaan teknis di bidang P4GN kepada instansi vertikal di lingkungan BNN.
Pengoordinasian instansi pemerintah terkait dan komponen masyarakat dalam rangka penyusunan dan perumusan serta pelaksanaan kebijakan nasional di bidang P4GN.
Penyelenggaraan pembinaan dan pelayanan administrasi di lingkungan BNN.
Pelaksanaan fasilitasi dan pengkoordinasian wadah peran serta masyarakat.
Pelaksanaan penyelidikan dan penyidikan penyalahgunaan dan peredaran gelap Narkotika dan Prekursor Narkotika.
Pelaksanaan pemutusan jaringan kejahatan terorganisasi di bidang narkotika, psikotropika dan prekursor serta bahan adiktif lainnya, kecuali bahan adiktif untuk tembakau dan alkohol.
Pengoordinasian instansi pemerintah terkait maupun komponen masarakat dalam pelaksanaan rehabilitasi dan penyatuan kembali ke dalam masyarakat serta perawatan lanjutan bagi penyalahguna dan/atau pecandu narkotika dan psikotropika serta bahan adiktif lainnya kecuali bahan adiktif untuk tembakau dan alkohol di tingkat pusat dan daerah.
Pengkoordinasian peningkatan kemampuan lembaga rehabilitasi medis dan rehabilitasi sosial pecandu narkotika dan psikotropika serta bahan adiktif lainnya, kecuali bahan adiktif untuk tembakau dan alkohol yang diselenggarakan oleh pemerintah dan masyarakat.
Peningkatan kemampuan lembaga rehabilitasi penyalahguna dan/atau pecandu narkotika dan psikotropika serta bahan adiktif lainnya, kecuali bahan adiktif tembakau dan alkohol berbasis komunitas terapeutik atau metode lain yang telah teruji keberhasilannya.
Pelaksanaan penyusunan, pengkajian dan perumusan peraturan perundang-undangan serta pemberian bantuan hukum di bidang P4GN.
Pelaksanaan kerjasama nasional, regional dan internasional di bidang P4GN.
Pelaksanaan pengawasan fungsional terhadap pelaksanaan P4GN di lingkungan BNN.
Pelaksanaan koordinasi pengawasan fungsional instansi pemerintah terkait dan komponen masyarakat di bidang P4GN.
Pelaksanaan penegakan disiplin, kode etik pegawai BNN dan kode etik profesi penyidik BNN.
Pelaksanaan pendataan dan informasi nasional penelitian dan pengembangan, serta pendidikan dan pelatihan di bidang P4GN.
Pelaksanaan pengujian narkotika, psikotropika dan prekursor serta bahan adiktif lainnya, kecuali bahan adiktif untuk tembakau dan alkohol.
Pengembangan laboratorium uji narkotika, psikotropika dan prekursor  serta bahan adiktif lainnya, kecuali bahan adiktif tembakau dan alkohol.
Pelaksanaan evaluasi dan pelaporan pelaksanaan kebijakan nasional di bidang P4GN.</p>
                  <canvas id="canvas-4"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
    <footer class="app-footer">
      <div>
        <a href="">BNN</a>
        <span>&copy; 2020</span>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>