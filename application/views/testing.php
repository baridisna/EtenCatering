<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<p><?= $detail->photo ?></p>
	<p><?= $detail->product_name ?></p>

	<img src="<?php echo base_url();?>assets/images/<?= $detail->photo ?>" alt="User profile picture">

</body>
</html>