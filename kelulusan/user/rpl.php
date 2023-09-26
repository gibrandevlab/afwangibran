
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "kelulusan");
                $tampil = mysqli_query($conn, "select * from user");
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $hasil['nis']; ?></td>
                        <td><?php echo $hasil['nama']; ?></td>
                        <td><?php echo $hasil['jurusan']; ?></td>
                        <td><?php echo $hasil['angkatan']; ?></td>
                        <td><?php echo $hasil['tahun_lulus']; ?></td>
                        <td><?php echo $hasil['status']; ?></td>
                        <td><?php echo $hasil['selengkapnya']; ?></td>
                        <!-- <td>
						<a href="tambah.php" class="add-btn">TAMBAH</a>
					</td>
					<td>
						<a class="add-btn" href="delete.php?nis=<?php echo $isi['nis']; ?>">Delete</a>
					</td>
					<td>
						<a class="add-btn" href="edit.php ?nis=<?php echo $isi['nis']; ?>">EDIT</a>
					</td>
					<td>
						<a class="add-btn" href="side.php">HOME</a>
					</td>
					<td>
						<a href="printpilih.php?nis=<?php echo $isi['nis'] ?>">Print</a>
					</td> -->
    </tr>
<?php } ?>
</table>
</div>
</form> -->