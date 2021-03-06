<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
abstract class Swift_ConfigurableSpool implements Swift_Spool
{
 private $message_limit;
 private $time_limit;
 public function setMessageLimit($limit)
 {
 $this->message_limit = (int) $limit;
 }
 public function getMessageLimit()
 {
 return $this->message_limit;
 }
 public function setTimeLimit($limit)
 {
 $this->time_limit = (int) $limit;
 }
 public function getTimeLimit()
 {
 return $this->time_limit;
 }
}
