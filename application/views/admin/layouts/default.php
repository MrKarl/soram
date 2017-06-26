<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>소람병원 관리자</title>

    <!-- Bootstrap Core CSS -->
    <link href="/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/public/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/public/admin/dist/css/timeline.css" rel="stylesheet">


    <!-- DataTables CSS -->
    <link href="/public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="/public/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/public/admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/public/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- jQuery -->
    <script src="/public/admin/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="/public/admin/js/jquery-ui.js"></script>
</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/admin">소람병원 관리자</a>
</div>

<!-- /.navbar-header -->
<ul class="nav navbar-top-links navbar-right">
    <!--<div class="navbar-text">확인 안된 상담글 3개</div>-->
<!--<li class="dropdown">-->
<!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>-->
<!--    </a>-->
<!--    -->
<!--    <ul class="dropdown-menu dropdown-messages">-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <strong>John Smith</strong>-->
<!--                                    <span class="pull-right text-muted">-->
<!--                                        <em>Yesterday</em>-->
<!--                                    </span>-->
<!--                </div>-->
<!--                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <strong>John Smith</strong>-->
<!--                                    <span class="pull-right text-muted">-->
<!--                                        <em>Yesterday</em>-->
<!--                                    </span>-->
<!--                </div>-->
<!--                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <strong>John Smith</strong>-->
<!--                                    <span class="pull-right text-muted">-->
<!--                                        <em>Yesterday</em>-->
<!--                                    </span>-->
<!--                </div>-->
<!--                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a class="text-center" href="#">-->
<!--                <strong>Read All Messages</strong>-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
    <!-- /.dropdown-messages -->
<!--</li>-->
<!-- /.dropdown -->
<!--<li class="dropdown">-->
<!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>-->
<!--    </a>-->
<!--    <ul class="dropdown-menu dropdown-tasks">-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <p>-->
<!--                        <strong>Task 1</strong>-->
<!--                        <span class="pull-right text-muted">40% Complete</span>-->
<!--                    </p>-->
<!--                    <div class="progress progress-striped active">-->
<!--                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">-->
<!--                            <span class="sr-only">40% Complete (success)</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <p>-->
<!--                        <strong>Task 2</strong>-->
<!--                        <span class="pull-right text-muted">20% Complete</span>-->
<!--                    </p>-->
<!--                    <div class="progress progress-striped active">-->
<!--                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">-->
<!--                            <span class="sr-only">20% Complete</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <p>-->
<!--                        <strong>Task 3</strong>-->
<!--                        <span class="pull-right text-muted">60% Complete</span>-->
<!--                    </p>-->
<!--                    <div class="progress progress-striped active">-->
<!--                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">-->
<!--                            <span class="sr-only">60% Complete (warning)</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <p>-->
<!--                        <strong>Task 4</strong>-->
<!--                        <span class="pull-right text-muted">80% Complete</span>-->
<!--                    </p>-->
<!--                    <div class="progress progress-striped active">-->
<!--                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">-->
<!--                            <span class="sr-only">80% Complete (danger)</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a class="text-center" href="#">-->
<!--                <strong>See All Tasks</strong>-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <!-- /.dropdown-tasks -->
<!--</li>-->
<!--<!-- /.dropdown -->
<!--<li class="dropdown">-->
<!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>-->
<!--    </a>-->
<!--    <ul class="dropdown-menu dropdown-alerts">-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <i class="fa fa-comment fa-fw"></i> New Comment-->
<!--                    <span class="pull-right text-muted small">4 minutes ago</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers-->
<!--                    <span class="pull-right text-muted small">12 minutes ago</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <i class="fa fa-envelope fa-fw"></i> Message Sent-->
<!--                    <span class="pull-right text-muted small">4 minutes ago</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <i class="fa fa-tasks fa-fw"></i> New Task-->
<!--                    <span class="pull-right text-muted small">4 minutes ago</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div>-->
<!--                    <i class="fa fa-upload fa-fw"></i> Server Rebooted-->
<!--                    <span class="pull-right text-muted small">4 minutes ago</span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="divider"></li>-->
<!--        <li>-->
<!--            <a class="text-center" href="#">-->
<!--                <strong>See All Alerts</strong>-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <!-- /.dropdown-alerts -->
<!--</li>-->
<!-- /.dropdown -->
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li class="divider"></li>
        <li><a href="/admin/session/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="javascript:;"><i class="fa fa-envelope fa-fw"></i> 상담 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/consult">1:1 상담</a>
                    </li>
                    <li>
                        <a href="/admin/engqna">1:1 상담(영문)</a>
                    </li>
                    <li>
                        <a href="/admin/adm_answer">1:1 상담 답변 설정</a>
                    </li>
                    <li>
                        <a href="/admin/voice">고객의 소리</a>
                    </li>
                    <li>
                        <a href="/admin/voice_answer">고객의 소리 답변 설정</a>
                    </li>
                    <li>
                        <a href="/admin/consult?delete=Y">삭제된 1:1 상담</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-user fa-fw"></i> 회원 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/member">회원 관리</a>
                    </li>
                    <li>
                        <a href="/admin/member?delete=Y">탈퇴회원 관리</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-list fa-fw"></i> 게시판 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/notice">공지사항</a>
                    </li>
                    <li>
                        <a href="/admin/story">소람이야기</a>
                    </li>
                    <li>
                        <a href="/admin/soramfaq">소람 FAQ</a>
                    </li>
                    <li>
                        <a href="/admin/news1">방송보도</a>
                    </li>
                    <li>
                        <a href="/admin/news2">언론보도</a>
                    </li>
                    <li>
                        <a href="/admin/newsletter">면역책자 / 소식지</a>
                    </li>
                    <li>
                        <a href="/admin/book_apply">도서 신청</a>
                    </li>
                    <li>
                        <a href="/admin/hangam">항암식단</a>
                    </li>
                    <li>
                        <a href="/admin/cardnews">카드뉴스</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-cog fa-fw"></i> 메인 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/main_slide">메인 배너 관리</a>
                    </li>
                    <li>
                        <a href="/admin/tmmnt_slide">메인 호전사례 관리</a>
                    </li>
                    <li>
                        <a href="/admin/popup">팝업 관리</a>
                    </li>
                    <li>
                        <a href="/admin/main_popup">상담 팝업 관리</a>
                    </li>
                    <li>
                        <a href="/admin/medical_banner">의료진 배너 관리</a>
                    </li>
                    <li>
                        <a href="/admin/media_banner">방송보도 배너 관리</a>
                    </li>
                    <li>
                        <a href="/admin/apply_banner">오시는 길</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-cog fa-fw"></i> 논문 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/thesis">연구 논문</a>
                    </li>
                    <li>
                        <a href="/admin/thesis2">국제 / 국내 논문</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-users fa-fw"></i> 의료진 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/staff/director">병원장 관리</a>
                    </li>
                    <li>
                        <a href="/admin/staff/representative">대표 의료진 관리</a>
                    </li>
                    <li>
                        <a href="/admin/staff/index">전문 의료진 관리</a>
                    </li>
                    <li>
                        <a href="/admin/staff/sort">전문 의료진 순서 관리</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-list fa-fw"></i> 호전사례 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/treatment">호전사례</a>
                    </li>
                    <li>
                        <a href="/admin/example">호전사례 발표</a>
                    </li>
                    <!--<li>
                        <a href="/admin/">환우회</a>
                    </li>-->
                </ul>
            </li>
            <!--<li>
                <a href="javascript:;"><i class="fa fa-cogs fa-fw"></i> 관리자 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/manager">관리자 관리</a>
                    </li>
                    <<li>
                        <a href="/admin/code">코드 관리</a>
                    </li>
                </ul>
            </li>-->
            <li>
                <a href="javascript:;"><i class="fa fa-cog fa-fw"></i> 기타 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/nopay">비급여 관리</a>
                    </li>
                    <li>
                        <a href="/admin/staff/code">전문 의료진 구분 코드 관리</a>
                    </li>
                    <!--<li>
                        <a href="/admin/youtube">Youtube 관리</a>
                    </li>-->
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-bar-chart fa-fw"></i> 통계 관리<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a target="_blank" href="http://www.acecounter.com/www2/main.amz">에이스 카운터</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/admin/video"><i class="fa fa-file-movie-o fa-fw"></i> 영상 관리</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
{yield}

<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Bootstrap Core JavaScript -->
<script src="/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- DataTables JavaScript -->
<script src="/public/admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/public/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/public/admin/bower_components/raphael/raphael-min.js"></script>
<script src="/public/admin/bower_components/morrisjs/morris.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/public/admin/dist/js/sb-admin-2.js"></script>






</body>





