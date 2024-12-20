<?php
session_start();
require '../resources/functions.php';
$db = new Database();
$db->checkLogin();
$data = $db->query("SELECT * FROM resiko WHERE status = 'approved'");

$title = 'Tambah Mitigasi Solusi';
include '../resources/header.php';
include '../resources/sidebar.php';
?>
<div class="content">
    <h2>Tambah Mitigasi Solusi</h2>
    <p>Admin dapat menambahkan Mitigasi dan Solusi untuk masalah yang ada</p>
    <h3>Table Management Resiko</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Masalah</th>
                <th>Divisi</th>
                <th>Tingkat</th>
                <th>Penyebab</th>
                <th>Sumber</th>
                <th>Mitigasi</th>
                <th>Solusi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php if (empty($data)) : ?>
                <tr><td colspan="9">-- kosong --</td></tr>
            <?php else : ?>
                <?php foreach ($data as $row) : ?>
                    <form method="post" action="">
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row["resiko"]; ?></td>
                            <td><?= $row["divisi"]; ?></td>
                            <td><?= $row["tingkat"]; ?></td>
                            <td><?= $row["penyebab"]; ?></td>
                            <td><?= $row["sumber"]; ?></td>
                            <td>
                                <?= !empty($row["mitigasi"]) ? $row["mitigasi"] : '<input type="text" name="mitigasi" placeholder="Masukkan Mitigasi">'; ?>
                            </td>
                            <td>
                                <?= !empty($row["solusi"]) ? $row["solusi"] : '<input type="text" name="solusi" placeholder="Masukkan Solusi">'; ?>
                            </td>
                            <td>
                                <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                <button type="submit" name="submit">Submit</button>
                            </td>
                        </tr>
                    </form>
                <?php endforeach; ?>
            <?php endif; ?>
