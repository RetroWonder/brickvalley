<?php
echo '[bricks]<br>';
for($i = 0; $i <= 200; $i++) {
	echo '=" '.rand(-100,100).' '.rand(-100,100).' '.rand(-100,100).' '.rand(1,10).' '.rand(1,10).' '.rand(1,10).' '.rand(0,16777215).' '.(rand(1,10)/10).' 1<br>';
}
?>