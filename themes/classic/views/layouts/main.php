<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="language" content="ru" />
    <meta name="robots" content="all" />
    <title>
        Fashion Road
    </title>
  </head>

<body style="background-color: black">

<div class="container" id="page">
	<div>
            <center>
            	<?php
			$this->renderPartial('//layouts/header');
		?>
            </center>
	</div><!-- mainmenu -->
        <center>
        <?= $content; ?>
        </center>
	<div class="clear"></div>

	<div id="footer">
            <center>
	<? $this->renderPartial('//layouts/footer')?>
            </center>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
