<?php
include("koneksi.php");
?>
<?php
include("koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="k.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                        <span class="title">Film</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <span class="title">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubbles"></ion-icon></span>
                        <span class="title">Komentar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle"></ion-icon></span>
                        <span class="title">Bantuan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings"></ion-icon></span>
                        <span class="title">Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- userimg -->
                <div class="user">
                    <img src="S.jpeg">
                </div>
            </div>

            <!-- cards -->
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504rb</div>
                        <div class="cardname">Penonton</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80%</div>
                        <div class="cardname">Penjualan</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Rp.284</div>
                        <div class="cardname">Pengeluaran</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="sad-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Rp.900</div>
                        <div class="cardname">Keuntungan</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- order details list -->
            <div class="details">
                <div class="recentorders">
                    <div class="cardheader">
                        <a href="tambah.php" class="btn">Tambah</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                            <td>No</td>
                            <td>Nama Penyewa</td>
                            <td>Alamat</td>
                            <td>Genre Film</td>
                            <td>Judul Film</td>
                            <td>Tahun Film</td>
                            <td>Tanggal Sewa</td>
                            <td>Tanggal Kembali</td>
                            <td>Harga</td>
                            <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
    include("koneksi.php");
    $query=mysqli_query($db,"SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd=tb_dvd.id_dvd");

    while($sewa=mysqli_fetch_array($query)){
        echo"<tr>";
             echo"<td>".$sewa['id_penyewa']."</td>";
             echo"<td>".$sewa['nama_penyewa']."</td>";
             echo"<td>".$sewa['alamat']."</td>";
             echo"<td>".$sewa['genre_film']."</td>";
             echo"<td>".$sewa['judul_film']."</td>";
             echo"<td>".$sewa['tahun_film']."</td>";
             echo"<td>".$sewa['tanggal_sewa']."</td>";
             echo"<td>".$sewa['tanggal_kembali']."</td>";
             echo"<td>".$sewa['harga']."</td>";
             echo"<td>";
             echo "<button><a href='edit.php?id=".$sewa['id_dvd']."'>Edit</a></button> |";
             echo "<button><a href='hapus.php?id=".$sewa['id_dvd']."'>hapus</a></button>";
            echo "</td>";
             echo"</tr>"; 
                   
    }
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script>
        // menutoggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        // add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover,activeLink'));
    </script>
    
</body>
</html>