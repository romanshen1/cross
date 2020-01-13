<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Интернет-магазин кроссовок</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]>
		<style type="text/css" media="screen">
			.tabbed { height:420px; }
		</style>
	<![endif]-->
	
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
	
</head>
<body>
<!-- топ -->
<div id="top">
	
	<div class="shell">
		
		<!-- Шапка -->
		<div id="header">
			<h1 id="logo"><a href="#">Магазин кроссовок</a></h1>
			<div id="navigation">
				<ul>
				    <li><a href="#">Главная</a></li>
					<li><a href="#">Магазин</a></li>
					<li><a href="#">Мой Аккаунт</a></li>
					<li class="last"><a href="#">Контакты</a></li>
				</ul>
			</div>
		</div>
		<!-- Конец шапки -->
		
		<!-- Слайдер -->
		<div id="slider">
			<div id="slider-holder">
				<ul>
				    <li><a href="#"><img src="css/images/slide3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide4.png" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide4.png" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide4.png" alt="" /></a></li>
				</ul>
			</div>
			<div id="slider-nav">
				<a href="#" class="prev">Previous</a>
				<a href="#" class="next">Next</a>
			</div>
		</div>
		<!-- Конец слайдера -->
		
	</div>
</div>
<!-- топ конец -->

<!-- мэйн -->
<div id="main">
	<div class="shell">
		
		<!-- поиск -->
		<div class="options">
			<div class="search">
				<form action="" method="post">
					<span class="field"><input type="text" class="blink" value="Поиск" title="Поиск" /></span>
					<input type="text" class="search-submit" value="GO" />
				</form>
			</div>
			<span class="left"><a href="#">Расширенный поиск</a></span>
			
			<div class="right">
				<span class="cart">
					<a href="#" class="cart-ico">&nbsp;</a>
					<strong>$0.00</strong>
				</span>
				<span class="left more-links">
					<a href="#">Детали</a>
				</span>
			</div>
		</div>
		<!-- Конец поиска -->
		<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
		<!-- Контент -->
		<div id="content">
			
			<!-- подпункты -->
			<div class="tabs">
				<ul>
				    <li><a href="#" class="active"><span>Уличные</span></a></li>
				    <li><a href="#"><span>Спортивные</span></a></li>
				</ul>
				                    
			</div>
			<!-- конец подпунктов -->
			
			<!-- Контейнер -->
			<div id="container">
				
				<div class="tabbed">
					
 @yield('content')
					
				</div>
				
				<!-- Бренды -->
				<div class="brands">
					<h3>Наши бренды</h3>
					<div class="logos">
						<a href="#"><img src="css/images/logo1.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo2.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo3.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo4.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo5.gif" alt="" /></a>
					</div>
				</div>
				<!-- Конец тапа -->
				
				<!-- Футер -->
				<div id="footer">
					<div class="left">
						<a href="#">Главная</a>
						<span>|</span>
						<a href="#">Магазин</a>
						<span>|</span>
						<a href="#">Мой аккаует</a>
						<span>|</span>
						<a href="#">Контакты</a>
					</div>
					<div class="right">
						&copy; urbangear.com. Design by <a href="#">Roman Shen</a>
					</div>
				</div>
				<!-- Футер -->
				
			</div>
			<!-- Конец контейнера -->
			
		</div>
		<!-- контент энж -->
		
	</div>
</div>
<!-- мэйн энд -->
	
</body>
</html>