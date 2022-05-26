<?php 
    include("../back/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/91217dad50.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody&family=Gamja+Flower&family=Nanum+Pen+Script&family=Secular+One&family=Song+Myung&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css?ver=1">
    <title>오늘의집</title>
</head>
<body>
    <div class="laylot">

        <!-- 배너 -->
        <div class="top-banner">
            <div class="top-banner_pc">
                <a href="https://ohou.se/exhibitions/2031" target="blank">첫 구매라면 누구나 2만원 할인받기</a>
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

        <!-- 메뉴바 -->
        <header class="navigation-bar">
            <div class="nav_bar">
                <div class="list_1">
                    <div class="nb_list">
                        오늘의집
                    </div>
                </div>
                
                <ul class="list_2">
                    <li class="list_ms">커뮤니티</li>
                    <li class="list_ms">스토어</li>
                    <li class="list_ms">인테리어시공</li>
                </ul>
                
                
                <ul class="list_3">
                    <li>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </li>
                    <li class="list_ms"><a href="../view/sign_in.html">로그인</a></li>
                    <li class="list_ms"><a href="../view/sign_up.html">회원가입</a></li>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="list3_bt" onclick="dp_menu()">글쓰기
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                    <div id="list3_content">
                        <!-- <a href="#">사진올리기</a>
                        <a href="#">집들이 글쓰기</a>
                        <a href="#">노하우 글쓰기</a>
                        <a href="#">상품리뷰쓰기</a>
                        <a href="#">시공 전문가</a> -->
                        <a href="">게시판</a>
                    </div>
                </div>
                
            </div>    
            <div class="nav_bar1">
                <div class="ft_1">
                    <ul class="nb1_list">
                        <li class="nl_1">홈</li>
                        <li class="nl_1">팔로잉</li>
                        <li class="nl_1">사진</li>
                        <li class="nl_1">집들이</li>
                        <li class="nl_1">노하우</li>
                        <li class="nl_1">전문가집들이</li>
                        <li class="nl_1">셀프가이드</li>
                        <li class="nl_1">질문과 답변</li>
                        <li class="nl_1">이벤트</li>
                    </ul>
                    <div class="nb2_link">3D인테리어</div>
                </div>
            </div>
        </header>

        <!-- 메인페이지 -->
        <div class="main-container">
            <div class="container_header">
                <div class="row">

                    <div class="row1">
                            <img src="../assets/imges/main.jpg" alt="">
                    </div>

                    <div id="row_two"> 
                        <ul class="slides_list"> 
                            <li><img src="../assets/imges/bn_1.webp" alt="" width="250px" height="480px"></li> 
                            <li><img src="../assets/imges/bn_2.webp" alt="" width="250px" height="480px"></li>
                            <li><img src="../assets/imges/bn_3.webp" alt="" width="250px" height="480px"></li> 
                            <li><img src="../assets/imges/bn_4.webp" alt="" width="250px" height="480px"></li> 
                        </ul> 
                        <p class="controller"> 
                            <!-- &lang: 왼쪽 방향 화살표 &rang: 오른쪽 방향 화살표 --> 
                            <span class="prev">&lang;</span> 
                            <span class="next">&rang;</span> 
                        </p> 
                    </div>

                </div>
            </div>

            <div class="row1_list">
                <div class="ro1_li1"><strong>화이트로 꾸민 아파트</strong></div>
                <div class="ro1_li2">도토리행님</div>
                <div class="ro1-li3"></div>
            </div>

            <nav class="container_menu">
                <ul class="menu_list">
                    <div class="menu-icon">
                            <li>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </li>
                        <div class="icon_shop">
                            쇼핑하기
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-truck"></i>
                        </li>
                        <div class="icon_shop">
                            배송하기
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-house"></i>
                        </li>
                        <div class="icon_shop">
                            집들이
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-couch"></i>
                        </li>
                        <div class="icon_shop">
                            공간별 사진
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-paint-roller"></i>
                        </li>
                        <div class="icon_shop">
                            시공
                        </div>
                    </div>


                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-truck-moving"></i>
                        </li>
                        <div class="icon_shop">
                            이사
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-clock"></i>
                        </li>
                        <div class="icon_shop">
                            오늘의 딜
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-sack-dollar"></i>
                        </li>
                        <div class="icon_shop">
                            할인
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-book-open-reader"></i>
                        </li>
                        <div class="icon_shop">
                            리퍼
                        </div>
                    </div>

                    <div class="menu-icon">
                        <li>
                            <i class="fa-solid fa-drumstick-bite"></i>
                        </li>
                        <div class="icon_shop">
                            식사
                        </div>
                    </div>
        
                </ul>
            </nav>
            
            <section>
                <h3>오늘의 스토리</h3>
                <section class="container_store">
                    <div class="store_br">
                        <div class="br1"><img src="../assets/imges/br1_img.jpg" alt=""> 
                            <div class="br1_list">
                                <div class="br1_br1"><strong>초록초록한 식물로 꾸민 구옥원룸</strong></div>
                                <div class="br1_br2">gamddo</div>
                                <div class="br1-br3"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            </div>
                        </div>

                        <div class="br2"><img src="../assets/imges/br2_img.jpg" alt=""> 
                            <div class="br2_list">
                                <div class="br2_br1"><strong>소품으로 꾸민 모던 신혼집</strong></div>
                                <div class="br2_br2">1005_september</div>
                                <div class="br2-br3" style="background-color: brown;">
                                    <img src="../assets/imges/br2_br3_img.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="br3"><img src="../assets/imges/br3_img.jpg" alt=""> 
                            <div class="br3_list">
                                <div class="br3_br1"><strong>색다른 구조의 리모델링</strong></div>
                                <div class="br3_br2">윤록이네</div>
                                <div class="br3-br3" style="background-color: indianred;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="store_br2">
                        <div class="br2_menu1">
                            <a href="#">집들이</a>
                            <div><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                        <div class="br2_menu1" >
                            <a href="#">전문가 집들이</a>
                            <div><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                        <div class="br2_menu1" >
                            <a href="#">노하우</a>
                            <div><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </section>
            </section>

            <section class="container_category">
                <h3>카테고리별 상품 찾기</h3>
                <div class="category_menu">
                    <div class="menu_top"> 
                        <div class="menu_icon">
                            <img src="../assets/imges/menu_icon_img.jpg" alt="">
                        </div>
                        <div class="menu_bot">
                            <div>가구</div>
                        </div>
                    </div>

                    <div class="menu_top"> 
                        <div class="menu_icon">
                            <img src="../assets/imges/menu_icon_img2.jpg" alt="">
                        </div>
                        <div class="menu_bot">
                            <div>패브릭</div>
                        </div>
                    </div>

                    <div class="menu_top"> 
                        <div class="menu_icon">
                            <img src="../assets/imges/menu_icon_img3.jpg" alt="">
                        </div>
                        <div class="menu_bot">
                            <div>가전</div>
                        </div>
                    </div>

                    <div class="menu_top"> 
                        <div class="menu_icon">
                            <img src="../assets/imges/child.jpg" alt="">
                        </div>
                        <div class="menu_bot">
                            <div>유아</div>
                        </div>
                    </div>

                    <div class="menu_top"> 
                        <div class="menu_icon">
                            <img src="../assets/imges/ss.jpg" alt="">
                        </div>
                        <div class="menu_bot">
                            <div>조명</div>
                        </div>
                    </div>

                    <div class="menu_top"> 
                        <div class="menu_icon">
                            <img src="../assets/imges/ki.jpg" alt="">
                        </div>
                        <div class="menu_bot">
                            <div>주방용품</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container_dill">
                <h3>오늘의 딜</h3>
                <div class="dill_grid">
                    <div class="dill_item1">
                        <img src="../assets/imges/1!.jpg" alt="">
                        <div class="dill_br1_1">에어서큘레이터</div>
                    </div>
                    <div class="dill_item1">
                        <img src="../assets/imges/2!.jpg" alt="">
                        <div class="dill_br1_1">구름슬리퍼</div>
                    </div>
                    <div class="dill_item1">
                        <img src="../assets/imges/3!.jpg" alt="">
                        <div class="dill_br1_1">흡착식 도어 슬리퍼</div>
                    </div>
                    <div class="dill_item1">
                        <img src="../assets/imges/4!.jpg" alt=""> 
                        <div class="dill_br1_1">분리수거함</div>
                    </div>
            </section>


            <section class="container_photo">
                <h3>오늘의 인기 사진</h3>
                    <div class="photo_grid">
                        <div class="grid_item1">
                            <img src="../assets/imges/d.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">루디의 집</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/kari-shea-tOVmshavtoo-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">애3있는집</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/becca-tapert-dO3qTKxwik0-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">2yujin22</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/michael-oxendine-BfkTFeysp34-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">해윰홈</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/cheryl-winn-boujnida-jhDof9B6vPY-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">BlauesHaus</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/steinar-engeland-hmIFzdQ6U5k-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">mydayss</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/christopher-jolly-GqbU78bdJFM-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">hyeoniss</div>
                        </div>
                        <div class="grid_item1">
                            <img src="../assets/imges/deborah-cortelazzi-gREquCUXQLI-unsplash.jpg" alt="">
                            <div class="grid_br1"><img src="../assets/imges/br1_br3_img.png" alt=""></div>
                            <div class="grid_br1_1">bambiroom</div>
                        </div>
                    </div>
            </section>

            <section class="container_review">
                <h3>유저들의 인테리어 시공리뷰</h3>
                <div class="review_list">
                    <div class="review_list1">
                        <img src="../assets/imges/dan-gold-4HG3Ca3EzWw-unsplash.jpg" alt="">
                    </div>
                    <div class="review_list2">
                        <img src="../assets/imges/laurence-katz-MkTh65JGIlU-unsplash.jpg" alt="">
                    </div>
                    <div class="review_list3">
                        <img src="../assets/imges/deborah-diem-pnvPGgk4aZ0-unsplash.jpg" alt="">
                    </div>
                </div>

                <div class="rl_container">
                    <ul class="rl_1">
                        <li>지니어스</li>
                    </ul>
                    <ul class="rl_2">
                        <li>(주)제이디자인</li>
                    </ul>
                    <ul class="rl_3">
                        <li>노을</li>
                    </ul>
                </div>

            </section>
            <section class="container_Special">
                <div class="special_ht">
                    <h3>오늘의 기획전</h3>
                    <div class="ht_menu">더보기</div>
                </div>
                <div class="special_list">
                    <div class="special_list1">
                        <img src="../assets/imges/spacejoy-nEtpvJjnPVo-unsplash.jpg" alt="">
                    </div>
                    <div class="special_list2">
                        <img src="../assets/imges/hanae-dan-a6vdV5vlrdM-unsplash.jpg" alt="">
                    </div>
                    <div class="special_list3">
                        <img src="../assets/imges/nathan-oakley-gj1dnc7yRG0-unsplash.jpg" alt="">
                    </div>
                </div>
                <div class="sl_1">
                    <div class="sl1_1">Pre Summer</div>
                    <div class="sl1_1">여름가전 페스타</div>
                    <div class="sl1_1">인기가구 핫딜</div>
                </div>

            </section>
            <section class="container_premium">
                <div class="premium_ht">
                    <h3>해외 프리미엄 인기 상품 모아보기!</h3>
                    <div class="premium_menu">더보기</div>
                </div>
                <div class="premium_list">
                    <div class="premium_list1">
                        <img src="../assets/imges/grant-ritchie-pJ1JxTbWyaA-unsplash.jpg" alt="">
                    </div>
                    <div class="premium_list2">
                        <img src="../assets/imges/maksim-shutov-_yJUawaCS78-unsplash.jpg" alt="">
                    </div>
                    <div class="premium_list3">
                        <img src="../assets/imges/creativ-94-LXq50H90hd0-unsplash.jpg" alt="">
                    </div>
                    <div class="premium_list4">
                        <img src="../assets/imges/kendal-PAS6LwgHnIs-unsplash.jpg" alt="">
                    </div>
                </div>
                <div class="pl_1">
                    <div class="sl1_1">342,600</div>
                    <div class="sl1_1">596,100</div>
                    <div class="sl1_1">810,000</div>
                    <div class="sl1_1">498,500</div>
                </div>
            </section>

            <section class="container_best">
                <h3>베스트</h3>
                <div class="best_list">
                    <span>전체</span>
                    <span>가구</span>
                    <span>패브릭</span>
                    <span>조명</span>
                    <span>가전</span>
                    <span>주방용품</span>
                    <span>데코</span>
                    <span>수납</span>
                    <span>생활용품</span>
                    <span>생필품</span>
                    <span>공구</span> 
                    <span>인테리어 시공</span>
                    <span>반려동물</span>
                    <span>캠핑용품</span>
                    <span>실내운동</span>
                    <span>유아</span>
                    <span>렌탈</span>
                    <span>식품</span>
                </div>
                <div class="best_list2">
                    <div class="best_br1">
                        <img src="../assets/imges/01.jpg" alt="">
                    </div>
                    <div class="best_br2">
                        <img src="../assets/imges/012.jpg" alt="">
                    </div>
                    <div class="best_br3">
                        <img src="../assets/imges/0123.jpg" alt="">
                    </div>
                    <div class="best_br4">
                        <div class="br4_icon">베스트 셀러 더보기</div>
                        <div class="br4_icon">
                            <a href="https://ohou.se/commerces/ranks?type=best"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bb_1">
                    <div class="bb1_1">2,399,000</div>
                    <div class="bb1_2">284,900</div>
                    <div class="bb1_3">19,900</div>
                </div>
            </section>

            <section class="container_notice">
                <div class="notice_open">
                    <div class="notice_1">전문가 가입신청</div>
                </div>
                <div class="notice_buy">
                    <div class="notice_2">사업자 구매 회원전환</div>
                </div>
            </section>
        </div>

        
        <!-- 푸더 -->
        <footer class="ft_top">
            <div class="ft_bt">
                <p>고객센터</p>
                <div class="ft_nember">
                    <div class="nember">1670-0876</div> 
                    <div >
                        <i class="fa-brands fa-apple"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-github"></i>
                        <i class="fa-brands fa-artstation"></i>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>
                <div>평일 09:00 ~ 18:00 (주말 & 공휴일 제외)</div>
                <div class="ft_menu">
                    <span>브랜드 스토리</span>
                    <span>회사소개</span>
                    <span>채용정보</span>
                    <span>이용약관</span>
                    <span>개인정보처리방침</span>
                    <span>공지사항</span>
                    <span>고객센터</span>
                    <span>고객의 소리</span>
                    <span>전문가등록</span>
                    <span>사업자 구매회원</span>
                    <span>제휴/광고</span>
                    <span>입점신청 문의</span>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>


<script>   
    const slides_list = document.querySelector('.slides_list');
    const slides_listImg = document.querySelectorAll('.slides_list li');
    let currentldx = 0;
    const slideCount = slides_listImg.length;
    console.log(slideCount);
    const prev = document.querySelector('.prev');
    // console.log(prev);
    const next = document.querySelector('.next');
    const slideWidth = 250;
    const slideMargin = 0;

    slides_list.style.width = (slideWidth + slideMargin) * slideCount + 'px';

    function moveSlide(num) {
        slides_list.style.left =-num * 250 + 'px';
        currentldx = num;
    }

    prev.addEventListener('click', function() {
        console.log('이전');
        if (currentldx !== 0) moveSlide(currentldx - 1);
    });
    
    next.addEventListener('click', function() {
        console.log('다음');
        if (currentldx !== slideCount -1) {
            moveSlide(currentldx + 1);
        }
    });

    function dp_menu() {
        let click = document.getElementById("list3_content");
        if(click.style.display === "none") {
            click.style.display = "block";
            console.log('작동');
        } else {
            click.style.display = "none";
            console.log('꺼짐');
        }
    };





</script>