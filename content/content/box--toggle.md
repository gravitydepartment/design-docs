---
name: Box (--toggle)
enabled: true
wrappers: container
description: >
    A `box` with `data-toggle` attributes to expand/collapse the body.

    See [toggle](/design/patterns/interactive/toggle) component.
---

<div class="box" data-toggle="hide">
    <div class="box_header" data-toggle-trigger>
        <h2>The Hobbit</h2>
    </div>

    <div class="box_body" data-toggle-target>
        <p>In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.</p>
    </div>

    <div class="box_footer text-s text-subtle" data-toggle-target>
        Written by J.R.R. Tolkien
    </div>
</div>
