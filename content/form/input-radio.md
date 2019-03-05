---
name: Input Radio
enabled: true
wrappers: container
description: >
    Radio inputs are formatted using `control` and `controls` components.

    The `control` component styles a single input.

    The `control--primary` modifier makes styling more prominent.

    The `controls` component groups several related `control` components. Use `controls_title` to give the group a heading.
---

<div class="dd-heading">Control</div>

<div class="field control">
    <input type="radio" id="radio-short" name="radio-short">
    <label for="radio-short">A single radio</label>
</div>

<div class="field control">
    <input type="radio" id="radio-long" name="radio-long">
    <label for="radio-long">A single radio with a really long label that wraps around to a second line without breaking the layout</label>
</div>

<div class="field control">
    <input type="radio" id="radio-hint" name="radio-hint">

    <label for="radio-hint">
        A single radio
        <div class="input-hint">With some hint text.</div>
    </label>
</div>

<div class="field control">
    <input type="radio" disabled id="radio-disabled" name="radio-disabled">
    <label for="radio-disabled">Disabled radio</label>
</div>

<div class="dd-heading">Modifier: Primary</div>

<div class="field control control--primary">
    <input type="radio" id="radio-primary-short" name="radio-primary-short">
    <label for="radio-primary-short">A single radio</label>
</div>

<div class="field control control--primary">
    <input type="radio" id="radio-primary-long" name="radio-primary-long">
    <label for="radio-primary-long">A single radio with a really long label that wraps around to a second line without breaking the layout</label>
</div>

<div class="field control control--primary">
    <input type="radio" id="radio-primary-hint" name="radio-primary-hint">

    <label for="radio-primary-hint">
        A single radio
        <div class="input-hint">With some hint text.</div>
    </label>
</div>

<div class="field control control--primary">
    <input type="radio" disabled id="radio-primary-disabled" name="radio-primary-disabled">
    <label for="radio-primary-disabled">Disabled radio</label>
</div>

<div class="dd-heading">Controls Around Control</div>

<div class="field controls">
    <div class="controls_title">
        Title for radio group
    </div>

    <div class="control">
        <input type="radio" id="radio-group-1" name="radio-group">
        <label for="radio-group-1">First in a radio group</label>
    </div>

    <div class="control">
        <input type="radio" id="radio-group-2" name="radio-group">
        <label for="radio-group-2">Second in a radio group</label>
    </div>

    <div class="control">
        <input type="radio" id="radio-group-3" name="radio-group">
        <label for="radio-group-3">Third in a radio group</label>
    </div>
</div>

<div class="field controls">
    <div class="controls_title">
        Title for radio group
    </div>

    <div class="control control--primary">
        <input type="radio" id="radio-primary-group-1" name="radio-primary-group">
        <label for="radio-primary-group-1">First in a radio group</label>
    </div>

    <div class="control control--primary">
        <input type="radio" id="radio-primary-group-2" name="radio-primary-group">
        <label for="radio-primary-group-2">Second in a radio group</label>
    </div>

    <div class="control control--primary">
        <input type="radio" id="radio-primary-group-3" name="radio-primary-group">
        <label for="radio-primary-group-3">Third in a radio group</label>
    </div>
</div>
