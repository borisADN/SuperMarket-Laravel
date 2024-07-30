<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
 <style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
*{
	box-sizing: border-box;
}
body{
	align-items: center;
	display: flex;
	justify-content:center;
	flex-direction: column;
	background: #f6f5f7;
	font-family: 'monserrat', sans-serif;
	min-height: 100%;
	margin: 10%;
}
.container{
	position: relative;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
	background: #fff;
	border-radius: 10px;
	overflow: hidden;
	box-shadow: 0 14px 28px rgba(0,0,0,0.25),
				0 10px 10px rgba(0,0,0,0.22)
}
.sign-up, .sign-in{
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}
.sign-up{
	width: 50%;
	opacity: 0;
	z-index: 1
}
.sign-in{
	width: 50%;
	z-index: 2;
}
form{
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}
h1{
	font-weight: bold;
	margin: 0;
}
p{
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 15px 0 20px;
}
input{
	background: #eee;
	padding: 12px 15px;
	margin: 8px 15px;
	width: 100%;
	border-radius: 5px;
	border: none;
	outline: none;
}
a{
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}
button{
	color: #fff;
	background: #0d6dad;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 55px;
	margin: 20px;
	border-radius: 20px;
	border: 1px solid #0d6dad;
	outline: none;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
	cursor: pointer;
}
button:active{
	transform: scale(0.90);
}
#signIn, #signUp{
	background-color: transparent;
	border: 2px solid #fff;
}
.container.right-panel-active .sign-in{
	transform: translateX(100%);
}
.container.right-panel-active .sign-up{
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}
@keyframes show{
	0%, 49.99%{
		opacity: 0;
		z-index: 1;
	}
	50%, 100%{
		opacity: 1;
		z-index: 5;
	}
}
.overlay-container{
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}
.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}
.overlay{
	position: relative;
	color: #fff;
	background: #ff416c;
	left: -100%;
	height: 100%;
	width: 200%;
	/* background: linear-gradient(to right, #ff4b28, #ff228c); */
	background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(16,16,212,1) 35%, rgba(0,212,255,1) 100%);
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}
.container.right-panel-active .overlay{
	transform: translateX(50%);
}
.overlay-left, .overlay-right{
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}
.overlay-left{
	transform: translateX(-20%);
}
.overlay-right{
	right: 0;
	transform: translateX(0);
}
.container.right-panel-active .overlay-left{
	transform: translateX(0);
}
.container.right-panel-active .overlay-right{
	transform: translateX(20%);
}
.social-container{
	margin: 20px 0;
}
.social-container a{
	height: 40px;
	width: 40px;
	margin: 0 5px;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	border: 1px solid #ccc;
	border-radius: 50%;
}
</style>
<body>
	<div class="container" id="main">
		<div class="sign-up">
			<form action="#">
				<h1>Inscription</h1>

			
				<input type="text" name="txt" placeholder="Name" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="pswd" placeholder="Password" required="">
				<button>S'inscrire</button>
			</form>
		</div>
		<div class="sign-in">
			<form action="#">
				<h1>Connexion</h1>
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="pswd" placeholder="Mot De Passe" required="">

				<button>Se Connecter</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-left">
					<h1>Bonjour!</h1>
					<p>Vous vous etes deja inscrit? Connectez vous alors pour continuer</p>
					<button id="signIn">Se Connecter</button>
				</div>
				<div class="overlay-right">
					<h1>Salut ,Mon Ami</h1>
					<h3>Vous n'avez pas encore de compte ? </h3>
					<h3> C'est le moment de nous rejoindre !</h3>
					<button id="signUp">S'inscrire</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const main = document.getElementById('main');

		signUpButton.addEventListener('click', () => {
			main.classList.add("right-panel-active");
		});
		signInButton.addEventListener('click', () => {
			main.classList.remove("right-panel-active");
		});
	</script>
</body>
</html>

