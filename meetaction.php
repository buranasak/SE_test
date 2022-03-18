<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * from events where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>roomname: <strong><?php echo $drow['title']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletemeet.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * from events where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editmeet.php?id=<?php echo $erow['id']; ?>">
                <div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">วาระประชุม:</label>
							</div>
							<div class="col-lg-10">
                            <input type="text" name="title" class="form-control" value="<?php echo $erow['title']; ?>">
							</div>
						</div>
						<!-- dwdasda -->
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ประธานการประชุม:</label>
							</div>
							<div class="col-lg-10">
								<select class="form-control" name='head' id="head">
									<option>นายกเทศมนตรี </option>
									<option>รองนายกเทศมนตรี1</option>
									<option>รองนายกเทศมนตรี2</option>
									<option>รองนายกเทศมนตรี3</option>
								</select>
							</div>
						</div>
						<!-- dasdasdasdsa -->
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">จำนวนผู้เข้าประชุม:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="text" class="form-control" name="numattend"> -->
                                <input type="text" name="numattend" class="form-control" value="<?php echo $erow['numattend']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ผู้เข้าร่วมประชุม:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="text" class="form-control" name="listname"> -->
                                <input type="text" name="listname" class="form-control" value="<?php echo $erow['listname']; ?>">
                                
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ห้องประชุม:</label>
							</div>
							<div class="col-lg-10">
								<select class="form-control" name="roomid" id="roomid">
									<?php
									include('conn.php');
									$query = mysqli_query($conn, "SELECT * from room");
									while ($row = mysqli_fetch_array($query)) {
									?>
										<option value="<?php echo $row['roomid']; ?>"><?php echo $row['roomname']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">เริ่มเวลา:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="datetime-local" class="form-control" name="start"> -->
                                <input type="text" name="start" class="form-control" value="<?php echo $erow['start']; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">สิ้นสุดเวลา:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="datetime-local" class="form-control" name="end"> -->
                                <input type="text" name="end" class="form-control" value="<?php echo $erow['end']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">อุปกรณ์เพิ่มเติม:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="text" class="form-control" name="addequipment"> -->
                                <input type="text" name="addequipment" class="form-control" value="<?php echo $erow['addequipment']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ไฟล์วาระประชุม:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="file" class="form-control" name="meetfile"> -->
                                <input type="file" name="meetfile" class="form-control" value="<?php echo $erow['meetfile']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">หมายเหตุ:</label>
							</div>
							<div class="col-lg-10">
								<!-- <input type="text" class="form-control" name="remark"> -->
                                <input type="text" name="remark" class="form-control" value="<?php echo $erow['remark']; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ผู้จองประชุม:</label>
							</div>
							<div class="col-lg-10">
								<?php
								$userrequest = $_SESSION['user'];
								$queryuser = mysqli_query($conn, "select * from user where username='$userrequest'");
								while ($row = mysqli_fetch_array($queryuser)) {
								?>
									<div class="col-lg-10">
									<?php echo $row['username'];
								} ?>
									</div>
							</div>
						</div>
					<!-- <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">วาระประชุม:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="title" class="form-control" value="<?php echo $erow['title']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ประธานการประชุม:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="location" class="form-control" value="<?php echo $erow['location']; ?>">
						</div>
					</div> -->
                    
                    

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->