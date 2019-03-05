---
name: Hero
enabled: true
wrappers: container
description: >
    The `hero` component can use a `<div>` or `<a>` to surround the component.

    ## Assets

    The hero requires two assets for the same campaign. They have the same content but different composition to suit the range of devices for which that asset is visible.

    Asset sizes to produce and upload to the CDN:

    <table>
        <tr>
            <th>Asset: Large</th>
            <td>1200 x 400 (@1x)</td>
        </tr>

        <tr>
            <th>Asset: Small</th>
            <td>500 x 350 (@1x)</td>
        </tr>
    </table>

    ## Optional content

    You can delete the `.hero_body` element for image-only usage. If text will be part of the image composition make sure it's readable when scaled.

    ## Downshift

    When the `.hero_content` becomes too squished, move the it beneath the `.hero_image`. This is useful when the image is busy, and the text loses readability when it's overlayed at smaller sizes.
---

<div class="dd-heading">Default (Image Only)</div>

<div class="hero">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>
</div>

<div class="dd-heading">State: Link Only</div>

<a class="hero" href="#">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>
</a>

<div class="dd-heading">State: Image + Content</div>

<div class="hero">
    <picture class="hero_image">
        <source srcset="//placehold.it/1200x400" media="(min-width: 500px)">
        <img srcset="//placehold.it/500x350" alt="#">
    </picture>

    <div class="hero_body">
        <div class="hero_content">
            <div class="hero_title">Hero Title</div>

            <p class="hero_text">Once upon a time there lived a dragon.</p>

            <div class="action-group action-group--center">
                <a class="button" href="#">
                    Read More
                </a>
            </div>
        </div>
    </div>
</div>
