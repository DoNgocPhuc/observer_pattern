<?php
namespace Observer\Controller;


use Observer\Controller\Member;
/**
 * Class WilokeMemberController
 */
class WilokeMemberController implements Member
{
	/**
	 * @var
	 */
	private $name;

	/**
	 * WilokeMemberController constructor.
	 * @param $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}

	/**
	 * @param SkypeGroup $oWilokeSkypeGroup
	 * @param $content
	 * @return mixed|void
	 */
	public function writeMessageInGroup(SkypeGroup $oWilokeSkypeGroup,$content)
	{
		$oWilokeSkypeGroup->setNewMessage($this,$content);
	}

	/**
	 * @param SkypeGroup $oWilokeSkypeGroup
	 */
	public function receieveMessage(SkypeGroup $oWilokeSkypeGroup)
	{
		echo $this->name.' receieved a message which has content "'.$oWilokeSkypeGroup->getNewMessage().'" from '.
			$oWilokeSkypeGroup->getNewMessageMemberName().' in '.$oWilokeSkypeGroup->getGroupName();
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}
}
