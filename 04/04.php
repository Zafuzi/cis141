<?php

	$input_file = fopen("./inv.txt", "r") or die("Unable to read input file\n");
	$output_file = fopen("./summary.txt", "w") or die("Unable to open summary file for writing\n");

	fprintf($output_file, "\n%30s\r\n", "SALES REPORT"); 

	$format = "%-12s%-14s%15s%25s\r\n";
	fprintf($output_file, $format, "ITEM ID", "ITEM NAME", "SALES DIFF", "MESSAGE"); 

	$item_id 	= "";
	$item_name 	= "";
	$last_years = 0;
	$this_years = 0;
	$message 	= "";
	$lines 		= 0;
	fscanf($input_file, "%s %s %d %d", $item_id, $item_name, $last_years, $this_years);
	while( !feof($input_file) ) {
		$sales_diff = $last_years - $this_years; 

		if($sales_diff > 0 ) {
			$message = "HUMAN DID GOOD";
		} else if( $sales_diff < 0 ) {
			$message = "HUMAN DID BAD";
		} else {
			$message = "HUMAN DID OKAY";
		}
		$lines += 1;
		fprintf($output_file, $format, $item_id, $item_name, $sales_diff, $message);
		fscanf($input_file, "%s %s %d %d", $item_id, $item_name, $last_years, $this_years);
	}
	fprintf($output_file, "\nPROCESSED %d RECORDS\n\n", $lines); 
	printf("\nPROCESSED %d RECORDS\n\n", $lines); 
	
	fclose($input_file);
	fclose($output_file);
	
?>
