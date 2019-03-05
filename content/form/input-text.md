---
name: Input Text
enabled: true
wrappers: container
description: >
    The `input-text` component standardizes styling for all types of text inputs.
---

<div class="dd-heading">Type</div>

<div class="field">
    <label for="type-text">Text</label>

    <div class="field_input">
        <input type="text" class="input-text" id="type-text" name="type-text">
    </div>
</div>

<div class="field">
    <label for="type-email">Email</label>

    <div class="field_input">
        <input type="email" class="input-text validate-email" id="type-email" name="type-email">
    </div>
</div>

<div class="field">
    <label for="type-number">Number</label>

    <div class="field_input">
        <input type="number" class="input-text" id="type-number" name="type-number">
    </div>
</div>

<div class="field">
    <label for="type-password">Password</label>

    <div class="field_input">
        <input type="password" class="input-text validate-password" id="type-password" name="type-password">
    </div>
</div>

<div class="field">
    <label for="type-tel">Tel</label>

    <div class="field_input">
        <input type="tel" class="input-text" id="type-tel" name="type-tel">
    </div>
</div>

<div class="field">
    <label for="type-url">URL</label>

    <div class="field_input">
        <input type="url" class="input-text" id="type-url" name="type-url">
    </div>
</div>

<div class="dd-heading">State</div>

<div class="field">
    <label for="text-default">Text</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-default" name="text-default">
    </div>
</div>

<div class="field">
    <label for="text-disabled">Text Disabled</label>

    <div class="field_input">
        <input type="text" class="input-text" disabled id="text-disabled" name="text-disabled">
    </div>
</div>

<div class="field">
    <label for="text-hint">Text With Hint</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-hint" name="text-hint">

        <div class="input-hint">This is a hint</div>
    </div>
</div>

<div class="field">
    <label for="text-placeholder">Text With Placeholder</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-placeholder" name="text-placeholder" placeholder="Frodo Baggins">
    </div>
</div>

<div class="field">
    <label for="text-placeholder-small">Text With Small Placeholder</label>

    <div class="field_input">
        <input type="text" class="input-text input-placeholder--s" id="text-placeholder-small" name="text-placeholder-small" placeholder="Frodo Baggins">
    </div>
</div>

<div class="field">
    <label for="text-pattern">Text With Pattern [0-9]*</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-pattern" name="text-pattern" pattern="[0-9]*">
    </div>
</div>

<div class="field">
    <label for="text-required" class="required">Text Is Required</label>

    <div class="field_input">
        <input type="text" class="input-text required-entry" id="text-required" name="text-required">
    </div>
</div>

<div class="field">
    <label class="required" for="text-error">Text Has Error</label>

    <div class="field_input">
        <input type="text" class="input-text required-entry validation-failed" id="text-error" name="text-error">
        <div class="validation-advice">This is a required field.</div>
    </div>
</div>

<div class="dd-heading">Modifier: Size</div>

<div class="field">
    <label for="text-size-default">Default</label>

    <div class="field_input">
        <input type="text" class="input-text" id="text-size-default" name="text-size-default">
    </div>
</div>

<div class="field">
    <label for="text-size-s">Small (S)</label>

    <div class="field_input">
        <input type="text" class="input-text input-text--s" id="text-size-s" name="text-size-s">
    </div>
</div>

<div class="field">
    <label for="text-size-xs">Extra Small (XS)</label>

    <div class="field_input">
        <input type="text" class="input-text input-text--xs" id="text-size-xs" name="text-size-xs">
    </div>
</div>

<div class="field">
    <label for="text-size-xxs">Extra Extra Small (XXS)</label>

    <div class="field_input">
        <input type="text" class="input-text input-text--xxs" id="text-size-xxs" name="text-size-xxs">
    </div>
</div>

<div class="dd-heading">Textarea</div>

<div class="field">
    <label for="textarea">Textarea</label>

    <div class="field_input">
        <textarea class="input-text" id="textarea" name="textarea" rows="4"></textarea>
    </div>
</div>
