<body>
    <!--  Menu-->
    <ul class="topnav" id="myTopnav">
        <li><a class="active" href="?action=home"><span style="font-size: 30px; font-family: 'Shrikhand', cursive;">School Check!</span></a></li>
        <li><a href="?action=vind">Vind een school</a></li>
        <li><a href="?action=bekijk">Bekijk scholen</a></li>
        <li><a href="?action=open">Open dagen</a></li>
        <li class="icon"><a href="javascript:void(0);" style="font-size: 30px;" onclick="myFunction()">&#9776;</a></li>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                }
                else {
                    x.className = "topnav";
                }
            }
        </script>
    </ul>
