<?php
	require_once('../scafold/core.php');
            $javascript = "<script>
            window.top.location = 'https://www.facebook.com/".$page."/?sk=app_".$appId."';
            </script>' ";
            echo $javascript;    
?>
