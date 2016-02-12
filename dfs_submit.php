<!DOCTYPE html>
<html>
<head>
    <title>DFS | Sports Betting</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Overlock:400,700,900' rel='stylesheet' type='text/css'>
    <?php
        function dkQbCalc($passtd, $passyd, $int, $rushtd, $rushyd, $fumb){
            $total = ($passtd*4.0 + $passyd*.04 - $int*1.0 + $rushtd*6.0 + $rushyd*.1 - $fumb*1.0);
            if ($passyd >= 300){
                $total += 6.0;
            }
            if ($rushyd >= 100){
                $total += 3.0;
            }
            echo $total;
        }
        function fdQbCalc($passtd, $passyd, $int, $rushtd, $rushyd, $fumb){
            $total = ($passtd*4.0 + $passyd*.04 - $int*1.0 + $rushtd*6.0 + $rushyd*.1 - $fumb*2.0);
            echo $total;
        }
    ?>
</head>
<body>  
    <div class="wrapper">
        <div class="col-1">
            <img src="img/sportstitle.png" alt="Sports Betting" class="title">
        </div>
        <div class="row clearfix">
            <div class="col-1">
                <?php include 'includes/menu.php';?>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-1">
                <img src="img/dkabnner.jpg" alt="Daily Fantasy Sports">
                <p>http://d1zlh37f1ep3tj.cloudfront.net/wp/wblob/54592E651337D2/FFC/194E60/2K_B5VeUZz4iPk7mKLWMxw/draftkings-dk-1-million-dollar-guaranteed.jpg</p>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-2-3">
                <h2>Daily Fantasy Sports</h2>
                Daily fantasy sports (DFS) are a subset of fantasy sport games. As with traditional fantasy sports games, players compete against others by building a team of professional athletes from a particular league or competition, and earn points based on the actual statistical performance of the players in real-world competitions. Daily fantasy sports are an accelerated variant of traditional fantasy sports that are conducted over short-term periods, such as a week or single day of competition, as opposed to those that are played across an entire season. Daily fantasy sports are structured in the form of competitions (typically referred to as a "contest"); users pay an entry fee in order to participate, and build a team of players in a certain sport while complying with a salary cap. Depending on their overall performance, players may win a share of a pre-determined pot. Entry fees help fund prizes, while a portion of the entry fee goes to the provider as rake-off revenue. <p>(https://en.wikipedia.org/wiki/Daily_fantasy_sports)</p>
            </div>
            <div class="col-1-3">
                <h2>NFL QB DFS Point Calculator</h2>
                <?php
                    if (isset($_POST['Submit'])) {
                        $pname = $_POST['pname'];
                        $pass_td = $_POST['pass_td'];
                        $pass_yd = $_POST['pass_yd'];
                        $ints = $_POST['ints'];
                        $rush_td = $_POST['rush_td'];
                        $rush_yd = $_POST['rush_yd'];
                        $fumbles = $_POST['fumbles'];
                        $site = $_POST['site'];
                        
                        echo $pname."'s Point Total: ";
                        if ($site == "d_kings"){
                            dkQbCalc($pass_td, $pass_yd, $ints, $rush_td, $rush_yd, $fumbles);
                        }
                        else {
                            fdQbCalc($pass_td, $pass_yd, $ints, $rush_td, $rush_yd, $fumbles);
                        }
                    }
                ?>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-1">
                <ul>
                    <li class="footer"><a>&copy; Sam Hamburger 2016</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>