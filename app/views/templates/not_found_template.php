<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?= $subject;?></title>
<link href="<?= base_url('public_html/css/bootstrap.min.css');?>" media="all" rel="stylesheet" type="text/css" />
</head>

<body itemscope itemtype="http://schema.org/EmailMessage">

<h3>Hello <?= $receipient_number;?>, the requested seat number does not exist on our servers.</h3>

From <?= $exam_body; ?>
</body>
</html>
