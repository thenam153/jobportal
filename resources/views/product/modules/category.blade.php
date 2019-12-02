<!-- Start post Area -->
<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">

                            @foreach($projects as $project)
							<div class="single-post d-flex flex-row">
								<div class="thumb" style="margin-right: 4em;">
                                    @if(count($project->files) == 0)
									<img src="img/post.png" width="160" height="200" alt="{{$project->name}}" title="{{$project->name}}">
									@else
									<img src="{{$project->files[0]}}" width="160" height="200" alt="{{$project->name}}" title="{{$project->name}}">
									@endif
									<ul class="tags" style="width:160px;">
                                        @foreach($project->skills as $skill)
										<li>
											<a href="javascript:void(0)">{{$skill}}</a>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
                                            <a href="single.html"><h4>{{$project->name}}</h4></a>
										</div>
										<ul class="btns" style="position:absolute;right:26px;">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
										</ul>
									</div>
									<p>
                                        {{$project->content}}
									</p>
									<h5>{{$project->nameCategory}}</h5>
									<p class="address"><span class="lnr lnr-database"></span> {{number_format($project->price)}} VNĐ</p>
								</div>
							</div>
                            @endforeach
                            {{$projects->links()}}
							<!-- <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a> -->

						</div>
						<div class="col-lg-4 sidebar">
                            <div class="single-slidebar">
                                    <h4>Công việc theo thể loại</h4>
                                    <ul class="cat-list">
                                        @foreach($categorys as $category)
                                        <li><a class="justify-content-between d-flex" href="category/{{$category->id}}"><p>{{$category->name}}</p><span>{{$category->quantily}}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
							<!-- <div class="single-slidebar">
								<h4>Top rated job posts</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>																		
								</div>
							</div>							 -->

						

							<!-- <div class="single-slidebar">
								<h4>Carrer Advice Blog</h4>
								<div class="blog-list">
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>																		
								</div>
							</div>							 -->

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->