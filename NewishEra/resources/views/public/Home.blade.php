<!DOCTYPE html>
<html>
<head>
	<title>Newish Era</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

@extends('layouts.public')
@section('content')
<body>
	
	<main>
		<section class="hero">
			<h1>Shop Our Collection</h1>
			<p>Discover the latest trends and styles</p>
			<button>Shop Now</button>
		</section>
		<section class="categories">
			<h2>Shop by Category</h2>
			<ul>
				<li><a href="#">Clothing</a></li>
				<li><a href="#">Shoes</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">Home Decor</a></li>
			</ul>
		</section>
		<section class="featured-products">
			<h2>Featured Products</h2>
			<div class="product">
				<img src="product1.png" alt="Product Image">
				<h3>Product 1</h3>
				<p>$19.99</p>
				<button>Add to Cart</button>
			</div>
			<div class="product">
				<img src="product2.png" alt="Product Image">
				<h3>Product 2</h3>
				<p>$29.99</p>
				<button>Add to Cart</button>
			</div>
			<div class="product">
				<img src="product3.png" alt="Product Image">
				<h3>Product 3</h3>
				<p>$39.99</p>
				<button>Add to Cart</button>
			</div>
		</section>
		<section class="testimonials">
			<h2>What Our Customers Say</h2>
			<div class="testimonial">
				<p>"I love this store! The products are high quality and the customer service is excellent."</p>
				<p>- Jane Doe</p>
			</div>
			<div class="testimonial">
				<p>"I highly recommend this store. The selection is great and the prices are unbeatable."</p>
				<p>- John Smith</p>
			</div>
		</section>
	</main>
	

</body>
</html>

@endsection
