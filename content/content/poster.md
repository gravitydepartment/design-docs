---
name: Poster
enabled: true
wrappers: container
description: >
    The `poster` component renders an image with (optional) title and subtitle. The entire component can be linked.

    ### Assets

    <table class="table">
        <tr>
            <th>Asset Size</th>
            <td>592 x 300</td>
        </tr>

        <tr>
            <th>Rendered Size</th>
            <td>592 x 300 (@1x)</td>
        </tr>

        <tr>
            <th>File Type</th>
            <td>JPG or PNG</td>
        </tr>
    </table>

    ### Content

    The `poster_details` element is optional. Image composition should be considerate of the text's shape across devices.
---

<div class="poster">
    <div class="poster_item">
        <a href="#" class="poster_link">
            <div class="poster_details">
                <div class="poster_title">Title Headline</div>
                <div class="poster_subtitle">Subtitle text here</div>
            </div>

            <img class="poster_image" src="//placehold.it/592x300" alt="">
        </a>
    </div>

    <div class="poster_item">
        <a href="#" class="poster_link">
            <div class="poster_details">
                <div class="poster_title">New Arrivals</div>
                <div class="poster_subtitle">Fresh styles for Spring</div>
            </div>

            <img class="poster_image" src="//placehold.it/592x300" alt="">
        </a>
    </div>

    <div class="poster_item">
        <a href="#" class="poster_link">
            <div class="poster_details">
                <div class="poster_subtitle">Vomit on his sweater already</div>
                <div class="poster_title">Mom’s Spaghetti</div>
            </div>

            <img class="poster_image" src="//placehold.it/592x300" alt="">
        </a>
    </div>

    <div class="poster_item">
        <a href="#" class="poster_link">
            <div class="poster_details">
                <div class="poster_subtitle"><s>$29.99</s></div>
                <div class="poster_title">$22.99</div>
            </div>

            <img class="poster_image" src="//placehold.it/592x300" alt="">
        </a>
    </div>

    <div class="poster_item">
        <a href="#" class="poster_link">
            <div class="poster_details">
                <div class="badges">
                    <div class="badge badge--new">New</div>
                    <div class="badge badge--sale">Sale</div>
                </div>
            </div>

            <img class="poster_image" src="//placehold.it/592x300" alt="">
        </a>
    </div>
</div>
