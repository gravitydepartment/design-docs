---
name: Strap (--image)
enabled: true
wrappers: ''
description: >
    The `strap--image` modifier is an image-based `strap` component.

    Images will scale until replaced by `srset` definitions.

    ### Assets

    <table class="table">
        <tr>
            <th>Asset Size</th>
            <th>Media Query</th>
        </tr>

        <tr>
            <td>375 x 50 (@1x)</td>
            <td>Default</td>
        </tr>

        <tr>
            <td>750 x 50 (@1x)</td>
            <td>min-width: 750px</td>
        </tr>

        <tr>
            <td>1200 x 50 (@1x)</td>
            <td>min-width: 1200px</td>
        </tr>
    </table>
---

<a class="strap strap--image" href="#" style="background: #CC0000;">
    <picture>
        <source srcset="//placehold.it/1200x50" media="(min-width: 1200px)">
        <source srcset="//placehold.it/750x50" media="(min-width: 750px)">
        <img srcset="//placehold.it/375x50" alt="#">
    </picture>
</a>
