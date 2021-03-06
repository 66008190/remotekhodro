<?php

/**
 * Created by PhpStorm.
 * User: malekloo
 * Date: 2/27/2016
 * Time: 9:21 AM.
 */
include_once dirname(__FILE__).'/model/admin.event.controller.php';

global $admin_info,$PARAM;
$eventController = new adminEventController();
if (isset($exportType)) {
    $eventController->exportType = $exportType;
}

switch ($_GET['action']) {
    case 'expired':
        $eventController->showExpiredList();
        break;
    case 'unverified':
        $eventController->showUnverifiedList();
        break;
    case 'add':
        if (isset($_POST['action']) & $_POST['action'] == 'add') {
            $eventController->addEvent($_POST);
        } else {
            $eventController->showEventAddForm('', '');
        }
        break;

    case 'delete':
        $eventController->deleteEvent($_GET['id']);
        break;
    case 'call':
        $eventController->call($_POST);
        break;
    case 'importCompanies':
        $eventController->importCompanies();
        break;
    case 'updateCity':
        $eventController->updateCity();
        break;    
    case 'importEventPhones':
        $eventController->importEventPhones();
        break;
    case 'importEventEmails':
        $eventController->importEventEmails();
        break;
    case 'importEventAddresses':
        $eventController->importEventAddresses();
        break;
    case 'importEventWebsites':
        $eventController->importEventWebsites();
        break;
    case 'search':
        $eventController->search($_GET);
        break;
    case 'searchGallery':
        $eventController->searchGallery($_GET);
        break;
    case 'searchExpire':
        $eventController->searchExpire($_GET);
        break;
    case 'getEventPhone':

        $eventController->getEventphone($_POST);
        break;
    case 'searchUnverified':
        $eventController->searchUnverified($_GET);
        break;
    case 'getCityAjax':
        $eventController->getCityAjax($_POST);
        break;





    case 'gallery':
        $eventController->showListGallery($_POST);
        break;
    case 'deleteGallery':
        $eventController->deleteGallery($_GET['id']);
        break;
    case 'addGallery':
        if (isset($_POST['action']) & $_POST['action'] == 'add') {
            $eventController->addGallery($_POST);
        } else {
            $eventController->showGalleryAddForm($_GET, '');
        }
        break;
    case 'edit':
        if (isset($_POST['action']) & $_POST['action'] == 'edit') {
            $eventController->editEvent($_POST);
        } else {
            $input['Event_id'] = $_GET['id'];
            $input['showStatus'] = $_GET['showStatus'];
            $eventController->showEventEditForm($input, '');
        }
        break;
    default:
        $eventController->showList($msg);
        break;
}
