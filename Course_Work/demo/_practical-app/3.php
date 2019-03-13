<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if (3 > 1) {
    echo "I love PHP";
} elseif (20 < 10) {
    echo "elseif";
} else {
    echo "else";
}

echo "\n";
for($i=0; $i<10; $i++) {
    print_r($i);
}

echo "\n";
switch($i) {
    case 10:
        echo "switch works";
        break;
    default:
        echo "default called " . $i;
        break;
}


?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>