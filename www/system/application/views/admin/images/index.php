<br />

<?=anchor('admin/images/show_upload/', 'Загрузить новую картинку')?>

<br /><br />

<table align="left" width="600" border="0" cellspacing="4" style="padding-left: 40px;">
<? foreach($list as $one): ?>
    <tr>
        <td><?=anchor('/img/upload/'.$one, $one, 'target="_blank"')?></td>
        <?/*
        Шифруем имя файла через base64_encode(), для того, чтобы при
        передаче не произошло каких-либо замен символов.
        
        Поскольку в имени файла могут использоваться самые разные символы,
        некоторые из них, во время передачи, могут быть урезаны или преобразованы.
        
        Указанная функция закодирует любое имя в такую строку, где набор символов
        будет ограничен и среди них не будет таких, которые могут подвергнуться
        изменению.
        */?>
        <td><?=anchor('admin/images/del/'.base64_encode($one), 'Удалить')?></td>
    </tr>
<? endforeach; ?>
</table>

<br />