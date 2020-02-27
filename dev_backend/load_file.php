<?php

// Home          
	    if ($_SESSION['level']=='superadmin'){


if($_GET) {

	switch ($_GET['page']){		

			case '' :				

			if(!file_exists ("home.php")) die ("Empty Main Page!"); 

			include "home.php";						

		break;

		case 'Beranda' :				

			if(!file_exists ("home.php")) die ("Sorry Empty Page!"); 

			include "home.php";						

		break;				

		case 'Logout' :				

			if(!file_exists ("login_out.php")) die ("Sorry Empty Page!"); 

			include "login_out.php";						

		break;		



		# MOD TICKET USER

		case 'Data-User' :		
			if(!file_exists ("mod_ticket/users/view.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/users/view.php";	 break;	
		case 'Edit-Password' :		
			if(!file_exists ("mod_ticket/users/edit_pass.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/users/edit_pass.php";	 break;	


		case 'Add-User' :				

			if(!file_exists ("mod_ticket/users/add.php")) die ("Sorry Empty Module!"); 

			include "mod_ticket/users/add.php";	 break;	
		case 'Delete-User' :				

			if(!file_exists ("mod_ticket/users/delete.php")) die ("Sorry Empty Module!"); 

			include "mod_ticket/users/delete.php";	 break;	
		case 'Edit-User' :				

			if(!file_exists ("mod_ticket/kategori/edit.php")) die ("Sorry Empty Module!"); 

			include "mod_ticket/kategori/edit.php";	 break;	
		# END MOD TICKET - USERS

		# START MOD POSTS TAGLINE
		case 'Data-Tag' :				

			if(!file_exists ("pages/tag/view.php")) die ("Sorry Empty Module!"); 

			include "pages/tag/view.php";	 break;	
		case 'Add-Tag' :				

			if(!file_exists ("pages/tag/add.php")) die ("Sorry Empty Module!"); 

			include "pages/tag/add.php";	 break;	
		case 'Delete-Tag' :				

			if(!file_exists ("pages/tag/delete.php")) die ("Sorry Empty Module!"); 

			include "pages/tag/delete.php";	 break;	
		case 'Edit-Tag' :				

			if(!file_exists ("pages/tag/edit.php")) die ("Sorry Empty Module!"); 

			include "pages/tag/edit.php";	 break;	
		# END MOD POSTS - TAGLINE

		# START MOD TICKET - KATEGORI
		case 'Data-Kategori' :				

			if(!file_exists ("pages/kategori/view.php")) die ("Sorry Empty Module!"); 

			include "pages/kategori/view.php";	 break;	
		case 'Add-Kategori' :				

			if(!file_exists ("pages/kategori/add.php")) die ("Sorry Empty Module!"); 

			include "pages/kategori/add.php";	 break;	
		case 'Delete-Kategori' :				

			if(!file_exists ("pages/kategori/delete.php")) die ("Sorry Empty Module!"); 

			include "pages/kategori/delete.php";	 break;	
		case 'Edit-Kategori' :				

			if(!file_exists ("pages/kategori/edit.php")) die ("Sorry Empty Module!"); 

			include "pages/kategori/edit.php";	 break;	
		# END MOD TICKET - KATEGORI

			# START MOD TICKET - TIKET
		case 'Data-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/view.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/view.php";	 break;	
		case 'Detail-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/view_detail.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/view_detail.php";	 break;	
		case 'Set-Progress-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/set_progress.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/set_progress.php";	 break;			
		case 'Set-Closed-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/set_closed.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/set_closed.php";	 break;		
		case 'Set-Open-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/set_open.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/set_open.php";	 break;

		case 'Add-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/add.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/add.php";	 break;	

		case 'Add-Proses-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/act_add.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/act_add.php";	 break;	

		case 'Delete-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/delete.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/delete.php";	 break;	

		case 'Edit-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/edit.php")) die ("Sorry Empty Module!"); 
			include "mod_Ticket/ticket/edit.php";	 break;	
		case 'Edit-Proses-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/act_edit.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/act_edit.php";	 break;	

		# END MOD TICKET - TIKET

		default:

			if(!file_exists ("mis_url.php")) die ("Empty Main Page!"); 

			include "mis_url.php";						

		break;

	}

}


	    
	}




if ($_SESSION['level']=='manager'){


if($_GET) {

	switch ($_GET['module']){		

	case '' :				

			if(!file_exists ("home.php")) die ("Empty Main Page!"); 

			include "home.php";						

		break;

		case 'Beranda' :				

			if(!file_exists ("home.php")) die ("Sorry Empty Page!"); 

			include "home.php";						

		break;			

		# START MOD TICKET - TIKET
		case 'Data-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/view.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/view.php";	 break;	
		case 'Detail-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/view_detail.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/view_detail.php";	 break;	
		
		case 'Add-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/add.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/add.php";	 break;	

		case 'Add-Proses-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/act_add.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/act_add.php";	 break;	


		default:

			if(!file_exists ("mis_url.php")) die ("Empty Main Page!"); 

			include "mis_url.php";						

		break;

	}

}


	    
	}



if ($_SESSION['level']=='staff'){


if($_GET) {

	switch ($_GET['module']){		

	case '' :				

			if(!file_exists ("home.php")) die ("Empty Main Page!"); 

			include "home.php";						

		break;

		case 'Beranda' :				

			if(!file_exists ("home.php")) die ("Sorry Empty Page!"); 

			include "home.php";						

		break;			

		# START MOD TICKET - TIKET
		case 'Data-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/view.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/view.php";	 break;	
		case 'Detail-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/view_detail.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/view_detail.php";	 break;	
		
		case 'Add-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/add.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/add.php";	 break;	

		case 'Add-Proses-Ticket' :				
			if(!file_exists ("mod_ticket/ticket/act_add.php")) die ("Sorry Empty Module!"); 
			include "mod_ticket/ticket/act_add.php";	 break;	


		default:

			if(!file_exists ("mis_url.php")) die ("Empty Main Page!"); 

			include "mis_url.php";						

		break;

	}

}


	    
	}
?>