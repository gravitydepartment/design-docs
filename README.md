[![Gravity Department](https://cdn.gravitydept.com/github/repo-header.png)](https://gravitydept.com/)

# GravDept Design Docs

Document your design system and pattern library using Markdown in a small LAMP application.

## Dependencies

- PHP
- Apache

## Setup

### URL path

See the `.htaccess` file. The default configuration uses a directory like:

```
domain.com/design/
```

When using a subdomain, you can remove the directoy path from each `RewriteRule`.

### Configuration

See `config.php` and make changes for your environment.

## Build system

A Gulp-based build system generates the assets required by Design Docs. These can be committed once, and will rarely change unless you customize the Design Docs application.

## Usage

In the `content` folder, add folders and Markdown files.

## Issues

[Submit issues](https://github.com/gravitydepartment/design-docs/issues) on GitHub.
