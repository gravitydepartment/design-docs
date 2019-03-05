---
name: Stepper
enabled: true
wrappers: container
description: >
    The `stepper` component adds plus/minus buttons to inputs.

    ### Defaults

    <table class="table">
        <tr>
            <th>Min</th>
            <td>1</td>
        </tr>

        <tr>
            <th>Max</th>
            <td>1,000,000,000</td>
        </tr>
    </table>

    ### Setting min or max

    On the `.stepper` element set attributes `data-min="0"` or `data-max="5"` to limit the stepper range.
---

<div class="dd-heading">Default</div>

<div class="stepper">
    <label class="stepper_label required" for="qty">
        <em>*</em> Quantity
    </label>

    <div class="stepper_liner">
        <button type="button" class="button stepper_button stepper_button--down">
            Decrease quantity
        </button>

        <input type="text" class="input-text stepper_input" id="qty" name="qty" maxlength="12" pattern="[0-9]*" value="1">

        <button type="button" class="button stepper_button stepper_button--up">
            Increase quantity
        </button>
    </div>
</div>

<br>

<div class="dd-heading">Modifier: Large</div>

<div class="stepper stepper--l">
    <label class="stepper_label required" for="qty">
        <em>*</em> Quantity
    </label>

    <div class="stepper_liner">
        <button type="button" class="button stepper_button stepper_button--down">
            Decrease quantity
        </button>

        <input type="text" class="input-text stepper_input" id="qty" name="qty" maxlength="12" pattern="[0-9]*" value="1">

        <button type="button" class="button stepper_button stepper_button--up">
            Increase quantity
        </button>
    </div>
</div>

<br>

<div class="dd-heading">State: Minimum and Maximum</div>

<p>This example has <code>data-min="0"</code> and <code>data-max="5"</code>.</p>

<div class="stepper" data-min="0" data-max="5">
    <label class="stepper_label required" for="qty">
        <em>*</em> Quantity
    </label>

    <div class="stepper_liner">
        <button type="button" class="button stepper_button stepper_button--down">
            Decrease quantity
        </button>

        <input type="text" class="input-text stepper_input" id="qty" name="qty" maxlength="12" pattern="[0-9]*" value="1">

        <button type="button" class="button stepper_button stepper_button--up">
            Increase quantity
        </button>
    </div>
</div>

<br>

<div class="dd-heading">State: Disabled</div>

<div class="stepper">
    <label class="stepper_label required" for="qty">
        <em>*</em> Quantity
    </label>

    <div class="stepper_liner">
        <button type="button" class="button stepper_button stepper_button--down" disabled>
            Decrease quantity
        </button>

        <input type="text" class="input-text stepper_input" disabled id="qty" name="qty" maxlength="12" pattern="[0-9]*" value="1">

        <button type="button" class="button stepper_button stepper_button--up" disabled>
            Increase quantity
        </button>
    </div>
</div>
