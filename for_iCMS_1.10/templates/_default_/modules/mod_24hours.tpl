{* Модуль за последние сутки на сайте *}

{* таблица стилей *}
{literal}
<style>
.mod_24hours{
	font-family: Trebuchet MS;
    font-size: 13px;
}
.border {
    border-bottom: 1px solid #D1D1D1;
}
.td_el_left {
    color: #666666;
    padding-bottom: 8px;
    padding-left: 16px;
    padding-top: 8px;
    /*width: 155px;*/
}
.td_el_right {
    color: #666666;
    height: 16px;
    padding-bottom: 8px;
    padding-top: 8px;
    text-align: center;
    width: 59px;
}
.blueLink a:link {
    color: #037DD3;
    text-decoration: underline;
}
.blueLink a:visited {
    color: #037DD3;
    text-decoration: underline;
}
.blueLink a:active {
    color: #037DD3;
    text-decoration: underline;
}
.blueLink a:hover {
    color: #037DD3;
    text-decoration: none;
}
.new {
    background-image: url("../templates/_default_/images/new.gif");
    background-position: center center;
    background-repeat: no-repeat;
}
</style>
{/literal}
<div class="mod_24hours">
	<table width="270" cellspacing="0" cellpadding="0" style="margin-bottom: 20px;">
		<tr>
			<td style="background-color: #87b51e; padding-left: 16px; height: 26px; color: #ffffff;" colspan="3">За последние сутки на сайте:</td>
		</tr>
								
	{if $cfg.show_news}
		<tr>
			<td class="td_el_left border">Новостей:</td>
			<td class="blueLink border td_el_right"><a href="/news" class="showall">{if $col.news>0}+{$col.news}{else}0{/if}</a></td>
			<td width="21"></td>
		</tr>
	{/if}

	{if $cfg.show_photos}
		<tr>
			<td class="td_el_left border">Фотографий:</td>
			<td class="blueLink border td_el_right new"><a href="/photos" class="showall">{if $col.photos>0}+{$col.photos}{else}0{/if}</a></td>
			<td width="21"></td>
		</tr>
	{/if}

    {if $cfg.show_blogposts}
		<tr>
			<td class="td_el_left border">Записей в блогах:</td>
			<td class="blueLink border td_el_right"><a href="/blogs" class="showall">{if $col.blogposts>0}+{$col.blogposts}{else}0{/if}</a></td>
			<td width="21"></td>
		</tr>
	{/if}

    {if $cfg.show_clubspost}
		<tr>
			<td class="td_el_left border">Записей в клубах:</td>
			<td class="blueLink border td_el_right"><a href="/clubs" class="showall">{if $col.clubspost>0}+{$col.clubspost}{else}0{/if}</a></td>
			<td width="21"></td>
		</tr>
    {/if}

    {if $cfg.show_boardpost}
		<tr>
			<td class="td_el_left border">Объявлений:</td>
			<td class="blueLink border td_el_right"><a href="/board" class="showall">{if $col.boardpost>0}+{$col.boardpost}{else}0{/if}</a></td>
			<td width="21"></td>
		</tr>
    {/if}

    {if $cfg.show_users}
		<tr>
			<td class="td_el_left border">Новых регистраций:</td>
			<td class="blueLink border td_el_right"><a href="/users" class="showall">{if $col.users>0}+{$col.users}{else}0{/if}</a></td>
			<td width="21"></td>
		</tr>
    {/if}
    </table>
</div>