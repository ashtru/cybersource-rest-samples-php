<?php
require_once('vendor/autoload.php');
require_once('./Resources/ExternalConfiguration.php');

function GetNotificationOfChanges()
{
	$commonElement = new CyberSource\ExternalConfiguration();
	$config = $commonElement->ConnectionHost();
	$apiclient = new CyberSource\ApiClient($config);
	$api_instance = new CyberSource\Api\NotificationOfChangesApi($apiclient);
	$api_response = list($response,$statusCode,$httpHeader)=null;
	try {
		$startTime='2018-05-01T12:00:00-05:00';
		$endTime='2018-05-30T12:00:00-05:00';
		$api_response = $api_instance->getNotificationOfChangeReport($startTime, $endTime);
		echo "<pre>";print_r($api_response);

	} catch (Cybersource\ApiException $e) {
		print_r($e->getResponseBody());
		print_r($e->getMessage());
    }
}    

// Call Sample Code
if(!defined('DO_NOT_RUN_SAMPLES')){
    echo "GetNotificationOfChanges Samplecode is Running.. \n";
	GetNotificationOfChanges();

}
?>	