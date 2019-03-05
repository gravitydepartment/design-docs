---
name: Note
enabled: true
wrappers: container
description: >
    The `note` component offsets text and actions with a colored box.

    Use this to draw attention to semi-important information within long-form copywriting.
---

<div class="dd-heading">Default</div>

<p class="note">This is a paragraph with the "note" class.</p>

<div class="dd-heading">Modifier: Action</div>

<div class="note note--action">
    <div class="note_body">
        This note has an action.
    </div>

    <div class="note_action">
        <a href="#" class="button button--secondary button--s">View More</a>
    </div>
</div>

<div class="dd-heading">Modifier: Size</div>

<p class="note note--s">This is a paragraph with the "note--s" modifier.</p>

<div class="dd-heading">Modifier: State</div>

<p class="note note--warn">This is a paragraph with the "note--warn" modifier.</p>
<p class="note note--danger">This is a paragraph with the "note--danger" modifier.</p>
