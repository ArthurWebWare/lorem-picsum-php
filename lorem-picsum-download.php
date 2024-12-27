<?php 

for ($i = 0; $i < 150; $i++) {
    $imageContent = file_get_contents('https://picsum.photos/id/'.$i.'/1500');
    if (!empty($imageContent)) {
    	file_put_contents('local_image_'.$i.'.jpg', $imageContent);
    }
    
    sleep(1);
}

exit;
