<?php

	$employees 	= array();

	function get_data() {
		global $employees;
		$input_file 	= fopen("./employees.txt", "r") or die("Unable to read input file\n");
		$r			 = 0;
		while( !feof($input_file) ) {
			$l = fscanf($input_file, "%s%s%f", $employees[$r][], $employees[$r][], $employees[$r][]);
			if( $l == 0 ) { // remove from employees array if eof 
				unset($employees[$r]);
			}
			$r++;
		}
		fclose($input_file);
	}

	function run_search() {
		global $employees;
		$e_id = "";	
		while( $e_id != "0" ) {
			printf("\nEnter an employee ID to search for (0 to quit): ");
			fscanf(STDIN, "%s", $e_id);
			$employee_found = False;
			for($i = 0; $i < count($employees); $i++) { // honestly forget that forEach hadn't been learned yet.
				$e = $employees[$i];
				if( strtolower($e[0]) == strtolower($e_id) ) { // make all lowercase for easier testing
					printf("ID: %s\nNAME: %s\nWAGES: %f\n", $e[0], $e[1], $e[2]);
					$employee_found = True;
				}
			}
			if(!$employee_found && $e_id != "0") {
				printf("\nNo employee with ID %s was found.\n", $e_id); 
			}
		}
	}


	function main() {
		get_data();
		run_search();
	}

	main();

?>
