<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Mime_Header
{
 const TYPE_TEXT = 2;
 const TYPE_PARAMETERIZED = 6;
 const TYPE_MAILBOX = 8;
 const TYPE_DATE = 16;
 const TYPE_ID = 32;
 const TYPE_PATH = 64;
 public function getFieldType();
 public function setFieldBodyModel($model);
 public function setCharset($charset);
 public function getFieldBodyModel();
 public function getFieldName();
 public function getFieldBody();
 public function toString();
}
