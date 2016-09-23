<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?= $subject;?></title>
<link href="<?= base_url('public_html/css/bootstrap.min.css');?>" media="all" rel="stylesheet" type="text/css" />
</head>

<body itemscope itemtype="http://schema.org/EmailMessage">

<h3>Hello <?= $application->name;?>, please find below details of the resut you requested verification for.</h3>
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" width="600">
			<div class="content">
				<table class="main" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="content-wrap text-center">
							<table width="100%" cellpadding="0" cellspacing="0">
								
								<tr>
									<td class="content-block text-center">
										<table width="80%" class="table invoice">
										<tr>
											<td><strong>Exam Body</strong></td>
											<td class="text-right"><?= $exam_body;?></td>
										</tr>
										<tr>
											<td><strong>Exam Year</strong></td>
											<td class="text-right"><?= $application->exam_year;?></td>
										</tr>
										<tr>
											<td><strong>Exam Type</strong></td>
											<td class="text-right"><?= $application->exam_type;?></td>
										</tr>
											<tr>
												<td><strong>Applicant Name</strong></td>
												<td><?= $application->name;?></td>
											</tr>
											<tr>
												<td><strong>Applicant Seat Number</strong></td>
												<td><?= $application->seat_number;?></td>
											</tr>
											<tr>

													<table width="100%" cellpadding="0" cellspacing="0" class="table-bordered">
														<?php foreach(json_decode($application->grades) as $key => $value):?>
														<tr>
															<td><strong><?= $key;?></strong></td>
															<td class="text-right"><?= $value;?></td>
														</tr>
														<?php endforeach;?>
													</table>
											</tr>
										</table>
									</td>
								</tr>
								
							</table>
						</td>
					</tr>
				</table>
				<div class="footer">
					
				</div></div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>
