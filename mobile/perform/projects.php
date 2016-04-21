<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <div id="wrapper" class="sub perform">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/navbar.php'); ?>
        <main id="content">
            <div class="page-header">
                <p><img class="img-responsive" src="../images/img_sub_header.jpg" alt=""></p>
                <div class="sr-only">
                    <h2>TOMORROW IS HERE</h2>
                    <p>건전하고 투명한 재무관리 및 재무재표로 항상 신뢰성을 보장하겠습니다.</p>
                </div>
            </div>
            <div class="container">
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/lnb_1.php'); ?>
                <div class="project-tabs">
                    <ul>
                        <li class="active"><a href="#">전체</a></li>
                        <li><a href="#">교욱시설운영</a></li>
                        <li><a href="#">국방시설운영</a></li>
                        <li><a href="#">의료시설운영</a></li>
                        <li><a href="#">문화시설운영</a></li>
                        <li><a href="#">상업/업무시설운영</a></li>
                        <li><a href="#">호텔운영관리</a></li>
                    </ul>
                </div>
                <div class="section-header">
                    <span class="bar" role="presentation"></span>
                    <h3 class="title">전체실적</h3>
                </div>
                <div class="project-list">
                    <ul class="row">
                        <li class="col-xs-6">
                            <a href="#" data-toggle="modal" data-target="#project-modal">
                                <p><img class="img-responsive" src="../images/img_project.jpg" alt=""></p>
                                <span>[교육시설운영]</span>
                                <h4>전주 우림중 외 4교 中<br>익산성당초등학교</h4>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#" data-toggle="modal" data-target="#project-modal">
                                <p><img class="img-responsive" src="../images/img_project.jpg" alt=""></p>
                                <span>[교육시설운영]</span>
                                <h4>전주 우림중 외 4교 中<br>익산성당초등학교</h4>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#" data-toggle="modal" data-target="#project-modal">
                                <p><img class="img-responsive" src="../images/img_project.jpg" alt=""></p>
                                <span>[교육시설운영]</span>
                                <h4>전주 우림중 외 4교 中<br>익산성당초등학교</h4>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#" data-toggle="modal" data-target="#project-modal">
                                <p><img class="img-responsive" src="../images/img_project.jpg" alt=""></p>
                                <span>[교육시설운영]</span>
                                <h4>전주 우림중 외 4교 中<br>익산성당초등학교</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/paging.php'); ?>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="project-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <figure class="row">
                        <p class="col-xs-6">
                            <img class="img-responsive" src="../images/img_project.jpg">
                        </p>
                        <figcaption class="col-xs-6">
                            <span class="bar"></span>
                            <h4>전주우림 중 외 4교<br>익산성당초등학교</h4>
                            <address>전주시 완산구 효자동 2가 1199-3번지</address>
                        </figcaption>
                    </figure>
                    <table class="table">
                        <colgroup>
                            <col style="width: 100px">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>구성원</th>
                                <td>대지면적 13,896.0m2 (4210.0py)</td>
                            </tr>
                            <tr>
                                <th>규모</th>
                                <td>건축면적 2,695.92m2</td>
                            </tr>
                            <tr>
                                <th>운영방법</th>
                                <td>규모 지하1층, 지상3층</td>
                            </tr>
                            <tr>
                                <th>특징</th>
                                <td>구조</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-close" data-dismiss="modal">닫기</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>