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
        <!-- -->
        
        <div class="categoryarea">
            <nav class="navbar">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" datatoggle="dropdown" href="#">
                                Select Category
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Category X</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <!-- Filtro de produtos -->
        
        <selection>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <aside> <!-- aside = menu lateral --> 
                            <h1>Filter</h1>
                            <div class="filterarea">
                
                            </div>
                            
                            <div class="widget">
                                <h1>Featured Products</h1>
                                <div class="widget_body">
                                    ...
                                </div>
                            </div>
                        </aside>
                        <div class="col-sm-9">
                            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
                        </div>
                    </div>
                </div>
            </div>
        </selection>
        
        <!-- Rodapé -->
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1>Featured Products</h1>
                            <div class="widget_body"> 
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1>On-Sale Products</h1>
                            <div class="widget_body"> 
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1>Top Rated Products</h1>
                            <div class="widget_body"> 
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                            <form method="POST">
                                <input class="subemail" name="email" 
                                       placeholder="Subscribe to our newsletter" />
                                <input type="submit" value="Subscribe" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="<?php echo BASE_URL; ?>">
                                <img width="150" src="<?php echo BASE_URL; ?>asserts/images/logo.png" />
                            </a>
                            <br/>
                            <br/>
                            <strong>Slogan da Loja Virtual</strong>
                            <br/>
                            <br/>
                            Endereço da Loja
                        </div>
                        <div class="col-sm-8 linkgroups">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3>Category</h3>
                                    <ul> <!-- por os links-->
                                        <li><a href="#">Category X</a></li>
                                        <li><a href="#">Category X</a></li>
                                        <li><a href="#">Category X</a></li>
                                        <li><a href="#">Category X</a></li>
                                        <li><a href="#">Category X</a></li>
                                        <li><a href="#">Category X</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Information</h3>
                                    <ul> <!-- por os links-->
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                        <li><a href="#">Menu 6</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Information</h3>
                                    <ul> <!-- por os links-->
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                        <li><a href="#">Menu 6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capywright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">&copy; <span>Loja Virtual</span> - Todos os direitos resercados.</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payments">
                            <img src="?php echo BASE_URL; ?>asserts/images/visa.png" />
                            <img src="?php echo BASE_URL; ?>asserts/images/visa.png" />
                            <img src="?php echo BASE_URL; ?>asserts/images/visa.png" />
                            <img src="?php echo BASE_URL; ?>asserts/images/visa.png" />
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
        <!--scripts-->
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>asserts/js/jquey-3.4.1.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>asserts/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>script.js"></script>
    </body>
</html>