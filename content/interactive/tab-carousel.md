---
name: Tab Carousel
enabled: true
wrappers: container
description: >
    The `tab-carousel` component is a full-width image carousel.

    ### Slide count

    The carousel supports 3 or 4 slides. Two slides is not supported because it's more effective to place two "hero" components. Five or more slides is not supported because engagement flatlines after the third slide.

    ### Content

    Each slide has one call-to-action surrounding an image. Slides are always wrapped in a link.

    Note: the placement of navigational buttons overlaying the slide content. Ensure your graphical composition has sufficient white-space equal to the button dimensions around each button.

    ### Assets

    Each slide requires two assets for each slide. They should represent the same info in different compositions to scale appropriately for different device sizes.

    <table class="table">
        <tr>
            <th>Asset Size</th>
            <th>Usage</th>
        </tr>

        <tr>
            <td>1200 &times; 500 (@1x)</td>
            <td>For large screens</td>
        </tr>

        <tr>
            <td>600 &times; 250 (@1x)</td>
            <td>For small screens</td>
        </tr>
    </table>

    ### HTML

    The tabbed pagination is generated automatically from the `<img alt="">` attribute, which is required for each image in the carousel.
---

<div class="tab-carousel">
    <div class="owl-carousel">
        <a class="tab-carousel_link" href="#">
            <picture>
                <source srcset="//placehold.it/1200x500/cc5de8/ffffff" media="(min-width: 600px)">
                <img srcset="//placehold.it/600x250/cc5de8/ffffff" alt="Nulla facilisi duis aliquet egestas purus in blandit Nulla facilisi duis aliquet egestas purus in blandit">
            </picture>
        </a>

        <a class="tab-carousel_link" href="#">
            <picture>
                <source srcset="//placehold.it/1200x500/f06595/ffffff" media="(min-width: 600px)">
                <img srcset="//placehold.it/600x250/f06595/ffffff" alt="Two Two Two">
            </picture>
        </a>

        <a class="tab-carousel_link" href="#">
            <picture>
                <source srcset="//placehold.it/1200x500/22b8cf/ffffff" media="(min-width: 600px)">
                <img srcset="//placehold.it/600x250/22b8cf/ffffff" alt="Nulla facilisi duis aliquet egestas purus in blandit">
            </picture>
        </a>

        <a class="tab-carousel_link" href="#">
            <picture>
                <source srcset="//placehold.it/1200x500/94d82d/ffffff" media="(min-width: 600px)">
                <img srcset="//placehold.it/600x250/94d82d/ffffff" alt="Four four four">
            </picture>
        </a>
    </div>
</div>
