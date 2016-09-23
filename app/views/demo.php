<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= $subject;?></title>

	<script type="text/javascript" src="<?= base_url('public_html/js/jquery.js');?>"></script>

	<style type="text/css" media="screen">
		body,
		p,
		a,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			margin: 0;
			padding: 0;
		}
		a:hover,
		a:active {
			outline: none;
		}
		img {
			border: 0;
			line-height: 100%;
			outline: none;
			text-decoration: none;
			-ms-interpolation-mode: bicubic;
		}
		#outlook a {
			padding: 0;
		}
		/* Force Outlook to provide a "view in browser" button. */
		body {
			width: 100% !important;
		}
		/* Force Hotmail to display emails at full width */
		.ReadMsgBody {
			width: 100%;
		}
		.ExternalClass {
			width: 100%;
		}
		body {
			-webkit-text-size-adjust: none;
			-ms-text-size-adjust: none;
		}
		/* Prevent Webkit and Windows Mobile platforms from changing default font sizes. */
		table td {
			border-collapse: collapse;
		}
		/* Fix Outlook 07, 10 Padding issue */
		/* -----------------------------------------------------------
    Grid System a la HTML Emails using Tables
    Apply these col-pw-X or col-lg-X classes to <td> tags.
    These tags are already applied to the snippets in the grid600 default template.
    Provide your designer with the accomanying photoshop files to make
    developing with the grid even easier! (revised Photoshop files in the works)
    Email Designs with borders.  If you want your email design to have a border, I
    recommend breaking from the 600px format and adding the border to the outside
    of the 600px grid. This allows us to retain the grid and avoid confusing
    calculations and funny sizes.  So, a grid with a 1px border would be easiest to
    achieve as a 600px grid + a 1px border on the left and right, resulting in an email
    602px   wide. A 600px grid with a 5px border would result in an email 610px wide.
    ----------------------------------------------------------- */
    /* -------------------------------------------
    .col-lg-X columns with especific width and NO padding
    ------------------------------------------- */
    .col-lg-1, .col-lg-2, .col-lg-3,
    .col-lg-4, .col-lg-5, .col-lg-6,
    .col-lg-7, .col-lg-8, .col-lg-9
    .col-lg-10, .col-lg-11, .col-lg-12 {
        padding-left:  0px; padding-right: 0px;
    }
    .col-lg-1	 { width: 50px; }
    .col-lg-2	 { width: 100px; }
    .col-lg-3	 { width: 150px; }
    .col-lg-4  { width: 200px; }
    .col-lg-5	 { width: 250px; }
    .col-lg-6  { width: 300px; }
    .col-lg-7  { width: 350px; }
    .col-lg-8	 { width: 400px; }
    .col-lg-9	 { width: 450px; }
    .col-lg-10 { width: 500px; }
    .col-lg-11 { width: 550px; }
    .col-lg-12 { width: 600px; }
  /* -------------------------------------------
  .col-pw-X columns with especific width and some padding
  The default padding is 10px on the left and right.
  If you need other padding for your default columns, you will need to change
  the width values also.
  Get the respective .col-lg-X width and subtract both padding. In the default
  values, the class .col-pw-3 have width equals 130px, then
  .col-pw-3 = width:150px (.col-lg-3) - padding-left: 10px - padding-right: 10px
  ------------------------------------------- */
		.col-pw-1, .col-pw-2, .col-pw-3,
		.col-pw-4, .col-pw-5, .col-pw-6,
		.col-pw-7, .col-pw-8, .col-pw-9
		.col-pw-10, .col-pw-11, .col-pw-12 {
        padding-left:  10px;
        padding-right: 10px;
    }
		.col-pw-1	 { width: 30px; }
		.col-pw-2	 { width: 80px; }
    .col-pw-3  { width: 130px; }
    .col-pw-4  { width: 180px; }
		.col-pw-5	 { width: 230px; }
    .col-pw-6  { width: 280px; }
    .col-pw-7  { width: 330px; }
    .col-pw-8  { width: 380px; }
    .col-pw-9  { width: 430px; }
    .col-pw-10 { width: 480px; }
    .col-pw-11 { width: 530px; }
    .col-pw-12 { width: 580px; }
		.full-width {
			padding-left: 0;
			padding-right: 0;
			width: 600px;
		}
    .row {
      width: 100%;
      display: block;
    }
    .img-responsive {
      width: 100%;
    }
		/* -----------------------------------------------------------
    Utility Styles
    This section helps give us a baseline by standardizing several
    elements that behave in slightly different ways.  You can
    edit some styles in this section if you need to change these
    sizes to fit your needs.  Or you can just override what you need
    in the next section.
    Set all header, paragraph, and list elements to have same spacing
    If you want to change the spacing of these elements, change that here.
    ----------------------------------------------------------- */
		#background-container {
			height: 100% !important;
			margin: 0;
			padding: 0;
			width: 100% !important;
		}
		/*  Set header tags, p tags and bulleted lists to have the same spacing
        use p tags for general text content, but not within bulleted lists.
        Text for bulleted lists can just remain wrapped in the td tags */
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			display: block;
			margin-top: 12px;
		}
		table { display: block; }
		td { padding-bottom: 6px; }
		td p { margin-top: 12px; }
		td.bullet,
		td.bullet-item {
			padding-top: 12px;
		}
		/*  Set width of bullet column of a table-based bulleted list */
		td.bullet {
			width: 20px;
		}
		/* Gmail/Hotmail add an extra space below images.  This fixes it. */
		.image-fix {
			display: block;
		}
		/* -----------------------------------------------------------
    Email Specific Styles
    Begin styling your specific email here.
    ----------------------------------------------------------- */
		/* sets the global background color */
		body,
		#background-container {
			background-color: #ddd;
		}
		#template-container {
			background-color: #fff;
		}
		a {
			color: #0000FF;
		}
		/* If any links appear in your copy that aren't supposed to be links
       you may still need to make them links and give them color because
       certain email clients will render them blue and make them links anyways
    a.link-fix {
        color: #999;
    }
    */
		/* Set your header font-styles here */
		h1,
		.h1 {
			font-family: arial;
			font-size: 20px;
			line-height: 22px;
		}
		/*
    h2, .h2 { font-family: arial; font-size:18px; line-height:20px; }
    h3, .h3 { font-family: arial; font-size:13px; line-height:17px; }
    h4, .h4 { ... }
    */
		/* Set your body fonts styles here */
		td,
		td p {
			font-family: arial;
			font-size: 12px;
			line-height: 18px;
		}
		/* if you need more font styles
         extend them with new font class */
		td.secondary-font-style,
		td.secondary-font-style p {
			font-family: arial;
			font-size: 12px;
			line-height: 18px;
		}
		/* Social Media Icons extend the bullet list */
		.social-media td.bullet {
			width: 30px;
		}
		.social-media td.bullet-item {
			line-height: 14px;
			padding-top: 5px;
		}
		/* Don't forget! */
		.view-online {}
		.unsubscribe {}
		/* Pretty up the area which is seen before your images are downloaded
         apply these styles to your img tags with the right colors
         (note: you may have to apply these to td tags, need to confirm...)
    .img-bg { background-color: #666; }
    .img-txt { color: #fff; font-size: 12px; }
    */
		/* -----------------------------------------------------------
    Mobile Specific Styles
    Target portrait mode: max-device-width: 480px
    Target landscape mode: max-device-width: 720px
    Make sure the @media queries don't get stripped from the head
    when you inline your css.  Many inlining programs will strip it out.
    I think you are safe if you use Campaign Monitor but need to test that.
    Also, currently Yahoo doesn't ignore @media queries unless you target
    the styles via attribute selectors such as the class .table on
    the table element: table[class=table]
    apply class="mobile-friendly" to all tables that only have a col-pw-12 clas on the <td> tag.
    ----------------------------------------------------------- */
		@media only screen and (max-width: 600px) {
			td[class="background-container"] {
				padding: 0 10px !important;
			}
			table[id="template-container"],
			table[class="mobile-friendly"] {
				width: 320px !important;
			}
			td[class="col-pw-1"],
			td[class="col-pw-2"],
			td[class="col-pw-3"],
			td[class="col-pw-4"],
			td[class="col-pw-5"],
			td[class="col-pw-6"],
			td[class="col-pw-7"],
			td[class="col-pw-8"],
			td[class="col-pw-9"],
			td[class="col-pw-10"],
			td[class="col-pw-11"],
			td[class="col-pw-12"],
			td[class="col-pw-1"] img,
			td[class="col-pw-2"] img,
			td[class="col-pw-3"] img,
			td[class="col-pw-4"] img,
			td[class="col-pw-5"] img,
			td[class="col-pw-6"] img,
			td[class="col-pw-7"] img,
			td[class="col-pw-8"] img,
			td[class="col-pw-9"] img,
			td[class="col-pw-10"] img,
			td[class="col-pw-11"] img,
			td[class="col-pw-12"] img,
			td[class="full-width"] {
				width: 300px !important;
			}
			img[class="showcase"] {
				width: 320px !important;
			}
		}
	</style>

</head>

<body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" offset="0">
  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" id="background-container">
    <tr>
      <td valign="top" class="">
        <table class="" width="600" align="center" border="0" cellspacing="0" cellpadding="0" id="template-container">
          <tr>
            <td valign="top" class=" ">
              <table class="row" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td valign="top" class="row ">
                    <table align="left" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top" class="col-pw-6">
                          <h1><?= $subject;?></h1>
                        </td>
                      </tr>
                      <tr>
                      	<td>
                      		Seat Number: <?= $seat_number;?>
                      	</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            </td>
          </tr>
        </table>
</body>

</html>