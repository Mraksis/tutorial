<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.feedback",
					"feedback",
					Array(
					"EMAIL_TO" => "denic-chumakov@mail.ru",
					"EVENT_MESSAGE_ID" => array(),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(),
					"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>
		</div>	
				<div class="col-lg-4">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/contact_form.php"
						)
					);?>
				</div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>