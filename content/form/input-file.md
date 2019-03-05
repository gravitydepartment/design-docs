---
name: Input File
enabled: true
wrappers: container
description: >
    The `input-file` component styles file inputs.

    Make sure `<form enctype="multipart/form-data">` is set or the file won't upload.
---

<form enctype="multipart/form-data">
    <div class="field">
        <label for="file">
            Upload File
        </label>

        <div class="field_input">
            <input type="file" class="input-file" id="file" name="file">
        </div>
    </div>
</form>
