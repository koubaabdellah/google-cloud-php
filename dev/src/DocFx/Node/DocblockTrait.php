<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\DocFx\Node;

trait DocblockTrait
{
    use XrefTrait;

    public function getContent(): string
    {
        if (empty($this->xmlNode->docblock)) {
            return '';
        }
        $docblockNode = $this->xmlNode->docblock;

        $content = $this->getDescription();
        if ($longDescription = $this->getLongDescription()) {
            if ($content) {
                $content .= "\n\n";
            }
            $content .= $longDescription;
        }

        $content = $this->replaceSeeTag($content);
        $content = $this->replaceProtoRef($content);
        $content = $this->stripSnippetTag($content);

        return $content;
    }

    public function getLongDescription(): string
    {
        if (!empty($this->xmlNode->docblock)) {
            $docblockNode = $this->xmlNode->docblock;
            if (!empty($docblockNode->{'long-description'})) {
                return $docblockNode->{'long-description'};
            }
        }

        if (isset($this->childNode)) {
            return $this->childNode->getLongDescription();
        }

        return '';
    }

    public function getDescription(): string
    {
        if (empty($this->xmlNode->docblock)) {
            return '';
        }
        $docblockNode = $this->xmlNode->docblock;

        return $docblockNode->description;
    }

    private function stripSnippetTag(string $content): string
    {
        return preg_replace('/\/\/\[snippet=.*\]/', '', $content);
    }
}
