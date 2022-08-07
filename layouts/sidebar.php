<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-sm.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-sm.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                
                <li class="menu-title"><span><?=$lang['t-menu']?></span></li>
                <li class="nav-item active">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i data-feather="home" class="icon-dual"></i> <span><?=$lang['t-dashboards']?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                   
                            <li class="nav-item">
                                <a href="index.php" class="nav-link"><?=$lang['t-dashboad']?></a>
                            </li>
                           
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
               
                



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSchool" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSchool">
                        <i class="ri-lightbulb-flash-line"></i> <span data-key="t-l">สถานะการใช้งาน</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSchool"> 
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?module=lamp" class="nav-link" data-key="t-all"> <?=$lang['t-all']?> </a>
                            </li>
                            <li class="nav-item">
                                <a href="?module=lamp&page=lost" class="nav-link" data-key="t-all-lost"> <?=$lang['t-all-lost']?> </a>
                            </li>
                            <li class="nav-item">
                                <a href="?module=lamp&page=wrong" class="nav-link" data-key="t-wrong"> <?=$lang['t-wrong']?> </a>
                            </li>
                            <li class="nav-item">
                                <a href="?module=lamp&page=battery" class="nav-link" data-key="t-battery"> <?=$lang['t-battery']?> </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPeriod" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPeriod">
                        <i class="ri-tools-fill"></i> <span data-key="t-school">D-fixx</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPeriod">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?module=dfixx" class="nav-link" data-key="t-dfixx"> <?=$lang['t-dfixx']?> </a>
                            </li>           
                        </ul>
                    </div>
                </li>


              
            <!--    <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarStudent" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarStudent">
                        <i class="ri-folder-user-line"></i> <span data-key="t-school">นักเรียน</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarStudent">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?module=student" class="nav-link" data-key="t-student"> <?=$lang['t-student']?> </a>
                            </li>
                            <li class="nav-item">
                                <a href="?module=student&page=student-new" class="nav-link" data-key="t-student-new"> <?=$lang['t-student-new']?> </a>
                            </li>

                            <li class="nav-item">
                                <a href="?module=student&page=student-in" class="nav-link" data-key="t-student-in"> <?=$lang['t-student-in']?> </a>
                            </li>

                            <li class="nav-item">
                                <a href="?module=student&page=student-out" class="nav-link" data-key="t-student-out"> <?=$lang['t-student-out']?> </a>
                            </li>

                            <li class="nav-item">
                                <a href="?module=student&page=student-inroom" class="nav-link" data-key="t-student-inroom"> <?=$lang['t-student-inroom']?> </a>
                            </li>
                            <li class="nav-item">
                                <a href="?module=student&page=student-leave" class="nav-link" data-key="t-student-leave"> <?=$lang['t-student-leave']?> </a>
                            </li>
                 
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTeacher" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarTeacher">
                        <i class="ri-file-user-line"></i> <span data-key="t-school">บุคลากร</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTeacher">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?module=teacher" class="nav-link" data-key="t-teacher"> <?=$lang['t-teacher']?> </a>
                            </li>
                            <li class="nav-item">
                                <a href="?module=teacher&page=teacher-new" class="nav-link" data-key="t-teacher-new"> <?=$lang['t-teacher-new']?> </a>
                            </li>

                            <li class="nav-item">
                                <a href="?module=teacher&page=teacher-in" class="nav-link" data-key="t-teacher-in"> <?=$lang['t-teacher-in']?> </a>
                            </li>

                            <li class="nav-item">
                                <a href="?module=teacher&page=teacher-out" class="nav-link" data-key="t-teacher-out"> <?=$lang['t-teacher-out']?> </a>
                            </li>

                            <li class="nav-item">
                                <a href="?module=teacher&page=teacher-resign" class="nav-link" data-key="t-teacher-resign"> <?=$lang['t-teacher-resign']?> </a>
                            </li>

                  
                            <li class="nav-item">
                                <a href="?module=teacher&page=teacher-chart" class="nav-link" data-key="t-teacher-chart"> <?=$lang['t-teacher-chart']?> </a>
                            </li>
                 
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAssets" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAssets">
                        <i class="ri-stack-line"></i> <span data-key="t-school">ครุภัณฑ์</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAssets">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?module=assets" class="nav-link" data-key="t-assets"> <?=$lang['t-assets']?> </a>
                            </li>
                            
                 
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUsers">
                        <i class="ri-map-pin-user-line"></i> <span data-key="t-users">ผู้ใช้งาน</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUsers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?module=users" class="nav-link" data-key="t-users"> <?=$lang['t-users']?> </a>
                            </li>
                            
                 
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSystems" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSystems">
                        <i class="ri-sound-module-line"></i> <span data-key="t-systems">ตั้งค่าระบบ</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSystems">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item active">
                                <a href="?module=systems" class="nav-link active" data-key="t-systems"> <?=$lang['t-systems']?> </a>
                            </li>
                            
                 
                        </ul>
                    </div>
                </li>







         
                
                

                <li class="nav-item">
                    <a class="nav-link menu-link" href="signin.php">
                    <i class="ri-login-circle-line"></i> <span><?=$lang['t-signin']?></span>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="signout.php">
                    <i class="ri-logout-circle-line text-danger"></i> <span><?=$lang['t-signout']?></span>
                    </a>
                </li>

                

                

                

                

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <!-- <div class="sidebar-background"></div> -->
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>