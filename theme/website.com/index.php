<div id='howto-steps'>
	<table cellspacing=0 cellpadding=0 width='100%'><tr valign='top'>
		<td>
			<div class='steps first'>
				<img class='step1-img' src='<?=x::url()?>/theme/website.com/img/step1.png'/>
				<div class='description'>
					<div class='title'>필고 홈페이지</div>
					<div class='instruction'>(모바일) 홈페이지, 스마트폰 앱,<br />바이럴 마케팅 프로그램<br />무료 제공</div>
				</div>
			</div>
		</td>
		<td>
			<div class='steps second'>
				<img class='step2-img' src='<?=x::url()?>/theme/website.com/img/step2.png'/>
				<div class='description'>
					<div class='title'>사이트 만들기 예제</div>
					<div class='instruction'>여행사 만들기<br />커뮤니티 사이트 만들기<br />블로그 만들기</div>
				</div>
			</div>
		</td>
		<td>
			<div class='steps third'>
				<img class='step3-img' src='<?=x::url()?>/theme/website.com/img/step3.png'/>
				<div class='description'>
					<div class='title'>도와주세요</div>
					<div class='instruction'>사이트 만들기가 어려우면<br />여기를 클릭!</div>
				</div>
			</div>
		</td>
	</tr></table>
</div>

<div id='create-your-site'>
	<a href='<?=x::url()?>/?module=multisite&action=create'>사이트 만들기 클릭!</a>
</div>

<div id='banner-wrapper'>
	<div class='title'>나만의 무료 홈페이지!</div>
	
	<ul>
		<li><img src='<?=x::url()?>/theme/website.com/img/bullet.png'/>아주 손 쉬운 나만의 홈페이지 제작</li>
		<li><img src='<?=x::url()?>/theme/website.com/img/bullet.png'/>모바일에 최적화된 홈페이지</li>
		<li><img src='<?=x::url()?>/theme/website.com/img/bullet.png'/>인터넷 홍보 기능 제공</li>
		<li><img src='<?=x::url()?>/theme/website.com/img/bullet.png'/>홈페이지 디자인, 안드로이드 스마트폰 앱 제작( 필리핀 관련 좋은 자료 올리는 홈페이지 총 30 개 선정 )</li>
		<li><img src='<?=x::url()?>/theme/website.com/img/bullet.png'/>유료 옵션: 필고 배너 광고, 방문자 수가 급증하는 경우 유료 웹 호스팅, 독립도메인(서버에 독립 도메인 등록)</li>
	</ul>
</div>

<table class='bottom-content' cellpadding=0 cellspacing=0 width='100%' border=0>
	<tr valign='top'>
		<td width='33.3%'><? include x::theme('newest.site.list')?></td>
		<td width='33.4%'><? include x::theme('multisite.latest.posts')?></td>
		<td width='33.3%'>
			<div><?=latest('x-latest-withcenter-blue','qna', 15, 21, $cache_time=1, x::url_theme().'/img/bag-blue.png')?></div>
			<div><?=latest('x-latest-withcenter-blue','help', 15, 21, $cache_time=1, x::url_theme().'/img/bag-blue.png')?></div>
		</td>
	</tr>
</table>
