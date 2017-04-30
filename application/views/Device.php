<?php
function lastDay($points)
{
	$res = 0;
	$start = time() - (360 * 24);
	foreach ($points as $point) {
		if($point['time_from'] > $start )
			$res+= $point['value'];
	}
	return $res-50700;
}

function lastWeek($points)
{
	$res = 0;
	$start = time() - (360 * 24 * 7);
	foreach ($points as $point) {
		if($point['time_from'] > $start )
			$res+= $point['value'];
	}
	return $res-44608;
}

function lastMonth($points)
{
	$res = 0;
	$start = time() - (360 * 24 * 31);
	foreach ($points as $point) {
		if($point['time_from'] > $start )
			$res+= $point['value'];
	}
	return $res-30000;
}




?>

<div class="container">
	<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<div class="row">
	<div class="col-md4">
		<h1><?php echo lastDay($points); ?> w/h</h1>
		<h3>in last 24 hours</h3>
	</div>
	<div class="col-md4">
		<h1><?php echo lastWeek($points); ?> w/h</h1>
		<h3>in last 7 days</h3>
	</div>
	<div class="col-md4">
		<h1><?php echo lastMonth($points); ?> w/h</h1>
		<h3>in last month</h3>
	</div>
	</div>
	<?php if($device['type'] == 1) { ?>
	<div class="row">
	<button class="button">You can invest in solar panels</button>
	
	</div>
	<?php } ?>
	
	<div class="row">	
		<div class="col-md12"><?php require('chart.php') ?></div>
	</div>
	<?php if($device['type'] == 1) { ?>
	<div class="row">	
		<div class="col-md12"><?php require('chartTemp.php') ?></div>
	</div>
	<?php } ?>
	<style type="text/css">
.col-md4 {
    display: inline-block;
    margin-right: 20px;
}

p.padding {
    padding-left: 14cm;
}
	iframe {
    border-width: 0px;
}</style>
<div class="row">	
	<iframe class="col-md8" src="<?php echo base_url(); ?>index.php/map" width="100%" height="400" align="right"></iframe>
</div>
</div>