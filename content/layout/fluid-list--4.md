---
name: Fluid List (--4)
enabled: true
wrappers: container
description: >
    The `fluid-list--4` modifier distributes elements in 1, 2, 3, or 4 columns scaled to the viewport.

    ### Assets

    Using assets @1.5x should cover most breakpoints, and look good across devices.

    <table class="table">
        <tr>
            <th>Ratio</th>
            <th>Asset @1x</th>
            <th>Asset @1.5x</th>
            <th>Asset @2x</th>
        </tr>

        <tr>
            <td>Square (1:1)</td>
            <td>300 &times; 300</td>
            <td>450 &times; 450</td>
            <td>600 &times; 600</td>
        </tr>

        <tr>
            <td>Golden (1.618:1)</td>
            <td>300 &times; 247</td>
            <td>450 &times; 370</td>
            <td>600 &times; 494</td>
        </tr>

        <tr>
            <td>Wide (2:1)</td>
            <td>300 &times; 185</td>
            <td>450 &times; 278</td>
            <td>600 &times; 370</td>
        </tr>
    </table>
---

<div class="dd-heading">Modifier: Spacer 0</div>

<div class="fluid-list fluid-list--4 fluid-list--spacer-0">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: Spacer S</div>

<div class="fluid-list fluid-list--4 fluid-list--spacer-s">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Default</div>

<div class="fluid-list fluid-list--4">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: Spacer L</div>

<div class="fluid-list fluid-list--4 fluid-list--spacer-l">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: Spacer XL</div>

<div class="fluid-list fluid-list--4 fluid-list--spacer-xl">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<style>
    .fluid-list_item p {
        background-color: gold;
    }
</style>
