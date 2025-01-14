<?php
/**
 * @file
 * @package widget
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
	exit;
}

/**
 * Widget_AbstractViewAction
**/
abstract class Widget_AbstractViewAction extends Widget_AbstractAction
{
	public /*** XoopsSimpleObject ***/ $mObject = null;

	public /*** XoopsObjectGenericHandler ***/ $mObjectHandler = null;

	/**
	 * _getId
	 * 
	 * @param	void
	 * 
	 * @return	int
	**/
	protected function _getId()
	{
		$req = $this->mRoot->mContext->mRequest;
		$dataId = $req->getRequest(_REQUESTED_DATA_ID);
		return isset($dataId) ? intval($dataId) : intval($req->getRequest($this->_getHandler()->mPrimary));
	}

	/**
	 * _getActionTitle
	 * 
	 * @param	void
	 * 
	 * @return	string
	**/
	protected function _getActionTitle()
	{
		return _VIEW;
	}

	/**
	 * _getActionName
	 * 
	 * @param	void
	 * 
	 * @return	string
	**/
	protected function _getActionName()
	{
		return 'edit';
	}

	/**
	 * _setupObject
	 * 
	 * @param	void
	 * 
	 * @return	void
	**/
	protected function _setupObject()
	{
		$id = $this->_getId();
	
		$this->mObjectHandler = $this->_getHandler();
	
		$this->mObject =& $this->mObjectHandler->get($id);
	}

	/**
	 * prepare
	 * 
	 * @param	void
	 * 
	 * @return	bool
	**/
	public function prepare()
	{
		parent::prepare();
		$this->_setupObject();
		return is_object($this->mObject);
	}

	/**
	 * getDefaultView
	 * 
	 * @param	void
	 * 
	 * @return	Enum
	**/
	public function getDefaultView()
	{
		if($this->mObject == null)
		{
			return WIDGET_FRAME_VIEW_ERROR;
		}
	
		return WIDGET_FRAME_VIEW_SUCCESS;
	}

	/**
	 * execute
	 * 
	 * @param	void
	 * 
	 * @return	Enum
	**/
	public function execute()
	{
		return $this->getDefaultView();
	}

	/**
	 * executeViewError
	 * 
	 * @param	XCube_RenderTarget	&$render
	 * 
	 * @return	void
	**/
	public function executeViewError(/*** XCube_RenderTarget ***/ &$render)
	{
		$this->mRoot->mController->executeRedirect($this->_getNextUri($this->_getConst('DATANAME'), 'list'), 1, _MD_WIDGET_ERROR_CONTENT_IS_NOT_FOUND);
	}
}
