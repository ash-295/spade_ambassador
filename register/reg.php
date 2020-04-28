<?php //Post Params 
$bkjwehdkl = $_POST['bkjwehdkl'];  
$jpoewf = $_POST['jpoewf'];  
$uhoji = $_POST['uhoji'];  
$okp = $_POST['okp'];  
$IIHOIH = $_POST['IIHOIH'];  
$kjho = $_POST['kjho'];  
$ewe = $_POST['ewe'];  
$r23r = $_POST['r23r'];  

$con = mysqli_connect('localhost','spadeems_spadeems','vishal2000','spadeems_registration') or die('Error Establishing Database Connection!!');

$query = " INSERT INTO `registration`(`Full Name`, `Student Id`, `Institute Name`, `Course`, `Gender`, `Email id`, `Contact_Number`, `Referral`) VALUES ('$bkjwehdkl','$jpoewf','$uhoji','$okp','$IIHOIH','$kjho','$ewe','$r23r')";
$result = mysqli_query($con, $query);

 if( $result ) {
     $message="Form Submitted Successfully. Redirecting in 5 seconds";
     echo("<script type='text/javascript'>alert('$message')</script>");
     echo('Redirecting in 5 seconds');
     echo("<script type='text/javascript'>
setTimeout(function () {
   window.location.href= 'http://spadeems.com/ambassador/';
}, 5000);
</script>");
 }
 else
 {
 	echo 'Query Failed';
 }
?>

