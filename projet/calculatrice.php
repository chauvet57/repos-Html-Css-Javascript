
    
    <head>
    

        
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        
        <title>Calculatrice</title>
    </head>
    <body>
        <div id="container">
			
            <div id="calculator">
                <div id="header">
                    <input type="text" id="number" value="0" autocomplete="off" disabled />
                </div>
                <div id="body">
                    <div class="buttons">7</div>
                    <div class="buttons">8</div>
                    <div class="buttons">9</div>
                    <div class="buttons">/</div>
                    <div class="buttons">4</div>
                    <div class="buttons">5</div>
                    <div class="buttons">6</div>
                    <div class="buttons">*</div>
                    <div class="buttons">1</div>
                    <div class="buttons">2</div>
                    <div class="buttons">3</div>
                    <div class="buttons">-</div>
                    <div class="buttons">0</div>
                    <div class="buttons">.</div>
                    <div class="buttons">=</div>
                    <div class="buttons">+</div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                var calc = new Calculator();
                calc.run();
            });
        </script>
    </body>
      

       



