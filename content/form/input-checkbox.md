---
name: Input Checkbox
enabled: true
wrappers: container
description: >
    Checkbox inputs are formatted using `control` and `controls` components.

    The `control` component styles a single input.

    The `control--primary` modifier makes styling more prominent.

    The `controls` component groups several related `control` components. Use `controls_title` to give the group a heading.
---

<div class="dd-heading">Control</div>

<div class="field control">
    <input type="checkbox" id="checkbox-short" name="checkbox-short">
    <label for="checkbox-short">A single checkbox</label>
</div>

<div class="field control">
    <input type="checkbox" id="checkbox-long" name="checkbox-long">
    <label for="checkbox-long">A single checkbox with a really long label that wraps around to a second line without breaking the layout</label>
</div>

<div class="field control">
    <input type="checkbox" id="checkbox-hint" name="checkbox-hint">

    <label for="checkbox-hint">
        A single checkbox
        <div class="input-hint">With some hint text.</div>
    </label>
</div>

<div class="field control">
    <input type="checkbox" disabled id="checkbox-disabled" name="checkbox-disabled">
    <label for="checkbox-disabled">Disabled checkbox</label>
</div>

<div class="dd-heading">Modifier: Primary</div>

<div class="field control control--primary">
    <input type="checkbox" id="checkbox-primary-short" name="checkbox-primary-short">
    <label for="checkbox-primary-short">A single checkbox</label>
</div>

<div class="field control control--primary">
    <input type="checkbox" id="checkbox-primary-long" name="checkbox-primary-long">
    <label for="checkbox-primary-long">A single checkbox with a really long label that wraps around to a second line without breaking the layout</label>
</div>

<div class="field control control--primary">
    <input type="checkbox" id="checkbox-primary-hint" name="checkbox-primary-hint">

    <label for="checkbox-primary-hint">
        A single checkbox
        <div class="input-hint">With some hint text.</div>
    </label>
</div>

<div class="field control control--primary">
    <input type="checkbox" disabled id="checkbox-primary-disabled" name="checkbox-primary-disabled">
    <label for="checkbox-primary-disabled">Disabled checkbox</label>
</div>

<div class="dd-heading">Controls Around Control</div>

<div class="field controls">
    <div class="controls_title">
        Title for checkbox group
    </div>

    <div class="control">
        <input type="checkbox" id="checkbox-group-1" name="checkbox-group-1">
        <label for="checkbox-group-1">First in a checkbox group</label>
    </div>

    <div class="control">
        <input type="checkbox" id="checkbox-group-2" name="checkbox-group-2">
        <label for="checkbox-group-2">Second in a checkbox group</label>
    </div>

    <div class="control">
        <input type="checkbox" id="checkbox-group-3" name="checkbox-group-3">
        <label for="checkbox-group-3">Third in a checkbox group</label>
    </div>
</div>

<div class="field controls">
    <div class="controls_title">
        Title for checkbox group
    </div>

    <div class="control control--primary">
        <input type="checkbox" id="checkbox-primary-group-1" name="checkbox-primary-group-1">
        <label for="checkbox-primary-group-1">First in a checkbox group</label>
    </div>

    <div class="control control--primary">
        <input type="checkbox" id="checkbox-primary-group-2" name="checkbox-primary-group-2">
        <label for="checkbox-primary-group-2">Second in a checkbox group</label>
    </div>

    <div class="control control--primary">
        <input type="checkbox" id="checkbox-primary-group-3" name="checkbox-primary-group-3">
        <label for="checkbox-primary-group-3">Third in a checkbox group</label>
    </div>
</div>
