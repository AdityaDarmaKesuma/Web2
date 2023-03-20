<?php
require_once 'header.php';
require_once 'sidebar.php';

//Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01102", "uts" => 90, "uas" => 80, "tugas" => 90];
$nilai3 = ["id" => 3, "nim" => "01103", "uts" => 70, "uas" => 74, "tugas" => 95];
$nilai4 = ["id" => 4, "nim" => "01104", "uts" => 80, "uas" => 82, "tugas" => 82];

//Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container">
                    <h1 class="text-center">Daftar Nilai Siswa</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Uts</th>
                                <th scope="col">Uas</th>
                                <th scope="col">Tugas</th>
                                <th scope="col">Nilai Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kumpulan_nilai as $nilai): ?>

                                <tr>
                                    <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                    <td>
                                        <?= $nilai["id"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["nim"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["uts"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["uas"] ?>
                                    </td>
                                    <td>
                                        <?= $nilai["tugas"] ?>
                                    </td>
                                    <td>
                                        <?= number_format($nilai_akhir, 2, ",", ".") ?>
                                    </td>

                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <?php
    require_once 'footer.php'

        ?>