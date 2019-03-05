---
name: Field
enabled: true
wrappers: container
description: >
    The `field` component contains an input, and provides spacing between multiple inputs.

    The `field--inline` modifier positions the label and input adjacent.
---

<div class="dd-heading">Default</div>

<div class="field">
    <label for="text-1">Text</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-1" name="text-1">
    </div>
</div>

<div class="field">
    <label for="textarea-1">Textarea</label>

    <div class="field_input">
        <textarea class="input-text" id="textarea-1" name="textarea-1" rows="4"></textarea>
    </div>
</div>

<div class="field">
    <label for="select-1">Select</label>

    <div class="field_input">
        <select class="input-select" id="select-1" name="select-1">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>
    </div>
</div>

<div class="field">
    <label for="file-1">Upload File</label>

    <div class="field_input">
        <input type="file" class="input-file" id="file-1" name="file-1">
    </div>
</div>

<div class="dd-heading">Modifier: Inline</div>

<div class="field field--inline">
    <label for="text-2">Text</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-2" name="text-2">
    </div>
</div>

<div class="field field--inline">
    <label for="textarea-2">Textarea</label>

    <div class="field_input">
        <textarea class="input-text" id="textarea-2" name="textarea-2" rows="4"></textarea>
    </div>
</div>

<div class="field field--inline">
    <label for="select-2">Select</label>

    <div class="field_input">
        <select class="input-select" id="select-2" name="select-2">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>
    </div>
</div>

<div class="field field--inline">
    <label for="file-2">Upload File</label>

    <div class="field_input">
        <input type="file" class="input-file" id="file-2" name="file-2">
    </div>
</div>
