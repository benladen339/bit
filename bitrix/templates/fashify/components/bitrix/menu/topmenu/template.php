<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="menu-main-menu-container"><ul id="primary-menu" class="menu">
<? /*
<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8"><a href="https://wpstash.com/fashify/">Home</a></li>
<li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="https://wpstash.com/fashify/about/">About</a></li>
<li id="menu-item-40" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-40"><a href="https://wpstash.com/fashify/category/design/">Design</a></li>
<li id="menu-item-41" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-41"><a href="https://wpstash.com/fashify/category/fashion/">Fashion</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-44"><a href="https://wpstash.com/fashify/category/photo/">Photos</a></li>
<li id="menu-item-45" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-45"><a href="https://wpstash.com/fashify/category/video/">Videos</a></li>
<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="https://wpstash.com/fashify/contact/">Contact</a></li>
*/?>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>" class="menu-item menu-item-type-post_type menu-item-object-page"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul></div>
<?endif?>