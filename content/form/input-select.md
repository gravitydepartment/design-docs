---
name: Input Select
enabled: true
wrappers: container
description: >
    The `input-select` component masks a `<select>` input, so the surrounding `<div>` can be reliably styled across almost all browsers. It retains all the interactive and accessibility properties of a natural `<select>` input, and uses only CSS for styling.

    The `input-select--compact` modifier reduces the height of the `<select>` input.

    The `input-select--inline` modifier forces the component to shrink to fit the width of its content. This is beneficial when multiple `<select>` are positioned adjacent.
---

<div class="dd-heading">State</div>

<div class="field">
    <label for="select-default">Default</label>

    <div class="field_input">
        <select class="input-select" id="select-default" name="select-default">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>
    </div>
</div>

<div class="field">
    <label for="select-disabled">Disabled</label>

    <div class="field_input">
        <select class="input-select" disabled id="select-disabled" name="select-disabled">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>
    </div>
</div>

<div class="field">
    <label class="required" for="select-error">Has Error</label>

    <div class="field_input">
        <select class="input-select required-entry validation-failed" id="select-error" name="select-error">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>

        <div class="validation-advice">
            This is a required field.
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Compact</div>

<div class="field">
    <label for="select-compact">Compact</label>

    <div class="field_input">
        <select class="input-select input-select--compact" id="select-compact" name="select-compact">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>
    </div>
</div>

<div class="dd-heading">Modifier: Inline</div>

<div class="field-row">
    <div class="field">
        <label for="select-inline-1">Month</label>

        <div class="field_input">
            <select class="input-select input-select--xs input-select--inline" id="select-inline-1" name="select-inline-1">
                <option>Select...</option>
                <option>01 January</option>
                <option>02 February</option>
                <option>03 March</option>
                <option>04 April</option>
                <option>05 May</option>
                <option>06 June</option>
                <option>07 July</option>
                <option>08 August</option>
                <option>09 September</option>
                <option>10 October</option>
                <option>11 November</option>
                <option>12 December</option>
            </select>
        </div>
    </div>

    <div class="field">
        <label for="select-inline-2">Year</label>

        <div class="field_input">
            <select class="input-select input-select--xs input-select--inline" id="select-inline-2" name="select-inline-2">
                <option>Select...</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
            </select>
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Size</div>

<div class="field">
    <label for="select-size-s">Small (S)</label>

    <div class="field_input">
        <select class="input-select input-select--s" id="select-size-s" name="select-size-s">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas</option>
        </select>
    </div>
</div>

<div class="field">
    <label for="select-size-xs">Extra Small (XS)</label>

    <div class="field_input">
        <select class="input-select input-select--xs" id="select-size-xs" name="select-size-xs">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas</option>
        </select>
    </div>
</div>

<div class="field">
    <label for="select-size-xxs">Extra Extra Small (XXS)</label>

    <div class="field_input">
        <select class="input-select input-select--xxs" id="select-size-xxs" name="select-size-xxs">
            <option>Select...</option>
            <option>Apples</option>
            <option>Oranges</option>
            <option>Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas Bananas</option>
        </select>
    </div>
</div>
