<?php

	$tax_rate = 0.087;

	$price_001 = 0.0;
	$price_002 = 0.0;
	$price_003 = 0.0;
	$price_004 = 0.0;
	$price_005 = 0.0;

	$total = 0.0;
	$grand_total = 0.0;

	printf("\n Enter a price: ");
	fscanf(STDIN, "%f", $price_001);
	$total += $price_001;

	printf("\n Enter a price: ");
	fscanf(STDIN, "%f", $price_002);
	$total += $price_002;

	printf("\n Enter a price: ");
	fscanf(STDIN, "%f", $price_003);
	$total += $price_003;

	printf("\n Enter a price: ");
	fscanf(STDIN, "%f", $price_004);
	$total += $price_004;

	printf("\n Enter a price: ");
	fscanf(STDIN, "%f", $price_005);
	$total += $price_005;

	printf("\n Sub Total: %.2f", $total);
	printf("\n Tax Amount: %.3f", $tax_rate);
	// round up to get correct grand total
	printf("\n Grand Total: %.2f\n", round($total + ($total * $tax_rate), 2)); 
?>
