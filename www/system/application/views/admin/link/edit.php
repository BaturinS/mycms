<?=form_open('admin/links/edit/'.$link_id);?>

<table border="0" width="600" align="left" cellspacing="4">

<tr>
    <td align="right"><b>ID ��� ������:</b></td>
    <td align="left"><?=$link_id?></td>
</tr>
<tr>
    <td align="right"><b>�������� ��� ������: </b></td>
    <td align="left"><input type="text" name="descr" value="<?=set_value('descr', $descr)?>" /></td>
</tr>
<tr>
    <td align="right"><b>URL ������:</b></td>
    <td align="left"><input type="text" name="url" value="<?=set_value('url', $url)?>" /></td>
</tr>
<tr>
    <td align="right">&nbsp;</td>
    <td align="left"><input type="submit" value="��������� ���������" /></td>
</tr>

</table>

</form>