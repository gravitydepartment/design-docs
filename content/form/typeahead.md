---
name: Typeahead
enabled: true
wrappers: container
description: >
    See the [GravDept Typeahead](https://github.com/gravitydepartment/typeahead) documentation.

    ### Assets

    <table class="table">
        <tr>
            <th>Asset Size</th>
            <td>90 &times; 90</td>
            <td>150% bigger than rendered size</td>
        </tr>

        <tr>
            <th>Rendered Size</th>
            <td>60 &times; 60</td>
            <td>Scaled for sharpness</td>
        </tr>
    </table>
---

<div class="dd-heading">State: Empty</div>

<div class="typeahead">
    <div class="typeahead_empty">
        No results found.
    </div>
</div>

<div class="dd-heading">State: Loading</div>

<div class="typeahead">
    <div class="typeahead_loading">
        <div class="loading">
            Loading...
        </div>
    </div>
</div>

<div class="dd-heading">State: Link</div>

<div class="typeahead">
    <div class="typeahead_item">
        <a class="typeahead_link" href="#">
            Apple
        </a>
    </div>

    <div class="typeahead_item">
        <a class="typeahead_link" href="#">
            Banana
        </a>
    </div>

    <div class="typeahead_item">
        <a class="typeahead_link" href="#">
            Orange
        </a>
    </div>
</div>

<div class="dd-heading">State: Link With Image</div>

<div class="typeahead">
    <div class="typeahead_item">
        <a class="typeahead_link typeahead_link--has-button" href="#">
            <div class="media media--center">
                <div class="media_item">
                    <div class="typeahead_image product-image">
                        <img src="//placehold.it/90x90" alt="">
                    </div>
                </div>

                <div class="media_body">
                    <div class="product-name">
                        Product Name
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="typeahead_item">
        <a class="typeahead_link typeahead_link--has-button" href="#">
            <div class="media media--center">
                <div class="media_item">
                    <div class="typeahead_image product-image">
                        <img src="//placehold.it/90x90" alt="">
                    </div>
                </div>

                <div class="media_body">
                    <div class="product-name">
                        Product Name
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="dd-heading">State: Link With Image And Button</div>

<div class="typeahead">
    <div class="typeahead_item">
        <a class="typeahead_link typeahead_link--has-button" href="#">
            <div class="media media--center">
                <div class="media_item">
                    <div class="typeahead_image product-image">
                        <img src="//placehold.it/90x90" alt="">
                    </div>
                </div>

                <div class="media_body">
                    <div class="product-name">
                        Product Name
                    </div>
                </div>
            </div>
        </a>

        <button type="button" class="button button--s typeahead_button" href="#">
            Add To Cart
        </button>
    </div>

    <div class="typeahead_item">
        <a class="typeahead_link typeahead_link--has-button" href="#">
            <div class="media media--center">
                <div class="media_item">
                    <div class="typeahead_image product-image">
                        <img src="//placehold.it/90x90" alt="">
                    </div>
                </div>

                <div class="media_body">
                    <div class="product-name">
                        Product Name
                    </div>
                </div>
            </div>
        </a>

        <button type="button" class="button button--s typeahead_button" href="#">
            Add To Cart
        </button>
    </div>
</div>

<div class="dd-heading">State: Groups</div>

<div class="typeahead">
    <div class="typeahead_group">
        <h2 class="typeahead_title">
            Products
        </h2>

        <div class="typeahead_item">
            <a class="typeahead_link typeahead_link--has-button" href="#">
                <div class="media media--center">
                    <div class="media_item">
                        <div class="typeahead_image product-image">
                            <img src="//placehold.it/90x90" alt="">
                        </div>
                    </div>

                    <div class="media_body">
                        <div class="product-name">
                            Product Name
                        </div>
                    </div>
                </div>
            </a>

            <button type="button" class="button button--s typeahead_button" href="#">
                Add To Cart
            </button>
        </div>

        <div class="typeahead_item">
            <a class="typeahead_link typeahead_link--has-button" href="#">
                <div class="media media--center">
                    <div class="media_item">
                        <div class="typeahead_image product-image">
                            <img src="//placehold.it/90x90" alt="">
                        </div>
                    </div>

                    <div class="media_body">
                        <div class="product-name">
                            Product Name
                        </div>
                    </div>
                </div>
            </a>

            <button type="button" class="button button--s typeahead_button" href="#">
                Add To Cart
            </button>
        </div>
    </div>

    <div class="typeahead_group">
        <h2 class="typeahead_title">
            Related Searches
        </h2>

        <div class="typeahead_item">
            <a class="typeahead_link" href="#">
                Apple
            </a>
        </div>

        <div class="typeahead_item">
            <a class="typeahead_link" href="#">
                Banana
            </a>
        </div>

        <div class="typeahead_item">
            <a class="typeahead_link" href="#">
                Orange
            </a>
        </div>
    </div>
</div>
