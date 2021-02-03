<?php include('header.php'); ?>
<style type="text/css">
	time {
	  color: #7a7a8c;
	}
	.header-card {
	  background-image: -webkit-gradient(linear, left bottom, left top, from(#ff8a00), to(#da1b60));
	  background-image: linear-gradient(to top, #ff8a00, #da1b60);
	  position: relative;
	  border-radius: 16px;
	  padding: 2rem;
	  margin: 0 4rem 0 0;
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-pack: end;
	  -ms-flex-pack: end;
	  justify-content: flex-end;
	  -webkit-box-orient: vertical;
	  -webkit-box-direction: normal;
	  -ms-flex-direction: column;
	  flex-direction: column;
	  -webkit-box-flex: 0;
	  -ms-flex: 0 0 320px;
	  flex: 0 0 320px;
	}
	.header-card p {
	  margin: 0;
	  font-size: 0.8rem;
	}

	.header-card-title {
	  font-size: 1.6rem;
	  margin: 0 0 0.5rem 0;
	}

	.popular-articles {
	  -webkit-box-sizing: content-box;
	  box-sizing: content-box;
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  width: calc(100vw - 71px);
	  margin: 0 0 8rem 0;
	  padding: 2rem 0;
	  overflow-x: auto;
	  -webkit-overflow-scrolling: touch;
	}
	.popular-articles::-webkit-scrollbar {
	  width: 10px;
	  height: 10px;
	}
	.popular-articles::-webkit-scrollbar-thumb {
	  background: -webkit-gradient(linear, left top, right top, from(#da1b60), to(#ff8a00));
	  background: linear-gradient(to right, #da1b60, #ff8a00);
	  border-radius: 10px;
	  -webkit-box-shadow: inset 2px 2px 2px rgba(255, 255, 255, 0.4), inset -2px -2px 2px rgba(0, 0, 0, 0.4);
	  box-shadow: inset 2px 2px 2px rgba(255, 255, 255, 0.4), inset -2px -2px 2px rgba(0, 0, 0, 0.4);
	}
	.popular-articles::-webkit-scrollbar-track {
	  background: linear-gradient(to right, #201c29, #201c29 1px, #17141d 1px, #17141d);
	}

	.popular-header .edit-popular {
	  position: absolute;
	  top: 5px;
	  right: 5px;
	}

	.mini-card-grid {
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	}

	.mini-card {
	  width: auto;
	  max-height: 340px;
	  padding: 1.5rem;
	  border-radius: 16px;
	  background: #fff;
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-orient: vertical;
	  -webkit-box-direction: normal;
	  -ms-flex-direction: column;
	  flex-direction: column;
	  -webkit-transition: 0.2s;
	  transition: 0.2s;
	  margin: 0;
	  box-shadow:
		  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
		  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
		  0 12.5px 10px rgba(0, 0, 0, 0.06),
		  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
		  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
		  0 0px 20px rgba(0, 0, 0, 0.12)
	}
	.mini-card h2 {
	  font-size: 16px;
	  margin: 0.25rem 0 auto 0;
	}
	.mini-card:not(:first-child) {
	  margin-left: -130px;
	}
	.mini-card .tags a {
	  font-size: 0.5rem;
	}
	.mini-card:focus, .mini-card:hover {
	  -webkit-transform: translate(0, -1rem);
	  transform: translate(0, -1rem);
	}
	.mini-card:focus ~ .mini-card, .mini-card:hover ~ .mini-card {
	  -webkit-transform: translateX(130px);
	  transform: translateX(130px);
	}

	
	.mini-article-subhead {
	  font-size: 14px;
	  margin: 0 0 1rem 0;
	}

	.mini-article-card-header {
	  margin-bottom: auto;
	}

	.mini-article-meta {
	  font-size: 14px;
	}
	.mini-article-meta .author-name {
	  display: block;
	  position: relative;
	}
	.mini-article-meta .author-avatar img {
	  width: 40px;
	  height: 40px;
	}
	.mini-article-meta .author-avatar .half-circle {
	  width: 60px;
	  height: 48px;
	}

	.mini-article-byline {
	  margin: 10px 0 0 0;
	  display: grid;
	  grid-template-columns: 75px 1fr;
	  -webkit-box-align: center;
	  -ms-flex-align: center;
	  align-items: center;
	}
	.mini-article-byline .author-avatar, .mini-article-byline .author-name-area {
	  grid-area: auto;
	}

	.author-avatar img {
	  border-radius: 50%;
	  width: 60px;
	  height: 60px;
	  margin: 12px 10px;
	  -webkit-filter: grayscale(100%);
	  filter: grayscale(100%);
	}

	.mini-article-meta .author-avatar img {
	  width: 40px;
	  height: 40px;
	}

	.tags {
	  margin: 1rem 0 2rem 0;
	  white-space: nowrap;
	  padding: 0.5rem 0 1rem;
	  overflow-x: auto;
	}
	.tags a {
	  color: #7a7a8c;
	  text-transform: uppercase;
	  font-weight: 700;
	  font-size: 0.66rem;
	  white-space: nowrap;
	  border: 3px solid #28242f;
	  border-radius: 2rem;
	  padding: 0.3rem 0.85rem 0.35rem 0.85rem;
	}

	.mini-card .tags a {
	  font-size: 0.5rem;
	}

	.author-avatar {
	  grid-area: avatar;
	  -ms-flex-item-align: start;
	  align-self: start;
	  position: relative;
	}
</style>

	<div class="app-main__inner">
        <div class="app-page-title pt-18">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <div class="mr-2 btn-group">
                            <h5 style="font-size: 18px;font-weight: 700;padding-bottom: 10px;">Health Articles</h5>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-primary color-white" href="./new_article.php">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-plus"></i>
                            </span>
                            New Article
                        </a>
                    </div>
                </div>  
            </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<article class="mini-card module module-article article" id="mini-post-280317">
		         	<header class="mini-article-card-header">
			            <div class="mini-article-card-title">
			               <div class="mini-article-subhead">
			                  	<time datetime="2018-12-21">
			                  	December 21, 2018        
			              		</time>
			               	</div>
			               	<h2 class="">
			                  	<a href="" class="article-card-header read-article">
			                  		Animating Between Views in React Fitness and exercise       
			              		</a>
			              		<p class="font-12 pt-10">
			              			Health magazines publish articles relating to people’s health and lifestyles. You will find new developments in health every day. Just go to Google.com’s News section and type in “health lifestyle” to see what topics are being published. Here are 10 topics in demand right now.


			              		</p>
			               </h2>
			            </div>
		         	</header>
			        <div class="mini-article-meta">
			            <div class="mini-article-byline">
			               	<div class="author-avatar">
			                  	<a class="author-name" href="">
				                  	<img alt="" src="https://secure.gravatar.com/avatar/802b096bc7cef6843db036595503b559?s=80&amp;d=retro&amp;r=pg" srcset="https://secure.gravatar.com/avatar/802b096bc7cef6843db036595503b559?s=160&amp;d=retro&amp;r=pg 2x" class="avatar avatar-80 photo" height="80" width="80">        
				                </a>
			               	</div>
			               	<div class="author-name-area">
			                  	<div class="author-name-prefix">
			                     	Author
			                  	</div>
			                  	<a class="author-name" href="">
			                  		Jeremias Menichelli        
			                  	</a>
			               	</div>
			            </div>
		         	</div>
		      	</article>
        	</div>
        </div>
    </div>



<?php include ('footer.php'); ?>