<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Book Store</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="home">
		<div class="home-box">
			<nav>
				<div class="logo bars">
					<div class="bar">
						<i class="fa fa-bars"></i>
					</div>
					<h3>Book Store</h3>
				</div>
				<div class="menu">
					<div class="close">
						<i class="fa fa-close"></i>
					</div>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="Webpage/books.html">Books</a></li>
						<li><a href="Webpage/reviews.php">Review</a></li>
						<li><a href="Webpage/contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="signup-login">
                    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="php/signup.php">Sign Up</a>
                        <a href="php/login.php">Login</a>
                    <?php endif; ?>
                </div>
			</nav>
			<div class="content">
				<h5>Book Store</h5>
				<h1>Reading is Dreaming with Open Eyes</h1>
				<p>"Just the knowledge that good books is awaiting one at the end of a long day makes that day Happier."</p>

				<div class="search">
					<i class="fa fa-search"></i>
					<input type="text" placeholder="your journey begins with search..">
					<button>Search</button>
				</div>
			</div>
		</div>

	</section>
	<section class="qoutes">
		<div class="container">
			<div class="box">
				<img src="images/romance_qoutes.png" alt="">
				<div class="content">
					<h4>Mark Twain</h4>
					<p>"A succesful book is not made of what is in it, but what is left out of it."</p>
				</div>
			</div>
			<div class="box">
				<img src="images/comedy_qoutes.png" alt="">
				<div class="content">
					<h4>Lary L. King</h4>
					<p>"write. Rewrite. When not writing or not rewriting, read. I know of no shortcuts"</p>
				</div>
			</div>
			<div class="box">
				<img src="images/horror_qoutes.png" alt="">
				<div class="content">
					<h4>Stephen King</h4>
					<p>"Description begins in the writer's imagination, but should finish in the readers."</p>
				</div>
			</div>
		</div>
	</section>

	<section class="store">
		<h4 class="label">BOOK STORES</h4>
		<div class="container">
			<div class="container-box">
				<h2 class="heading">Greetings from our Book Stores</h2>
				<div class="content">
					<p>Welcome to our Book Stores, your haven for literary adventures and discoveries. Nestled in the heart of Torrijos, Marinduque, our store offers a diverse collection of books spanning all genres, from timeless classics to the latest bestsellers. Whether you're an avid reader, a casual browser, or looking for the perfect gift, our knowledgeable and friendly staff are here to guide you. We pride ourselves on creating a warm, cozy atmosphere where book lovers of all ages can find inspiration. Join us for author signings, book clubs, and community events that celebrate the joy of reading. Happy exploring!</p>
					<a href="#">explore more <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="gallery">
				<div class="box">
					<img src="images/store_1.jpg" alt="">
					<div class="text">
						<h2>Store no.1</h2>
					</div>
				</div>
				<div class="box">
					<img src="images/store_2.jpg" alt="">
					<div class="text">
						<h2>Store no.2</h2>
					</div>
				</div>
				<div class="box">
					<img src="images/store_3.jpg" alt="">
					<div class="text">
						<h2>Store no.3</h2>
					</div>
				</div>
				<div class="box">
					<img src="images/store_4.jpg" alt="">
					<div class="text">
						<h2>Store no.4</h2>
					</div>
				</div>
				<div class="box">
					<img src="images/store_5.jpg" alt="">
					<div class="text">
						<h2>Store no.5</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="featured">
		<div class="gallery">
			<div class="box">
				<div class="first-box">
					<h4 class="label">Recommend Books</h4>
					<h2 class="heading">Get Some Books</h2>
					<p>Looking for your next great read? Explore our online bookstore, where a world of literary treasures awaits. Enjoy the convenience of browsing and purchasing from the comfort of your home, with fast and reliable delivery. Discover your next favorite book today!</p>
					<a href="Webpage/reviews.php">show more</a>
					<div class="image">
						<img src="images/recommend.png">
					</div>
				</div>
			</div>
			<div class="box">
				<img src="images/comedy7(2).jpg">
				<div class="content">
					<h2>Why Not Me?</h2>
					<p>BY MINDY KALING</p>
					<div class="review-and-idr">
						<div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
						<p>idr 343.000</p>
					</div>
				</div>
			</div>
			<div class="box">
				<img src="images/horror7(2).jpg">
				<div class="content">
					<h2>The Reformatory</h2>
					<p>BY TANANARIVE DUE</p>
					<div class="review-and-idr">
						<div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
						<p>idr 343.000</p>
					</div>
				</div>
			</div>
			<div class="box">
				<img src="images/romance7(2).jpg">
				<div class="content">
					<h2>With Love, from Cold World</h2>
					<p>BY Alicia Thompson</p>
					<div class="review-and-idr">
						<div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
						<p>idr 343.000</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="feedback">
		<div class="container">
			<h4 class="label">Costumer's Feedbacks</h4>
			<h2 class="heading">FEEDBACKS</h2>
			<p class="paragraph">
				Real stories from our Costumer's
			</p>
		</div>

		<div class="voices">
			<div class="voice">
				<div class="profile">
					<img src="images/profile1.jpeg">
					<div class="detail">
						<li>Adrian Lamanilao</li>
						<li>Costumer</li>
					</div>
				</div>
				<p>"As a book lover, I’m thrilled with this online store. The prices are competitive, and the customer service is excellent. I appreciate the detailed descriptions and customer reviews for each book, which helped me make informed choices."</p>
			</div>
			<div class="voice">
				<div class="profile">
					<img src="images/profile2.png">
					<div class="detail">
						<li>C-jay Nares</li>
						<li>Costumer</li>
					</div>
				</div>
				<p>"This online bookstore exceeded my expectations. The user-friendly interface made shopping a breeze, and I received my books faster than anticipated. The quality of the books was excellent, and I loved the personalized reading suggestions."</p>
			</div>
			<div class="voice">
				<div class="profile">
					<img src="images/profile3.jpg">
					<div class="detail">
						<li>Justin Fiestada</li>
						<li>Costumer</li>
					</div>
				</div>
				<p>"I had a fantastic experience with this online bookstore! The website is easy to navigate, and the selection is incredible. My order arrived quickly and in perfect condition. I’ll definitely be shopping here again."</p>
			</div>
			<div class="voice">
				<div class="profile">
					<img src="images/profile4.jpg">
					<div class="detail">
						<li>Cjay Andrade</li>
						<li>Costumer</li>
					</div>
				</div>
				<p>"The selection of books is fantastic! I found both new releases and old favorites easily. The website is user-friendly and the delivery was prompt. Highly recommended!"</p>
			</div>
			<div class="voice">
				<div class="profile">
					<img src="images/profile5.jpg">
					<div class="detail">
						<li>Shenna Constantino</li>
						<li>Costumer</li>
					</div>
				</div>
				<p>"I’m impressed with the efficiency and reliability of this online bookstore. They have an extensive catalog, and my order process was smooth from start to finish. Plus, the packaging was eco-friendly, which is a huge plus for me."</p>
			</div>
			<div class="voice">
				<div class="profile">
					<img src="images/profile6.jpg">
					<div class="detail">
						<li>Edrian Mayores</li>
						<li>Costumer</li>
					</div>
				</div>
				<p>"I love the convenience of this online bookstore. The search function is robust, making it easy to find exactly what I'm looking for. Plus, the curated lists and editor's picks are a great touch."</p>
			</div>
		</div>
	</section>

	<footer>
		<section class="footer">
			<div class="container">
				<div class="detail">
					<h3>Online Book Store</h3>
					<p>Read Read Read</p>
					<h5>Contact us at</h5>
					<a href="#">OnlineBookStore@gmail.com</a>
					<div class="social">
						<a href="https://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
						<a href="https://www.x.com"><i class="fa fa-twitter-square"></i></a>
					</div>
				</div>
				<div class="about-us">
					<h4>Quick Links</h4>
					<li><a href="index.php">Home</a></li>
					<li><a href="Webpage/books.html">Books</a></li>
					<li><a href="Webpage/reviews.php">Review</a></li>
					<li><a href="Webpage/contact.html">Contact</a></li>
				</div>
				<div class="about-us">
					<h4>help</h4>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">store guide</a></li>
					<li><a href="#">cancellation policy</a></li>
				</div>
				<div class="about-us">
					<h4>Resources</h4>
					<li><a href="#">gallery</a></li>
					<li><a href="#">offers</a></li>
					<li><a href="#">branches</a></li>
				</div>
			</div>
			
		</section>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="js/script.js"></script>

</body>
</html> 