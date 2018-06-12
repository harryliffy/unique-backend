<?php 
session_start();
include 'connection.php';
require_once('header.php');
$items = mysql_query("SELECT * FROM loadmore ORDER BY id DESC LIMIT 8");
$_SESSION['logged_as']="dessy";
if(empty($_SESSION['logged_as']))
  header("location:login.php");
?>


	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/cs.css"><!-- 
|#################################
| 
| 
--></head>
 <div class="content">
                    <div id="chat" class="page-layout carded full-width">

                        <div class="top-bg bg-primary"></div>

                        <!-- CONTENT -->
                        <div class="page-content w-100 mx-auto px-0 pt-0 px-sm-4 pt-sm-8">

                            <div class="page-content-card row no-gutters">

                                <aside class="left-sidebar" data-fuse-bar="chat-left-sidebar"
                                       data-fuse-bar-media-step="lg">

                                    <div id="chat-left-sidebar-views" class="views">

                                        <div id="chats-view" class="view d-flex flex-column no-gutters">
                                            <!-- CHATS TOOLBAR -->
                                            <div class="toolbar">

                                                <!-- TOOLBAR TOP -->
                                                <div
                                                    class="toolbar-top row no-gutters align-items-center justify-content-between px-4">

                                                    <!-- USER AVATAR WRAPPER -->
                                                    <div class="avatar-wrapper">

                                                        <!-- USER AVATAR -->
                                                        <img id="user-avatar-button"
                                                             src="../assets/images/avatars/profile.jpg" class="avatar"
                                                             alt="John Doe"/>
                                                        <!-- / USER AVATAR -->

                                                        <!-- USER STATUS -->
                                                        <i class="icon- status online s-4"></i>
                                                        <!-- / USER STATUS -->

                                                    </div>
                                                    <!-- / USER AVATAR -->

                                                    <button type="button" class="btn btn-icon">
                                                        <i class="icon icon-dots-vertical"></i>
                                                    </button>
                                                </div>
                                                <!-- / TOOLBAR TOP -->

                                                <!-- TOOLBAR BOTTOM -->
                                                <div class="toolbar-bottom row align-items-center no-gutters px-4">

                                                    <!-- SEARCH -->
                                                    <div
                                                        class="search-wrapper md-elevation-1 row no-gutters align-items-center w-100 p-2">
                                                        <i class="icon-magnify s-4"></i>
                                                        <input class="col pl-2" type="text"
                                                               placeholder="Search or start new chat">
                                                    </div>
                                                    <!-- / SEARCH -->
                                                </div>
                                                <!-- / TOOLBAR BOTTOM -->

                                            </div>
                                            <!-- / CHATS TOOLBAR -->

                                            <!-- CHATS CONTENT -->
                                            <div class="content col custom-scrollbar">

                                                <!-- CHATS LIST-->
                                                <div class="chat-list">

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center unread">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Barrera.jpg"
                                                                 class="avatar" alt="Barrera"/>
                                                            <i class="icon- status do-not-disturb s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Barrera</span>
                                                            <p class="last-message text-truncate text-muted">pariatur
                                                                commodo sunt nulla</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">18/03/16</div>

                                                            <div class="bg-primary text-auto unread-message-count mt-2">
                                                                4
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center unread">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Blair.jpg" class="avatar"
                                                                 alt="Blair"/>
                                                            <i class="icon- status offline s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Blair</span>
                                                            <p class="last-message text-truncate text-muted">mollit
                                                                excepteur sit</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">01/05/16</div>

                                                            <div class="bg-primary text-auto unread-message-count mt-2">
                                                                3
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Christy.jpg"
                                                                 class="avatar" alt="Christy"/>
                                                            <i class="icon- status offline s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Christy</span>
                                                            <p class="last-message text-truncate text-muted">laboris
                                                                ex</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">29/03/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Copeland.jpg"
                                                                 class="avatar" alt="Copeland"/>
                                                            <i class="icon- status online s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Copeland</span>
                                                            <p class="last-message text-truncate text-muted">adipisicing
                                                                sit</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">25/04/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Harper.jpg"
                                                                 class="avatar" alt="Harper"/>
                                                            <i class="icon- status offline s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Harper</span>
                                                            <p class="last-message text-truncate text-muted">non dolore
                                                                Lorem</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">27/04/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Odessa.jpg"
                                                                 class="avatar" alt="Odessa"/>
                                                            <i class="icon- status away s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Odessa</span>
                                                            <p class="last-message text-truncate text-muted">aliqua
                                                                officia esse commodo</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">28/04/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Shauna.jpg"
                                                                 class="avatar" alt="Shauna"/>
                                                            <i class="icon- status online s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Shauna</span>
                                                            <p class="last-message text-truncate text-muted">nulla sunt
                                                                minim elit ullamco</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">01/05/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                </div>
                                                <!-- / CHATS LIST-->
                                            </div>
                                            <!-- / CHATS CONTENT -->

                                            <!-- CONTACTS BUTTON -->
                                            <button id="contacts-button" type="button"
                                                    class="btn btn-fab btn-primary a-align-bottom-right m-2"
                                                    aria-label="contacts button">
                                                <i class="icon icon-plus"></i>
                                            </button>
                                            <!-- / CONTACTS BUTTON -->
                                        </div>

                                        <div id="contacts-view" class="view d-none flex-column no-gutters">
                                            <!-- CONTACTS TOOLBAR -->
                                            <div class="toolbar bg-primary text-auto">

                                                <!-- TOOLBAR TOP -->
                                                <div class="toolbar-top row no-gutters align-items-center px-4">

                                                    <button type="button" class="back-to-chats-button btn btn-icon"
                                                            aria-label="back button">
                                                        <i class="icon icon-arrow-left"></i>
                                                    </button>

                                                    <span class="h6">CONTACTS</span>
                                                </div>
                                                <!-- / TOOLBAR TOP -->

                                                <!-- TOOLBAR BOTTOM -->
                                                <div class="toolbar-bottom row align-items-center no-gutters px-4">

                                                    <div
                                                        class="search-wrapper md-elevation-1 row no-gutters align-items-center w-100 p-2">
                                                        <i class="icon-magnify s-4"></i>
                                                        <input class="col pl-2" type="text"
                                                               placeholder="Search contact">
                                                    </div>
                                                </div>
                                                <!-- / TOOLBAR BOTTOM -->
                                            </div>
                                            <!-- / CONTACTS TOOLBAR -->

                                            <!-- CONTACTS CONTENT -->
                                            <div class="content col custom-scrollbar">

                                                <!-- CONTACTS LIST-->
                                                <div class="contact-list">

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            A
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Abbott.jpg"
                                                                 class="avatar" alt="Abbott"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Abbott</div>
                                                            <div class="mood text-muted">I never sign anything until I
                                                                pretend to read it first..
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Arnold.jpg"
                                                                 class="avatar" alt="Arnold"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Arnold</div>
                                                            <div class="mood text-muted">Looks like Andrew Jackson's
                                                                been tossed to the back of the bus.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            B
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Barrera.jpg"
                                                                 class="avatar" alt="Barrera"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Barrera</div>
                                                            <div class="mood text-muted">Love is going to bed
                                                                early.Marriage is going to sleep early.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Blair.jpg" class="avatar"
                                                                 alt="Blair"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Blair</div>
                                                            <div class="mood text-muted">I would be unstoppable. If i
                                                                could just get started.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Boyle.jpg" class="avatar"
                                                                 alt="Boyle"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Boyle</div>
                                                            <div class="mood text-muted">'GOOD MORNING COFFEE'....Meet
                                                                your maker!!!!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            C
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Christy.jpg"
                                                                 class="avatar" alt="Christy"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Christy</div>
                                                            <div class="mood text-muted">We always hold hands. If I let
                                                                go, she shops.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Copeland.jpg"
                                                                 class="avatar" alt="Copeland"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Copeland</div>
                                                            <div class="mood text-muted">I get enough exercise just
                                                                pushing my luck.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            E
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Estes.jpg" class="avatar"
                                                                 alt="Estes"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Estes</div>
                                                            <div class="mood text-muted">What comes after the man bun
                                                                hairstyle? The he-hive!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            H
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Harper.jpg"
                                                                 class="avatar" alt="Harper"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Harper</div>
                                                            <div class="mood text-muted">Always try to be modest and be
                                                                proud of it!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Helen.jpg" class="avatar"
                                                                 alt="Helen"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Helen</div>
                                                            <div class="mood text-muted">Why are there stitch marks on
                                                                zombies? Who's giving them medical attention?
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Henderson.jpg"
                                                                 class="avatar" alt="Henderson"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Henderson</div>
                                                            <div class="mood text-muted">I can't decide if people who
                                                                wear pajamas in public have given up on life or are
                                                                living it to the fullest.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            J
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Josefina.jpg"
                                                                 class="avatar" alt="Josefina"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Josefina</div>
                                                            <div class="mood text-muted">The fastest way to being happy
                                                                is to make other people happy. You go first
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            K
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Katina.jpg"
                                                                 class="avatar" alt="Katina"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Katina</div>
                                                            <div class="mood text-muted">If I was a rat,,, I wouldn't
                                                                give anyone my ass.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            L
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Lily.jpg" class="avatar"
                                                                 alt="Lily"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Lily</div>
                                                            <div class="mood text-muted">A zip line but from the sofa to
                                                                the fridge
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            M
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Mai.jpg" class="avatar"
                                                                 alt="Mai"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Mai</div>
                                                            <div class="mood text-muted">If a girl tells you she has a
                                                                nipple ring, the only correct response is 'I don't
                                                                believe you.'
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            N
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Nancy.jpg" class="avatar"
                                                                 alt="Nancy"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Nancy</div>
                                                            <div class="mood text-muted">Prison counts as a gated
                                                                community, right?
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Nora.jpg" class="avatar"
                                                                 alt="Nora"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Nora</div>
                                                            <div class="mood text-muted">I never date left handed women.
                                                                Righty tighty, lefty loosey.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            O
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Odessa.jpg"
                                                                 class="avatar" alt="Odessa"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Odessa</div>
                                                            <div class="mood text-muted">A day without sunshine is like,
                                                                night.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            R
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Reyna.jpg" class="avatar"
                                                                 alt="Reyna"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Reyna</div>
                                                            <div class="mood text-muted">I can't wait for summer in
                                                                Canada...
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            S
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Shauna.jpg"
                                                                 class="avatar" alt="Shauna"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Shauna</div>
                                                            <div class="mood text-muted">My take home pay doesn’t ven
                                                                take me home.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Shepard.jpg"
                                                                 class="avatar" alt="Shepard"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Shepard</div>
                                                            <div class="mood text-muted">I don't speak Spanish, but I'm
                                                                pretty sure 'Dora' means 'annoying'
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            T
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Tillman.jpg"
                                                                 class="avatar" alt="Tillman"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Tillman</div>
                                                            <div class="mood text-muted"></div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Trevino.jpg"
                                                                 class="avatar" alt="Trevino"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Trevino</div>
                                                            <div class="mood text-muted">Apparently, a rat and a plastic
                                                                tube does not count as a DIY abortion kit.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Tyson.jpg" class="avatar"
                                                                 alt="Tyson"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Tyson</div>
                                                            <div class="mood text-muted">I'm wondering why life keeps
                                                                teaching me lessons I have no desire to learn...
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            V
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Velazquez.jpg"
                                                                 class="avatar" alt="Velazquez"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Velazquez</div>
                                                            <div class="mood text-muted">Modulation in all things.</div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- / CONTACTS LIST-->
                                            </div>
                                            <!-- / CONTACTS CONTENT -->
                                        </div>

                                        <div id="user-view" class="view d-none flex-column no-gutters">
                                            <!-- CONTACTS TOOLBAR -->
                                            <div class="toolbar bg-primary text-auto d-flex flex-column no-gutters">

                                                <!-- TOOLBAR TOP -->
                                                <div class="toolbar-top row no-gutters align-items-center px-4">

                                                    <button type="button" class="back-to-chats-button btn btn-icon"
                                                            aria-label="back button">
                                                        <i class="icon icon-arrow-left"></i>
                                                    </button>
                                                </div>
                                                <!-- / TOOLBAR TOP -->

                                                <!-- TOOLBAR BOTTOM -->
                                                <div
                                                    class="toolbar-bottom col d-flex flex-column align-items-center justify-content-center">

                                                    <img src="../assets/images/avatars/profile.jpg" class="avatar huge"
                                                         alt="John Doe"/>

                                                    <div class="user-name h4 my-2">John Doe</div>

                                                </div>
                                                <!-- / TOOLBAR BOTTOM -->
                                            </div>
                                            <!-- / CONTACTS TOOLBAR -->

                                            <!-- CONTACTS CONTENT -->
                                            <div class="content col bg-faded p-4">

                                                <div class="card p-4">
                                                    <form>
                                                        <div class="form-group mt-4">
                <textarea class="form-control" id="exampleTextarea"
                          rows="3">it's a status....not your diary...</textarea>
                                                            <label for="exampleTextarea">Mood</label>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <!-- / CONTACTS CONTENT -->
                                        </div>

                                    </div>
                                </aside>

                                <div class="content col">

                                    <div id="chat-content-views" class="views">

                                        <!-- START -->
                                        <div id="start-view"
                                             class="view d-flex flex-column align-items-center justify-content-center">
                                            <div
                                                class="big-circle md-elevation-4 row align-items-center justify-content-center no-gutters">

                                                <i class="s-32 text-primary icon-hangouts"></i>

                                            </div>

                                            <span class="app-title h3 my-3">Chat App</span>

                                            <span class="text-muted h6 d-none d-xl-block">Select contact to start the chat!..</span>

                                            <button type="button" class="btn btn-secondary d-block d-xl-none"
                                                    data-fuse-bar-toggle="chat-left-sidebar">
                                                Select contact to start the chat!..
                                            </button>

                                        </div>
                                        <!-- / START -->

                                        <!-- CHAT -->
                                        <div id="chat-view"
                                             class="view flex-column align-items-center justify-content-center d-none">
                                            <!-- CHAT TOOLBAR -->
                                            <div
                                                class="toolbar row no-gutters align-items-center justify-content-between w-100 px-4">

                                                <div class="col">

                                                    <div class="row no-gutters align-items-center">

                                                        <!-- RESPONSIVE CHATS BUTTON-->
                                                        <button type="button" class="btn btn-icon"
                                                                data-fuse-bar-toggle="chat-left-sidebar">
                                                            <i class="icon icon-hangouts s-8"></i>
                                                        </button>
                                                        <!-- / RESPONSIVE CHATS BUTTON-->

                                                        <!-- CHAT CONTACT-->
                                                        <div class="chat-contact row no-gutters align-items-center">

                                                            <div class="avatar-wrapper mr-4">
                                                                <img src="../assets/images/avatars/Barrera.jpg"
                                                                     class="avatar" alt="Barrera"/>

                                                                <i class="icon icon- s-4 status do-not-disturb"></i>
                                                            </div>

                                                            <div class="chat-contact-name">
                                                                Barrera
                                                            </div>
                                                        </div>
                                                        <!-- / CHAT CONTACT-->

                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                            <!-- / CHAT TOOLBAR -->

                                            <!-- CHAT CONTENT -->
                                            <div class="chat-content col custom-scrollbar">

                                                <!-- CHAT MESSAGES -->
                                                <div class="chat-messages">

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">Quickly come to the meeting room 1B, we
                                                                have a big server issue
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">20/03/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">I’m having breakfast right now, can’t
                                                                you wait for 10 minutes?
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">20/04/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                </div>
                                                <!-- CHAT MESSAGES -->
                                            </div>
                                            <!-- / CHAT CONTENT -->

                                            <!-- CHAT FOOTER -->
                                            <div
                                                class="chat-footer row align-items-center justify-content-center w-100 p-2 pl-4">

                                                <!-- REPLY FORM -->
                                                <form class="reply-form row no-gutters align-items-center w-100">

                                                    <div class="form-group col mr-4">
            <textarea class="form-control" id="exampleTextarea"
                      placeholder="Type and hit enter to send message"></textarea>
                                                    </div>

                                                    <button type="button" class="btn btn-fab btn-primary"
                                                            aria-label="Send message">
                                                        <i class="icon icon-send"></i>
                                                    </button>

                                                </form>
                                                <!-- / REPLY FORM -->
                                            </div>
                                            <!-- / CHAT FOOTER-->
                                        </div>
                                        <!-- / CHAT -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / CONTENT -->
                    </div>

                    <script type="text/javascript" src="../assets/js/apps/chat/chat.js"></script>
                </div>