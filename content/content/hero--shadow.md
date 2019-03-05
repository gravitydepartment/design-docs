---
name: Hero (--shadow)
enabled: true
wrappers: container
description: >
    The `hero--shadow` modifier shift content to the left/right within the `hero` component.

    ### Modifier classes

    <table class="table">
        <tr>
            <th>Class</th>
            <th>Effect</th>
        </tr>

        <tr>
            <td><code>hero--shadow</code></td>
            <td>Center positioned shadow</td>
        </tr>

        <tr>
            <td><code>hero--shadow</code> + <code>hero--left</code></td>
            <td>Left positioned shadow</td>
        </tr>

        <tr>
            <td><code>hero--shadow</code> + <code>hero--right</code></td>
            <td>Right positioned shadow</td>
        </tr>
    </table>
---

<div class="dd-heading">Modifier: Shadow</div>

<div class="hero hero--shadow">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Hero Title</div>
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Shadow + Left</div>

<div class="hero hero--left hero--shadow">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Hero Title</div>
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Shadow + Right</div>

<div class="hero hero--right hero--shadow">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Hero Title</div>
        </div>
    </div>
</div>
