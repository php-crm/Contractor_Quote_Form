<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
  $preparedby=$_POST['preparedBy'];
	$description=$_POST['description'];
	$street1=$_POST['street1'];
  $street2=$_POST['street2'];
  $city=$_POST['city'];
   $state=$_POST['state'];
  $country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$phone=$_POST['phone'];
  $email=$_POST['email'];
  $quote=$_POST['quote'];
  $scopeInclude=$_POST['scopeInclude'];
   $scopeNotInclude=$_POST['scopeNotInclude'];
  $labor=$_POST['labor'];
  $materials=$_POST['materials'];
  $price=$_POST['price'];
  $tax=$_POST['tax'];
  $message=$_POST['message'];
  $terms=$_POST['terms'];
 
  
  

  $field1="<b>Prepared By:</b> ".$preparedby."<br>"."<b>Descrption of Work:</b> ".$description."<br>"."<b>Site of Work=> Street1:</b> ".$street1."<br>"."<b>Street2:</b> ".$street2."<br>"."<b>City:</b> ".$city."<br>"."<b>State:</b> ".$state."<br>"."<b>Country:</b> ".$country."<br>"."<b>Zipcode:</b> ".$zipcode."<br>"."<b>What is construction quote?:</b> ".$quote."<br>"."<b>Scope of work includes the following?:</b> ".$scopeInclude."<br>"."<b>Scope of work not include:</b> ".$scopeNotInclude."<br>"."<b>Labor Cost:</b> ".$labor."<br>"."<b>Materials Cost:</b> ".$materials."<br>"."<b>Total price of work:</b> ".$price."<br>"."<b>Taxes:</b> ".$tax."<br>"."<b>Other Condition/details:</b> ".$message."<br>"."<b>Terms of Service:</b> ".$terms;

  

}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
exit();
//echo $response;
?>