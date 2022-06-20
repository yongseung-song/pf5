<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삼성전자 회사 : 경영철학</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/reset.css" type="text/css">

    <!-- 구글폰트:notosanskr -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/subtitle.css" type="text/css">
    <link rel="stylesheet" href="css/main-philosophy.css" type="text/css">
    <link rel="stylesheet" href="css/aside.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/responsive-sub.css" type="text/css">
    <script src="js/jquery-1.6.2.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous">
    </script>
    <script src="js/gnb.js"></script>
    <script>
        $(document).ready(
            function(){ 

                $("#philosophy ul.list li:nth-child(1) a").addClass("current");  

                // 철학리스트메뉴클릭시 클래스 붙이기
                $("#philosophy ul.list li a").click(
                    function(){
                        $(this).addClass("current");
                        $("#philosophy ul.list li a").not(this).removeClass("current");
                        return false;
                    }
                );  
                  
            }
        );
    </script>
</head>
<body>
    <!-- 상단영역 -->
    <?php include "includes/header.html" ?>
    <!-- 서브타이틀영역 -->
    <?php include "includes/subtitle.html" ?>
    <!-- 내용영역 -->
    <?php include "includes/philosophy.html" ?>
    <!-- aside -->
    <?php include "includes/aside.html" ?>
    <!-- 하단영역 -->
    <?php include "includes/footer.html" ?>
</body>
</html>