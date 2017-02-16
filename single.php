<?php
if (in_category('4')) {include (TEMPLATEPATH . '/single-operacoes.php'); #category 4 = operações
}

elseif (in_category('29, 23, 8, 6, 13, 12, 11, 10, 9')) {include (TEMPLATEPATH . '/single-full.php');
}

elseif(has_post_format( 'video' ) ) {include (TEMPLATEPATH . '/single-full.php');
	
}

else { include (TEMPLATEPATH . '/single-sidebar.php');
}
?>