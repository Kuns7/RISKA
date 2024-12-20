<div class="menuToggle"></div>
<div class="sidebar" id="sidebar">
    <ul>
        <li class="logo" style="--bg:#333;">
            <a href="#">
                <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
                <div class="text">RISKAPP</div>
            </a>
        </li>
        <div class="Menulist">
            <li style="--bg:#ffa117;" class="<?= basename($_SERVER['PHP_SELF']) == 'admin.php' ? 'active' : ''; ?>">
                <a href="admin.php">
                    <div class="icon"><ion-icon name="person-outline"></ion-icon></div>
                    <div class="text">Homepage</div> 
                </a>
            </li>
            <li style="--bg:#0fc70f;" class="<?= basename($_SERVER['PHP_SELF']) == 'MitigasiSolusi.php' ? 'active' : ''; ?>">
                <a href="MitigasiSolusi.php">
                    <div class="icon"><ion-icon name="sync-outline"></ion-icon></div>
                    <div class="text">Deleting</div> 
                </a>
            </li>
            <li style="--bg:#f44336;" class="<?= basename($_SERVER['PHP_SELF']) == 'hapus.php' ? 'active' : ''; ?>">
                <a href="hapus.php">
                    <div class="icon"><ion-icon name="trash-outline"></ion-icon></div>
                    <div class="text">Solution</div> 
                </a>
            </li>
        </div>
        <div class="bottom">
            <li style="--bg:#e91e63;">
                <a href="../process/logout.php">
                    <div class="icon"><ion-icon name="power-outline"></ion-icon></div>
                    <div class="text">Logout</div> 
                </a>
            </li>
        </div>
    </ul>
</div>
<script>
    let menuToggle = document.querySelector('.menuToggle');
    let sidebar = document.querySelector('.sidebar');
    menuToggle.onclick = function () {
        menuToggle.classList.toggle('active');
        sidebar.classList.toggle('active');
    };

    let Menulist = document.querySelectorAll('.Menulist li');
    function activeLink() {
        Menulist.forEach((item) => item.classList.remove('active'));
        this.classList.add('active');
    }
    Menulist.forEach((item) => item.addEventListener('click', activeLink));
</script>
