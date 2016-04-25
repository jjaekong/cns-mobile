<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <div id="wrapper" class="sub notice">
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
                <div class="section-header">
                    <span class="bar" role="presentation"></span>
                    <h3 class="title">씨엔에스의 인재상</h3>
                </div>
                <div class="board-list">
                    <table class="table">
                        <colgroup>
                            <col>
                            <col style="width: 20%">
                            <col style="width: 25%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>등록일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="title"><a href="#">친환경건축자재(HB) 일반 성적서</a></td>
                                <td>관리자</td>
                                <td>06-03-15</td>
                            </tr>
                            <tr>
                                <td class="title"><a href="#">친환경건축자재(HB) 일반 성적서</a></td>
                                <td>관리자</td>
                                <td>06-03-15</td>
                            </tr>
                            <tr>
                                <td class="title"><a href="#">친환경건축자재(HB) 일반 성적서</a></td>
                                <td>관리자</td>
                                <td>06-03-15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/paging.php'); ?>
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/search_area.php'); ?>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>