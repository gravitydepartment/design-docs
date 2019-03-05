---
name: Fluid List
enabled: true
wrappers: container
description: >
    The `fluid-list` component distributes elements in a row with scaling, and wraps them responsively.

    ### Modifier: Columns

    <table class="table">
        <tr>
            <th>Class</th>
            <th>Effect</th>
        </tr>

        <tr>
            <td>None</td>
            <td>1 or 2 columns scaled to the viewport</td>
        </tr>

        <tr>
            <td><code>fluid-list--3</code></td>
            <td>1, 2, or 3 columns scaled to the viewport</td>
        </tr>

        <tr>
            <td><code>fluid-list--4</code></td>
            <td>1, 2, 3, or 4 columns scaled to the viewport</td>
        </tr>
    </table>

    ### Modifier: Spacer

    The `fluid-list--spacer-{#}` modifiers set spacing between items.

    <table class="table">
        <tr>
            <th>Class</th>
            <th>Effect</th>
        </tr>

        <tr>
            <td><code>fluid-list--spacer-0</code></td>
            <td>No vertical + horizontal spacer</td>
        </tr>

        <tr>
            <td><code>fluid-list--spacer-s</code></td>
            <td>Small vertical + horizontal spacer</td>
        </tr>

        <tr>
            <td>None</td>
            <td>Base vertical + horizontal spacer</td>
        </tr>

        <tr>
            <td><code>fluid-list--spacer-l</code></td>
            <td>Large vertical + horizontal spacer</td>
        </tr>

        <tr>
            <td><code>fluid-list--spacer-xl</code></td>
            <td>Extra large vertical + horizontal spacer</td>
        </tr>
    </table>

    See variations for spacer examples.

    <a href="/design/patterns/layout/fluid-list--2">Fluid List (--2)</a><br>
    <a href="/design/patterns/layout/fluid-list--3">Fluid List (--3)</a><br>
    <a href="/design/patterns/layout/fluid-list--4">Fluid List (--4)</a>

    ### Assets

    See variations for asset specs.

    <a href="/design/patterns/layout/fluid-list--2">Fluid List (--2)</a><br>
    <a href="/design/patterns/layout/fluid-list--3">Fluid List (--3)</a><br>
    <a href="/design/patterns/layout/fluid-list--4">Fluid List (--4)</a>
---

<div class="dd-heading">Default</div>

<div class="fluid-list">
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

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: 3</div>

<div class="fluid-list fluid-list--3">
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

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<div class="dd-heading">Modifier: 4</div>

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

    <div class="fluid-list_item">
        <p>Text</p>
    </div>
</div>

<style>
    .fluid-list_item p {
        width: 100%;
        background-color: gold;
    }
</style>
