<!DOCTYPE html>
<html>

<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Laporan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .line-title {
                border: 0;
                border-style: inset;
                border-top: 1px solid #000;
            }
        </style>
    </head>
</head>

<body>
    <img src="assets/img/logo-bmkg.png" style="position: absolute; width: 60px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 2.5; font-weight:bold;">
                    BADAN METEOROLOGI, KLIMATOLOGI DAN GEOFISIKA
                </span><br>
                <small>JAWA TENGAH</small>
                <br>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <p align="center">
        LAPORAN HASIL SURVEY KEPUASAN MASYARAKAT
    </p>
    <div style="font-size: 8px; overflow-x:auto;">
        <table class="table table-bordered" style="width: 100%;">
            <tr>
                <th>ID</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Email</th>
                <th>Jenis Pelayanan</th>
                <th>Saran</th>
            </tr>
            <tbody>
                <?php foreach ($data_responden as $d) :
                ?>
                    <tr>
                        <td><?php echo  $d->ID; ?></td>
                        <td><?php echo  $d->Umur; ?></td>
                        <td><?php echo  $d->Jenis_kelamin; ?></td>
                        <td><?php echo  $d->Pendidikan; ?></td>
                        <td><?php echo  $d->Pekerjaan; ?></td>
                        <td><?php echo  $d->Email; ?></td>
                        <td><?php echo  $d->Pelayanan; ?></td>
                        <td><?php if($d->Saran == null){echo "tidak ada saran";} else { echo  $d->Saran; } ?> </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>