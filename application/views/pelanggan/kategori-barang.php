<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<li><a href="<?= base_url('index/listkamera') ?>">Kamera</a>
								<!--<ul class="sub-menu">
									<div class="col-mg-8">
									<li><a href="#">DSLR <span>(2)</span></a></li>
									<li><a href="#">Mirrorless<span>(56)</span></a></li>
									<li><a href="#">Accessories<span>(36)</span></a></li>
									</div>
								</ul> -->
							</li>
							<li><a href="<?= base_url('index/listmobil') ?>">Mobil</a>
							<li><a href="<?= base_url('index/listsepeda') ?>">Motor</a>
							</li>
						</ul>
					</div>
					<div class="filter-widget mb-10">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>