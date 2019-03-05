---
name: Section
enabled: true
wrappers: container
description: >
    The `section` component has no content itself. Use this to surround other content components to design the transition between them. There are modifiers for spacing, dividers, and backgrounds.

    Sections are intended to stack one after another. It automatically zeroes the `margin-bottom` on the last direct child element.

    ### Modifier: background color

    See [background](/design/patterns/utility/background) utility classes.

    ### Modifier: background image

    See [background](/design/patterns/utility/background) utility classes.

    ### Modifier: Padding

    <table class="table">
        <tr>
            <th>Class</th>
            <th>Effect</th>
        </tr>

        <tr>
            <td><code>section--p-x</code></td>
            <td>Add <code>padding-left</code> and <code>padding-right</code> to offset inner content.</td>
        </tr>
    </table>

    ### Modifier: Margin

    <table class="table">
        <tr>
            <th>Class</th>
            <th>Effect</th>
        </tr>

        <tr>
            <td><code>section--m-t</code></td>
            <td>Add <code>margin-top</code> equivalent to <code>padding-top</code>.</td>
        </tr>

        <tr>
            <td><code>section--m-b</code></td>
            <td>Add <code>margin-bottom</code> equivalent to <code>padding-bottom</code>.</td>
        </tr>
    </table>
---

<div class="dd-heading">Default</div>

<div class="demo">Something before (to see how margins apply).</div>

<div class="section">
    <h2>Some section</h2>

    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="demo">Something after (to see how margins apply).</div>

<br>

<div class="dd-heading">Context: Section + HR + Section</div>

<div class="demo">Something before (to see how margins apply).</div>

<div class="section">
    <h2>The first section</h2>

    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<hr class="m-b-0">

<div class="section">
    <h2>Another section follows</h2>

    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="demo">Something after (to see how margins apply).</div>

<br>

<div class="dd-heading">Modifier: Background Color</div>

<div class="section background-blue text-contrast-base">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="section background-gray-dark text-contrast-base">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="section background-gray-light">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="section background-red text-contrast-base">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<br>

<div class="dd-heading">Modifier: Background Image</div>

<div class="section background-image" style="background-image: url(//placehold.it/400x100/99c/0ff);">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<br>

<div class="dd-heading">Modifier: Padding X</div>

<div class="section section--p-x background-gray-light">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<br>

<div class="dd-heading">Modifier: Margin Top</div>

<div class="demo">Something before (to see how margins apply).</div>

<div class="section section--p-x section--m-t background-gray-light">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="dd-heading">Modifier: Margin Bottom</div>

<div class="section section--p-x section--m-b background-gray-light">
    <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
</div>

<div class="demo">Something after (to see how margins apply).</div>

<style>
    .demo {
        background-color: gold;
    }
</style>
