<?php 
require_once("header.php");
require_once "services/dblink.php";
  $sqlgetAgency = "SELECT * FROM km_agency Where km_agency.IsActive = 1";
  $resultAgencyFromDB = mysqli_query($link,$sqlgetAgency);
  //print_r($resultAgencyFromDB);
  //exit(0);
  $agencylist = array();
  if (mysqli_num_rows($resultAgencyFromDB) != 0) 
    {
      while($row = mysqli_fetch_assoc($resultAgencyFromDB)){
        $agencylist[] = $row;
    }
  }
  //ในการอัตโหลดมีการแยก service เพื่อต้องการให้หากันเจอ ต้องใช้ id ให้ตรงกัน
  $uniqidformActivity = uniqid();
  $uniqodformDocument = uniqid();
?>

					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

              <?php
/*
if(isset($_SESSION["upload"])){
  $upload_id = array();
  $upload_file = array();
  $upload_path = array();

  if(isset($_SESSION["upload_id"])){
    $upload_id =  $_SESSION["upload_id"];
    foreach($upload_id as $value) {
      echo $value, '<br>';
  }
  }

  if(isset($_SESSION["upload_file"])){
    $upload_file =  $_SESSION["upload_file"];
    foreach($upload_file as $value) {
      echo $value, '<br>';
  }
  }

  if(isset($_SESSION["upload_path"])){
    $upload_path =  $_SESSION["upload_path"];
    foreach($upload_path as $value) {
      echo $value, '<br>';
    }
  }
}
*/
?>


              <form action="services/createactivityservice.php" method="post" enctype="multipart/form-data" id="ActivityForm">
              <input type="hidden" name="Activity" id="ActivityID" value="<?php echo $uniqidformActivity;?>">
              <input type="hidden" name="type" id="" value="1">
              <div class="card card-custom">
											<div class="card-header card-header-tabs-line">
												<div class="card-title">
													<h3 class="card-label">Create</h3>
												</div>
												<div class="card-toolbar">
													<ul class="nav nav-tabs nav-bold nav-tabs-line">
														<li class="nav-item">
															<a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3">
																<span class="nav-icon">
																	<i class="flaticon2-chat-1"></i>
																</span>
																<span class="nav-text">ประชุมและสัมมนา</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3">
																<span class="nav-icon">
																	<i class="flaticon2-drop"></i>
																</span>
																<span class="nav-text">คู่มือปฎิบัติงาน</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="tab-content">
													<div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">
                          <div class="card-header">
  <h3 class="card-title">
  ข่าวกิจกรรม,ประชุมและสัมมนา
  </h3>
 </div>
  <div class="card-body">
   <div class="form-group mb-8">
   <div class="form-group row">
    <label  class="col-2 col-form-label">หัวข้อ : </label>
    <div class="col-10">
     <input class="form-control" type="text" value="" id="Name" name="Name"/>
    </div>
   </div>
 
   <div class="row">

									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">รายละเอียด</h3>
											</div>
											<div class="card-body">
                      <div class="tinymce">
													<textarea id="kt-tinymce-4" name="details" class="tox-target">

													</textarea>
												</div>
												</div>
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
	</form>
  <div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12 text-lg-right">อัพโหลดรูปภาพ</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<!--<div class="dropzone dropzone-default dropzone-success" id="kt_dropzone_3">-->
													<form action="uploadActivity.php" class="dropzone dropzone-default dropzone-success" id="kt_dropzone_3">
                          <div class="dropzone-msg dz-message needsclick">                        
															<h3 class="dropzone-msg-title">Drop images here or click to upload.</h3>
															<!--<span class="dropzone-msg-desc">Upload up to 10 files</span>-->
														</div>
											  	</form>                       
												</div>
											</div>
                    <div class="card-footer">
                    <div class="row">
                   <div class="col-2">
                  </div>
                   <div class="col-10">
                        <button type="button" id="SubmitActivity" class="btn btn-success mr-2">Submit</button>
                         <button type="button" class="btn btn-secondary">Cancel</button>
                  </div>
                  </div>
                  </div>
                  </div>

      </div>

<!----------------------------------------------------------------------------------------------------------------------------------->

			<div class="tab-pane fade" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">
                          <div class="card-header">
                            <h3 class="card-title">
                            ข่าวกิจกรรม,ประชุมและสัมมนา
                            </h3>
                              </div>
          <div class="card-body">
            <form action="services/Docservice.php" method="post" enctype="multipart/form-data" id="DocForm">
             <input type="hidden" name="DocId" id="DocID" value="<?php echo $uniqodformDocument;?>">
             <input type="hidden" name="type" id="" value="2">
                <div class="form-group mb-8">
                    <div class="form-group row">
                           <label  class="col-2 col-form-label">หน่วยงาน</label>
                    <div class="col-10">
                    <select name="agencyId" class="form-control form-control-lg" id="agencyId">
                            <option value = "0" >===============================================================================================</option>
                            <?php foreach($agencylist as $row) { ?>
                            <option value="<?php echo $row["AgencyID"]?>"><?php echo $row["AgencyName"];?></option>
                            <?php } ?>
                    </select>
                    </div>
                    </div>
										</form>
                  <div class="row">        
									<div class="col-lg-12">
                  <div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12 text-lg-right">อัพโหลดไฟล์</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
                        <form action="uploadDoc.php" class="dropzone dropzone-default dropzone-info" id="kt_dropzone_2">
                        <div class="dropzone-msg dz-message needsclick">
															<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
															<!--<span class="dropzone-msg-desc">Upload up to 10 files</span> -->
												</div>
                        </form>          
												</div>
											</div>
                    <div class="card-footer">
                    <div class="row">
                   <div class="col-2">
                  </div>
                   <div class="col-10">
                         <button type="button" class="btn btn-success mr-2" id="SubmitDoc">Submit</button>
                         <button type="button" class="btn btn-secondary">Cancel</button>
                  </div>
                  </div>
                  </div>
                  </div>
                  
                  </div>
												
									</div>
									</div>
						</div>
            </div>
            </div>
            </div>
		    </div>
    </div>
</div>
      <?php require_once("footer.php");  ?>

		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="assets/js/pages/widgets.js"></script>
		<script src="assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/forms/editors/tinymce.js"></script>
		<script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
	</body>
</html>
<script>
  $("#SubmitActivity").click(function() {
    var Name = $("#Name").val(); 
    if(Name == "") {
      alert("กรุณากรอกข้อมูลให้ครบ");
    }else{
      $("#ActivityForm").submit();
    }
  });

  $("#SubmitDoc").click(function() {
    var agencyId = $("#agencyId").val();
    if(agencyId == 0){
      alert("กรุณากรอกข้อมูลให้ครบ");
    }else{
      $("#DocForm").submit();
    }
     
  });
</script>
