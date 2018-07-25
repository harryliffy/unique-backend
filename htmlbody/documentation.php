<?php
require_once('classes/core.php');
require_once('layout/header.php');
$activePage=new PageTracker();
$activePage->NavTracker('documentation');
$activePage->NavTracker('documentationParent');
$user=new user();

?>   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Content Table</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-columns"></span> Documentation</h2>
                </div>
                <!-- END PAGE TITLE -->                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">                                
                                <div class="panel-body">
                                    <h3>jQuery Tocify Plugin</h3>
                                    <p>A jQuery plugin that dynamically generates a table of contents. Tocify also optionally provides support for smooth scrolling, scroll highlighting, scroll page extending, and forward and back button support.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row">                        
                        <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-body">                            
                                    <div class="tocify-content">
                                        <h2><span class="active fa fa-star"></span> Getting Started</h2>
                                        <p><b>     Guided Installation </b></p>
Due to the number of products that need to be installed to get a working build environment, a guided installation package has been created to simplify the process. The guided installer contains most of the necessary parts and various optional components. For those parts that cannot be distributed such as the help compilers, it contains instructions on where to get them and how to install them if you need them. </p>

 <p> <b>Download the latest Sandcastle Help File Builder Guided Installer</b> </p>
 <p>
When using the guided installation, you can skip the Requirements section below as it takes care of all of the required steps. See the Recommended and Optional sections for additional tools not included in the guided installation that you may find useful. <p>


 <p><b>Requirements </b> </p>
 <p>
The latest version of the Sandcastle Help File Builder and Tools can always be found at the Sandcastle Help File Builder CodePlex project site (v2014.11.22.0 when this help file was produced). The .NET Framework 4.0 is required to run the tools.  </p>

 <p><b><span class="fa fa-warning"></span> Note</b> </p>
 <p> Note
The underlying Sandcastle tools were originally created by Microsoft. The help file builder uses them to produce the help file topics. Microsoft officially discontinued development in October 2012. The Sandcastle tools have been merged with the Sandcastle Help File Builder project and are developed and supported there now as part of that project.</p>
 <p>

In order to use the help file builder, the following additional tools are required based on the types of help files that you want to produce. Each must be installed prior to building a help file of that particular type:
</p>
 <p>
The HTML Help Workshop for building HTML Help 1 (.chm) help files.</p>

The MS Help 2 compiler for building MS Help 2 (.HxS) help files. This must be downloaded and installed as part of the Visual Studio 2005 SDK v4.0 or the Visual Studio 2008 SDK v1.0. Note that the latest version of the Visual Studio 2008 SDK does not contain the Help 2 compiler so you must download the 1.0 version. The latest release can be installed after it if you need it.</p>

The Help Library Manager and Help Library Agent for installing and viewing MS Help Viewer (.mshc) help files. These are installed as part of Visual Studio.</p>
<p>
The tools can be installed in any order. Be aware that if installing the Visual Studio 2005 or 2008 SDK to obtain the Help 2 compiler that both contain outdated versions of the Sandcastle tools. This old release can be ignored and should not cause any issues since the latest tools are installed in the same folder as the help file builder and it only looks there for them.</p>

<p><b>Recommended Additions</b> </p>
<p>
The following tools are optional but you will find them useful and it is highly recommended that they be installed as well.
</p>
<li>
To view MS Help 2 files without registering them, you can use the H2 Viewer (free for personal use). You can configure the help file builder to use it for viewing Help 2 output via the User Preferences dialog.
</li>
<li>
To view MS Help Viewer files with a full table of content and index support rather than in the default browser, you can use the H3 Viewer (free for personal use). You can configure the help file builder to use it for viewing MS Help Viewer output via the User Preferences dialog.</li>
<li>

To register MS Help 2 files both for testing and as part of your product installation, download the shareware tool H2Reg.exe from The Helpware Group.</li>
<li>

If you are going to document website projects, install the Custom Web Code Providers included as part of the Sandcastle tools installer. These make it easy to document website projects by extracting the XML comments files to a location of your choosing when the website is deployed.</li>
<li>

Optional Items
The following items are not required to use Sandcastle or the help file builder but you may find them useful.</li>
</p>
    
    <img src="https://i.ytimg.com/vi/T0Jqdjbed40/mqdefault.jpg" alt="">
    
<img src="https://i.ytimg.com/vi/hnCmSXCZEpU/mqdefault.jpg" alt=""> 
<img src="https://i.ytimg.com/vi/T0Jqdjbed40/mqdefault.jpg" alt=""> 

                                        </p>
                                        <p>&nbsp;</p>
                                        
                                        <h2><i class="fa fa-folder-open" ></i> Introduction</h2>
                                        <p>In hac habitasse platea dictumst. Proin sit amet dui lorem. Mauris tempor vehicula massa a venenatis. Morbi auctor nunc leo, sed blandit urna mollis ac. Nunc sapien mi, aliquet vitae viverra in, euismod id ligula. Etiam laoreet arcu eros, vitae consectetur nulla auctor vitae. Aenean dictum venenatis lacus ac luctus. Pellentesque ac metus sed nibh lobortis sodales euismod eu mauris. Nam nec tellus nisl. Nullam faucibus, felis in convallis eleifend, tortor arcu sagittis tortor, a aliquam neque libero ut nibh. Duis venenatis faucibus lobortis. Etiam dignissim ante quis turpis egestas fringilla at consequat purus. Duis ornare congue sapien eget pharetra. Donec sit amet consectetur nulla. Morbi fermentum auctor erat, ac dignissim justo tincidunt nec.</p>
                                        <p>Suspendisse fermentum mollis pellentesque. Fusce mattis rutrum mi, nec dictum libero. Fusce quis lacus purus. Donec vehicula, arcu eget viverra aliquam, tortor libero ultrices lorem, non sagittis est elit eu nulla. Vestibulum nunc erat, varius ut consequat sed, pharetra vel velit. Integer hendrerit justo ac facilisis pulvinar. Praesent luctus condimentum enim, sit amet bibendum ipsum dignissim non. Morbi nec vulputate orci. Curabitur a porttitor eros, vel pharetra diam.</p>
                                        <p>&nbsp;</p>
                                        
                                        <h2>Installation</h2>
                                        <p>Eget elementum ipsum semper in. Pellentesque vel dignissim enim. Aliquam volutpat placerat felis, vel condimentum elit ultrices at. Donec sed semper risus, tempor convallis massa. Duis lectus velit, efficitur et dolor ac, consectetur placerat lacus. Donec volutpat commodo tellus et interdum. Suspendisse urna lectus, lobortis id aliquet in, congue at felis. Suspendisse eget sollicitudin elit.</p>
                                        <p>Quisque gravida, nulla ac euismod vestibulum, libero odio mollis nunc, vitae ultricies ante velit eu lectus. In hac habitasse platea dictumst. Morbi luctus nisi commodo risus tincidunt, a sagittis quam placerat. Phasellus lobortis diam non molestie gravida. Praesent gravida velit eget lacus iaculis dapibus. Nulla facilisi. Nam cursus mattis orci, in malesuada lectus. Cras laoreet suscipit pulvinar. Donec metus nulla, malesuada eu leo sit amet, tempus pretium leo. Quisque lacinia leo a mauris iaculis malesuada. Aliquam non mauris lacus. Quisque ut mauris cursus, congue metus non, tincidunt lorem. Pellentesque volutpat aliquet sem eget aliquet. Pellentesque vehicula eu est eget porttitor. Donec lorem nulla, pharetra ut molestie et, commodo vitae ipsum. Nullam dictum finibus orci ut tincidunt.</p>                                                                               
                                        <h4>Adding Features</h4>                                    
                                        <p>Nulla condimentum laoreet interdum. Phasellus sit amet libero tempus, convallis lectus vitae, dictum libero. Donec mauris ante, fermentum vel est eget, aliquam lacinia enim. Duis ultrices est bibendum neque condimentum, eu luctus nisl vehicula. Nam facilisis felis luctus dolor ultricies posuere. Nam nec semper dolor. Aenean vitae ante et nunc placerat venenatis. Proin est neque, volutpat ut massa id, sollicitudin rhoncus ipsum.</p>                                        
                                        <h4>Front End</h4>                                        
                                        <p>Phasellus commodo, orci sit amet pharetra semper, sem neque placerat arcu, vitae interdum turpis magna at ante. In hac habitasse platea dictumst. In sed vehicula est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus urna est, rhoncus eget nibh quis, tempus vestibulum justo. Vivamus eu ligula vel odio porttitor fermentum. Nullam iaculis porta felis, a malesuada magna porttitor eget. Ut pulvinar est at nisl commodo, blandit pulvinar ipsum porttitor. Aenean pellentesque, mi vel maximus egestas, enim massa accumsan risus, vitae ornare eros mauris vitae nunc. Etiam in placerat lacus. Sed in fringilla orci. Sed elit felis, rutrum non nisl eget, auctor pretium libero. Nullam ac massa lacinia, volutpat orci eget, elementum velit. Sed justo dolor, tempor vel tristique ut, posuere et magna. Donec volutpat purus pellentesque orci efficitur, ut egestas ligula viverra.</p>
                                        <p>Vivamus quis vehicula metus, tristique facilisis nunc. Mauris sollicitudin commodo lectus, at dapibus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ac lacus massa. Curabitur tincidunt orci ligula, fermentum placerat mauris rhoncus vel. Curabitur felis urna, consectetur vel euismod nec, vestibulum id nisl. Suspendisse arcu nulla, elementum ac commodo id, auctor sit amet lacus. Aliquam erat volutpat. Praesent lobortis turpis a tellus vehicula molestie. Phasellus rhoncus felis elit.</p>
                                        <p>&nbsp;</p>
                                        
                                        <h4>Back End</h4>                                        
                                        <p>Phasellus commodo, orci sit amet pharetra semper, sem neque placerat arcu, vitae interdum turpis magna at ante. In hac habitasse platea dictumst. In sed vehicula est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus urna est, rhoncus eget nibh quis, tempus vestibulum justo. Vivamus eu ligula vel odio porttitor fermentum. Nullam iaculis porta felis, a malesuada magna porttitor eget. Ut pulvinar est at nisl commodo, blandit pulvinar ipsum porttitor. Aenean pellentesque, mi vel maximus egestas, enim massa accumsan risus, vitae ornare eros mauris vitae nunc. Etiam in placerat lacus. Sed in fringilla orci. Sed elit felis, rutrum non nisl eget, auctor pretium libero. Nullam ac massa lacinia, volutpat orci eget, elementum velit. Sed justo dolor, tempor vel tristique ut, posuere et magna. Donec volutpat purus pellentesque orci efficitur, ut egestas ligula viverra.</p>
                                        <p>Vivamus quis vehicula metus, tristique facilisis nunc. Mauris sollicitudin commodo lectus, at dapibus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ac lacus massa. Curabitur tincidunt orci ligula, fermentum placerat mauris rhoncus vel. Curabitur felis urna, consectetur vel euismod nec, vestibulum id nisl. Suspendisse arcu nulla, elementum ac commodo id, auctor sit amet lacus. Aliquam erat volutpat. Praesent lobortis turpis a tellus vehicula molestie. Phasellus rhoncus felis elit.</p>
                                        <p>&nbsp;</p>
                                        
                                        <h2>Folder structure</h2>
                                        <p>Nam enim est, porta at velit ac, interdum sollicitudin massa. Duis mauris turpis, dictum vitae ante sed, lobortis tincidunt velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut a nulla feugiat, pellentesque quam ac, porta magna. Donec commodo, odio in scelerisque pretium, orci risus tempor massa, vitae scelerisque nisi nisi eget dui. Donec condimentum eu odio vitae interdum. Suspendisse ut semper leo. Sed laoreet volutpat congue. Mauris dolor risus, ultricies vel malesuada in, dignissim eu quam. Sed varius iaculis urna, ac convallis tortor pellentesque eget.</p>
                                        <p>Donec blandit tellus felis, et tempus odio feugiat vitae. Sed eu consectetur lacus. Nullam nibh ligula, scelerisque non convallis eu, euismod eget tellus. Integer hendrerit et turpis et porttitor. Aliquam at maximus diam. Mauris finibus efficitur consectetur. In nisl metus, pharetra ac elit non, egestas semper metus. Proin faucibus lacus nec est ultricies, at efficitur justo volutpat. Vestibulum condimentum sodales purus, pulvinar gravida lorem porttitor ac. Cras eget arcu a sapien tincidunt pretium. Maecenas a lectus dolor. Nulla non luctus ante. In vestibulum, mauris id bibendum viverra, lectus mauris eleifend felis, ac consectetur massa ante sit amet enim. Phasellus aliquam est justo, in facilisis tellus volutpat in. Fusce cursus magna ipsum, et aliquet urna pretium eget. Ut lacinia neque ut purus pulvinar, eget hendrerit massa scelerisque.</p>
                                        <p>Morbi a augue at velit porttitor tempus sit amet sit amet nisl. Suspendisse neque nisl, sagittis ut vulputate sed, ullamcorper eu neque. Integer ac elementum sem, a vestibulum mauris. Fusce lacus erat, laoreet quis nibh ultrices, vulputate consequat nibh. Vestibulum nisl diam, porta quis turpis fermentum, laoreet pretium justo. Vestibulum faucibus massa lectus, pulvinar ultricies sapien varius vel. Pellentesque odio elit, tincidunt facilisis enim nec, venenatis imperdiet justo. Etiam varius sed velit at blandit.</p>
                                        <p>&nbsp;</p>
                                        
                                                                       
                                        
                                        <h4>Donec sit amet nunc</h4>
                                        <p>Ac ante porta tempus at eget dolor. In euismod iaculis egestas. Integer felis purus, blandit quis nisl vel, pellentesque varius enim. Ut et rutrum purus. Pellentesque suscipit ex vitae urna fermentum ornare nec non elit. Morbi vel ornare tortor. In eleifend lacus ut purus euismod, vitae cursus velit sagittis. Nam tincidunt ac neque quis eleifend. Praesent pharetra, urna laoreet rutrum sagittis, elit nulla aliquam nunc, in aliquet tortor metus nec tellus. Nullam eu justo neque.</p>
                                        <p>Proin lobortis tempor arcu ut ornare. Praesent bibendum nibh sodales, congue nisi vitae, convallis enim. Sed sed mollis leo, nec malesuada eros. Praesent convallis nisl augue, et congue magna interdum a. Nunc tellus mi, dapibus nec orci sed, scelerisque maximus urna. Nulla a orci eget enim vulputate tristique dignissim quis odio. Aenean tristique fermentum sapien. Nunc non ligula convallis, aliquet mauris eu, bibendum ex. Sed id imperdiet lacus, vitae semper magna. Phasellus risus ipsum, ullamcorper vel elit nec, convallis vehicula elit.</p>                                        
                                        <h4>Cras sed sodales nunc</h4>
                                        <p>Pellentesque a risus luctus, ullamcorper magna ut, fringilla quam. Fusce lacinia ipsum sem, sed vulputate lacus molestie a. Maecenas ullamcorper interdum maximus. Integer sed maximus orci. Proin vitae nulla sed augue laoreet vulputate. Maecenas odio lectus, pretium in molestie et, facilisis nec urna. Nunc luctus mollis metus lobortis ornare. Vestibulum viverra accumsan leo in pharetra. Nulla id enim non ipsum lobortis sagittis. Vivamus ac dolor ac nisl lacinia vulputate.</p>                                        
                                        <h4>Aliquam eget tempor mauris</h4> 
                                        <p>Vestibulum euismod dolor et lectus porta, maximus vestibulum velit tristique. Morbi ornare ultricies nibh in bibendum. Vestibulum laoreet porttitor libero luctus ultricies. In hac habitasse platea dictumst. Quisque blandit velit eget magna luctus mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse feugiat imperdiet magna, eu auctor massa facilisis in. Curabitur accumsan mi et ligula fermentum, sollicitudin fermentum lacus ullamcorper. Proin malesuada quis sapien ac auctor. Nulla facilisi. Etiam viverra dictum quam, ut sollicitudin nisl fringilla vitae.</p>
                                        <p>Suspendisse mollis, sapien eget scelerisque malesuada, tortor ex pharetra elit, et elementum mauris libero a felis. In quis risus facilisis, commodo magna eleifend, varius metus. Aenean quis lorem enim. Cras aliquet, quam vehicula sodales vulputate, odio mi pretium lorem, sit amet vestibulum ipsum nisl ut massa. Vestibulum pharetra est in orci mollis, sit amet condimentum eros convallis. Sed in elit dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus sit amet nibh et nibh vestibulum vestibulum. Curabitur maximus dignissim sem, sit amet vulputate nisl ultrices sit amet.</p>
                                        <p>&nbsp;</p>
                                        
                                        <h2>Upgrade &amp; Support</h2>
                                        <p>Mauris pretium dignissim pulvinar. Vivamus lectus ante, ullamcorper in turpis eu, tristique gravida dui. Nullam mattis lacus et nisl consequat, id sodales metus luctus. In placerat sed urna at tempor. Duis commodo ut mauris eget scelerisque. Nunc laoreet purus a lacus sagittis, vitae tempor lorem lobortis. Sed vitae diam arcu. Ut sit amet tellus quam. Aliquam tristique velit mauris. Mauris tempor neque eget diam laoreet volutpat. Fusce a gravida lectus, faucibus condimentum nibh. Aenean ac metus vitae nisl laoreet faucibus. Sed suscipit vel magna id sodales.</p>
                                        <p>Donec congue cursus metus, eget sodales nisl gravida in. Phasellus molestie massa nec ex efficitur, mattis tempus sem luctus. Morbi cursus fringilla elementum. Phasellus bibendum turpis nec eros tristique venenatis. Ut fermentum et lacus luctus congue. Pellentesque mattis nunc sapien, bibendum malesuada nisi ultricies ut. Sed ut rhoncus metus. Nulla ultrices ut orci sit amet faucibus. Nam et ultricies tortor. Mauris ornare ultricies enim, sit amet tempus libero hendrerit a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae lorem lacus.</p>
                                        <p>Vestibulum sagittis sapien eget eros commodo, in iaculis nisi tristique. Vivamus ultrices, ex id auctor semper, ante metus aliquet lacus, eget vulputate ante risus in dui. Cras id lacus ac enim efficitur aliquet. Vestibulum sed tempor odio, sed laoreet tellus. In hac habitasse platea dictumst. Mauris cursus auctor sapien, eget dictum odio ornare eget. Pellentesque vestibulum aliquet est, maximus sodales libero sodales vitae. Curabitur dictum ante nunc, vitae pharetra tellus tincidunt eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        <p>In varius erat pharetra, cursus lorem quis, aliquam eros. Cras aliquet aliquet mattis. Duis id posuere quam, non ornare ligula. Phasellus non odio felis. Nunc quis velit et lorem euismod congue id ac nunc. Aenean ut orci in tortor pulvinar ornare at ac risus. Cras dictum, arcu eleifend semper fermentum, arcu leo ullamcorper est, at porttitor nisl dui id dolor. Vestibulum urna felis, euismod in egestas sed, hendrerit in tortor. Phasellus in tellus sapien. Integer mattis nisi orci, eu mollis risus imperdiet non. Curabitur id semper ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec lorem est, bibendum sit amet nulla quis, bibendum sagittis risus. Integer vel nisl aliquet, placerat dui vitae, pretium nisl.</p>                                        
                                        
                                        <h4>Components</h4>
                                        <p>Nullam id erat ut nibh accumsan luctus ut sit amet eros. Etiam vitae tempor odio, egestas congue ex. Donec in vestibulum tortor. Sed condimentum libero sit amet ipsum volutpat, ac mattis leo porttitor. Suspendisse cursus tempus metus at molestie. Etiam sagittis, massa nec tincidunt convallis, nunc augue ultricies magna, sit amet consectetur nisl nisi quis justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce odio felis, vestibulum nec volutpat at, iaculis in mauris.</p>
                                        <p>Morbi pharetra sit amet lectus et egestas. Ut augue nibh, pellentesque nec justo vitae, ornare volutpat sem. Mauris quis posuere est, varius faucibus nisi. Praesent dignissim dolor vitae risus auctor porta eget venenatis risus. Fusce posuere metus ac magna posuere commodo. Praesent placerat purus sit amet diam euismod, non tristique urna maximus. Proin egestas, mi non scelerisque iaculis, ipsum lectus porta massa, a viverra ante urna non nisi. Nulla lorem odio, feugiat quis iaculis vel, aliquet ut felis. Praesent ultrices tortor ut ipsum molestie, sed hendrerit nunc sagittis. Etiam luctus sapien eu risus imperdiet, sit amet dapibus quam efficitur.</p>
                                        <p>Donec lacinia orci urna, at mollis sem tempor at. Nulla interdum ultrices eros, et scelerisque lectus sodales at. Donec eu vehicula ex, vitae pellentesque sem. Praesent placerat ut nunc ac bibendum. In eget finibus neque. Aliquam pellentesque nisi pulvinar purus molestie, non porta ipsum blandit. Proin pretium sapien justo, id molestie nisi finibus at. Sed tempor finibus urna, eu posuere orci tincidunt dignissim. Donec eget lacus et nulla egestas auctor. Ut bibendum eget eros et efficitur. Aliquam egestas mauris non fringilla sagittis. Aliquam nec libero eu leo auctor sagittis. Aenean facilisis pretium porttitor. Vivamus mattis interdum augue nec convallis.</p>                                        
                                        <h4>Mauris eget tincidunt nisi</h4>
                                        <p>Donec a lacinia lectus. Curabitur fermentum tortor quis elit varius, suscipit consequat nunc lacinia. Donec at sem augue. Mauris auctor eros non bibendum vulputate. Sed non nisi vitae lorem cursus ultrices. Donec ullamcorper congue finibus.</p>
                                        <p>Etiam porttitor fringilla libero sit amet scelerisque. Maecenas maximus nunc quis odio laoreet fermentum. Nulla ultricies fermentum convallis. Ut iaculis, diam quis elementum egestas, tortor elit malesuada risus, ut fermentum tortor nisl sit amet metus. Sed risus leo, blandit et pharetra a, pretium eu risus. Vivamus porttitor varius elit quis convallis. Aliquam a libero egestas, suscipit libero sed, euismod urna. Cras dapibus ultricies dui, id congue urna vestibulum non. Phasellus maximus erat quis tellus aliquet, eu tincidunt diam laoreet. Etiam vestibulum ex ac tempor tincidunt. Phasellus vestibulum quam lacinia nibh dapibus, non facilisis quam volutpat. Nullam nec fringilla quam. Sed condimentum ut est vitae blandit. Morbi aliquam, risus sit amet sollicitudin vulputate, ante sem volutpat elit, vestibulum tristique risus lacus nec elit. Sed laoreet est sed purus congue viverra. Donec tellus dolor, ultrices a venenatis id, pellentesque quis odio.</p>
                                        <p>Donec eget consectetur diam. Etiam id dolor mollis est dictum scelerisque eu at nunc. Sed congue viverra sapien eget feugiat. Integer ut molestie eros, eget sagittis mauris. Maecenas ullamcorper sit amet quam sit amet tristique. Etiam placerat venenatis dui, eget convallis sem iaculis convallis. Quisque molestie justo et vestibulum porttitor. Suspendisse potenti. Sed et ligula nec tortor egestas cursus.</p>                                

                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="position: relative;">
                            <div id="tocify"></div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                 
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->          
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE - ->
        <script type="text/javascript" src="js/settings.js"></script>
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
        <script>
            $(function() {
                var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h2, h3, h4" });
            });
        </script>
        
    <!-- END SCRIPTS -->         
    </body>

</html>






