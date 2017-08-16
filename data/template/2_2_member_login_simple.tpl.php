<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(CURMODULE != 'logging') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>logging.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="<?php if($_G['setting']['pwdsafety']) { ?>pwmd5('ls_password');<?php } ?>return lsSubmit();">
<div class="fastlg cl" >
<span id="return_ls" style="display:none"></span>
<div class="y pns" >
<table cellspacing="0" cellpadding="0">
<tr>


<td style="display:none"><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
<td><a onclick="showWindow('login', this.href);return false;" href="member.php?mod=logging&amp;action=login" rel="nofollow">登錄</a></td>
<td><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" ><?php echo $_G['setting']['reglinkname'];?></a></td>



</tr>
<tr>

</tr>
</table>
<input type="hidden" name="quickforward" value="yes" />
<input type="hidden" name="handlekey" value="ls" />
  </div>
<?php if(!empty($_G['setting']['pluginhooks']['global_login_extra'])) echo $_G['setting']['pluginhooks']['global_login_extra'];?>
</div>
</form>

<?php if($_G['setting']['pwdsafety']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>md5.js?<?php echo VERHASH;?>" type="text/javascript" reload="1"></script>
<?php } } ?>