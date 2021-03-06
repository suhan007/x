<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<!-- 로그인 전 아웃로그인 시작 { -->
<link rel="stylesheet" href="<?php echo $outlogin_skin_url ?>/style.css">

<div class='login-box'>

	
	<div class='login-box-middle'>
		<form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
			<table cellspacing=5 width='190' height='70' >
				<tr valign='top'>
					<td>
						<input type="text" id="ol_id" name="mb_id" required  maxlength="20" placeholder='아이디'>
					</td>
					<td rowspan=2>
						<input type="image" id="ol_submit" src='<?=$outlogin_skin_url?>/signin_button.png' />
					</td>
				</tr>
				<tr>
					<td><input type="password" name="mb_password" id="ol_pw" required maxlength="20" placeholder='비밀번호'></td>
				</tr>
			</table>
			<table width='100%' cellspacing=5>
				<tr valign='top'>
					<td>
						<a href='<?=G5_URL?>/<?=G5_BBS_DIR?>/register.php'>회원가입</a>
					</td>
					<td rowspan=2>
						<img class='remember-me-check' src='<?=$outlogin_skin_url?>/unchecked.gif' />
						<input type="checkbox" style='display: none;' name="auto_login" value="1" id="auto_login">자동 로그인
					</td>
				</tr>
				<tr>
					<td>
						<a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost">아이디/비번 찾기</a>
					</td>
				</tr>
			</table>

		
			
		</form>
	</div>
</div>

<script>

$(function() {	
	$(".remember-me-check").click(function() {
		if ( $("#auto_login").is(":checked") ) {
			$(this).attr('src', '<?=$outlogin_skin_url?>/unchecked.gif');
			$("#auto_login").prop('checked', false);
		}
		else {
			$(this).attr('src', '<?=$outlogin_skin_url?>/checked.gif');
			$("#auto_login").prop('checked', true);
			 if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
		}
	});	
});

function fhead_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 전 아웃로그인 끝 -->
