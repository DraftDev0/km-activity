<?php 
require_once("header.php");
require_once("services/dblink.php");
require_once("DateThai.php");
//===============================================Declare variables============================================//
$sql_Script_ActivityMaster_Type1 = "";
$sql_Script_ActivityDetail_Type1 = "";
$sql_Script_ActivityDetail = "";


$sql_Result_ActivityMaster_Type1 = null;
$sql_Result_ActivityDetail = null;



$ActivityMaster_Type1 = array();
$ActivityDetail = array();

//=============================================== END Declare variables============================================//

//===============================================Assign values ​​to variables=========================================//
$sql_Script_ActivityMaster_Type1 = "SELECT * FROM km_activity Where km_activity.IsActive = 1 AND  km_activity.ActivityTypeID = 1 ORDER BY km_activity.UpdateOn DESC";
$sql_Result_ActivityMaster_Type1 = mysqli_query($link,$sql_Script_ActivityMaster_Type1);
if(mysqli_num_rows($sql_Result_ActivityMaster_Type1) >  0)
{
	while($row = mysqli_fetch_assoc($sql_Result_ActivityMaster_Type1)) {
		$ActivityMaster_Type1[] = $row;
	}
}


//===============================================END Assign values ​​to variables=========================================//


//================================================ Debug variables ======================================================//
//echo print_r($ActivityMaster_Type1);
//echo "<br>";
//echo print_r($ActivityMaster_Type2);
//echo "<br>";
//echo print_r($ActivityDetail);
//echo "<br>";
//================================================ END Debug variables ======================================================//
?>

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-12">
										<!--begin::Nav Panel Widget 1-->
										<div class="card card-custom gutter-b card-stretch card-shadowless">
											<!--begin::Body-->
											<div class="card-body p-0">
												<!--begin::Nav Tabs-->
												<ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
														<a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#forms_widget_tab_1">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">ประชุมและสัมมนา</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#forms_widget_tab_2">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Communication\Chat-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																			<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"/>
																		</g>
																	</svg><!--end::Svg Icon--></span>
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">คู่มือปฎิบัติงาน</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#forms_widget_tab_3">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																	<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Navigation\Double-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) "/>
																			<path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) "/>
																		</g>
																	</svg><!--end::Svg Icon--></span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">คำสั่ง</span>
														</a>
													</li>
													<!--end::Item-->
												</ul>
												<!--end::Nav Tabs-->
												<!--begin::Nav Content-->

												<!--end::Nav Content-->
											</div>
											<!--end::Body-->
										</div>
										<!--begin::Nav Panel Widget 1-->
									</div>
								</div>

								<div class="row">
									<div class="col-xl-12">
										<!--begin::List Widget 5-->

										<div class="tab-content m-0 p-0">
											<div class="tab-pane active" id="forms_widget_tab_1" role="tabpanel">
												<div class="card card-custom gutter-b card-stretch">
													<!--begin::Header-->
													<div class="card-header h-auto border-0">
														<!--begin::Title-->
														<div class="card-title py-5">
															<h3 class="card-label">
																<span class="d-block text-dark font-weight-bolder">ประชุมและสัมมนา</span>
																<span class="d-block text-dark-50 mt-2 font-size-sm">ประชุมและสัมมนา</span>
															</h3>
														</div>
													</div>
													<div class="card-body">
														<!--content-->
														<div class="row">
															<div class="col-xl-4">
																<div class="input-group rounded bg-light">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<span class="svg-icon svg-icon-lg">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																	</div>
																	<input type="text" class="form-control h-45px w-300px" placeholder="Search..." />						
																</div>
																<br>
															</div>
															<div class='col-xl-12'>
																<?php
																if(count($ActivityMaster_Type1) > 2) { ?>
															    <div class="carousel">
																<div class="carousel_item">

	<?php 

		for($i = 0; $i < 3; $i++)
		{
			$sql_Script_ActivityDetail = "";
			$sql_Result_ActivityDetail = null;
			$ActivityDetail = array();
			$id = 0;
			$id = $ActivityMaster_Type1[$i]['ActivityID'];
			$filepath = "";
			$sql_Script_ActivityDetail = "SELECT * FROM km_activityuploadfild Where km_activityuploadfild.IsActive = 1 AND  km_activityuploadfild.activityID = $id";
			$sql_Result_ActivityDetail = mysqli_query($link,$sql_Script_ActivityDetail);
			if(mysqli_num_rows($sql_Result_ActivityDetail) >  0)
			{
				while($row = mysqli_fetch_assoc($sql_Result_ActivityDetail)) {
					$filepath = $row['FilePath'];
					break;
				}
			}
	
			if($i == 0){ ?>
				<div class="item main">
				<div style="font-size: 18px;margin: 0%;position: absolute;margin-left: 35%; display: block;color: #e6fcf5;">
				NEW !! ประชุมและสัมมนา ฐานทัพเรือสัตหีบ 
			   </div>
			   <div style="font-size: 14px;
        margin-bottom: 4px;
        color: #c3fae8;
		margin: 20%;position: absolute;margin-left: 35%;">
	อ่านเพิ่มเติม
   </div>
			   <div style="font-size: 12px;
					color: #c3fae8;
					margin: 25%;position: absolute;margin-left: 35%;">
				ON : <?php echo  DateThai($ActivityMaster_Type1[$i]['UpdateOn']); ?>
 			   </div>
				 <?php  echo '<img src = "' . $filepath . '" class="imgNew" style="height : 200px; width: 200px;" >';	?>
					</div>
		<?php	}else { 
			
			$sql_Script_ActivityDetail = "";
			$sql_Result_ActivityDetail = null;
			$ActivityDetail = array();
			$id = 0;
			$id = $ActivityMaster_Type1[$i]['ActivityID'];
			$filepath = "";
			$sql_Script_ActivityDetail = "SELECT * FROM km_activityuploadfild Where km_activityuploadfild.IsActive = 1 AND  km_activityuploadfild.activityID = $id";
			$sql_Result_ActivityDetail = mysqli_query($link,$sql_Script_ActivityDetail);
			if(mysqli_num_rows($sql_Result_ActivityDetail) >  0)
			{
				while($row = mysqli_fetch_assoc($sql_Result_ActivityDetail)) {
					$filepath = $row['FilePath'];
					break;
				}
			}
		}
			?>
			<div class="item">
		<div style="font-size: 18px;margin: 0%;position: absolute;margin-left: 35%; display: block;color: #e6fcf5;">
	NEW !! ประชุมและสัมมนา ฐานทัพเรือสัตหีบ 
   </div>
   <div style="font-size: 14px;
        margin-bottom: 4px;
        color: #c3fae8;
		margin: 20%;position: absolute;margin-left: 35%;">
	อ่านเพิ่มเติม
   </div>
   <div style="font-size: 12px;
        color: #c3fae8;
		margin: 25%;position: absolute;margin-left: 35%;">
	ON : <?php echo  DateThai($ActivityMaster_Type1[$i]['UpdateOn']); ?>
   </div>
   <?php  echo '<img src = "' . $filepath . '" class="imgNew" style="height : 200px; width: 200px;" >';	?>
</div>
			<?php } ?>
		
</div>

      <button id="left"  class="btn btn--left btnNew">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="btn-icon"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 19l-7-7 7-7"
          />
        </svg>
      </button>
      <button id="right" class="btn btn--right btnNew">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="btn-icon"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 5l7 7-7 7"
          />
        </svg>
      </button>
    </div>


	<script>
            const prev = document.querySelector('#left');
            const next = document.querySelector('#right');
            const images = document.querySelector('.carousel_item').children;
            const totalImages = images.length;
            let index = 0;

            prev.addEventListener('click', () => {
                nextImage('next');
            })

            next.addEventListener('click', () => {
                nextImage('prev');
            })

            function nextImage(direction) {
                if (direction == 'next') {
                    index++;
                    if (index == totalImages) {
                        index = 0;
                    }
                } else {
                    if (index == 0) {
                        index = totalImages - 1;
                    } else {
                        index--;
                    }
                }

                for (let i = 0; i < images.length; i++) {
                    images[i].classList.remove('main');
                }
                images[index].classList.add('main');
            }
        </script>
		<?php } ?>
															</div>
													
															<div class="col-xl-12">
																<div class="card card-custom">
<!----------------------------------------------------        card        ------------------------------------------------------------>

<?php foreach($ActivityMaster_Type1 as $value) {   
	
	
	$sql_Script_ActivityDetail = "";
	$sql_Result_ActivityDetail = null;
	$ActivityDetail = array();
	$id = 0;
	$id = $value['ActivityID'];
	$filepath = array();
	$sql_Script_ActivityDetail = "SELECT * FROM km_activityuploadfild Where km_activityuploadfild.IsActive = 1 AND  km_activityuploadfild.activityID = $id";
	$sql_Result_ActivityDetail = mysqli_query($link,$sql_Script_ActivityDetail);
	if(mysqli_num_rows($sql_Result_ActivityDetail) >  0)
	{
		while($row = mysqli_fetch_assoc($sql_Result_ActivityDetail)) {
			$filepath[] = $row['FilePath'];
		}
	}
	$index = count($filepath);
	?>

																	<div class="card-body" >
																		<!--begin::Heading-->

																		
																		<div class="d-flex justify-content-between align-items-center mb-7">
																			<h2 class="font-weight-bolder text-dark font-size-h3 mb-0" style="color: red!important;">ตัวอย่าง บรรยายการสร้างกระบวนการปฏิบัติที่เป็นเลิศ ทร. 4/64
																			<br>
																			<small style="color: black;">On : <?php echo  DateThai($value['UpdateOn']); ?></small>
																			</h2>
																			<a href="activityDetail.php" class="btn btn-light-primary btn-sm font-weight-bolder">View All</a>
																		</div>

<?php echo htmlspecialchars_decode(stripslashes($value['Description'])); ?>
																		<div class="row">

<?php 
	
	for($i = 0; $i < 8; $i++){
		//echo $filepath[$i];
		if($i < $index){
?>
	
  <div class="column" style="float: left;
  width: 25%;
  padding: 10px;">
  <?php echo '<img src = "' . $filepath[$i] . '" class="zoom" style="width:100%" >'; ?>
  </div>

<?php } ?>

<?php } ?>
</div>
</div>
<?php } ?>

<!----------------------------------------------------        card        ------------------------------------------------------------>																	
							






																</div>
																
															</div>
														</div>
														<br>
														<div class="example-preview">
															<!--begin::Pagination-->
															<div class="d-flex justify-content-between align-items-center flex-wrap">
																<div class="d-flex flex-wrap py-2 mr-3">
																	<a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
																		<i class="ki ki-bold-double-arrow-back icon-xs"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
																		<i class="ki ki-bold-arrow-back icon-xs"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">23</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1">24</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">25</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">26</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">27</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">28</a>
																	<a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>
																	<a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
																		<i class="ki ki-bold-arrow-next icon-xs"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
																		<i class="ki ki-bold-double-arrow-next icon-xs"></i>
																	</a>
																</div>


<!---------------------------------------------------------------------- page list ----------------------------------------------------->

																<div class="d-flex align-items-center py-3">
																	<div class="d-flex align-items-center">
																		<div class="mr-2 text-muted">Loading...</div>
																		<div class="spinner mr-10"></div>
																	</div>
																	<select class="form-control form-control-sm font-weight-bold mr-4 border-0 bg-light" style="width: 75px;">
																		<option value="10">10</option>
																		<option value="20">20</option>
																		<option value="30">30</option>
																		<option value="50">50</option>
																		<option value="100">100</option>
																	</select>
																	<span class="text-muted">Displaying 10 of 230 records</span>
																</div>
															</div>
<!---------------------------------------------------------------------- page list ----------------------------------------------------->
															<!--end:: Pagination-->
														</div>
													</div>
													
												</div>
												
											</div>

<!-------------------------------------Header Data Activity DOC----------------------------------------------- -->
<?php
$SQLyear = "SELECT * FROM km_year Where km_year.IsActive = 1 ORDER BY km_year.YearName DESC";
$Queryyear = mysqli_query($link,$SQLyear);
$Years = array();
if(mysqli_num_rows($Queryyear) > 0){
	while($row = mysqli_fetch_assoc($Queryyear)){
		$Years[] = $row;
	}
}
$SQLagency = "SELECT * FROM km_agency Where km_agency.IsActive = 1";
$Queryagency = mysqli_query($link,$SQLagency);
$Agencys = array();
if(mysqli_num_rows($Queryagency) > 0){
	while($row = mysqli_fetch_assoc($Queryagency)){
		$Agencys[] = $row;
	}
}


?>
<!---------------------------------------END Data Activity DOC----------------------------------------------- -->
											<div class="tab-pane" id="forms_widget_tab_2" role="tabpanel">
												<div class="card card-custom gutter-b card-stretch">
													<div class="card-body">
														<div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">
															<!--begin::Entry-->
															<!--begin::Hero-->
															<div class="d-flex flex-row-fluid bgi-size-cover bgi-position-top" style="background-image: url('assets/media/bg/bg-9.jpg')">
																<div class="container">
																	<div class="d-flex justify-content-between align-items-center pt-25 pb-35">
																		<h3 class="font-weight-bolder text-dark mb-0">คู่มือปฏิบัติงาน</h3>
																		<div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">
																			<!--begin::Form-->
																			<form method="get" class="quick-search-form">
																				<div class="input-group rounded bg-light">
																					<div class="input-group-prepend">
																						<span class="input-group-text">
																							<span class="svg-icon svg-icon-lg">
																								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																										<rect x="0" y="0" width="24" height="24" />
																										<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																										<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																									</g>
																								</svg>
																								<!--end::Svg Icon-->
																							</span>
																						</span>
																					</div>
																					<input type="text" class="form-control h-45px" placeholder="Search..." />
																					<div class="input-group-append">
																						<span class="input-group-text">
																							<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
																						</span>
																					</div>
																				</div>
																			</form>
																			<!--end::Form-->
																			<!--begin::Search Toggle-->
																			<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
																			<!--end::Search Toggle-->
																			<!--begin::Dropdown-->
																			<div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
																				<div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
																			</div>
																			<!--end::Dropdown-->
																		</div>
																	</div>
																</div>
															</div>
															<!--end::Hero-->
															<!--begin::Section-->
															<div class="container mt-n15">
																<!--begin::Card-->
																<div class="card mb-8">
																	<!--begin::Body-->
																	<div class="card-body p-10">
																		<!--begin::Row-->
																		<div class="row">
																			<div class="col-lg-3">
																				<!--begin::Navigation-->
																				<ul class="navi navi-link-rounded navi-accent navi-hover navi-active nav flex-column mb-8 mb-lg-0" role="tablist">
																					
																					<li class="navi-item mb-2 active">
																						<a class="navi-link active" data-toggle="pill" href="#forms_manual_tab_1">
																							<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">คู่มือปฏิบัติงาน</span>
																						</a>
																					</li>
																					<!--end::Item-->
																				</ul>
																				<!--end::Navigation-->
																			</div>
																			<div class="col-lg-9">
																				<!--begin::Tab Content-->
																				<div class="tab-content m-0 p-0">
																			
																				<div class="tab-pane active" id="forms_manual_tab_1" role="tabpanel">
																																										<!--begin::Accordion-->
																																										<div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="faq">
																																											<!--begin::Item-->

																																											<h1>หมวดหมู่: คู่มือปฏิบัติงาน work manual</h1>
																																											<hr>


																																											<?php 
																																													foreach($Years as $year){
																																																										
																																																																									
																																											?>

																																											<h2>คู่มือปฏิบัติงานประจำปีงบประมาณ <?php echo $year['YearName']?></h2>
																																											<div class="card border-top-0">
																																												<!--begin::Header-->
																																												<?php foreach($Agencys as $agency){ 
																																													$IdTab = $year['YearName'].$agency['AgencyID'];
																																												 
																																														
		
																																													$SQLWhereYear = ((int)$year['YearName']+543);
																																													$SQLWhereAgencyId = $agency['AgencyID'];
																																													$SQLActivityFile = "SELECT activity.UpdateOn as activityUpdateOn, fild.* FROM km_activity as activity INNER JOIN km_activityuploadfild as fild Where activity.AgencyID = $SQLWhereAgencyId AND year(activity.UpdateOn) = $SQLWhereYear AND activity.IsActive = 1 AND activity.ActivityTypeID = 2";
																																													$SQLQueryActivityFile = mysqli_query($link,$SQLActivityFile);
																																													$files = array();
																																													$Check = false;
																																													if(mysqli_num_rows($SQLQueryActivityFile) > 0) {
																																														while($row = mysqli_fetch_assoc($SQLQueryActivityFile)){
																																															$files[] = $row;											
																																														}
																																														$Check = true;
																																													}																																																																				
																																													
																																													?>
																																												<div class="card-header" id="<?php echo $IdTab; ?>">
																																													<a class="card-title collapsed text-dark" data-toggle="collapse" href="<?php echo '#faq'.$IdTab; ?>" aria-expanded="false" aria-controls="<?php echo 'faq'.$IdTab; ?>" role="button">
																																														<span class="svg-icon svg-icon-primary">
																																															<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
																																															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																																																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																																																	<polygon points="0 0 24 0 24 24 0 24" />
																																																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																																																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																																																</g>
																																															</svg>
																																															<!--end::Svg Icon-->
																																														</span>
																																														<div class="card-label text-dark pl-4"><?php echo $agency['AgencyName']; ?><text style="color: red"><?php echo '  file '.count($files) ?></text></div>
																																													</a>
																																												</div>
																																												<!--end::Header-->
																																												<!--begin::Body-->
																																												<div id="<?php echo 'faq'.$IdTab; ?>" class="collapse" aria-labelledby="<?php echo $IdTab; ?>" data-parent="<?php echo '#faq'.$IdTab; ?>">
																																												  							
																																														<?php 
																																															if($Check){
																																															foreach($files as $row) {	?>																						
																																														<p><i class="far fa-file-pdf text-danger icon-lg"></i> &nbsp;&nbsp;  <?php echo $row['FileName'] ?></p>									
																																														<?php } ?>
																																														<?php } ?>
																																												</div>
																																												
																																												<!--end::Body-->
																																												<?php } ?>
																																											</div>
																																											<?php } ?>
																																	


																																										</div>
																																										<!--end::Accordion-->
																				</div>
																				
																				<!--end::Tab Content-->
																			</div>
																		</div>
																		</div>
																		<!--end::Row-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Item-->
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="forms_widget_tab_3" role="tabpanel">
												<div class="card card-custom gutter-b card-stretch">
													<!--begin::Header-->
													<div class="card-header h-auto border-0">
														<!--begin::Title-->
														<div class="card-title py-5">
															<h3 class="card-label">
																<span class="d-block text-dark font-weight-bolder">คำสั่ง</span>
																<span class="d-block text-dark-50 mt-2 font-size-sm">คำสั่ง</span>
															</h3>
														</div>
													</div>
													<div class="card-body">
														<!--content-->
													</div>
												</div>
											</div>
										</div>
								    </div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					</div>

					<!--end::Footer-->
				</div>
				<?php require_once("footer.php");  ?>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>

		<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header align-items-center px-4 py-3">
							<div class="text-left flex-grow-1">
								<!--begin::Dropdown Menu-->
								<div class="dropdown dropdown-inline">
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</button>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown Menu-->
							</div>
							<div class="text-center flex-grow-1">
								<div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
								<div>
									<span class="label label-dot label-success"></span>
									<span class="font-weight-bold text-muted font-size-sm">Active</span>
								</div>
							</div>
							<div class="text-right flex-grow-1">
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
									<i class="ki ki-close icon-1x"></i>
								</button>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Scroll-->
							<div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
								<!--begin::Messages-->
								<div class="messages">
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/300_12.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">2 Hours</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">3 minutes</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/300_21.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/300_12.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
										<a href="#">https://github.com</a></div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/300_12.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
									</div>
									<!--end::Message Out-->
								</div>
								<!--end::Messages-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer align-items-center">
							<!--begin::Compose-->
							<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
							<div class="d-flex align-items-center justify-content-between mt-5">
								<div class="mr-3">
									<a href="#" class="btn btn-clean btn-icon btn-md mr-1">
										<i class="flaticon2-photograph icon-lg"></i>
									</a>
									<a href="#" class="btn btn-clean btn-icon btn-md">
										<i class="flaticon2-photo-camera icon-lg"></i>
									</a>
								</div>
								<div>
									<button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
								</div>
							</div>
							<!--begin::Compose-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<?php 
					mysqli_close($link);
		?>
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->
	</body>

	<!--end::Body-->
</html>