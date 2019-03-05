---
name: Box
enabled: true
wrappers: container
description: >
    The `box` component offsets content. It may have a header, body, and footer.
---

<div class="dd-heading">Default</div>

<div class="box">
    <div class="box_header">
        <h2>The Hobbit</h2>

        <div class="box_subtitle">
            An Unexpected Journey
        </div>
    </div>

    <div class="box_body">
        <p>In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.</p>

        <button type="button" class="button">
            Action
        </button>
    </div>

    <div class="box_footer text-s text-subtle">
        Written by J.R.R. Tolkien
    </div>
</div>

<div class="dd-heading">Box with Stats in Header</div>

<div class="box">
    <div class="box_header">
        <div class="stat-list stat-list--row m-b-0">
            <div class="stat">
                <div class="stat_label">Founded</div>
                <div class="stat_value">1776</div>
            </div>

            <div class="stat">
                <div class="stat_label">States</div>
                <div class="stat_value">50</div>
            </div>

            <div class="stat">
                <div class="stat_label">Population</div>
                <div class="stat_value">320M</div>
            </div>
        </div>
    </div>

    <div class="box_body">
        <p>In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.</p>
    </div>
</div>

<div class="dd-heading">Box with Body Only</div>

<div class="box">
    <div class="box_body">
        <p>In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.</p>

        <button type="button" class="button">
            Action
        </button>
    </div>
</div>

<div class="dd-heading">Box with "background-base" Utility</div>

<div class="box background-base">
    <div class="box_body">
        <p>In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.</p>

        <button type="button" class="button">
            Action
        </button>
    </div>
</div>
