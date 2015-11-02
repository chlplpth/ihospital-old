@extends('layouts.master')
@section('css')
<link href="css/staffImportSchedule.css" rel="stylesheet">
@endsection
@section('menu')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar" id = "menu">
			<ul class="nav nav-sidebar">
				<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbspลงทะเบียนผู้ป่วยใหม่</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbspสร้างการนัดหมาย</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbspจัดการการนัดหมาย</span></a></li>
				<li class="active"><a href="#"><span class="glyphicon glyphicon-import" aria-hidden="true">&nbspนำเข้าตารางการออกตรวจ</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbspยกเลิกตารางการออกตรวจ</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true">&nbspจัดการบุคลากร</span></a></li>
			</ul>
		</div>

		@endsection
		@section('content')
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "content">
			<div class="panel panel-default">
				<div class="panel-heading" id ="importSchedulePanelHeader">นำเข้าตารางการออกตรวจของแพทย์</div>
				<div class="input-group" id="doctor">
					<span class="input-group-addon" id="sizing-addon2">รหัสประจำตัว/ชื่อ แพทย์</span>
					<input type="text" class="form-control" aria-describedby="sizing-addon2"  >
				</div><br>
				<div id ="duration">
					<div class ="row">
						<div class = "col-md-1"></div>
						<div class = "col-md-5">
							<div class="input-group" id="startDate">
								<span class="input-group-addon" id="sizing-addon2">วันที่เริ่มใช้งาน</span>
								<div class="input-group date" id="startDateInput">
									<input type='text' class="form-control" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class = "col-md-5">
							<div class="input-group" id="endDate">
								<span class="input-group-addon" id="sizing-addon2">วันที่สิ้นสุด</span>
								<div class="input-group date" id="endDateInput">
									<input type='text' class="form-control" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<br>
				<div id = "schedule">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>วัน/เวลา</th>
									<th>จันทร์</th>
									<th>อังคาร</th>
									<th>พุธ</th>
									<th>พฤหัส</th>
									<th>ศุกร์</th>
									<th>เสาร์</th>
									<th>อาทิตย์</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>ช่วงเช้า</td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>

								</tr>
								<tr>
									<td>ช่วงเช้า</td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>
									<td><input type="checkbox"></td>

								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<button class="btn btn-default" type="button" id="importButton">นำเข้า</button>
			</div>
		</div>
	</dev>
</dev>
@endsection