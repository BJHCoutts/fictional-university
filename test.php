<?php $siteName = "Fictional University" ?>
<h1><?php echo $siteName; ?></h1>
<?php function testFunction($param1) {
	echo "This is ", 4+4, " $param1";
}
?>
<?php
	testFunction("test");
	echo " ";
	bloginfo("name");
?>

<?php
		$names = array("item1", "item2");
		echo $names[1];
		$count = 0;
		while($count < count($names)) {
			echo "<p>$count $names[$count]</p>";
			$count ++;
		}
	?>