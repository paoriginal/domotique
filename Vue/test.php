<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body id="came">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="Vue/js/http-live-player.js"></script>
	    <script>
	        window.onload = function() {
                var canvas = document.createElement("canvas");
                document.getElementById("came").appendChild(canvas);

                canvas.style.width="342px";
                canvas.style.height="191.47px";

                var wsavc = new WSAvcPlayer(canvas, "webgl");

                var protocol = window.location.protocol === "https:" ? "wss:" : "ws:"
                wsavc.connect(protocol + '//paoriginal.hopto.org/video-stream');
            }
	   	</script>
</body>
</html>