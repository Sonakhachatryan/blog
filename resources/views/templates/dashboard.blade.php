<div class="content">
    <div class="container">
        <div class=" col-md-9 load_more">
            <ul id="myList">
                <!-- These are our grid blocks -->
                <li ng-repeat="posts in filteredPosts">
                    <div class="l_g">
                        <div class="col-md-4 praesent" ng-repeat="post in posts track by $index">
                            <div class="l_g_r">
                                <div class="dapibus">
                                    <h2><% post.title %></h2>
                                    <p class="adm">Posted by <a href="#"><% post.author.name%></a> | <% post.created_at %></p>
                                    <a href="details.html"><img src="<% 'images/posts/' + post.image %>"
                                                                class="img-responsive" alt=""></a>
                                    <p><% post.short_desc %> </p>
                                    <a ng-href="posts/<% post.id %>" class="link">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <div class="clearfix"></div>
                <!----//--->
            </ul>
            <pagination
                    ng-model="currentPage"
                    total-items="posts.length"
                    max-size="maxSize"
                    boundary-links="true">
            </pagination>
        </div>
        <div class="col-md-3 integ">
            <div class="l_g_r">
                <div class="posts">
                    <h4>Recent posts</h4>
                    <h6><a href="#">Aliquam tincidunt mauris</a></h6>
                    <h6><a href="#">Vestibulum auctor lipsum</a></h6>
                    <h6><a href="#">Nunc dignissim risus</a></h6>
                    <h6><a href="#">Cras ornare tristiqu</a></h6>
                </div>
                <div class="comments">
                    <h4>Recent Comments</h4>
                    <h6><a href="#">Amada Doe <span>on</span> Hello World!</a></h6>
                    <h6><a href="#">Peter Doe <span>on</span> Photography</a></h6>
                    <h6><a href="#">Steve Roberts <span>on</span> HTML5/CSS3</a></h6>
                    <h6><a href="#">Doe Peter<span>on</span> Photography</a></h6>
                </div>
                <div class="archievs">
                    <h4>Archives</h4>
                    <h6><a href="#">October 2013</a></h6>
                    <h6><a href="#">September 2013</a></h6>
                    <h6><a href="#">August 2013</a></h6>
                    <h6><a href="#">July 2013</a></h6>
                </div>
                <div class="categories">
                    <h4>Categories</h4>
                    <h6><a href="#">Vivamus vestibulum nulla</a></h6>
                    <h6><a href="#">Integer vitae libero ac risus e</a></h6>
                    <h6><a href="#">Vestibulum commo</a></h6>
                    <h6><a href="#">Cras iaculis ultricies</a></h6>

                </div>
            </div>
        </div>
    </div>