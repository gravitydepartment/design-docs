---
name: Hero (--align)
enabled: true
wrappers: container
description: >
    Alignment modifiers position content and align text within the `.hero` element.

    ### Modifier classes

    <table class="table">
        <tr>
            <th>Class</th>
            <th>Effect</th>
        </tr>

        <tr>
            <td>None</td>
            <td>Center positioned content</td>
        </tr>

        <tr>
            <td><code>hero--left</code></td>
            <td>Left positioned content</td>
        </tr>

        <tr>
            <td><code>hero--right</code></td>
            <td>Right positioned content</td>
        </tr>
    </table>
---

<div class="dd-heading">Default</div>

<div class="hero">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Center</div>
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Left</div>

<div class="hero hero--left">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Left</div>
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Right</div>

<div class="hero hero--right">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Right</div>
        </div>
    </div>
</div>
