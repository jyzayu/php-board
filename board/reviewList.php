<?
    include "lib.php";

?>



<table width=800 border="1" >
    <tr>
        <th width=50 > No  </th> 
        <th> 제목   </th> 
        <th width=100> 작성자  </th> 
        <th width=90 > 작성일자   </th> 
    </tr>    

<?

    $query = "select * from review order by id desc "; 
    $result = mysqli_query($connect, $query); 

    while($data = mysqli_fetch_array($result)){
?>
    <tr>
        <td> <a href="view.php?idx=<?=$data[idx]?>"><?=$data[subject]?></a> </td>

<? } ?>

</table>


<a href="write.php">글쓰기</a> 
<div class="review_write_wrap">
		<form name="frm_review" id="frm_review" method="POST" action="board_Proc.php" data-gtm-form-interact-id="0">
		<input type="hidden" name="MODE" value="write">
		<input type="hidden" name="BD_CD" value="REVIEW">
		<input type="hidden" name="MTITLE">
		<input type="hidden" name="HR_CODE">
		<input type="hidden" name="MEM_NM" value="">
		<input type="hidden" name="MEM_PWD" value="">
		<input type="hidden" id="remoteip" name="remoteip" value="125.142.7.35">
		<div class="review_write">
			<h4><i class="fa fa-pencil"></i> 글쓰기</h4>
			<dl class="area_choice">
				<dt>지역 선택</dt>
				<dd>
					<select name="b_uid" id="b_uid" onchange="$('#ajax_sc').html('');ajax_obj_loader('../hotel/ajax_category.html?mode=mc_cmm&amp;b_uid='+this.value,'ajax_mc');">
												<option value="44">숙박</option>
											</select>
				</dd>
				
				<dd id="ajax_mc">
	<select name="m_uid" id="m_uid" onchange="ajax_obj_loader('../hotel/ajax_category.html?mode=sc_cmm&amp;b_uid=44&amp;m_uid='+this.value,'ajax_sc');" data-gtm-form-interact-field-id="0">
		<option value="">==2차카테고리==</option>
					<option value="186">가고시마현</option>
					<option value="191">고치현</option>
					<option value="199">교토부</option>
					<option value="184">구마모토현</option>
					<option value="215">군마현</option>
					<option value="210">기후현</option>
					<option value="209">나가노현</option>
					<option value="183">나가사키현</option>
					<option value="202">나라현</option>
					<option value="204">니가타현</option>
					<option value="205">도야마현</option>
					<option value="214">도치기현</option>
					<option value="188">도쿠시마현</option>
					<option value="218">동경(도쿄)</option>
					<option value="192">돗토리현</option>
					<option value="222">미야기현</option>
					<option value="185">미야자키현</option>
					<option value="197">미에현</option>
					<option value="181">북해도(홋카이도)</option>
					<option value="182">사가현</option>
					<option value="216">사이타마현</option>
					<option value="198">시가현</option>
					<option value="193">시마네현</option>
					<option value="211">시즈오카현</option>
					<option value="220">아오모리현</option>
					<option value="212">아이치현</option>
					<option value="223">아키타현</option>
					<option value="224">야마가타현</option>
					<option value="196">야마구치현</option>
					<option value="208">야마나시현</option>
					<option value="190">에히메현</option>
					<option value="200">오사카부</option>
					<option value="180">오이타현</option>
					<option value="194">오카야마현</option>
					<option value="187">오키나와현</option>
					<option value="203">와카야마현</option>
					<option value="213">이바라키현</option>
					<option value="206">이시카와현</option>
					<option value="221">이와테현</option>
					<option value="217">치바현</option>
					<option value="189">카가와현</option>
					<option value="219">카나가와현</option>
					<option value="201">효고현</option>
					<option value="225">후쿠시마현</option>
					<option value="226">후쿠오카현</option>
					<option value="207">후쿠이현</option>
					<option value="195">히로시마현</option>
			</select>

</dd><!-- 2차 카테고리 -->
				<dd id="ajax_sc">
	<select name="s_uid" id="s_uid" data-gtm-form-interact-field-id="4">
		<option value="">==3차카테고리==</option>
					<option value="466">가고시마/기리시마/이브스키/기타</option>
			</select>
	<script type="text/javascript">
		$(document).ready(function(){
			$( "select[name=s_uid]" ).change(function() {
				var b_uid = $("select[name=b_uid]").val();
				var m_uid = $("select[name=m_uid]").val();
				var s_uid = $(this).val();

				if(b_uid && m_uid && s_uid){
					ajax_obj_loader('../hotel/ajax_hotel_list_load.html?mode=hotel_cmm&b_uid='+b_uid+'&m_uid='+m_uid+'&s_uid='+s_uid,'ajax_hotel_nm');
				}
			});
		});
	</script>
</dd><!-- 3차 카테고리 -->

			</dl>
			<dl class="area_choice" style="margin-top: 3px;">
				<dt>호텔 선택</dt>
				<dd id="ajax_hotel_nm">	<select name="hotel_nm">
				<option value="YBZ0000252||가고시마 가조엔">가고시마 가조엔</option>
				<option value="20190114_0001||가고시마 공항 호텔">가고시마 공항 호텔</option>
				<option value="20190118_0001||가고시마 워싱턴 호텔 프라자">가고시마 워싱턴 호텔 프라자</option>
				<option value="20190327_0006||가고시마 프라자 호텔 덴몬칸">가고시마 프라자 호텔 덴몬칸</option>
				<option value="20160921_0002||가고시마도큐레이호텔">가고시마도큐레이호텔</option>
				<option value="20160920_0004||가고시마썬로얄호텔">가고시마썬로얄호텔</option>
				<option value="20190321_0003||그린리치호텔 가고시마 덴몬칸">그린리치호텔 가고시마 덴몬칸</option>
				<option value="20190306_0004||기리시마 미야마호텔	">기리시마 미야마호텔	</option>
				<option value="20190103_0001||기리시마 아마테라스">기리시마 아마테라스</option>
				<option value="20180709_0001||기리시마 유큐노야도 잇신">기리시마 유큐노야도 잇신</option>
				<option value="20190304_0003||기리시마 호텔 ">기리시마 호텔 </option>
				<option value="YBZ0000887||기리시마관광호텔">기리시마관광호텔</option>
				<option value="YBZ0000487||기리시마국제호텔">기리시마국제호텔</option>
				<option value="YBZ0000884||기리시마세이류소">기리시마세이류소</option>
				<option value="YBZ0000893||기리시마캐슬호텔">기리시마캐슬호텔</option>
				<option value="YBZ0000953||기리시마하나미즈키">기리시마하나미즈키</option>
				<option value="20240115_0001||긴쇼">긴쇼</option>
				<option value="20190306_0006||나카하라 벳소">나카하라 벳소</option>
				<option value="20190903_0002||라비스타 기리시마 힐즈(쿄리츠리조트)">라비스타 기리시마 힐즈(쿄리츠리조트)</option>
				<option value="20180307_0009||렘 가고시마">렘 가고시마</option>
				<option value="YBZ0000984||료코진산소">료코진산소</option>
				<option value="20190326_0003||리치몬드 호텔 가고시마 킨세이초">리치몬드 호텔 가고시마 킨세이초</option>
				<option value="20190416_0005||만텐	">만텐	</option>
				<option value="20190220_0001||묘켄 온천 네무 ">묘켄 온천 네무 </option>
				<option value="YBZ0000294||묘켄 이시하라소">묘켄 이시하라소</option>
				<option value="YBZ0000874||묘켄다나카회관">묘켄다나카회관</option>
				<option value="20240115_0005||벳테이 아마후루 오카">벳테이 아마후루 오카</option>
				<option value="20190306_0005||보쿠스이소">보쿠스이소</option>
				<option value="YBZ0000907||사쿠라사쿠라온천">사쿠라사쿠라온천</option>
				<option value="20181213_0001||산카라호텔 앤 스파 야쿠시마">산카라호텔 앤 스파 야쿠시마</option>
				<option value="20190326_0004||선데이즈인가고시마	">선데이즈인가고시마	</option>
				<option value="20190328_0002||솔라리아 니시테츠 호텔 가고시마 ">솔라리아 니시테츠 호텔 가고시마 </option>
				<option value="20170816_0001||시로야마호텔 가고시마(구:시로야마 관광호텔)">시로야마호텔 가고시마(구:시로야마 관광호텔)</option>
				<option value="20160923_0002||시사이드호텔야쿠시마">시사이드호텔야쿠시마</option>
				<option value="20190321_0008||실크 인 가고시마 ">실크 인 가고시마 </option>
				<option value="20190328_0001||아트호텔 (구: 베스트 웨스턴 렘브란트호텔)">아트호텔 (구: 베스트 웨스턴 렘브란트호텔)</option>
				<option value="20190328_0004||아파호텔 가고시마 고쿠부 ">아파호텔 가고시마 고쿠부 </option>
				<option value="20190327_0004||아파호텔 가고시마 덴몬칸 ">아파호텔 가고시마 덴몬칸 </option>
				<option value="20190327_0003||아파호텔 가고시마 추오에키마에">아파호텔 가고시마 추오에키마에</option>
				<option value="20190306_0001||안라쿠온천 슈미네">안라쿠온천 슈미네</option>
				<option value="YBZ0000973||야카쿠테이">야카쿠테이</option>
				<option value="20180125_0008||야쿠시마 그린 호텔 ">야쿠시마 그린 호텔 </option>
				<option value="20160923_0003||야쿠시마이와사키호텔">야쿠시마이와사키호텔</option>
				<option value="20190305_0002||오리하시료칸">오리하시료칸</option>
				<option value="20190305_0004||유모토안 키요히메">유모토안 키요히메</option>
				<option value="20190116_0001||이브스키 긴쇼">이브스키 긴쇼</option>
				<option value="20240115_0002||이브스키 로열호텔">이브스키 로열호텔</option>
				<option value="YBZ0000075||이브스키 백수관(하쿠스이칸)">이브스키 백수관(하쿠스이칸)</option>
				<option value="20190116_0002||이브스키 유리안(인기급상승)">이브스키 유리안(인기급상승)</option>
				<option value="20240115_0006||이브스키 코코로노야도">이브스키 코코로노야도</option>
				<option value="20240115_0003||이브스키 피닉스호텔">이브스키 피닉스호텔</option>
				<option value="20160921_0005||이브스키시사이드호텔">이브스키시사이드호텔</option>
				<option value="20160922_0005||이브스키코랄비치호텔">이브스키코랄비치호텔</option>
				<option value="20160920_0001||이브스키해상호텔">이브스키해상호텔</option>
				<option value="20240115_0004||이세에비소">이세에비소</option>
				<option value="20181228_0001||전객실 노천온천포함인  기리시마 유유안">전객실 노천온천포함인  기리시마 유유안</option>
				<option value="YBZ0000899||츠미쿠사노야도 코마츠">츠미쿠사노야도 코마츠</option>
				<option value="20190305_0003||코시카노온센">코시카노온센</option>
				<option value="20190905_0004||쿠스노키소">쿠스노키소</option>
				<option value="20170627_0001||큐카무라이브스키 ">큐카무라이브스키 </option>
				<option value="20190416_0006||타시로별관">타시로별관</option>
				<option value="YBZ0000611||타케치요벳테이">타케치요벳테이</option>
				<option value="YBZ0000930||텐쿠노모리">텐쿠노모리</option>
				<option value="20181023_0005||하나무라사키">하나무라사키</option>
				<option value="20190321_0006||호텔 게이트 인 가고시마">호텔 게이트 인 가고시마</option>
				<option value="20181102_0002||호텔 도미인 가고시마">호텔 도미인 가고시마</option>
				<option value="20190324_0001||호텔 렉스턴 가고시마 ">호텔 렉스턴 가고시마 </option>
				<option value="20190328_0003||호텔 마이스테이즈 가고시마 덴몬칸 (구 : 호텔 센트 코스모) ">호텔 마이스테이즈 가고시마 덴몬칸 (구 : 호텔 센트 코스모) </option>
				<option value="20190326_0005||호텔 마이스테이즈 가고시마 덴몬칸 아넥스	">호텔 마이스테이즈 가고시마 덴몬칸 아넥스	</option>
				<option value="20190326_0001||호텔 선플렉스 가고시마">호텔 선플렉스 가고시마</option>
				<option value="YBZ0000395||호텔 슈스이엔">호텔 슈스이엔</option>
				<option value="20190327_0002||호텔 어빅 가고시마 ">호텔 어빅 가고시마 </option>
				<option value="20190322_0007||호텔 웰뷰 가고시마">호텔 웰뷰 가고시마</option>
				<option value="20190327_0005||호텔 타이세이 아넥스 ">호텔 타이세이 아넥스 </option>
				<option value="YBZ0000977||호텔쿄세라">호텔쿄세라</option>
				<option value="20190326_0002||홋케클럽가고시마">홋케클럽가고시마</option>
				<option value="YBZ0000968||후타리시즈카">후타리시즈카</option>
			</select>
</dd>
			</dl>
			<dl class="star_in">
				<dt>별점 선택</dt>
				<dd><!-- 별점 -->
					<input type="hidden" name="RECOM" value="5">
					<div id="rating" data-score="5" style="cursor: pointer;"><img alt="1" src="../image/icon/raty/star-on.png" title="bad">&nbsp;<img alt="2" src="../image/icon/raty/star-on.png" title="poor">&nbsp;<img alt="3" src="../image/icon/raty/star-on.png" title="regular">&nbsp;<img alt="4" src="../image/icon/raty/star-on.png" title="good">&nbsp;<img alt="5" src="../image/icon/raty/star-on.png" title="gorgeous"><input name="score" type="hidden" value="5"></div>
				</dd>
			</dl>
			<div class="g-recaptcha mt5 mb5" data-sitekey="6LcEUaEUAAAAAHke1NR35DvuObKgx_NbwrWya5Py"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-w3kjyelo8yb0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcEUaEUAAAAAHke1NR35DvuObKgx_NbwrWya5Py&amp;co=aHR0cHM6Ly9yeW9rYW5jbHViLmNvbTo0NDM.&amp;hl=ko&amp;v=Xv-KF0LlBu_a0FJ9I5YSlX5m&amp;size=normal&amp;cb=dv331b8g4eq"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
			<div class="write_box">
				<div class="txtar_rv"><textarea name="MCONT" placeholder="욕설, 비방글은 삭제됩니다."></textarea></div>
				<div class="btn_rv_write"><a href="javascript:;" id="btn_review_submit">등록</a></div>
			</div>
		</div>
		</form>
	</div>





<ul>
    <?

    $query = "select * from review order by id desc "; 
    $result = mysqli_query($connect, $query); 

    while($data = mysqli_fetch_array($result)){
    ?>
    <li>
        <p> <?=$data[nickname]?> </p>
        <p> <?=substr($data[regdate],0,10)?> </p>
        <p> <?=$data[cotent]?> </p>
    <? } ?>
				<div class="memo_area">
					<div class="img"><a href="/hotel/hotel_view_rykan.html?hseq=252&amp;b_uid_s=44&amp;m_uid_s=186&amp;s_uid_s=466" target="_BLANK"><img src="/FileData/hotel/YBZ0000252_1375766162.jpg" width="160" height="110"></a></div>
					<div class="con">
						<p class="nickname">
						Gue*****						</p>
						<p class="star_num"><img src="../images/board/star_5.jpg" alt=""></p>
						<p class="date">[2024-07-26 15:37:15]</p>
						<p class="hotel">
							<span class="area">가고시마현&gt;가고시마/기리시마/이브스키/기타&gt;</span>
							<a href="/hotel/hotel_view_rykan.html?hseq=252&amp;b_uid_s=44&amp;m_uid_s=186&amp;s_uid_s=466" target="_BLANK">가고시마 가조엔</a>
						</p>						
					</div>
					<div class="memo_content">굿</div>
					
					
				</div>
					
			</li>
</ul>