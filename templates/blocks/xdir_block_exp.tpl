<ul>
  <{foreach item=link from=$block}>
    <li><a href="<{$xoops_url}>/modules/<{$link.mydirname}>/savings.php?lid=<{$link.lid}>"><{$link.heading}></a>
    <span style="font-size: x-small;"> (<{$link.linkTitle}></span>)
    </li>
  <{/foreach}>
</ul>

