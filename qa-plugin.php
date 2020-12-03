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
/*
    Plugin Name: Prefill Fields
    Plugin URI: https://github.com/Calinou/q2a-prefill-fields
    Plugin Description: Allows prefilling question fields (title, content and tags) using GET parameters
    Plugin Version: 1.0.0
    Plugin Date: 2020-12-03
    Plugin Author: Hugo Locurcio
    Plugin Author URI: https://hugo.pro/
    Plugin License: MIT
    Plugin Minimum Question2Answer Version: 1.8
    Plugin Update Check URI: https://raw.githubusercontent.com/Calinou/q2a-prefill-fields/master/qa-plugin.php
*/

// Don't allow this page to be requested directly from browser.
if (!defined('QA_VERSION')) {
    header('Location: ../../');
    exit;
}

qa_register_plugin_layer('qa-prefill-fields-layer.php', 'Prefill Fields Layer');
