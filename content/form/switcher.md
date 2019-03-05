---
name: Switcher
enabled: true
wrappers: container
description: >
    The `switcher` component converts a checkbox to a toggle switch.

    It retains all the interactive and accessibility properties of a checkbox, and uses only CSS for styling.
---

<div class="dd-heading">Default</div>

<div class="switcher">
    <input type="checkbox" class="switcher_checkbox" name="switcher-1" id="switcher-1">

    <label class="switcher_label" for="switcher-1">
        <span class="switcher_knob"></span>
    </label>
</div>

<br>

<div class="dd-heading">State: With Status</div>

<div class="switcher">
    <input type="checkbox" class="switcher_checkbox" name="switcher-2" id="switcher-2">

    <label class="switcher_label" for="switcher-2">
        <span class="switcher_knob"></span>

        <span class="switcher_status">
            <span class="switcher_status-on">On</span>
            <span class="switcher_status-off">Off</span>
        </span>
    </label>
</div>

<br>

<div class="dd-heading">State: With Prefix + Suffix</div>

<div class="switcher">
    <div class="switcher_prefix">Hello</div>

    <input type="checkbox" class="switcher_checkbox" name="switcher-3" id="switcher-3">

    <label class="switcher_label" for="switcher-3">
        <span class="switcher_knob"></span>
    </label>

    <div class="switcher_suffix">Goodbye</div>
</div>

<br>

<div class="dd-heading">Modifier: Center</div>

<div class="switcher switcher--center">
    <div class="switcher_prefix">Hello</div>

    <input type="checkbox" class="switcher_checkbox" name="switcher-4" id="switcher-4">

    <label class="switcher_label" for="switcher-4">
        <span class="switcher_knob"></span>
    </label>

    <div class="switcher_suffix">Goodbye</div>
</div>
