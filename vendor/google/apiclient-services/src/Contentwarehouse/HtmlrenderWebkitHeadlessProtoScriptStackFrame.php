<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class HtmlrenderWebkitHeadlessProtoScriptStackFrame extends \Google\Model
{
  /**
   * @var int
   */
  public $columnNumber;
  /**
   * @var string
   */
  public $functionName;
  /**
   * @var int
   */
  public $lineNumber;
  /**
   * @var string
   */
  public $url;

  /**
   * @param int
   */
  public function setColumnNumber($columnNumber)
  {
    $this->columnNumber = $columnNumber;
  }
  /**
   * @return int
   */
  public function getColumnNumber()
  {
    return $this->columnNumber;
  }
  /**
   * @param string
   */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /**
   * @return string
   */
  public function getFunctionName()
  {
    return $this->functionName;
  }
  /**
   * @param int
   */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /**
   * @return int
   */
  public function getLineNumber()
  {
    return $this->lineNumber;
  }
  /**
   * @param string
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HtmlrenderWebkitHeadlessProtoScriptStackFrame::class, 'Google_Service_Contentwarehouse_HtmlrenderWebkitHeadlessProtoScriptStackFrame');
