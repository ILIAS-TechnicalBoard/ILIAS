<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once "./Services/Object/classes/class.ilObject2GUI.php";

/**
 * Class ilObjDataCollectionGUI
 *
 * @author Jörg Lützenkirchen <luetzenkirchen@leifos.com>
 * @author Martin Studer <ms@studer-raimann.ch>
 * @author Marcel Raimann <mr@studer-raimann.ch>
 * @author Fabian Schmid <fs@studer-raimann.ch>
 * @author Oskar Truffer <ot@studer-raimann.ch>
 *
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilInfoScreenGUI, ilNoteGUI, ilCommonActionDispatcherGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilPermissionGUI, ilObjectCopyGUI, ilExportGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilDataCollectionFieldEditGUI, ilDataCollectionRecordEditGUI, ilDataCollectionTreePickInputGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilDataCollectionRecordListGUI, ilDataCollectionRecordEditViewdefinitionGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilDataCollectionRecordViewGUI, ilDataCollectionRecordViewViewdefinitionGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilDataCollectionTableEditGUI, ilDataCollectionFieldListGUI, ilObjFileGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilDataCollectionRecordListViewdefinitionGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilObjUserGUI
 * @ilCtrl_Calls ilObjDataCollectionGUI: ilRatingGUI
 *
 * @extends ilObject2GUI
 */
class ilObjDataCollectionGUI extends ilObject2GUI
{

	/*
	 * __construct
	 */
	public function __construct($a_id = 0, $a_id_type = self::REPOSITORY_NODE_ID, $a_parent_node_id = 0)
	{
		global $lng, $ilCtrl;
		
		parent::__construct($a_id, $a_id_type, $a_parent_node_id);

		$lng->loadLanguageModule("dcl");

		if(isset($_REQUEST['table_id']))
		{
			$this->table_id = $_REQUEST['table_id'];
		}
		elseif($a_id > 0)
		{
			$this->table_id = $this->object->getMainTableId();
		}

		$ilCtrl->saveParameter($this, "table_id");
	}
	
	/*
	 * getStandardCmd
	 */
	public function getStandardCmd()
	{
		return "render";
	}
	
	/*
	 * getType
	 */
	public function getType()
	{
		return "dcl";
	}
	
	/*
	 * executeCommand
	 */
	public function executeCommand()
	{
		global $ilCtrl, $ilTabs, $ilNavigationHistory, $ilUser, $tpl;

		// Navigation History
		$link = $ilCtrl->getLinkTarget($this, "render");
		
		if($this->object != NULL)
		{
			$ilNavigationHistory->addItem($this->object->getRefId(), $link, "dcl");
		}

		$next_class = $ilCtrl->getNextClass($this);
		$cmd = $ilCtrl->getCmd();

        if(!$this->getCreationMode() && $next_class != "ilinfoscreengui" && !$this->checkPermissionBool("read")){
            $tpl->getStandardTemplate();
            $tpl->setContent("Permission Denied.");
            return;
        }


		switch($next_class)
		{
			case "ilinfoscreengui":
				$this->prepareOutput();
				$ilTabs->activateTab("id_info");
				$this->infoScreenForward();
				break;

			case "ilcommonactiondispatchergui":
				include_once("Services/Object/classes/class.ilCommonActionDispatcherGUI.php");
				$gui = ilCommonActionDispatcherGUI::getInstanceFromAjaxCall();
				$this->ctrl->forwardCommand($gui);
				break;

			case "ilpermissiongui":
				$this->prepareOutput();
				$ilTabs->activateTab("id_permissions");
				include_once("Services/AccessControl/classes/class.ilPermissionGUI.php");
				$perm_gui = new ilPermissionGUI($this);
				$this->ctrl->forwardCommand($perm_gui);
				break;

			case "ilobjectcopygui":
				include_once "./Services/Object/classes/class.ilObjectCopyGUI.php";
				$cp = new ilObjectCopyGUI($this);
				$cp->setType("dcl");
                $tpl->getStandardTemplate();
				$this->ctrl->forwardCommand($cp);
				break;

			case "ildatacollectionfieldlistgui":
				$this->prepareOutput();
				$this->addListFieldsTabs("list_fields");
				$ilTabs->setTabActive("id_fields");
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionFieldListGUI.php");
				$fieldlist_gui = new ilDataCollectionFieldListGUI($this, $this->table_id);
				$this->ctrl->forwardCommand($fieldlist_gui);
				break;

			case "ildatacollectiontableeditgui":
				$this->prepareOutput();
				$ilTabs->setTabActive("id_fields");
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionTableEditGUI.php");
				$tableedit_gui = new ilDataCollectionTableEditGUI($this);
				$this->ctrl->forwardCommand($tableedit_gui);
				break;

			case "ildatacollectionfieldeditgui":
				$this->prepareOutput();
				$ilTabs->activateTab("id_fields");
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionFieldEditGUI.php");
				$fieldedit_gui = new ilDataCollectionFieldEditGUI($this,$this->table_id,$_REQUEST["field_id"]);
				$this->ctrl->forwardCommand($fieldedit_gui);
				break;

			case "ildatacollectionrecordlistgui":
				$this->addHeaderAction(false);
				$this->prepareOutput();
				$ilTabs->activateTab("id_records");
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionRecordListGUI.php");
				$recordlist_gui = new ilDataCollectionRecordListGUI($this,$this->table_id);
				$this->ctrl->forwardCommand($recordlist_gui);
				break;

			case "ildatacollectionrecordeditgui":
				$this->prepareOutput();
				$ilTabs->activateTab("id_records");
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionRecordEditGUI.php");
				$recordedit_gui = new ilDataCollectionRecordEditGUI($this);
				$this->ctrl->forwardCommand($recordedit_gui);
				break;

			case "ildatacollectionrecordviewviewdefinitiongui":
				$this->prepareOutput();

				// page editor will set its own tabs
				$ilTabs->clearTargets();
				$ilTabs->setBackTarget($this->lng->txt("back"),
				$ilCtrl->getLinkTargetByClass("ildatacollectionfieldlistgui", "listFields"));

				include_once("./Modules/DataCollection/classes/class.ilDataCollectionRecordViewViewdefinitionGUI.php");
				$recordedit_gui = new ilDataCollectionRecordViewViewdefinitionGUI($this, $this->table_id);

				// needed for editor
				$recordedit_gui->setStyleId(ilObjStyleSheet::getEffectiveContentStyleId(0, "dcl"));

				if (!$this->checkPermissionBool("write"))
				{
					$recordedit_gui->setEnableEditing(false);
				}

				$ret = $this->ctrl->forwardCommand($recordedit_gui);
				if ($ret != "")
				{
					$this->tpl->setContent($ret);
				}
				
				$ilTabs->removeTab('history');
				$ilTabs->removeTab('clipboard'); // Fixme
				$ilTabs->removeTab('pg');
				break;

			case "ildatacollectionrecordlistviewdefinitiongui":
				$this->prepareOutput();
				$this->addListFieldsTabs("list_viewdefinition");
				$ilTabs->setTabActive("id_fields");
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionRecordListViewdefinitionGUI.php");
				$recordlist_gui = new ilDataCollectionRecordListViewdefinitionGUI($this, $this->table_id);
				$this->ctrl->forwardCommand($recordlist_gui);
				break;

			case "ilobjfilegui":
				$this->prepareOutput();
				$ilTabs->setTabActive("id_records");
				include_once("./Modules/File/classes/class.ilObjFile.php");
				$file_gui = new ilObjFile($this);
				$this->ctrl->forwardCommand($file_gui);
				break;

			case "ildatacollectionrecordviewgui":
				$this->prepareOutput();
				include_once("./Modules/DataCollection/classes/class.ilDataCollectionRecordViewGUI.php");
				$recordview_gui = new ilDataCollectionRecordViewGUI($this);
				$this->ctrl->forwardCommand($recordview_gui);
				$ilTabs->clearTargets();
                $ilTabs->setBackTarget($this->lng->txt("back"), $ilCtrl->getLinkTargetByClass("ilObjDataCollectionGUI", ""));
				break;

			case "ilratinggui":
				$rgui = new ilRatingGUI();
				$rgui->setObject($_GET['record_id'], "dcl_record", $_GET["field_id"], "dcl_field");
				$rgui->executeCommand();
				$ilCtrl->redirectByClass("ilDataCollectionRecordListGUI", "listRecords");
				break;

			default:
				return parent::executeCommand();
		}

		return true;
	}

	/**
	 * this one is called from the info button in the repository
	 * not very nice to set cmdClass/Cmd manually, if everything
	 * works through ilCtrl in the future this may be changed
	 */
	public function infoScreen()
	{
		$this->ctrl->setCmd("showSummary");
		$this->ctrl->setCmdClass("ilinfoscreengui");
		$this->infoScreenForward();
	}

	/**
	 * show Content; redirect to ilDataCollectionRecordListGUI::listRecords
	 */
	public function render()
	{
		global $ilCtrl;

		$ilCtrl->redirectByClass("ildatacollectionrecordlistgui","listRecords");
	}

	/**
	 * show information screen
	 */
	public function infoScreenForward()
	{
		global $ilTabs, $ilErr;

		$ilTabs->activateTab("id_info");

		if (!$this->checkPermissionBool("visible"))
		{
			$ilErr->raiseError($this->lng->txt("msg_no_perm_read"));
		}

		include_once("./Services/InfoScreen/classes/class.ilInfoScreenGUI.php");
		$info = new ilInfoScreenGUI($this);
		$info->enablePrivateNotes();
		$info->addMetaDataSections($this->object->getId(), 0, $this->object->getType());

		$this->ctrl->forwardCommand($info);
	}

	/*
	 * addLocatorItems
	 */
	public function addLocatorItems()
	{
		global $ilLocator;
		
		if (is_object($this->object))
		{
			$ilLocator->addItem($this->object->getTitle(), $this->ctrl->getLinkTarget($this, ""), "", $this->node_id);
		}
	}

	/**
	 * _goto
	 * Deep link
	 *
	 * @param string $a_target
	 */
	public function _goto($a_target)
	{
		$id = explode("_", $a_target);

		$_GET["baseClass"] = "ilRepositoryGUI";
		$_GET["ref_id"] = $id[0];
		$_GET["cmd"] = "listRecords";

		include("ilias.php");
	}
	
	/*
	 * initCreationForms
	 */
	protected function initCreationForms($a_new_type)
	{
		$forms = parent::initCreationForms($a_new_type);
		
		// disabling import
		unset($forms[self::CFORM_IMPORT]);

		return $forms;
	}
	
	/*
	 * afterSave
	 */
	protected function afterSave(ilObject $a_new_object)
	{
		ilUtil::sendSuccess($this->lng->txt("object_added"), true);
		$this->ctrl->redirectByClass("ilDataCollectionFieldListGUI", "listFields");
	}

	/**
	 * setTabs
	 * create tabs (repository/workspace switch)
	 *
	 * this had to be moved here because of the context-specific permission tab
	 */
	public function setTabs()
	{
		global $ilAccess, $ilTabs, $lng, $ilHelp;

		$ilHelp->setScreenIdComponent("dcl");
		
		// list records
		if ($ilAccess->checkAccess('read', "", $this->object->getRefId()))
		{
			$ilTabs->addTab("id_records",
				$lng->txt("content"),
				$this->ctrl->getLinkTargetByClass("ildatacollectionrecordlistgui", "listRecords"));
		}

		// info screen
		if ($ilAccess->checkAccess('visible', "", $this->object->getRefId()))
		{
			$ilTabs->addTab("id_info",
				$lng->txt("info_short"),
				$this->ctrl->getLinkTargetByClass("ilinfoscreengui", "showSummary"));
		}

		// settings
		if ($ilAccess->checkAccess('write', "", $this->object->getRefId()))
		{
			$ilTabs->addTab("id_settings",
				$lng->txt("settings"),
				$this->ctrl->getLinkTarget($this, "editObject"));
		}

		// list fields
		if ($ilAccess->checkAccess('write', "", $this->object->getRefId()))
		{
			$ilTabs->addTab("id_fields",
				$lng->txt("dcl_list_fields"),
				$this->ctrl->getLinkTargetByClass("ildatacollectionfieldlistgui", "listFields"));
		}

		// export
		if ($ilAccess->checkAccess("write", "", $this->object->getRefId()))
		{
			//$ilTabs->addTab("export",
				//$lng->txt("export"),
				//$this->ctrl->getLinkTargetByClass("ilexportgui", ""));
		}

		// edit permissions
		if ($ilAccess->checkAccess('edit_permission', "", $this->object->getRefId()))
		{
			$ilTabs->addTab("id_permissions",
				$lng->txt("perm_settings"),
				$this->ctrl->getLinkTargetByClass("ilpermissiongui", "perm"));
		}
	}


	/**
	 * Add List Fields SubTabs
	 *
	 * @param string $a_active
	 */
	public function addListFieldsTabs($a_active)
	{
		global $ilTabs, $ilCtrl, $lng;


		$ilTabs->addSubTab("list_fields",
			$lng->txt("dcl_list_fields"),
			$ilCtrl->getLinkTargetByClass("ildatacollectionfieldlistgui", "listFields"));

		$ilCtrl->setParameterByClass("ildatacollectionrecordviewviewdefinitiongui","table_id", $this->table_id);
		$ilTabs->addSubTab("view_viewdefinition",
			$lng->txt("dcl_record_view_viewdefinition"),
			$ilCtrl->getLinkTargetByClass("ildatacollectionrecordviewviewdefinitiongui","edit"));

		$ilTabs->activateSubTab($a_active);
	}


	/**
	 * initEditCustomForm
	 */
	protected function initEditCustomForm(ilPropertyFormGUI $a_form)
	{
		global $ilCtrl, $ilErr, $ilTabs;
		
		$ilTabs->activateTab("id_settings");
		
		// is_online
		$cb = new ilCheckboxInputGUI($this->lng->txt("online"), "is_online");
		$a_form->addItem($cb);

		// edit_type

		// Rating
		//$cb = new ilCheckboxInputGUI($this->lng->txt("dcl_activate_rating"), "rating");
		//$a_form->addItem($cb);

		// Public Notes
		//$cb = new ilCheckboxInputGUI($this->lng->txt("public_notes"), "public_notes");
		//$a_form->addItem($cb);

		// Approval
		//$cb = new ilCheckboxInputGUI($this->lng->txt("dcl_activate_approval"), "approval");
		//$a_form->addItem($cb);

		// Notification
		$cb = new ilCheckboxInputGUI($this->lng->txt("dcl_activate_notification"), "notification");
		$a_form->addItem($cb);

	}
	
	/*
	 * listRecords
	 */
	public function listRecords()
	{
		global $ilCtrl;
		
		$ilCtrl->redirectByClass("ildatacollectionrecordlistgui", "listRecords");
	}
	
	/*
	 * getDataCollectionObject
	 */
	public function getDataCollectionObject()
	{
		$obj = new ilObjDataCollection($this->ref_id, true);
		
		return $obj;
	}

	/**
	 * getSettingsValues
	 */
	public function getEditFormCustomValues(array &$a_values)
	{
		$a_values["is_online"] = $this->object->getOnline();
		$a_values["rating"] = $this->object->getRating();
		$a_values["public_notes"] = $this->object->getPublicNotes();
		$a_values["approval"] = $this->object->getApproval();
		$a_values["notification"] = $this->object->getNotification();

		return $a_values;
	}

	/**
	 * updateSettings
	 */
	public function updateCustom(ilPropertyFormGUI $a_form)
	{
		global $ilUser;

		$this->object->setOnline($a_form->getInput("is_online"));
		$this->object->setRating($a_form->getInput("rating"));
		$this->object->setPublicNotes($a_form->getInput("public_notes"));
		$this->object->setApproval($a_form->getInput("approval"));
		$this->object->setNotification($a_form->getInput("notification"));
		$this->emptyInfo();
	}


	private function emptyInfo(){
		global $lng;
		$this->table = ilDataCollectionCache::getTableCache($this->object->getMainTableId());
		$tables = $this->object->getTables();
		if(count($tables) == 1 && count($this->table->getRecordFields()) == 0 && count($this->table->getRecords()) == 0 && $this->object->getOnline()){
			ilUtil::sendInfo($lng->txt("dcl_no_content_warning"), true);
		}
	}
	/*
	 * toggleNotification
	 */
	public function toggleNotification()
	{
		global $ilCtrl, $ilUser;
		
		include_once "./Services/Notification/classes/class.ilNotification.php";
		switch($_GET["ntf"])
		{
			case 1:
				ilNotification::setNotification(ilNotification::TYPE_DATA_COLLECTION, $ilUser->getId(), $this->obj_id, false);
				break;
			case 2:
				ilNotification::setNotification(ilNotification::TYPE_DATA_COLLECTION, $ilUser->getId(), $this->obj_id, true);
				break;
		}
		$ilCtrl->redirectByClass("ildatacollectionrecordlistgui", "listRecords");
	}
	
	/*
	 * addHeaderAction
	 */
	public function addHeaderAction($a_redraw = false)
	{
		global $ilUser, $ilAccess, $tpl, $lng, $ilCtrl;

		include_once "Services/Object/classes/class.ilCommonActionDispatcherGUI.php";
		$dispatcher = new ilCommonActionDispatcherGUI(ilCommonActionDispatcherGUI::TYPE_REPOSITORY,
			$ilAccess, "dcl", $this->ref_id,$this->obj_id);

		include_once "Services/Object/classes/class.ilObjectListGUI.php";
		ilObjectListGUI::prepareJSLinks($this->ctrl->getLinkTarget($this, "redrawHeaderAction", "", true),
			$ilCtrl->getLinkTargetByClass(array("ilcommonactiondispatchergui", "ilnotegui"), "", "", true, false),
			$ilCtrl->getLinkTargetByClass(array("ilcommonactiondispatchergui", "iltagginggui"), "", "", true, false));

		$lg = $dispatcher->initHeaderAction();
		//$lg->enableNotes(true);
		//$lg->enableComments(ilObjWiki::_lookupPublicNotes($this->getPageObject()->getParentId()), false);

		// notification
		if ($ilUser->getId() != ANONYMOUS_USER_ID && $this->object->getNotification() == 1)
		{
			include_once "./Services/Notification/classes/class.ilNotification.php";
			if(ilNotification::hasNotification(ilNotification::TYPE_DATA_COLLECTION, $ilUser->getId(), $this->obj_id))
			{
				//Command Activate Notification
				$ilCtrl->setParameter($this, "ntf", 1);
				$lg->addCustomCommand($ilCtrl->getLinkTarget($this, "toggleNotification"), "dcl_notification_deactivate_dcl");

				$lg->addHeaderIcon("not_icon",
					ilUtil::getImagePath("notification_on.png"),
					$lng->txt("dcl_notification_activated"));
			}
			else
			{
				//Command Deactivate Notification
				$ilCtrl->setParameter($this, "ntf", 2);
				$lg->addCustomCommand($ilCtrl->getLinkTarget($this,"toggleNotification"), "dcl_notification_activate_dcl");

				$lg->addHeaderIcon("not_icon",
				ilUtil::getImagePath("notification_off.png"),
				$lng->txt("dcl_notification_deactivated"));
			}
			$ilCtrl->setParameter($this, "ntf", "");
		}

		if(!$a_redraw)
		{
			$tpl->setHeaderActionMenu($lg->getHeaderAction());
		}
		else
		{
			return $lg->getHeaderAction();
		}

		$tpl->setHeaderActionMenu($lg->getHeaderAction());
	}
}

?>