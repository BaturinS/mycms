<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="KNARS" />

	<title>[Панель Администратора] - <?=$page_title?></title>
</head>

<body>
<h3>Хедер</h3>
<p><b>
<?=anchor('admin', 'Главная')?> 
| <?=anchor('admin/pages/index/list', 'Страницы')?> 
| <?=anchor('admin/links/index/list', 'Ссылки')?>
| <?=anchor('admin/images', 'Картинки')?>  
| <?=anchor('admin/settings', 'Настройки')?> 
| <?=anchor('admin/logout', 'Выход')?></b></p>
<h1><?=$page_title?></h1>