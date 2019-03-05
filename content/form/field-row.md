---
name: Field Row
enabled: true
wrappers: container
description: >
    The `field-row` component positions multiple inputs adjacent and wraps properly.
---

<div class="dd-heading">With Input Text</div>

<div class="field-row">
    <div class="field">
        <label for="text-1">Month</label>

        <div class="field_input">
            <input type="text" class="input-text input-text--xxs" id="text-1" name="text-1" placeholder="MM">
        </div>
    </div>

    <div class="field">
        <label for="text-2">Day</label>

        <div class="field_input">
            <input type="text" class="input-text input-text--xxs" id="text-2" name="text-2" placeholder="DD">
        </div>
    </div>

    <div class="field">
        <label for="text-3">Year</label>

        <div class="field_input">
            <input type="text" class="input-text input-text--xxs" id="text-3" name="text-3" placeholder="YYYY">
        </div>
    </div>
</div>

<div class="dd-heading">With Select</div>

<div class="field-row">
    <div class="field">
        <label for="select-1">Month</label>

        <div class="field_input">
            <select class="input-select input-select--inline" id="select-1" name="select-1">
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
        <label for="select-2">Year</label>

        <div class="field_input">
            <select class="input-select input-select--inline" id="select-2" name="select-2">
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

<div class="dd-heading">With Checkbox</div>

<div class="field-row">
    <div class="field control">
        <input type="checkbox" id="checkbox-1" name="checkbox-1">
        <label for="checkbox-1">Apple</label>
    </div>

    <div class="field control">
        <input type="checkbox" id="checkbox-2" name="checkbox-2">
        <label for="checkbox-2">Banana</label>
    </div>

    <div class="field control">
        <input type="checkbox" id="checkbox-3" name="checkbox-3">
        <label for="checkbox-3">Orange</label>
    </div>
</div>

<div class="dd-heading">With Radio</div>

<div class="field-row">
    <div class="field control">
        <input type="radio" id="radio-1" name="radio">
        <label for="radio-1">Apple</label>
    </div>

    <div class="field control">
        <input type="radio" id="radio-2" name="radio">
        <label for="radio-2">Banana</label>
    </div>

    <div class="field control">
        <input type="radio" id="radio-3" name="radio">
        <label for="radio-3">Orange</label>
    </div>
</div>
