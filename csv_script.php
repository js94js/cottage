<?php

// get the data from the initial csv file

$src = fopen('source data.csv','r');




// open each csv that the data will be output to
$order_csv = fopen('order_data.csv','w');
$ordered_items_csv = fopen('ordered_items_data.csv','w');
$customer_csv = fopen('customer_data.csv','w');
$item_csv = fopen('item_data.csv','w');


// arrays of unique ids so we can avoid duplicates
$order_numbers = [];
$customer_numbers = [];
$item_numbers = [];


// loop through the data and output into several different csv files
while (($data = fgetcsv($src, 1000, ",")) !== FALSE) {
	
	
	
	
	
	
	
	
	// output to csvs - only if there is not already an entry with the same primary key

	fputcsv($ordered_items_csv,array(
		$data[0],$data[5],$data[8]
	));
	if (!in_array($data[0],$order_numbers)){
		fputcsv($order_csv,array(
			$data[0],$data[1],$data[2]
		));
		$order_numbers[] = $data[0];
	}
	if (!in_array($data[2],$customer_numbers)){
		fputcsv($customer_csv,array(
			$data[2],$data[3],$data[4]
		));
		$customer_numbers[] = $data[2];
	}
	if (!in_array($data[5],$item_numbers)){
		fputcsv($item_csv,array(
			$data[5],$data[6],$data[7]
		));
		$item_numbers[] = $data[5];
	}
	
	
	
	
	
	
	
	
	
}


fclose($src);	
fclose($order_csv);
fclose($ordered_items_csv);
fclose($customer_csv);
fclose($item_csv);



// loop through each array 







?>