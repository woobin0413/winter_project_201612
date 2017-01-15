<?php
include 'header.php';

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		
		body{

		}

		p{
			text-align: center;

			font-size: 80px;

			width: 100%;
			height: 100%;
		}
		svg {
            font: 10.5em 'Montserrat';
            width: 100%;
            height: 100%;
            margin-right: 300px;

        }
        
        .text-copy {
            fill: none;
            stroke: white;
            stroke-dasharray: 6% 29%;
            stroke-width: 5px;
            stroke-dashoffset: 0%;
            animation: stroke-offset 5.5s infinite linear;
        }
        
        .text-copy:nth-child(2) {
            stroke: #840037;
            animation-delay: -2s;
        }
        
        .text-copy:nth-child(3) {
            stroke: #BD0034;
            animation-delay: -3s;
        }
        
        .text-copy:nth-child(4) {
            stroke: #BD0034;
            animation-delay: -4s;
        }
        
        .text-copy:nth-child(5) {
            stroke: #FDB731;
            animation-delay: -5s;
        }
        
        @keyframes stroke-offset {
            100% {
                stroke-dashoffset: -35%;
            }
        }
	</style>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>



	<?php

if(isset($_SESSION['id'])) {

	echo "<p id='logins'>Logged in successfully</p>";
	header("Location: intro.html");
	exit();

 

} else {
	echo "<svg>";
	echo "<symbol id='s-text'>
	      <text text-anchor='middle' x='50%'' y='80%'>Welcome </text>
          </symbol>
          <g class='g-ants'>
              <use xlink:href='#s-text' class='text-copy'></use>
              <use xlink:href='#s-text' class='text-copy'></use>
              <use xlink:href='#s-text' class='text-copy'></use>
              <use xlink:href='#s-text' class='text-copy'></use>
              <use xlink:href='#s-text' class='text-copy'></use>
           </g>
     </svg>";


}

?>
	
</body>
