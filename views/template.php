<html>
    <head>
    <meta charset="UTF-8"/>
        <title>Loja Virtual</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <!--font-family: 'Dosis', sans-serif;/*-->
        
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>asserts/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>asserts/css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <nav class="navbar topnav">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" datatoggle="dropdown" href="#">English<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Portuguese</a></li>                        
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL;?>login">Login</a></li>
                </ul>
            
            </div>
        </nav>
        
        <header>
            <div class="container">  <!-- cabeçalho-->
                <div class="row">
                    <div class="col-sm-2 logo">
                        <a href="<?php BASE_URL;?>"><img src="<?php echo BASE_URL;?>asserts/images/logo.png"/></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="head_help">(12)99645-5322</div>
                        <div class="head_email">contato@<span>lojavirtual.com.br</span></div>
                        <div class="search_area">
                            <form method="GET">
                                <input type="text" name="s" required placeholder="Search item" />
                                <select name="category">
                                    <option value="">All categories</option>
                                </select>
                                <input type="submit" value="" />
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo BASE_URL;?>cart">  <!--carrinho de compras -->
                            <div class="cartarea">
                                <div class="caticon">
                                    <div class="cartqt"> <!-- qtd de itens no carrinho(soma)-->
                                        9
                                    </div>
                                </div>
                                <div class="carttotal">
                                    Your cart:<br/>
                                    <span>R$ 999,99</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        
        
        <!--scripts-->
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>asserts/js/jquey-3.4.1.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>asserts/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>script.js"></script>
    </body>
</html>