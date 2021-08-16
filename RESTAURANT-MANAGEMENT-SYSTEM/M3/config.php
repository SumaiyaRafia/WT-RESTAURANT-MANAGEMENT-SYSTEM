<?php 

  switch ($_SERVER['SCRIPT_NAME']) 
  {
  	case '/final/login-form.php':
  		$CURRENT_PAGE = "Log in";
  		$PAGE_TITLE = "Login Page";
  		break;

  	case '/final/registration.php':
  		$CURRENT_PAGE = "Registration";
  		$PAGE_TITLE = "Registration Page"; 
  		break;

  	case '/final/welcomepage.php':
  		$CURRENT_PAGE = "Home";
  		$PAGE_TITLE = "Home Page";
  		break;

  	case '/final/view-profile.php':
  		$CURRENT_PAGE = "Manager's Profile";
  		$PAGE_TITLE = "View Profile";
  		break;

  	case '/final/edit-profile.php':
  		$CURRENT_PAGE = "Edit/Update Profile";
  		$PAGE_TITLE = "Edit/Update Profile";
  		break;

    case '/final/delete-profile.php':
      $CURRENT_PAGE = "Delete Profile";
      $PAGE_TITLE = "Delete Profile";
      break;

    case '/final/delete-confirm.php':
      $CURRENT_PAGE = "Confirm Delete";
      $PAGE_TITLE = "Confirm Action";
      break;

    case '/final/change-password.php':
      $CURRENT_PAGE = "Change Password";
      $PAGE_TITLE = "Change Password";
      break;

    case '/final/view-customer.php':
      $CURRENT_PAGE = "Customers Profile";
      $PAGE_TITLE = "Customers Info";
      break;

    case '/final/a-r-receptionist.php':
      $CURRENT_PAGE = "Receptionist List";
      $PAGE_TITLE = "Add/Remove Receptionist";
      break;

    case '/final/remove-recep.php':
      $CURRENT_PAGE = "Remove Receptionist";
      $PAGE_TITLE = "Remove Receptionist";
      break;

    case '/final/add-recep.php':
      $CURRENT_PAGE = "Add Receptionist";
      $PAGE_TITLE = "Add Receptionist";
      break;

    case '/final/remove-recep-con.php':
      $CURRENT_PAGE = "Remove Confirm";
      $PAGE_TITLE = "Remove Confirm";
      break;

    case '/final/view-payment.php':
      $CURRENT_PAGE = "Payment History";
      $PAGE_TITLE = "Payment History";
      break;

    case '/final/edit-menu.php':
      $CURRENT_PAGE = "Edit Menu";
      $PAGE_TITLE = "Edit Menu";
      break;

    case '/final/create-menu.php':
      $CURRENT_PAGE = "Create Menu";
      $PAGE_TITLE = "Create Menu";
      break;

    case '/final/modify-menu.php':
      $CURRENT_PAGE = "Modify Menu";
      $PAGE_TITLE = "Modify Menu";
      break;

    case '/final/event-approval.php':
      $CURRENT_PAGE = "Event Approval";
      $PAGE_TITLE = "Event Approval";
      break;

    case '/final/changepassword.php':
      $CURRENT_PAGE = "Change Password";
      $PAGE_TITLE = "Change Password";
      break;

      










  	
  	default:
  		$CURRENT_PAGE = "Home";
  		$PAGE_TITLE = "Home Page";
  		break;

 
  }
?>