<?php $thisPage="Dashboard"; ?>
<?php $title = "Dashboard Admin - Data Mahasiswa" ?>
<?php $description = "Dashboard Admin - Data Mahasiswa" ?>
<?php 
include("header.php"); 
include("../koneksi.php"); 
?>
	
	<div class="container">
		<div class="content">
			<?php
			$username = $_SESSION['admin']; 
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE username='$username'"); 
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			<div class="jumbotron" style="background-color: #e3f2fd;">
				<center>
				<h1>Data Mahasiswa</h1>
				<p>Anda login sebagai <strong><?php echo $row['nama']; ?></strong>.</p>
				<a href="data.php" data-toggle="tooltip" title="Lihat Data Mahasiswa" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Mahasiswa</a>
				</center>
			</div> 
		</div>
	</div>
	
<?php 
include("footer.php");
?>