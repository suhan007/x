<?php
	/** display 5 posts from each forum that is selected by the user on Config_Global */
	if ( ms::meta('forum_no_1') == '' ) ms::meta('forum_no_1', ms::board_id(etc::domain()).'_1');
	for ( $i = 1; $i <= 10; $i++ ) {
		if ( ms::meta('forum_no_'.$i) != '' ) {
			$option = db::row( "SELECT bo_subject, bo_count_write FROM $g5[board_table] WHERE bo_table='".ms::meta('forum_no_'.$i)."'" );
			echo latest( "x-latest-blog" , ms::meta('forum_no_'.$i) , 5 , 25 );
		}
	}


	