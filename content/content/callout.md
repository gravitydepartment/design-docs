---
name: Callout
enabled: true
wrappers: container
description: >
    The `callout` component associates image and text content. On large screens they're adjacent. On small screens they're stacked and the image is always on top.

    ### Assets

    <table class="table">
        <tr>
            <th>Asset Size</th>
            <td>600 x 300</td>
        </tr>

        <tr>
            <th>Rendered Size</th>
            <td>600 x 300 (@1x)</td>
        </tr>

        <tr>
            <th>File Type</th>
            <td>JPG or PNG</td>
        </tr>
    </table>

    ### Modifier: Flip

    The `callout--flip` modifier swaps the elements (text first) on large screens.
---

<div class="dd-heading">Default</div>

<div class="callout">
    <div class="callout_media">
        <img src="//placehold.it/600x300" alt="#">
    </div>

    <div class="callout_body">
        <h2>Headline Title</h2>

        <p>The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.</p>

        <p>The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.</p>

        <div class="action-group">
            <a class="button" href="#">
                More Info
            </a>
        </div>
    </div>
</div>

<div class="dd-heading">Modifier: Flip</div>

<div class="callout callout--flip">
    <div class="callout_media">
        <img src="//placehold.it/600x300" alt="#">
    </div>

    <div class="callout_body">
        <h2>Headline Title</h2>

        <p>The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.</p>

        <p>The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.</p>

        <div class="action-group">
            <a class="button" href="#">
                More Info
            </a>
        </div>
    </div>
</div>
