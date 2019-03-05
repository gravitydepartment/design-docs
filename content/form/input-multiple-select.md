---
name: Input Multiple Select
enabled: true
wrappers: container
description: >
    The `input-multiple-select` component styles a `<select>` input to allow multiple selections.
---

<div class="dd-heading">Default</div>

<div class="field">
    <label class="required" for="select-default">
        Multiple Select Default
    </label>

    <div class="field_input">
        <select class="input-multiple-select required-entry" id="select-default" multiple name="select-default" size="5">
            <option value="1">First option</option>
            <option value="2">Second option</option>
            <option value="3">Third option</option>
            <option value="4">Fourth option</option>
            <option value="5">Fifth option</option>
            <option value="6">An extremely long option to test what happens if something this large is ever in a select menu</option>
        </select>
    </div>
</div>

<div class="field">
    <label for="select-disabled">
        Multiple Select Disabled
    </label>

    <div class="field_input">
        <select class="input-multiple-select" disabled id="select-disabled" multiple name="select-disabled" size="5">
            <option value="1">First option</option>
            <option value="2">Second option</option>
            <option value="3">Third option</option>
            <option value="4">Fourth option</option>
            <option value="5">Fifth option</option>
            <option value="6">An extremely long option to test what happens if something this large is ever in a select menu</option>
        </select>
    </div>
</div>

<div class="field">
    <label class="required" for="select-required">
        Multiple Select Is Required
    </label>

    <div class="field_input">
        <select class="input-multiple-select required-entry" id="select-required" multiple name="select-required" size="5">
            <option value="1">First option</option>
            <option value="2">Second option</option>
            <option value="3">Third option</option>
            <option value="4">Fourth option</option>
            <option value="5">Fifth option</option>
            <option value="6">An extremely long option to test what happens if something this large is ever in a select menu</option>
        </select>
    </div>
</div>

<div class="field">
    <label class="required" for="select-error">
        Multiple Select Has Error
    </label>

    <div class="field_input">
        <select class="input-multiple-select required-entry validation-failed" id="select-error" multiple name="select-error" size="5">
            <option value="1">First option</option>
            <option value="2">Second option</option>
            <option value="3">Third option</option>
            <option value="4">Fourth option</option>
            <option value="5">Fifth option</option>
            <option value="6">An extremely long option to test what happens if something this large is ever in a select menu</option>
        </select>

        <div class="validation-advice">
            This is a required field.
        </div>
    </div>
</div>
