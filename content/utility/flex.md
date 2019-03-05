---
name: Flex
enabled: true
wrappers: container
description: >
    Flex utility classes.

    ### Flex Center

    Used on a parent to visually center the child element(s).

    ### Flex Ghost

    Used as a direct child of a `display: flex` parent with `flex-wrap: wrap`, add as many instances of this element as (n-1) items fit along the main axis. This prevents an uneven number of items on the last row/column from being distributed unlike other rows/columns.

    See: [https://codepen.io/brendanfalkowski/pen/pebayb](https://codepen.io/brendanfalkowski/pen/pebayb)

    ### Flex Spacer

    Used as a direct child of a `display: flex` parent, this element expands to fill the available space along the main axis.
---

<div class="dd-heading">Flex Center</div>

<div class="flex-center" style="height: 250px; background: #333;">
    <img src="//placehold.it/100x100" alt="">
</div>

<br>
<br>

<div class="dd-heading">Flex Ghost</div>

<div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <div style="width: 25%;">
        <div style="margin: 15px; background: #DDD;">The quick brown fox jumps over the lazy dog.</div>
    </div>

    <div style="width: 25%;">
        <div style="margin: 15px; background: #DDD;">The quick brown fox jumps over the lazy dog.</div>
    </div>

    <div style="width: 25%;">
        <div style="margin: 15px; background: #DDD;">The quick brown fox jumps over the lazy dog.</div>
    </div>

    <div style="width: 25%;">
        <div style="margin: 15px; background: #DDD;">The quick brown fox jumps over the lazy dog.</div>
    </div>

    <div style="width: 25%;">
        <div style="margin: 15px; background: #DDD;">The quick brown fox jumps over the lazy dog.</div>
    </div>

    <div style="width: 25%;">
        <div style="margin: 15px; background: #DDD;">The quick brown fox jumps over the lazy dog.</div>
    </div>

    <div class="flex-ghost" style="width: 25%;"></div>
    <div class="flex-ghost" style="width: 25%;"></div>
    <div class="flex-ghost" style="width: 25%;"></div>
    <div class="flex-ghost" style="width: 25%;"></div>
</div>

<br>

<div class="dd-heading">Flex Spacer</div>

<div style="display: flex; flex-direction: column; height: 300px; padding: 15px; background: #CCC;">
    <p>The quick brown fox jumps over the lazy dog.</p>

    <p>The quick brown fox jumps over the lazy dog.</p>

    <div class="flex-spacer"></div>

    <div>
        <button>Button</button>
        <button>Button</button>
    </div>
</div>
