<?php include 'daleman/header.php'; ?>

<?php
$barangs = 
[ 
    [
        "No" => "1",
        "Jurusan" => "XI-PPLG1",
        "Nama Barang" => "Keyboard",
        "Total Barang Yang Diambil" => "2",
        "Tanggal Pengambilan" => "2024-12-15",
        "Status" => "Rusak",
    ],
    [
        "No" => "2",
        "Jurusan" => "XI-PPLG2",
        "Nama Barang" => "Mouse",
        "Total Barang Yang Diambil" => "3",
        "Tanggal Pengambilan" => "2024-10-23",
        "Status" => "Rusak",
    ],
    [
        "No" => "3",
        "Jurusan" => "X-PPLG",
        "Nama Barang" => "Unit Komputer",
        "Total Barang Yang Diambil" => "4",
        "Tanggal Pengambilan" => "2024-09-2",
        "Status" => "BAGUS",
    ],
    [
        "No" => "4",
        "Jurusan" => "X-TKJT",
        "Nama Barang" => "Keyboard",
        "Total Barang Yang Diambil" => "5",
        "Tanggal Pengambilan" => "2024-08-23",
        "Status" => "BAGUS"
    ]
];
$item = 1;
?>


<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Sapras SMK PI</h2>
        <div class="input-group dashboard-filter">
            <button class="btn btn-success ms-auto"><i class="fa-solid fa-plus"></i>Tambah</button>
        </div>
    </div>
    <div class="col-xxl-12">
        <div class="panel">
            <div class="panel-header">
                <h5>Barang Tersedia</h5>
                <div id="tableSearch"></div>
            </div>
            <div class="panel-body">
                <table class="table table-dashed recent-order-table" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jurusan</th>
                            <th>Nama Barang</th>
                            <th>Total Barang Yang Diambil</th>
                            <th>Status</th>
                            <th>Tanggal Pengambilan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barangs as $barang): ?>
                            <tr>
                                <td><?= $item++ ?></td>
                                <td><?= $barang["Jurusan"] ?></td>
                                <td><?= $barang["Nama Barang"] ?></td>
                                <td><?= $barang["Total Barang Yang Diambil"] ?></td>
                                <td>
                                    <?php 
                                    $status = $barang["Status"];
                                    if ($status == "BAGUS") {
                                        echo "<span class='badge bg-success'>$status</span>";
                                    } else {
                                        echo "<span class='badge bg-danger'>$status</span>";
                                    }
                                    ?>
                                </td>
                                <td><?= $barang["Tanggal Pengambilan"] ?></td>
                                <td>
                                    <div class="btn-box">
                                        <button onclick="viewItem(<?= $barang['No'] ?>)"><i class="fa-light fa-eye"></i></button>
                                        <button onclick="editItem(<?= $barang['No'] ?>)"><i class="fa-light fa-pen"></i></button>
                                        <button onclick="deleteItem(<?= $barang['No'] ?>)"><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
    
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">SMK PRAKARYA INTERNASIONAL</span></p>
        </div>
        <!-- footer end -->
    </div>

<?php include 'daleman/footer.php'; ?>