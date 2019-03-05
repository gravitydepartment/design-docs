---
name: Page Title
enabled: true
wrappers: container
description: >
    The `page-title` component adds styling and scales the primary heading on the page.
---

<div class="dd-heading">Default</div>

<div class="page-title">
    <h1>Heading One</h1>
</div>

<div class="dd-heading">State: Pre</div>

<div class="page-title">
    <div class="page-title_pre">
        <a href="#">&laquo; Dashboard</a>
    </div>

    <h1>Heading One</h1>
</div>

<div class="dd-heading">State: Actions</div>

<div class="page-title">
    <div class="page-title_actions action-group">
        <button type="button" class="button">Button</button>
        <button type="button" class="button button--help">Help</button>
    </div>

    <h1>Heading One Long Long Long</h1>
</div>

<div class="dd-heading">State: Actions + Pre</div>

<div class="page-title">
    <div class="page-title_actions action-group">
        <button type="button" class="button button--s">Print</button>
    </div>

    <div class="page-title_pre">
        <a href="#">&laquo; Dashboard</a>
    </div>

    <h1>Heading One</h1>
</div>

<div class="dd-heading">State: Before Action Group</div>

<div class="page-title">
    <h1>Heading One</h1>
</div>

<p class="action-group">
    <button type="button" class="button">Button</button>
    <button type="button" class="button button--help">Help</button>
</p>

<div class="dd-heading">State: After Messages</div>

<ul class="messages">
    <li class="error-msg">
        <ul>
            <li><span>Error message.</span></li>
        </ul>
    </li>
</ul>

<div class="page-title">
    <h1>Heading One</h1>
</div>
