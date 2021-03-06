<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Egulias\EmailValidator\EmailValidator;
use MailPoetVendor\Egulias\EmailValidator\Validation\RFCValidation;
class Swift_Mime_Headers_PathHeader extends Swift_Mime_Headers_AbstractHeader
{
 private $address;
 private $emailValidator;
 private $addressEncoder;
 public function __construct($name, EmailValidator $emailValidator, Swift_AddressEncoder $addressEncoder = null)
 {
 $this->setFieldName($name);
 $this->emailValidator = $emailValidator;
 $this->addressEncoder = $addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
 }
 public function getFieldType()
 {
 return self::TYPE_PATH;
 }
 public function setFieldBodyModel($model)
 {
 $this->setAddress($model);
 }
 public function getFieldBodyModel()
 {
 return $this->getAddress();
 }
 public function setAddress($address)
 {
 if (null === $address) {
 $this->address = null;
 } elseif ('' == $address) {
 $this->address = '';
 } else {
 $this->assertValidAddress($address);
 $this->address = $address;
 }
 $this->setCachedValue(null);
 }
 public function getAddress()
 {
 return $this->address;
 }
 public function getFieldBody()
 {
 if (!$this->getCachedValue()) {
 if (isset($this->address)) {
 $address = $this->addressEncoder->encodeString($this->address);
 $this->setCachedValue('<' . $address . '>');
 }
 }
 return $this->getCachedValue();
 }
 private function assertValidAddress($address)
 {
 if (!$this->emailValidator->isValid($address, new RFCValidation())) {
 throw new Swift_RfcComplianceException('Address set in PathHeader does not comply with addr-spec of RFC 2822.');
 }
 }
}
