<div class="content">
    <div class="container">
        <div class="load_more">
            <ul id="myList" ng-repeat="post in filteredPosts track by $index">
                <!-- These are our grid blocks -->
                <li>
                    <div class="l_g">
                        <div class="col-md-3 praesent">
                            <div class="l_g_r">
                                <div class="dapibus">
                                    <h2>Praesent dapibusneque id cursus faucioibus tortor neque tiegetas augue</h2>
                                    <p class="adm">Posted by <a href="#">Admin</a>  |  7 days ago</p>
                                    <a href="details.html"><img src="{{ url('images/test/images/img1.jpg') }}" class="img-responsive" alt=""></a>
                                    <p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate. </p>
                                    <a href="details.html" class="link">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 integ">
                            <div class="l_g_r">
                                <div class="integer">
                                    <h3>Integer vitae libero ac risus egestas</h3>
                                    <p class="adm">Posted by <a href="#">Admin</a>  |  7 days ago</p>
                                    <a href="details.html"><img src="{{ url('images/test/images/img3.jpg') }}" class="img-responsive" alt=""></a>
                                    <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel ipsum dolor.</p>
                                    <a href="details.html" class="link">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 integ">
                            <div class="l_g_r">
                                <div class="dapibus">
                                    <h3>Integer vitae libero risus egestas</h3>
                                    <p class="adm">Posted by <a href="#">Admin</a>  |  7 days ago</p>
                                    <a href="details.html"><img src="{{ url('images/test/images/2222.jpg') }}" class="img-responsive" alt=""></a>
                                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilis</p>
                                    <a href="details.html" class="link">Read More</a>
                                </div>
                            </div>
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

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <div class="clearfix"></div>
                <!----//--->
            </ul>
            {{--<div id="loadMore">Load more</div>--}}
            {{--<div id="showLess">Show less</div>--}}
            <pagination
                    ng-model="currentPage"
                    total-items="posts.length"
                    max-size="maxSize"
                    boundary-links="true">
            </pagination>
        </div>
    </div>
</div>