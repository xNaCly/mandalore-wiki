# Mandalore Wiki

This repo was created during the 'Webengineering' module in the second semester of university. Task was to create a
website about a real topic using php, css and html. Several tags and other stuff were required
[see here](https://github.com/xNaCly/mandalore-wiki/issues/6).

Devs:
 - https://github.com/derPhilosoff
 - https://github.com/Mar-Kno
 - https://github.com/ellirynbw
 - https://github.com/noschnosch

## Start locally

1. cloning

```bash
git clone https://github.com/xNaCly/mandalore-wiki.git
```

2. get up and running

-   Apache
    -   install
    -   enable php and rewrite module in apache config dir (maybe installing php is required
        [link](https://www.serverlab.ca/tutorials/linux/web-servers-linux/installing-php-for-apache-on-ubuntu/))
    -   add a symlink in the `DocumentRoot` to the `pwd` of the cloned repo
    -   add `AllowOverride All` into the DocumentRoot configuration
-   XAMPP (windows)
    -   install, open apache config
    -   go into the above cloned directory, run `cd` in a terminal in the directory and copy the output
    -   search for `DocumentRoot` and replace the path in `"` with the output from the step above
    -   in the `DocumentRoot` section replace `AllowOverride None` with `AllowOverride All`
    -   search for `#LoadModule rewrite_module` and replace the `#` at the start of the line

## Contribute

-   Write readable, correct and simple code (**K**eep **I**t **S**imple and **S**tupid)
-   Comment incomprehensible code
-   Comply with the Conventional Commit Messages [Standard](https://www.conventionalcommits.org/en/v1.0.0/) (in commits
    and pr's)
-   Avoid merge commits

### Contribution flow:

1. think of a change
2. fork the repository
3. make changes
4. compare changes and make a pull request
5. await review and merge
