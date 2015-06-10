<?php 
	include 'header.php'; 
	include 'menu-shop.php';
?>
	
		<h1 class="shop-title"><a href="shop.php">Conscious - sustainable style</a></h1>

		<div id="category-top">
			<ul>
				<li id="woman2" class="filter-all">WOMAN</li>
				<li id="man2" class="filter-all" >MAN</li>
				<li id="children2" class="filter-all" >KIDS</li>
				<li id="home2" class="filter-all">HOME</li>
			</ul>
			<hr />
		</div>

		<div id="start-view">
			<div class="woman cell">
				<span class="cell-text">WOMAN</span>
			</div>
			<div class="man cell">
				<span class="cell-text">MAN</span>
			</div>
			<div class="children cell">
				<span class="cell-text">KIDS</span>
			</div>
			<div class="home cell">
				<span class="cell-text">HOME</span>
			</div>
		</div>

		<div id='shop-wrapper'>
		<div class="category-side">

			<ul id="woman-category" class="category-all">
				<span>WOMAN</span>
				<li class="filter-top">Top</li>
				<li class="filter-dress">Dress</li>
				<li class="filter-jeans">Jeans</li>
				<li class="filter-all">All</li>
			</ul>	

			
			<ul id="man-category" class="category-all">
				<span>MAN</span>
				<li class="filter-t-shirt">T-shirt</li>
				<li class="filter-jeans">Jeans</li>
				<li class="filter-jacket">Jacket</li>
				<li class="filter-all">All</li>
			</ul>

			
			<ul id="kids-category" class="category-all">
				<span>KIDS</span>
				<li class="filter-top">Top</li>
				<li class="filter-shorts">Shorts</li>
				<li class="filter-pants">Pants</li>
				<li class="filter-all">All</li>
			</ul>

			
			<ul id="home-category" class="category-all">
				<span>HOME</span>
				<li class="filter-livingroom">Livingroom</li>
				<li class="filter-kitchen">Kitchen</li>
				<li class="filter-bedroom">Bedroom</li>
				<li class="filter-all">All</li>
			</ul>
		</div>

		<!--pop up box shop-->
		<div class="overlayShop" id="overlayShop" style="display:none;"></div>

		<div class="boxShop" id="boxShop">
			<a class="boxcloseShop" id="boxcloseShop"><i class="fa fa-times"></i></a>
			<img src="clothes/woman/top1.jpg" alt="Top">
				<div class="clothesInfo">
					<h3>Top</h3>
					<p>249:-</p>
					
						<div class="colorPicker">
							<p>Color:</p>
							<div class="circle color1"></div>
							<div class="circle color2"></div>
							<div class="circle color3"></div>
							<div class="circle color4"></div>
						</div>
						<div class="clearfix"></div>

						<div class="sizePicker">
							<p>Size:</p>
							<div class="circle">
								<p>34</p>
							</div>
							<div class="circle">
								<p>36</p>
							</div>
							<div class="circle">
								<p>38</p>
							</div>
							<div class="circle">
								<p>40</p>
							</div>
							<div class="circle">
								<p>42</p>
							</div>
							<div class="circle">
								<p>44</p>
							</div>
						</div>
						<div class="clearfix"></div>

					<h3>Produktbeskrivning</h3>
					<p>CONSCIOUS. En ribbad topp i trikå av ekologisk bomullsblandning. Toppen har kort ärm med fastsytt uppvik.</p>

					<h3>Detaljer</h3>
					<p>57% bomull, 38% polyester, 5% elastan. Art.nr. 40-7802</p>
					<input class="buy" type="button" value="Buy" name="buy">
				</div>
		</div>
		<!--#pop up box shop-->

		<div class="clothes" id="woman">

			<div class="grid-item cell-item top all woman1">
				<img src="clothes/woman/top1.jpg" alt="Top">
				<div class="clothesInfo">
					<p>Top</p>
					<p>249:-</p>
					<input class="buy" type="button" value="Buy" name="buy">
				</div>
			</div>

			<div class="grid-item cell-item dress all">
				<img src="clothes/woman/dress3.jpg" alt="Dress">
				<p>Dress</p>
				<p>399:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item top all">
				<img src="clothes/woman/top2.jpg" alt="Top">
				<p>Top</p>
				<p>299:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jeans all">
				<img src="clothes/woman/jeans2.jpg" alt="Jeans">
				<p>Jeans</p>
				<p>349:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item dress all">
				<img src="clothes/woman/dress2.jpg" alt="Dress">
				<p>Dress</p>
				<p>299:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jeans all">
				<img src="clothes/woman/jeans1.jpg" alt="Jeans">
				<p>Jeans</p>
				<p>349:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item top all">
				<img src="clothes/woman/top3.jpg" alt="Top">
				<p>Top</p>
				<p>299:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item dress all">
				<img src="clothes/woman/dress1.jpg" alt="dress">
				<p>Dress</p>
				<p>249:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item top all">
				<img src="clothes/woman/top4.jpg" alt="Top">
				<p>Top</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>
		</div>

		<div class="clothes" id="man">
			<div class="grid-item cell-item t-shirt all">
				<img src="clothes/man/t-shirt1.jpg" alt="T-shirt">
				<p>T-shirt</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jacket all">
				<img src="clothes/man/jacket1.jpg" alt="jacket">
				<p>Jacket</p>
				<p>399:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item t-shirt all">
				<img src="clothes/man/t-shirt2.jpg" alt="T-shirt">
				<p>T-shirt</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jeans all">
				<img src="clothes/man/jeans1.jpg" alt="jeans">
				<p>Jeans</p>
				<p>399:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jacket all">
				<img src="clothes/man/jacket2.jpg" alt="jacket">
				<p>Jacket</p>
				<p>499:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jeans all">
				<img src="clothes/man/jeans2.jpg" alt="jeans">
				<p>Jeans</p>
				<p>399:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item t-shirt all">
				<img src="clothes/man/t-shirt2.jpg" alt="T-shirt">
				<p>T-shirt</p>
				<p>129:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item jeans all">
				<img src="clothes/man/jeans3.jpg" alt="jeans">
				<p>Jeans</p>
				<p>399:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item t-shirt all">
				<img src="clothes/man/t-shirt4.jpg" alt="T-shirt">
				<p>T-shirt</p>
				<p>129:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>
		</div>

		<div class="clothes" id="kids">
			<div class="grid-item cell-item top all">
				<img src="clothes/kids/top1.jpg" alt="top">
				<p>Top</p>
				<p>79:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item shorts all">
				<img src="clothes/kids/shorts1.jpg" alt="shorts">
				<p>Shorts</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item top all">
				<img src="clothes/kids/top2.jpg" alt="top">
				<p>Top</p>
				<p>79:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item pants all">
				<img src="clothes/kids/pants1.jpg" alt="pants">
				<p>Pants</p>
				<p>199:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item shorts all">
				<img src="clothes/kids/shorts3.jpg" alt="shorts">
				<p>Shorts</p>
				<p>49:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item pants all">
				<img src="clothes/kids/pants2.jpg" alt="pants">
				<p>Pants</p>
				<p>149:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item top all">
				<img src="clothes/kids/top3.jpg" alt="top">
				<p>Top</p>
				<p>49:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item shorts all">
				<img src="clothes/kids/shorts2.jpg" alt="shorts">
				<p>Shorts</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item top all">
				<img src="clothes/kids/top4.jpg" alt="top">
				<p>Top</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>
		</div>

		<div class="clothes" id="home">
			<div class="grid-item cell-item kitchen all">
				<img src="clothes/home/kitchen1.jpg" alt="kitchen">
				<p>Towel</p>
				<p>149:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item livingroom all">
				<img src="clothes/home/livingroom2.jpg" alt="livingroom">
				<p>Pillow</p>
				<p>69:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item kitchen all">
				<img src="clothes/home/kitchen2.jpg" alt="kitchen">
				<p>Tablecloth</p>
				<p>129:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item bedroom all">
				<img src="clothes/home/bedroom2.jpg" alt="bedroom">
				<p>Bed Set</p>
				<p>199:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item kitchen all">
				<img src="clothes/home/kitchen3.jpg" alt="kitchen">
				<p>Apron</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item bedroom all">
				<img src="clothes/home/bedroom1.jpg" alt="bedroom">
				<p>Bed Set</p>
				<p>199:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item kitchen all">
				<img src="clothes/home/kitchen4.jpg" alt="kitchen">
				<p>Tablecloth</p>
				<p>229:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item livingroom all">
				<img src="clothes/home/livingroom1.jpg" alt="livingroom">
				<p>Pillow</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>

			<div class="grid-item cell-item livingroom all">
				<img src="clothes/home/livingroom3.jpg" alt="livingroom">
				<p>Blanket</p>
				<p>99:-</p>
				<input class="buy" type="button" value="Buy" name="buy">
			</div>
		</div>
	</div>

<?php
include 'footer.php';
?>
