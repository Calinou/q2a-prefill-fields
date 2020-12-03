# Pre-fill form fields for Question2Answer

A Question2Answer plugin to pre-fill form fields on the *Ask a question* page
using GET parameters.

## Features

Supported fields are:

- `title`
- `content` **(only when not using a rich/WYSIWYG editor)**
- `tags`

Since the user can input arbitrary values as GET parameters, the values are
escaped using PHP's `htmlspecialchars()` function. You can use multiple tags by
separating each tag with a `+` or `%20` in the URL.

## Example

The following URL, when entered in the browser address bar:

```text
http://localhost:8000/index.php?qa=ask&title=Hello+world&content=something&tags=one%20two%20three
```

Will result in:

- **Title:** Hello world
- **Content:** something
- **Tags:** one two three *(as 3 separate tags, since Q2A separates tags with spaces)*

## Installation

- Clone this repository or
  [download a ZIP archive](https://github.com/Calinou/q2a-prefill-fields/archive/master.zip).
- Move the extracted folder to the `qa-plugin/` folder of your Question2Answer
  installation.
- Log in as administrator on your Question2Answer instance, navigate to
  **Admin > Plugins** and make sure the **Prefill Fields** plugin is visible
  and enabled.

## License

Copyright © 2020 Hugo Locurcio and contributors

Unless otherwise specified, files in this repository are licensed under the
MIT license. See [LICENSE.md](LICENSE.md) for more information.
