---
name: Toggle
enabled: true
wrappers: container
description: >
    The `toggle` component uses `data-toggle` attributes to show/hide content.

    Clicking the `data-toggle-trigger` element will show/hide the `data-toggle-trigger` element. Both elements must have a shared ancestor element.

    ### State

    The default state is hidden.

    <table class="table">
        <tr>
            <th>Hide Initially</th>

            <td>
                <code>data-toggle</code><br>
                <code>data-toggle="hide"</code>
            </td>
        </tr>

        <tr>
            <th>Show Initially</th>
            <td><code>data-toggle="show"</code></td>
        </tr>
    </table>
---

<div class="dd-heading">State: Hide Initially</div>

<div data-toggle="hide">
    <p>
        <button type="button" class="button" data-toggle-trigger>
            Trigger
        </button>
    </p>

    <div data-toggle-target>
        <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
    </div>
</div>

<div class="dd-heading">State: Show Initially</div>

<div data-toggle="show">
    <p>
        <button type="button" class="button" data-toggle-trigger>
            Trigger
        </button>
    </p>

    <div data-toggle-target>
        <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
    </div>
</div>

<div class="dd-heading">State: Box with Toggle</div>

<p>See <a href="/design/patterns/content/box--toggle/">Box (--toggle)</a> component.</p>
