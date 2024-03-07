   <?php

 //create connection
require_once'connections2.php';
$con= mysqli_connect($dbhost, $dbuser, $dbpassword, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

date_default_timezone_set('Africa/Accra');

$today = date('Y-m-d H:i:s', strtotime("+8 hour"));
$now = date('Y-m-d H:i:s');
$nowTime = time();
$UT008 = 'UT008';//USERTOKEN EXPIRED
$UT009 = 'UT009'; // USERKEY NOT CORRECTT
$UT010 = 'UT010'; // USERKEY NOT EXIST
$UT011 = 'UT011'; // USERKEY OKPA NOT EXIST
$UT012 = 'UT012'; // USERKEY SESSION EXPIRED LOGIN AGAIN 
$expTime = time() + ( 4 * 60 * 60);

$expTimeF = time() - ( 4 * 60 * 60);






	
 if (isset($_POST['firstname'])) {
		
		
		//form items
		 $id= isset($_POST['id']) ? $_POST['id'] : 'N/a';
	     $staffkey = isset($_POST['staffkey']) ? $_POST['staffkey'] : 'N/a';	
	     $staff_id = isset($_POST['staff_id']) ? $_POST['staff_id'] : 'N/a';	
	     $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'N/a';	
		 $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : 'N/a';
	 
		 $gender = isset($_POST['gender']) ? $_POST['gender'] : 'N/a';
	     $dateofbirth = isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : 'N/a';	
	     $placeofbirth = isset($_POST['placeofbirth']) ? $_POST['placeofbirth'] : 'N/a';	
	     $hometown = isset($_POST['hometown']) ? $_POST['hometown'] : 'N/a';	
		 $contactnumber = isset($_POST['contactnumber']) ? $_POST['contactnumber'] : 'N/a';
	 	 $residentialaddress = isset($_POST['residentialaddress']) ? $_POST['residentialaddress'] : 'N/a';	
	 	 $postaladdress = isset($_POST['postaladdress']) ? $_POST['postaladdress'] : 'N/a';
	 	 $ssnitnumber = isset($_POST['ssnitnumber']) ? $_POST['ssnitnumber'] : 'N/a';	
	 
	 
	 	 $privatemail= isset($_POST['privatemail']) ? $_POST['privatemail'] : 'N/a';
	     $facebook = isset($_POST['facebook']) ? $_POST['facebook'] : 'N/a';	
	     $twitter = isset($_POST['twitter']) ? $_POST['twitter'] : 'N/a';	
	     $maritalstatus = isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : 'N/a';	
		 $Spousename = isset($_POST['Spousename']) ? $_POST['Spousename'] : 'N/a';
	 
		 $Marriagedate = isset($_POST['Marriagedate']) ? $_POST['Marriagedate'] : 'N/a';
	     $Numberofchildren = isset($_POST['Numberofchildren']) ? $_POST['Numberofchildren'] : 'N/a';	
	     $photo = isset($_POST['photo']) ? $_POST['photo'] : 'N/a';	
	     $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : 'N/a';	
		 $presbytery = isset($_POST['presbytery']) ? $_POST['presbytery'] : 'N/a';
	 	 $profession = isset($_POST['profession']) ? $_POST['profession'] : 'N/a';	
	 	 $skills = isset($_POST['skills']) ? $_POST['skills'] : 'N/a';
	 	 $createddate = isset($_POST['createddate']) ? $_POST['createddate'] : 'N/a';
	 
	 
	 	 $department= isset($_POST['department']) ? $_POST['department'] : 'N/a';
	     $streetname = isset($_POST['streetname']) ? $_POST['streetname'] : 'N/a';	
	     $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : 'N/a';	
	     $station = isset($_POST['station']) ? $_POST['station'] : 'N/a';	
		 $countryofwork = isset($_POST['countryofwork']) ? $_POST['countryofwork'] : 'N/a';
	 
		 $institution = isset($_POST['institution']) ? $_POST['institution'] : 'N/a';
	     $staff_status = isset($_POST['staff_status']) ? $_POST['staff_status'] : 'N/a';	
	     $stafftype = isset($_POST['stafftype']) ? $_POST['stafftype'] : 'N/a';	
	     $datetaken = isset($_POST['datetaken']) ? $_POST['datetaken'] : 'N/a';	
		 $corporateemail = isset($_POST['corporateemail']) ? $_POST['corporateemail'] : 'N/a';
	 	 $fathername = isset($_POST['fathername']) ? $_POST['fathername'] : 'N/a';	
	 	 $mothername = isset($_POST['mothername']) ? $_POST['mothername'] : 'N/a';
	 	 $nextofkingname = isset($_POST['nextofkingname']) ? $_POST['nextofkingname'] : 'N/a';	
	 
	 
	 	 $nextofkingcontact= isset($_POST['nextofkingcontact']) ? $_POST['nextofkingcontact'] : 'N/a';
	     $spouseaddress = isset($_POST['spouseaddress']) ? $_POST['spouseaddress'] : 'N/a';	
	     $spousecontactnumber = isset($_POST['spousecontactnumber']) ? $_POST['spousecontactnumber'] : 'N/a';	
	     $emergencycontactpersonname = isset($_POST['emergencycontactpersonname']) ? $_POST['emergencycontactpersonname'] : 'N/a';	
		 $emergencynumber = isset($_POST['emergencynumber']) ? $_POST['emergencynumber'] : 'N/a';
		 $position = isset($_POST['position']) ? $_POST['position'] : 'N/a';
	     $category = isset($_POST['category']) ? $_POST['category'] : 'N/a';	
	     $confirmed = isset($_POST['confirmed']) ? $_POST['confirmed'] : 'N/a';	
	     $retirementdate = isset($_POST['retirementdate']) ? $_POST['retirementdate'] : 'N/a';	
		 $ssfretirementdate = isset($_POST['ssfretirementdate']) ? $_POST['ssfretirementdate'] : 'N/a';
	 	 $datemodified = isset($_POST['datemodified']) ? $_POST['datemodified'] : 'N/a';	
	 	 $modifiedby = isset($_POST['modifiedby']) ? $_POST['modifiedby'] : 'N/a';
	 	 $staff_age = isset($_POST['staff_age']) ? $_POST['staff_age'] : 'N/a';
	 
	 
	     $moderatorga = isset($_POST['moderatorga']) ? $_POST['moderatorga'] : 'N/a';
	     $clerkga = isset($_POST['clerkga']) ? $_POST['clerkga'] : 'N/a';	
	     $preschair = isset($_POST['preschair']) ? $_POST['preschair'] : 'N/a';	
	     $presclerk = isset($_POST['presclerk']) ? $_POST['presclerk'] : 'N/a';	
		 $recordupdated = isset($_POST['recordupdated']) ? $_POST['recordupdated'] : 'N/a';
	 	 $staffunit = isset($_POST['staffunit']) ? $_POST['staffunit'] : 'N/a';	
	 	 $qrcode = isset($_POST['qrcode']) ? $_POST['qrcode'] : 'N/a';
	 	 $barcode = isset($_POST['barcode']) ? $_POST['barcode'] : 'N/a';	
	 
	 
	 	 $barcodenumber= isset($_POST['barcodenumber']) ? $_POST['barcodenumber'] : 'N/a';
	     $datecommissioned = isset($_POST['datecommissioned']) ? $_POST['datecommissioned'] : 'N/a';	
	     $dateordained = isset($_POST['dateordained']) ? $_POST['dateordained'] : 'N/a';	
	     $staffgroup = isset($_POST['staffgroup']) ? $_POST['staffgroup'] : 'N/a';	
		 $ghanacard = isset($_POST['ghanacard']) ? $_POST['ghanacard'] : 'N/a';
	 
		 $gpsaddress = isset($_POST['gpsaddress']) ? $_POST['gpsaddress'] : 'N/a';
	     $department_id = isset($_POST['department_id']) ? $_POST['department_id'] : 'N/a';	
	     $unit_id = isset($_POST['unit_id']) ? $_POST['unit_id'] : 'N/a';	
	     



     
	     $id =mysqli_real_escape_string($con, $id);
		 $staffkey  =mysqli_real_escape_string($con, $staffkey);
	     $staff_id   =mysqli_real_escape_string($con, $staff_id);
	     $firstname =mysqli_real_escape_string($con, $firstname);
		 $lastname =mysqli_real_escape_string($con, $lastname);
	 
	 	 $gender =mysqli_real_escape_string($con, $gender);
		 $dateofbirth  =mysqli_real_escape_string($con, $dateofbirth);
	     $placeofbirth  =mysqli_real_escape_string($con, $placeofbirth);
	     $hometown =mysqli_real_escape_string($con, $hometown);
		 $contactnumber =mysqli_real_escape_string($con, $contactnumber);
	 	 $residentialaddress =mysqli_real_escape_string($con, $residentialaddress);
	 	 $postaladdress =mysqli_real_escape_string($con, $postaladdress);
	 	 $ssnitnumber =mysqli_real_escape_string($con, $ssnitnumber);
	 
	 	 $privatemail =mysqli_real_escape_string($con, $privatemail);
		 $facebook  =mysqli_real_escape_string($con, $facebook);
	     $twitter   =mysqli_real_escape_string($con, $twitter);
	     $maritalstatus =mysqli_real_escape_string($con, $maritalstatus);
		 $Spousename =mysqli_real_escape_string($con, $Spousename);
	 
	 	 $Marriagedate =mysqli_real_escape_string($con, $Marriagedate);
		 $Numberofchildren  =mysqli_real_escape_string($con, $Numberofchildren);
	     $photo  =mysqli_real_escape_string($con, $photo);
	     $user_id =mysqli_real_escape_string($con, $user_id);
		 $presbytery =mysqli_real_escape_string($con, $presbytery);
	 	 $profession =mysqli_real_escape_string($con, $profession);
	 	 $skills =mysqli_real_escape_string($con, $skills);
	 	 $createddate =mysqli_real_escape_string($con, $createddate);
	 
	 
	 	 $department =mysqli_real_escape_string($con, $department);
		 $streetname  =mysqli_real_escape_string($con, $streetname);
	     $nationality   =mysqli_real_escape_string($con, $nationality);
	     $station =mysqli_real_escape_string($con, $station);
		 $countryofwork =mysqli_real_escape_string($con, $countryofwork);
	 
	 	 $institution =mysqli_real_escape_string($con, $institution);
		 $staff_status  =mysqli_real_escape_string($con, $staff_status);
	     $stafftype  =mysqli_real_escape_string($con, $stafftype);
	     $datetaken =mysqli_real_escape_string($con, $datetaken);
		 $corporateemail =mysqli_real_escape_string($con, $corporateemail);
	 	 $fathername =mysqli_real_escape_string($con, $fathername);
	 	 $mothername =mysqli_real_escape_string($con, $mothername);
	 	 $nextofkingname =mysqli_real_escape_string($con, $nextofkingname);
	 
	 	 $nextofkingcontact =mysqli_real_escape_string($con, $nextofkingcontact);
		 $facebook  =mysqli_real_escape_string($con, $facebook);
	     $twitter   =mysqli_real_escape_string($con, $twitter);
	     $spousecontactnumber =mysqli_real_escape_string($con, $spousecontactnumber);
		 $emergencycontactpersonname =mysqli_real_escape_string($con, $emergencycontactpersonname);
	 
	 	 $emergencynumber =mysqli_real_escape_string($con, $emergencynumber);
		 $position  =mysqli_real_escape_string($con, $position);
	     $category  =mysqli_real_escape_string($con, $category);
	     $confirmed =mysqli_real_escape_string($con, $confirmed);
		 $retirementdate =mysqli_real_escape_string($con, $retirementdate);
	 	 $ssfretirementdate =mysqli_real_escape_string($con, $ssfretirementdate);
	 	 $datemodified =mysqli_real_escape_string($con, $datemodified);
	 	 $modifiedby =mysqli_real_escape_string($con, $modifiedby);
	 
	 
	 	 $staff_age =mysqli_real_escape_string($con, $staff_age);
		 $moderatorga  =mysqli_real_escape_string($con, $moderatorga);
	     $clerkga  =mysqli_real_escape_string($con, $clerkga);
	     $preschair =mysqli_real_escape_string($con, $preschair);
		 $presclerk =mysqli_real_escape_string($con, $presclerk);
	 	 $recordupdated =mysqli_real_escape_string($con, $recordupdated);
	 	 $staffunit =mysqli_real_escape_string($con, $staffunit);
	 	 $qrcode =mysqli_real_escape_string($con, $qrcode);
	 
	 	 $barcode =mysqli_real_escape_string($con, $barcode);
		 $barcodenumber  =mysqli_real_escape_string($con, $barcodenumber);
	     $datecommissioned   =mysqli_real_escape_string($con, $datecommissioned);
	     $dateordained =mysqli_real_escape_string($con, $dateordained);
		 $staffgroup =mysqli_real_escape_string($con, $staffgroup);
	 
	 	 $ghanacard =mysqli_real_escape_string($con, $ghanacard);
		 $gpsaddress  =mysqli_real_escape_string($con, $gpsaddress);
	     $department_id  =mysqli_real_escape_string($con, $department_id);
	     $unit_id =mysqli_real_escape_string($con, $unit_id);



	 

 $target_dir ="PersonUp/";
$errors = array();
$check = isset($_FILES["fileToUpload"]["tmp_name"]);
// Check if image file is a actual image or fake image
$check = isset($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
			$fileName = $_FILES['fileToUpload']["name"]; // The file name
			$fileTmpLoc =$_FILES['fileToUpload']["tmp_name"]; // File in the PHP tmp folder
			$fileSize =$_FILES['fileToUpload']["size"]; // File size in bytes
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			

            $ext = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
            $dest =  "PersonUp/" . $firstname. "_" . time() . "." . $ext;
			
			$url=$dest;

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
             && $imageFileType != "JPG" ) {
				 
		  $errors[] = "Sorry, File Type Not  allowed.";  
          $uploadOk = 0;
          }
	
          $uploadOk = 1;
          }
           else {
       
		  $errors[] = "File is not an image.";
          $uploadOk = 0;
              }
          if ($uploadOk == 0) {
		
		  $errors[] = "Sorry, your file was not uploaded."; 

            }
	 
	 
    $moveResult = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dest); 


	//inserting into database starts here
	$loanssqlA = "INSERT INTO `employeepersonaldetailsupdated` (`id`, `staffkey`, `staff_id`, `firstname`, `lastname`, `gender`, `dateofbirth`, `placeofbirth`, `hometown`, `contactnumber`, `residentialaddress`, `postaladdress`, `ssnitnumber`, `privatemail`, `facebook`, `twitter`, `maritalstatus`, `Spousename`, `Marriagedate`, `Numberofchildren`, `photo`, `user_id`, `presbytery`, `profession`, `skills`, `createddate`, `department`, `streetname`, `nationality`, `station`, `countryofwork`, `institution`, `staff_status`, `stafftype`, `datetaken`, `corporateemail`, `fathername`, `mothername`, `nextofkingname`, `nextofkingcontact`, `spouseaddress`, `spousecontactnumber`, `emergencycontactpersonname`, `emergencynumber`, `position`, `category`, `confirmed`, `retirementdate`, `ssfretirementdate`, `datemodified`, `modifiedby`, `staff_age`, `moderatorga`, `clerkga`, `preschair`, `presclerk`, `recordupdated`, `staffunit`, `qrcode`, `barcode`, `barcodenumber`, `datecommissioned`, `dateordained`, `staffgroup`, `ghanacard`, `gpsaddress`, `department_id`, `unit_id`) VALUES (NULL, '$staffkey', '$staff_id', '$firstname', '$lastname', '$gender', '$dateofbirth', '$placeofbirth', '$hometown', '$contactnumber', '$residentialaddress', '$postaladdress', '$ssnitnumber', '$privatemail', '$facebook', '$twitter', '$maritalstatus', '$Spousename', '$Marriagedate', '$Numberofchildren', '$url', '$user_id', '$presbytery', '$profession', '$skills', '$createddate', '$department', '$streetname', '$nationality', '$station', '$countryofwork', '$institution', '$staff_status', '$stafftype', '$datetaken', '$corporateemail', '$fathername', '$mothername', '$nextofkingname', '$nextofkingcontact', '$spouseaddress', '$spousecontactnumber', '$emergencycontactpersonname', '$emergencynumber', '$position', '$category', '$confirmed', '$retirementdate', '$ssfretirementdate', '$datemodified', '$modifiedby', '$staff_age', '$moderatorga', '$clerkga', '$preschair', '$presclerk', '$recordupdated', '$staffunit', '$qrcode', '$barcode', '$barcodenumber', '$datecommissioned', '$dateordained', '$staffgroup', '$ghanacard', '$gpsaddress', '$department_id', '$unit_id');";
	

    $result0A = $con->query($loanssqlA);

if ($result0A) {
echo json_encode("Successful"); 
	 }
else {echo json_encode("Failed");  }
	
	//inserting into database ends here	 
		 
		
		 
		 }
		 
 