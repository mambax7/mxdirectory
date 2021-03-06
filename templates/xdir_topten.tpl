<style type="text/css" media="screen">@import url(<{$xoops_url}>/modules/<{$smartydir}>/images/mxdirectory.css);</style>
<div class="c_header" style="margin-top: 2px;text-align: center;font-size: 20px;font-weight: bold;"><{$smarty.const._MD_MXDIR_DIRHEADER}></div>
<br><br><br>
<!-- Start ranking loop -->
<{foreach item=ranking from=$rankings}>
<table class="outer">
  <tr>
    <th colspan="6"><span class="c_title"><{$ranking.title}></span> <span class="c_desc">(<{$lang_sortby}>)</span></th>
  </tr>
  <tr class="c_body">
    <td class="head" width='7%'><{$lang_rank}></td>
    <td class="head" width='28%'><{$lang_title}></td>
    <td class="head" width='40%'><{$lang_category}></td>
    <td class="head" width='8%' align='center'><{$lang_hits}></td>
    <td class="head" width='9%' align='center'><{$lang_rating}></td>
    <td class="head" width='8%' align='right'><{$lang_vote}></td>
  </tr>

  <!-- Start links loop -->
  <{foreach item=link from=$ranking.links}>

  <tr class="c_body">
    <td class="even"><{$link.rank}></td>
    <td class="odd"><a href='singlelink.php?cid=<{$link.cid}>&lid=<{$link.id}>'><{$link.title}></a></td>
    <td class="even"><{$link.category}></td>
    <td class="odd" align='center'><{$link.hits}></td>
    <td class="even" align='center'><{$link.rating}></td>
    <td class="odd" align='right'><{$link.votes}></td>
  </tr>

  <{/foreach}>
  <!-- End links loop-->

</table>
<br>
<{/foreach}>
<!-- End ranking loop -->
