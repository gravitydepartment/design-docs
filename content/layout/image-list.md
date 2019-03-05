---
name: Image List
enabled: true
wrappers: container
description: >
    The `image-list` component provides layout for a grid of images, which scale responsively.

    ### HTML

    The `image-list_name` element is optional. Place an `&nbsp;` between the last two words instead of a space to prevent typographic widows.

    Note: this pattern requires `flex-ghost` elements at the end of `.image-list`.

    ### Assets

    The standard pattern uses square images. Height is variable though, so if the situation calls for landscape images use the recommended dimensions.

    <table class="table">
        <tr>
            <th>Square</th>
            <td>250 &times; 250 (@1x)</td>
        </tr>

        <tr>
            <th>Landscape (alternate)</th>
            <td>250 &times; 125 (@1x)</td>
        </tr>
    </table>

    ### Modifier: Solid

    The `image-grid--solid` modifier does not scale items fluidly. Items have a fixed width and will wrap when space for the full item isn't available. Items are centered when this modifier is used.
---

<div class="dd-heading">Default</div>

<div class="image-list">
    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name Which Is Very Long And Wraps&nbsp;Lines
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
</div>

<div class="dd-heading">Modifier: Solid</div>

<div class="image-list image-list--solid">
    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name Which Is Very Long And Wraps&nbsp;Lines
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item">
        <a class="product-image" href="#">
            <img src="//placehold.it/250x250" alt="#">
        </a>

        <a class="image-list_name" href="#">
            Descriptive Name
        </a>
    </div>

    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
    <div class="image-list_item flex-ghost"></div>
</div>
