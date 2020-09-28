<?php
	include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.buttonload {
	background-color: #4CAF50;
	border: none
	color: white;
	paddin: 12px  16px;
	font-size: 16px;
}
body {
	font-family: Arial;
	color: white;
}
.split {
	height: 100%;
	width: 50%;
	position: fixed;
	z-index: 1;
	top: 0;
	overflow-x: hidden;
	padding-top: 20px;
}
.left{
	left: 0;
	background-color: #111;
}
.right{
	right: 0;
	background-color: blue;
}
.centered{
	position: absolute;
	top: 50%;
	left: 50%;
	transorm: translate(-50%,-50%);
	text-align: center;
}

</style>

</head>

<body>
<div class="split left">
 <div class="centered">
 
	<p><a href="#T1">Introduction to CSS</a></p>
	<p><a href="#T2">Loading a age</a></p>
	<p><a href="#T3">Centered content</a></p>
	<p><a href="#T4">Colours</a></p>
	<p><a href="#T5">Background</a></p>
 
	<link rel="stylesheet"
		href="https;//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0css/font-awesome.min.css">

	</div>
</div>

<div class="split right">
 <div class="centered">
		<h1 id="T1">Introduction to CSS</h1>
		<p>Welcome to the world of Cascading Style Sheets (CSS). With CSS, you can design gorgeous and highly effective Web sites. CSS offers power and flexibility to Web site developers and designers. This book shows you how to use CSS to make your Web pages come alive.</p>
		<h2 id="T2">Loading a page</h1>
		<p>If you’ve already worked with CSS, this book will sharpen your skills and show you lots of new techniques. You’ll take your Web design to the next level.</p>
		<h3 id="T3">Centered content</h1>
		<p>You see how to detect which browser and version the user has and how to take appropriate steps to deal with it in your Web page code</p>
		<h4 id="T4">Colours</h1>
		<p>Blue, Green, Yellow, Brown, Black, Grey, Beige, White, Orange, Tan, Charcoal, Lime, Peach, Gold</p>
		<h5 id="T5">Background</h1>
		<p>Firefox is fast, sleek, and overall pretty stable. In fact, it’s not under constant attack by hackers, as is IE. </p>
	</div>
</div>

</body>
<html/>