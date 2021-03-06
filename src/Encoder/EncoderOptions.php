<?php namespace Neomerx\JsonApi\Encoder;

/**
 * Copyright 2015-2018 info@neomerx.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use Neomerx\JsonApi\Factories\Exceptions;

/**
 * @package Neomerx\JsonApi
 */
class EncoderOptions
{
    /**
     * @var int
     */
    private $options;

    /**
     * @var int
     */
    private $depth;

    /**
     * @var null|string
     */
    private $urlPrefix;

    /**
     * @param int         $options
     * @param string|null $urlPrefix
     * @param int         $depth
     *
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function __construct(
        int $options = 0,
        string $urlPrefix = null,
        int $depth = 512
    ) {
        $depth > 0 ?: Exceptions::throwInvalidArgument('depth', $depth);

        $this->options   = $options;
        $this->depth     = $depth;
        $this->urlPrefix = $urlPrefix;
    }

    /**
     * @link http://php.net/manual/en/function.json-encode.php
     *
     * @return int
     */
    public function getOptions(): int
    {
        return $this->options;
    }

    /**
     * @link http://php.net/manual/en/function.json-encode.php
     *
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @return null|string
     */
    public function getUrlPrefix(): ?string
    {
        return $this->urlPrefix;
    }
}
