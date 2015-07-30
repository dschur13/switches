<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
    $dan = 23
    
    switch($dan):
        case(22):
            echo "no one likes you when you're 22";
            break;
        case(23):
            echo "no one really cares about 23 year olds either because you don't really know shit, you've never contributed to the world and you're really just dead weight at work anyway."
            break;
        case(24):
            echo "You're almost 25! Do you know what you wanna do with your life yet? probably not, but at least you still have a fast metabolism. Keep pounding this craft beers buddy!"
            break;
        case(25):
            echo "Oh baby 25! It's quarter life crisis time. Still don't know what you wanna do with your life do ya? You could go back to grad school and run away from the real world for a few more years until you're older, have a new shiny degree, and still no clue about what the fuck this life is about. Probably not gonna do that though because that would mean studying for the GMAT, and god knows you don't know how to study properly anymore.";
        default:
        echo "how fucking old are you? get out of here wierdo!";
        endswitch;
    ?>
	</body>
</html>