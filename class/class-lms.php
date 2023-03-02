<?php 

	class lms {
	
		private function connect(){
			$con = mysqli_connect("localhost","root","","btl_cnm");
			if(!$con) {
				die("Không kết nối được với CSDL!");
				exit();	
			}	
			else {
				mysqli_set_charset($con,"utf8");
				return $con;
			}
		}
		public function laycot($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			$kq = '';
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$id = $row[0];
					$kq = $id;
				}
			}
			return $kq;
		}
		public function load_dsnguoidungGV($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaGV = $row['MaGV'];
					$TenGV = $row['TenGV'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenGV.'</h4>
		
						<p>'.$MaGV.'</p>
					  </div>
					  <a href="Suathongtinnguoidung.php?id='.$MaGV.'" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dstailieu($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$filetailieu = $row['Filetailieu'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$filetailieu.'</h4>
					  </div>
					  <a href="../uploadsTaiLieuGV/'.$filetailieu.'" class="small-box-footer" download >Tải tài liệu <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
			}
			else
			{
				echo 'Không có dữ liệu file';
			}
		}
		public function load_dsnguoidungQLDT($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaQLDT = $row['MaQLDT'];
					$TenQLDT = $row['TenQLDT'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenQLDT.'</h4>
		
						<p>'.$MaQLDT.'</p>
					  </div>
					  <a href="Suathongtinnguoidung.php?id='.$MaQLDT.'" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsnguoidungHV($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaHV = $row['MaHV'];
					$TenHV = $row['TenHV'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenHV.'</h4>
		
						<p>'.$MaHV.'</p>
					  </div>
					  <a href="Suathongtinnguoidung.php?id='.$MaHV.'" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsnguoidungHV1($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaHV = $row['MaHV'];
					$TenHV = $row['TenHV'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '          <div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenHV.'</h4>
		
						<p>100</p>
					  </div>
					  <a href="http://127.0.0.1:5500/index.html#" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsnguoidungGV1($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaGV = $row['MaGV'];
					$TenGV = $row['TenGV'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '          <div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenGV.'</h4>
		
						<p>100</p>
					  </div>
					  <a href="http://127.0.0.1:5500/index.html#" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsnguoidungQLDT1($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaQLDT = $row['MaQLDT'];
					$TenQLDT = $row['TenQLDT'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '          <div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenQLDT.'</h4>
		
						<p>100</p>
					  </div>
					  <a href="http://127.0.0.1:5500/index.html#" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsnguoidungQTV($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaQTV = $row['MaQTV'];
					$TenQTV = $row['TenQTV'];
					$Ngaysinh = $row['Ngaysinh'];
					$Email = $row['Email'];
					$Diachi = $row['Diachi'];
					echo '          <div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$TenQTV.'</h4>
		
						<p>100</p>
					  </div>
					  <a href="http://127.0.0.1:5500/index.html#" class="small-box-footer">Xem thông tin <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsnguoidungtaikhoan($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$MaTK = $row['MaTK'];
					$TenDangNhap = $row['TenDangNhap'];
					$MatKhau = $row['MatKhau'];
					$PhanQuyen= $row['VaiTro'];
					echo '          <div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h3>'.$TenDangNhap.'</h3>
		
						<p>'.$PhanQuyen.'</p>
					  </div>
					  <div class="icon">
						<i class="ion ion-person-add"></i>
					  </div>
					  <a href="Suathongtin.php?id='.$MaTK.'" class="small-box-footer">Xem danh sách <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dslophoc($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$malh = $row['MaLH'];
					$tenlophoc = $row['TenLopHoc'];
					$siso = $row['SiSo'];
					$ngaybd= $row['NgayBD'];
					$ngaykt = $row['NgayKT'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h4>'.$tenlophoc.'</h4>
						<p>Sỉ số: '.$siso.'</p>
						<p>Ngày bắt đầu: '.$ngaybd.'</p>
						<p>Ngày kết thúc: '.$ngaykt.'</p>
					  </div>
					  <div class="icon">
						<i class="ion ion-person-add"></i>
					  </div>
					  <a href="Sualophoc.php?id='.$malh.'" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>
						';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dssinhviendangkykhoahoc($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$mahv = $row['MaHV'];
					$tenhocvien = $row['TenHV'];
					$sdt = $row['SDT'];
					$ngaysinh= $row['Ngaysinh'];
					$diachi = $row['Diachi'];
					$email = $row['Email'];
					$khoahoc = $row['MaKH'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h4>Tên học viên: '.$tenhocvien.'</h4>
						<p>Ngày sinh: '.$ngaysinh.'</p>
						<p>SDT: '.$sdt.'</p>
						<p>Địa chỉ: '.$diachi.'</p>
						<p>Emai: '.$email.'</p>
						<p>Khóa học đăng ký: '.$khoahoc.'</p>
					  </div>
					</div>
				  </div>
						';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dslophocGV($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$malh = $row['MaLH'];
					$tenlophoc = $row['TenLopHoc'];
					$siso = $row['SiSo'];
					$ngaybd= $row['NgayBD'];
					$ngaykt = $row['NgayKT'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h4>'.$tenlophoc.'</h4>
						<p>Sỉ số: '.$siso.'</p>
						<p>Ngày bắt đầu: '.$ngaybd.'</p>
						<p>Ngày kết thúc: '.$ngaykt.'</p>
					  </div>
					  <div class="icon">
						<i class="ion ion-person-add"></i>
					  </div>
					  <a href="Loaddanhsachhocvien.php?id='.$malh.'" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>
						';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dsqllophoc($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$malh = $row['MaLH'];
					$tenlophoc = $row['TenLopHoc'];
					$siso = $row['SiSo'];
					$ngaybd= $row['NgayBD'];
					$ngaykt = $row['NgayKT'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h3>'.$tenlophoc.'</h3>
		
						<p>'.$siso.'</p>
					  </div>
					  <div class="icon">
						<i class="ion ion-person-add"></i>
					  </div>
					  <a href="Suathongtin.php?id='.$malh.'" class="small-box-footer">Xem danh sách <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				  </div>
							';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dshocvienlopday($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<table class="table">                
				<tr>
				<th class="table__heading" style="text-align: center;">STT</th>
				<th class="table__heading" style="text-align: center;">Mã Học Viên</th>
				<th class="table__heading" style="text-align: center;">Tên Học Viên</th>
				<th class="table__heading" style="text-align: center;">Lớp</th>
			  </tr>';
				$dem = 1;
				while($row = mysqli_fetch_array($ketqua))
				{
					$mahv = $row['MaHV'];
					$tenhocvien = $row['TenHV'];
					$lophoc = $row['TenLopHoc'];
					echo '  <tr>
								<td align="center" valign="middle">'.$dem.'</td>
								<td align="center" valign="middle">'.$mahv.'</td>
								<td align="center" valign="middle">'.$tenhocvien.'</td>
								<td align="center" valign="middle">'.$lophoc.'</td>
							</tr>';
					$dem++;
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dslichhoc($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$malichhoc = $row['MaLichHoc'];
					$tenlophoc = $row['TenLopHoc'];
					$cahoc = $row['Thoigian'];
					$phonghoc= $row['Tenphong'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h4>'.$tenlophoc.'</h4>
						<p>Ca học: '.$cahoc.'</p>

						<p>Phòng học: '.$phonghoc.'</p>
					  </div>
					  <div class="icon">
						<i class="ion ion-person-add"></i>
					  </div>
					</div>
				  </div>
						';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dslichday($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$tenlophoc = $row['TenLopHoc'];
					$thoigian = $row['ThoiGian'];
					$tenphonghoc = $row['TenPhongHoc'];
					$tengiaovien = $row['TenGV'];
					$ngayday = $row['MaLichHoc'];
					$ngaydayhoc = substr($ngayday,0,2);
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
					  <div class="inner">
						<h4>'.$tenlophoc.'</h4>
						<p>Phòng học: '.$tenphonghoc.'</p>
						<p>Thời gian: '.$thoigian.'</p>
						<p>Giảng Viên: '.$tengiaovien.'</p>
						<p>Ngày học: '.$ngaydayhoc.'</p>
					  </div>
					</div>
				  </div>
							';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dskhoahoc($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<table class="table">                
				<tr>
				<th class="table__heading" style="text-align: center;">STT</th>
				<th class="table__heading" style="text-align: center;">Mã Khóa Học</th>
				<th class="table__heading" style="text-align: center;">Tên Khóa Học</th>
				<th class="table__heading" style="text-align: center;">Ngày Bắt Đầu</th>
				<th class="table__heading" style="text-align: center;">Ngày Kết Thúc</th>
				<th class="table__heading" style="text-align: center;">Ghi chú</th>
			  </tr>';
				$dem = 1;
				while($row = mysqli_fetch_array($ketqua))
				{
					$makh = $row['MaKH'];
					$tenkhoahoc = $row['TenKH'];
					$ngaybd = $row['NgayBD'];
					$ngaykt = $row['NgayKT'];
					$chuthich = '&nbsp;';
					echo '  <tr>
								<td align="center" valign="middle"><a href="dangkykhoahoc.php?id='.$makh.'">'.$dem.'</a></td>
								<td align="center" valign="middle"><a href="dangkykhoahoc.php?id='.$makh.'">'.$makh.'</a></td>
								<td align="center" valign="middle"><a href="dangkykhoahoc.php?id='.$makh.'">'.$tenkhoahoc.'</a></td>
								<td align="center" valign="middle"><a href="dangkykhoahoc.php?id='.$makh.'">'.$ngaybd.'</a></td>
								<td align="center" valign="middle"><a href="dangkykhoahoc.php?id='.$makh.'">'.$ngaykt.'</a></td>
								<td align="center" valign="middle"><a href="dangkykhoahoc.php?id='.$makh.'">'.$chuthich.'</a></td>
							</tr>';
					$dem++;
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dskhoahoc2($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$makh = $row['MaKH'];
					$tenkhoahoc = $row['TenKH'];
					$ngaybd = $row['NgayBD'];
					$ngaykt = $row['NgayKT'];
					$chuthich = '&nbsp;';
					echo '            <div class="small-box bg-warning">
					<div class="inner">
					  <h3>'.$tenkhoahoc.'</h3>
	  
					  <p>30</p>
					</div>
					<div class="icon">
					  <i class="ion ion-person-add"></i>
					</div>
					<a href="Dangkykhoahoc.php?id='.$makh.'" class="small-box-footer">Đang ký khóa học <i class="fas fa-arrow-circle-right"></i></a>
				  </div>';
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dskhoahoc1($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$makh = $row['MaKH'];
					$tenkhoahoc = $row['TenKH'];
					$ngaybd = $row['NgayBD'];
					$ngaykt = $row['NgayKT'];
					echo '            <div class="small-box bg-warning">
					<div class="inner">
					  <h3>'.$tenkhoahoc.'</h3>
	  
					  <p>30</p>
					</div>
					<div class="icon">
					  <i class="ion ion-person-add"></i>
					</div>
					<a href="Hocvien/Dangkykhoahoc.php?id='.$makh.'" class="small-box-footer">Đang ký khóa học <i class="fas fa-arrow-circle-right"></i></a>
				  </div>';
				}
				echo '</table>';
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_dslichthi($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysqli_fetch_array($ketqua))
				{
					$malichthi = $row['MaLT'];
					$tenlophoc = $row['TenLopHoc'];
					$giothi = $row['GioThi'];
					$ngaythi= $row['NgayThi'];
					$phongthi = $row['PhongThi'];
					$siso= $row['SoLuongThiSinh'];
					echo '<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
					  <div class="inner">
						<h4>'.$tenlophoc.'</h4>
						<p>Phòng thi: '.$phongthi.'</p>
						<p>Giờ thi: '.$giothi.'</p>
						<p>Ngày thi: '.$ngaythi.'</p>
						<p>Sỉ số lớp: '.$siso.'</p>
					  </div>
					</div>
				  </div>
						';
				}
			}
			else
			{
				echo 'Khong co du lieu!!!';
			}
		}
		public function load_selectionGV($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<select name="form-giangvien" id="form-giangvien" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; text-align: Center;">';
				while($row = mysqli_fetch_array($ketqua))
				{
					$magv = $row['MaGV'];
					$tengv = $row['TenGV'];
						echo '<option value="'.$magv.'">'.$tengv.'</option>';
				}
				echo '</select>';
			}
			else
			{
				echo 'Chưa có dữ liệu Giảng Viên.';
			}
		}
		public function load_selectionPH($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<select name="form-phonghoc" id="form-phonghoc" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; text-align: Center;">';
				while($row = mysqli_fetch_array($ketqua))
				{
					$maph = $row['MaPH'];
					$tenph = $row['TenPhong'];
						echo '<option value="'.$maph.'">'.$tenph.'</option>';
				}
				echo '</select>';
			}
			else
			{
				echo 'Chưa có dữ liệu Phòng Học.';
			}
		}
		public function load_selectionPHLT($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<select name="form-phonghoc" id="form-phonghoc" style="text-align: center; height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden;">';
				while($row = mysqli_fetch_array($ketqua))
				{
					$maph = $row['MaPH'];
					$tenph = $row['TenPhong'];
						echo '<option value="'.$tenph.'">'.$tenph.'</option>';
				}
				echo '</select>';
			}
			else
			{
				echo 'Chưa có dữ liệu Phòng Học.';
			}
		}
		public function load_selectionLH($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<select name="form-tenlophoc" id="form-tenlophoc" style="text-align: center; height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden;">';
				while($row = mysqli_fetch_array($ketqua))
				{
					$malh = $row['MaLH'];
					$tenlh = $row['TenLopHoc'];
						echo '<option value="'.$tenlh.'">'.$tenlh.'</option>';
				}
				echo '</select>';
			}
			else
			{
				echo 'Chưa có dữ liệu Lop Học.';
			}
		}
		public function load_selectioncahoc($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			mysqli_close($link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{
				echo '<select name="form-giothi" id="form-giothi" style="text-align: center; height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden;">';
				while($row = mysqli_fetch_array($ketqua))
				{
					$macahoc = $row['MaCaHoc'];
					$thoigian = $row['Thoigian'];
						echo '<option value="'.$thoigian.'">'.$thoigian.'</option>';
				}
				echo '</select>';
			}
			else
			{
				echo 'Chưa có dữ liệu Lop Học.';
			}
		}
		public function themxoasua($sql)
		{
			$link = $this->connect();
			if(mysqli_query($link,$sql))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
		// public function buildEssay($sql) {
		// 	$link = $this->connect();
		// 	if(mysqli_query($link, $sql)) {
		// 		return 1;	
		// 	}	
		// 	else {
		// 		return 0;	
		// 	}
		// }

		// public function buildMulti($sql) {
		// 	$link = $this->connect();
		// 	if(mysqli_query($link, $sql)) {
		// 		return 1;
		// 	}
		// 	else {
		// 		return 0;
		// 	}
		// }
		
		public function loadCombo_KhoiLop($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<select name="codeKL" id="codeKL" class="form-control">';
				echo '<option>Chọn mã khối lớp</option>';
				while($row = @mysqli_fetch_array($result)) {
					$makhoilop = $row['makhoilop'];
					
					echo '<option value="'.$makhoilop.'">'.$makhoilop.'</option>';
					
				}	
				echo '</select>';
			}
		}
		
		public function loadCombo_MonHoc($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<select name="codeMH" id="codeMH" class="form-control">';
				echo '<option>Chọn mã môn học</option>';
				while($row = @mysqli_fetch_array($result)) {
					$mamonhoc = $row['mamonhoc'];
					
					echo '<option value="'.$mamonhoc.'">'.$mamonhoc.'</option>';
					
				}	
				echo '</select>';
			}
		}
		
		public function loadCombo_GiaoVien($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<select name="codeGV" id="codeGV" class="form-control">';
				echo '<option>Chọn tên giáo viên</option>';
				while($row = @mysqli_fetch_array($result)) {
					$magiaovien = $row['magiaovien'];
					$tengiaovien = $row['tengiaovien'];
					echo '<option value="'.$magiaovien.'">'.$tengiaovien.'</option>';
					
				}	
				echo '</select>';
			}
		}
		
		public function loadMaLop($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$malop = $row['malop'];
					echo $malop;
				}	
			}	
			else {
				echo 'Không có dữ liệu';	
			}
		}
		
		public function loadMaHocSinh($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$mahocsinh = $row['mahocsinh'];
					echo $mahocsinh;	
				}	
			}	
			else {
				echo 'Không có dữ liệu!';	
			}
		}
		
		public function loadTimeStartExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row=mysqli_fetch_array($result)) {
					$timeStartExam = $row['thoigianbd_kt'];	
					echo $timeStartExam;
				}	
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		
		}
		
		public function loadTimeEndExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$timeEndExam = $row['thoigiankt_kt'];
					echo $timeEndExam;	
				}	
			}
			else {
				echo 'Không có dữ liệu!';	
			}	
		}
		
		public function loadTimesExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$timesExam = $row['solankt'];
					echo $timesExam.' lần';	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadCodeExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$codeExam = $row['made'];
					echo $codeExam;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadSubjectExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$subjectExam = $row['mamonhoc'];
					echo $subjectExam;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadQuestion($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$question = $row['noidung'];
					echo $question;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}	
		}
		
		public function loadAnswer1($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer1 = $row['dapan1'];
					echo $answer1;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadAnswer2($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer2 = $row['dapan2'];
					echo $answer2;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadAnswer3($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer3 = $row['dapan3'];
					echo $answer3;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadAnswer4($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer4 = $row['dapan4'];
					echo $answer4;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadResultTest($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<table class="table table-striped" id="tableStatis" align="center">
                                <tr align="center" valign="middle">
                                    <th>STT</th>
                                    <th>MÃ LỚP</th>
                                    <th>MÃ ĐỀ</th>
                                    <th>MÃ HỌC SINH</th>
                                    <th>SỐ CÂU HOÀN THÀNH</th>
                                    <th>ĐIỂM</th>
                                </tr>';	
				$dem = 1;
				while($row = mysqli_fetch_array($result)) {
					$malop = $row['malop'];
					$made = $row['made'];
					$mahocsinh = $row['mahocsinh'];
					$socau = $row['socau'];
					$diem = $row['diem'];
					
					echo '<tr align="center" valign="middle">
									<td><a href="?id='.$mahocsinh.'">'.$dem.'</a></td>
                                    <td><a href="?id='.$mahocsinh.'">'.$malop.'</a></td>
                                    <td><a href="?id='.$mahocsinh.'">'.$made.'</a></td>
									<td><a href="?id='.$mahocsinh.'">'.$mahocsinh.'</a></td>
									<td><a href="?id='.$mahocsinh.'">'.$socau.'</a></td>
									<td><a href="?id='.$mahocsinh.'">'.$diem.'</a></td>
                                </tr>';
					$dem++;
				}
				echo '</table>';
			}
			else {
				echo 'Đang cập nhật dữ liệu!';	
			}	
		}
		
		public function loadNameClass($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$malop = $row['malop'];
					echo '<button type="button" class="btn btn-cls" data-toggle="modal" data-target="#modalStatis" style="width: 200px;height: 100px;				background-color: #3399FF; margin-top: 30px; margin-bottom: 50px; margin-left: 90px; margin-right: 50px;">'.$malop.'</button>';	
				}	
			}	
		}
		
		
	}

?>