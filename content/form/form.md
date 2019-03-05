---
name: Form
enabled: true
wrappers: container
description: >
    The `form` component standardizes form styling.
---

<form class="form" enctype="multipart/form-data">
    <div class="field">
        <label for="text">Text</label>

        <div class="field_input">
            <input type="text" class="input-text" id="text" name="text">
        </div>
    </div>

    <div class="field">
        <label for="textarea">Textarea</label>

        <div class="field_input">
            <textarea class="input-text" id="textarea" name="textarea" rows="4"></textarea>
        </div>
    </div>

    <div class="field">
        <label for="select">Select</label>

        <div class="field_input">
            <select class="input-select" id="select" name="select">
                <option>Select...</option>
                <option>Apples</option>
                <option>Oranges</option>
                <option>Bananas</option>
            </select>
        </div>
    </div>

    <div class="field">
        <label for="file">Upload File</label>

        <div class="field_input">
            <input type="file" class="input-file" id="file" name="file">
        </div>
    </div>

    <div class="field control">
        <input type="checkbox" id="checkbox" name="checkbox">
        <label for="checkbox">A single checkbox</label>
    </div>

    <div class="field control">
        <input type="radio" id="radio" name="radio">
        <label for="radio">A single radio</label>
    </div>

    <div class="action-group">
        <button type="submit" class="button">
            Submit
        </button>
    </div>
</form>
