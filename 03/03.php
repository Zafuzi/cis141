<?php 
	$loan_amt = 0;
	$deposit  = 0;
	$msg = "";

	printf("\nEnter the loan amount: ");
	fscanf(STDIN, "%f", $loan_amt);

	if($loan_amt < 25000) {
		$msg = "5% of loan value";
		$deposit = $loan_amt * 0.05;
	} else if ( $loan_amt < 50000 ) {
		$msg = "$1250 + 10% of loan over $25,000";
		$deposit = 1250 + ($loan_amt - 25000) * 0.10;
	} else if ( $loan_amt <= 100000 ) {
		$msg = "$5000 + 10% of loan over $50,000";
		$deposit = 5000 + ($loan_amt - 50000) * 0.10;
	} else {
		$msg = "LOANS OVER $100,000 ARE NOT ALLOWED!";
		$deposit = 0; 
	}

	printf("\n\t   Loan Amount : $%s", number_format($loan_amt, 2, '.', ','));
	printf("\n\t  Deposit Rule : %s", $msg);
	printf("\n\t Total Deposit : $%s\n\n", number_format($deposit, 2, '.', ','));
?>
