<style type="text/css" media="screen">@import url(<{$xoops_url}>/modules/<{$smartydir}>/images/mxdirectory.css);</style>
<p align="center">
<!--    <a href="<{$xoops_url}>/modules/directory/index.php"><img src="<{$xoops_url}>/modules/directory/images/logo.gif" border="0" alt=""></a> -->

<span class="c_header"><strong><{$smarty.const._MD_MXDIR_DIRHEADER}></strong></span></p>

<hr size=1 noshade>
<table border=0 cellpadding=1 cellspacing=0 width="80%">
  <tr>
    <td>
      <h4 class="c_title"><{$link.title}></h4>
      <p><span class="ratelink_body"><{$lang_voteonce}>
        </span>
      </p>
      <p><span class="ratelink_body"><{$lang_ratingscale}>
        </span>
      </p>
      <p><span class="ratelink_body"><{$lang_beobjective}>
        </span>
      </p>
      <p><span class="ratelink_body"><{$lang_donotvote}>
        </span>
      </p></td>
  </tr>
  <tr>
    <td align="center">
      <form method="post" action="ratelink.php">
          <{securityToken}><{*//mb*}>
        <input type="hidden" name="lid" value="<{$link.id}>">
        <input type="hidden" name="cid" value="<{$link.cid}>">
        <select name="rating" class="c_select">
<!--     	    <option>--</option> -->
     	    <{section name=opt loop=11 max=10 step=-1}>
            <option><{$smarty.section.opt.index}></option>
          <{/section}>
        </select>
        <span class="ratelink_buttons">
        <input name="submit" type="submit" class="c_formbuttons" value="<{$lang_rateit}>">
        <input type=button class="c_formbuttons" onclick="location='<{$xoops_url}>/modules/<{$smartydir}>/singlelink.php?cid=<{$link.cid}>&lid=<{$link.id}>'" value="<{$lang_cancel}>">
        </span>
      </form>
    </td>
  </tr>
</table>

