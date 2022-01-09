<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Utama</li>
            <!-- <li class="breadcrumb-item active">Starter Page</li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <table style="width:100%">
        <tr>
          <td width="30%" class="topleft"><img src="./images/neelofa.png" width="270" height="180">
            <h2><br></h2>
            <h4>PSM Title:</h4>
          </td>
         	<center>
		<button class="btn active"><a href="">Add Booking</a></button>
        <button class="btn active"><a href="" target="_blank">View Booking </a></button>
  </center>
	<center><fieldset>
			<h2 style="text-align: center;">MEETING BOOKING FORM</h2>
			<br>
			<table>
				<form action="AddMeetingBooking" method="POST" name="meetingForm"  >
                @csrf
				<tr>
					<p>
					<td>
                    
					<label for="BookingID">Supervisor ID:</label>
					</td>
					<td>
					<input type="text" name="SV_id" id="SV_ID">
					</td>
					</p>
				</tr>
				

				<tr>
					<p>
					<td>
					<label for="id">Student ID:</label>
					</td>
					<td>
					<input type="text" name="STD_id" id="STD_ID">
					<td>
					</p>
				</tr>

				
				<tr>
					<p>
					<td>
					<label for=Meeting_Date>Meeting Date:</label>
					</td>
					<td>
					<input type="date" name="Meeting_date" id="Meeting_Date">
					</td>
					</p>
				</tr>

				<tr>
					<p>
					<td>
					<label for=Meeting_Start>Start Time:</label>
					</td>
					<td>
					<input type="time" name="Meeting_start" id="Meeting_Start">
					</td>
					</p>
				</tr>

				<tr>
					<p>
					<td>
					<label for=Meeting_End>End Time:</label>
					</td>
					<td>
					<input type="time" name="Meeting_end" id="Meeting_End">
					</td>
					</p>
				</tr>

				<tr>
						<p>
						<td>
						<label for="Meeting_Purpose">Meeting purpose:</label>
						</td>
						<td>
						<input type="text" name="Meeting_purpose" id="Meeting_Purpose">
						<td>
						</p>
				</tr>
			</table>
			
			<p></p>
			<p>
			<input type="submit" name="Submit" id="Submit" value="Submit" method="post">
			</p>
			</form>
		</fieldset>
	</center>
</table>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />