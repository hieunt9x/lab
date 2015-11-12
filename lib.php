<?php
	function arg(){
		$numargs = func_num_args();
		if ($numargs >= 1) {
			$x = 0 - func_get_arg(0);
			return $x;
		}
	}
	echo arg(5)."<br />";
	function sumcb(){
		$numargs = func_num_args();
		if ($numargs >= 2) {
			$x = func_get_arg(0)+ func_get_arg(1);
			return $x;
		}
	}
	echo sumcb(-5,7);

        
?>