<?php // BEGIN PHP
$websitekey=basename(dirname(__FILE__)); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once './master.inc.php'; } // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="blog" />
<meta name="title" content="Blog" />
<meta name="description" content="Blog" />
<meta name="generator" content="Dolibarr 10.0.0-alpha (https://www.dolibarr.org)" />
<link href="/blog.php" rel="canonical" />
<!-- Include link to CSS file -->
<link rel="stylesheet" href="styles.css.php?website=<?php echo $websitekey; ?>" type="text/css" />
<!-- Include HTML header from common file -->
<?php print preg_replace('/<\/?html>/ims', '', file_get_contents(DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html")); ?>
<!-- Include HTML header from page header block -->

</head>
<!-- File generated by Dolibarr website module editor -->
<body id="bodywebsite" class="bodywebsite">
<div class="page">

    <?php includeContainer('header'); ?>

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/template/background_sunset.jpg'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s">The latest news...</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>


        <section id="sectionnews" contenteditable="true" class="section-50 section-md-50 section-md-bottom-50">
            <div><br><div class="text-align: center">
            <!--<h2>The latest news...</h2><br><br><br> -->
            <?php 
            $weblangs->load("main");
            $websitepage = new WebsitePage($db);
            $fuser = new User($db);
            $arrayofblogs = $websitepage->fetchAll($website->id, 'DESC', 'date_creation', 5, 0, array('type_container'=>'blogpost'));
            foreach($arrayofblogs as $blog)
            {
                print '<div class="row justify-content-sm-center row-40">';
                print '<div class="container blog-box d-xl-inline-block margin-lr-30" style="padding: 20px; box-shadow: -1px 0px 10px 0px rgba(65, 65, 65, 0.12); transition: .3s all ease;">';
                            print '<a href="'.$blog->pageurl.'.php">';
                            print '<div class="post-boxed-img-wrap"><img src="'.($blog->image ? 'viewimage.php?modulepart=medias&file='.$blog->image : 'medias/image/'.$website->ref.'/calendar.svg"').'" alt="" width="120"></div>';
                            print '<div class="post-boxed-caption">';
                            print '<div class="post-boxed-title font-weight-bold">'.$blog->title.'</div>';
                            print '<ul class="list-inline list-inline-dashed text-uppercase">';
                            print '<li>'.dol_print_date($blog->date_creation, 'daytext', 'tzserver', $weblangs).'</li>';
                            $fuser->fetch($blog->fk_user_creat);
                            print '<li><span>by<span> <span class="text-primary">'.$fuser->firstname.'</span></span></li>';
                            print '</ul>';
                            print '</div>';
                            //includeContainer($blog->pageurl);
                            print '<span class="nohover">'.$blog->description.'</span>';
                            print '</a>';
                print '</div>';
                print '</div>';
            }
            ?>
            </div></div>
        </section>

    <br><br>

    <?php includeContainer('footer'); ?>

</div>
    

<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>

<script src="/document.php?modulepart=medias&file=js/template/script.js"></script>

</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp);
// END PHP ?>
