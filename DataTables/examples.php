<?php
use DataTables\DataTable;
include_once 'DataTable.php';
$datatable = new DataTable('datatable');
$datatable->withBootstrap5()->extResponsive()->extFixedHeader()->extColReorder()->extButtons()->extSearchBuilder();
$dummyData = '[
	{
		"name": "Kuame Boyd",
		"phone": "1-854-577-4725",
		"email": "rutrum.fusce@necimperdiet.edu",
		"address": "713-723 Quisque Street",
		"postalZip": "187459",
		"region": "San Andrés y Providencia",
		"country": "Chile"
	},
	{
		"name": "Audra Lynch",
		"phone": "1-232-576-8133",
		"email": "nec.euismod.in@sit.edu",
		"address": "Ap #712-2760 Dictum St.",
		"postalZip": "4380",
		"region": "Vorarlberg",
		"country": "New Zealand"
	},
	{
		"name": "Lionel Travis",
		"phone": "1-273-413-6819",
		"email": "neque.pellentesque@et.org",
		"address": "790-727 Sed Avenue",
		"postalZip": "2799 IW",
		"region": "Jigawa",
		"country": "Poland"
	},
	{
		"name": "Charissa Goodwin",
		"phone": "1-531-275-1823",
		"email": "dictum@ametrisus.co.uk",
		"address": "Ap #671-805 Sapien Ave",
		"postalZip": "3396",
		"region": "Lipetsk Oblast",
		"country": "United Kingdom"
	},
	{
		"name": "Hamish Gibbs",
		"phone": "1-500-459-5313",
		"email": "risus@aliquameratvolutpat.edu",
		"address": "Ap #579-5526 Ligula. St.",
		"postalZip": "9691",
		"region": "Vienna",
		"country": "Mexico"
	},
	{
		"name": "Gisela Nelson",
		"phone": "(381) 816-6988",
		"email": "dolor.sit@curabiturmassa.com",
		"address": "499-8848 Commodo Avenue",
		"postalZip": "62711",
		"region": "Tây Ninh",
		"country": "United Kingdom"
	},
	{
		"name": "Darrel Cline",
		"phone": "1-594-654-8724",
		"email": "dolor.tempus@tellusphaselluselit.org",
		"address": "5374 Semper. Ave",
		"postalZip": "81484",
		"region": "Emilia-Romagna",
		"country": "Italy"
	},
	{
		"name": "Gray Fields",
		"phone": "(742) 633-4337",
		"email": "diam@feugiattellus.edu",
		"address": "8950 Ut Av.",
		"postalZip": "34338",
		"region": "Jeju",
		"country": "South Korea"
	},
	{
		"name": "Alexa Eaton",
		"phone": "1-372-828-7712",
		"email": "enim@estmauris.ca",
		"address": "Ap #549-9949 Ipsum Avenue",
		"postalZip": "58234",
		"region": "South Gyeongsang",
		"country": "Germany"
	},
	{
		"name": "Ciaran Kirkland",
		"phone": "(284) 864-8625",
		"email": "bibendum.ullamcorper.duis@justoeuarcu.edu",
		"address": "247-8303 Ullamcorper, St.",
		"postalZip": "11108",
		"region": "Connecticut",
		"country": "Indonesia"
	}
]';
$datas = json_decode($dummyData, true);
$datatable->setHeaders(["Name" => [], "Phone" => [], "Email" => [], "Address" => [], "Postal" => [], "Region" => [], "Country" => []]);
foreach ($datas as $row) {
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $address = $row['address'];
    $postal = $row['postalZip'];
    $region = $row['region'];
    $country = $row['country'];
    $datatable->addRow("<tr><td>$name</td><td>$phone</td><td>$email</td><td>$address</td><td>$postal</td><td>$region</td><td>$country</td></tr>");
}
$datatable->addOption("responsive", true);
$datatable->addOption("fixedHeader", ["header" => true]);
$datatable->addOption('colReorder', true);
$datatable->addOption("buttons", [
    ['extend' => 'searchBuilder'],
    ['extend' => 'copy'],
    ['extend' => 'excel'],
    ['extend' => 'colvis']
]);
$datatable->installLinkIncludes();
echo $datatable->create();
$datatable->installScriptIncludes();
