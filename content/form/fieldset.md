---
name: Fieldset
enabled: true
wrappers: container
description: >
    The `fieldset` component groups inputs using `legend` as a heading.
---

<form class="form">
    <div class="fieldset">
        <h2 class="legend">Legend</h2>

        <div class="field">
            <label for="text-1">Text</label>

            <div class="field_input">
                <input type="text" class="input-text" id="text-1" name="text-1">
            </div>
        </div>
    </div>

    <div class="fieldset">
        <h2 class="legend">Legend</h2>

        <div class="field">
            <label for="text-2">Text</label>

            <div class="field_input">
                <input type="text" class="input-text" id="text-2" name="text-2">
            </div>
        </div>
    </div>
</form>
