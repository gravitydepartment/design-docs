---
name: Simple Table
enabled: true
wrappers: container
description: >
    The `simple-table` component has almost no styling.

    Use this for aligning text in columns like `property: value` pairs.
---

<div class="dd-heading">State: Header Column</div>

<table class="simple-table">
    <tr>
        <th>Order #</th>
        <td>100000133</td>
    </tr>

    <tr>
        <th>Date</th>
        <td>1970–01–01</td>
    </tr>

    <tr>
        <th>Status</th>
        <td>Complete</td>
    </tr>
</table>

<div class="dd-heading">State: Header Row</div>

<table class="simple-table">
    <tr>
        <th>Order #</th>
        <th>Status</th>
    </tr>

    <tr>
        <td>100000133</td>
        <td>Complete</td>
    </tr>

    <tr>
        <td>100000131</td>
        <td>Pending</td>
    </tr>

    <tr>
        <td>100000108</td>
        <td>Pending</td>
    </tr>
</table>
