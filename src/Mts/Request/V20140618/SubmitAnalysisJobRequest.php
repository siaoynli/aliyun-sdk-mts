<?php

namespace AliCloud\Mts;

use AliCloud\Core\RpcAcsRequest;

class SubmitAnalysisJobRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "SubmitAnalysisJob", "mts", "openAPI");
		$this->setMethod("POST");
	}

	private  $input;

	private  $userData;

	private  $resourceOwnerId;

	private  $analysisConfig;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $priority;

	private  $pipelineId;

	public function getInput() {
		return $this->input;
	}

	public function setInput($input) {
		$this->input = $input;
		$this->queryParameters["Input"]=$input;
	}

	public function getUserData() {
		return $this->userData;
	}

	public function setUserData($userData) {
		$this->userData = $userData;
		$this->queryParameters["UserData"]=$userData;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getAnalysisConfig() {
		return $this->analysisConfig;
	}

	public function setAnalysisConfig($analysisConfig) {
		$this->analysisConfig = $analysisConfig;
		$this->queryParameters["AnalysisConfig"]=$analysisConfig;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setPriority($priority) {
		$this->priority = $priority;
		$this->queryParameters["Priority"]=$priority;
	}

	public function getPipelineId() {
		return $this->pipelineId;
	}

	public function setPipelineId($pipelineId) {
		$this->pipelineId = $pipelineId;
		$this->queryParameters["PipelineId"]=$pipelineId;
	}
	
}