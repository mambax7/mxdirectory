<{if $link.premium >= "1"  && $link.lvlopts.9 == "1"}>
<{if $link.premium =="1" && $link.lvlopts.10 == "1"}>
<table class="premium_header_box" style="width: 100%; background-color: <{$p1color}>;">
<{elseif $link.premium =="2" && $link.lvlopts.10 == "1"}>
<table class="premium_header_box" style="width: 100%; background-color: <{$p2color}>;">
<{elseif $link.premium =="3" && $link.lvlopts.10 == "1"}>
<table class="premium_header_box" style="width: 100%; background-color: <{$p3color}>;">
<{elseif $link.premium =="4" && $link.lvlopts.10 == "1"}>
<table class="premium_header_box" style="width: 100%; background-color: <{$p4color}>;">
<{elseif $link.premium =="5" && $link.lvlopts.10 == "1"}>
<table class="premium_header_box" style="width: 100%; background-color: <{$p5color}>;">
<{else}>
<table class="premium_header_box" style="width: 100%;">
  <{/if}>
  <tr>
    <td class="premium_description_panel"><{$link.adminlink}>
      <a href="<{$xoops_url}>/modules/<{$smartydir}>/singlelink.php?cid=<{$link.cid}>&amp;lid=<{$link.id}>" class="premium_title">
      <{$link.titletrim}>
	   <{if $isa=="1"}>
		  <span class="premium_catname">( 
		  <{$link.category}>
		  ) </span>
	  <{/if}>
	  </a>
<!--      <{if $link.coupons > 0}>
      <a href="savings.php?lid=<{$link.id}>"><img src="<{$xoops_url}>/modules/<{$smartydir}>/images/coupons.jpg" alt="<{$smarty.const._MD_MXDIR_SAVINGS}>" class="premium_logo"></a>
      <{/if}> -->
      <br>
    </td>
    <td class="premium_rating"><a href="<{$xoops_url}>/modules/<{$smartydir}>/ratelink.php?cid=<{$link.cid}>&amp;lid=<{$link.id}>">
      <{$lang_rating}>
      <{$link.rating}>
      (
      <{$link.votes}>
      )</a></td>
  </tr>
  <tr>
    <td class="premium_description_panel">
	<span class="premium_dropdowns">
        <{if $link.biznums}><{html_options name=biznums options=$link.biznums}><{/if}>
      </span><span class="premium_dropdowns">
      <{html_options name=bizhrs options=$link.bizhrs}>
      </span>
	</td>
    <td colspan="2" class="premium_hours"><{if $link.lvlopts.3 == "1" && $link.url != "http://" && $link.url != ""}>
      <a href='visit.php?cid=<{$link.cid}>&amp;lid=<{$link.id}>' target='_blank'><img src='images/link.gif' border='0' alt='<{$lang_visit}>'><span class="premium_url">
      <{$link.url}>
      </span></a><br>
    <{/if}></td>
  </tr>
</table>
<hr>
<{/if}>
