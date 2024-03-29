@extends('layouts/staffLayout')

		@section('content')
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "content">
			<div class="panel panel-default">
				<div class="panel-heading" id ="registerPanelHeader">ลงทะเบียนผู้ป่วยใหม่</div>
				<br>
				<div class = "row">
					<div class ="col-md-7">
						<div class="input-group" id="citizenNumber">
							<span class="input-group-addon" id="sizing-addon2">รหัสประจำตัวประชาชน</span>
							<input type="text" class="form-control" aria-describedby="sizing-addon2" placeholder = "ID Number">
						</div>
					</div>
					<div class ="col-md-5">
						<button class="btn btn-default" type="button" id="submitButton"  aria-haspopup="true" aria-expanded="true">ยืนยัน</button>
					</div>
				</div>

				<div class = "row">
					<div class ="col-md-6">
						<div class="input-group" id="name">
							<span class="input-group-addon" id="sizing-addon2">ชื่อ</span>
							<input type="text" class="form-control" aria-describedby="sizing-addon2" placeholder = "name">
						</div>
					</div>
					<div class ="col-md-6">
						<div class="input-group" id="surname">
							<span class="input-group-addon" id="sizing-addon2">นามสกุล</span>
							<input type="text" class="form-control" aria-describedby="sizing-addon2" placeholder = "surname">
						</div>
					</div>
				</div>

				<div class = "row">
					<div class ="col-md-3">

						<div class="input-group" id="sex">
							เพศ<br>
							&nbsp&nbsp&nbsp<input type="radio" name="sex" value="male" checked>&nbspMale
							&nbsp&nbsp&nbsp<input type="radio" name="sex" value="female">&nbspFemale
						</div>
					</div>
					<div class = "col-md-3">
						<div class="dropdown" id ="bloodType">
							<button class="btn btn-default dropdown-toggle" type="button" id="bloodTypeButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
								กรุ๊ปเลือด
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="#">A</a></li>
								<li><a href="#">AB</a></li>
								<li><a href="#">B</a></li>
								<li><a href="#">O</a></li>
							</ul>
						</div>

					</div>
					<div class ="col-md-6">
						<div class="input-group" id="dateOfBirth">
							วัน/เดือน/ปีเกิด
							<div class="input-group date" id="birthDate">

								<input type='text' class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div id ="address">
					ที่อยู่ <br>
					<textarea name="text" cols="50" rows="5" id = "symptomTextarea"></textarea>
				</div>
				<div class="input-group" id="tel">
					<span class="input-group-addon" id="sizing-addon2">เบอร์โทรศัพท์</span>
					<input type="text" class="form-control" aria-describedby="sizing-addon2" placeholder = "Tel">
				</div>
				<div class="input-group" id="email">
					<span class="input-group-addon" id="sizing-addon2">อีเมล</span>
					<input type="text" class="form-control" aria-describedby="sizing-addon2" placeholder = "E-mail">
				</div>
				<div id ="allergy">
					ประวัติการแพ้ยา <br>
					<textarea name="text" cols="50" rows="5" id = "allergyTextarea"></textarea>
				</div>
				
				
				<button class="btn btn-default" type="button" id="registerButton"  aria-haspopup="true" aria-expanded="true">ลงทะเบียน</button>
			</div>
		</div>
	</dev>
</dev>


@endsection

@section('css')
<link href="css/staffEditUser.css" rel="stylesheet">
@endsection