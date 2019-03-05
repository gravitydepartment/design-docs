---
name: Action Group
enabled: true
wrappers: container
description: >
    The `action-group` component controls spacing, alignment, and wrapping for multiple buttons in a row.

    Use `p.action-group` when a `margin-bottom` is required.

    Use `div.action-group` for `margin-bottom: 0`.
---

<div class="dd-heading">Default</div>

<p class="action-group">
    <button type="button" class="button">Button With Long Title</button>
    <button type="button" class="button button--s">Button With Long Title</button>
    <button type="button" class="button button--l">Button With Long Title</button>
    <button type="button" class="button">Button With Long Title</button>
</p>

<div class="dd-heading">Modifier: Center</div>

<p class="action-group action-group--center">
    <button type="button" class="button">Button With Long Title</button>
    <button type="button" class="button button--l">Button With Long Title</button>
    <button type="button" class="button button--xl">Button With Long Title</button>
    <button type="button" class="button">Button With Long Title</button>
</p>

<div class="dd-heading">State: Label Before</div>

<p class="action-group">
    <span class="action-group_label">Prefix Label:</span>
    <button type="button" class="button">Button With Long Title</button>
</p>

<p class="action-group">
    <span class="action-group_label">Prefix Label:</span>
    <button type="button" class="button button--s">Small Button With Long Title</button>
</p>

<div class="dd-heading">State: Label After</div>

<p class="action-group">
    <button type="button" class="button">Button</button>
    <span class="action-group_label">Suffix Label</span>
</p>

<p class="action-group">
    <button type="button" class="button button--s">Small Button</button>
    <span class="action-group_label text-s">Small Suffix Label</span>
</p>

<p class="action-group">
    <button type="button" class="button button--xs">Extra Small Button</button>
    <span class="action-group_label text-xs">Extra Small Suffix Label</span>
</p>

<div class="dd-heading">State: With Loading</div>

<p class="action-group">
    <button type="button" class="button" disabled>
        Button
    </button>

    <span class="loading">Loading</span>
</p>
