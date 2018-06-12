<?php
session_start();
include_once("header.php");
try{$vendor_id=$_SESSION['vendor_session'];}
catch(PDOException $e){
			echo $e->getMessage();
		}
?>
                <div class="content">
                    <div id="profile" class="page-layout simple tabbed">

                        <!-- HEADER -->
                        <div
                            class="page-header light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6">

                            <div
                                class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">

                                <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">

                                    <img class="profile-image avatar huge mr-6"
                                         src="../assets/images/avatars/katherine.jpg">

                                    <div class="name h2 my-6">	<?php
			
			try{
				
				$vendor_id=$_SESSION['vendor_session'];
				
			$stmt = $db_con->prepare("SELECT * FROM vendor WHERE vendor_id=:vendor_id");
			$stmt->execute(array(":vendor_id"=>$vendor_id));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			echo $row['vendor_name'];
		//$ty= $row['profilepix'];
			}
			
			catch(PDOException $e){
			echo $e->getMessage();
		}
	
			
			?></div>

                                </div>

                                <div class="actions row align-items-center no-gutters">

                                    <button type="button" class="btn btn-primary" aria-label="Follow">Follow</button>

                                    <button type="button" class="btn btn-secondary ml-2" aria-label="Send Message">Send
                                        Message
                                    </button>

                                </div>

                            </div>
                        </div>
                        <!-- / HEADER -->

                        <!-- CONTENT -->
                        <div class="page-content">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link btn active" id="timeline-tab" data-toggle="tab"
                                       href="#timeline-tab-pane" role="tab"
                                       aria-controls="timeline-tab-pane" aria-expanded="true">Timeline</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn" id="about-tab" data-toggle="tab" href="#about-tab-pane"
                                       role="tab"
                                       aria-controls="about-tab-pane">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn" id="photos-videos-tab" data-toggle="tab"
                                       href="#photos-videos-tab-pane"
                                       role="tab"
                                       aria-controls="photos-tab-pane">Photos & Videos</a>
                                </li>

                            </ul>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade show active" id="timeline-tab-pane"
                                     aria-labelledby="timeline-tab">

                                    <div class="row">

                                        <div class="timeline col-12 col-sm-7 col-xl-9">

                                            <div class="profile-box add-post card">

                                                <div class="form">

                                                    <textarea class="w-100 p-4"
                                                              placeholder="Write something.."></textarea>

                                                    <footer
                                                        class="row no-gutters align-items-center justify-content-between bg-faded p-2">

                                                        <div class="row no-gutters">

                                                            <button type="button" class="btn btn-icon"
                                                                    aria-label="insert photo">
                                                                <i class="icon icon-file-image-box"></i>
                                                            </button>

                                                            <button type="button" class="btn btn-icon"
                                                                    aria-label="add person">
                                                                <i class="icon icon-person-plus"></i>
                                                            </button>

                                                            <button type="button" class="btn btn-icon"
                                                                    aria-label="add person">
                                                                <i class="icon icon-map-marker"></i>
                                                            </button>

                                                        </div>

                                                        <button type="post-button button" class="btn btn-primary"
                                                                aria-label="post">
                                                            POST
                                                        </button>

                                                    </footer>
                                                </div>
                                            </div>

                                            <div class="divider my-8"></div>

                                            <div class="timeline-item card mb-6">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between p-4">

                                                    <div class="user col">

                                                        <div
                                                            class="row no-gutters align-items-center justify-content-start">

                                                            <img class="avatar col-auto mr-2"
                                                                 src="../assets/images/avatars/garry.jpg">

                                                            <div class="col">

                                                                <div class="title font-weight-bold">

                                                                    <span class="username">Garry Newman</span>

                                                                    <span>posted on your timeline</span>

                                                                </div>

                                                                <div class="time text-muted">32 minutes ago</div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="col-auto btn btn-icon"
                                                            aria-label="more">
                                                        <i class="icon icon-dots-vertical"></i>
                                                    </button>

                                                </header>

                                                <div class="content">

                                                    <div class="message py-2 px-4">
                                                        Remember the place we were talking about the other night? Found
                                                        it!
                                                    </div>

                                                    <div class="post-media py-2 px-4">

                                                        <img class="media-img"
                                                             src="../assets/images/etc/early-sunrise.jpg">

                                                    </div>

                                                    <div class="row no-gutters align-items-center py-2 px-4">

                                                        <button type="button" class="like-button btn btn-link">
                                                            <i class="icon-heart-outline s-4"></i>
                                                            <span>Like (5)</span>
                                                        </button>

                                                        <button type="button" class="share-button btn btn-link">
                                                            <i class="icon-share s-4"></i>
                                                            <span>Share (21)</span>
                                                        </button>

                                                    </div>
                                                </div>

                                                <footer class="bg-faded p-4">

                                                    <div class="comment-count mb-4">
                                                        1 comments
                                                    </div>

                                                    <div class="comment row no-gutters mb-6">

                                                        <img src="../assets/images/avatars/alice.jpg"
                                                             class="col-auto avatar mr-2"/>

                                                        <div class="col">

                                                            <div class="row no-gutters align-items-center">

                                                                <span class="username font-weight-bold mr-1">Alice Freeman</span>

                                                                <span class="time text-muted">June 10, 2015</span>

                                                            </div>

                                                            <div class="message">
                                                                That’s a wonderful place. Lorem ipsum dolor sit amet,
                                                                consectetur adipiscing elit. Fusce et eleifend ligula.
                                                                Fusce posuere in sapien ac facilisis. Etiam sit amet
                                                                justo non felis ornare feugiat.
                                                            </div>

                                                            <div
                                                                class="actions row no-gutters align-items-center justify-content-start">

                                                                <a href="#" class="reply-button">Reply</a>

                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-flag s-4"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="reply row no-gutters">

                                                        <img src="../assets/images/avatars/profile.jpg"
                                                             class="col-auto avatar mr-2"/>

                                                        <form class="col">

                                                            <textarea class="p-2 mb-2 w-100"
                                                                      placeholder="Add a comment..."></textarea>

                                                            <button type="button"
                                                                    class="post-comment-button btn btn-sm btn-primary"
                                                                    aria-label="Post Comment">Post
                                                                Comment
                                                            </button>

                                                        </form>

                                                    </div>
                                                </footer>
                                            </div>

                                            <div class="timeline-item card mb-6">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between p-4">

                                                    <div class="user col">

                                                        <div
                                                            class="row no-gutters align-items-center justify-content-start">

                                                            <img class="avatar col-auto mr-2"
                                                                 src="../assets/images/avatars/andrew.jpg">

                                                            <div class="col">

                                                                <div class="title font-weight-bold">

                                                                    <span class="username">Andrew Green</span>

                                                                    <span>shared an article with you</span>

                                                                </div>

                                                                <div class="time text-muted">June 12, 2015</div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="col-auto btn btn-icon"
                                                            aria-label="more">
                                                        <i class="icon icon-dots-vertical"></i>
                                                    </button>

                                                </header>

                                                <div class="content">

                                                    <div class="message py-2 px-4">
                                                        Hey, man! Check this, it’s pretty awesome!
                                                    </div>

                                                    <div class="article py-2 px-4">

                                                        <div class="post-media">
                                                            <img class="media-img"
                                                                 src="../assets/images/etc/fallout.jpg">
                                                        </div>

                                                        <div class="title px-4 pt-4">The Fallout 4 Pip-Boy Edition Is
                                                            Back In Stock Now
                                                        </div>

                                                        <div class="subtitle px-4 pt-1">Kotaku</div>

                                                        <div class="excerpt p-4">The Fallout 4 Pip-Boy edition is back
                                                            in stock at Gamestop, for all 3 platforms. Additionally,
                                                            Walmart also has it in stock for the PS4 and Xbox One as of
                                                            this writing, as does Best Buy.
                                                        </div>

                                                    </div>

                                                    <div class="row no-gutters align-items-center py-2 px-4">

                                                        <button type="button" class="like-button btn btn-link">
                                                            <i class="icon-heart-outline s-4"></i>
                                                            <span>Like (98)</span>
                                                        </button>

                                                        <button type="button" class="share-button btn btn-link">
                                                            <i class="icon-share s-4"></i>
                                                            <span>Share (6)</span>
                                                        </button>

                                                    </div>
                                                </div>

                                                <footer class="bg-faded p-4">

                                                    <div class="comment-count mb-4">
                                                        1 comments
                                                    </div>

                                                    <div class="comment row no-gutters mb-6">

                                                        <img src="../assets/images/avatars/alice.jpg"
                                                             class="col-auto avatar mr-2"/>

                                                        <div class="col">

                                                            <div class="row no-gutters align-items-center">

                                                                <span class="username font-weight-bold mr-1">Alice Freeman</span>

                                                                <span class="time text-muted">June 10, 2015</span>

                                                            </div>

                                                            <div class="message">
                                                                That’s a wonderful place. Lorem ipsum dolor sit amet,
                                                                consectetur adipiscing elit. Fusce et eleifend ligula.
                                                                Fusce posuere in sapien ac facilisis. Etiam sit amet
                                                                justo non felis ornare feugiat.
                                                            </div>

                                                            <div
                                                                class="actions row no-gutters align-items-center justify-content-start">

                                                                <a href="#" class="reply-button">Reply</a>

                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-flag s-4"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="reply row no-gutters">

                                                        <img src="../assets/images/avatars/profile.jpg"
                                                             class="col-auto avatar mr-2"/>

                                                        <form class="col">

                                                            <textarea class="p-2 mb-2 w-100"
                                                                      placeholder="Add a comment..."></textarea>

                                                            <button type="button"
                                                                    class="post-comment-button btn btn-sm btn-primary"
                                                                    aria-label="Post Comment">Post
                                                                Comment
                                                            </button>

                                                        </form>

                                                    </div>
                                                </footer>
                                            </div>

                                            <div class="timeline-item card mb-6">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between p-4">

                                                    <div class="user col">

                                                        <div
                                                            class="row no-gutters align-items-center justify-content-start">

                                                            <img class="avatar col-auto mr-2"
                                                                 src="../assets/images/avatars/carl.jpg">

                                                            <div class="col">

                                                                <div class="title font-weight-bold">

                                                                    <span class="username">Carl Henderson</span>

                                                                    <span>shared something with you</span>

                                                                </div>

                                                                <div class="time text-muted">June 10, 2015</div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="col-auto btn btn-icon"
                                                            aria-label="more">
                                                        <i class="icon icon-dots-vertical"></i>
                                                    </button>

                                                </header>

                                                <div class="content">

                                                    <div class="message py-2 px-4">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        et eleifend ligula. Fusce posuere in sapien ac facilisis. Etiam
                                                        sit amet justo non felis ornare feugiat. Aenean lorem ex,
                                                        ultrices sit amet ligula sed...
                                                    </div>

                                                    <div class="row no-gutters align-items-center py-2 px-4">

                                                        <button type="button" class="like-button btn btn-link">
                                                            <i class="icon-heart-outline s-4"></i>
                                                            <span>Like (4)</span>
                                                        </button>

                                                        <button type="button" class="share-button btn btn-link">
                                                            <i class="icon-share s-4"></i>
                                                            <span>Share (1)</span>
                                                        </button>

                                                    </div>
                                                </div>

                                                <footer class="bg-faded p-4">

                                                    <div class="reply row no-gutters">

                                                        <img src="../assets/images/avatars/profile.jpg"
                                                             class="col-auto avatar mr-2"/>

                                                        <form class="col">

                                                            <textarea class="p-2 mb-2 w-100"
                                                                      placeholder="Add a comment..."></textarea>

                                                            <button type="button"
                                                                    class="post-comment-button btn btn-sm btn-primary"
                                                                    aria-label="Post Comment">Post
                                                                Comment
                                                            </button>

                                                        </form>

                                                    </div>
                                                </footer>
                                            </div>

                                            <div class="timeline-item card mb-6">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between p-4">

                                                    <div class="user col">

                                                        <div
                                                            class="row no-gutters align-items-center justify-content-start">

                                                            <img class="avatar col-auto mr-2"
                                                                 src="../assets/images/avatars/jane.jpg">

                                                            <div class="col">

                                                                <div class="title font-weight-bold">

                                                                    <span class="username">Jane Dean</span>

                                                                    <span>shared a video with you</span>

                                                                </div>

                                                                <div class="time text-muted">June 1, 2015</div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="col-auto btn btn-icon"
                                                            aria-label="more">
                                                        <i class="icon icon-dots-vertical"></i>
                                                    </button>

                                                </header>

                                                <div class="content">

                                                    <div class="post-media py-2 px-4">

                                                        <iframe src='https://player.vimeo.com/video/87993762'
                                                                width='500' height='281' frameborder='0'
                                                                webkitallowfullscreen mozallowfullscreen
                                                                allowfullscreen></iframe>
                                                        <div><a href='https://vimeo.com/87993762'>Durak (Stop) - 2014
                                                            (Animated Short Film)</a> from <a
                                                            href='https://vimeo.com/user6727540'>serdarcotuk</a> on <a
                                                            href='https://vimeo.com/'>Vimeo</a>.
                                                        </div>

                                                    </div>

                                                    <div class="row no-gutters align-items-center py-2 px-4">

                                                        <button type="button" class="like-button btn btn-link">
                                                            <i class="icon-heart-outline s-4"></i>
                                                            <span>Like (9)</span>
                                                        </button>

                                                        <button type="button" class="share-button btn btn-link">
                                                            <i class="icon-share s-4"></i>
                                                            <span>Share (115)</span>
                                                        </button>

                                                    </div>
                                                </div>

                                                <footer class="bg-faded p-4">

                                                    <div class="reply row no-gutters">

                                                        <img src="../assets/images/avatars/profile.jpg"
                                                             class="col-auto avatar mr-2"/>

                                                        <form class="col">

                                                            <textarea class="p-2 mb-2 w-100"
                                                                      placeholder="Add a comment..."></textarea>

                                                            <button type="button"
                                                                    class="post-comment-button btn btn-sm btn-primary"
                                                                    aria-label="Post Comment">Post
                                                                Comment
                                                            </button>

                                                        </form>

                                                    </div>
                                                </footer>
                                            </div>

                                        </div>

                                        <div class="timeline-sidebar col-12 col-sm-5 col-xl-3">

                                            <div class="profile-box latest-activity card">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">

                                                    <div class="title h6">Latest Activity</div>

                                                    <div class="more text-muted">See All</div>

                                                </header>

                                                <div class="content activities p-4">

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/alice.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Alice Freeman"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Alice Freeman</span>

                                                                <span class="message"> started following you.</span>

                                                            </div>

                                                            <span class="time text-muted">13 mins. ago</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/andrew.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Andrew Green"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Andrew Green</span>

                                                                <span class="message"> sent you a message.</span>

                                                            </div>

                                                            <span class="time text-muted">June 10,2015</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/garry.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Garry Newman"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Garry Newman</span>

                                                                <span class="message"> shared a public post with your group.</span>

                                                            </div>

                                                            <span class="time text-muted">June 9,2015</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/carl.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Carl Henderson"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Carl Henderson</span>

                                                                <span class="message"> wants to play Fallout Shelter with you.</span>

                                                            </div>

                                                            <span class="time text-muted">June 8,2015</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/jane.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Jane Dean"/>

                                                        <div class="col">

                                                            <div>

                                                                <span class="username md-accent-color">Jane Dean</span>

                                                                <span class="message"> started following you.</span>

                                                            </div>

                                                            <span class="time text-muted">June 7,2015</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/james.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Juan Carpenter"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Juan Carpenter</span>

                                                                <span class="message"> sent you a message.</span>

                                                            </div>

                                                            <span class="time text-muted">June 6,2015</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/joyce.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Judith Burton"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Judith Burton</span>

                                                                <span class="message"> shared a photo with you.</span>

                                                            </div>

                                                            <span class="time text-muted">June 5,2015</span>

                                                        </div>
                                                    </div>

                                                    <div class="activity row no-gutters py-4">

                                                        <img src="../assets/images/avatars/vincent.jpg"
                                                             class="col-auto avatar mr-4"
                                                             alt="Vincent Munoz"/>

                                                        <div class="col">

                                                            <div>

                                                                <span
                                                                    class="username md-accent-color">Vincent Munoz</span>

                                                                <span class="message"> shared a photo with you.</span>

                                                            </div>

                                                            <span class="time text-muted">June 4,2015</span>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="about-tab-pane" role="tabpanel"
                                     aria-labelledby="about-tab">

                                    <div class="row">

                                        <div class="about col-12 col-md-7 col-xl-9">

                                            <div class="profile-box info-box general card mb-4">

                                                <header class="h6 bg-primary text-auto p-4">
                                                    <div class="title">General Information</div>
                                                </header>

                                                <div class="content p-4">

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Gender</div>
                                                        <div class="info">Female</div>
                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Birthday</div>
                                                        <div class="info">12.01.1987</div>
                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Locations</div>

                                                        <div class="info location">
                                                            <span>Istanbul, Turkey</span>
                                                            <i class="icon-map-marker s-4"></i>
                                                        </div>

                                                        <div class="info location">
                                                            <span>New York, USA</span>
                                                            <i class="icon-map-marker s-4"></i>
                                                        </div>

                                                    </div>

                                                    <div class="info-line">
                                                        <div class="title font-weight-bold mb-1">About Me</div>
                                                        <div class="info">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Duis eget pharetra felis, sed ullamcorper
                                                            dui. Sed et elementum neque. Vestibulum pellente viverra
                                                            ultrices. Etiam justo augue, vehicula ac gravida a, interdum
                                                            sit amet nisl. Integer vitae nisi id nibh dictum mollis in
                                                            vitae tortor.
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="profile-box info-box work card mb-4">

                                                <header class="h6 bg-primary text-auto p-4">
                                                    <div class="title">Work</div>
                                                </header>

                                                <div class="content p-4">

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Occupation</div>
                                                        <div class="info">Developer</div>
                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Skills</div>
                                                        <div class="info">C#, PHP, Javascript, Angular, JS, HTML, CSS
                                                        </div>
                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Jobs</div>
                                                        <table class="info jobs">

                                                            <tr class="job">
                                                                <td class="company font-weight-bold pr-4">
                                                                    Self-Employed
                                                                </td>
                                                                <td class="date">2010 - Now</td>
                                                            </tr>

                                                            <tr class="job">
                                                                <td class="company font-weight-bold pr-4">Google</td>
                                                                <td class="date">2008 - 2010</td>
                                                            </tr>

                                                        </table>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="profile-box info-box contact card mb-4">

                                                <header class="h6 bg-primary text-auto p-4">
                                                    <div class="title">Contact</div>
                                                </header>

                                                <div class="content p-4">

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Address</div>
                                                        <div class="info">Ut pharetra luctus est quis sodales. Duis nisi
                                                            tortor, bibendum eget tincidunt, aliquam ac elit. Mauris nec
                                                            euismod odio.
                                                        </div>
                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Tel.</div>

                                                        <div class="info">
                                                            <span>+6 555 6600</span>
                                                        </div>

                                                        <div class="info">
                                                            <span>+9 555 5255</span>
                                                        </div>

                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Website</div>

                                                        <div class="info">
                                                            <span>withinpixels.com</span>
                                                        </div>

                                                    </div>

                                                    <div class="info-line mb-6">
                                                        <div class="title font-weight-bold mb-1">Emails</div>

                                                        <div class="info" ng-repeat="email in vm.about.contact.emails">
                                                            <span>mail@withinpixels.com</span>
                                                        </div>

                                                        <div class="info" ng-repeat="email in vm.about.contact.emails">
                                                            <span>mail@creapond.com</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="about-sidebar col-12 col-md-5 col-xl-3">

                                            <div class="profile-box friends card mb-4">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                                    <div class="title h6">Friends</div>
                                                    <div class="more text-muted">
                                                        <span>See</span>
                                                        <span>454</span>
                                                        <span>More</span>
                                                    </div>
                                                </header>

                                                <div class="content row no-gutters p-4">

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/garry.jpg">
                                                    </div>

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/carl.jpg">
                                                    </div>

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/jane.jpg">
                                                    </div>

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/garry.jpg">
                                                    </div>

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/vincent.jpg">
                                                    </div>

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/alice.jpg">
                                                    </div>

                                                    <div class="friend col-3 p-1">
                                                        <img class="w-100" src="../assets/images/avatars/andrew.jpg">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="profile-box groups card mb-4">

                                                <header
                                                    class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                                    <div class="title h6">Joined Groups</div>
                                                    <div class="more text-muted">
                                                        <span>See</span>
                                                        <span>6</span>
                                                        <span>More</span>
                                                    </div>
                                                </header>

                                                <div class="content p-4">

                                                    <div
                                                        class="group row no-gutters align-items-center justify-content-between mb-4">

                                                        <div class="col">

                                                            <div class="row no-gutters align-items-center">

                                                                <img class="logo col-auto mr-4"
                                                                     src="../assets/images/logos/android.png"
                                                                     alt="Android"/>

                                                                <div class="col">
                                                                    <div class="name">Android</div>
                                                                    <div class="category">Technology</div>
                                                                    <div class="members mt-4">1.856.546 people</div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-icon"
                                                                    aria-label="more">
                                                                <i class="icon icon-dots-vertical"></i>
                                                            </button>
                                                        </div>

                                                    </div>

                                                    <div
                                                        class="group row no-gutters align-items-center justify-content-between mb-4">

                                                        <div class="col">

                                                            <div class="row no-gutters align-items-center">

                                                                <img class="logo col-auto mr-4"
                                                                     src="../assets/images/logos/google.png"
                                                                     alt="Google"/>

                                                                <div class="col">
                                                                    <div class="name">Google</div>
                                                                    <div class="category">Web</div>
                                                                    <div class="members mt-4">1.226.121 people</div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-icon"
                                                                    aria-label="more">
                                                                <i class="icon icon-dots-vertical"></i>
                                                            </button>
                                                        </div>

                                                    </div>

                                                    <div
                                                        class="group row no-gutters align-items-center justify-content-between mb-4">

                                                        <div class="col">

                                                            <div class="row no-gutters align-items-center">

                                                                <img class="logo col-auto mr-4"
                                                                     src="../assets/images/logos/fallout.png"
                                                                     alt="Fallout"/>

                                                                <div class="col">
                                                                    <div class="name">Fallout</div>
                                                                    <div class="category">Games</div>
                                                                    <div class="members mt-4">526.142 people</div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-icon"
                                                                    aria-label="more">
                                                                <i class="icon icon-dots-vertical"></i>
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="photos-videos-tab-pane" role="tabpanel"
                                     aria-labelledby="photos-videos-tab">

                                    <div class="photos-videos">

                                        <div class="period mb-8">

                                            <div class="period-title mb-6">
                                                <span class="name h5">June 2015</span>
                                                <span class="info text-muted ml-4">5 Photos</span>
                                            </div>

                                            <div class="period-media row no-gutters">

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-sunset.jpg"
                                                         title="Mountain Sunset">

                                                    <div class="title p-4">Mountain Sunset</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-lake.jpg"
                                                         title="Mountain Lake">

                                                    <div class="title p-4">Mountain Lake</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/air-balloons.jpg"
                                                         title="Hot air balloons">

                                                    <div class="title p-4">Hot air balloons</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/cactus.jpg"
                                                         title="Cactus">

                                                    <div class="title p-4">Cactus</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/road-trip.jpg"
                                                         title="Road Trip">

                                                    <div class="title p-4">Road Trip</div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="period mb-8">

                                            <div class="period-title mb-6">
                                                <span class="name h5">May 2015</span>
                                                <span class="info text-muted ml-4">7 Photos, 3 Videos</span>
                                            </div>

                                            <div class="period-media row no-gutters">

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-sunset.jpg"
                                                         title="Mountain Sunset">

                                                    <div class="title p-4">Mountain Sunset</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-lake.jpg"
                                                         title="Mountain Lake">

                                                    <div class="title p-4">Mountain Lake</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/air-balloons.jpg"
                                                         title="Hot air balloons">

                                                    <div class="title p-4">Hot air balloons</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/cactus.jpg"
                                                         title="Cactus">

                                                    <div class="title p-4">Cactus</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/road-trip.jpg"
                                                         title="Road Trip">

                                                    <div class="title p-4">Road Trip</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-sunset.jpg"
                                                         title="Mountain Sunset">

                                                    <div class="title p-4">Mountain Sunset</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-lake.jpg"
                                                         title="Mountain Lake">

                                                    <div class="title p-4">Mountain Lake</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/air-balloons.jpg"
                                                         title="Hot air balloons">

                                                    <div class="title p-4">Hot air balloons</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/cactus.jpg"
                                                         title="Cactus">

                                                    <div class="title p-4">Cactus</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/road-trip.jpg"
                                                         title="Road Trip">

                                                    <div class="title p-4">Road Trip</div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="period mb-8">

                                            <div class="period-title mb-6">
                                                <span class="name h5">April 2015</span>
                                                <span class="info text-muted ml-4">5 Photos</span>
                                            </div>

                                            <div class="period-media row no-gutters">

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-sunset.jpg"
                                                         title="Mountain Sunset">

                                                    <div class="title p-4">Mountain Sunset</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-lake.jpg"
                                                         title="Mountain Lake">

                                                    <div class="title p-4">Mountain Lake</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/air-balloons.jpg"
                                                         title="Hot air balloons">

                                                    <div class="title p-4">Hot air balloons</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/cactus.jpg"
                                                         title="Cactus">

                                                    <div class="title p-4">Cactus</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100" src="../assets/images/etc/road-trip.jpg"
                                                         title="Road Trip">

                                                    <div class="title p-4">Road Trip</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-sunset.jpg"
                                                         title="Mountain Sunset">

                                                    <div class="title p-4">Mountain Sunset</div>

                                                </div>

                                                <div class="media mr-4 mb-4">

                                                    <img class="preview w-100"
                                                         src="../assets/images/etc/mountain-lake.jpg"
                                                         title="Mountain Lake">

                                                    <div class="title p-4">Mountain Lake</div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- / CONTENT -->
                    </div>
                </div>

            </div>

            <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar"
                 data-fuse-bar-position="right">
                <div class="list-group" class="date">

                    <div class="list-group-item subheader">TODAY</div>

                    <div class="list-group-item two-line">

                        <div class="text-muted">

                            <div class="h1"> Monday</div>

                            <div class="h2 row no-gutters align-items-start">
                                <span> 12</span>
                                <span class="h6">th</span>
                                <span> Jun</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Events</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Group Meeting</h3>

                            <p>In 32 Minutes, Room 1B</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Public Beta Release</h3>

                            <p>11:00 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Dinner with David</h3>

                            <p>17:30 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Q&A Session</h3>

                            <p>20:30 PM</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Notes</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Best songs to listen while working</h3>

                            <p>Last edit: May 8th, 2015</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Useful subreddits</h3>

                            <p>Last edit: January 12th, 2015</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Quick Settings</div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Notifications</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Cloud Sync</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Retro Thrusters</h3>
                        </div>

                        <div class="secondary-container">

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

<!-- Mirrored from fuse-bootstrap4-material.withinpixels.com/vertical-layout-below-toolbar-left-navigation/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 09:20:47 GMT -->
</html>