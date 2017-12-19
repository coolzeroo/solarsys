<!DOCTYPE html>
<html>
<head>
    <?php include('./date/connect-db.php'); ?>
    <?php include('./date/data.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/solarstyle.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/responsive/max-600px.css" media="(max-width: 600px)">
    <link rel="stylesheet" type="text/css" href="css/responsive/min-1024px.css" media="(min-width: 1024px)">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    <script src="js/prefixfree.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <meta charset="UTF-8">
    <title>The Solar System</title>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
</head>
<header>
    <?php include('./date/menu.php'); ?>
</header>
<body>
<body class="opening hide-UI view-2D zoom-large data-close controls-close">
<div id="data">
    <a class="sun" title="sun" href="#sunspeed">Sun</a>
    <a class="mercury" title="mercury" href="#mercuryspeed">Mercury</a>
    <a class="venus" title="venus" href="#venusspeed">Venus</a>
    <a class="earth active" title="earth" href="#earthspeed">Earth</a>
    <a class="mars" title="mars" href="#marsspeed">Mars</a>
    <a class="jupiter" title="jupiter" href="#jupiterspeed">Jupiter</a>
    <a class="saturn" title="saturn" href="#saturnspeed">Saturn</a>
    <a class="uranus" title="uranus" href="#uranusspeed">Uranus</a>
    <a class="neptune" title="neptune" href="#neptunespeed">Neptune</a>
</div>
<div id="controls">
    <!-- <label class="set-view">
        <input type="checkbox">
    </label>  -->
    <label class="set-zoom">
        <input type="checkbox">
    </label>
    <label>
        <input type="radio" class="set-speed" name="scale" checked>
        <span>Speed</span>
    </label>
    <label>
        <input type="radio" class="set-size" name="scale">
        <span>Size</span>
    </label>
    <label>
        <input type="radio" class="set-distance" name="scale">
        <span>Distance</span>
    </label>
    <label>
        <input type="radio" class="set-rotation" name="scale">
        <span>Rotation Period</span>
    </label>
</div>
<div id="universe" class="scale-stretched">
    <div id="galaxy">
        <div id="solar-system" class="earth">
            <div id="mercury" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>Mercury</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="venus" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>Venus</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="earth" class="orbit">
                <div class="pos">
                    <div class="orbit">
                        <div class="pos">
                            <div class="moon"></div>
                        </div>
                    </div>
                    <div class="planet">
                        <dl class="infos">
                            <dt>Earth</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="mars" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>Mars</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="jupiter" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>Jupiter</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="saturn" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <div class="ring"></div>
                        <dl class="infos">
                            <dt>Saturn</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="uranus" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>Uranus</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="neptune" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>Neptune</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="sun">
                <dl class="infos">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
	<script src="js/audio.js" type="text/javascript"></script>
</body>
</html>
