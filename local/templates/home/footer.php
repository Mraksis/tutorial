<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
?>

    <footer class="site-footer">

      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
            
              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/footer_about.php"
	              )
              );?>

            </div>



          </div>
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4"><?= Loc::getMessage('NAVIGATIONS')?></h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#"><?= Loc::getMessage('HOME_ID')?></a></li>
                  <li><a href="#"><?= Loc::getMessage('BUY')?></a></li>
                  <li><a href="#"><?= Loc::getMessage('RENT')?></a></li> 
                  <li><a href="#"><?= Loc::getMessage('PROPERTIES')?></a></li>
                </ul>
              </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#"><?= Loc::getMessage('ABOUT_US')?></a></li>
                <li><a href="#"><?= Loc::getMessage('PRIVACY_POLICY')?></a></li>
                <li><a href="#"><?= Loc::getMessage('CONTACT_US')?></a></li>
                <li><a href="#"><?= Loc::getMessage('TERMS')?></a></li>
              </ul>
            </div>
          </div>


        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          

          <?$APPLICATION->IncludeComponent(
	        "bitrix:main.include",
	        "",
	        Array(
		      "AREA_FILE_SHOW" => "file",
		      "AREA_FILE_SUFFIX" => "inc",
		      "EDIT_TEMPLATE" => "",
		      "PATH" => "/include/socials_footer.php"
	        )
          );?>



        </div>

      
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/copyright.php"
	)
);?>
            </div>
          </div>
      
      </div>
    </footer>

  </div>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/ry.magnific-popup.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");?>
      
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");?>
  
</body>

</html>