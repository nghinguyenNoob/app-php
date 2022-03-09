<html>
   <head>
   <title>Register Class</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <style type="text/css">
         table.one {border-collapse:collapse;}
         table.two {border-collapse:separate;}
         
         td.a {
            border-style:dotted; 
            border-width:3px; 
            border-color:#000000; 
            padding: 10px;
         }
         td.b {
            border-style:solid; 
            border-width:3px; 
            border-color:#333333; 
            padding:10px;
         }
      </style>
      
   </head>
   <body>
	<div class="row">
		<?php include('left-navabar.php')?>
		<div class="col-sm-8" style="margin-left: 10px;">
			<div class="row" style="position: relative; top: 5px;">
				<div class="col-sm-3">
					<div class="card"
					style="height: 100%; background-color:#7fe5f0; text-align: center;">
						<div class="card-body">N5</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">Tên lớp học</div>
								<div class="col-sm-9">Lớp N5</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Cấp độ</div>
								<div class="col-sm-9">N5</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Ngày bắt đầu</div>
								<div class="col-sm-9">20-02-2021</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Ngày kết thúc</div>
								<div class="col-sm-9">20-05-2021</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Giáo viên</div>
								<div class="col-sm-9">Nguyễn Thị A</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Phòng học</div>
								<div class="col-sm-9">P1-F5</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Thời gian học</div>
								<div class="col-sm-9">2h PM Thứ 3,4,6</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Trạng thái</div>
								<div class="col-sm-9">Trong thời gian đăng ký</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Số học viên tối đa</div>
								<div class="col-sm-9">20</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Số học viên đã đăng ký</div>
								<div class="col-sm-9">9</div>
							</div>
							<div class="row">
								<div class="col-sm-3">Thời hạn đăng ký</div>
								<div class="col-sm-9">15-2-2021</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-sm" style="font-size: 25px; font-family: monospace; text-align: center;">Danh sách Học viên đã đăng ký</div>
				
			</div>
			<?php include('student-register.php') ?>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	<div id="footer"><object type="text/html" data="footer.html"></object></div>
   </body>
</html>