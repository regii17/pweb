<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleindex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>SMKerja - Welcome</title>
</head>
<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "logout") {
            echo"<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasi logout',
                text: 'Anda telah berhasil logout dari sistem.',
            });</script>
            ";
        }
        else if ($_GET['pesan'] == "belumlogin") {
            echo"<script>
            Swal.fire({
                icon: 'error',
                title: 'Anda Belum Login',
                text: 'Silahkan login terlebih dahulu.',
            });</script>
            ";
        }
    }
    ?>

    <nav>
        <img id="logo" src="assets/img/logo.webp" alt="Logo perusahaan">
        <div class="cta">
            <a href="login.php">Masuk</a>
            <a href="register.php">Buat Akun</a>
        </div>
    </nav>
    <div class="container">
        <div class="hero">
            <h1>Mencari Pekerjaan Menjadi Lebih Mudah Bagi Lulusan SMA / Sederajat</h1>
            <p>Aplikasi perekrutan kerja kami membantu anda lulusan SMA / sederajat menemukan pekerjaan impian Anda dengan cepat dan mudah. Jelajahi berbagai lowongan pekerjaan dari perusahaan terkemuka dan dapatkan kesempatan untuk berkembang dalam karir Anda.</p>
        </div>
        <div class="features">
            <div class="feature">
                <h2>Lowongan Terbaru</h2>
                <p>Temukan berbagai lowongan pekerjaan terbaru yang sesuai dengan keahlian dan minat Anda.</p>
            </div>
            <div class="feature">
                <h2>Perusahaan Ternama</h2>
                <p>Bekerja di perusahaan-perusahaan ternama yang menawarkan lingkungan kerja yang inovatif dan dinamis.</p>
            </div>
            <div class="feature">
                <h2>Proses Mudah</h2>
                <p>Proses aplikasi yang mudah dan cepat, sehingga Anda bisa fokus pada hal-hal yang penting.</p>
            </div>
        </div>
        <div class="testimonials">
            <h2>Apa Kata Mereka?</h2>
            <div class="testimonial">
                <p>"Aplikasi ini sangat membantu saya yang memiliki jenjang pendidikan SMK"</p>
                <div class="author">- Regi, Software Engineer</div>
            </div>
            <div class="testimonial">
                <p>"Saya sangat terbantu dengan fitur-fitur yang ada di aplikasi ini. Sekarang saya bekerja di perusahaan ternama."</p>
                <div class="author">- Udin, Data Analyst</div>
            </div>
        </div>
    </div>
    <footer>
        <br>
        <strong>Copyright &copy; 2023-2024 <a href="#">Regii</a>.</strong>
         All rights reserved.
         <div class="footer-right">
            <b>Version</b> 0.0.1
         </div>
    </footer>
</body>
</html>
