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
  cursor:initial;
  position:absolute;
  right:0px;
  height:100%;
  top:0;
  width:802px;
  background-color:black;
  overflow-y: auto;
  z-index: -1;
}

#privateContactMask .contents {
	margin:100px;
}

@media screen and (min-width: 802px) {
	#privateContactMask {
		width:802px;
	}
}

@media screen and (max-width: 801px) {
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
	padding: 10px;
	height: 52px;
    border: none;
}

#privateContactMask .col-xs-12 {
	padding: 0;
}

#privateContactMask .row {
    margin: initial;
    margin-bottom:9px;
}

#privateContactMask .row>div {
	background-color: #222222;
}

.typeOfContact {
	font-family: 'Nanum Barun Gothic';
	font-size:22px;
	color: rgba(255, 255, 255, 0.2);
	background-color: transparent;
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

#closePrivateContactMask {
  background-color: transparent;
  color: white;
  border: none;
}

#account-input>div {
	width:296px;
}

</style>

<aside id="privateContactMask">
	<div class="contents">

		<div style="text-align: right; margin-top: -50px;">
			<button id="closePrivateContactMask">X</button>
		</div>

		<div style="text-align:left;">
			<h1 class="title white">고객의 궁금증을 1:1로 상담해 드립니다.</h1>
			<p class="description gray">소람에 대한 모든 궁금한 사항을 빠르게 답변하여<br/>편리한 병원 이용이 되도록 노력하겠습니다.</p>
		</div>

		<div class="typeOfContact">
			<div class="row">
				<div class="active" style="background-color:transparent;">
					게시판 상담
				</div>
				<div style="background-color:transparent;">
					전화 상담
				</div>
			</div>
		</div>

		<div class="inputfield">
			<div class="row" id="account-input">
				<div class="col-xs-12" style="margin-right: 10px;">
					<label class="label-black">이름</label> <input type="text" placeholder="이름을 써주세요"/>
				</div>
				<div class="col-xs-12">
					<label class="label-black">비밀번호</label> <input type="password"/>
				</div>
			</div>

			<div class="row">
				<div>
					<label class="label-black">연락처</label> <input style="width:495px;" type="text" placeholder="010"/>
				</div>
			</div>

			<div class="row">
				<div>
					<label class="label-black">상담분야</label>

					<!-- <select>
						<option value="분야1" selected>분야1</option>
						<option value="분야2">분야2</option>
						<option value="분야3">분야3</option>
						<option value="분야4">분야4</option>
					</select> -->

					<!-- Single button -->
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Action <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>

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