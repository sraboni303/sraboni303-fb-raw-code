<?php 


	/**
	 * Validation Error:
	 */
	function valid($msg, $type='warning'){

	        return '<p class="alert alert-'. $type .'">'. $msg .' !! <button class="close" data-dismiss="alert"> &times; </button> </p>';
	    }


	/**
	 * Data Insert:
	 */
	function insert($sql) {

		global $connection;
		$connection -> query($sql);
	}




 ?>