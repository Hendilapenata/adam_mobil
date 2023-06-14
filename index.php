<?php 
include "config/db.php";
?>

<!DOCTYPE html>
<html lang="en">
    <!-- header -->
<?php include "header.php";
?>

<body>
<nav class="navbar">
        <div class="nav">
            <img src="img/logo1.png" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="#"><img src="img/user.png" alt=""></a>
                <a href="#"><img src="img/cart.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="#home" class="link">home</a></li>
            <li class="link-item"><a href="#mobil" class="link">Mobil</a></li>
            <li class="link-item"><a href="#motor" class="link">Motor</a></li>
            <li class="link-item"><a href="#about" class="link">about</a></li>
            <li class="link-item"><a href="#contact" class="link">contact</a></li>
        </ul>
    </nav>

        <!-- hero section -->
        <header class="hero-section" id="home">
            <div class="content">
                <img src="img/logo2.png" class="logo" alt="">
                <p class="sub-heading">showroom yang menyediakan layanan jual beli motor mobil bekas dan fasilitas kredit untuk memudahkan pelanggan dalam memperoleh motor mobil impian mereka.</p>
            </div>
        </header>

       

        <!-- produk -->
        <?php include "product.php";?>

        <hr>
    <br>
    <section class="about" id="about">
        <h2 class="heading">About</h2>
        <p class="des">
            Adam Mobil adalah sebuah showroom yang menyediakan layanan jual beli motor mobil bekas dan fasilitas kredit untuk memudahkan pelanggan dalam memperoleh motor mobil impian mereka. Dengan pengalaman bertahun-tahun di bidang ini, 
            Adam Mobil telah menjadi salah satu penyedia layanan terpercaya di sektor jual beli motor bekas.
            Adam Mobil menawarkan berbagai pilihan motor bekas dengan berbagai merek dan model yang berkualitas. 
            Motor-motor yang tersedia melalui Adam Mobil telah melalui proses seleksi yang ketat untuk memastikan bahwa mereka dalam kondisi yang baik dan siap untuk digunakan.
        </p>
    </section>
    <br>
    <br>
   
<!-- contac_us -->
<?php include "contact_us.php";?>

<!-- tambah -->

<?php include "tambah.php";?>

<!-- footer -->

<?php include "footer.php";?>

  
    

        <script src="js/nav.js"></script>
        <script src="js/footer.js"></script>
        <script src="js/home.js"></script>
    


</body>     
</html>