<style>
.title {
	font-family: 'Nanum Square';
	font-size:34px;
	line-height: 1.18;
	letter-spacing: -0.7px;
	font-weight: 100;
}

.white {
	color: white;
}

.description {
	font-family: 'Nanum Barun Gothic';
	font-size: 16px;
	line-height: 1.75;
	margin-top:31px;
}

.gray, .grey {
	color: #868686;
}

#privateContactMask {
  position:absolute;
  right:0px;
  height:100%;
  top:0;
  width:800px;
  background-color:black;
  overflow-y: auto;
}

#privateContactMask .contents {
	margin:100px;
}

@media screen and (min-width: 800px) {
	#privateContactMask {
		width:800px;
	}
}

@media screen and (max-width: 799px) {
	#privateContactMask {
		width:100%;
	}

	#privateContactMask .contents {
		margin:35px;
	}
}

.label-black {
  background-color: #222222;
  color:white;
  font-family: 'Nanum Square';
  font-weight: 100;
  font-size:18px;
  letter-spacing: -0.4px;
  width:103px;
  height: 52px;
  padding: 17px;
  line-height: 0.9;
  margin:0;
}

#privateContactMask input {
	background-color: #222222;
	color:white;
	font-family: 'Nanum Barun Gothic';
	font-weight: 100;
	font-size:16px;
	padding: 17px;
	height: 52px;
    border: none;
}

#privateContactMask .col-sm-6 {
	padding: 0;
}

#privateContactMask .row {
    margin: initial;
}

.typeOfContact {
	font-family: 'Nanum Barun Gothic';
	font-size:22px;
	color: rgba(255, 255, 255, 0.2);
	height: 38px;
}

.typeOfContact div {
	padding: 8px;
	display: inline-block;
	margin-right: 21px;
}

.typeOfContact .active {
	font-family: 'Nanum Barun Gothic';
	font-size:22px;
	color:white;
	border-bottom:2px solid white;
}

</style>

<aside id="privateContactMask">
	<div class="contents">

		<div>
			<button id="closePrivateContactMask">X</button>
		</div>

		<div style="text-align:left;">
			<h1 class="title white">고객의 궁금증을 1:1로 상담해 드립니다.</h1>
			<p class="description gray">소람에 대한 모든 궁금한 사항을 빠르게 답변하여<br/>편리한 병원 이용이 되도록 노력하겠습니다.</p>
		</div>

		<div class="typeOfContact">
			<div class="row">
				<div class="active">
					게시판 상담
				</div>
				<div>
					전화 상담
				</div>
			</div>
		</div>

		<div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="label-black">이름</label> <input type="text" placeholder="이름을 써주세요"/>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="label-black">비밀번호</label> <input type="password"/>
				</div>
			</div>

			<div class="row">
				<div>
					<label class="label-black">연락처</label> <input type="text" placeholder="010"/>
				</div>
			</div>

			<div class="row">
				<div>
					<label class="label-black">상담분야</label>

					<select>
						<option value="분야1" selected>분야1</option>
						<option value="분야2">분야2</option>
						<option value="분야3">분야3</option>
						<option value="분야4">분야4</option>
					</select>
				</div>
			</div>


			<div class="row">
				<div>
					<label class="label-black">상담내용</label>

					<textarea></textarea>
				</div>
			</div>


			<div class="row">
				<div>
					<label class="label-black">상담내용</label>

					<textarea></textarea>
				</div>
			</div>

			<div class="row">
				<div>
					<input type="checkbox"> <span style="text-decoration: underline;">개인정보보호정책</span>에 동의합니다.
				</div>
			</div>

			<div class="row">
				<button>상담 접수</button>
			</div>
		</div>
	</div>
</aside>