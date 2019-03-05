---
name: Table (--border)
enabled: true
wrappers: container
description: >
    The `table--border` modifier adds borders around the entire table and between columns.

    Use this for great clarity in data-heavy tables.
---

<table class="table table--border">
    <thead>
        <tr>
            <th>Order #</th>
            <th>Date</th>
            <th>Recipient</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <td colspan="5">
                <a href="#" class="button button--xs button--secondary">Some Action</a>
            </td>
        </tr>
    </tfoot>

    <tbody>
        <tr>
            <td>100000133</td>
            <td>May 28, 2012</td>
            <td>Elliot Smith</td>
            <td>$2,950.75</td>
            <td>Pending</td>
        </tr>

        <tr>
            <td>100000131</td>
            <td>Nov 13, 2011</td>
            <td>Bruce Wayne</td>
            <td>$80.76</td>
            <td>Pending</td>
        </tr>

        <tr>
            <td>100000108</td>
            <td>Sep 9, 2011</td>
            <td>Bruce Wayne</td>
            <td>$62.51</td>
            <td>Pending</td>
        </tr>
    </tbody>
</table>
