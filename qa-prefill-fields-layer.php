<?php
// Copyright © 2020 Hugo Locurcio and contributors
//
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.

class qa_html_theme_layer extends qa_html_theme_base
{
    /**
     * Adds the required JavaScript code to prefill question fields on the "Ask
     * a question" page.
     *
     * Supported GET parameters are `title`, `content` and `tags`.
     * NOTE: `content` prefilling only works if a rich/WYSIWYG editor is *not* in use!
     *       Otherwise, the rich editor's loading will override the field's contents.
     */
    public function head_script()
    {
        if ($this->template === 'ask') {
            $this->content['script'][] = '<script>
            window.addEventListener("DOMContentLoaded", () => {
                const titleField = document.querySelector("input[name=\'title\']");
                if (titleField) {
                    titleField.value = "' . htmlspecialchars($_GET['title']) . '";
                }

                const contentField = document.querySelector("input[name=\'content\']");
                if (contentField) {
                    contentField.value = "' . htmlspecialchars($_GET['content']) . '";
                }

                const tagsField = document.querySelector("input[name=\'tags\']");
                if (tagsField) {
                    tagsField.value = "' . htmlspecialchars($_GET['tags']) . '";
                }
            });
            </script>';
        }

        parent::head_script();
    }
}
