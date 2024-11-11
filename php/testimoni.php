<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "testimoni";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");

// Mendapatkan data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$peran = $_POST['peran'];
$pesan = $_POST['pesan'];

// Menyimpan data ke database
$sql = "INSERT INTO testimoni (nama, email, peran, pesan) VALUES ('$nama', '$email', '$peran', '$pesan')";
$result = mysqli_query($conn, $sql) or die("Query gagal");
if($result){
    echo "Testimoni berhasil disimpan.";
}
?>

<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "testimoni";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");

// Mengambil data dari database
$sql = "SELECT * FROM testimoni";
$result = mysqli_query($conn, $sql) or die("Query gagal");
?>

<div class="testimonial-grid">
<?php
// Menampilkan data ke halaman web
while($row = mysqli_fetch_assoc($result)){
    $nama = $row['nama'];
    $email = $row['email'];
    $peran = $row['peran'];
    $pesan = $row['pesan'];
    echo "<div class=\"testimonial-container\">";
    echo "<div class=\"testimonial-text\">";
    echo "<p class=\"testimonial-name\">$nama</p>";
    echo "<p class=\"testimonial-role\">$peran</p>";
    echo "<p>$pesan</p>";
    echo "</div>";
    echo "</div>";
}
?>
</div>
