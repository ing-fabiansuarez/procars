<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?= $this->renderSection('title') ?>&nbsp;-&nbsp;Pamplona</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<?= $this->renderSection('css') ?>
</head>

<body>
	<?= $this->include('structure/topbar') ?>
	<?= $this->include('structure/header') ?>
	<?= $this->renderSection('content') ?>
	<?= $this->include('structure/footer') ?>
	<div id="preloader"></div>
	<a href="https://api.whatsapp.com/send?phone=573118672380&text=Quiero%20saber%20m%C3%A1s..." class="back-to-top"><i class="icofont-brand-whatsapp"></i></a>
	<?= $this->renderSection('js') ?>
</body>

</html>