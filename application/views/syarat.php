<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .atas {
            margin-top: 50px;
        }

        .btn {
            border: white;
            transition: .3s;
            border-radius: 40px;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px 25px;

        }

        .btn:hover {
            background-color: green;
            border: none;

        }
    </style>
     <link rel="icon" href="<?php echo base_url() . 'assets/img/logo.png' ?>">
    <title>0 Rupiah</title>
</head>


<?php

$this->load->view('template/header');
?>

<body>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <h2 style="text-align: center">Syarat dan Ketentuan Informasi 0 Rupiah</h2>
        </div>
        <div class="atas">
            <h5>
                BERDASARKAN PERATURAN KEPALA BMKG NO 12 TAHUN 2019 MAKA KEGIATAN PENGENAAN TARIF SEBESAR RP.0,00 (NOL RUPIAH) TERDIRI ATAS
            </h5>
            <ol>
                <li>
                    Kegiatan yang dilakukan dalam rangka memenuhi kewajiban/komitmen internasional </li>
                <li>Kegiatan penanggulangan bencana</li>
                <li> Kegiatan sosial</li>
                <li>Kegiatan keagamaan</li>
                <li> Kegiatan pertahanan keamanan</li>
                <li>Kegiatan pendidikan dan penelitian non komersial</li>
                <li>Kegiatan pemerintah atau pemerintah daerah atas kerjasama dengan Badan</li>
            </ol>
            </p>
        </div>
        <div class="tengah">
            <h5>PERSYARATAN</h5>
            <a target="_blank" href="<?php echo base_url() . 'assets/syarat.pdf'?>">PERSYARATAN DAN TATA CARA PENGENAAN TARIF NOL RUPIAH ATAS JENIS PNBP.pdf</a>
            <P>
                <ol>
                    <li>Untuk kegiatan no 1-5 melampirkan kartu indentitas dan surat pengantar dari instansi</li>
                    <div class="row justify-content-center">
                        <a id="tombol1" class="btn btn-primary"  href="<?php echo base_url(). 'page/form1'?>">Form Pengajuan</a>
                    </div>

                    <li>Untuk kegiatan no 6 melampirkan persyaratan sebagai berikut:</li>

                    <ol type='a'>
                        <li>Surat pengantar dari sekolah/kampus ditujukan ke Stasiun Meteorologi Klimatologi dan Geofisika Jawa Tengah</li>
                        <li>Proposal penelitian</li>
                        <li>Surat pernyataan bermaterai </li>
                        <li>Kartu identitas</li>
                    </ol>
                    <div class="row justify-content-center">
                        <a id="tombol2" class="btn btn-primary" href="<?php echo base_url(). 'page/form2'?>">Form Pengajuan</a>
                    </div>

                </ol>
            </P>
        </div>
    </div>


    <?php $this->load->view('template/footer');  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>