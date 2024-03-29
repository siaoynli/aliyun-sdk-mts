<?php

namespace AliCloud\Mts;

use AliCloud\Core\RpcAcsRequest;

class AddMediaRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "AddMedia", "mts", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $description;

	private  $overrideParams;

	private  $ownerId;

	private  $title;

	private  $inputUnbind;

	private  $tags;

	private  $coverURL;

	private  $cateId;

	private  $fileURL;

	private  $mediaWorkflowId;

	private  $mediaWorkflowUserData;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
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

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getOverrideParams() {
		return $this->overrideParams;
	}

	public function setOverrideParams($overrideParams) {
		$this->overrideParams = $overrideParams;
		$this->queryParameters["OverrideParams"]=$overrideParams;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getInputUnbind() {
		return $this->inputUnbind;
	}

	public function setInputUnbind($inputUnbind) {
		$this->inputUnbind = $inputUnbind;
		$this->queryParameters["InputUnbind"]=$inputUnbind;
	}

	public function getTags() {
		return $this->tags;
	}

	public function setTags($tags) {
		$this->tags = $tags;
		$this->queryParameters["Tags"]=$tags;
	}

	public function getCoverURL() {
		return $this->coverURL;
	}

	public function setCoverURL($coverURL) {
		$this->coverURL = $coverURL;
		$this->queryParameters["CoverURL"]=$coverURL;
	}

	public function getCateId() {
		return $this->cateId;
	}

	public function setCateId($cateId) {
		$this->cateId = $cateId;
		$this->queryParameters["CateId"]=$cateId;
	}

	public function getFileURL() {
		return $this->fileURL;
	}

	public function setFileURL($fileURL) {
		$this->fileURL = $fileURL;
		$this->queryParameters["FileURL"]=$fileURL;
	}

	public function getMediaWorkflowId() {
		return $this->mediaWorkflowId;
	}

	public function setMediaWorkflowId($mediaWorkflowId) {
		$this->mediaWorkflowId = $mediaWorkflowId;
		$this->queryParameters["MediaWorkflowId"]=$mediaWorkflowId;
	}

	public function getMediaWorkflowUserData() {
		return $this->mediaWorkflowUserData;
	}

	public function setMediaWorkflowUserData($mediaWorkflowUserData) {
		$this->mediaWorkflowUserData = $mediaWorkflowUserData;
		$this->queryParameters["MediaWorkflowUserData"]=$mediaWorkflowUserData;
	}
	
}