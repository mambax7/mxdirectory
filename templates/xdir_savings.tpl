<table class="coupon_box">
    <{foreach item=category from=$categories}>
        <tr>
            
    <th colspan="2"> <div align="center"><a href="<{$xoops_url}>/modules/<{$smartydir}>/savings.php?cid=<{$category.cid}>" class="c_header"><{$category.catTitle}></a> 
      </div></th>
        </tr>
        <{foreach item=coupon from=$category.coupons}>
            <tr class='<{cycle values=odd,even}>'>
                <td>
                    <div><{if $coupon.logourl}> <img src="<{$xoops_url}>/modules/<{$smartydir}>/images/shots/<{$coupon.logourl}>" alt="<{$coupon.linkTitle}> <{$smarty.const._MD_MXDIR_LOGO}>" border="0">
        <{/if}>&nbsp;&nbsp; 
        <div> <{if $admin}> <a href="<{$xoops_url}>/modules/<{$smartydir}>/addcoupon.php?couponid=<{$coupon.couponid}>"><img src="<{xoModuleIcons16 edit.png}>" alt="<{$smarty.const._MD_MXDIR_EDITCOUPON}>"></a>
          <{/if}> <a href="<{$xoops_url}>/modules/<{$smartydir}>/singlelink.php?lid=<{$coupon.lid}>" class="c_title"><{$coupon.linkTitle}></a><br>
          <span class="c_body"><{$coupon.address}><br>
<{if $coupon.address2}> <{$coupon.address2}><br>
<{/if}> <{$coupon.zip}> <{$coupon.state}> <{$coupon.country}></span><br>
          <br>
          <span class="coupon_dates"><{$smarty.const._MD_MXDIR_PUBLISHEDON}><{$coupon.publish}> <{if $coupon.expire
          > 0}> <br>
<{$smarty.const._MD_MXDIR_EXPIRESON}><{$coupon.expire}><{/if}></span></div>
      </div>
              </td>
                
    <td> <span class="c_title"><{$coupon.heading}></span><a href="javascript:openWithSelfMain('<{$xoops_url}>/modules/<{$smartydir}>/printcoupon.php?coupid=<{$coupon.couponid}>', 'print', 640, 380);">&nbsp;&nbsp;<img src="<{$xoops_url}>/modules/<{$smartydir}>/images/print.png" alt="<{$smarty.const._MD_MXDIR_PRINTERFRIENDLY}>"></a>
      <br>
      <br>
              <span class="coupon_description"><{$coupon.description}>              </span></td>
            </tr>
            <{if $admin}>
                <tr>
                    <td colspan="2" class="foot">
                        <a href="<{$xoops_url}>/modules/<{$smartydir}>/addcoupon.php?couponid=<{$coupon.couponid}>" class="coupon_counter"><{$smarty.const._MD_MXDIR_EDITCOUPON}> (<{$coupon.counter}>)</a>
                    </td>
                </tr>
            <{/if}>
        <{/foreach}>
    <{foreachelse}>
        <tr class="coupon_footer">
            <td colspan="2" class="c_header">
                <{$smarty.const._MD_MXDIR_NOSAVINGS}>
            </td>
  </tr>
    <{/foreach}>
</table>
