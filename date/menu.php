<section class="menu menu--circle">
    <input type="checkbox" id="menu__active"/>
    <label for="menu__active" class="menu__active">
        <div class="menu__toggle">
            <div class="icon">
                <div class="hamburger"></div>
            </div>
        </div>
        <input type="radio" name="arrow--up" id="degree--up-0"/>
        <input type="radio" name="arrow--up" id="degree--up-1"/>
        <input type="radio" name="arrow--up" id="degree--up-2"/>
        <div class="menu__listings">
            <ul class="circle">
                <li>
                    <div class="placeholder">
                        <div class="upside">
                            <a href="index.html" class="button"><i class="fa fa-home fa-rotate-45"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="placeholder">
                        <div class="upside">
                            <a href="/sun.php" class="button"><i class="fa fa-globe"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="placeholder">
                        <div class="upside">
                            <a href="/index.html" class="button"><i class="fa fa-pencil"
                                                                    onclick="switchVisible(); hide('title');"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="menu__arrow menu__arrow--top">
            <ul>
                <li>
                    <label for="degree--up-0">
                        <div class="arrow"></div>
                    </label>
                    <label for="degree--up-1">
                        <div class="arrow"></div>
                    </label>
                    <label for="degree--up-2">
                        <div class="arrow"></div>
                    </label>
                </li>
            </ul>
        </div>
    </label>
</section>
<span class="switch">
	<span class="switch-border1">
		<span class="switch-border2">
			<input id="switch1" type="checkbox" onClick="togglePlay()" checked/>
			<label for="switch1"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<audio id="myAudio" src="./media/sounds-from space.mp3" autoplay="autoplay" preload="auto">
</audio>
