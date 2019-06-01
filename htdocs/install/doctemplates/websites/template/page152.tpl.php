<?php // BEGIN PHP
$websitekey=basename(dirname(__FILE__)); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once './master.inc.php'; } // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>Our company is now on Dolibarr ERP CRM</title>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<meta name="title" content="Our company is now on Dolibarr ERP CRM" />
<meta name="description" content="Our company has moved on Dolibarr ERP CRM. This is an important step in improving all of our services." />
<meta name="generator" content="Dolibarr 9.0.0-beta (https://www.dolibarr.org)" />
<link href="/blog-our-company-is-now-on-dolibarr.php" rel="canonical" />
<!-- Include link to CSS file -->
<link rel="stylesheet" href="styles.css.php?website=<?php echo $websitekey; ?>" type="text/css" />
<!-- Include HTML header from common file -->
<?php print preg_replace('/<\/?html>/ims', '', file_get_contents(DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html")); ?>
<!-- Include HTML header from page header block -->

</head>
<!-- File generated by Dolibarr website module editor -->
<body id="bodywebsite" class="bodywebsite">
<?php includeContainer('header'); ?>

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/template/background_sunset.jpg'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s" style="font-size: 2em"><?php echo $websitepage->title; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

        <div class="container" contenteditable="true">
            <br><br><br>
            Like several thousands of companies, our company (<?php echo $mysoc->name ?>) has moved all its information system to <a href="https://www.dolibarr.org">Dolibarr ERP CRM</a>. More than 20 applications have been replaced by only one, easier to use and fully integrated.
            This is an important step in improving all of our services.
            
            <br><br><br>
            
            <figure>
            <img src="/viewimage.php?modulepart=medias&file=background_dolibarr.jpg">
            <br><br>
            <figcaption style="opacity: 0.5; text-align: center;">Screenshot of our new Open Source solution</figcaption>
            </figure>
            
            
            
            <br><br><br><br><br><br>
        </div>


<?php includeContainer('footer'); ?>


<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>

<script src="/document.php?modulepart=medias&file=js/template/script.js"></script>


</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp);
// END PHP ?>
