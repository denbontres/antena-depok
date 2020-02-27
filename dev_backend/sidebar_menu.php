<?php

if($_SESSION['level']=='superadmin'){
  //echo "<li><a href='?module=Data-User' title='Manajemen Users'>&nbsp;&nbsp;Manajemen Users</a></li>";
		echo"<li class='nav-header'>Navigation</li>
                    <li class='has-sub active'><a href='?module=Beranda'><i class='fa fa-laptop'></i> <span>Dashboard</span></a>
                    </li>
                    <li class='has-sub'><a href='?module=Data-User'><i class='fa fa-users'></i> <span>Manajemen Users</span></a>
                    </li>
                    <li class='has-sub'>
                        <a href='javascript:;'>
                            <b class='caret pull-right'></b>
                            <i class='fa fa-align-left'></i> 
                            <span>Menu Posts</span>
                        </a>
                        <ul class='sub-menu'>

                            <li><a href='?page=Data-Kategori'>Kategori</a></li>
                            <li><a href='?page=Data-Tag'>Tagline</a></li>
                            <li><a href='?page=Data-Posts'>Posts</a></li>

                            <li class='has-sub'>
                                <a href='javascript:;'>
                                    <b class='caret pull-right'></b>
                                    Menu 1.1
                                </a>
                                <ul class='sub-menu'>
                                    <li class='has-sub'>
                                        <a href='javascript:;'>
                                            <b class='caret pull-right'></b>
                                            Menu 2.1
                                        </a>
                                        <ul class='sub-menu'>
                                            <li><a href='javascript:;'>Menu 3.1</a></li>
                                            <li><a href='javascript:;'>Menu 3.2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='javascript:;'>Menu 2.2</a></li>
                                    <li><a href='javascript:;'>Menu 2.3</a></li>
                                </ul>
                            </li>

                            <li><a href='javascript:;'>Menu 1.2</a></li>
                            <li><a href='javascript:;'>Menu 1.3</a></li>
                        </ul>
                    </li>
                    
                    <li><a href='javascript:;' class='sidebar-minify-btn' data-click='sidebar-minify'><i class='fa fa-angle-double-left'></i></a></li>";
  
}

elseif($_SESSION['level']=='manager'){
    echo"<li class='nav-header'>Navigation</li>
                    <li class='has-sub active'><a href='?module=Beranda'><i class='fa fa-laptop'></i> <span>Dashboard</span></a>
                    </li>
                    <li class='has-sub'>
                        <a href='javascript:;'>
                            <b class='caret pull-right'></b>
                            <i class='fa fa-align-left'></i> 
                            <span>Menu Ticket</span>
                        </a>
                        <ul class='sub-menu'>
                            <li><a href='?module=Data-Ticket'>Ticket</a></li>

                        </ul>
                    </li>
                    
                    <li><a href='javascript:;' class='sidebar-minify-btn' data-click='sidebar-minify'><i class='fa fa-angle-double-left'></i></a></li>";
}

elseif($_SESSION['level']=='staff'){
	echo"<li class='nav-header'>Navigation</li>
                    <li class='has-sub active'><a href='?module=Beranda'><i class='fa fa-laptop'></i> <span>Dashboard</span></a>
                    </li>
                    <li class='has-sub'>
                        <a href='javascript:;'>
                            <b class='caret pull-right'></b>
                            <i class='fa fa-align-left'></i> 
                            <span>Menu Ticket</span>
                        </a>
                        <ul class='sub-menu'>
                            <li><a href='?module=Data-Ticket'>Ticket</a></li>

                        </ul>
                    </li>
                    
                    <li><a href='javascript:;' class='sidebar-minify-btn' data-click='sidebar-minify'><i class='fa fa-angle-double-left'></i></a></li>";
}


?>