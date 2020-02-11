<?php

	$input_file 	= fopen("./students.txt", "r") or die("Unable to read input file\n");
	$summary 		= fopen("./summary.txt", "w") or die("Unable to open summary file for writing\n");
	$single_men 	= fopen("./single_men.txt", "w") or die("Unable to open single men file for writing\n");
	$single_women 	= fopen("./single_women.txt", "w") or die("Unable to open single women file for writing\n");

	$format = "%-16s%4d\r\n";

	fprintf($summary, "\n%s\r\n\n", "SUMMARY REPORT"); 

	fprintf($single_men, "\n%s\r\n\n", "SINGLE MEN OVER 30"); 
	fprintf($single_men, "%-16s%4s\n", "NAME", "AGE"); 

	fprintf($single_women, "\n%s\r\n\n", "SINGLE WOMEN OVER 30"); 
	fprintf($single_women, "%-16s%4s\n", "NAME", "AGE"); 

	$married_men 		= 0;
	$married_women 		= 0;
	$unmarried_men 		= 0;
	$unmarried_women 	= 0;

	$cur_name			= "";
	$cur_sex			= '';
	$cur_age			= 0;
	$cur_avail			= '';

	fscanf($input_file, "%s %c %d %c", $cur_name, $cur_sex, $cur_age, $cur_avail);
	while( !feof($input_file) ) {
		if($cur_sex == 'M') { // is male
			if($cur_avail == 'A') { // is unmarried
				$unmarried_men++;
				if( $cur_age > 30 ) { // is over 30
					fprintf($single_men, $format, $cur_name, $cur_age);
				}
			} else { // is male and married
				$married_men++;
			}
		} else { // is female
			if($cur_avail == 'A') { // is unmarried
				$unmarried_women++; 
				if( $cur_age > 30 ) { // is over 30
					fprintf($single_women, $format, $cur_name, $cur_age);
				}
			} else { // is female and married
				$married_women++;
			}
		}
		fscanf($input_file, "%s %c %d %c", $cur_name, $cur_sex, $cur_age, $cur_avail);
	}

	fprintf($summary, $format, "Married Men: ", $married_men);
	fprintf($summary, $format, "Single Men: ", $unmarried_men);
	fprintf($summary, $format, "Married Women: ", $married_women);
	fprintf($summary, $format, "Single Women: ", $unmarried_women);

	fclose($input_file);
	fclose($summary);
	fclose($single_men);
	fclose($single_women);
	
?>
