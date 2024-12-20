<?php
session_start();
require '../resources/functions.php';
$db = new Database();
$db->checkLogin();
$data = $db->query("SELECT * FROM resiko");

$title = 'Dashboard';
include '../resources/header.php';
include '../resources/sidebar.php';
?>
<div class="content">
    <h2>Homepage Admin</h2>
    <p>Selamat datang, <?= $_SESSION['username']; ?></p>
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
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php if (empty($data)) : ?>
                <tr><td colspan="9">-- kosong --</td></tr>
            <?php else : ?>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["resiko"] ?></td>
                        <td><?= $row["divisi"] ?></td>
                        <td><?= $row["tingkat"] ?></td>
                        <td><?= $row["penyebab"] ?></td>
                        <td><?= $row["sumber"] ?></td>
                        <td><?= $row["mitigasi"] ?></td>
                        <td><?= $row["solusi"] ?></td>
                        <td>
                            <?php if ($row['status'] != "pending") : ?>
                                <?= $row["status"]; ?>
                            <?php else : ?>
                                <form method="post" action="admin.php?id=<?= $row["id"]; ?>">
                                    <select name="status">
                                        <?php
                                        $enum_status = $db->enum("SHOW COLUMNS FROM resiko LIKE 'status'");
                                        foreach ($enum_status as $status) :
                                            $selected = ($status == 'pending') ? 'selected' : '';
                                            echo "<option value='$status' $selected>$status</option>";
                                        endforeach;
                                        ?>
                                    </select>
                                    <input type="submit" name="submit" value="Submit">
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $status = $_POST['status'];
    $db->approval($id, $status);
    header('Location: admin.php');
    exit;
}
?>
</body>
</html>
