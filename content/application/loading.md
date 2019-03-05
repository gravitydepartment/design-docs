---
name: Loading
enabled: true
wrappers: container
description: >
    The `loading` component is used when AJAX responses are pending.
---

<div class="dd-heading">Default</div>

<p class="loading">
    Loading
</p>

<div class="dd-heading">Box + Loading</div>

<div class="box">
    <div class="box_body">
        <div class="loading">
            Loading
        </div>
    </div>
</div>

<div class="dd-heading">Box + Utility (background-base) + Loading</div>

<div class="box background-base">
    <div class="box_body">
        <div class="loading">
            Loading
        </div>
    </div>
</div>

<div class="dd-heading">Button + Loading</div>

<p>
    <button type="button" class="button">
        Button
    </button>

    <span class="loading">
        Loading
    </span>
</p>
