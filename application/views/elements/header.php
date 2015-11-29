<div id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ads Cottage</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php foreach ($tab_list as $key => $value) {
                        if (is_array($value)) {
                            echo "\n\t\t<li class=\"dropdown\">";
                            echo "\n\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">$key <b class=\"caret\"></b></a>";
                            echo "\n\t\t\t<ul class=\"dropdown-menu\">";
                            foreach ($value as $key => $val) {
                                echo "\n\t\t\t\t<li> <a href=\"" . $val . "\">" . $key . "</a></li>";
                            }
                            echo "\n\t\t\t</ul>";
                            echo "\n\t\t</li>";
                        } else {
                            echo "\t<li> <a href=\"" . $value . "\">" . $key . "</a></li>";
                        }
                    } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
