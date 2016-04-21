<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <div id="wrapper" class="sub company directions">
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
                <ul class="nav nav-pills nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#hq" aria-controls="hq" role="tab" data-toggle="tab">본사</a></li>
                    <li role="presentation"><a href="#branch" aria-controls="branch" role="tab" data-toggle="tab">지사</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="hq">
                        <div class="section-header">
                            <span class="bar" role="presentation"></span>
                            <h3 class="title">씨엔에스 주식회사 위치 안내</h3>
                        </div>
                        <div class="map">
                            <!-- 임시 -->
                            <p><img class="img-responsive" src="../images/img_map_1.jpg" alt=""></p>
                            <!--// 임시 -->
                        </div>
                        <div class="info-view">
                            <table class="table">
                                <colgroup>
                                    <col style="width:100px;">
                                    <col>
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>주소</th>
                                        <td>
                                            광주광역시 북구 첨단연신로 293 프로맥3F<br>
                                            우) 61089
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>전화번호</th>
                                        <td>062 · 605 · 1400</td>
                                    </tr>
                                    <tr>
                                        <th>팩스번호</th>
                                        <td>062 · 576 · 4101</td>
                                    </tr>
                                    <tr>
                                        <th>교통안내</th>
                                        <td>
                                            <span class="label label-bus">BUS</span>
                                            첨단과학산업단지 정류장에서 하차
                                            도보로 11분  | (상무22, 송정700)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="branch">
                        <div class="section-header">
                            <span class="bar" role="presentation"></span>
                            <h3 class="title">씨엔에스 주식회사 위치 안내</h3>
                        </div>
                        <div class="map">
                            <!-- 임시 -->
                            <p><img class="img-responsive" src="../images/img_map_2.jpg" alt=""></p>
                            <!--// 임시 -->
                        </div>
                        <div class="info-view">
                            <table class="table">
                                <colgroup>
                                    <col style="width:100px;">
                                    <col>
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>주소</th>
                                        <td>
                                            서울시 강남구 선릉로 577 조선내화 6층<br>
                                            프라임 선릉 비즈니스 센터 내  |  우) 03143
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>전화번호</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>팩스번호</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>교통안내</th>
                                        <td>
                                            <p>
                                                <span class="label label-bus">BUS</span>
                                                선정릉역 4번출구. 시니어플라자
                                                정류장에서 하차 도보로 10분  | (지선 3412)
                                            </p>
                                            <p>
                                                <span class="label label-sub">SUB</span>
                                                선정릉역 4번출구에서 도보로 5분
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>