<table width="888" border="0" align="center" cellpadding="0" cellspacing="0" class="c_search">
  <tr>
    <td width="276" class="c_search_l"><{$smarty.const._MD_MXDIR_DIRHEADER}></td>
    <td class="c_search_table">
	<{if $usesearch != "0"}>
            <!--Search Table-->
			<form name='search' id='search' action='<{$xoops_url}>/search.php' method='post' onsubmit='return xoopsFormValidate_search();'>
              <input type='hidden' name='mids[]' value='<{$xmid}>'>
                <input name='query' type='text' class="c_search_input" id='query' value='' size='20' maxlength='255'>
                    <select name='andor'  size='1' class="c_search_select" id='andor'>
                    <option value='AND' selected='selected'><{$smarty.const._MD_MXDIR_ALLWORDS}></option>
                    <option value='OR'><{$smarty.const._MD_MXDIR_ANYWORDS}></option>
                    <option value='exact'><{$smarty.const._MD_MXDIR_EXACTMATCH}></option>
                </select>
                    <input type='submit' class='c_searchbutton' name='submit'  id='submit' value='<{$smarty.const._MD_MXDIR_SEARCH}>'>
              <input type='hidden' name='action' id='action' value='results'>
            </form>

      <{/if}>
	  </td>
    <td width="228" class="c_search_r"><div><a href="<{$xoops_url}>/modules/<{$smartydir}>/savings.php?cid=<{$category_id}>"><{$smarty.const._MD_MXDIR_SAVINGS}></a></div>
    <div><a href="<{$xoops_url}>/modules/<{$smartydir}>/submit.php"><{$smarty.const._MD_MXDIR_SUBMITLINK}></a></div></td>
  </tr>
  <{if $usealpha != "0"}>
  <tr align="center">
    <td colspan="3" class="c_select_letters"><{$smarty.const._MD_MXDIR_SEARCHFOR}>:&nbsp;<{$letters}>
	</td>
  </tr>
  <{/if }>
</table>  
<hr>
<div>
  <table width="97%" cellspacing="2" cellpadding="2" border="0" >
    <tr>
      <td class="c_path"><{$category_path}></td>
    </tr>
  </table>
</div>

<br>
<table width="100%" cellspacing="0" cellpadding="10" border="0">
  <tr>
    <td style="text-align: center;">
      <{include file="db:xdir_listingfull.tpl" link=$link}>
    </td>
  </tr>
</table>
<div class="c_desc">
  <div align="center"><{$commentsnav}>
    <{$lang_notice}></div>
</div>
<br><br>
<div class="c_comments_footer">
  <!-- start comments loop -->
  <{if $comment_mode == "flat"}>
    <{include file="db:system_comments_flat.tpl"}>
  <{elseif $comment_mode == "thread"}>
    <{include file="db:system_comments_thread.tpl"}>
  <{elseif $comment_mode == "nest"}>
    <{include file="db:system_comments_nest.tpl"}>
  <{/if}>
  <!-- end comments loop -->
</div>
<br><br>
<hr>
<{include file="db:system_notification_select.tpl"}>
