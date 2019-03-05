---
name: 'Hero (--contrast)'
enabled: true
wrappers: container
description: >
    Add a contrast modifier class to the `.hero` element.

    ### Modifier classes

    Default: no class needed (dark)<br>
    Dark text: `hero--text-dark`<br>
    Light text: `hero--text-light`
---

<div class="hero hero--text-dark">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Text Dark</div>
        </div>
    </div>
</div>

<div class="hero hero--text-light">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400/444/333" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350/444/333" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Text Light</div>
        </div>
    </div>
</div>
