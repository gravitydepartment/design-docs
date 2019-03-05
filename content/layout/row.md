---
name: Row
enabled: true
wrappers: container
description: >
    The `row` component aligns all child elements in a row without wrapping.

    ### Items

    The `row_item--pad` modifier adds `margin-right` to that element.

    The `row_item--grow` modifier forces that element to consume the maximum available space in the row.
---

<div class="dd-heading">Default</div>

<form class="row">
    <label for="example">Label</label>

    <input type="text" class="input-text row_item--grow" id="example">

    <button type="submit" class="button">Button</button>
</form>

<br>
<br>

<div class="dd-heading">Modifier: Grow + Pad</div>

<form class="row">
    <label class="row_item--pad" for="example">Label</label>

    <input type="text" class="input-text row_item--grow row_item--pad" id="example">

    <button type="submit" class="button">Button</button>
</form>

<br>
<br>

<div class="dd-heading">Modifier: Center</div>

<form class="row row--center">
    <label class="row_item--pad" for="example">Label</label>

    <input type="text" class="input-text row_item--grow row_item--pad" id="example">

    <button type="submit" class="button">Button</button>
</form>

<br>
<br>

<div class="dd-heading">Context: Inside “Max Width” Utility</div>

<div class="max-width-400">
    <form class="row">
        <label class="row_item--pad" for="example">Label</label>

        <input type="text" class="input-text row_item--grow row_item--pad" id="example">

        <button type="submit" class="button">Button</button>
    </form>
</div>
