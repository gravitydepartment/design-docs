---
name: Fluid List (--2)
enabled: true
wrappers: container
description: >
    The `fluid-list` component distributes elements in 1 or 2 scaled to the viewport.

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
            <td>600 &times; 600</td>
            <td>900 &times; 900</td>
            <td>1200 &times; 1200</td>
        </tr>

        <tr>
            <td>Golden (1.618:1)</td>
            <td>600 &times; 370</td>
            <td>900 &times; 556</td>
            <td>1200 &times; 741</td>
        </tr>

        <tr>
            <td>Wide (2:1)</td>
            <td>600 &times; 300</td>
            <td>900 &times; 450</td>
            <td>1200 &times; 600</td>
        </tr>
    </table>
---

<div class="dd-heading">Modifier: Spacer 0</div>

<div class="fluid-list fluid-list--spacer-0">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: Spacer S</div>

<div class="fluid-list fluid-list--spacer-s">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Default</div>

<div class="fluid-list">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: Spacer L</div>

<div class="fluid-list fluid-list--spacer-l">
    <div class="fluid-list_item">
        <p>Text</p>
    </div>

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: Spacer XL</div>

<div class="fluid-list fluid-list--spacer-xl">
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
