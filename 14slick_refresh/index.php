<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookit</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
	<!-- style -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div id="wrap">
		<header id="header" class="clearfix">
			<h1>
				<a href="#">
					<img src="images/logo.jpg" alt="cookit">
				</a>
			</h1>
			<nav class="nav">
				<ul class="clearfix">
					<li>
						<a href="#">Cookit소개</a>
						<ul class="submenu">
							<li><a href="#">sub-menu1</a></li>
							<li><a href="#">sub-menu1</a></li>
							<li><a href="#">sub-menu1</a></li>
							<li><a href="#">sub-menu1</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Cookit메뉴</a>
						<ul class="submenu">
							<li><a href="#">sub-menu2</a></li>
							<li><a href="#">sub-menu2</a></li>
							<li><a href="#">sub-menu2</a></li>
							<li><a href="#">sub-menu2</a></li>
						</ul>
					</li>
					<li><a href="#">리뷰</a>
						<ul class="submenu">
							<li><a href="#">sub-menu3</a></li>
							<li><a href="#">sub-menu3</a></li>
							<li><a href="#">sub-menu3</a></li>
							<li><a href="#">sub-menu3</a></li>
						</ul>
					</li>
					<li><a href="#">이벤트</a>
						<ul class="submenu">
							<li><a href="#">sub-menu4</a></li>
							<li><a href="#">sub-menu4</a></li>
							<li><a href="#">sub-menu4</a></li>
							<li><a href="#">sub-menu4</a></li>
						</ul>
					</li>
					<li><a href="#">My쿡킷</a>
						<ul class="submenu">
							<li><a href="#">sub-menu5</a></li>
							<li><a href="#">sub-menu5</a></li>
							<li><a href="#">sub-menu5</a></li>
							<li class="contact"><a href="#">sub-menu5</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header><!-- //header -->

		<section id="banner">
			<div class="slideList clearfix">
				<div class="slideImg">
					<h2>이미지1</h2>
					<img src="images/banner01.jpg" alt="COOKIT 앱 런칭기념 이벤트1">
				</div><!-- //slideImg -->
				<div class="slideImg">
					<h2>이미지2</h2>
					<img src="images/banner01.jpg" alt="COOKIT 앱 런칭기념 이벤트2">
				</div><!-- //slideImg -->
				<div class="slideImg">
					<h2>이미지3</h2>
					<img src="images/banner01.jpg" alt="COOKIT 앱 런칭기념 이벤트3">
				</div><!-- //slideImg -->
			</div>
		</section><!-- //banner -->

        <section id="content1" class="clearfix">
         <article class="left">
             <h2 class="title">우리집도 배달되냐?</h2>
             <p class="desc">너네집은 배달안된다.</p>
             <a href="#" class="btn">배송지 검색</a>
         </article><!-- //left -->
         <article class="right">
            <h2 class="title">우리집도 배달되냐?</h2>
            <p class="desc">너네집은 배달안된다.</p>
            <a href="#" class="btn">62:23:10 <em>남은시간</em></a>
         </article><!-- //right -->
        </section><!-- //content1 -->

	</div> <!-- //wrap -->

    <!-- layer팝업 -->
    <div class="layer-bg">
        <div class="layer">
            <h2>제목</h2>
            <a href="#" class="close">닫기</a>
        </div>
    </div>


	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script>
		$('.nav>ul>li').mouseover(function () {
			$(this).find('.submenu').stop().slideDown();
		});
		$('.nav>ul>li').mouseleave(function () {
			$(this).find('.submenu').stop().slideUp();
		});

		// banner
		var currentIndex = 0;

		//setInterval(어떤할일,시간)//시간마다할일
		//setInterval(function(){할일(실행문)},시간)
		//3000 -->3초
		//3초마다 function문이 실행됨
		// if(조건문){
		//     조건문이 만족하면 실행
		// }else{
		//     조건문이 만족하지 않으면 실행
		// }
		setInterval(function () {
			if (currentIndex < 2) {
				//조건문이 만족하면 실행
				currentIndex++; //하나씩 더해짐
			} else {
				//조건문이 만족하지 않으면 실행
				currentIndex = 0;
			}

			var slidePosition = currentIndex * (-1000) + "px";
			console.log(slidePosition)

            //.animate({실행문},시간)
            $('.slideList').animate({
                left:slidePosition
            },1000)

		}, 3000)

    //  레이어팝업
    $('#content1 .right').click(function(){
        //display:block과 같은 역할 .show()
        //$('.layer-bg').show()
        $('.layer-bg').fadeIn(300);
    });

    $('.layer .close').click(function(){
        //display:none과 같은 역할 .hide()
        //$('.layer-bg').hide()
        $('.layer-bg').fadeOut(200);
    });
        
	</script>
</body>

</html>